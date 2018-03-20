<html>
<head>

      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css">

<title>Person Details</title>

<?php
include('assets/database.php');


$id=$_GET['']



?>
</head>

<body class="purple lighten-2">

  <div class="container">
    <div class="person">
      <h1 id="ppname" class="animated bounceIn">Nikhil Sharma</h1>
      <h2 id="add" class="animated bounceInLeft">K-1099, Jahangir Puri, Delhi-110033</h2>
      <h2 id="add" class="animated bounceInRight">+918802387533</h2>

      <table class="responsive-table animated fadeInUp">
        <thead>
          <tr>
              <th>Date</th>
              <th>Disease</th>
              <th>Prescription</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Alvin</td>
            <td>Eclair</td>
            <td>$0.87</td>
          </tr>
          <tr>
            <td>Alan</td>
            <td>Jellybean</td>
            <td>$3.76</td>
          </tr>
          <tr>
            <td>Jonathan</td>
            <td>Lollipop</td>
            <td>$7.00</td>
          </tr>
        </tbody>
      </table>

    </div>
  </div>

</body>
</html>
