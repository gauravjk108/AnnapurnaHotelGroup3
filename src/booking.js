import React from 'react'
function Booking() {
    return (
        <div class = "page">
            <div class="bookform">
                    <h2>Please fill the following form for booking your hotel room</h2>
                    <form>
                        <div class="form"><input type="text" name="firstname" id="fname" placeholder="First Name e.g. Gaurav" required/></div>
                        <div class="form"><input type="text" name="lastname" id="lname" placeholder="Last Name e.g. Kunwar" required/></div>
                        <div class="form"><input type="text" name="phonenumber" id="phnnum" placeholder="Phone Number e.g. +9779800006600" required/></div>
                        <div class="form"><input type="text" name="email" id="mail" placeholder="Email Address e.g. someone@email.com" required/></div>
                        <div class="form"><h2>Check In:</h2> <input type="date" name="checkin" id="checkin" value="2020-01-01" required/></div>
                        <div class="form"><h2>Check Out:</h2> <input type="date" name="checkout" id="checkout" value="2020-01-01" required/></div>
                        <div class="form"><input type="number" name="guestnum" id="guestnum" placeholder="How many guests?" required/></div>
                        <div class="form">
                            <input type="submit" name="submit" id="sub"/>
                        </div>
                    </form>
                </div>
        </div>
    );
}
export default Booking