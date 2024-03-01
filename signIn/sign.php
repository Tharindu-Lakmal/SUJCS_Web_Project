<!-- database connection -->

<?php
// include('../connection.php');
include('../function/commonFunction.php');
include('../function/userFunction.php');

signUp();
signIn();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SUJCS | Sabaragamuwa University of Sri Lanka</title>

    <link rel="icon" href="../images/tab_logo.png">

    <meta name="title" content="SUJCS - Sabaragamuwa University Journal of Computer Science">
    <meta name="description" content="Official website of faculty of computer science">

    <!-- favicon link -->
    <link rel="shortcut icon" href="images/favicon.svg" type="image/svg+xml">

    <!-- fontawesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==
    " crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- google fonts link-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- custom css link -->
    <link rel="stylesheet" href="./sign.css">

</head>

<body>

    <!-- Main content -->
    <main>
        <div class="box">

            <div class="close-btn">
                <i class="fa-solid fa-xmark" style="color: #fff;"></i>   <!-- 3e37c8 -->
            </div>

            <div class="inner-box">

                <div class="forms-wrap">

                    <form action="index.html" method="post" autocomplete="off" class="sign-in-form">
                        <div class="logo-s">
                            <img src="../images/logo.png" alt="SUJCS" />
                        </div>

                        <div class="heading">
                            <h2>Welcome Back</h2>
                            <h6>Not registred yet?</h6>
                            <a href="#" class="toggle">Sign up</a>
                        </div>

                        <!--            if have some errors of username or password-->
            <?php 
            
                if (isset($errors) && !empty($errors)){
                    echo '<p class="error">Invalid Username / Password</p>';
                } 
            
            ?>

                        <!--            after successfully logout -->
            <?php

                if (isset($_GET['logout'])) {
                    echo '<p class="info">You have successfully logged out from the system</p>';
                }
                
            ?>

                        <div class="actual-form">
                            <div class="input-wrap">
                                <input type="text" name="user_name" minlength="4" class="input-field" autocomplete="off" required />
                                <label>Name</label>
                            </div>

                            <div class="input-wrap">
                                <input type="password" name="user_password" minlength="4" class="input-field" autocomplete="off" required />
                                <label>Password</label>
                            </div>

                            <p class="text fpassword" style="margin-block-end: 1rem;">
                                <a href="#">Forgotte password?</a>
                            </p>

                            <input type="submit" name="submit" value="Sign In" class="btn-s btn-s-primary sign-btn" />

                            <p class="text">
                                Sign in will gives you power to be the BatMan.
                            </p>
                        </div>
                    </form>


                            <?php
                                if (!empty($errors)){

                                errorDisplay($errors);

                                }

                            ?>

                    <form action="index.html" method="post" autocomplete="off" class="sign-up-form">
                        <div class="logo">
                            <img src="../images/logo.png" alt="SUJCS" />
                        </div>

                        <div class="heading">
                            <h2>Get Started</h2>
                            <h6>Already have an account?</h6>
                            <a href="#" class="toggle">Sign in</a>
                        </div>

                        <div class="actual-form">
                            <div class="input-wrap">
                                <input type="text" name="user_name" minlength="4" class="input-field" autocomplete="off" required />
                                <label>Name</label>
                            </div>

                            <div class="input-wrap">
                                <input type="email" name="user_email" class="input-field" autocomplete="off" required />
                                <label>Email</label>
                            </div>

                            <div class="input-wrap">
                                <input type="password" name="user_password" minlength="4" class="input-field" autocomplete="off" required />
                                <label>Password</label>
                            </div>

                            <input type="submit" name="submit" value="Sign Up" class=" btn-s btn-s-primary sign-btn" />

                            <p class="text">
                                By signing up, I agree to the
                                <a href="#">Terms of Services</a> and
                                <a href="#">Privacy Policy</a>
                            </p>
                        </div>
                    </form>
                </div>

                <div class="carousel">

                    <div class="images-wrapper">
                        <img src="../images/lp_sub1.png" class="image img-1 show" alt="" />
                        <img src="../images/lp_sub2.png" class="image img-2" alt="" />
                    </div>

                    <div class="text-slider">
                        <div class="text-wrap">
                            <div class="text-group">
                                <h2>Sign in to save your selections</h2>
                                <h2>Register to access more features</h2>
                            </div>
                        </div>

                        <div class="bullets">
                            <span class="active" data-value="1"></span>
                            <span data-value="2"></span>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </main>

    <!-- custom js link-->
    <script src="./sign.js"></script>

    <!-- ionicon link -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>