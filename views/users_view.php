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
                    <th data-field="id">Nombres</th>
                    <th data-field="id">Email</th>
                    <th data-field="id">Telefono</th>
                    <th data-field="id">Creación</th>
                    <th data-field="id">Modificación</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $user): ?>
                <tr>
                    <td><?php echo $user['name']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                    <td><?php echo $user['phone']; ?></td>
                    <td><?php echo $user['created']; ?></td>
                    <td><?php echo $user['modified']; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <ul class="collection">
          <?php foreach ($data as $user):?>
          <li class="collection-item avatar">
            <img src="images/yuna.jpg" alt="" class="circle">
            <span class="title"><?php echo $user['name']; ?></span>
            <p><?php echo $user['email']; ?><br>
               <?php echo $user['phone']; ?>
            </p>
            <a href="#!" class="secondary-content"><i class="material-icons"><?php echo $user['created']; ?></i></a>
          </li>
          <?php endforeach; ?>
        </ul>

        <div class="row">
          <?php foreach ($data as $user):?>
          <div class="col s12 m6">
            <div class="card blue-grey darken-1">
              <div class="card-content white-text">
                <span class="card-title"><?php echo $user['name']; ?></span>
                <p><?php echo $user['email']; ?></p>
              </div>
              <div class="card-action">
                <a href="#"><?php echo $user['phone']; ?></a>
                <a href="#"><?php echo $user['created']; ?></a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </body>
</html>
