<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <link rel="stylesheet" href="style_admin.css" />
    <link rel="icon" href="img/logo.ico" />
    <title>Admin panel - Réservations</title>
  </head>
  <div id="screen">
  <body>
  <div class="header">
    <div class="navigation-bar">
      <ul>
        <li><a class="active" href="admin_consult_reservations.php">Reservations</a></li>
        <li><a href="index.html"><img src="img/logo.png" alt="Home" /></a></li>
        <li><a class="normal" href="admin_consult_comments.php">Commentaires</a></li>
      </ul>
    </div>
	</div>
  <div class="container">
    <div class="section_name">
        <h2>Réservations</h2>
    </div>

    <table border="1">
      <tr class="trtop">
        <td>Réservation #</td>
        <td>Nom</td>
        <td>Prénom</td>
        <td>Téléphone</td>
        <td>Nombre de personnes</td>
        <td>Date</td>
        <td>Service</td>
        <td>Message</td>
      </tr>

    <?php

    include "dbConn.php"; // Using database connection file here

    $records = mysqli_query($db,"select * from tbl_reservation"); // fetch data from database

    while($data = mysqli_fetch_array($records))
    {
    ?>
      <tr>
        <td><?php echo $data['id']; ?></td>
        <td><?php echo $data['Nom']; ?></td>
        <td><?php echo $data['Prénom']; ?></td>
        <td><?php echo $data['Numéro']; ?></td>
        <td><?php echo $data['Nombre']; ?></td>
        <td><?php echo $data['Date']; ?></td>
        <td><?php echo $data['Service']; ?></td>
        <td><?php echo $data['Message']; ?></td>
      </tr>	
    <?php
    }
    ?>
    </table>

    <?php mysqli_close($db); // Close connection ?>

  </div>
  </body>
  </div>
</html>