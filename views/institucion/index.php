<main>
        <section class="container my-5">
            <h2 class="text-center mb-5 titulo-principal">Instituciones</h2>
            <div class="table-responsive">
                <table class="tabla-institucion">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre de la institucion</th>
                            <th scope="col">Logo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($instituciones as $institucion) :
                                echo "<tr>";
                                echo '<th scope="row">'.$institucion['id_institucion'].'</th>';
                                echo "<td>".$institucion['institucion']."</td>";
                                echo '<td><img class="imagen-institucion" src="images/institucion/' .$institucion['logotipo']. '" alt="institucion" /></td>';
                                echo "</tr>";
                            endforeach;
                        ?>
                    </tbody>
                </table>
            </div>
        </section>
    </main>