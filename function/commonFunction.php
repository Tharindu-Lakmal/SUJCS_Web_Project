<?php

include '../connection.php';



function errorDisplay($errors){
    echo "<div class='errmsg'> ";
    echo "<b>There were some errors of your form.</b><br>";
    foreach ($errors as $error){
        $error = ucfirst(str_replace("_", " ", $error));
        echo '- ' . $error . '<br>';
    }
    echo " </div> ";

}

// Navigation Bar --------------------------------------------------------------------

function navBar() {
    
    echo "
        <div class='container'>
                <a href='#' class='logo'>
                    <img src='../images/logo.png' width='64px' height='27px' alt='logo'>
                </a>
    
                <nav class='navbar' data-navbar>
    
                    <div class='navbar-top'>
                        <a href='#' class='logo'>
                            <img src='../images/logo.png' width='64px' height='27px' alt='logo'>
                        </a>
    
                        <!-- close icon 'X' -->
                        <button class='nav-toggle-btn' aria-label='close menu' data-nav-toggler>
                            <ion-icon name='close-outline' aria-hidden='true'></ion-icon>
                        </button>
                    </div>
    
                    <ul class='navbar-list'>
                        <li class='navbar-item'>
                            <a href='index.php' class='navbar-link'>Home</a>
                        </li>
                        <li class='navbar-item'>
                            <a href='#' class='navbar-link'>About</a>
                        </li>
                        
                        <li class='navbar-item'>
                            <a href='#' class='navbar-link'>Reviews</a>
                        </li>
                        <li class='navbar-item'>
                            <a href='#guid-heading' class='navbar-link'>Guidlins</a>
                        </li>
                        <li class='navbar-item'>
                            <a href='#' class='navbar-link'>Contact Us</a>
                        </li>
                    </ul>
    
                    <div class='header-action'>
                        
                        <input type='submit' value='Login' class='login-btn' data-sign />

                        <input type='submit' value='Sign Up' class='btn btn-primary' data-sign />
                        
                    </div>
    
                </nav>
    
                <!-- hambager menu icon -->
                <button class='nav-toggle-btn' aria-label='open menu' data-nav-toggler>
                    <ion-icon name='menu-outline' aria-hidden='true'></ion-icon>
                </button>
    
                <div class='overlay' data-overlay data-nav-toggler></div>
        </div>


        <main class='sign-main' data-sign-main>
            <div class='box'>
    
                    <div class='close-btn' data-close>
                        <i class='fa-solid fa-circle-xmark' style='color: #3e37c8;'></i>
                    </div>
    
                    <div class='inner-box'>
        
                        <div class='forms-wrap'>
        

                            <form action='../landingPage/index.php' method='post' autocomplete='off' class='sign-in-form'>
                                <div class='logo-s'>
                                    <img src='../images/logo.png' alt='SUJCS' />
                                </div>
        
                                <div class='heading'>
                                    <h2>Welcome Back</h2>
                                    <h6>Not registred yet?</h6>
                                    <a href='#' class='toggle'>Sign up</a>
                                </div>";

                                if (isset($errors) && !empty($errors)){
                                    echo "<p class='error'>Invalid Username / Password</p>";
                                } 
    
                                if (isset($_GET['logout'])) {
                                    echo "<p class='info'>You have successfully logged out from the system</p>";
                                }
        
                                echo "<div class='actual-form'>
                                    <div class='input-wrap'>
                                        <input type='text' name='user_name' minlength='4' class='input-field' autocomplete='off' required />
                                        <label>Name</label>
                                    </div>
        
                                    <div class='input-wrap'>
                                        <input type='password' name='user_password' minlength='4' class='input-field' autocomplete='off' required />
                                        <label>Password</label>
                                    </div>
        
                                    <p class='text fpassword' style='margin-block-end: 1rem;'>
                                        <a href='../landingPage/forgotPassword.php'>Forgotte password?</a>
                                    </p>
        

                                    <input type='submit' name='loginSubmit' value='Sign In' class='sign-btn' />
        
                                    <p class='text'>
                                        Sign in will gives you power to be the BatMan.
                                    </p>
                                </div>
                            </form>";
        

                            if (!empty($errors)){

                                errorDisplay($errors);
    
                                }

                           echo" <form action='../landingPage/index.php' method='post' autocomplete='off' class='sign-up-form'>
                                <div class='logo-s'>
                                    <img src='../images/logo.png' alt='SUJCS' />
                                </div>
        
                                <div class='heading'>
                                    <h2>Get Started</h2>
                                    <h6>Already have an account?</h6>
                                    <a href='#' class='toggle'>Sign in</a>
                                </div>
        
                                <div class='actual-form'>
                                    <div class='input-wrap'>
                                        <input type='text' name='user_name' minlength='4' class='input-field' autocomplete='off' required />
                                        <label>Name</label>
                                    </div>
        
                                    <div class='input-wrap'>
                                        <input type='email' name='user_email' class='input-field' autocomplete='off' required />
                                        <label>Email</label>
                                    </div>
        
                                    <div class='input-wrap'>
                                        <input type='password' name='user_password' minlength='4' class='input-field' autocomplete='off' required />
                                        <label>Password</label>
                                    </div>
        

                                    <input type='submit' name='submit' value='Sign Up' class='sign-btn'style='margin-top: 3rem;' />
        
                                    <p class='text'>
                                        By signing up, I agree to the
                                        <a href='#'>Terms of Services</a> and
                                        <a href='#'>Privacy Policy</a>
                                    </p>
                                </div>
                            </form>
                        </div>
        
                        <div class='carousel'>
        
                            <div class='images-wrapper'>
                                <img src='../images/lp_sub1.png' class='image img-1 show' alt='' />
                                <img src='../images/about3.png' class='image img-2' alt='' />
                            </div>
        
                            <div class='text-slider'>
                                <div class='text-wrap'>
                                    <div class='text-group'>
                                        <h2>Sign in to save your selections</h2>
                                        <h2>Register to access more features</h2>
                                    </div>
                                </div>
        
                                <div class='bullets'>
                                    <span class='active' data-value='1'></span>
                                    <span data-value='2'></span>
                                </div>
                            </div>
        
                        </div>
        
                    </div>
        
             </div>
        </main>

    ";

}

// <li class='navbar-item'>
//     <a href='#' class='navbar-link'>Call for Papers</a>
// </li>

// search-------------------------------

function search() {
    echo "
    <div class='search_container'>

        <input class='input' type='text' placeholder='Search here'>
        <button class='search_btn btn'><ion-icon name='search'></ion-icon></button>

    </div>
    ";
}


// Footer --------------------------------------------------------------------

function footer() {
    echo "
    <div class='section footer'>
        <div class='container-2'>

            <div class='content'>
                <div class='logo-footer'>
                    <img src='../images/logo.png' alt='SUJCS-logo'>
                </div>

                <div class='address'>
                    <h4>Postal Address</h4>
                    <p class='add'>
                        Sabaragamuwa University of Sri Lanka,<br>
                        P.O. Box 02,<br> 
                        Belihuloya,<br>
                        70140,<br>
                        Sri Lanka.
                    </p>
                </div>

                <div class='contact'>
                    <h4>Contact Us</h4>
                    <ul>
                        <li><img class='media-icon' src='../images/facebook1.png' alt='icon'><a href='#'>Facebook</a></li>
                        <li><img class='media-icon' src='../images/instagram1.png' alt='icon'><a href='#'>Instagram</a></li>
                        <li><img class='media-icon' src='../images/phone.png' alt='icon'><a href='#'>LinkdIn</a></li>
                        <li><img class='media-icon' src='../images/mail.png' alt='icon'><a href='#'>Mail</a></li>
                    </ul>
                </div>
            </div>

            <div class='copy-right'>
                <p class='note'>Copyright © 2021 - Sabaragamuwa University Journal of Computer Sciences.</p>
                <h6>ALL RIGHTS RESERVED</h6>
            </div>

        </div>
    </div>
    ";
}

?>