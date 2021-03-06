<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
 include 'requireLogin.php';
?>
<html>
<header><title>This is title</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script src="ext/js/api.js"></script>

    <body>

<h1>Welcome to Explore California</h1>

    <?php

    include 'databaseconnection.php';

    $sql = "SELECT * FROM tours,packages WHERE packages.packageID=tours.packageID ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row

    ?>

    <table id='table1' class='table table-striped table-hover table-bordered' width="100%" cellspacing="">
        <thead>
        <tr>

            <td>
                Tur navn
            </td>
            <td>
                Price
            </td>
            <td>
                beskrivelse
            </td>
            <td>keywords</td>
            <td>kort</td>
            <td>Package</td>
            <td>Package picture</td>
        </tr></thead>
        <tbody>
        <?php

        while ($row = $result->fetch_assoc()) {






            echo "<tr>";
            echo "<td>";
            echo $row["tourName"];

            echo "</td>";

            echo "<td>";
            echo $row["price"];
            echo "</td>";


            echo "<td>";
            echo $row["description"];
            echo "</td>";

            echo "<td>";
            echo $row["keywords"];
            echo "</td>";


            echo "<td>";
            echo "<img src=images/".$row["graphic"]." width='120' height='80' onerror=\"this.src='images/404.jpeg'\"> </img>" ;
            echo "</td>";


                echo "<td>";
                echo $row["packageTitle"];
                echo "</td>";

                echo "<td>";
                echo "<img src=images/".$row["packageGraphic"]." width='120' height='80' onerror=\"this.src='images/404.jpeg'\"> </img>" ;
                echo "</td>";

            echo "</tr>";


        }



        }
        ?>
        </tbody>
    </table>


    <script>$('#table1').DataTable();</script>

    </body>
</html>