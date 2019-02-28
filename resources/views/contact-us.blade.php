@extends('layouts.front-end')

@section('content')

    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/page-title-12.jpg);">
        <div class="auto-container">
            <h1>Contact us</h1>
        </div>
    </section>

    <!--Page Info-->
    <section class="page-info">
        <div class="auto-container clearfix">
            <div class="pull-left"><h3>Contact Us</h3></div>
            <div class="pull-right">
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </section>


    <!--Contact Style One / Extended-->
    <section class="contact-style-one extended">
        <div class="auto-container">

            <!--Form Container-->
            <div class="form-column form-container">
                <div class="info-box">
                    <div class="upper-content">
                        <h3>Feel Free to contact us</h3>
                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi ullam tempore ratione distinctio ex omnis. <br>consectetur ipsum dolor sit amet, consectetur adipisicing elit. Quos ut, repudiandae iusto!</div>
                    </div>

                    <div class="default-form">
                        <form method="post" action="http://world5.commonsupport.com/html2/HealthEra/contact.html" id="contact-form">
                            <div class="row clearfix">

                                <div class="col-md-6 col-sm-6 col-xs-12">

                                    <div class="form-group">
                                        <input type="text" name="username" value="" placeholder="Your Name *" required>
                                    </div>

                                    <div class="form-group">
                                        <input type="email" name="email" value="" placeholder="Your Email *" required>
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="phone" value="" placeholder="Your Phone *" required>
                                    </div>

                                    <div class="form-group ">
                                        <input type="text" name="subject" value="" placeholder="Your Subject *">
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <textarea name="message" placeholder="Your Requirement" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="theme-btn btn-style-one">send Message</button>
                                    </div>
                                </div>

                            </div>

                        </form>

                    </div>

                </div>
            </div>

            <div class="row clearfix">
                <div class="column map-column col-md-8 col-sm-12 col-xs-12">

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50276.76272039557!2d-78.51999345575985!3d38.04014985578252!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b3862dea50a48f%3A0x9086f096c38b74fc!2sCharlottesville%2C+VA%2C+USA!5e0!3m2!1sen!2sng!4v1551387097056" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    <!--Map Canvas-->
                    <!--  <div class="map-canvas"
                         data-zoom="10"
                         data-lat="23.820208"
                         data-lng="90.413266"
                         data-type="roadmap"
                         data-hue="#e9e5dc"
                         data-title="Dhaka"
                         data-content="Dhaka 1206, Bangladesh<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
                     </div> -->
                </div>

                <div class="column contact-column col-md-4 col-sm-12 col-xs-12">
                    <h2>Contact Info</h2>
                    <ul class="contact-info">
                        <li><div class="icon-box"><span class="icon flaticon-placeholder"></span></div>CHARLOTTESVILLE, VA 22903, USA and <br>
                            LOFA COUNTY REPUBLIC OF LIBERIA</li>
                        <li><div class="icon-box"><span class="icon flaticon-envelope"></span></div>801-413-9793 <!-- <br> --><!-- (+01) 123 456 7899 --></li>
                        <li><div class="icon-box"><span class="icon flaticon-phone-call"></span></div>Ehs@Hsnow.Org <!-- <br>Support@HealthEra.Com --></li>
                    </ul>
                </div>


            </div>

        </div>
    </section>
    @endsection