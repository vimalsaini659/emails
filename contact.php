<?php
$title = "Contact Us";
$description = "delivery, item transport, logistics, product delivery, product transport, shipping, supply, transport, transport agency, transportation";
$keywords = "Interstate From Adelaid";
$site_name = "shoolin-logistics";
$page = 'contact.php';
include 'header.php'; ?>
<style>
    .button.theme-btn {
        color: #f1f1f1;
        font-weight: 900;
        width: 100%;
    }
</style>
<!-- Menu Sidebar Section Start -->
<div class="body-overlay"></div>

<!-- Page Header Start !-->
<div class="page-breadcrumb-area page-bg" style="background-image: url('images/section-bg/transportation-logistics.jpg')">
    <div class="page-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-wrapper">
                    <div class="page-heading">
                        <h3 class="page-title">Contact Us</h3>
                    </div>
                    <div class="breadcrumb-list">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li class="active"><a href="contact">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End !-->

<!-- Contact-info Section Start !-->
<div class="contact-info-area">
    <div class="container">
        <div class="row gx-xl-5">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="icon-card style-four">
                    <div class="icon">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div class="content">
                        <h2 class="title">Address</h2>
                        <strong>Headquarter</strong>
                        <p class="desc">30N Gould St, Ste R
                            Sheridan,WY 82801</p>
                        <strong>Mailing / Billing Address</strong>
                        <p>2153 Coral Way STE 403 Miami, FL 33145</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="icon-card style-four">
                    <div class="icon">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="content">
                        <h2 class="title">Phone</h2>
                        <p class="desc">+1 305 479 6279<br>
                            +1 786 589 5213</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="icon-card style-four">
                    <div class="icon">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div class="content">
                        <h2 class="title">Email</h2>
                        <p class="desc">shoolin.logistics@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact-info Section End -->
<!-- Contact Form Section Start -->
<div class="contact-form-area">
    <!-- Submit form Start -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="contact-title">
                    <h2>Send Us A Message</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <!-- Comment Form Start -->
                <div class="comment-respond mt-45">
                    <form action="" method="post" autocomplete="off" class="comment-form">
                        <div class="row gx-2">
                            <div class="col-xl-6">
                                <div class="contacts-name">
                                    <label>Name <span class="error">* <?php echo $nameErr; ?></span></label>
                                    <input name="c_name" type="text" placeholder="Your name*" required>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="contacts-email">
                                    <label>Email <span class="error">* <?php echo $emailErr; ?></span></label>
                                    <input name="c_email" type="email" placeholder="Your email*" required>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="contacts-name">
                                    <label>Phone No. <span class="error">* <?php echo $phoneErr; ?></span></label>
                                    <input name="contact_phone" type="number" placeholder="Your phone" pattern="[0-9]{10}" maxlength="10" required>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="contacts-name">
                                    <label>Subject <span class="error">* <?php echo $subErr; ?></span></label>
                                    <input name="contact_subject" type="text" placeholder="Subject" required>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="contacts-message">
                                    <textarea name="comment" cols="20" rows="3" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <input class="button theme-btn" type="submit" name="c_submit" value="Submit Now">
                                <!-- <button class="theme-btn" type="submit">Submit Now <spna class="icon"><i
                                            class="fa-solid fa-angle-right"></i></spna></button> -->
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Comment Form End -->
            </div>
        </div>
    </div>
    <!-- Submit form End -->
</div>
<!-- Contact Form Section End -->


<!-- Map start -->
<div class="contact-map-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="contact-title">
                    <h5>Main depot in USA</h5>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="map-wodget">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2831.167518058791!2d-106.95752532327532!3d44.797774577655765!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5335fabc2a655555%3A0x1c51cf4701e8f9cb!2s30N%20N%20Gould%20St%20Suite%20R%2C%20Sheridan%2C%20WY%2082801%2C%20USA!5e0!3m2!1sen!2sin!4v1708584465903!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Map end -->



<!-- Map start -->
<!-- <div class="contact-map-area2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="contact-title">
                    <h6>Our Depots Australia-wide</h6>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                <div class="map-wodget">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d212615.3807793155!2d138.38748859635285!3d-33.628251662023054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ab0b7d0d256957d%3A0x3d1907dbd4f60bac!2s14%20Manthorpe%20St%2C%20Dry%20Creek%20SA%205094%2C%20Australia!5e0!3m2!1sen!2sin!4v1690002788111!5m2!1sen!2sin"
                        style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="col-4">
                <div class="wpb_wrapper">
                    <h5>MELBOURNE DEPOT</h5>
                    <div class="continfo_item">34 Garden Street<br>
                        PO BOX 411<br>
                        Kilsyth, VIC, 3137</div>
                    <div class="continfo_item"><span style="color: #ff0000;"><a style="color: #ff0000;"
                                href="mailto:vic@dutt.com.au">vic@dutt.com.au</a></span></div>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-8">
                <div class="map-wodget">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d212615.3807793155!2d138.38748859635285!3d-33.628251662023054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ab0b7d0d256957d%3A0x3d1907dbd4f60bac!2s14%20Manthorpe%20St%2C%20Dry%20Creek%20SA%205094%2C%20Australia!5e0!3m2!1sen!2sin!4v1690002788111!5m2!1sen!2sin"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="col-4">
            <div class="wpb_wrapper">
			<h5 >ADELAIDE DEPOT</h5>
                <div class="continfo_item">75-83 Wilkins Road,<br>
                Wingfield, SA 5013<br>
                </div>
                <div class="continfo_item"><span style="color: #ff0000;"><a style="color: #ff0000;" href="mailto:vic@dutt.com.au">vic@dutt.com.au</a></span></div>

		</div>
    </div>
</div> -->
<!-- Map end -->

<!--- Start Footer !-->
<?php include 'footer.php'; ?>
<?php include 'contact_form.php'; ?>