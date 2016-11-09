<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <title>Lista de Usuarios</title>
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <link href="https://fonts.googleapis.com/css?family=Oswald|Source+Sans+Pro" rel="stylesheet">
        <link rel="stylesheet" href="css/materialize.css" media="screen" type="text/css">
    </head>
    <body>
        <table class="highlight">
            <thead>
                <tr>
                    <th data-field="id">Id Hab</th>
                    <th data-field="id">Numero Hab</th>
                    <th data-field="id">Nro Piso</th>
                    <th data-field="id">Descripcion de Hab.</th>
                    <th data-field="id">Usuario </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($Habitaciones as $habitacion): ?>
                <tr>
                    <td><?php echo $habitacion['id_habitacion']; ?></td>
                    <td><?php echo $habitacion['num_habitacion']; ?></td>
                    <td><?php echo $habitacion['nro_piso']; ?></td>
                    <td><?php echo $habitacion['desc_habitacion']; ?></td>
                    <td><?php echo $habitacion['usu_mod']; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <ul class="collection ">
          <?php foreach ($Habitaciones as $habitacion):?>
          <li class="collection-item avatar">
            <img src="images/yuna.jpg" alt="" class="circle">
            <span class="title"><?php echo $habitacion['id_habitacion']; ?></span>
            <p><?php echo $habitacion['num_habitacion']; ?><br>
               <?php echo $habitacion['nro_piso']; ?>
            </p>
            <a href="#!" class="secondary-content"><i class="material-icons"><?php echo $habitacion['desc_habitacion']; ?></i></a>
          </li>
          <?php endforeach; ?>
        </ul>

        <div class="row">
          <?php foreach ($Habitaciones as $habitacion):?>
          <div class="col s12 m4 l3">
            <div class="card blue-grey darken-1">
              <div class="card-content white-text">
                <span class="card-title"><?php echo $habitacion['id_habitacion']; ?></span>
                <p><?php echo $habitacion['num_habitacion']; ?></p>
              </div>
              <div class="card-action">
                <a href="#"><?php echo $habitacion['nro_piso']; ?></a>
                <a href="#"><?php echo $habitacion['desc_habitacion']; ?></a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </body>
</html>
