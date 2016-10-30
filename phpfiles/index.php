<?php

include("connect.php");

$link = Connection();

$result = $link->query("SELECT * FROM temperature_table");

?>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Sensor Data</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/animate2.css">
</head>
<body>

<div class="container-fluid">
    <div class="top">
        <h1 ><b>Temperature sensor readings</b></h1>
    </div>
    <table class="table table-bordered" border="1" cellspacing="1" cellpadding="1">

        <tr>
            <td>&nbsp;ID&nbsp;</td>
            <td>&nbsp;temperature&nbsp;</td>
            <td>&nbsp;time&nbsp;</td>

        </tr>

        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                printf("<tr><td> &nbsp;%s </td><td> &nbsp;%s&nbsp; </td><td> &nbsp;%s&nbsp; </td></tr>",
                    $row["id"], $row["temp"], $row["ts"]);
            }

        } else {
            echo "0 results";
        }
        $link->close();
        ?>

    </table>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->

</body>
</html>
