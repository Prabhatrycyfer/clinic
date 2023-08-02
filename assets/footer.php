<footer>
    <div class="container p-90">
        <div class="row">
            <div class="col-lg-3">
                <div class="brnd-foot">
                    <img src="./images/footer-logo.png" alt="footer-logo.png">
                    <p>
                        Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to
                        using 'Content here, content here', making it look l
                    </p>
                    <div class="soc-icn-foot d-flex">
                        <a href="https://www.facebook.com/photo/?fbid=632211062243877&set=a.452226480242337">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.instagram.com/p/Cnjc_wJPFM-/">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.linkedin.com/feed/update/urn:li:activity:7021430082002956288/">
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="row r-foot d-flex">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="qui-link">
                            <ul class="m-0">
                                <h2>Quick Links</h2>
                                <a href="index.php">
                                    <li>Home</li>
                                </a>
                                <a href="about.php">
                                    <li>About</li>
                                </a>
                                <a href="services.php">
                                    <li>Services</li>
                                </a>
                                <a href="contact.php">
                                    <li>Contact-Us</li>
                                </a>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="qui-link">
                            <ul class="m-0">
                                <h2>Services</h2>
                                <a href="#">
                                    <li>Obstetrician-gynecologist</li>
                                </a>
                                <a href="#">
                                    <li>Surgeon</li>
                                </a>
                                <a href="#">
                                    <li>Endoscopist</li>
                                </a>
                                <a href="#">
                                    <li>Clinic</li>
                                </a>
                                <a href="#">
                                    <li>Gynecologist</li>
                                </a>
                                <a href="#">
                                    <li>Maternity Centre</li>
                                </a>
                                <a href="#">
                                    <li>Fertility Doctor</li>
                                </a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="qui-link li-fut">
                    <ul class="m-0">
                        <h2>Contact Information</h2>
                        <a
                            href="https://www.google.com/maps/dir//dr+robin+bohat/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x390fef6538e19009:0x8a8e71055719afb9?sa=X&ved=2ahUKEwi_i_nZue78AhXCS2wGHQlEATkQ9Rd6BAhnEAU">
                            <li><i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span>Health Square Multispeciality Clinic SCO 655 Sec 70 Mohali</span>
                            </li>
                        </a>
                        <a href="mailto:Bahotrobin@gmail.com">
                            <li><i class="fa fa-envelope-o" aria-hidden="true"></i>
                                <span>Bahotrobin@gmail.com</span>
                            </li>
                        </a>
                        <a href="tel:+919888487936">
                            <li> <i class="fa fa-volume-control-phone call-tb" aria-hidden="true"></i>
                                <span>+91 9888 487 936</span>
                            </li>
                        </a>
                        <a target="_blank" href=" https://web.whatsapp.com/send?phone=+9198884879369888487936&text=Hi, I would like to
                            get more information..">
                            <li><i class="fa fa-whatsapp" aria-hidden="true"></i>
                                <span>Whatsapp-Us</span>
                            </li>
                        </a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>

<!-- Owl Jquery -->
<script>
    $('#owl-carousel').owlCarousel({
        loop: true,
        margin: 30,
        dots: true,
        nav: true,
        items: 1,
    })
</script>
<!-- Owl Jquery -->

<script>

    function visible(partial) {
        var $t = partial,
            $w = jQuery(window),
            viewTop = $w.scrollTop(),
            viewBottom = viewTop + $w.height(),
            _top = $t.offset().top,
            _bottom = _top + $t.height(),
            compareTop = partial === true ? _bottom : _top,
            compareBottom = partial === true ? _top : _bottom;

        return ((compareBottom <= viewBottom) && (compareTop >= viewTop) && $t.is(':visible'));

    }

    $(window).scroll(function () {

        if (visible($('.count-digit'))) {
            if ($('.count-digit').hasClass('counter-loaded')) return;
            $('.count-digit').addClass('counter-loaded');

            $('.count-digit').each(function () {
                var $this = $(this);
                jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
                    duration: 5000,
                    easing: 'swing',
                    step: function () {
                        $this.text(Math.ceil(this.Counter));
                    }
                });
            });
        }
    })


</script>
<!-- Pop-Up form Jquery -->
<script>

    function closeForm() {
        $('.form-popup-bg').removeClass('is-visible');
    }

    $(document).ready(function ($) {

        /* Contact Form Interactions */
        $('#btnOpenForm').on('click', function (event) {
            event.preventDefault();

            $('.form-popup-bg').addClass('is-visible');
        });

        //close popup when clicking x or off popup
        $('.form-popup-bg').on('click', function (event) {
            if ($(event.target).is('.form-popup-bg') || $(event.target).is('#btnCloseForm')) {
                event.preventDefault();
                $(this).removeClass('is-visible');
            }
        });



    });

</script>
<!-- Pop-Up form Jquery -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>