<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('common/head'); ?>
</head>

<body>
    <?php $this->load->view('common/preloader'); ?>
    <?php $this->load->view('common/menu'); ?>
    <!-- </?php $this->load->view('common/breadcrumb'); ?> -->


    <!-- service area start -->
    <!-- contact form start -->
    <div class="contact-form-area pd-top-112">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="section-title text-center w-100">
                        <h2 class="title">Send your <span>Enqruiry</span></h2>
                        <!-- <p>Why I say old chap that is, spiffing jolly good a load of old tosh spend a penny tosser arse over tit, excuse my French owt to do with me up the kyver matie boy.</p> -->
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-5">
                    <img src="assets/img/others/21.png" alt="blog">
                </div>
                <div class="col-lg-7 offset-xl-1">
                    <div class="alert alert-success email-success" id="get_in_touch" style="display:none;">
                        
                    </div>
                    <form id="enquiry-form"  class="mt-5 mt-lg-0">
                        <div class="row custom-gutters-16">
                            <div class="col-md-6">
                                <div class="single-input-wrap">
                                    <input type="text" class="single-input" id="name">
                                    <label>Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-input-wrap">
                                    <input type="text" class="single-input" id="email">
                                    <label>E-mail</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single-input-wrap">
                                    <input type="text" class="single-input" id="subject">
                                    <label>Subject</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single-input-wrap">
                                    <textarea class="single-input textarea" cols="20" id="message"></textarea>
                                    <label class="single-input-label">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-red mt-0" type="submit">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
           
        </div>
    </div>
    <!-- service area End -->

    <!-- pricing area start -->
    <!-- <div class="sba-pricing-area bg-gray  mg-top-105 pd-default-two">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-9">
                    <div class="section-title text-center">
                        <h2 class="title">Choose your <span>pricing</span></h2>
                        <p>Our support team will get assistance from AI-powered suggestions, making it quicker than ever to handle support requests. Our support team will get assistance from AI-powered suggestions.</p>
                    </div>
                </div>
            </div>
            <div class="row custom-gutters-20">
                <div class="col-xl-3 col-sm-6">
                    <div class="single-pricing text-center">
                        <h6 class="title">INDIVIDUAL</h6>
                        <div class="thumb">
                            <img src="assets/img/price/1.png" alt="pricing">
                        </div>
                        <h3 class="price">Free <span>/anully</span></h3>
                        <ul>
                            <li>1000 Messages per month</li>
                            <li>2 GB file storage</li>
                            <li>20 Projects per month</li>
                            <li>Premium support</li>
                        </ul>
                        <a class="btn btn-white btn-rounded" href="#">Get Start</a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="single-pricing text-center single-pricing-active">
                        <h6 class="title">SMALL BUSINESS</h6>
                        <div class="thumb">
                            <img src="assets/img/price/2.png" alt="pricing">
                        </div>
                        <h3 class="price">$11 <span>/anully</span></h3>
                        <ul>
                            <li>1000 Messages per month</li>
                            <li>2 GB file storage</li>
                            <li>20 Projects per month</li>
                            <li>Premium support</li>
                        </ul>
                        <a class="btn btn-white btn-rounded" href="#">Get Start</a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="single-pricing text-center">
                        <h6 class="title">MEDIUM COMPANY</h6>
                        <div class="thumb">
                            <img src="assets/img/price/3.png" alt="pricing">
                        </div>
                        <h3 class="price">$22 <span>/anully</span></h3>
                        <ul>
                            <li>1000 Messages per month</li>
                            <li>2 GB file storage</li>
                            <li>20 Projects per month</li>
                            <li>Premium support</li>
                        </ul>
                        <a class="btn btn-white btn-rounded" href="#">Get Start</a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="single-pricing text-center mg-bottom-0-767">
                        <h6 class="title">ENTERPRISE</h6>
                        <div class="thumb">
                            <img src="assets/img/price/4.png" alt="pricing">
                        </div>
                        <h3 class="price">$33 <span>/anully</span></h3>
                        <ul>
                            <li>1000 Messages per month</li>
                            <li>2 GB file storage</li>
                            <li>20 Projects per month</li>
                            <li>Premium support</li>
                        </ul>
                        <a class="btn btn-white btn-rounded" href="#">Get Start</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- pricing area End -->

    <!-- client area start -->
    <!-- <div class="client-area pd-top-110">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-9">
                    <div class="section-title style-two text-center">
                        <h2 class="title">What Our <span>Client Say?</span></h2>
                        <p>Our support team will get assistance from AI-powered suggestions, making it quicker than ever to handle support requests. Our support team will get assistance from AI-powered suggestions.</p>
                    </div>
                </div>
            </div>
            <div class="client-slider">
                <div class="client-slider-item">
                    <div class="media">
                        <div class="media-left media-left-one">
                            <img src="assets/img/client/4.png" alt="client">
                        </div>
                        <div class="media-body">
                            <h6>Madeniko Mojika</h6>
                            <p>Branding Idendity</p>
                        </div>
                    </div>
                    <p class="client-content">Our support team will get assistance from AI-powered suggestions, making it quicker than ever to handle support requests.</p>
                </div>
                <div class="client-slider-item">
                    <div class="media">
                        <div class="media-left media-left-two">
                            <img src="assets/img/client/5.png" alt="client">
                        </div>
                        <div class="media-body">
                            <h6>Madeniko Mojika</h6>
                            <p>Branding Idendity</p>
                        </div>
                    </div>
                    <p class="client-content">Our support team will get assistance from AI-powered suggestions, making it quicker than ever to handle support requests.</p>
                </div>
                <div class="client-slider-item">
                    <div class="media">
                        <div class="media-left media-left-three">
                            <img src="assets/img/client/6.png" alt="client">
                        </div>
                        <div class="media-body">
                            <h6>Madeniko Mojika</h6>
                            <p>Branding Idendity</p>
                        </div>
                    </div>
                    <p class="client-content">Our support team will get assistance from AI-powered suggestions, making it quicker than ever to handle support requests.</p>
                </div>
            </div>
        </div>
    </div> -->
    <!-- client area End -->
    <?php $this->load->view('common/footer'); ?>
</body>

</html>

<script>
$('#enquiry-form').submit(function(e){
    e.preventDefault();
       
        var name = $('#name').val();
        var email = $('#email').val();
        var message = $('#message').val();
        var subject = $('#subject').val();

        var lc = new FormData();
        lc.append('name', name);
        lc.append('email', email);
        lc.append('message', message);
        lc.append('subject', subject);

        $.ajax({
            url: "<?= base_url('send-mail') ?>",
            type: "post",
            data: lc,
            processData: false,
            contentType: false,
            cache: false,
            dataType: 'json',
            success:function(data) {
                // alert('data');
                //alert(data.message);
                        $('#get_in_touch').css('display','block');
                        $('#get_in_touch').html(data.message);
                         $('.email-success').fadeOut(5000);
            },error:function(data) {
                 alert('Some Error Occured');
                // alert(JSON.stringify(data));
            }

        })

})
    
</script>