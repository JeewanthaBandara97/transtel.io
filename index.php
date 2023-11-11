<?php
    session_start();

    // Check if the user is already authenticated
    if (isset($_SESSION['Auth_user'])) { 
        
        if ($_SESSION['Auth_user']['user_type'] === 'admin') {
            header("Location: dashboard/dashboard.php");
        }  
        exit();
    } 
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link href="assets/css/style.css" rel="stylesheet">


    <title>Transtel Admin</title>
</head>

<body> 
    
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card my-4"> 

                    <form class="card-body cardbody-color p-lg-4" Action="includes/auth.php" Method="POST">
                        <div class="text-center">
                            <img src="assets/img/logo2.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3" width="200px" alt="profile">
                        </div>

                        <div class="mb-3">
                            <input type="email" class="form-control" name="Email" id="Email" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="Password" id="Password" placeholder="Password">
                        </div>
                        <div class="text-center">
                            <button type="submit" name="btnlogin" class="btn btn-color px-5 mb-5 w-100">Login</button>
                        </div>

                        <!-- <div id="emailHelp" class="form-text text-center mb-5 text-dark">
                            Not Registered?
                            <a href="#" class="text-dark fw-bold"> Create an Account</a>
                        </div> -->

                        <div class="alert">
                            <?php
                            ob_start();
                            if (isset($_SESSION['status'])) {
                                $notification = $_SESSION['status']['Notification'];
                                $type = $_SESSION['status']['Type'];
                                echo '<div class="alert ' . $type . '">' . $notification . '</div>';
                                unset($_SESSION['status']);
                            }
                            ob_end_flush();
                            ?>
                        </div>

                    </form>
                </div>

            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>