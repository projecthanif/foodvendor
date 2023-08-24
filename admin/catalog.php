<?php
session_start();
if ($_SESSION['type'] == 'admin') :
    include_once('./html/head.html');
?>
    <div class='side'>
        <div class='containerfluid'>
            <div class='container'>
                <div class='row'>
                    <div class='col-sm-4'>
                        <form action='catalogdb.php' method='post' class='form' enctype='multipart/form-data'>
                            <label for='name'>Name</label>
                            <input type='text' name='name' id='' class='form-control'>
                            <label for='type'>Type</label>
                            <select name='type' id='' class='form-control'>
                                <option value='' class='form-control'>Select one ...</option>
                                <option value='Fast Food' class='form-control'>Fast Food</option>
                                <option value='Local Delicacies' class='form-control'>Local Delicacies</option>
                                <option value='Foreign Delicacies' class='form-control'>Foreign Delicacies</option>
                                <option value='DRINKS' class='form-control'>DRINKS</option>
                            </select>
                            <label for='details'>DETAILS</label>
                            <textarea name='details' id='' cols='30' rows='10' class='form-control'></textarea>
                            <label for='price'>PRICE</label>
                            <input type='number' name='price' id='' class='form-control'>
                            <input type='file' name='file' id='' class='form-control'>
                            <input type='submit' value='Submit' name='submit' class='btn bg-primary'>
                        </form>
                    </div>
                    <div class='col-sm-8'>
                        <div class='row'>

                            <?php

                            require_once('../connection/connect.php');
                            //-GET From Database
                            $get = "SELECT * FROM item_order";
                            $result = $conn->query($get);

                            if (mysqli_num_rows($result)) :
                                while ($out = $result->fetch_assoc()) :

                                    $name = $out['item_Name'];
                                    $price = $out['item_Price'];
                                    $img = $out['item_Img'];
                                    $details = $out['item_Details'];
                                    $id = $out['productid'];

                                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                        if (isset($_POST['id'])) {

                                            $itemId = $_POST['id'];
                                            $sql = "DELETE FROM item_order WHERE productid ='$itemId'";
                                            
                                            $conn->query($sql);
                                        }
                                    }


                            ?>
                                    <?php if (!empty($img && $details && $name)) : ?>
                                        <div class='col-sm-4'>
                                            <div class='container'>
                                                <div class='card m-2' style='width:250px;height:0%;'>
                                                    <div class='card-img'>
                                                        <img src='../imgupload/<?= $img ?>' width='250px' height='200px' style='thumbnail'>
                                                    </div>
                                                    <div class='card-body'>
                                                        <div class='card-text'><b><?= $name ?></b></div>
                                                        <div class='card-text'><?= $details ?></div><br>
                                                        <div class='card-text'>$ <?= $price ?></div>
                                                        <form action='' method='post'>
                                                            <input type='hidden' name='id' value='<?= $id ?>'>
                                                            <input value='DELETE' type='submit'>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php else : ?>

                                    <?php endif ?>

                                <?php endwhile ?>

                            <?php endif ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once('./html/foot.html'); ?>
<?php else : header("Location:../index.php"); ?>
<?php endif ?>