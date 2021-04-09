import React from 'react';
import Header from './header.js';
import Footer from './footer.js';
import Homepage from './homepage.js';
import About from './about.js';
import Contact from './contact.js';
import Booking from './booking.js';
import Feedback from './feedback';
import Gallery from './gallery.js';
import Services from './services.js'
import { BrowserRouter, Switch, Route } from 'react-router-dom';
// import './App.css';
import './assets/vendor/animate.css/animate.min.css';
import './assets/vendor/aos/aos.css';
import './assets/vendor/bootstrap/css/bootstrap.min.css';
import './assets/vendor/bootstrap-icons/bootstrap-icons.css';
import './assets/vendor/boxicons/css/boxicons.min.css';
import './assets/vendor/remixicon/remixicon.css';
import './assets/vendor/swiper/swiper-bundle.min.css';
// import 'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i';
import './assets/css/style.css';
// import './assets/vendor/bootstrap/js/bootstrap.bundle.min.js';
// import './assets/vendor/php-email-form/validate.js';
// import './assets/vendor/aos/aos.js';
// import './assets/vendor/swiper/swiper-bundle.min.js';
// import './assets/js/main.js';

function App() {
  return (
    <div className="App">
      <meta charset="utf-8" />
      <meta content="width=device-width, initial-scale=1.0" name="viewport" />
      <title>Homepage</title>
      <meta content="" name="description" />
      <meta content="" name="keywords" />

      <BrowserRouter>
        <Header />
        <Switch>
          <Route exact path='/' component={Homepage} />
          <Route path='/about' component={About} />
          <Route path='/contact' component={Contact} />
          <Route path='/book' component={Booking} />
          <Route path='/feedback' component={Feedback} />
          <Route path='/gallery' component={Gallery} />
          <Route path='/services' component={Services} />
        </Switch>
        <Footer />
      </BrowserRouter>
    </div>
  );
}

export default App;
