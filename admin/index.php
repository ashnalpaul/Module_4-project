<?php
session_start();
require_once('../connection.php');
extract($_POST);
if (isset($Login)) {
    $que = mysqli_query($con, "select * from admin where admin_id='$email' and password='$pass'");
    $row = mysqli_num_rows($que);
    if ($row) {
        $_SESSION['admin'] = $email;
        header('location:dashboard.php');
    } else {
        $err = "<font color='red';font-family='acme';font-size=25px;>Invalid Login Details..!</font>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!--Custom CSS StyleSheet -->
    <link rel="stylesheet" type="text/css" href="Admin_Styles.css">
    <title>Admin Login..!</title>
    <style type="text/css">
        .back-to-top {
            position: fixed;
            bottom: 25px;
            right: 25px;
            display: none;
        }
    </style>
</head>

<body>
    <div id="progress"></div>
    <nav class="navbar navbar-light" style="background-color: brown;margin-bottom:2%;border-bottom: 2px solid black;box-shadow: 3px 3px 5px black;">
        <a class="mh3 navbar-brand text-white" style="font-family:'Acme';font-size:30px"><img src="../css/images/logo2.jpg" width="70" style = "border-radius:50%;border:1px white;background-color:black;" height="70"/> <span class = "mh3">FMNC</span></h3>
                <a href=""></a></a>
        <a class="navbar-brand text-white" style="font-family:'Acme';color:'green';" href="../index.php"><i class="fas fa-home" aria-hidden="true"></i> Home</a>
    </nav>
    <h1 class="mh1">ADMIN Login</h1>
    <div class="forms">
        <form class="myform" method="post">
            <div class="form-group">
                <p class="label1">
                    <?php echo @$err; ?>
                </p>
            </div>
            <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                </div>
                <input type="email" class="form-group form-control form-control-feedback" autocomplete="off" name="email" placeholder="Admin-Id" />
            </div>
            <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                </div>
                <input type="password" class="form-group form-control" name="pass" required placeholder="Password" />
            </div>
            <input name="Login" type="submit" value="Login" class="login_btn">
            <input name="reset" type="reset" value="Reset" class="reset_btn">
        </form>
    </div>
    <a id="back-to-top" style="color:#000;background-color:white;border:2px solid black;" href="#" class="btn-light btn-lg back-to-top" role="button"><i class="fas fa-arrow-up"></i></a>
    <?php require_once('../footer.php'); ?>
    </body>
</html>