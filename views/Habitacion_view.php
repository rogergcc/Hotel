<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <title>Lista de Usuarios</title>
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <link href="https://fonts.googleapis.com/css?family=Oswald|Source+Sans+Pro" rel="stylesheet">
          <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="css/materialize.css" media="screen" type="text/css">
        <style type="text/css">
          @media only screen and (min-width: 601px){
            .row .col.m7 {
                width: 40%;
                //margin-left: auto;
                //left: auto;
                //right: auto;
            }}
        </style>
    </head>
    <body>
        <table class="highlight responsive-table centered striped bordered">
            <thead>
                <tr>
                    <th data-field="id">Numero Hab</th>
                    <th data-field="id">Descripcion de Hab</th>
                    <th data-field="id">Nombre Hab.</th>
                    <th data-field="id">Precio Hab.</th>
                    <th data-field="id">Capacidad </th>
                    <th data-field="id">Estado </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($Habitaciones as $habitacion): ?>
                <tr>
                    <td><?php echo $habitacion['num_habitacion']; ?></td>
                    <td><?php echo $habitacion['desc_habitacion']; ?></td>
                    <td><?php echo $habitacion['nomb_habitacion']; ?></td>
                    <td><?php echo $habitacion['precio_habitacion']; ?></td>
                    <td><?php echo $habitacion['capacidad_habitacion']; ?></td>
                    <td><?php echo $habitacion['nomb_estado']; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
          <div class="row">
         <?php foreach ($Habitaciones as $habitacion): ?>
         <div class="col s12 m6 l3">
         
          <h2 class="header">Hab N°<?php echo $habitacion['num_habitacion']; ?></h2>
          <div class="card horizontal">
            <div class="card-image">
              <img src="images/habitacion_privada_verde.jpg">
            </div>
            <div class="card-stacked">
              <div class="card-content">
                <p>$<?php echo $habitacion['precio_habitacion']; ?></p>
                <p style="font-style: italic;"><?php echo $habitacion['desc_habitacion']; ?></p>
                <p style="font-weight: bold;">Capacidad: <?php echo $habitacion['capacidad_habitacion']; ?></p>
                <p><?php echo $habitacion['nomb_estado']; ?></p>
              </div>
              <div class="card-action">
                <a href="#"><?php echo $habitacion['nomb_habitacion']; ?></a>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
        </div>

        <div class="row">
          <?php foreach ($Habitaciones as $habitacion):?>
          <div class="col s12 m4 l3">
            <div class="card blue-grey darken-1">
              <div class="card-content white-text">
                <span class="card-title"><?php echo $habitacion['num_habitacion']; ?></span>
                <p><?php echo $habitacion['desc_habitacion']; ?></p>
              </div>
              <div class="card-action">
                <i class="small material-icons">room</i><a href="#"><?php echo $habitacion['nomb_habitacion']; ?></a>
                <a href="#"><?php echo $habitacion['precio_habitacion']; ?></a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </body>
</html>
