<?php include('assets/header.php'); ?>

<!-- Contact Banner -->
<section class="cntct-bnr">
    <div class="conatiner">
        <div class="row">
            <div class="col-lg-12">
                <div class="bnr-txt">
                    <h1>Contact-Us</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Banner Ends-->
<!-- Contact Details -->
<section class="cntct-det p-90">
    <div class="container">
        <div class="row g-4 justify-content-center">
            <div class="col-lg-4 col-md-6">
                <a
                    href="https://www.google.com/maps/dir//Dr+Robin+Bohat+Health+square+multi+speciality+clinic+SCO+655+Sector+70+Sahibzada+Ajit+Singh+Nagar,+Punjab+160071/@30.6957932,76.7186371,16z/data=!4m8!4m7!1m0!1m5!1m1!1s0x390fef6538e19009:0x8a8e71055719afb9!2m2!1d76.7186371!2d30.6957932">
                    <div class="bx-det">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <div class="det-txt">
                            <h3>Location</h3>
                            <p>Health Square Multispecially Cilinc, SCO 655, Sector 70, Mohali</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a href="tel:+919888487936">
                    <div class="bx-det">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <div class="det-txt">
                            <h3>Phone Number</h3>
                            <p>+91 9888 487 936</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="bx-det">
                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                    <div class="det-txt">
                        <h3>Work Time</h3>
                        <p>Mon - Fri: 9:00 AM - 6:00<br>
                            Saturday: 9:00 AM - 5:00<br>
                            Sunday: Closed</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-6 col-md-12">
                <div class="map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3430.8038971191568!2d76.71644841513053!3d30.69579318165007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fef6538e19009%3A0x8a8e71055719afb9!2sDr%20Robin%20Bohat!5e0!3m2!1sen!2sin!4v1674561209806!5m2!1sen!2sin"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="news-form">

                    <form action="">
                        <div class="form-input">
                            <input type="text" placeholder="Your Name" class="form-control">
                            <input type="number" placeholder="Your Phone" class="form-control">
                        </div>
                        <div class="form-input">
                            <input type="email" placeholder="Your Email" class="form-control">
                            <input type="datetime-local" placeholder="01-01-2020" class="form-control">
                        </div>
                        <div class="form-input">
                            <select id="department" name="Select Departments" class="form-control">
                                <option value="volvo">Select Departments</option>
                                <option value="Surgeon">Surgeon</option>
                                <option value="Endoscopist">Endoscopist</option>
                                <option value="Clinic">Clinic</option>
                                <option value="Gynecologist">Gynecologist</option>
                            </select>
                            <select id="cars" name="Doctos One" class="form-control">
                                <option value="volvo">Doctos One</option>
                                <option value="saab">Saab</option>
                                <option value="fiat">Fiat</option>
                                <option value="audi">Audi</option>
                            </select>
                        </div>
                        <textarea cols="30" rows="5" name="message" id="message" class="form-control"
                            placeholder="Enter Your Message"></textarea>
                        <a href="#"><button class="map-btn h-btn" type="submit">Make an Appointment</button></a>
                    </form>
                </div>
            </div>
        </div>


    </div>
</section>
<!-- Contact Details Ends-->


<?php include('assets/footer.php'); ?>