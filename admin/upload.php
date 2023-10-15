<?php
// require('../connection/connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submit'])) {

        $fName = $_FILES["file"]["name"];
        $fSize = $_FILES["file"]["size"];
        $fTmp = $_FILES["file"]['tmp_name'];
        $f_ext = pathinfo($fName, PATHINFO_EXTENSION);
        $ext = ["png", "jpeg", "jpg", "gif"];

        if (in_array($f_ext, $ext)) {

            if ($fSize < 10_000_000) {

                $response = move_uploaded_file($fTmp, "uploads/" . $fName);

                if ($response == true) echo "uploaded";
                else echo "error occur";
            }
        }
    }
}
