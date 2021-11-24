<?php
include('../class.php');
$p = new user();
$p-> connect();
session_start();
?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        
        <style>
            .divider:after,
            .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
            }
            .h-custom {
            height: calc(100% - 73px);
            }
            @media (max-width: 450px) {
            .h-custom {
                height: 100%;
            }
            }
        </style>
        <body>
        <section class="vh-100">
            <div class="container-fluid h-custom">
                <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-login-form/draw2.png" class="img-fluid"
                    alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form>
                    <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                        <p class="lead fw-normal mb-0 me-3">Employee</p>
                    </div>

                    <div class="divider d-flex align-items-center my-4">
                        <p class="text-center fw-bold mx-3 mb-0"></p>
                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="number" id="phone" name="phone" class="form-control form-control-lg"
                        placeholder="0987654321" />
                        <label class="form-label" for="phone">Số điện thoại</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-3">
                        <input type="password" id="password" name="password" class="form-control form-control-lg"
                        placeholder="Enter password" />
                        <label class="form-label" for="password">Password</label>
                    </div>

                    <div class="text-center text-lg-start mt-4 pt-2">
                    <input type="submit" value="login" name="submit"class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;"/>
                        <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#!"
                            class="link-danger">Register</a></p>
                    </div>

                    </form>
                    <?php
                    switch (isset($_REQUEST['submit']))
                    {
                        case 'login':
                        {
                            $phone = $_REQUEST['phone'];
                            $pass = $_REQUEST['password'];
                            if($phone != '' && $pass != '')
                            {
                                    $p->login("select * from employee_login where phone=$phone");
                                if($phone == $_SESSION['phone'] && $pass == $_SESSION['password'])
                                {
                                    $_SESSION['log'] ='employee-logged';
                                    header('location:./gui.php');
                                }
                                else{
                                    echo "<script>alert('thông tin không chính xác !');</script>";
                                    $_SESSION['log'] ='logging';
                                }
                            }
                            else echo "<script>alert('vui lòng nhập đủ thông tin');</script>";
                            
                            break;
                        }
                    }
                    ?>
                </div>
                </div>
            </div>
            <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
                <!-- Copyright -->
                <div class="text-white mb-3 mb-md-0">
                Copyright © 2020. All rights reserved.
                </div>
                <!-- Copyright -->

                <!-- Right -->
                <div>
                <a href="#!" class="text-white me-4">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#!" class="text-white me-4">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#!" class="text-white me-4">
                    <i class="fab fa-google"></i>
                </a>
                <a href="#!" class="text-white">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                </div>
                <!-- Right -->
            </div>
            </section>
        </body>
    </head>
</html>