<?php
require_once('../connection.php');
$query1 = "SELECT * FROM sub_reg where usn = '$user'";
$result = mysqli_query($con, $query1);
$rr = mysqli_num_rows($result);
if (!$rr) {
    echo "<h2 style='color:red;color:#ff0000;font-family:Acme;'>You have Registered For Exam Yet.!</h2>";
} else {

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admission Ticket</title>
          </head>
    <style type="text/css">
        .mh1 {
            font-family: 'Bitter';
            margin-top: 2%;
            margin-bottom: 5%;
            font-size: 40px;
            margin-bottom: auto;
            text-decoration: underline;
            text-decoration-color: rgb(2, 66, 85);
            text-decoration-style: dashed;
            text-align: center;
            text-shadow: 1px 1px 2px rgba(252, 164, 133, 0.6);
        }
    </style>

    <body>
        <h1 class="mh1">Subjects Registered</h1>
        <div class="container" style="margin-top: 5%;">
            <table id="example" class="table responsive table-striped table-bordered table-hover">
                <thead>
                    <tr class="center" style="color:black;font-size:22px;text-align:center;font-family: 'PT serif';">
                        <th>Sl No.</th>
                        <th>Subject Name</th>
                        <th>Subject Code</th>
                        <th>Credits</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $i = 1;
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr style=text-align:center;font-family:Bitter;font-size: 18px;>";
                    echo "<td>" . $i . "</td>";
                    echo "<td>" . $row['sub_name'] . "</td>";
                    echo "<td>" . $row['sub_code'] . "</td>";
                    echo "<td>" . $row['credits'] . "</td>";
                    echo "</tr>";
                    $i++;
                }
            }
                ?>
                </tbody>

            </table>
        </div>

    </body>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#example").DataTable();
        });
    </script>

    </html>