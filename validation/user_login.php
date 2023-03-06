<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.1.0/litera/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<!-- css -->
<link rel="stylesheet" href="bootstrap-5.2.3-dist/css/bootstrap.css">
<link rel="stylesheet"  href="bootstrap-5.2.3-dist/css/bootstrap.css">
<link rel="stylesheet"  href="bootstrap-5.2.3-dist/css/bootstrap.min.css">
<link rel="stylesheet"  href="bootstrap-5.2.3-dist/css/bootstrap.rtl.css">
<link rel="stylesheet"  href="bootstrap-5.2.3-dist/css/bootstrap.rtl.min.css">
<link rel='shortcut icon' href='img/bowl.png' type='image/x-icon'>
<link rel="stylesheet" href="assets/css/style.css">
<title>Login</title>
</head>
<body>

    <div class="container">
        <div class="d-flex justify-content-center align-items-center">
           <form action="user_verify.php" method="post" class="form">
            <div class="card p-5">
                <div class="card-body">
                <?php
                if(isset($Error)){
                    echo "<div class='alert alert-secondary alert-dismisible'>
                <div class='d-flex justify-content-between'>" .$Error. "<button type='button' data-bs-dismiss='alert' class='btn-close'></button>
                </div>
               </div>";
                }                
                ?>
                    <div class="card-inline">
                        <label for="name">Email</label>
                        <input type="email" name="name" id="" class="form-control" required>
                    </div>
                    <div class="card-inline">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="" class="form-control" required>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <input type="submit" value="Log in" class="btn bg-info">
                </div>
                <p>Don't have account<a href="./user_Register.php" class="link"> Register </a></p>
            </div>
           </form>
        </div>
    </div>
   

<script src="bootstrap-5.2.3-dist/js/bootstrap.js"></script>
<script src="bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>