import React from 'react';
import { Link } from 'react-router-dom';
// import './assets/vendor/jquery/jquery.min.js';
// import Logo from './placeholder.png'
function Header() {
    return (
        <header id="header" class="fixed-top">
            <div class="container d-flex align-items-center">

                <h1 class="logo me-auto"><a href="index.html">Annapurna Hotel</a></h1>
                {/* <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>--> */}

                <nav id="navbar" class="navbar order-last order-lg-0">
                    <ul>
                        <li><Link to="/">Home</Link></li>
                        <li><Link to="/about">About</Link></li>
                        <li><Link to="/services">Our Services</Link></li>
                        <li><Link to="/contact">Contact</Link></li>
                        <li class="dropdown"><Link to="#"><span>Events and Gallery</span> <i class="bi bi-chevron-down"></i></Link>
                            <ul>
                                <li><Link to="/enquiry">Enquire a event</Link></li>
                                <li><Link to="/gallery">Gallery</Link></li>
                            </ul>
                        </li>
                        <li class="dropdown"><Link to="#"><span>More</span><i class="bi bi-chevron-down"></i></Link>
                            <ul>
                                <li><Link to="/review">Reviews</Link></li>
                                <li><Link to="/feedback">Offer Feedback</Link></li>
                            </ul>
                        </li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav>


                <Link to="/booking" class="get-started-btn">Book a room</Link>

            </div>
        </header>
    );
}
export default Header