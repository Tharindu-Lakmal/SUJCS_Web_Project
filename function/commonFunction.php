<?php


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
                            <a href='#' class='navbar-link'>Call for Papers</a>
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
    ";

}


// Footer --------------------------------------------------------------------

?>