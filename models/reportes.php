<?php
use Spipu\Html2Pdf\Html2Pdf;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Exception\ExceptionFormatter;
use Box\Spout\Writer\Common\Creator\WriterEntityFactory;
use Box\Spout\Common\Entity\Row;
require_once("sistema.php");

class Reportes extends Sistema {

    var $content;

    function __construct() {
        $this -> content = ob_get_clean();
    }

    function InstitucionesInvestigadores() {
        require_once(__DIR__ . '/../vendor/autoload.php');
        $institucion = new Institucion();
        $data = $institucion -> reporteInstitucionesInvestigadores();
        $html2pdf = new Html2Pdf('P', 'A4', 'fr');
        $this->content = "
        <table style='width: 100%;'>
            <tr>
                <td style='width: 70%; text-align: center; vertical-align: middle;'>
                    <h1 style='color: #0B4074;'>Red de Investigadores</h1>
                </td>
                
                <td style='width: 30%; text-align: center; vertical-align: middle;'>
                    <img src='../images/inicio/logo.png' style='width: 100px;'>
                </td>
            </tr>
        </table>

        <table align='center' style='width: 90%; border-collapse: collapse; margin-top: 20px;'>
        
            <thead>
                <tr>
                    <th style='border: 1px solid #000; padding: 8px; background-color: #4CAF50; color: white; text-align: center'>Institución</th>
                    <th style='border: 1px solid #000; padding: 8px; background-color: #4CAF50; color: white; text-align: center'>Numero de Investigadores</th>
                </tr>
            </thead>
            <tbody>
        ";

        foreach ($data as $institucion) :
            $this->content .= "
                <tr>
                    <td style='border: 1px solid #000; padding: 8px; text-align: center'>" . $institucion['institucion'] . "</td>
                    <td style='border: 1px solid #000; padding: 8px; text-align: center'>" . $institucion['cantidad'] . "</td>
                </tr>
            ";
        endforeach;

        $this->content .= "
            </tbody>
        </table>
        ";

        $html2pdf->writeHTML($this->content);
        $html2pdf->output('reporteInstituciones.pdf');
    }

    function InstitucionesExcel($nombre){
        require_once(__DIR__ . '/../vendor/autoload.php');

        $writer = WriterEntityFactory::createXLSXWriter();
        // $writer = WriterEntityFactory::createODSWriter();
        // $writer = WriterEntityFactory::createCSVWriter();

        $filePath = __DIR__.'/../panel/downloads/'.$nombre.'.xlsx';
        $writer->openToFile($filePath); // write data to a file or to a PHP stream
        //$writer->openToBrowser($fileName); // stream data directly to the browser

        $cells = [
            WriterEntityFactory::createCell('Instituciones'),
            WriterEntityFactory::createCell('Cantidad de Investigadores'),
            
        ];

        /** add a row at a time */
        $singleRow = WriterEntityFactory::createRow($cells);
        $writer->addRow($singleRow);

        $institucion = new Institucion();
        $data = $institucion -> reporteInstitucionesInvestigadores();

        foreach ($data as $institucion) :
            $cells = [
                WriterEntityFactory::createCell($institucion['institucion']),
                WriterEntityFactory::createCell($institucion['cantidad']),
            ];
            
            $singleRow = WriterEntityFactory::createRow($cells);
            $writer->addRow($singleRow);
        endforeach;

        $writer->close();

        if (!file_exists($filePath) || !is_readable($filePath)) {
            http_response_code(404);
            die('Error: El archivo no fue encontrado o no se puede leer.');
        }

        if (ob_get_level()) {
            ob_end_clean();
        }

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');

        header('Content-Disposition: attachment; filename="' . basename($nombre) . '"');

        header('Content-Length: ' . filesize($filePath));

        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');

        readfile($filePath);

        exit;

    }

}
?>