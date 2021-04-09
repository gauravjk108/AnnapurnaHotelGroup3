import React from 'react'
import { Link } from 'react-router-dom'
// import Logo from './placeholder.png'
function Footer() {
    return (
        <footer id="footer">

        <div class="footer-top">
          <div class="container">
            <div class="row">
    
              <div class="col-lg-3 col-md-6 footer-contact">
                <h3>Annapurna Hotel Pvt. Ltd.</h3>
                <p>
                  A108 Adam Street <br/>
                  New York, NY 535022<br/>
                  United States <br/><br/>
                  <strong>Phone:</strong> +1 5589 55488 55<br/>
                  <strong>Email:</strong> info@example.com<br/>
                </p>
              </div>
    
              <div class="col-lg-2 col-md-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                  <li><i class="bx bx-chevron-right"></i> <Link to="#">Home</Link></li>
                  <li><i class="bx bx-chevron-right"></i> <Link to="#">About us</Link></li>
                  <li><i class="bx bx-chevron-right"></i> <Link to="#">Services</Link></li>
                  <li><i class="bx bx-chevron-right"></i> <Link to="#">Terms of service</Link></li>
                  <li><i class="bx bx-chevron-right"></i> <Link to="#">Privacy policy</Link></li>
                </ul>
              </div>
    
              <div class="col-lg-3 col-md-6 footer-links">
                <h4>Location</h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.2004549850008!2d85.31435691501542!3d27.711096482790403!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb190162d2fb35%3A0x98eccd6cf32b17f9!2sHotel%20Annapurna!5e0!3m2!1sen!2snp!4v1617902697276!5m2!1sen!2snp" width="200" height="150" style={{border:0}} allowfullscreen="" loading="lazy" title="map"></iframe>
              </div>
              <div class="col-lg-4 col-md-6 footer-newsletter">
                <h4>Join Our Newsletter</h4>
                <p>If you want to stay up to date with exciting updates about our hotel. Please subscribe to the newsletter using your email address.</p>
                <form action="" method="post">
                  <input type="email" name="email"/><input type="submit" value="Subscribe"/>
                </form>
              </div>
    
            </div>
          </div>
        </div>
    
        <div class="container d-md-flex py-4">
    
          <div class="me-md-auto text-center text-md-start">
            <div class="copyright">
              &copy; Copyright <strong><span>Annapurna Hotel Pvt. Ltd.</span></strong>. All Rights Reserved
            </div>
          </div>
          <div class="social-links text-center text-md-right pt-3 pt-md-0">
            <Link to="#" class="twitter"><i class="bx bxl-twitter"></i></Link>
            <Link to="#" class="facebook"><i class="bx bxl-facebook"></i></Link>
            <Link to="#" class="instagram"><i class="bx bxl-instagram"></i></Link>
          </div>
        </div>
      </footer>
    );
}
export default Footer