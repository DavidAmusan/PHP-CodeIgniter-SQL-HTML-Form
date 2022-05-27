<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

    <style>
        <?php include 'style.css'; ?>
        </style>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Register</title>
</head>
<body>
    <div ng-app="myapp" ng-controller="formcontroller" id= "register-container">
                <!-- prompt php to tell the user if registration was succcessful or not -->

    <?php if(isset($_SESSION['success'])) {?>
            <div class= "alert alert-success"> <?php echo $_SESSION['success']; ?></div>
            <?php } 
            ?>
        <?php echo validation_errors('<div class="alert alert-danger">' , '</div>'); ?>
        <!--form prompting the user for information-->
        <form action="" method="POST" class="form-wrap form2">
            <h1 class="header">Register</h1>
            <p> Please Fill in Your Biodata So You Can Get Started!</p>
           
            <input type="text" id="firstname" 
            placeholder="First Name" name="firstname">
            <input type="text" id="surname" name="surname" placeholder= "Surname">
            <input type="text" id="age" name="age"
            placeholder= "Age">
            <input type="text" id="race" name="race" placeholder= "Race">
            <input type="text" id="phoneNo" name="phoneNo" placeholder= "Phone Number">
            <input type="text" id="email" name="email"  placeholder= "Email Address">
            <input type="text" name="username" placeholder="Username" ng-model="username">
            <input type="password" name="password" placeholder="Password" ng-model="password">
            <button type="submit" name="register">Register!</button>
        </form>
    </div>
</body>
</html>
