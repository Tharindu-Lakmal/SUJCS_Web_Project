<?php


include '../connection.php';



function logIn() {

    

    echo "
    
    <main>
            <div class='box'>

                <div class='close-btn'>
                    <i class='fa-solid fa-circle-xmark' style='color: #3e37c8;'></i>
                </div>

                <div class='inner-box'>
    
                    <div class='forms-wrap'>
    
                        <form action='../landingPage/index.php' method='post' autocomplete='off' class='sign-in-form'>
                            <div class='logo'>
                                <img src='../images/logo.png' alt='SUJCS' />
                            </div>
    
                            <div class='heading'>
                                <h2>Welcome Back</h2>
                                <h6>Not registred yet?</h6>
                                <a href='#' class='toggle'>Sign up</a>
                            </div>";

                            if (isset($errors) && !empty($errors)){
                                echo '<p class="error">Invalid Username / Password</p>';
                            } 

                            if (isset($_GET['logout'])) {
                                echo '<p class="info">You have successfully logged out from the system</p>';
                            }
                            
    
                           " <div class='actual-form'>
                                <div class='input-wrap'>
                                    <input type='text' name='user_name' minlength='4' class='input-field' autocomplete='off' required />
                                    <label>Name</label>
                                </div>
    
                                <div class='input-wrap'>
                                    <input type='password' name='user_password' minlength='4' class='input-field' autocomplete='off' required />
                                    <label>Password</label>
                                </div>
    
                                <p class='text fpassword' style='margin-block-end: 1rem;'>
                                    <a href='#'>Forgotte password?</a>
                                </p>
    
                                <input type='submit' name='submit' value='Sign In' class='btn btn-primary sign-btn' />
    
                                <p class='text'>
                                    Sign in will gives you power to be the BatMan.
                                </p>
                            </div>
                        </form>";

                        if (!empty($errors)){

                            errorDisplay($errors);

                            }

    
                        "<form action='../landinPage/index.php' method='post' autocomplete='off' class='sign-up-form'>
                            <div class='logo'>
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
    
                                <input type='submit' name='submit' value='Sign Up' class=' btn btn-primary sign-btn' />
    
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
                            <img src='../images/lp_sub2.png' class='image img-2' alt='' />
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

?>