@extends('app')
@section('content')
<!--====== Start Bredcumbs section ======-->
<section class="bredcumbs-area bg-cover" style="background-image: url(public/assets/images/bredcumb_bg.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title-inner">
                    <div class="title">
                        <h2>Digital Marketing</h2>
                    </div>
                    <ul class="bredcumbs-link">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="active"><a href="{{ route('data') }}">Digital Marketing</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Bredcumbs section ======-->
<!--====== Start Case-details section ======-->
<section class="case-details-section pt-110 pb-120">
    <div class="container">
        <div class="case-details-wrapper">
            <div class="case-content-box">
                <h3>Digital Marketing</h3>
                <p>Digital Marketing refers to the marketing through which we can market our product using the digital media like social networks, email and so on. This is more flexible for executives and the most liked one by customers because the executives can market a thing using internet and a well computer knowledge person. The customers can buy a product by simply clicking using their computers or smart phones.</p>
                <div class="case-post-gallery mb-45">
                    <div class="single-gallery">
                        <a href="public/assets/images/case/case-41.jpg" class="img-popup">
                            <img src="public/assets/images/case/case-41.jpg" alt="case">
                        </a>
                    </div>
                    <div class="single-gallery">
                        <a href="public/assets/images/case/case-42.jpg" class="img-popup">
                            <img src="public/assets/images/case/case-42.jpg" alt="case">
                        </a>
                    </div>
                    <div class="single-gallery">
                        <a href="public/assets/images/case/case-43.jpg" class="img-popup">
                            <img src="public/assets/images/case/case-43.jpg" alt="case">
                        </a>
                    </div>
                    <div class="single-gallery">
                        <a href="public/assets/images/case/case-42.jpg" class="img-popup">
                            <img src="public/assets/images/case/case-42.jpg" alt="case">
                        </a>
                    </div>
                </div>
                <div class="content-box mb-60">
                    <h3>Identifying the need for Digital Marketing Consultant</h3>
                    <p>A quick look at reliable market stats will help you understand the importance of digital marketing in a better way. According to market reports, nearly 28% of marketers are ready to compromise on their advertising budgets thus funding digital even more. Quite naturally, it creates the demand for highly efficient and skilled digital marketers. Unlike our contemporaries, we believe in creating digital experiences for our esteemed clients; and we know that’s not possible without comprehensive ideas of their business aims. Check out the following points to understand how we work.</p>
                    <ul class="grid-para">
                        <li><i class="glyphicon glyphicon-chevron-right" aria-hidden="true"></i>Identifying brands’ goals: Our unique, different, and innovative approaches are what we pride on. We put dedicated efforts to comprehend your needs, thus translating it into reality.</li>
                        <li><i class="glyphicon glyphicon-chevron-right" aria-hidden="true"></i>Consumer-brand interactions: At {{ env('APP_NAME') }} Technologies, we make it a point to build engaging conversations between customers and brands. That helps our clients gain targeted leads to their websites.</li>
                        <li><i class="glyphicon glyphicon-chevron-right" aria-hidden="true"></i>Exceptional services: From web designing and SEO services to social media marketing and PPC advertising, there’s nothing that we don’t offer. With a diverse and comprehensive range of services.</li>
                    </ul>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="single-progress">
                                <div class="progress-title">
                                    <h5>Graphic Design<span>75%</span></h5>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar wow slideInLeft" style="width: 75%;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="single-progress">
                                <div class="progress-title">
                                    <h5>Web Design<span>50%</span></h5>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar wow slideInLeft" style="width: 50%;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="single-progress">
                                <div class="progress-title">
                                    <h5>App Development<span>90%</span></h5>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar wow slideInLeft" style="width: 90%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-box mb-50">
                    <img src="public/assets/images/case/case-single-2.jpg" alt="">
                    <div class="play-content text-center">
                        <a class="video-popup" href="https://www.youtube.com/watch?v=nfs8NYg7yQM"><i class="far fa-play"></i></a>
                    </div>
                </div>
                <div class="content-box mb-50">
                    <h3>Benefits with {{ env('APP_NAME') }} Technologies Digital Marketing services</h3>
                    <p>{{ env('APP_NAME') }} Technologies professionals are associated and effort together to service clients and exploit their chances using digital Marketing services with following benefits.</p>
                    <ul class="grid-para">
                        <li><i class="glyphicon glyphicon-chevron-right" aria-hidden="true"></i><b>Customer Reach – </b>The strength of Digital marketing services is extensive, first step to success of your industry to be a branded, greater, newer and enhanced leads and sales.</li>
                        <li><i class="glyphicon glyphicon-chevron-right" aria-hidden="true"></i><b>Suitability –</b> It is not necessary to stress about particulars and details of your marketing services as we got you protected, issuing you enough time and comfort to concentrate on what you specialize in maintaining your business.</li>
                        <li><i class="glyphicon glyphicon-chevron-right" aria-hidden="true"></i><b>Aggressive – </b>You can stretch out beyond your rivals who have not yet learned nor started any digital marketing services and campaigns for their business.</li>
                        <li><i class="glyphicon glyphicon-chevron-right" aria-hidden="true"></i><b>Inexpensive – </b>Your business can bridle the force of multi-channel advertising that is a great deal more inexpensive than any conventional types of publicizing.</li>
                    </ul>
                </div>
                <div class="content-box mb-50">
                    <h3>{{ env('APP_NAME') }} Technologies helps you make your website SEO friendly by:</h3>
                    <ul class="grid-para">
                        <li><i class="glyphicon glyphicon-chevron-right" aria-hidden="true"></i>Using keywords that enrich your content and enhance your visibility in relevant searches. However, we keep in mind</li>
                        <li><i class="glyphicon glyphicon-chevron-right" aria-hidden="true"></i>that using excessive keywords is not a healthy practice because it can get you penalized.</li>
                        <li><i class="glyphicon glyphicon-chevron-right" aria-hidden="true"></i>Making sure that flash files are used sparingly and not in excess because crawlers cannot read animation and flash files.</li>
                        <li><i class="glyphicon glyphicon-chevron-right" aria-hidden="true"></i>Making use of semantic code that enables bots to read and understand what the website is all about.</li>
                        <li><i class="glyphicon glyphicon-chevron-right" aria-hidden="true"></i>Providing unique tags and title descriptions so that the bots automatically know that the content of each page is different from the others.</li>
                        <li><i class="glyphicon glyphicon-chevron-right" aria-hidden="true"></i>Providing hassle-free navigation and easy to understand layout to enable easy movement of bots.</li>
                        <li><i class="glyphicon glyphicon-chevron-right" aria-hidden="true"></i>Creating internal as well as external linkages and also facilitating incoming links.</li>
                        <li><i class="glyphicon glyphicon-chevron-right" aria-hidden="true"></i>Building a sitemap to help crawlers easily enter and index your website.</li>
                    </ul>

                </div>
                <div class="content-box mb-50">
                    <h3>Why Choose Us ?</h3>

                    <p>Our team specialises in helping you establish an online presence. Our ability to accurately visualize, design, and implement a customised path to success has helped all of our clients reach their target audience, obtain leads, and increase conversions. Customer satisfaction is our primary goal and we ensure that all requirements are met and quality of our work surpasses the expectation.</p>

                       <p> Our uniqueness lies in the fact that we never use a set module in achieving results. We always provide our clients with services which have been customized for their business. This helps our clients to emphasise different aspects of their enterprise and also attain a singular identity in their market sector.</p>
                </div>
            </div>

        </div>
    </div>
</section><!--====== End Case-details section ======-->
@endsection