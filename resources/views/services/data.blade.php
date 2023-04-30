@extends('app')
@section('content')
<!--====== Start Bredcumbs section ======-->
<section class="bredcumbs-area bg-cover" style="background-image: url(public/assets/images/bredcumb_bg.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title-inner">
                    <div class="title">
                        <h2>Data Warehousing</h2>
                    </div>
                    <ul class="bredcumbs-link">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="active"><a href="{{ route('data') }}">Data Warehousing</a></li>
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
                <h3>Data Warehousing</h3>
                <p>{{ env('APP_NAME') }} Technologies offers a comprehensive suite of data warehousing services that help enterprises mitigate the challenges of disparate data, unstructured data formats, and data quality issues. While providing you the ability to overcome challenges involved in information management, we help you unearth hidden values in information assets to facilitate informed decision making. Our DW/BI practice focuses on to reducing overall risk on the project while increasing the probability of meeting the actual needs of end users.</p>
                <p>{{ env('APP_NAME') }} Technologies has delivered many successful solutions for enterprises and provides Datawarehousing Solutions as a part of our services. Our experience in delivering Datawarehousing solutions is helping organizations to enhance their Business intelligence capabilities, integrating various datasources with single datawarehouse and helping organizations to find hidden pattern with data mining.</p>
                <p>Our experienced team follows several stages for every Datawarehousing assignment these processes are helping our experts to understand your requirements and are also helping to implement the solution delivering value.</p>
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
                    <h3>Data Warehouse Design & Development</h3>

                    <ul class="grid-para">
                        <li><i class="glyphicon glyphicon-chevron-right" aria-hidden="true"></i>Complete logical &amp; physical data warehouse design</li>
                        <li><i class="glyphicon glyphicon-chevron-right" aria-hidden="true"></i>Includes business user JAD sessions</li>
                        <li><i class="glyphicon glyphicon-chevron-right" aria-hidden="true"></i>Technical performance process analysis and recommendations</li>
                        <li><i class="glyphicon glyphicon-chevron-right" aria-hidden="true"></i>Using our Iterative Methodology Approach</li>
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
                    <h3>We have the proven experience and expertise in:</h3>
                    <ul class="grid-para">
                        <li><i class="glyphicon glyphicon-chevron-right" aria-hidden="true"></i>Creation of data models and designing of BI functionality</li>
                        <li><i class="glyphicon glyphicon-chevron-right" aria-hidden="true"></i>Designing and implementation of DW and BI architecture</li>
                        <li><i class="glyphicon glyphicon-chevron-right" aria-hidden="true"></i>Integration of data from CRM, SCM, ERP, and Web</li>
                        <li><i class="glyphicon glyphicon-chevron-right" aria-hidden="true"></i>Using Extract, Transform &amp; Load (ETL) tools</li>
                        <li><i class="glyphicon glyphicon-chevron-right" aria-hidden="true"></i>Using Business Intelligence (BI) &amp; On-Line Analytical Processing (OLAP) tools.</li>
                    </ul>
                </div>
                <div class="content-box mb-50">
                    <h3>By implementing proper BI and Data Warehousing, clients will see benefits including:</h3>
                    <ul class="grid-para">
                        <li><i class="glyphicon glyphicon-chevron-right" aria-hidden="true"></i><b>Consolidated Data - </b>With our combined best practices, strong project management and solutions architecture skills, we can help consolidate enterprise data quickly from various disparate sources giving you access to relevant data when you need it.</li>
                        <li><i class="glyphicon glyphicon-chevron-right" aria-hidden="true"></i><b>Single Version of Truth -</b> Data integration helps in avoiding duplicate entries and provides a single version of truth for access to accurate data.</li>
                        <li><i class="glyphicon glyphicon-chevron-right" aria-hidden="true"></i><b>Better Data Quality - </b>Our proven Data Warehousing Services enable you to improve the quality of your reporting and analysis by identifying and resolving inconsistencies in data. This ensures your data is accurate and up-to-date.</li>
                        <li><i class="glyphicon glyphicon-chevron-right" aria-hidden="true"></i><b>More Powerful Intelligence - </b>With a proven method of ETL processing, we can help process more data from a variety of sources and deliver insights faster and improve the quality of your business decisions.</li>
                        <li><i class="glyphicon glyphicon-chevron-right" aria-hidden="true"></i><b>Increase Performance and Productivity - </b>By helping improve application performance and scalability we can help identify and deliver accurate and timely information to your users.</li>
                    </ul>
                </div>
                <div class="content-box mb-50">
                    <h3>Enterprise Data warehouse and Data mart</h3>
                    <ul class="grid-para">
                        <li><i class="glyphicon glyphicon-chevron-right" aria-hidden="true"></i>Enterprise Level DW Architecture Design and Development</li>
                        <li><i class="glyphicon glyphicon-chevron-right" aria-hidden="true"></i>Data Integration</li>
                        <li><i class="glyphicon glyphicon-chevron-right" aria-hidden="true"></i>ETL Design, Development and Testing</li>
                        <li><i class="glyphicon glyphicon-chevron-right" aria-hidden="true"></i>Data Cleansing</li>
                        <li><i class="glyphicon glyphicon-chevron-right" aria-hidden="true"></i>Data profiling</li>
                        <li><i class="glyphicon glyphicon-chevron-right" aria-hidden="true"></i>Data Migration</li>
                        <li><i class="glyphicon glyphicon-chevron-right" aria-hidden="true"></i>Expertise in SSIS, Informatica and Oracle Warehouse builder(OWB) and Talendg.</li>
                    </ul>

                </div>
                <div class="content-box mb-50">
                    <h3>BI Reporting Solutions</h3>
                    <ul class="grid-para">
                        <li><i class="glyphicon glyphicon-chevron-right" aria-hidden="true"></i>Design, Development and Testing of Canned and Adhoc Reports</li>
                        <li><i class="glyphicon glyphicon-chevron-right" aria-hidden="true"></i>Static and Drill through Reports</li>
                        <li><i class="glyphicon glyphicon-chevron-right" aria-hidden="true"></i>Enterprise Reporting, KPIs</li>
                        <li><i class="glyphicon glyphicon-chevron-right" aria-hidden="true"></i>Dashboard/Scorecard Applications</li>
                        <li><i class="glyphicon glyphicon-chevron-right" aria-hidden="true"></i>Expertise in SSRS ,IBM Cognos ,SiSense Prism ,Oracle APEX and OBIEE suite.</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section><!--====== End Case-details section ======-->
@endsection