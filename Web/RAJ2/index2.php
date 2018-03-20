<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>DigiHos</title>
    <!--Import materialize.css-->
    <!-- Compiled and minified CSS -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  <link rel="stylesheet" href="css/style.css">

 <!-- Compiled and minified JavaScript -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>



      <?php
      session_start();
  include('assets/database.php');
  $user=$_SESSION['userN'];
  echo "welcome ".$user;
  ?>
  </head>

  <body>


    <div class="maindiv">
      <div id="navi" class="nav-content">
        <ul class="tabs tabs-transparent">
          <li class="tab"><a class="active" href="#test1">Monday</a></li>
          <li class="tab"><a href="#test2">Tuesday</a></li>
          <li class="tab"><a href="#test3">Wednesday</a></li>
          <li class="tab"><a href="#test4">Thursday</a></li>
          <li class="tab"><a href="#test5">Friday</a></li>

        </ul>
      </div>
      <div class="dash">
        <div id="test1" class="col s12">
          <table class="highlight">
            <thead>
              <tr>
                <th>Patient Name</th>
                <th>Id</th>
                <th>Medication</th>
                <th>Appointment No.</th>
                <th>       </th>
              </tr>
            </thead>
            <tbody>
            
                <?php

                $sql="SELECT * FROM `patient`,`appoinment` WHERE id=pid and day='mon'";
                $result1=$con->query($sql);
                while($row=$result1->fetch_assoc()):
                ?>
                <tr>
                <td><a href="person.php?id=<?php echo $row['id']?>"><?php echo $row['patient_name'];?></a></td>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['Medi'];?></td>
                <td><?php echo $row['Appid'];?></td>
                <td><a class="btn-floating btn-small waves-effect waves-light red"><i class="material-icons">delete</i></a>
              </td>
                 </tr>
              <?php endwhile; ?>
         
          </tbody>
        </table>
      </div>

        <div class="dash">
        <div id="test2" class="col s12">
          <table class="highlight">
            <thead>
              <tr>
                <th>Patient Name</th>
                <th>Id</th>
                <th>Medication</th>
                <th>Appointment No.</th>
                <th>       </th>
              </tr>
            </thead>
            <tbody>
            
                <?php
                $sql2="SELECT * FROM `patient`,`appoinment` WHERE id=pid and day='tue'";
                $result2=$con->query($sql2);
                while($row2=$result2->fetch_assoc()):
                ?>
                  <tr>
                <td><a href="person.php?id=<?php echo $row2['id']?>"><?php echo $row2['patient_name'];?></a></td>
                <td><?php echo $row2['id'];?></td>
                <td><?php echo $row2['Medi'];?></td>
                <td><?php echo $row2['Appid'];?></td>
                <td><a class="btn-floating btn-small waves-effect waves-light red"><i class="material-icons">delete</i></a>
              </td>
            </tr>
              <?php endwhile; ?>
         
          </tbody>
        </table>
      </div>

   <div class="dash">
        <div id="test3" class="col s12">
          <table class="highlight">
            <thead>
              <tr>
                <th>Patient Name</th>
                <th>Id</th>
                <th>Medication</th>
                <th>Appointment No.</th>
                <th>       </th>
              </tr>
            </thead>
            <tbody>
            
                <?php
                $sql3="SELECT * FROM `patient`,`appoinment` WHERE id=pid and day='wed'";
                $result3=$con->query($sql3);
                while($row3=$result3->fetch_assoc()):
                ?>
                 <tr>
                <td><a href="person.php?id=<?php echo $row3['id']?>"><?php echo $row3['patient_name'];?></a></td>
                <td><?php echo $row3['id'];?></td>
                <td><?php echo $row3['Medi'];?></td>
                <td><?php echo $row3['Appid'];?></td>
                <td><a class="btn-floating btn-small waves-effect waves-light red"><i class="material-icons">delete</i></a>
              </td>
            </tr>
              <?php endwhile; ?>
            </tr>
          </tbody>
        </table>
      </div>
         <div class="dash">
        <div id="test4" class="col s12">
          <table class="highlight">
            <thead>
              <tr>
                <th>Patient Name</th>
                <th>Id</th>
                <th>Medication</th>
                <th>Appointment No.</th>
                <th>       </th>
              </tr>
            </thead>
            <tbody>
              
                <?php
                $sql4="SELECT * FROM `patient`,`appoinment` WHERE id=pid and day='thus'";
                $result4=$con->query($sql4);
                while($row4=$result4->fetch_assoc()):
                ?>
                <tr>
                <td><a href="person.php?id=<?php echo $row4['id']?>"><?php echo $row4['patient_name'];?></a></td>
                <td><?php echo $row4['id'];?></td>
                <td><?php echo $row4['Medi'];?></td>
                <td><?php echo $row4['Appid'];?></td>
                <td><a class="btn-floating btn-small waves-effect waves-light red"><i class="material-icons">delete</i></a>
              </td>
                </tr>
              <?php endwhile; ?>
          
          </tbody>
        </table>
      </div>

         <div class="dash">
        <div id="test5" class="col s12">
          <table class="highlight">
            <thead>
              <tr>
                <th>Patient Name</th>
                <th>Id</th>
                <th>Medication</th>
                <th>Appointment No.</th>
                <th>       </th>
              </tr>
            </thead>
            <tbody>
             
                <?php
                $sql5="SELECT * FROM `patient`,`appoinment` WHERE id=pid and day='fri'";
                $result5=$con->query($sql5);
                while($row5=$result5->fetch_assoc()):
                ?>
                <tr>
                <td><a href="person.php?id=<?php echo $row['id']?>"><?php echo $row['patient_name'];?></a></td>
                <td><?php echo $row5['id'];?></td>
                <td><?php echo $row5['Medi'];?></td>
                <td><?php echo $row5['Appid'];?></td>
                <td><a class="btn-floating btn-small waves-effect waves-light red"><i class="material-icons">delete</i></a>
              </td>
                  </tr>
              <?php endwhile; ?>
        
          </tbody>
        </table>
      </div>
          
    </div>













    <ul id="slide-out" class="side-nav fixed">
     <li><div class="user-view">

       <div>
         <center>
          <img class="circle" src="doc.jpg">
           <span class="name center" id="pname"><?php  echo $user; ?></span>
           <span class="email black-text center" id="em">emailid</span>
          </center>
</div>
        </li>
         <li>

         </li>
         <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Services<i class="material-icons right">arrow_drop_down</i></a></li>
         <ul id='dropdown1' class='dropdown-content'>

            <li><a href="#!">
      <i class="material-icons">event</i></i>
            Appointments</a></li>
          </ul>


       <li><a class="dropdown-button" href="#!" data-activates="dropdown2">Settings<i class="material-icons right">arrow_drop_down</i></a></li>
       <ul id='dropdown2' class='dropdown-content'>
          <li><a href="#!">
      <i class="material-icons">info</i>
            Info</a></li>
          <li><a href="#!">
      <i class="material-icons">exit_to_app</i>
            LogOut</a></li>
        </ul>

        <div class="input-field details white-text">
          <input id="icon_prefix" type="text" class="validate">
          <label for="icon_prefix" style="color:white;">Enter Bmi</label>

<a class="btn-large waves-effect waves-light red btn tooltipped" data-position="bottom" data-delay0="50" data-tooltip="Health Risk" onclick="graph.html">Calculate Health Risk</a>



        </div>


       </div>




    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<script>

  $('.dropdown-button').dropdown({
      inDuration: 300,
      outDuration: 225,
      constrainWidth: false, // Does not change width of dropdown to that of the activator
      hover: true, // Activate on hover
      gutter: 20, // Spacing from edge
      belowOrigin: true, // Displays dropdown below the button
      alignment: 'left', // Displays dropdown with edge aligned to the left of button
      stopPropagation: false // Stops event propagation
    }
  );
        </script>
        <script>
        function myFunction() {
document.getElementById("graph").style.display = "block";
}

        </script>
<script>


(function($){
  $(function(){

    $('.button-collapse').sideNav();

  }); // end of document ready
})(jQuery);</script>
    <script>
    Materialize.scrollFire(options);</script>
  </body>
</html>
