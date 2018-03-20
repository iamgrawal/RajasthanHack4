<!DOCTYPE html>
<html>
  <head>
 	<title>DigiHos</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/animate.css">


    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>




    <?php


		session_start();

		include('assets/database.php');
		$username="";
		$password="";
		$error="";   
		function test_input($data)
		{
		$data=htmlspecialchars($data);
		$data=stripslashes($data);
		$data=trim($data);
		return $data;
		}
		$username=" ";
		$password=" ";
		if(isset($_POST['submit']))
		{
			$username=test_input($_POST['user']);
			$password=MD5(test_input($_POST['pass']));
			$sql="SELECT * FROM admin WHERE username='$username' AND password ='$password'";
			$result=$con->query($sql);
			$row=$result->fetch_assoc();
			$count=$result->num_rows;
			$name=$row['name'];
			echo $count;
			if($count==1)
			{
				$_SESSION['userN']=$name;
			header('location:index2.php');
			exit();
			}
			else
			{
				echo "error";
			}
		}
		?>
  </head>

  <body style="background-color:#42A5F5">
			<div class="clearfix" style="height:100px;"></div>
				<div class="container">
					<div class="row">
						<div class="col s5 offset-s5 ">
							<img class="animated jackInTheBox" src="logo.png" />
						</div>
						<div class="clearfix" style="height=100px;">
							<div>
								<center>
										<pre class="animated jackInTheBox"><b>   DigiHos.</b></pre>
								</center>

							</div>
						</div>
						<br />
						<div class="col s5 offset-s4 animated jello">

						<form method="post">
					<div class="input-field yellow-text ">
						<i class="material-icons prefix">person_outline</i>
						<input id="uname" type="text" name="user"  required placeholder="username">
					</div>
					<div class="input-field yellow-text">
						<i class="material-icons prefix">lock_outline</i>
						<input id="password" type="password" name="pass" requied placeholder="password">
					</div>
					<div >
						<center>
						<input type="submit"  class="btn btn-flat white-text "  name="submit">
						</center>
					</div>
				</form>
						</div>
					</div>

				</div>

	  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
  </body>
</html>
