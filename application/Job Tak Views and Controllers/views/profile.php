<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!--include the css and bootstrap style sheets -->
    <style>
        <?php include 'style.css'; ?>
        </style>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link
      href="https://fonts.googleapis.com/css?family=Raleway"
      rel="stylesheet"
    />
    <title>Profile Page</title>
</head>
<body>
    <div id="container">
            <h1 class="header">Welcome</h1>
            
            <?php if(isset($_SESSION['success'])) {?>
            <div class= "alert alert-success"> <?php echo $_SESSION['success']; ?></div>
            <?php } 
            ?>
    <!-- Calling the biodata using the session information to indicate the row the data should come from-->
    First name: <?php echo $_SESSION['firstname']; ?>
<br>
    Surname: <?php echo $_SESSION['surname']; ?>
    <br>
    Age:  <?php echo $_SESSION['age']; ?>
    <br>
    Race: <?php echo $_SESSION['race']; ?>
    <br>
    Phone Number:  <?php echo $_SESSION['phoneNo']; ?>
    <br>
    Email:  <?php echo $_SESSION['email']; ?>
    <br> <br>
    
    <a href= "<?php echo base_url(); ?>index.php/auth/logout">Logout</a>
</div>
</body>
</html>