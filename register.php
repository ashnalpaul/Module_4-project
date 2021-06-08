<?php
require_once('connection.php');
session_start();
extract($_POST);

if (isset($Register)) {
    //check user alereay exists or not
    $sql = mysqli_query($con, "select * from registration where usn = '$USN'");
    $r = mysqli_num_rows($sql);
    if ($r == true) {
        $err = "<font color='red'>USN Already Exists..!</font>";
    } else {
        //image
        $image1 = $_FILES['img']['name'];
        //encrypt your password
        $pass = md5($psswd);



        $query = "insert into registration values('','$fname','$lname','$dob','$USN','$mail','$dept','$sem','$gen','$phone','$image1','$pass')";
        $data = mysqli_query($con, $query);

        //upload image

        mkdir("images/$USN");
        move_uploaded_file($_FILES['img']['tmp_name'], "images/$USN/" . $_FILES['img']['name']);

        if ($data) {
            $err = "<font color='green'>Registered successfully...!!</font>";
        }
    }
}
?>
<!-- register.php -->
<!-- REGISTRATION FORM -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Md Yaseen Ahmed">
   

   

    <!--Custom styles-->
    <link rel="stylesheet" type="text/css" href="css/reg_styles.css">

    <!--Custom Favicon.-->
    <link rel="icon" type="image/png" sizes="64x64" href="css/images/logo2.jpg">
    <style type="text/css">
        .back-to-top {
            position: fixed;
            bottom: 25px;
            right: 25px;
            display: none;
            outline: none;
        }

        .mh3:hover {
            border: 2px solid black;
            padding: 5px;
            border-radius: 5px;
            color: white;
            background-color: black;
        }

        .mnav ul li a:hover {
            color: whitesmoke;
            padding: 2px;
            border: 5px solid black;
            border-radius: 5px;
            background-color: black;
        }
    </style>

    <script type="text/javascript">
        window.onload = function() {
            document.getElementById("phone").onchange = passwdlen;
            document.getElementById("pass1").onchange = passwdlen2;
        }

        function passwdlen() {
            var num = document.getElementById("phone").value;
            if (num.length < 10)
                document.getElementById("phone").setCustomValidity("phone length shuld be = 10");
            else
                document.getElementById("phone").setCustomValidity('');
            //empty string means no validation error
        }

        function passwdlen2() {
            var pass = document.getElementById("pass1").value;
            if (pass.length < 8)
                document.getElementById("pass1").setCustomValidity("passwd length shuld be > 8");
            else
                document.getElementById("pass1").setCustomValidity('');
            //empty string means no validation error
        }
    </script>
    <title>Registration</title>
</head>

<body>
    <div id="progress"></div>
    <!-- Navigation -->
    <nav class="navbar mnav navbar-expand-lg navbar-dark static-top" style="background-color:brown;padding:20px;border-bottom: 2px solid black;box-shadow: 3px 3px 5px black;">
        <div class="container" style="font-family:'PT Serif';font-size:22px;padding-right:0px;margin-right:0%;">
            <a style="margin-left:0%;padding-left:0px" class="navbar-brand" href="">
            <a class="navbar-brand" href="">
                    <h3 style = "font-family:'PT Serif';" ><img src="css/images/logo2.jpg" width="70" style = "border-radius:50%;border:1px black;background-color:white;" height="70" alt="BMSCE"/> <span class = "mh3">FMNC</span><br /><p style = "margin-left:6%;font-size:12px;margin-top:0;position:absolute;top:60px"</p></h3>
                </a>
             </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#"><i class="fa fa-user-plus" aria-hidden="true"></i> Registration
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="index.php"><i class="fa fa-key" aria-hidden="true"></i> Login</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="admin/index.php"><i class="fa fa-lock" aria-hidden="true"></i> Admin</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="help.php"><i class="fa fa-question" aria-hidden="true"></i> Help</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="about.php"><i class="fa fa-info-circle" aria-hidden="true"></i> About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--Form-->
    <div class=" mcontainer">
        <form name="register" method="post" class="myform" action="" enctype="multipart/form-data">
            <h1 class="tit">Registration</h1>
            <?php echo @$err; ?>
            <hr class="mhr" color="black" height="15px" />
            <table width="100%">
                <tr>
                    <td>
                        <label class="label required">First Name</label>
                    </td>

                    <td>

                    </td>

                    <td class="td1">
                        <input type="text" autocomplete="off" name="fname" placeholder="First Name" class="required" required />
                    </td>
                </tr>

                <tr>
                    <td>
                        <label class="label required">Last Name</label>
                    </td>

                    <td>

                    </td>

                    <td class="td1">
                        <input type="text" name="lname" autocomplete="off" placeholder="Last Name" required />
                    </td>
                </tr>


                <tr>
                    <td>
                        <label>Birth Date</label>
                    </td>
                    <td>

                    </td>
                    <td class="td1">
                        <input type="date" name="dob" autocomplete="off" placeholder="YYYY/MM/DD" />
                    </td>
                </tr>

                <tr>
                    <td>
                        <label class="label">Gender</label>
                    </td>

                    <td>

                    </td>

                    <td class="td1">
                        <input type="radio" name="gen" value="M" />&nbsp;&nbsp;&nbsp;&nbsp;Male
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="gen" value="F" />&nbsp;&nbsp;&nbsp;&nbsp;Female
                    </td>
                </tr>

                <tr>
                    <td>
                        <label class="label required">USN</label>
                    </td>
                    <td>

                    </td>
                    <td class="td1">
                        <input type="text" name="USN" autocomplete="off" placeholder="1BM19CS000" required />
                    </td>
                </tr>

                <tr>
                    <td>
                        <label class="label required">Email</label>
                    </td>
                    <td>

                    </td>
                    <td class="td1">
                        <input type="email" name="mail" autocomplete="off" placeholder="student.cs19@bmsce.ac.in" required />
                    </td>
                </tr>

                <tr>
                    <td>
                        <label class="label required">Department</label>
                    </td>
                    <td>

                    </td>
                    <td class="td1">
                        <select name="dept" class="select1" autocomplete="off" placeholder="computer science" required>
                            <option name="s1" selected> Computer Science & Engineering</option>
                            <option name="s2"> Information Science Engineering</option>
                            <option name="s3"> Civil Engineering </option>
                            <option name="s4"> Aerospace Engineering </option>
                            <option name="s5"> Medical Engineering </option>
                            <option name="s6"> Electrical Engineering </option>
                            <option name="s7"> Mechnical Engineering </option>
                            <option name="s8"> Electronincs & Communication </option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label class="label required">Semester</label>
                    </td>
                    <td>

                    </td>
                    <td class="td1">
                        <select name="sem" autocomplete="off" class="select12" placeholder="" required>
                            <option name="s1" disabled> 1 </option>
                            <option name="s2"> 2 </option>
                            <option name="s3" disabled> 3 </option>
                            <option name="s4" selected> 4 </option>
                            <option name="s5" disabled> 5 </option>
                            <option name="s6"> 6 </option>
                            <option name="s7" disabled> 7 </option>
                            <option name="s8"> 8 </option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>Phone</label>
                    </td>
                    <td>

                    </td>
                    <td class="td1">
                        <input type="phone" autocomplete="off" name="phone" id="phone" placeholder="9998887776" />
                    </td>
                </tr>

                <tr>
                    <td>
                        <label class="label required">Upload Your Image</label>

                    </td>
                    <td> </td>
                    <td><input class="form-control" type="file" name="img" id="img" /></td>
                </tr>

                <tr>
                    <td>
                        <label class="label required">Password</label>
                    </td>
                    <td>

                    </td>
                    <td class="td1" class="label required">
                        <input type="password" name="psswd" id="pass1" placeholder="Password" required />
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="submit" name="Register" class="login_btn" value="Submit" />
                    </td>
                    <td>

                    </td>
                    <td class="td1">
                        <input type="reset" onClick="window.location.href=window.location.href" class="reset_btn" value="Reset" />
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <!--Scroll Up js File-->
    <script src="js/scroll.js"></script>
    <a id="back-to-top" data-toggle="tooltip" data-placement="auto" title="Back-to-Top" style="color:#000;background-color:whitesmoke;border:2px solid black;" href="#" class="btn-light btn-lg back-to-top" role="button"><i class="fas fa-arrow-up"></i></a>
    <?php require_once('footer.php'); ?>
</body>

</html>