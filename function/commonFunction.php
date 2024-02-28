<?php

include '../connection.php';


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
                            <a href='#' class='navbar-link '>Home</a>
                        </li>
                        <li class='navbar-item'>
                            <a href='#' class='navbar-link'>About</a>
                        </li>
                        
                        <li class='navbar-item'>
                            <a href='#' class='navbar-link'>Reviews</a>
                        </li>
                        <li class='navbar-item'>
                            <a href='#' class='navbar-link'>Guidlins</a>
                        </li>
                        <li class='navbar-item'>
                            <a href='#' class='navbar-link'>Contact Us</a>
                        </li>
                    </ul>
    
                    <div class='header-action'>
                        <a href='#' class='login-btn'>Login</a>
    
                        <a href='#' class='btn btn-primary'>Sign Up</a>
                    </div>
    
                </nav>
    
                <!-- hambager menu icon -->
                <button class='nav-toggle-btn' aria-label='open menu' data-nav-toggler>
                    <ion-icon name='menu-outline' aria-hidden='true'></ion-icon>
                </button>
    
                <div class='overlay' data-overlay data-nav-toggler></div>
        </div>


        <main>
            <div class='box'>
    
                    <div class='close-btn'>
                        <i class='fa-solid fa-circle-xmark' style='color: #3e37c8;'></i>
                    </div>
    
                    <div class='inner-box'>
        
                        <div class='forms-wrap'>
        
                            <form action='index.html' autocomplete='off' class='sign-in-form'>
                                <div class='logo'>
                                    <img src='../images/logo.png' alt='SUJCS' />
                                </div>
        
                                <div class='heading'>
                                    <h2>Welcome Back</h2>
                                    <h6>Not registred yet?</h6>
                                    <a href='#' class='toggle'>Sign up</a>
                                </div>
        
                                <div class='actual-form'>
                                    <div class='input-wrap'>
                                        <input type='text' minlength='4' class='input-field' autocomplete='off' required />
                                        <label>Name</label>
                                    </div>
        
                                    <div class='input-wrap'>
                                        <input type='password' minlength='4' class='input-field' autocomplete='off' required />
                                        <label>Password</label>
                                    </div>
        
                                    <p class='text fpassword' style='margin-block-end: 1rem;'>
                                        <a href='#'>Forgotte password?</a>
                                    </p>
        
                                    <input type='submit' value='Sign In' class='btn btn-primary sign-btn' />
        
                                    <p class='text'>
                                        Sign in will gives you power to be the BatMan.
                                    </p>
                                </div>
                            </form>
        
                            <form action='index.html' autocomplete='off' class='sign-up-form'>
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
                                        <input type='text' minlength='4' class='input-field' autocomplete='off' required />
                                        <label>Name</label>
                                    </div>
        
                                    <div class='input-wrap'>
                                        <input type='email' class='input-field' autocomplete='off' required />
                                        <label>Email</label>
                                    </div>
        
                                    <div class='input-wrap'>
                                        <input type='password' minlength='4' class='input-field' autocomplete='off' required />
                                        <label>Password</label>
                                    </div>
        
                                    <input type='submit' value='Sign Up' class=' btn btn-primary sign-btn' />
        
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

?>