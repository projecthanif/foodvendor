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

    $sql = "Select * from user_order ORDER BY timeofpurchase DESC";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        echo "
                    <style>
                       th,td{
                        padding:20px;
                       }
                       tr:hover{background-color:grey;}
                    </style>
                    
                    ";
        echo "<table class='table-bordered' style='text-align:center;'><thead ><tr><th>Number</th><th colspan='2'>Name</th><th>Product</th><th>TIme</th></tr></thead><tbody>";
        while ($row = $result->fetch_assoc()) {
            $userid=$row["userid"];
            $SQL="SELECT * FROM users where userid=$userid";
            $userResult=$conn->query($SQL);
            $userRow=$userResult->fetch_assoc();

            echo "<tr>" . "<td>" . $row["userid"] . "</td>" . "<td>" . $userRow["user_fname"] ."</td><td> ". $userRow["user_lname"] ."</td>"."<td>" .  $row["productid"] . "</td>" . "<td>" . $row["timeofpurchase"] . "</td>" . "</tr>";
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