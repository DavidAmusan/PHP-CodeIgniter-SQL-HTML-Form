<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script data-require="angular.js@1.5.x" src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.11/angular.min.js" data-semver="1.5.11"></script>
    <script src="script.js"></script>
    <style>
        <?php include 'style.css'; ?>
        </style>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <title>Login Page</title>
</head>
<body>
    <div id="container">
        <form action="" method="POST" class="form-wrap">
            <h1 class="header">Welcome</h1>
            <?php if(isset($_SESSION['success'])) {?>
            <div class= "alert alert-success"> <?php echo $_SESSION['success']; ?></div>
            <?php } 
            ?>
                <?php echo validation_errors('<div class="alert alert-danger">' , '</div>'); ?>
        <input type="text" placeholder="Username" name="username">
    <br>
        <input type="text"  placeholder="Password" name="password">

        <button type="submit">Enter</button>
    </form>
    </div>
</body>
</html>