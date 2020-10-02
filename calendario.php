<?php  include_once 'includes/templates/header.php'; ?>



    <section class="seccion contenedor">
        <h2>Calendarios de eventos</h2>

        <?php 
        try {
            require_once('includes/funciones/bd_conexion.php');
            $sql = " SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, nombre_invitado, apellido_invitado ";
            $sql .=  " FROM eventos ";
            $sql .= " INNER JOIN categoria_evento ";
            $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
            $sql .= " INNER JOIN invitados ";
            $sql .= " ON eventos.id_inv = invitados.invitado_id ";
            $sql .= " ORDER_BY evento_id ";
            $resultado = mysqli_query($conn,$sql);
        }
        catch(\Exception $e) {
            echo $e->getMessage();
        }
        
        
        ?>
        <div class="calendario">
            <?php 
            $calendario = array ();
            $fecha = $eventos['fecha_evento'];
            while($eventos = $resultado->fetch_assoc()) {
              
                $evento = array(
                    'titulo' => $eventos['nombre_evento'],
                    'fecha' => $eventos['fecha_evento'],
                    'hora' => $eventos['hora_evento'],
                    'categoria' => $eventos['cat_evento'],
                    'invitado' => $eventos['nombre_invitado'] . " " . 
                    $eventos['apellido_invitado']

                );
                $calendario[$fecha][] = $evento;

             }
           ?>
           <pre>
               <?php var_dump($calendario); ?>
           </pre>


        </div>
        <?php
            $conn->close();
        ?> 
    </section>


    <?php  include_once 'includes/templates/footer.php'; ?>