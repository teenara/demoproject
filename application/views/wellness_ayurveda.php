<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('common/head'); ?>

</head>

<body>
    <?php $this->load->view('common/preloader'); ?>
    <?php $this->load->view('common/menu'); ?>
    <!-- header area start -->
    <div class="header-area header-bg" style="background-image:url(assets/img/bg/banner-bg.png);">
        <div class="container">
            <div class="banner-slider banner-slider-one">
                <div class="banner-slider-item">
                    <div class="row">
                        <div class="col-xl-5 col-lg-6 col-md-6 offset-xl-1">
                            <div class="header-inner-details">
                                <div class="header-inner">
                                    <h1 class="title s-animate-1">Advanced <span>Ayurveda</span> </h1>
                                    <div class="btn-wrapper desktop-left padding-top-20">
                                        <a href="#" class="btn btn-radius btn-green s-animate-3">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 hidden-sm">
                            <div class="banner-thumb-wrap">
                                <div class="banner-thumb">
                                    <img class="header-inner-img" src="assets/img/wellnessImages/BannerImages/ayurveda001.png" alt="banner-img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-slider-item">
                    <div class="row">
                        <div class="col-xl-5 col-lg-6 col-md-6  offset-xl-1">
                            <div class="header-inner-details">
                                <div class="header-inner">
                                    <h1 class="title s-animate-1">Wellness <span>Diet</span> </h1>
                                    <div class="btn-wrapper desktop-left padding-top-20">
                                        <a href="#" class="btn btn-radius btn-green s-animate-3">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 hidden-sm">
                            <div class="banner-thumb-wrap">
                                <div class="banner-thumb">
                                    <img class="header-inner-img" src="assets/img/wellnessImages/BannerImages/diet.png" alt="banner-img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-slider-item">
                    <div class="row">
                        <div class="col-xl-5 col-lg-6 col-md-6  offset-xl-1">
                            <div class="header-inner-details">
                                <div class="header-inner">
                                    <h1 class="title s-animate-1">Physical <span>Fitness</span></h1>
                                    <div class="btn-wrapper desktop-left padding-top-20">
                                        <a href="#" class="btn btn-radius btn-green s-animate-3">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 hidden-sm">
                            <div class="banner-thumb-wrap">
                                <div class="banner-thumb">
                                    <img class="header-inner-img" src="assets/img/wellnessImages/BannerImages/fitness.png" alt="banner-img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header area End -->


    <!-- About area start -->
    <div class="sbs-what-riyaqas pd-default-120 mg-top-105" style="background-image:url(assets/img/bg/1h1.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 wow animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
                    <img src="assets/img/wellnessImages/BannerImages/visionAndMission.png" alt="img">
                </div>
                <div class="col-xl-5 col-lg-6 desktop-center-item">
                    <div class="desktop-center-area wow animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                        <div class="section-title style-two">
                            <h2 class="title">Vision & <span>Mission</span></h2>
                            <p>We envision a healthy global society progressing in the infinite path of development. We
                                reach out to the global community with a mission to encourage holistic wellness by
                                educating and supporting the public about illness prevention and wellness promotion
                                through time tested and scientific combinations of advanced Ayurveda, modern science and
                                other aligned health sciences, all delivered via an IT & AI platform.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About area End -->


    <!-- service area start -->
    <div class="service-area pd-top-112">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-10">
                    <div class="section-title text-center margin-bottom-90">
                        <h2 class="title">What We <span> Provide!</span></h2>
                    </div>
                </div>
            </div>
            <div class="row custom-gutters-16">
                <div class="col-xl-3 col-md-6 col-sm-6">
                    <div class="single-service">
                        <img src="assets/img/wellnessImages/SVG/wellnessScore.svg" alt="service">
                        <h6><a href="#">Wellness Score & Sub-score</a></h6>
                        <p>You will get the overall score of your wellness as well as sub scores of the individual aspects.
                            You can thus understand your overall health,identify the stronger aspects and those aspects requiring improvement of your overall health.</p>

                        <div class="read-more">
                            <a href="#"><img src="assets/img/service/arrow.png" alt="arrow"></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-6">
                    <div class="single-service">
                        <img src="assets/img/wellnessImages/SVG/personalizedWellness.svg" alt="service">
                        <h6><a href="#">Personalised Wellness Report</a></h6>
                        <p>Based on an assessment and analysis of your lifestyle and habits, we give you a detailed wellness report, the wellness manual for your whole system.<br>
                        </p><br><br><br>
                        <div class="read-more">
                            <a href="#"><img src="assets/img/service/arrow.png" alt="arrow"></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-6">
                    <div class="single-service">
                        <img src="assets/img/wellnessImages/SVG/wellnessConsultation.svg" alt="service">
                        <h6><a href="#">Wellness Consultation</a></h6>
                        <p>Get consultation with health experts at your
                            fingertips. We are backed by a huge team
                            of experienced medical experts, doctors,
                            dieticians, life style experts whom you can
                            readily approach.</p><br><br>
                        <div class="read-more">
                            <a href="#"><img src="assets/img/service/arrow.png" alt="arrow"></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-6">
                    <div class="single-service">
                        <img src="assets/img/wellnessImages/SVG/wellnessStore.svg" alt="service">
                        <h6><a href="#">Wellness Store</a></h6>
                        <p>Wellness is also associated with what you
                            consume and use in your daily life. We open
                            up handpicked collection of wellness-products
                            that you can adopt for a healthy living
                            through our e-commerce wing.</p><br><br>
                        <div class="read-more">
                            <a href="#"><img src="assets/img/service/arrow.png" alt="arrow"></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-6">
                    <div class="single-service">
                        <img src="assets/img/wellnessImages/SVG/healthRecord.svg" alt="service">
                        <h6><a href="#">Health Record</a></h6>
                        <p>Our platform also acts as an archive for all your medical records including those of health
                            history, illnesses, treatments undergone, medical tests done, surgeries undergone if any
                            etc.</p><br><br><br>
                        <div class="read-more">
                            <a href="#"><img src="assets/img/service/arrow.png" alt="arrow"></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-6">
                    <div class="single-service">
                        <img src="assets/img/wellnessImages/SVG/integratedFamily.svg" alt="service">
                        <h6><a href="#">Integrated Family Wellness Plan</a></h6>
                        <p>A one-point access to the wellness of an entire family. A feature that allows more than one
                            members of a family to access and monitor the wellness status of every family member from
                            the youngest to eldest apart from their own. </p>
                        <div class="read-more">
                            <a href="#"><img src="assets/img/service/arrow.png" alt="arrow"></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-6">
                    <div class="single-service">
                        <img src="assets/img/wellnessImages/SVG/specialWellness.svg" alt="service">
                        <h6><a href="#">Special Wellness Packages</a></h6>
                        <p>We provide highly custom-designed wellness packages meant for specific cases such as pregnant women, nursing mothers, elderly people, those who suffering from chronic
                            diseases like cancer or life style diseases such as diabetes etc. </p>
                        <div class="read-more">
                            <a href="#"><img src="assets/img/service/arrow.png" alt="arrow"></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-6">
                    <div class="single-service">
                        <img src="assets/img/wellnessImages/SVG/HRManagement.svg" alt="service">
                        <h6><a href="#">HR Management Kit</a></h6>
                        <p>A unique approach to assessment of human resources. We assess the physical,
                            mental and emotional wellness of candidates to examine their fitness and suitability for a given career or job.
                        </p><br><br><br>
                        <div class="read-more">
                            <a href="#"><img src="assets/img/service/arrow.png" alt="arrow"></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-6">
                    <div class="single-service">
                        <img src="assets/img/wellnessImages/SVG/homeRemedies.svg" alt="service">
                        <h6><a href="#">Home remedies and beauty care</a></h6>
                        <p>We provide time tested and safe home remedies using items that are common to every household. We also provide personalised beauty care
                            that fits the body nature of a person ensuring the effects and benefits last longer.
                        </p>
                        <div class="read-more">
                            <a href="#"><img src="assets/img/service/arrow.png" alt="arrow"></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-6">
                    <div class="single-service">
                        <img src="assets/img/wellnessImages/SVG/healthWellnessCommunity.svg" alt="service">
                        <h6><a href="#">Health & Wellness Community</a></h6>
                        <p>Our platform allows you to get easy access to a large community of experts apart from common
                            people to get information, updates and guidelines related to contemporary health issues,
                            pandemics etc
                        </p>
                        <div class="read-more">
                            <a href="#"><img src="assets/img/service/arrow.png" alt="arrow"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service area End -->

    <!-- our speciality area start -->
    <div class="sbst-offer-area pd-top-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-10">
                    <div class="section-title text-center">
                        <h2 class="title wow animated fadeInUp" data-wow-duration="0.6s" data-wow-delay="0.1s">Our
                            <span>Specialities</span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row custom-gutters-28 justify-content-center">
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single-offer wow animated fadeInUp" data-wow-duration="0.6s" data-wow-delay="0.1s">
                        <div class="media">
                            <div class="media-body align-self-center">
                                <h6>Customized Personal Wellness Plan</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single-offer wow animated fadeInUp" data-wow-duration="0.6s" data-wow-delay="0.3s">
                        <div class="media">

                            <div class="media-body align-self-center">
                                <h6>Advanced Ayurveda Wellness</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single-offer wow animated fadeInUp" data-wow-duration="0.6s" data-wow-delay="0.5s">
                        <div class="media">

                            <div class="media-body align-self-center">
                                <h6>Holistic & Integrated Medicine</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single-offer wow animated fadeInUp" data-wow-duration="0.6s" data-wow-delay="0.7s">
                        <div class="media">

                            <div class="media-body align-self-center">
                                <h6>Digitalising Ayurveda Wellness</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single-offer wow animated fadeInUp" data-wow-duration="0.6s" data-wow-delay="0.8s">
                        <div class="media">

                            <div class="media-body align-self-center">
                                <h6>AI Driven Advanced Technology</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single-offer wow animated fadeInUp" data-wow-duration="0.6s" data-wow-delay="1.0s">
                        <div class="media">

                            <div class="media-body align-self-center">
                                <h6>Globally Suitable Wellness Plans</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single-offer wow animated fadeInUp" data-wow-duration="0.6s" data-wow-delay="1.0s">
                        <div class="media">

                            <div class="media-body align-self-center">
                                <h6>Unique Data Analytics & Reports</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single-offer wow animated fadeInUp" data-wow-duration="0.6s" data-wow-delay="1.0s">
                        <div class="media">

                            <div class="media-body align-self-center">
                                <h6>System Generated Reports</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single-offer wow animated fadeInUp" data-wow-duration="0.6s" data-wow-delay="1.0s">
                        <div class="media">

                            <div class="media-body align-self-center">
                                <h6>Wellness Plan For Whole Family</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- our speciality area End -->

    <!-- advanced ayurveda area Start -->
    <div class="testimonial-section sbs-testimonial-section pd-top-105 pd-bottom-120" style="background-image:url(assets/img/bg/1h3.png);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-6 pd-xl-5 order-lg-12 align-self-center ">
                    <div class="section-title style-two mb-0">
                        <h2 class="title">Advanced<span> Ayurveda</span></h2>
                        <p>All round holistic wellness through <br> advanced ayurveda, modern science and<br>other
                            aligned health science</p>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="sbs-testimonial-slider">
                        <div class="choose_slider">
                            <div class="choose_slider_items">
                                <ul id="testimonial-slider">
                                    <li class="current_item">
                                        <div class="media">
                                            <div class="media-body">
                                                <h6>Physical Health Plans</h6>
                                            </div>
                                        </div>
                                        <p>Wellness diet plan<br>Physical fitness plan</p>
                                    </li>
                                    <li class="current_item">
                                        <div class="media">
                                            <div class="media-body">
                                                <h6>Mental Health Plans</h6>
                                            </div>
                                        </div>
                                        <p>Mind Management plan<br>Healthy sleep plan<br>De addiction & habit management
                                        </p>
                                    </li>
                                    <li class="current_item">
                                        <div class="media">
                                            <div class="media-body">
                                                <h6>Personal Care Plans</h6>
                                            </div>
                                        </div>
                                        <p>Healthy routine plan<br>Wellness beauty care</p>
                                    </li>
                                    <li class="current_item">
                                        <div class="media">
                                            <div class="media-body">
                                                <h6>Wellness Monitors & Updates</h6>
                                            </div>
                                        </div>
                                        <p>Customized wellness score analysis<br>Daily wellness monitors<br>Wellness
                                            progress reports<br>Health record</p>
                                    </li>
                                    <li class="current_item">
                                        <div class="media">
                                            <div class="media-body">
                                                <h6>Wellness Consultation & Guidances</h6>
                                            </div>
                                        </div>
                                        <p>Expert wellness consultation<br>Consultation for chronic
                                            illnesses<br>Authentic home remedies<br>Blog free videos and research
                                            updates</p>
                                    </li>
                                    <li class="current_item">
                                        <div class="media">
                                            <div class="media-body">
                                                <h6>Human Resource Management Kit</h6>
                                            </div>
                                        </div>
                                        <p>Our support team will get assistance from AI-powered suggestions, making it
                                            quicker than ever to handle support requests.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="sbs-arrowleft"><a id="btn_next" href="#"><i class="fa fa-long-arrow-left"></i></a>
                        </div>
                        <div class="sbs-arrowright"><a id="btn_prev" href="#"><i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- advanced ayurveda area End -->


    <!-- Special Plan area start -->
    <div class="leftside-image-area service-area sbs-business-tool pd-bottom-120 mg-top-120" style="background-image:url(assets/img/bg/1h2.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-7 wow animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
                    <img src="assets/img/wellnessImages/specialPlan.png" alt="img">
                </div>
                <div class="col-xl-5 col-lg-6 desktop-center-item">
                    <div class="desktop-center-area wow animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                        <div class="section-title style-two">
                            <h2 class="title">Special <span>Plan </span> </h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="riyaqas-check-list media">
                                    <img class="media-left" src="assets/img/icons/check.svg" alt="check">
                                    <span>Weight management plan</span>
                                </div>
                                <div class="riyaqas-check-list media">
                                    <img class="media-left" src="assets/img/icons/check.svg" alt="check">
                                    <span>Woman health plan</span>
                                </div>
                                <div class="riyaqas-check-list media mg-bottom-0-991">
                                    <img class="media-left" src="assets/img/icons/check.svg" alt="check">
                                    <span>Senior citizen plan</span>
                                </div>
                                <div class="riyaqas-check-list media mg-bottom-0-991">
                                    <img class="media-left" src="assets/img/icons/check.svg" alt="check">
                                    <span>Integrated family health plan</span>
                                </div>
                                <div class="riyaqas-check-list media mg-bottom-0-991">
                                    <img class="media-left" src="assets/img/icons/check.svg" alt="check">
                                    <span>Pregnancy & neonatal care.</span>
                                </div>
                                <div class="riyaqas-check-list media mg-bottom-0-991">
                                    <img class="media-left" src="assets/img/icons/check.svg" alt="check">
                                    <span>Youth power pack plan</span>
                                </div>
                                <div class="riyaqas-check-list media mg-bottom-0-991">
                                    <img class="media-left" src="assets/img/icons/check.svg" alt="check">
                                    <span>Infertility care</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Special Plan area end-->

    <!-- ASPECTS OF wellness area start -->
    <div class="software-store-area mg-top-100 ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2 class="title">WE COVER ALL THE ASPECTS OF <span>WELLNESS</span></h2>
                        <p>Perfect POS software for most retail stores. Access and manage your books from Riyaqas.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-after pd-top-120 pd-bottom-90 jarallax" style="background-image:url(assets/img/bg/8h2.png);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-11">
                        <ul class="software-store-wrap">
                            <li>
                                <a href="#" class="single-software-store text-center">
                                    <div class="thumb">
                                        <img src="assets/img/wellnessImages/wellnessDiet.png" alt="img">
                                    </div>
                                    <h4><br>WELLNESS DIET</h4>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="single-software-store text-center">
                                    <div class="thumb">
                                        <img src="assets/img/wellnessImages/physicalFitness.png" alt="img">
                                    </div>
                                    <h4><br>PHYSICAL FITNESS</h4>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="single-software-store text-center">
                                    <div class="thumb">
                                        <img src="assets/img/wellnessImages/healthySleep.png" alt="img">
                                    </div>
                                    <h4><br>HEALTHY SLEEP </h4>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="single-software-store text-center">
                                    <div class="thumb">
                                        <img src="assets/img/wellnessImages/mindMngmt.png" alt="img">
                                    </div>
                                    <h4>MIND MANAGEMENT</h4>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="single-software-store text-center">
                                    <div class="thumb">
                                        <img src="assets/img/wellnessImages/healthyRoutine.png" alt="img">
                                    </div>
                                    <h4><br>HEALTHY ROUTINE</h4>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ASPECTS OF wellness area end -->


    <!-- wellness diet area start -->
    <div class="sbs-what-riyaqas pd-default-120 mg-top-105" style="background-image:url(assets/img/bg/1h1.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 wow animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
                    <img src="assets/img/wellnessImages/wellnessDietPlan.png" alt="img">
                </div>
                <div class="col-xl-5 col-lg-6 desktop-center-item">
                    <div class="desktop-center-area wow animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                        <div class="section-title style-two">
                            <h2 class="title">WELLNESS <span>DIET</span></h2>
                            <p>Wellness diet is the diet that leads to a higher wellness status. Our Highly Customized
                                Diet Plan works in alignment with your natural Digestive Rhythm, innate Body type,
                                Metabolism, Physical & Mental work requirement in addition to calorie and nutrition
                                needs.</p>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="riyaqas-check-list">
                                    <img src="assets/img/icons/check.svg" alt="check">
                                    <span>Diet Awareness</span>
                                </div>
                                <div class="riyaqas-check-list">
                                    <img src="assets/img/icons/check.svg" alt="check">
                                    <span>Daily Diet Recipes</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="riyaqas-check-list">
                                    <img src="assets/img/icons/check.svg" alt="check">
                                    <span>Special Diet</span>
                                </div>
                                <div class="riyaqas-check-list">
                                    <img src="assets/img/icons/check.svg" alt="check">
                                    <span>Tracking & Monitoring</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- wellness diet area End -->

    <!-- Diet plan features area start -->
    <div class="sba-featute-area">
        <div class="container">
            <div class="row custom-gutters-16 justify-content-center" style="padding-top: 100px;">
                <div class="col-xl-4 col-lg-9">
                    <div class="section-title style-two text-xl-left text-center">
                        <h2 class="title">Our Wellness <br>Diet Plan<span> Features</span></h2>
                        <p>Know your food!<br> Bestow deit awareness through: </p>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6">
                    <div class="single-feature-left">
                        <div class="single-feature">
                            <div class="media">
                                <img class="media-left" src="assets/img/features/1.svg" alt="feature">
                                <div class="media-body">
                                    <h6>Personalized Diet Report</h6>
                                </div>
                            </div>
                        </div>
                        <div class="single-feature">
                            <div class="media border-radius-2">
                                <img class="media-left" src="assets/img/features/1.svg" alt="feature">
                                <div class="media-body">
                                    <h6>Daily Diet Plan</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 mg-top-80">
                    <div class="single-feature-right">
                        <div class="single-feature">
                            <div class="media border-radius-3">
                                <img class="media-left" src="assets/img/features/1.svg" alt="feature">
                                <div class="media-body">
                                    <h6>Weekly Diet Evaluation Report & Monitor</h6>
                                </div>
                            </div>
                        </div>
                        <div class="single-feature">
                            <div class="media border-radius-4">
                                <img class="media-left" src="assets/img/features/1.svg" alt="feature">
                                <div class="media-body">
                                    <h6>Access To Diet Blogs & Latest Research Journals</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Diet plan features area End -->

    <!-- personilized diet area start -->
    <div class="leftside-image-area service-area sbs-business-tool pd-bottom-120 mg-top-120" style="background-image:url(assets/img/bg/1h2.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-7 wow animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
                    <img src="assets/img/wellnessImages/dietReport.png" alt="img">
                </div>
                <div class="col-xl-5 col-lg-6 desktop-center-item">
                    <div class="desktop-center-area wow animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                        <div class="section-title style-two">
                            <h2 class="title">Personalized <span>Diet</span><br> Report.</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="riyaqas-check-list media">
                                    <img class="media-left" src="assets/img/icons/check.svg" alt="check">
                                    <span>Diet score: Know your present wellness diet status which gradually supports you to achieve maximum wellness from your diet.</span>
                                </div>
                                <div class="riyaqas-check-list media">
                                    <img class="media-left" src="assets/img/icons/check.svg" alt="check">
                                    <span>Customized diet report along with expert recommendations.</span>
                                </div>
                                <div class="riyaqas-check-list media mg-bottom-0-991">
                                    <img class="media-left" src="assets/img/icons/check.svg" alt="check">
                                    <span>Personalized daily diet recommendations.</span>
                                </div>
                                <div class="riyaqas-check-list media mg-bottom-0-991">
                                    <img class="media-left" src="assets/img/icons/check.svg" alt="check">
                                    <span>Diet habit monitoring.</span>
                                </div>
                                <div class="riyaqas-check-list media mg-bottom-0-991">
                                    <img class="media-left" src="assets/img/icons/check.svg" alt="check">
                                    <span>Weekly diet reports: It will help the user to maintain a balanced diet.</span>
                                </div>
                                <div class="riyaqas-check-list media mg-bottom-0-991">
                                    <img class="media-left" src="assets/img/icons/check.svg" alt="check">
                                    <span>Healthy food creates a healthy mind.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- personalized diet area End -->

    <!-- daily diet area Start -->
    <div class="sbtc-team-section mg-top-65">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section-title text-md-center">
                        <h2 class="title"><span>Daily Diet </span>Recipes</h2>
                        <p>One stop solution for all your Diet Concerns…</p>
                        <p>We present you wide varieties of healthy & nutritious recipes which are selected through
                            accurate monitoring of daily wellness status, nutritional requirements and body suitability
                            of users</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <div class="team-slider">
                        <div class="team-slider-item">
                            <div class="row">
                                <div class="col-lg-6 order-lg-12">
                                    <div class="team-member-img">
                                        <div class="team-shape1"></div>
                                        <div class="thumb">
                                            <img src="assets/img/index_1/breakfast.jpg" alt="team">
                                        </div>
                                        <div class="team-shape2"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 order-lg-1">
                                    <div class="team-member-details">
                                        <h3> <span>Breakfast</span></h3>
                                        <ul class="riyaqas-list-3 mb-0">
                                            <li>A healthy breakfast may reduce the risk of illness.</li>
                                            <li> Enhance Immune System.</li>
                                            <li>A balance of carbohydrates, protein, and fiber is the key to any healthy
                                                breakfast</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-slider-item">
                            <div class="row">
                                <div class="col-lg-6 order-lg-12">
                                    <div class="team-member-img">
                                        <div class="team-shape1"></div>
                                        <div class="thumb">
                                            <img src="assets/img/index_1/lunch.jpg" alt="team">
                                        </div>
                                        <div class="team-shape2"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 order-lg-1">
                                    <div class="team-member-details">
                                        <h3> <span>Lunch</span></h3>
                                        <ul class="riyaqas-list-3 mb-0">
                                            <li>Mid noon is the best time for lunch.</li>
                                            <li>Lunch time is the best hunger time.</li>
                                            <li>A delayed lunch ends up with digestion issues and diseases.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-slider-item">
                            <div class="row">
                                <div class="col-lg-6 order-lg-12">
                                    <div class="team-member-img">
                                        <div class="team-shape1"></div>
                                        <div class="thumb">
                                            <img src="assets/img/index_1/mini_meal.jpg" alt="team">
                                        </div>
                                        <div class="team-shape2"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 order-lg-1">
                                    <div class="team-member-details">
                                        <h3> <span>Mini meals</span></h3>
                                        <ul class="riyaqas-list-3 mb-0">
                                            <li>Improves your energy levels.</li>
                                            <li>Provide mental clarity.</li>
                                            <li>Assist in maintaining your blood sugar levels throughout the day</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-slider-item">
                            <div class="row">
                                <div class="col-lg-6 order-lg-12">
                                    <div class="team-member-img">
                                        <div class="team-shape1"></div>
                                        <div class="thumb">
                                            <img src="assets/img/index_1/dinner.jpg" alt="team">
                                        </div>
                                        <div class="team-shape2"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 order-lg-1">
                                    <div class="team-member-details">
                                        <h3> <span>Dinner</span></h3>
                                        <ul class="riyaqas-list-3 mb-0">
                                            <li>Eating an early dinner is good for health and contributes to better
                                                sleep quality</li>
                                            <li>Optimize cardiac functions & lower the risk of heart attacks.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- daily diet area End -->


    <!-- Special diet recipes area start -->
    <div class="sbtc-team-section mg-top-65">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section-title text-md-center">
                        <h2 class="title"><span>Special Diet </span>Recipes</h2>
                        <p>One stop solution for all your Diet Concerns</p>
                        <p>We present you wide varieties of healthy & nutritious recipes which are selected through
                            accurate monitoring of daily wellness status, nutritional requirements and body suitability
                            of users</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hosting-type-area pd-top-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <ul class="nav nav-tabs sb-hosting-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#d_tabs_1">Immune Boosting Diet</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#d_tabs_2">Bodybuilding diet</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#d_tabs_3">Natural energy drink</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#d_tabs_4"> Detox diet</a>
                        </li>
                </div>
                <div class="col-lg-9">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="d_tabs_1">
                            <div class="single-hosting-content">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="section-title style-two">
                                            <h6 class="title"><span>Immune Boosting </span>Diet</h6>
                                        </div>
                                        <p>Immune booster food always helps to stay away from so many health
                                            complications.</p>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="thumb">
                                            <img src="assets/img/index_1/immune_boost.png" alt="img">
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="riyaqas-check-list-wrap">
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span>Varieties of immune-boosting diet recipes.</span>
                                            </div>
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span>Specific to each body type.</span>
                                            </div>
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span>To be included in everyday food.</span>
                                            </div>
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span>Natural and Rich in antioxidants.</span>
                                            </div>
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span>Slows down aging.</span>
                                            </div>
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span>Keeps the immune system healthy.</span>
                                            </div>
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span>Activate T and B lymphocytes to fight against
                                                    diseases.</span>
                                            </div>
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span>Reduce respiratory diseases and anti-inflammatory action.</span>
                                            </div>
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span>Reduce sensitivity towards seasonal variations. </span>
                                            </div>
                                            <div class="riyaqas-check-list media mb-0">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span>Fight against toxins from food, water, air, etc</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="d_tabs_2">
                            <div class="single-hosting-content">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="section-title style-two">
                                            <h6 class="title"> <span>Body Building </span>Diet</h6>
                                        </div>
                                        <p>Relax muscles and supply protein especially after workout or strenuous
                                            activity</p>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="thumb">
                                            <img src="assets/img/index_1/bobybuilding.png" alt="img">
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="riyaqas-check-list-wrap">
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span>Improve your physical appearance.</span>
                                            </div>
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span>Healthy natural way of bodybuilding without side effects.</span>
                                            </div>
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span>Helps to improve muscular strength, tone and bulk.</span>
                                            </div>
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span>Prevent wrinkling of skin and keep you young.</span>
                                            </div>
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span> Strong bones and muscles power.</span>
                                            </div>
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span>Increase personal confidence to do any physical activity.</span>
                                            </div>
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span>Improves your personality</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="d_tabs_3">
                            <div class="single-hosting-content">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="section-title style-two">
                                            <h6 class="title"> Natural <span>Energy Drink </span></h6>
                                        </div>
                                        <p>Improve your energy instantly without adding additional calorie to your diet
                                        </p>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="thumb">
                                            <img src="assets/img/index_1/energy_drink.png" alt="img">
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="riyaqas-check-list-wrap">
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span>It Works as an additional energy supplement. </span>
                                            </div>
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span> Micronutrients and Antioxidants make the body healthy.</span>
                                            </div>
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span>Improve your metabolism and remove weakness and tiredness.</span>
                                            </div>
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span>Rich source of vitamins and minerals.</span>
                                            </div>
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span>Helps in emergency recovery of the body to normal status.</span>
                                            </div>
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span> Helps to balance electrolytes.</span>
                                            </div>
                                            <div class="riyaqas-check-list media mb-0">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span>Stabilize glucose level fast.</span>
                                            </div>
                                            <div class="riyaqas-check-list media mb-0">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span> Rich in soluble fibers helps easy absorption to the body.</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="d_tabs_4">
                            <div class="single-hosting-content">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="section-title style-two">
                                            <h6 class="title"> <span>Detox </span>Diet</h6>
                                        </div>
                                        <p>A Detox diet helps to eliminate toxins from the body. Our detox and
                                            fasting measures are highly customised and genetically suitable to specific
                                            body types. This has to be taken when the body shows symptoms of specific
                                            disease tendencies or toxin accumulation.
                                        </p>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="thumb">
                                            <img src="assets/img/index_1/detox.png" alt="img">
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="riyaqas-check-list-wrap">
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span>Improve digestion, absorption, metabolism throughout. </span>
                                            </div>
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span>Blood Purification by activating liver functions and removing
                                                    toxins from the body.</span>
                                            </div>
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span> Purification of blood by activating liver functions and removing
                                                    toxins from the body.</span>
                                            </div>
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span>Helps in tissue level deep cleansing as they are rich in dietary
                                                    fibres.</span>
                                            </div>
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span>Supports natural healing.</span>
                                            </div>
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span>Activate endocrine secretions.</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Special diet recipes area start -->

    <!-- gallery area start -->
    <div class="gallery-area pd-top-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="gallery-masonry-wrapper">
                        <ul class="gallery-menu text-center">
                            <li class="active" data-filter="*">See All</li>
                            <li data-filter=".business">Pregnancy Diet </li>
                            <li data-filter=".finance">Sports Diet</li>
                            <li data-filter=".technology">Brain Stimulating Diet</li>
                        </ul>
                        <div class="gallery-masonry row no-gutters">
                            <div class="col-md-4 col-sm-6 masonry-item business ">
                                <a class="single-work-item text-center" data-effect="mfp-zoom-in" href="assets/img/index_1/Pregnancy_Diet_1.png">
                                    <span class="thumb">
                                        <img src="assets/img/index_1/Pregnancy_Diet_1.png" alt="gallery">
                                    </span>
                                    <span class="content-wrap">
                                        <span class="content">
                                            <span class="cats">Special Diet</span>
                                            <span class="title">Pregnancy Diet</span>
                                        </span>
                                    </span>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 masonry-item  business">
                                <a class="single-work-item text-center" data-effect="mfp-zoom-in" href="assets/img/index_1/Pregnancy_Diet_2.png">
                                    <span class="thumb">
                                        <img src="assets/img/index_1/Pregnancy_Diet_2.png" alt="gallery">
                                    </span>
                                    <span class="content-wrap">
                                        <span class="content">
                                            <span class="cats">Special Diet</span>
                                            <span class="title">Pregnancy Diet</span>
                                        </span>
                                    </span>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 masonry-item finance">
                                <a class="single-work-item text-center" data-effect="mfp-zoom-in" href="assets/img/index_1/Sports_Diet_1.png">
                                    <span class="thumb">
                                        <img src="assets/img/index_1/Sports_Diet_1.png" alt="gallery">
                                    </span>
                                    <span class="content-wrap">
                                        <span class="content">
                                            <span class="cats">Special Diet</span>
                                            <span class="title">Sports Diet</span>
                                        </span>
                                    </span>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 masonry-item finance">
                                <a class="single-work-item text-center" data-effect="mfp-zoom-in" href="assets/img/index_1/Sports_Diet_2.png">
                                    <span class="thumb">
                                        <img src="assets/img/index_1/Sports_Diet_2.png" alt="gallery">
                                    </span>
                                    <span class="content-wrap">
                                        <span class="content">
                                            <span class="cats">Special Diet</span>
                                            <span class="title">Sports Diet</span>
                                        </span>
                                    </span>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 masonry-item  technology">
                                <a class="single-work-item text-center" data-effect="mfp-zoom-in" href="assets/img/index_1/Brain_Stimulating_Diet_1.png">
                                    <span class="thumb">
                                        <img src="assets/img/index_1/Brain_Stimulating_Diet_1.png" alt="gallery">
                                    </span>
                                    <span class="content-wrap">
                                        <span class="content">
                                            <span class="cats">Special Diet</span>
                                            <span class="title"> Brain Stimulating Diet</span>
                                        </span>
                                    </span>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 masonry-item technology ">
                                <a class="single-work-item text-center" data-effect="mfp-zoom-in" href="assets/img/index_1/Brain_Stimulating_Diet_2.png">
                                    <span class="thumb">
                                        <img src="assets/img/index_1/Brain_Stimulating_Diet_2.png" alt="gallery">
                                    </span>
                                    <span class="content-wrap">
                                        <span class="content">
                                            <span class="cats">Special Diet</span>
                                            <span class="title"> Brain Stimulating Diet</span>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- gallery area End -->


    <!-- functionality area start -->
    <div class="inner-area pd-top-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-md-6 order-md-12 mb-md-0 mb-4">
                    <div class="sb-animate-img">
                        <div class="thumb">
                            <img src="assets/img/wellnessImages/functionalities.png" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-md-6 order-md-1 align-self-center">
                    <div class="section-title style-two text-md-left text-center mb-0">
                        <h2 class="title">Advanced Wellness Diet Tracking With <span> AI Functionalities</span></h2>
                        <p>We use advanced AI and Data science technology to track the individual diet to give a
                            personal diet tracking report. Our AI-based advanced tracking system helps to adopt the
                            customized healthy diet from every corner of the world. We analyze the time zones, climate
                            and specific locations from a wellness point of view and bring you the best healthy diet
                            etc. </p>
                        <a class="read-more" href="#">Read More <i class="la la-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- functionality area end -->

    <!-- physical fitness area Start -->
    <div class="sbtc-success-section sbst-provide-security pd-top-80" style="background-image:url(assets/img/bg/9.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="img-with-video img-with-video-2">
                        <div class="img-wrap">
                            <img src="assets/img/wellnessImages/physicalFitnessPlan.png" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 desktop-center-item">
                    <div class="section-title style-two">
                        <h2 class="title">Physical <span>Fitness </span>Plan</h2>
                        <p>Ours is a holistically customized plan. Fitness is not just a toning exercise for muscle
                            build or a weight management mode here. We analyze individual lifestyle components and
                            recommend the most suitable physical activity for an absolute wellness and quality living.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- physical fitness area End -->


    <!-- optimum fitness area start -->
    <div class="software-store-area mg-top-100 ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2 class="title">Optimum <span>Fitness</span></h2>
                        <p>Our research team has developed a fitness module to provide optimum fitness to every
                            individual </p>
                        <p>“Optimum fitness is a condition resulting from a lifestyle that leads to the development of
                            an optimal level of cardiovascular endurance, muscular strength and flexibility as well as
                            the achievement and maintenance of ideal body weight” -The American Council on Exercise
                            (ACE)
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-after pd-top-120 pd-bottom-90 jarallax" style="background-image:url(assets/img/bg/8h2.png);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-11">
                        <ul class="software-store-wrap">
                            <li>
                                <a href="#" class="single-software-store text-center">
                                    <div class="thumb">
                                        <img src="assets/img/wellnessImages/optimumFitness_icons/immuneBoosting.png" alt="img">
                                    </div>
                                    <h4>Enhanced Immunity</h4>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="single-software-store text-center">
                                    <div class="thumb">
                                        <img src="assets/img/wellnessImages/optimumFitness_icons/shape_beauty.png" alt="img">
                                    </div>
                                    <h4><br>Shape & Beauty</h4>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="single-software-store text-center">
                                    <div class="thumb">
                                        <img src="assets/img/wellnessImages/optimumFitness_icons/weightManagement.png" alt="img">
                                    </div>
                                    <h4>Weight Management</h4>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="single-software-store text-center">
                                    <div class="thumb">
                                        <img src="assets/img/wellnessImages/optimumFitness_icons/balancedActivatedLifestyle.png" alt="img">
                                    </div>
                                    <h4>Balanced & Activated Lifes</h4>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="single-software-store text-center">
                                    <div class="thumb">
                                        <img src="assets/img/wellnessImages/optimumFitness_icons/Rejuvanation.png" alt="img">
                                    </div>
                                    <h4><br> Rejuvenation </h4>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="single-software-store text-center">
                                    <div class="thumb">
                                        <img src="assets/img/wellnessImages/optimumFitness_icons/strengthBuilding.png" alt="img">
                                    </div>
                                    <h4><br>Strength Building</h4>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="single-software-store text-center">
                                    <div class="thumb">
                                        <img src="assets/img/wellnessImages/optimumFitness_icons/antiAging.png" alt="img">
                                    </div>
                                    <h4><br>Anti Aging</h4>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="single-software-store text-center">
                                    <div class="thumb">
                                        <img src="assets/img/wellnessImages/optimumFitness_icons/muscleBuilding.png" alt="img">
                                    </div>
                                    <h4><br>Muscle Building </h4>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="single-software-store text-center">
                                    <div class="thumb">
                                        <img src="assets/img/wellnessImages/optimumFitness_icons/stressManagement.png" alt="img">
                                    </div>
                                    <h4>Stress Management</h4>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- optimum fitness area end -->


    <div class="hosting-type-area pd-top-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <ul class="nav nav-tabs sb-hosting-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#d_tabs_5">FITNESS REPORT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#d_tabs_6">FITNESS TRACKING</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#d_tabs_7">LIVE TRAINING</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#d_tabs_8"> ADVANCED FITNESS PLAN</a>
                        </li>
                </div>
                <div class="col-lg-9">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="d_tabs_5">
                            <div class="single-hosting-content">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="section-title style-two">
                                            <h6 class="title"><span>FITNESS </span> REPORT</h6>
                                        </div>
                                        <!-- <p>Immune booster food always helps to stay away from so many health complications.</p> -->
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="thumb">
                                            <img src="assets/img/index_1/fitness_report.png" alt="img">
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="riyaqas-check-list-wrap">
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span> Fitness score : know your present fitness status </span>
                                            </div>
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span> Customized fitness report(along with expert recommendations) </span>
                                            </div>
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span> Advanced Workout injury prevention & healing</span>
                                            </div>
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span> Fitness remedies</span>
                                            </div>
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span>Fitness monitoring</span>
                                            </div>
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span>Weekly fitness and activity reports </span>
                                            </div>
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span> Optimum fitness is the best way to fastly boost your over all wellness score</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="d_tabs_6">
                            <div class="single-hosting-content">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="section-title style-two">
                                            <h6 class="title"> <span>FITNESS </span>TRACKING</h6>
                                        </div>
                                        <!-- <p>Relax muscles and supply protein especially after workout or strenuous activity</p> -->
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="thumb">
                                            <img src="assets/img/index_1/fitness_tracking.png" alt="img">
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="riyaqas-check-list-wrap">
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span>Swimming, Walking, Running, Cycling, Heart Rate Monitoring </span>
                                            </div>
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span>Our platform can easily integrate with any kind of fitness
                                                    tracking devices like smart watches, smart band </span>
                                            </div>
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span>Weekly report based on daily tracking</span>
                                            </div>
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span> Customized Fitness Training </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="d_tabs_7">
                            <div class="single-hosting-content">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="section-title style-two">
                                            <h6 class="title"> LIVE <span>TRAINING </span></h6>
                                        </div>
                                        <!-- <p>Improve your energy instantly without adding additional calorie to your diet</p> -->
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="thumb">
                                            <img src="assets/img/index_1/live_training.png" alt="img">
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="riyaqas-check-list-wrap">
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span> Varieties of Cardio, Weight training, Flexibility training, Yoga,
                                                    Pilates, Mobility work, Dynamic Warm Ups, Strength training </span>
                                            </div>
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span> Amidst the trend of recorded workout videos, we choose to focus
                                                    on providing Live Training on:<br>• Yoga <br>• Zumba <br>• Cardiac Exercise <br>•
                                                    Bodybuilding Workouts</span>
                                            </div>
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span>We specially track current physical conditions like Chronic
                                                    diseases, pregnancy stages, menopause, old age etc. to recommend
                                                    personalized activity plans. </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="d_tabs_8">
                            <div class="single-hosting-content">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="section-title style-two">
                                            <h6 class="title"> <span>ADVANCED FITNESS </span>PLAN</h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="thumb">
                                            <img src="assets/img/index_1/advaced_plan.png" alt="img">
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="riyaqas-check-list-wrap">
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span>Brain stimulating Yoga & Activities for students , youngsters &
                                                    professionals</span>
                                            </div>
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span>Yogasanas, Special Pranayams, Intutive and relaxing Meditations</span>
                                            </div>
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span>Synchronizing the left brain and right brain to boost creativity.</span>
                                            </div>
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span> Strengthening of immune system by energy improvements and its adequate Distributions</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--we provide area end -->

    <!-- Special training area start -->
    <div class="sbtc-team-section mg-top-65">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section-title text-md-center">
                        <h2 class="title"><span>Special Training </span> Categories</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="gallery-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="gallery-masonry-wrapper">
                        <div class="gallery-masonry row no-gutters">
                            <div class="col-md-4 col-sm-6 masonry-item business ">
                                <a class="single-work-item text-center" data-effect="mfp-zoom-in" href="assets/img/index_1/Pregnancy_Diet_1.png">
                                    <span class="thumb">
                                        <img src="assets/img/index_1/Sports_Training_1.png" alt="gallery">
                                    </span>
                                    <span class="content-wrap">
                                        <span class="content">
                                            <span class="cats">Special Training</span>
                                            <span class="title">WOMEN</span>
                                        </span>
                                    </span>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 masonry-item  business">
                                <a class="single-work-item text-center" data-effect="mfp-zoom-in" href="assets/img/index_1/Pregnancy_Diet_2.png">
                                    <span class="thumb">
                                        <img src="assets/img/index_1/Sports_Training_2.png" alt="gallery">
                                    </span>
                                    <span class="content-wrap">
                                        <span class="content">
                                            <span class="cats">Special Training</span>
                                            <span class="title">YOUTH</span>
                                        </span>
                                    </span>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 masonry-item finance">
                                <a class="single-work-item text-center" data-effect="mfp-zoom-in" href="assets/img/index_1/Sports_Diet_1.png">
                                    <span class="thumb">
                                        <img src="assets/img/index_1/Sports_Training_3.png" alt="gallery">
                                    </span>
                                    <span class="content-wrap">
                                        <span class="content">
                                            <span class="cats">Special Training</span>
                                            <span class="title">WEIGHT MANAGEMENT</span>
                                        </span>
                                    </span>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 masonry-item finance">
                                <a class="single-work-item text-center" data-effect="mfp-zoom-in" href="assets/img/index_1/Sports_Diet_2.png">
                                    <span class="thumb">
                                        <img src="assets/img/index_1/Sports_Training_4.png" alt="gallery">
                                    </span>
                                    <span class="content-wrap">
                                        <span class="content">
                                            <span class="cats">Special Training</span>
                                            <span class="title">STRESS MANAGEMENT</span>
                                        </span>
                                    </span>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 masonry-item  technology">
                                <a class="single-work-item text-center" data-effect="mfp-zoom-in" href="assets/img/index_1/Brain_Stimulating_Diet_1.png">
                                    <span class="thumb">
                                        <img src="assets/img/index_1/Sports_Training_5.png" alt="gallery">
                                    </span>
                                    <span class="content-wrap">
                                        <span class="content">
                                            <span class="cats">Special Training</span>
                                            <span class="title">CHRONIC DISEASES</span>
                                        </span>
                                    </span>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 masonry-item technology ">
                                <a class="single-work-item text-center" data-effect="mfp-zoom-in" href="assets/img/index_1/Brain_Stimulating_Diet_2.png">
                                    <span class="thumb">
                                        <img src="assets/img/index_1/Sports_Training_6.png" alt="gallery">
                                    </span>
                                    <span class="content-wrap">
                                        <span class="content">
                                            <span class="cats">Special Training</span>
                                            <span class="title"> SENIOR CITIZEN</span>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Special training area start -->













    <!-- physical fitness area Start -->
    <div class="sbtc-success-section sbst-provide-security pd-top-80" style="background-image:url(assets/img/bg/9.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="img-with-video img-with-video-2">
                        <div class="img-wrap">
                            <img src="assets\img\wellnessImages\we_assure-01.png" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 desktop-center-item">
                    <div class="section-title style-two">
                        <h2 class="title">Healthy <span>Sleep </span>Plan</h2>
                        <p>Sleep is one of the important pillars which sustains life. Daily Sleep is as important as your Daily food. Our Circadian Aligned Sleep Plan works in alignment with your innate Body type, Metabolism, Physical & Mental work requirement, night shifts in addition to sleep habit monitoring.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- physical fitness area End -->


    <!-- optimum fitness area start -->
    <div class="software-store-area mg-top-100 ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2 class="title"> <span>Circadian </span>Aligned Sleep</h2>
                        <p>Ours is a Circadian Aligned Sleep Plan. The sleep-wake cycle in accordance with the natural internal regulation process - the circadian rhythm is a holistic and the most ideal wellness choice for a health oriented world. Circadian rhythm is the 24-hour internal clock in our brain that regulates cycles of alertness and sleepiness by responding to light changes in our environment. Our circadian aligned sleep plan boosts one's physiology, behaviour and immunity by enhancing the sleep quality and correcting the sleep habits in the most ideal way. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-after pd-top-120 pd-bottom-90 jarallax" style="background-image:url(assets/img/bg/8h2.png);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-11">
                        <ul class="software-store-wrap">
                            <li>
                                <a href="#" class="single-software-store text-center">
                                    <div class="thumb">
                                        <img src="assets\img\wellnessImages\Icons\brain_functions.png" alt="img">
                                    </div>
                                    <h4><br>Brain Functions</h4>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="single-software-store text-center">
                                    <div class="thumb">
                                        <img src="assets\img\wellnessImages\Icons\concentration.png" alt="img">
                                    </div>
                                    <h4><br>Concentration</h4>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="single-software-store text-center">
                                    <div class="thumb">
                                        <img src="assets\img\wellnessImages\Icons\Happiness.png" alt="img">
                                    </div>
                                    <h4><br>Happiness</h4>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="single-software-store text-center">
                                    <div class="thumb">
                                        <img src="assets\img\wellnessImages\Icons\Hormon_balance.png" alt="img">
                                    </div>
                                    <h4>Hormone Balance</h4>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="single-software-store text-center">
                                    <div class="thumb">
                                        <img src="assets\img\wellnessImages\Icons\immune_levels.png" alt="img">
                                    </div>
                                    <h4><br>Immune Levels </h4>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="single-software-store text-center">
                                    <div class="thumb">
                                        <img src="assets\img\wellnessImages\Icons\mental_functions.png" alt="img">
                                    </div>
                                    <h4><br>Mental Functions</h4>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="single-software-store text-center">
                                    <div class="thumb">
                                        <img src="assets\img\wellnessImages\Icons\sense_organs.png" alt="img">
                                    </div>
                                    <h4><br>Sense Organs</h4>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="single-software-store text-center">
                                    <div class="thumb">
                                        <img src="assets\img\wellnessImages\Icons\sexual_vigour.png" alt="img">
                                    </div>
                                    <h4><br>Sexual Vigour</h4>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="single-software-store text-center">
                                    <div class="thumb">
                                        <img src="assets\img\wellnessImages\Icons\Skin_Complexion.png" alt="img">
                                    </div>
                                    <h4><br>Skin Complexion</h4>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="single-software-store text-center">
                                    <div class="thumb">
                                        <img src="assets\img\wellnessImages\Icons\stamina.png" alt="img">
                                    </div>
                                    <h4><br>Stamina</h4>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="single-software-store text-center">
                                    <div class="thumb">
                                        <img src="assets\img\wellnessImages\Icons\vital_force_energy.png" alt="img">
                                    </div>
                                    <h4>Vital Force Energy</h4>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- optimum fitness area end -->


    <div class="hosting-type-area pd-top-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <ul class="nav nav-tabs sb-hosting-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#d_tabs_9">SLEEP REPORT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#d_tabs_10">SLEEP TRACKING & HABIT MANAGEMENT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#d_tabs_11"> SLEEP GALLERY- SUPPORTERS & GUIDANCES
                            </a>
                        </li>
                </div>
                <div class="col-lg-9">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="d_tabs_9">
                            <div class="single-hosting-content">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="section-title style-two">
                                            <h6 class="title"><span>SLEEP </span> REPORT</h6>
                                        </div>
                                        <!-- <p>Immune booster food always helps to stay away from so many health complications.</p> -->
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="thumb">
                                            <img src="assets\img\wellnessImages\weProvide_3\040_sleepelf.png" alt="img">
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="riyaqas-check-list-wrap">
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span>Personalised sleep time recommendations </span>
                                            </div>
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span> Sleep quality improving tips</span>
                                            </div>
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span>Bedtime routine for sleep </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="d_tabs_10">
                            <div class="single-hosting-content">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="section-title style-two">
                                            <h6 class="title"> <span>HABIT MANAGEMENT </span>& SLEEP TRACKING</h6>
                                        </div>
                                        <!-- <p>Relax muscles and supply protein especially after workout or strenuous activity</p> -->
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="thumb">
                                            <img src="assets\img\wellnessImages\weProvide_3\sleep-app.png" alt="img">

                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="riyaqas-check-list-wrap">
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span>AI based sleep tracking & monitors </span>
                                            </div>
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span>Facility to integrate with any kind of sleep tracking devices like smart watches, smart band
                                                </span>
                                            </div>
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span>Sleep timing alerts</span>
                                            </div>
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span> Weekly report based on daily sleep pattern
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="d_tabs_11">
                            <div class="single-hosting-content">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="section-title style-two">
                                            <h6 class="title"> SLEEP GALLERY- SUPPORTERS <span>& GUIDANCES </span></h6>
                                        </div>
                                        <!-- <p>Improve your energy instantly without adding additional calorie to your diet</p> -->
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="thumb">
                                            <img src="assets\img\wellnessImages\weProvide_3\sleep-tracking.png" alt="img">

                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="riyaqas-check-list-wrap">
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span>AcuPressure Guidance , Massage Therapy, Activity Balancing, Music &Chantings, BedTime Routine and sleep supportive Mental Tasks, Meditation for sleep, Relaxing stretches & mudras, De-stressing Yoga.
                                                </span>
                                            </div>
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span> We specially track current physical conditions like Chronic diseases, pregnancy stages, menopause, old age etc to address sleep disturbances.
                                                </span>
                                            </div>
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span>Latest Sleep blogs and research</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--we provide area end -->


    <!-- feature area start -->
    <div class="inner-area pd-top-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-md-6 order-md-12 mb-md-0 mb-4">
                    <div class="sb-animate-img">
                        <div class="thumb">
                            <img src="assets/img/bg/8h3.png" alt="img">
                        </div>
                        <div class="thumb-2">
                            <img src="assets\img\wellnessImages\regulatingSleep.png" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 order-md-1 align-self-center">
                    <div class="sbtl-about mg-top-767-45">
                        <div class="section-title style-two">
                            <h2 class="title">We focus on regulating <span>Sleep</span> </h2>
                            <p>Management of Gadget Withdrawal & Night shift Balancing for youth & professionals . <br>6 fold remedies to overcome sleep disorders & Insomnia:- </p>
                        </div>
                        <ul class="riyaqas-list-3 mb-0">
                            <li>Diet modifications</li>
                            <li>Physical activity modifications</li>
                            <li>Stress management </li>
                            <li>Routine modifications </li>
                            <li>Herbal remedies</li>
                            <li>Yoga & breathing </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- soft-box area start -->
    <div class="sbs-what-riyaqas pd-default-120 mg-top-105" style="background-image:url(assets/img/bg/1h1.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 wow animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
                    <img src="assets\img\wellnessImages\insomnia.png" alt="img">
                </div>
                <div class="col-xl-5 col-lg-6 desktop-center-item">
                    <div class="desktop-center-area wow animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                        <div class="section-title style-two">
                            <h2 class="title">Consultations for <span>chronic sleep disorders</span></h2>
                            <p>Special management of pain - disease - drug side effect etc.. </p>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="riyaqas-check-list">
                                    <img src="assets/img/icons/check.svg" alt="check">
                                    <span>For children </span>
                                </div>
                                <div class="riyaqas-check-list">
                                    <img src="assets/img/icons/check.svg" alt="check">
                                    <span>For adult</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="riyaqas-check-list">
                                    <img src="assets/img/icons/check.svg" alt="check">
                                    <span>For elderly </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- soft-box area End -->

    <!--Daily Routine area End -->
    <div class="sbtc-success-section sbst-provide-security pd-top-80" style="background-image:url(assets/img/bg/9.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="img-with-video img-with-video-2">
                        <div class="img-wrap">
                            <img src="assets/img/wellnessImages/DailyRoutineWeAssure.png" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 desktop-center-item">
                    <div class="section-title style-two">
                        <h2 class="title">Daily Routine <span>Plan</span> </h2>
                        <p>Daily routine consists of the things we change or the compromises we make considering the environmental and living conditions of different locations. An everyday
                            healthy routine leads to a wellness oriented lifestyle. Having a regularised Routine makes your body and mind well organised , gives structure to your day and makes you free from unpredictability, uncertainty, and stress with a sense of control. Our Circadian Aligned Holistic
                            Routine Plan works in alignment with your innate Body type, Metabolism, Physical strength & night shifts in addition to Routine setting and monitoring. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Daily Routine area End -->

    <!-- we Provide Area start-->

    <div class="software-store-area mg-top-100 ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2 class="title">Body clock- Circadian<span> Rhythm</span></h2>
                        <p>Modern Science could explain “Molecular mechanisms controlling the circadian rhythm” and won the 2017 Nobel Prize in Physiology or Medicine while our much
                            advanced ancient wisdom of Ayurveda could set a daily routine and lifestyle itself based on this biological rhythm of the day, season, places, climate etc
                            thousands of years before. Our AI team has developed a Routine Resetting based on your Body clock- Circadian rhythm to provide a quality life and wellness
                            through nature aligned routine to every individual. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="hosting-type-area pd-top-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <ul class="nav nav-tabs sb-hosting-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#d_tabs_12">Routine Report</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#d_tabs_13">Circadian Aligned Routine Resetting Support</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#d_tabs_14">Routine Tracking </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#d_tabs_15"> Routine Gallery-Supporters & Guidances </a>
                        </li>
                </div>
                <div class="col-lg-9">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="d_tabs_12">
                            <div class="single-hosting-content">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="section-title style-two">
                                            <h6 class="title"><span>ROUTINE</span> REPORT</h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="thumb">
                                            <img src="assets\img\wellnessImages\report\report_1.png" alt="img">
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="riyaqas-check-list-wrap">
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span>Personalised Routine Suggestions</span>
                                            </div>
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span> Ideal Routine advice by Experts</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="d_tabs_13">
                            <div class="single-hosting-content">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="section-title style-two">
                                            <h6 class="title"> <span>CIRCADIAN ALIGNED </span>ROUTINE RESETTING SUPPORT</h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="thumb">
                                            <img src="assets\img\wellnessImages\report\circadian-rhythms-2.png" alt="img">

                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="riyaqas-check-list-wrap">
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span>Customized Routine Resetting based on AI</span>
                                            </div>
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span>Routine Reminders </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="d_tabs_14">
                            <div class="single-hosting-content">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="section-title style-two">
                                            <h6 class="title">ROUTINE <span>TRACKING</span></h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="thumb">
                                            <img src="assets\img\wellnessImages\report\routine_3.png" alt="img">

                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="riyaqas-check-list-wrap">
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span>Routine monitoring to assess healthy habits & lifestyles </span>
                                            </div>
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span>Weekly Routine Progress Report
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="d_tabs_15">
                            <div class="single-hosting-content">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="section-title style-two">
                                            <h6 class="title"> ROUTINE GALLERY-SUPPORTERS <span>& GUIDANCES </span></h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="thumb">
                                            <img src="assets\img\wellnessImages\report\routine_4.png" alt="img">

                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="riyaqas-check-list-wrap">
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span>Meditations & Techniques for Work Productivity
                                                </span>
                                            </div>
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span>Integrated Routine for family & work community
                                                </span>
                                            </div>
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span>Routine & Lifestyle Journals</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- we Provide Area end-->

    <!-- service area start -->
    <div class="service-area pd-top-112">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-10">
                    <div class="section-title text-center margin-bottom-90">
                        <h2 class="title"> <span>Our Special </span>Routine Categories & Packages</h2>
                    </div>
                </div>
            </div>
            <div class="row custom-gutters-16">
                <div class="col-xl-3 col-md-6 col-sm-6">
                    <div class="single-service">
                        <img src="assets/img/wellnessImages/SVG/wellnessScore.svg" alt="service">
                        <h6><a href="#">Travel routine & guidances- for illness prevention</a></h6>
                        <p>You will get the overall score of your wellness as well as sub scores of the individual aspects.
                            You can thus understand your overall health,identify the stronger aspects and those aspects requiring improvement of your overall health.</p>

                        <div class="read-more">
                            <a href="#"><img src="assets/img/service/arrow.png" alt="arrow"></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-6">
                    <div class="single-service">
                        <img src="assets/img/wellnessImages/SVG/personalizedWellness.svg" alt="service">
                        <h6><a href="#">Early Morning Routine</a></h6>
                        <p>A Rhythmic start of a day keeps you healthy and energetic throughout the day.
                            <br><br><br>
                        </p>
                        <div class="read-more">
                            <a href="#"><img src="assets/img/service/arrow.png" alt="arrow"></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-6">
                    <div class="single-service">
                        <img src="assets/img/wellnessImages/SVG/wellnessConsultation.svg" alt="service">
                        <h6><a href="#">Bedtime Routine</a></h6>
                        <p>A rhythmic shut down of your system grands you quality sleep & rest and fresh & energetic tomorrow.<br><br></p>
                        <div class="read-more">
                            <a href="#"><img src="assets/img/service/arrow.png" alt="arrow"></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-6">
                    <div class="single-service">
                        <img src="assets/img/wellnessImages/SVG/wellnessStore.svg" alt="service">
                        <h6><a href="#">Career Based Routine</a></h6>
                        <p>Plan your work efficiently with your routine assistant.Work productively based on rhythmic functional energies of the time zone you live in.</p>
                        <div class="read-more">
                            <a href="#"><img src="assets/img/service/arrow.png" alt="arrow"></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-6">
                    <div class="single-service">
                        <img src="assets/img/wellnessImages/SVG/healthRecord.svg" alt="service">
                        <h6><a href="#"> Anti Aging Routine Care<br><br></a></h6>
                        <p>Healthy Routine keep you young.<br><br><br><br></p>
                        <div class="read-more">
                            <a href="#"><img src="assets/img/service/arrow.png" alt="arrow"></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-6">
                    <div class="single-service">
                        <img src="assets/img/wellnessImages/SVG/integratedFamily.svg" alt="service">
                        <h6><a href="#"> Highly Customised Advanced Ayurvedic Routine Package</a></h6>
                        <p>AI guided Ayurvedic wellness routine is at your fingertip .<br> Get your ayurvedic premium routine kit. Lifestyle consultation </p>
                        <div class="read-more">
                            <a href="#"><img src="assets/img/service/arrow.png" alt="arrow"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service area End -->

    <!--Mind managment area  -->
    <div class="sbtc-success-section sbst-provide-security pd-top-80" style="background-image:url(assets/img/bg/9.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="img-with-video img-with-video-2">
                        <div class="img-wrap">
                            <img src="assets/img/wellnessImages/DailyRoutineWeAssure.png" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 desktop-center-item">
                    <div class="section-title style-two">
                        <h2 class="title">Mind Management <span>Plan</span> </h2>
                        <p>Mind is the set of faculties including cognitive aspects such as consciousness, imagination, perception, thinking, intelligence, judgement, language and
                            med is the inevitable part of a wellness life. Considering this we have made a holistic Mind Management Plan. We reach out to the root cause of mental
                            wellness and illness with the support of all medical sciences and address the mental faculties in the most natural way possible. We analyze your ayurvedic
                            mental type in addition to your body type and find out the best solutions for you. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="hosting-type-area pd-top-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2 class="title"><span> Your Smile </span>makes your life more beautiful</h2>
                        <p>“While Mental well-being includes being satisfied with one’s life; balancing positive and negative emotions;
                            accepting one’s self; finding purpose and meaning in one’s life; seeking personal growth, autonomy, and competence;
                            believing one's life and circumstances are under one’s control; and generally experiencing optimism,
                            the Social well-being involves providing and receiving quality support from family, friends, and others.” </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <ul class="nav nav-tabs sb-hosting-tabs">
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#d_tabs_18">AI Guided Trackers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#d_tabs_17">Mental Health Coach</a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#d_tabs_16">Personalised Mental Health Report</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#d_tabs_19">Mind Gallery- Supporters & Guidances</a>
                        </li>
                </div>
                <div class="col-lg-9">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="d_tabs_16">
                            <div class="single-hosting-content">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="section-title style-two">
                                            <h6 class="title"><span>PERSONALISED MENTAL</span> HEALTH REPORT</h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="thumb">
                                            <img src="assets\img\wellnessImages\mind_management_plan\mental-health.png" alt="img">
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="riyaqas-check-list-wrap">
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span>Personalised guidelines</span>
                                            </div>
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span>Know your mental type- Exclusive content</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="d_tabs_17">
                            <div class="single-hosting-content">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="section-title style-two">
                                            <h6 class="title"> <span>MENTAL HEALTH </span> COACH</h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="thumb">
                                            <img src="assets\img\wellnessImages\mind_management_plan\mental-coach.png" alt="img">

                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="riyaqas-check-list-wrap">
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span>Customized mental health plan</span>
                                            </div>
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span>Mind mapping for work-life balance </span>
                                            </div>
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span>Habit reversal training for adults and children</span>
                                            </div>
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span>Mind Management master classes</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="d_tabs_18">
                            <div class="single-hosting-content">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="section-title style-two">
                                            <h6 class="title">AI GUIDED <span>TRACKERS</span></h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="thumb">
                                            <img src="assets\img\wellnessImages\mind_management_plan\AI.png" alt="img">

                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="riyaqas-check-list-wrap">
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span>Stress, Habits, Emotions & Happiness Trackers</span>
                                            </div>
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span>Reminders for anything & Everything
                                                </span>
                                            </div>
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span>Weekly Mental Health Report
                                                </span>
                                            </div>
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span>Integrated Stress Monitoring for family & Work Community
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="d_tabs_19">
                            <div class="single-hosting-content">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="section-title style-two">
                                            <h6 class="title"> MIND GALLERY-SUPPORTERS <span>& GUIDANCES </span></h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="thumb">
                                            <img src="assets\img\wellnessImages\mind_management_plan\mind_galary.png" alt="img">

                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="riyaqas-check-list-wrap">
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span>Skill based Scientific activities
                                                </span>
                                            </div>
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span>Tackle your Emotion
                                                </span>
                                            </div>
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span>Mind Journals</span>
                                            </div>
                                            <div class="riyaqas-check-list media">
                                                <img class="media-left" src="assets/img/icons/check3.svg" alt="check">
                                                <span>Varieties of guided mind supporters For Stress Reduction</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- we Provide Area end-->


















    <!-- feature area start -->
    <div class="inner-area pd-top-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-md-6 order-md-12 mb-md-0 mb-4">
                    <div class="sb-animate-img">
                        <div class="thumb">
                            <img src="assets/img/bg/8h3.png" alt="img">
                        </div>
                        <div class="thumb-2">
                            <img src="assets\img\wellnessImages\psycKit\students.png" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 order-md-1 align-self-center">
                    <div class="sbtl-about mg-top-767-45">
                        <div class="section-title style-two">
                            <h2 class="title">Psychometry Kit for <span>Students Boost</span> </h2>
                            <p>Learning tools for exploring your curiosity and strengthening your empathy! Our psychometry kit is a perfect gift for the kids/students. <br>6 fold benifits from Psychometry Kit :- </p>
                        </div>
                        <ul class="riyaqas-list-3 mb-0">
                            <li>Intellect</li>
                            <li>Memory</li>
                            <li>Receptivity </li>
                            <li> Talent Boosting </li>
                            <li>Learn for Knowledge</li>
                            <li> Learn life </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- soft-box area start -->
    <div class="sbs-what-riyaqas pd-default-120 mg-top-105" style="background-image:url(assets/img/bg/1h1.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 wow animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
                    <img src="assets\img\wellnessImages\psycKit\mental.png" alt="img">
                </div>
                <div class="col-xl-5 col-lg-6 desktop-center-item">
                    <div class="desktop-center-area wow animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                        <div class="section-title style-two">
                            <h2 class="title">Personal Consultations for
                                <span>Mental Illness Management</span>
                            </h2>
                            <p> “Mental illness is caused by a number of factors including biological factors, stressful or traumatic life events, and long-lasting health conditions such as heart disease or cancer”
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="riyaqas-check-list">
                                    <img src="assets/img/icons/check.svg" alt="check">
                                    <span>Kids below 16 years </span>
                                </div>
                                <div class="riyaqas-check-list">
                                    <img src="assets/img/icons/check.svg" alt="check">
                                    <span>Women 16-60 years </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="riyaqas-check-list">
                                    <img src="assets/img/icons/check.svg" alt="check">
                                    <span>Elderly above 60 years </span>
                                </div>

                                <div class="riyaqas-check-list">
                                    <img src="assets/img/icons/check.svg" alt="check">
                                    <span>Men 16-60 years </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- soft-box area End -->

    <!--Daily Routine area End -->
    <div class="sbtc-success-section sbst-provide-security pd-top-80" style="background-image:url(assets/img/bg/9.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="img-with-video img-with-video-2">
                        <div class="img-wrap">
                            <img src="assets\img\wellnessImages\psycKit\hr.png" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 desktop-center-item">
                    <div class="section-title style-two">
                        <h2 class="title">Psychometric Kit for<span>Hr Management</span> </h2>
                        <p>The four primary goals of psychology are to describe, explain, predict, and change behavior. We support you to find suitable candidates for your company through our psychometric analysis.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section>
        <div>
            <img style="max-width: 100%; height: auto;" src="assets\img\wellnessImages\banner.png" alt="">
        </div>
    </section>
    <?php $this->load->view('common/footer'); ?>
</body>

</html>