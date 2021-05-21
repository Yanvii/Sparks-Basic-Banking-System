<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="table.css">
    <link rel="stylesheet" type="text/css" href="navbar.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Cardo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noticia+Text:wght@700&display=swap" rel="stylesheet">
    <style type="text/css">
      button{
        transition: 1.5s;
      }
      button:hover{
        background-color:green;
        color: white;
      }
      body{
        background-color: #bbbbbb;
      }
    </style>
</head>

<body>
<?php
 $conn = mysqli_connect('localhost','root','','website');
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>

<?php
  include 'navbar.php';
?>
<div class="container">
        <h2 class="text-center pt-4" style="font-family:Noticia Text;">Transfer Money</h2>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered">
                        <thead>
                            <tr>
                            <th scope="col" class="text-center py-2">Id</th>
                            <th scope="col" class="text-center py-2">Name</th>
                            <th scope="col" class="text-center py-2">E-Mail</th>
                            <th scope="col" class="text-center py-2">Balance</th>
                            <th scope="col" class="text-center py-2">Transfer</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr>

                        <td class="py-2"><font color="#393e46"><?php echo $rows['id'] ?></font></td>
                        <td class="py-2"><font color="#393e46"><?php echo $rows['name']?></font></td>
                        <td class="py-2"><font color="#393e46"><?php echo $rows['email']?></font></td>
                        <td class="py-2"><font color="#393e46"><?php echo $rows['balance']?></font></td>
                        <td><a href="selectuser.php?id= <?php echo $rows['id'] ;?>"> <button class="trans">Transact</button></a></td>

                    </tr>
                <?php
                    }
                ?>

                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
         </div>
         <div id="Contact" class="offset">
           <footer>
         		<div class="row justify-content-center">
         			<div class="col-md-5 text-center">
                 <font color="white">
         				<p style="font-size:2rem; text-decoration: underline; text-align:center; font-family: Cardo;">Sparks Bank</p>
         				<p style="font-family:Cardo;">The most trustworthy bank</p>
         				<strong style="font-family:Cardo;">Contact Info</strong>
         				<p style="font-family:Cardo;">+91-9825000000
         					<br>
         					</p>
                 </font>
         					<a href="https://www.facebook.com/thesparksfoundation.info"><i class="fab fa-facebook-square"></i></a>
         					<a href="https://twitter.com/tsfsingapore"><i class="fab fa-twitter-square"></i></a>
         					<a href="https://www.instagram.com/thesparksfoundation.info"><i class="fab fa-instagram"></i></a>
         			</div>
         			<hr class="socket">
         			&copy; Sparks Bank
         		</div>
         	</footer>
         </div>
         <script src="js/jquery-3.3.1.min.js"></script>
         <script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
         <script src="https://use.fontawesome.com/releases/v5.6.1/js/all.js"></script>
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
