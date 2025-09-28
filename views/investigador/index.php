   <main>
        <section class="container my-5">
            <h2 class="text-center mb-5 titulo-principal">Miembros</h2>
            <div class="table-responsive">
                <table class="tabla-miembros">
                    <thead>
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Institucion</th>
                            <th scope="col">Semblanza</th>
                            <th scope="col">Fotografia</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($investigadores as $investigador) :
                                echo "<tr>";
                                echo "<td>".$investigador['primer_apellido']." ".$investigador['segundo_apellido']." ".$investigador['nombre']."</td>";
                                echo "<td>".$investigador['institucion']."</td>";
                                echo "<td>".$investigador['semblanza']."</td>";
                                echo '<td><img class="imagen-miembro" src="images/investigadores/' .$investigador['fotografia']. '" alt="investigador" /></td>'; '" alt="investigador" /></td>';
                                echo "</tr>";
                            endforeach;
                        ?>
                    </tbody>
                </table>
            </div>
        </section>
    </main>