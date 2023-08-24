<?php
session_start();
include_once('../connection/connect.php');
if ($_SESSION['type'] == 'admin') :
    include_once('./html/head.html'); ?>

    <div class='side'>
        <div class='containerfluid'>
            <div class='container p-5'>
                <div class='row'>
                    <div class='col-sm-4'>";
                        <?php
                        $sql = "Select * from user_order ORDER BY timeofpurchase DESC";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) :
                            // output data of each row
                        ?>

                            <style>
                                th,
                                td {
                                    padding: 20px;
                                }

                                tr:hover {
                                    background-color: grey;
                                }
                            </style>


                            <table class='table-bordered' style='text-align:center;'>
                                <thead>
                                    <tr>
                                        <th>Number</th>
                                        <th colspan='2'>Name</th>
                                        <th>Product</th>
                                        <th>TIme</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($row = $result->fetch_assoc()) :
                                        $userid = $row["userid"];
                                        $SQL = "SELECT * FROM users where userid=$userid";
                                        $userResult = $conn->query($SQL);
                                        $userRow = $userResult->fetch_assoc(); ?>

                                        <tr>
                                            <td> <?= $row["userid"] ?> </td>
                                            <td> <?= $userRow["user_fname"] ?></td>
                                            <td> <?= $userRow["user_lname"] ?></td>
                                            <td> <?= $row["productid"] ?> </td>
                                            <td> <?= $row["timeofpurchase"] ?></td>
                                        </tr>
                                    <?php endwhile ?>

                                </tbody>
                            </table>
                        <?php else : ?>
                            <p> 0 results </p>
                        <?php endif ?>
                    </div>
                </div>

                <?php include_once('./html/foot.html') ?>
            <?php else :
            header("Location:../index.php");
            ?>
            <?php endif ?>