<?php
session_start();
include_once('../connection/connect.php');
if ($_SESSION['type'] == 'admin') {
    include_once('./html/head.html');
    echo "
    <div class='side'>
    <div class='containerfluid'>
           <div class='container p-5'>
               <div class='row'>
                <div class='col-sm-4'>";

    $sql = "Select * from users";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        echo "
                    <style>
                       th,td{
                        padding:10px;
                       }
                    </style>
                    
                    ";
        echo "<table class='table-bordered' style='text-align:center;'><thead ><tr><th>FirstName</th><th>LastName</th><th>Email</th><th>Type of Account</th></tr></thead><tbody>";
        while ($row = $result->fetch_assoc()) {

            echo "<tr>" . "<td  class='p-2'>" . $row["user_fname"] . "</td>" . "<td>" . $row["user_lname"] . "</td>" . "<td>" . $row["user_email"] . "</td>" . "<td>" . $row["type"] . "</td>" . "</tr>";
        }
        echo "</tbody></table>";
    } else {
        echo "0 results";
    }

    echo "</div>
                </div>";

    include_once('./html/foot.html');
} else {
    header("Location:../index.php");
}
?>