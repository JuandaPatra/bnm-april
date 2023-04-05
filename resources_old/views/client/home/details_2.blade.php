@extends('client.layouts.app')
@section('title', 'BNM Home')
@section('container')
<!-- Header -->
<div>
    <header class="position-relative" id="home">
        @include('client.components.navbar')
        <img src="{{asset('/images/bnm/components/header/banner-2-min.jpg')}}" alt="" style="width: 100%;" class="banner-img forDesktop">
        <img src="{{asset('/images/bnm/components/header/banner-mobile-2.jpg')}}" alt="" style="width: 100%;" class="banner-img forMobile">
        <div class="desc-first">
            <h1>THE LEADING MINDFUL PARTNER IN STAINLESS STEEL</h1>
        </div>
        <div class="desc-second pop-head " data-header=1 data-img="head-1.jpg" data-popSlide="1">
            <div class="d-flex justify-content-center">
                <svg width="58" height="58" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M27 54C41.9117 54 54 41.9117 54 27C54 12.0883 41.9117 0 27 0C12.0883 0 0 12.0883 0 27C0 41.9117 12.0883 54 27 54Z" fill="#FFAF08" class="plus-img" />
                    <path d="M29.2723 17.779V24.9655H35.9881V28.994H29.2723V36.221H24.6972V28.9991H18.0168V24.9706H24.6972V17.7841H29.2723V17.779Z" fill="white" />
                </svg>
                <div class="caption">
                    <u>
                        Highly Dedicated Stainless Steel Experts
                    </u>
                </div>
            </div>
        </div>
        <div class="desc-third pop-head " data-header=2 data-popSlide="2">
            <div class="d-flex justify-content-center">
                <svg width="58" height="58" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M27 54C41.9117 54 54 41.9117 54 27C54 12.0883 41.9117 0 27 0C12.0883 0 0 12.0883 0 27C0 41.9117 12.0883 54 27 54Z" fill="#FFAF08" class="plus-img" />
                    <path d="M29.2723 17.779V24.9655H35.9881V28.994H29.2723V36.221H24.6972V28.9991H18.0168V24.9706H24.6972V17.7841H29.2723V17.779Z" fill="white" />
                </svg>
                <div class="caption">
                    <u>
                        0.05mm Thickness & 5mm Minimum Width
                    </u>
                </div>
            </div>
        </div>
        <div class="desc-fourth pop-head " data-header=3 data-img="head-3.png" data-popSlide="3">
            <div class="d-flex justify-content-center">
                <svg width="58" height="58" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M27 54C41.9117 54 54 41.9117 54 27C54 12.0883 41.9117 0 27 0C12.0883 0 0 12.0883 0 27C0 41.9117 12.0883 54 27 54Z" fill="#FFAF08" class="plus-img" />
                    <path d="M29.2723 17.779V24.9655H35.9881V28.994H29.2723V36.221H24.6972V28.9991H18.0168V24.9706H24.6972V17.7841H29.2723V17.779Z" fill="white" />
                </svg>
                <div class="caption">
                    <u>
                        State-of-the-art Manufacturing Equipment
                    </u>
                </div>
            </div>
        </div>
    </header>
</div>
<!-- End Header -->
<main id="bnm" page="bnm">
    <!-- profile-section -->
    <section id="profile" class="profile__section">
        <div class="row gx-0">
            <div class="col-lg-6 gx-0"></div>
            <div class="col-12 col-lg-6 gx-0">
                <div class="forDesktop">
                    <img src="{{asset('/images/bnm/background2.png')}}" alt="" class="img-fluid w-100 h-50">
                </div>
                <div class="forMobile">
                    <div class="container-full">
                        <div class="profile-caption2">
                            <div class="row gx-0">
                                <div class="col-1"></div>
                                <div class="col-11">
                                    <div class="position-relative">
                                        <img src="{{asset('/images/bnm/background2.png')}}" alt="" class="img-fluid w-100 position-absolute" style="z-index: -1;top: 0;">
                                        <div class="row gx-0">
                                            <div class="col-md-3 gx-0">
                                                <h1 class="m-4-c">OUR PROFILE</h1>
                                                <div class="pe-5">
                                                    <img data-src="{{asset('images/bnm/components/profile_section/green-worker-mobile-min.jpg')}}" alt="" class="w-100 lazy forMobile">
                                                </div>
                                            </div>
                                            <div class="col-11 col-md-7 pad-left mar-bt-35">
                                                <h1 class="profile-title">
                                                    INDONESIA'S ONLY PRECISION <br> STAINLESS STEEL COLD ROLLING MILL
                                                </h1>

                                                <p>
                                                    We are committed to producing high-quality stainless steel strips for our customers, regardless of the product specifications or order quantity. The state-of-the-art manufacturing equipment and in-house metallurgical laboratory enable us to deliver high accuracy in thickness, width, mechanical properties, and flatness. Our just-in-time delivery and outstanding customer service are paramount for our customers in meeting their industry's increasingly competitive demands.
                                                </p>

                                                <p>
                                                    As a midfulness-based business, BNM believes in interdependent co-arising, which means that all stakeholder are interconnected and dependent on one another. Therefore, a synergistic collaboration between all stakeholders accompanied by mutual support & respect, and spirit to grow is needed to achieve a sustainable stainless steel industry ecosystem.
                                                </p>

                                            </div>
                                            <div class="col-md-2 gx-0"></div>
                                            <div class="w-100"></div>
                                            <div class="col-md-3">
                                                <img data-src="{{asset('images/bnm/components/profile_section/green-worker-min.jpg')}}" alt="" class="w-100 lazy h-75 forDesktop">
                                            </div>
                                            <div class="col-md-9 pad-left position-relative">
                                                <div class="play_btn forDesktop">
                                                    <img src="{{asset('images/bnm/playbutton.png')}}" width="100%" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-11">
                                        <div class="forMobile">
                                            <div class="position-relative">
                                                <video src="{{asset('video/bnm-video.mp4')}}" width="100%" poster="{{asset('images/bnm/black.png')}}" id="videoHome1" style="max-height:300px ;">
                                                    Your browser does not support the video tag.
                                                </video>
                                                <div class="position-absolute play-m">
                                                    <img src="{{asset('images/bnm/playbutton.png')}}" alt="">
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
            <div class="forDesktop">
                <div class="container-full">
                    <div class="profile-caption">
                        <div class="row">
                            <div class="col-1"></div>
                            <div class="col-11">
                                <div class="row">
                                    <div class="col-md-3">
                                        <h1 class="m-4-c">OUR PROFILE</h1>
                                        <div class="pe-5">
                                            <img data-src="{{asset('images/bnm/components/profile_section/green-worker-mobile-min.jpg')}}" alt="" class="w-100 lazy forMobile">
                                        </div>
                                    </div>
                                    <div class="col-md-7 pad-left mar-bt-35">
                                        <h1 class="profile-title">
                                            INDONESIA'S ONLY PRECISION <br> STAINLESS STEEL COLD ROLLING MILL
                                        </h1>

                                        <p>
                                            We are committed to producing high-quality stainless steel strips for our customers, regardless of the product specifications or order quantity. The state-of-the-art manufacturing equipment and in-house metallurgical laboratory enable us to deliver high accuracy in thickness, width, mechanical properties, and flatness. Our just-in-time delivery and outstanding customer service are paramount for our customers in meeting their industry's increasingly competitive demands.
                                        </p>

                                        <p>
                                            As a midfulness-based business, BNM believes in interdependent co-arising, which means that all stakeholder are interconnected and dependent on one another. Therefore, a synergistic collaboration between all stakeholders accompanied by mutual support & respect, and spirit to grow is needed to achieve a sustainable stainless steel industry ecosystem.
                                        </p>

                                    </div>
                                    <div class="col-md-2 gx-0"></div>
                                    <div class="w-100"></div>
                                    <div class="col-md-3">
                                        <img data-src="{{asset('images/bnm/components/profile_section/green-worker-min.jpg')}}" alt="" class="w-100 lazy h-75 forDesktop">
                                    </div>
                                    <div class="col-md-9 pad-left position-relative">
                                        <video id="videoHome" class="mask forDesktop" width="80%" height="100%" poster="{{asset('images/bnm/black.png')}}">
                                            <source src="{{asset('video/bnm-video.mp4')}}" type="video/mp4">
                                        </video>

                                        <div class="play_btn forDesktop">
                                            <img src="{{asset('images/bnm/playbutton.png')}}" width="100%" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="container forMobile">
                                    <div class="position-relative">
                                        <video src="{{asset('video/bnm-video.mp4')}}" width="100%" poster="{{asset('images/bnm/black.png')}}" id="videoHome1" style="max-height:300px ;">
                                            Your browser does not support the video tag.
                                        </video>
                                        <div class="position-absolute play-m">
                                            <img src="{{asset('images/bnm/playbutton.png')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center py-4 text-center infograph">
                <div>
                    <div class="mx-4 text-center">
                        <div class="forDesktop">
                            <div class="d-flex justify-content-between flex-wrap" style="width: 82vw;margin: auto;">
                                <div class="mx-4 info-box">
                                    <img data-src="{{asset('images/bnm/components/profile_section/establish-f.png')}}" alt="" class="lazy mb-4">
                                    <h1>
                                        Establish in <br>
                                        <span class="highlight-caption">
                                            1996
                                        </span>
                                    </h1>
                                </div>
                                <div class="mx-4 info-box">
                                    <img data-src="{{asset('images/bnm/components/profile_section/location-f.png')}}" alt="" class="lazy mb-4">
                                    <h1>
                                        Location<br>
                                        <span class="highlight-caption">
                                            Cikarang, ID
                                        </span>
                                    </h1>
                                    <p class="minor-info">
                                        Office & Plants
                                    </p>
                                </div>
                                <div class="mx-4 info-box">
                                    <img data-src="{{asset('images/bnm/components/profile_section/employee-2.png')}}" alt="" class="lazy mb-4">
                                    <h1>
                                        Number of Employees<br>
                                        <span class="highlight-caption">
                                            138
                                        </span>
                                    </h1>
                                    <p class="minor-info">
                                        As of July 2022
                                    </p>
                                </div>
                                <div class="mx-4 info-box">
                                    <img data-src="{{asset('images/bnm//components/profile_section/production-f.png')}}" alt="" class="lazy mb-4">
                                    <h1>
                                        Production Capacity<br>
                                        <span class="highlight-caption">
                                            7,200 MT
                                        </span>
                                    </h1>
                                    <p class="minor-info">
                                        As of July 2022
                                    </p>
                                </div>
                                <div class="mx-4 info-box">
                                    <img data-src="{{asset('images/bnm/components/profile_section/shipment-f.png')}}" alt="" class="lazy mb-4">
                                    <h1>
                                        Shipment <br>
                                        <span class="highlight-caption">
                                            Worldwide
                                        </span>
                                    </h1>
                                </div>
                                <div class="mx-4 info-box">
                                    <img data-src="{{asset('images/bnm/components/profile_section/certifications-f.png')}}" alt="" class="lazy mb-4">
                                    <h1>
                                        Certifications <br>
                                        <span class="highlight-caption">
                                            ISO 9001 & 14001
                                        </span>
                                    </h1>
                                </div>
                            </div>
                        </div>
                        <div class="infograph-slick forMobile">
                            <ul class="infograph-slick">
                                <li>
                                    <div class="info-box mx-3">
                                        <img data-src="{{asset('images/bnm/components/profile_section/establish-f.png')}}" alt="" class="lazy mb-2 mx-auto">
                                        <h1>
                                            Establish in <br>
                                            <span class="highlight-caption">
                                                1996
                                            </span>
                                        </h1>
                                    </div>
                                </li>
                                <li>
                                    <div class="info-box mx-3">
                                        <img data-src="{{asset('images/bnm/components/profile_section/location-f.png')}}" alt="" class="lazy mb-2 mx-auto">
                                        <h1>
                                            Location<br>
                                            <span class="highlight-caption">
                                                Cikarang, ID
                                            </span>
                                        </h1>
                                        <p class="minor-info">
                                            Office & Plants
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="info-box mx-3">
                                        <img data-src="{{asset('images/bnm/components/profile_section/employee-2.png')}}" alt="" class="lazy mb-2 mx-auto">
                                        <h1>
                                            Number of Employees<br>
                                            <span class="highlight-caption">
                                                138
                                            </span>
                                        </h1>
                                        <p class="minor-info">
                                            As of July 2022
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="info-box mx-3">
                                        <img data-src="{{asset('images/bnm//components/profile_section/production-f.png')}}" alt="" class="lazy mb-2 mx-auto">
                                        <h1>
                                            Production Capacity<br>
                                            <span class="highlight-caption">
                                                7,200 MT
                                            </span>
                                        </h1>
                                        <p class="minor-info">
                                            As of July 2022
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="info-box mx-3">
                                        <img data-src="{{asset('images/bnm/components/profile_section/shipment-f.png')}}" alt="" class="lazy mb-2 mx-auto">
                                        <h1>
                                            Shipment <br>
                                            <span class="highlight-caption">
                                                Worldwide
                                            </span>
                                        </h1>
                                    </div>
                                </li>
                                <li>
                                    <div class="info-box mx-3">
                                        <img data-src="{{asset('images/bnm/components/profile_section/certifications-f.png')}}" alt="" class="lazy mb-2 mx-auto">
                                        <h1>
                                            Certifications <br>
                                            <span class="highlight-caption">
                                                ISO 9001 & 14001
                                            </span>
                                        </h1>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center sustain-caption text-center" id="sustainability">
                <div class="mx-auto">
                    <div class="text-center">
                        <h1>
                            SUSTAINABILITY
                        </h1>
                        <div class="forDesktop">
                            <p class="text-center">BNM conducts its business activities based on mindfulness practices which <br> is expressed in the form of self-control, loving-kindness, and compassion. <br> This mindset helps us to continuously make business decisions by <br> considering our impact on sustainability towards the environment and the <br> society. Since March 2021, we have solar cells in operation to support <br> our electricity needs.</p>
                        </div>
                        <div class="forMobile">
                            <p>BNM conducts its business activities based on mindfulness practices which is expressed in the form of self-control, loving-kindness, and compassion. This mindset helps us to continuously make business decisions by considering our impact on sustainability towards the environment and the society. Since March 2021, we have solar cells in operation to support our electricity needs.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center py-4 text-center impact">
                <div>
                    <div class="text-center">
                        <h1 class="impact-caption">
                            OUR IMPACT
                        </h1>
                        <div class="forDesktop">
                            <div class="row">
                                <div class="col-1"></div>
                                <div class="col-10">
                                        <div class="d-flex justify-content-between ">
                                            <div class="impact-box">
                                                <img src="{{asset('images/bnm/components/profile_section/energy.png')}}" alt="energy" class="impact-img">
                                                <h1>
                                                    452K<br>KWH/ANNUM
                                                </h1>
                                                <p class="text-center">
                                                    The amount of clean energy produced from the 748 solar cells installed.
                                                </p>
                                            </div>
                                            <div class="mx-2 impact-box">
                                                <img src="{{asset('images/bnm/components/profile_section/contribution.png')}}" alt="contribution" class="impact-img">
                                                <h1>
                                                    12% <br> Contribution
                                                </h1>
                                                <p class="text-center">
                                                    The amount of clean energy used for the production of our stainless steel.
                                                </p>
                                            </div>
                                            <div class="impact-box">
                                                <img src="{{asset('images/bnm/components/profile_section/atmosphere.png')}}" alt="atmosphere" class="impact-img">
                                                <h1>
                                                    423K <br> KG/ANNUM
                                                </h1>
                                                <p class="text-center">
                                                    The amount of reduced carbon emissions from entering the atmosphere.
                                                </p>
                                            </div>
                                        </div>
                                </div>
                                <div class="col-1"></div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center flex-wrap impact-padding forMobile" style="padding: 5%;">
                            <div class="impact-box ms-0" style="width: 100%;">
                                <img src="{{asset('images/bnm/components/profile_section/energy.png')}}" alt="energy" class="impact-img">
                                <h1 class="text-center">
                                    452K<br>KWH/ANNUM
                                </h1>
                                <p class="text-center">
                                    The amount of clean energy produced from the 748 solar cells installed.
                                </p>
                            </div>
                            <div class="impact-box ms-0" style="width: 100%;">
                                <img src="{{asset('images/bnm/components/profile_section/contribution.png')}}" alt="contribution" class="impact-img">
                                <h1 class="text-center">
                                    12% <br> Contribution
                                </h1>
                                <p class="text-center">
                                    The amount of clean energy used for the production of our stainless steel.
                                </p>
                            </div>
                            <div class="impact-box ms-0" style="width: 100%;">
                                <img src="{{asset('images/bnm/components/profile_section/atmosphere.png')}}" alt="atmosphere" class="impact-img">
                                <h1 class="text-center">
                                    995k Kg/ <br> Annum
                                </h1 class="text-center">
                                <p class="text-center">
                                    The amount of reduced carbon emissions from entering the atmosphere.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gx-0">
                <div class="col-1 col-xxl-1"></div>
                <div class="col-11 col-xxl-11 g-2">
                    <svg width="2000" height="3" viewBox="0 0 1312 3" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-100">
                        <line y1="1.5" x2="2000" y2="1.5" stroke="#FFAF08" stroke-width="3" />
                    </svg>
                </div>
            </div>
    </section>
    <!-- end-profile-section -->
    <!-- plant-section -->
    <section id="plant" class="plant-section pt-5">
        <div class="row gx-0">
            <div class="col-md-1 gx-0"></div>
            <div class="col-md-11 gx-0">
                <div class="row gx-0">
                    <div class="col-md-3 gx-0">
                        <h1 class="forDesktop">PLANT TOUR</h1>
                        <div class="plant-title forMobile">
                            <div class="row gx-0">
                                <div class="col-1"></div>
                                <div class="col-11">
                                    <h1>
                                        PLANT TOUR
                                    </h1>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row gx-0">
                            <div class="col-1">
                            </div>
                            <div class="col-11">
                                <ul class="mainul">
                                    <li class=" border border-0  border-top mainul_list border-plant-C1 active">
                                        <div class="p-5 pt-2 ps-0 pe-1 mainul-box active">
                                            <div class="mainul_list-title active" data-slider="C1">
                                                <div class="forDesktop">
                                                    <h1>PLANT #1</h1>
                                                </div>
                                                <div class="forMobile">
                                                    <div class="d-flex justify-content-center">
                                                        <h1 style="font-size: 3.5rem;">PLANT #1</h1>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-center contain-plant-arrow">
                                                    <svg width="24" height="14" viewBox="0 0 24 14" fill="none" xmlns="http://www.w3.org/2000/svg" class="plant-arrow">
                                                        <path d="M22 2L13.4142 10.5858C12.6332 11.3668 11.3668 11.3668 10.5858 10.5858L2.00001 2" stroke="#FFAF08" stroke-width="4" class="plant-arrow-icon " />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=" border border-0 border-dark border-top mainul_list border-plant-C2">
                                        <div class="p-5 pt-2 ps-0 pe-1 mainul-box">
                                            <div class="mainul_list-title" data-slider="C2">
                                                <div class="forDesktop">
                                                    <h1 >PLANT #2</h1>
                                                </div>
                                                <div class="forMobile">
                                                    <div class="d-flex justify-content-between">
                                                        <h1 style="font-size: 3.5rem;">
                                                            PLANT #2
                                                        </h1>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-center contain-plant-arrow">
                                                    <svg width="24" height="14" viewBox="0 0 24 14" fill="none" xmlns="http://www.w3.org/2000/svg" class="plant-arrow">
                                                        <path d="M22 2L13.4142 10.5858C12.6332 11.3668 11.3668 11.3668 10.5858 10.5858L2.00001 2" stroke="#8d8d8d" stroke-width="4" class="plant-arrow-icon " />
                                                    </svg>
                                                </div>

                                            </div>
                                        </div>
                                    </li>

                                </ul>

                            </div>
                        </div>
                        <!--<ul class="mainul">-->
                        <!--    <li class=" border border-0  border-top mainul_list border-plant-C1 active">-->
                        <!--        <div class="p-5 pt-2 ps-0 pe-1 mainul-box active">-->
                        <!--            <div class="mainul_list-title active" data-slider="C1">-->
                        <!--                <div class="forDesktop">-->
                        <!--                    <h1>PLANT #1</h1>-->
                        <!--                </div>-->
                        <!--                <div class="forMobile">-->
                        <!--                    <div class="d-flex justify-content-center">-->
                        <!--                        <h1>PLANT #1</h1>-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--                <div class="d-flex justify-content-center contain-plant-arrow">-->
                        <!--                    <svg width="24" height="14" viewBox="0 0 24 14" fill="none" xmlns="http://www.w3.org/2000/svg" class="plant-arrow">-->
                        <!--                        <path d="M22 2L13.4142 10.5858C12.6332 11.3668 11.3668 11.3668 10.5858 10.5858L2.00001 2" stroke="#FFAF08" stroke-width="4" class="plant-arrow-icon " />-->
                        <!--                    </svg>-->
                        <!--                </div>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--    </li>-->
                        <!--    <li class=" border border-0 border-dark border-top mainul_list border-plant-C2">-->
                        <!--        <div class="p-5 pt-2 ps-0 pe-1">-->
                        <!--            <div class="mainul_list-title" data-slider="C2">-->
                        <!--                <div class="forDesktop">-->
                        <!--                    <h1>PLANT #2</h1>-->
                        <!--                </div>-->
                        <!--                <div class="forMobile">-->
                        <!--                    <div class="d-flex justify-content-center">-->
                        <!--                        <h1>-->
                        <!--                            PLANT #2-->
                        <!--                        </h1>-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--                <div class="d-flex justify-content-center contain-plant-arrow">-->
                        <!--                    <svg width="24" height="14" viewBox="0 0 24 14" fill="none" xmlns="http://www.w3.org/2000/svg" class="plant-arrow">-->
                        <!--                        <path d="M22 2L13.4142 10.5858C12.6332 11.3668 11.3668 11.3668 10.5858 10.5858L2.00001 2" stroke="#8d8d8d" stroke-width="4" class="plant-arrow-icon " />-->
                        <!--                    </svg>-->
                        <!--                </div>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--    </li>-->
                        <!--</ul>-->
                    </div>
                    <div class="col-md-9 box_map">
                        <div class="positon-relative box_map-img W-100">
                            <div>
                                <ul class="slider-int-C1 owl-C1">
                                    <li class="item">
                                        <img src="{{asset('/images/bnm/components/plant_section/plant-1/1-min.jpg')}}" alt="" class="img-fluid w-100">
                                    </li>
                                    <li class="item">
                                        <img src="{{asset('/images/bnm/components/plant_section/plant-1/2-1-min.jpg')}}" alt="" class="img-fluid w-100">
                                    </li>
                                    <li class="item">
                                        <img src="{{asset('/images/bnm/components/plant_section/plant-1/3-min.jpg')}}" alt="" class="img-fluid w-100">
                                    </li>
                                    <li class="item">
                                        <img src="{{asset('/images/bnm/components/plant_section/plant-1/4-min.jpg')}}" alt="" class="img-fluid w-100">
                                    </li>
                                    <li class="item">
                                        <img src="{{asset('/images/bnm/components/plant_section/plant-1/5-min.jpg')}}" alt="" class="img-fluid w-100">
                                    </li>
                                    <li class="item">
                                        <img src="{{asset('/images/bnm/components/plant_section/plant-1/6-min.jpg')}}" alt="" class="img-fluid w-100">
                                    </li>
                                    <li class="item">
                                        <img src="{{asset('/images/bnm/components/plant_section/plant-1/7-min.jpg')}}" alt="" class="img-fluid w-100">
                                    </li>
                                    <li class="item">
                                        <img src="{{asset('/images/bnm/components/plant_section/plant-1/8-min.jpg')}}" alt="" class="img-fluid w-100">
                                    </li>
                                    <li class="item">
                                        <img src="{{asset('/images/bnm/components/plant_section/plant-1/9-min.jpg')}}" alt="" class="img-fluid w-100">
                                    </li>
                                    <li class="item">
                                        <img src="{{asset('/images/bnm/components/plant_section/plant-1/10-min.jpg')}}" alt="" class="img-fluid w-100">
                                    </li>
                                    <li class="item">
                                        <img src="{{asset('/images/bnm/components/plant_section/plant-1/11-min.jpg')}}" alt="" class="img-fluid w-100">
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <ul class="slider-int-C2 owl-C2">
                                    <li class="item">
                                        <img src="{{asset('/images/bnm/components/plant_section/plant-2/1-min.jpg')}}" alt="" class="img-fluid w-100">
                                    </li>
                                    <li class="item">
                                        <img src="{{asset('/images/bnm/components/plant_section/plant-2/2-plant-2-min.jpg')}}" alt="" class="img-fluid w-100">
                                    </li>
                                    <li class="item">
                                        <img src="{{asset('/images/bnm/components/plant_section/plant-2/3-min.jpg')}}" alt="" class="img-fluid w-100">
                                    </li>
                                    <li class="item">
                                        <img src="{{asset('/images/bnm/components/plant_section/plant-2/4-min.jpg')}}" alt="" class="img-fluid w-100">
                                    </li>

                                </ul>
                            </div>
                            <div class="me-3 pt-5 arrow-box-img" style="position: relative;top: -25%;">
                                <div class="d-flex justify-content-center" style="margin-left: 42%;margin:auto">
                                    <svg width="47" height="46" viewBox="0 0 47 46" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-5 left-arrow" style="height:37px">
                                        <path d="M23.6818 -0.000101191C10.9913 -0.0001023 0.7037 10.2875 0.703699 22.978C0.703698 35.6684 10.9913 45.9561 23.6818 45.9561C36.3722 45.9561 46.6599 35.6684 46.6599 22.978C46.6599 10.2875 36.3722 -0.000100082 23.6818 -0.000101191Z" fill="#FFAF08" class="button-circle" />
                                        <path d="M27.0859 30.6375L19.9898 23.5413C19.2087 22.7602 19.2087 21.4939 19.9898 20.7128L27.0859 13.6167" stroke="white" stroke-width="3" />
                                    </svg>
                                    <svg width="47" height="46" viewBox="0 0 47 46" fill="none" xmlns="http://www.w3.org/2000/svg" class="right-arrow" style="height:37px">>
                                        <path d="M23.3182 45.9562C36.0087 45.9562 46.2963 35.6685 46.2963 22.9781C46.2963 10.2876 36.0087 0 23.3182 0C10.6278 0 0.340149 10.2876 0.340149 22.9781C0.340149 35.6685 10.6278 45.9562 23.3182 45.9562Z" fill="#FFAF08" class="button-circle" />
                                        <path d="M19.9141 15.3186L27.0102 22.4148C27.7913 23.1958 27.7913 24.4622 27.0102 25.2432L19.9141 32.3394" stroke="white" stroke-width="3" />
                                    </svg>
                                </div>
                            </div>
                            <!--<div class="plant-caption-contain">-->
                            <!--    <div class="d-flex pe-3 plant-edit">-->
                            <!--        <div class="plant-caption plant-change-C1 active">-->
                            <!--            <h1>Entrance to Plant #1</h1>-->
                            <!--            <p class="text-justify">-->
                            <!--                To guarantee that our product quality is consistently compatible with international standards, we utilize the most advanced technology, including the 20 High Sendzimir Mill, Vertical Bright Annealing Line, Skin Pass Mill, Tension Leveling Line, and Slitting Line. They are supplied by prominent suppliers such as I2S – USA and EBNER – Austria.-->
                            <!--            </p>-->
                            <!--        </div>-->
                            <!--        <div class="plant-caption plant-change-C2">-->
                            <!--            <h1>Entrance to Plant #2</h1>-->
                            <!--            <p class="text-justify">-->
                            <!--                With an annual capacity of 7,200 metric tons, we can produce  stainless steel strips in BA and Hard with minimum thickness of 0.05mm and minimum width of 5 mm in grade 301, 304, 316L, 321, 904L and many others.-->
                            <!--            </p>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->
                            <div class="forDesktop">
                                <div class="plant-caption-contain">
                                    <div class="d-flex pe-3 plant-edit">
                                        <div class="plant-caption plant-change-C1 active">
                                            <!--<h1>Welcome to Plant #1</h1>-->
                                            <p class="text-justify" style="width: 90%;">
                                                Our Product is a precision cold-rolled stainless steel with high accuracy in size dimension, mechanical characteristics, and surface quality. It is very customizable to meet the needs of each customer.
                                            </p>
                                        </div>
                                        <div class="plant-caption plant-change-C2">
                                            <!--<h1>Welcome to Plant #2</h1>-->
                                            <p class="text-justify" style="width: 90%;">
                                                Our Product is a precision cold-rolled stainless steel with high accuracy in size dimension, mechanical characteristics, and surface quality. It is very customizable to meet the needs of each customer.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="forMobile">
                                <div class="row gx-0">
                                    <div class="col-1"></div>
                                    <div class="col-11">
                                        <div class="plant-caption-contain">
                                            <div class="d-flex pe-3 plant-edit">
                                                <div class="plant-caption plant-change-C1 active">
                                                    <!--<h1>Welcome to Plant #1</h1>-->
                                                    <p class="text-justify" style="width: 90%;">
                                                        Our Product is a precision cold-rolled stainless steel with high accuracy in size dimension, mechanical characteristics, and surface quality. It is very customizable to meet the needs of each customer.
                                                    </p>
                                                </div>
                                                <div class="plant-caption plant-change-C2">
                                                    <!--<h1>Welcome to Plant #2</h1>-->
                                                    <p class="text-justify" style="width: 90%;">
                                                        Our Product is a precision cold-rolled stainless steel with high accuracy in size dimension, mechanical characteristics, and surface quality. It is very customizable to meet the needs of each customer.
                                                    </p>
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
        <div class="row mar-20 gx-0">
            <div class="col-1 col-md-1"></div>
            <div class="col-11 col-md-11">
                <svg width="2000" height="3" viewBox="0 0 1312 3" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-100">
                    <line y1="1.5" x2="2000" y2="1.5" stroke="#FFAF08" stroke-width="3" />
                </svg>
            </div>
        </div>
    </section>
    <!-- end-plant-section -->
    <!-- product-section -->
    <section class="product-section pt-5" id="product">
        <div class="container-full">
            <div class="row gx-0">
                <div class="col-1 col-md-1"></div>
                <div class="col-11 col-md-11">
                    <div class="row gx-0">
                        <div class="col-md-3">
                            <img data-src="{{asset('/images/bnm/Rectangle_3.png')}}" alt="" class="top-product-image lazy forDesktop">
                        </div>
                        <div class="col-md-8">
                            <!--<div class="mt-4 ms-5">-->
                            <!--    <h1 class="product-title">-->
                            <!--        PRODUCT-->
                            <!--    </h1>-->
                            <!--    <h1 class="mt-5 product-caption">-->
                            <!--        WE PROVIDE HIGH ACCURACY PRODUCT-->
                            <!--    </h1>-->
                            <!--    <p class="mt-3  forDesktop">-->
                            <!--        Our product is a precision cold-rolled stainless steel with high accuracy in size dimension, mechanical characteristics, and surface quality. It is very custo,izable to meet the needs of each customer. Our product is a precision cold-rolled stainless steel with high Accuracy in size dimension, mechanical characteristics, adn surface quality. It is very customizable to meet the needs of each customer.-->
                            <!--    </p>-->
                            <!--    <p class="mt-3 me-5 forMobile text-justify">-->
                            <!--        Our product is a precision cold-rolled stainless steel with high accuracy in size dimension, mechanical characteristics, and surface quality. It is very custo,izable to meet the needs of each customer. Our product is a precision cold-rolled stainless steel with high Accuracy in size dimension, mechanical characteristics, adn surface quality. It is very customizable to meet the needs of each customer.-->
                            <!--    </p>-->
                            <!--</div>-->
                             <div class="forDesktop">
                                <div class="mt-4 ms-5">
                                    <h1 class="product-title">
                                        {{ $categoryProduct->title }}
                                    </h1>
                                    <h1 class="mt-5 product-caption">
                                        {{ $categoryProduct->subtitle }}
                                    </h1>
                                    <p class="mt-3  forDesktop">
                                       {!! $categoryProduct->description !!}}
                                    </p>
                                   
                                </div>
                            </div>
                            <div class="forMobile">
                                <div class="mt-4">
                                    <h1 class="product-title">
                                        PRODUCT
                                    </h1>
                                    <h1 class="mt-5 product-caption">
                                        WE PROVIDE HIGH ACCURACY PRODUCT
                                    </h1>
                                    <p class="mt-3 me-5 forMobile text-justify" style="font-size: 15px;">
                                        Our product is a precision cold-rolled stainless steel with high accuracy in size dimension, mechanical characteristics, and surface quality. It is very customizable to meet the needs of each customer. Our product is a precision cold-rolled stainless steel with high Accuracy in size dimension, mechanical characteristics, adn surface quality. It is very customizable to meet the needs of each customer.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                    <div class="row gx-0">
                        <div class="col-11 col-md-11">
                            <div class="card__collections owl-zero owl-carousel d-flex justify-content-between gx-0 mt-5 me-5">
                                <div class="card mx-2 specPopup" data-spec=0>
                                    <div class="overlay"></div>
                                    <div class="card-body">
                                        <h3 class="card-title mb-2">
                                            ANNEALED <br> (SOFT) <br> MATERIALS
                                        </h3>
                                        <p class="card-text">Our annealed strips consist of BA and 2B finish with excellent forming and welding characteristics. The roughness and brightness value can be modified according to your needs.</p>
                                    </div>
                                    <img src="{{asset('/images/bnm/components/product_section/1.jpg')}}" class="card-img-top mx-auto px-0" alt="..." width="23vw" style="height:100%; object-fit:cover;">
                                </div>
                                <div class="card mx-2 specPopup" data-spec="1">
                                    <div class="overlay"></div>
                                    <div class="card-body">
                                        <h3 class="card-title mb-2">
                                            TEMPERED <br> (HARD) <br> MATERIALS
                                        </h3>
                                        <p class="card-text">Our tempered strips are perfect for spring applications. The temper ranges from 1/8 Hard to Super Extra Hard of hardness value at 530HV min or tensile value at 270ksi min </p>
                                    </div>
                                    <img src="{{asset('/images/bnm/components/product_section/2.jpg')}}" class="card-img-top mx-auto p-0" alt="..." width="23vw" style="height:100% ;object-fit:cover;">
                                </div>
                                <div class="card mx-2 specPopup" data-spec=2>
                                    <div class="overlay"></div>
                                    <div class="card-body">
                                        <h3 class="card-title mb-2">
                                            PRECISION THICKNESS MATERIALS
                                        </h3>
                                        <span class="d-block span-orange">(THICKNESS MIN 0.05MM)</span>
                                        <p class="card-text">Our precision strips are available in BA and Tempered with thickness minimum of 0.05mm. The strips are rolled to the tightest tolerance of 3 microns max.</p>
                                    </div>
                                    <img src="{{asset('/images/bnm/components/product_section/3.jpg')}}" class="card-img-top mx-auto p-0" alt="..." width="23vw" style="height:100% ;object-fit:cover;">
                                </div>
                                <div class="card mx-2 specPopup" data-spec=3>
                                    <div class="overlay"></div>
                                    <div class="card-body">
                                        <h3 class="card-title mb-2">NARROW WIDTH MATERIALS</h3>
                                        <span class="d-block span-orange">(SLIT WIDTH MIN 5MM) </span>
                                        <p class="card-text">Our narrow strips are available in BA and Tempered with width minimum of 5mm. The strips are slit to precision according to the required tolerance.</p>
                                    </div>
                                    <img src="{{asset('/images/bnm/components/product_section/4.jpg')}}" class="card-img-top mx-auto p-0" alt="..." width="23vw" style="height:100% ;object-fit:cover;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5">
                        <h1>
                            WE SERVE YOUR MARKET
                        </h1>
                        <div class="row gx-0">
                            <div class="col-11 col-md-12">
                                <div class="card__collections2 owl-one owl-carousel d-flex justify-content-between gx-0 mt-5 me-5">
                                    <div class="card mx-2 specPopup3" data-end-product=0>
                                        <div class="card-body">
                                            <h3 class="card-title mb-2">
                                                AUTOMOTIVE
                                            </h3>
                                            <p class="card-text">Engine gasket, brake system, window trim, cover magnet, piston ring, transmission spring</p>
                                        </div>
                                        <img src="{{asset('/images/bnm/components/product_section/auto.jpg')}}" class="card-img-top mx-auto px-0" alt="..." width="23vw" style="height:100%; object-fit:cover;">
                                    </div>
                                    <div class="card mx-2 specPopup3" data-end-product="1">
                                        <div class="card-body">
                                            <h3 class="card-title mb-2">
                                                MEDICAL
                                            </h3>
                                            <p class="card-text">Syringe, canister, tray, scalpel</p>
                                        </div>
                                        <img src="{{asset('/images/bnm/components/product_section/medicine.jpg')}}" class="card-img-top mx-auto p-0" alt="..." width="23vw" style="height:100% ;object-fit:cover;">
                                    </div>
                                    <div class="card mx-2 specPopup3" data-end-product=2>
                                        <div class="card-body">
                                            <h3 class="card-title mb-2">
                                                ELECTRONICS
                                            </h3>
                                            <p class="card-text">Flat springs, computer/TV parts, blender knife, dispenser water tank</p>
                                        </div>
                                        <img src="{{asset('/images/bnm/components/product_section/industry.jpg')}}" class="card-img-top mx-auto p-0" alt="..." width="23vw" style="height:100% ;object-fit:cover;">
                                    </div>
                                    <div class="card mx-2 specPopup3" data-end-product=3>
                                        <div class="card-body">
                                            <h3 class="card-title mb-2">
                                                INDUSTRIAL
                                            </h3>
                                            <p class="card-text">Tower packing, Cable tie, Flexible hose, Constant force spring</p>
                                        </div>
                                        <img src="{{asset('/images/bnm/components/product_section/industy.jpg')}}" class="card-img-top mx-auto p-0" alt="..." width="23vw" style="height:100% ;object-fit:cover;">
                                    </div>
                                    <div class="card mx-2 specPopup3" data-end-product=4>
                                        <div class="card-body">
                                            <h3 class="card-title mb-2">OTHERS</h3>
                                            <p class="card-text">Safety shoes sole, Textile reed, Pan rimming, Window spacer, Razor blade</p>
                                        </div>
                                        <img src="{{asset('/images/bnm/components/product_section/other.jpg')}}" class="card-img-top mx-auto p-0" alt="..." width="23vw" style="height:100% ;object-fit:cover;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mar-10 gx-0">
                    <div class="col-1 col-xxl-1"></div>
                    <div class="col-11 col-xxl-11 g-2">
                        <svg width="2000" height="3" viewBox="0 0 1312 3" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-100">
                            <line y1="1.5" x2="2000" y2="1.5" stroke="#FFAF08" stroke-width="3" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end product-section -->
    <!-- production-facilities-section -->
    <section id="production" class="production__section pt-5">
        <div class="container-full">
            <div class="row gx-0">
                <div class="col-md-1"></div>
                <div class="col-md-11">
                    <h1>
                        PRODUCTION FACILITIES
                    </h1>
                    <div class="row">
                        <div class="col-md-11">
                            <div class="row gx-0">
                                <div class="forMobile">
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-10 col-md-12" style="overflow-x: scroll;">
                                            <div style="width: 654px;">
                                                <img src="{{asset('/images/bnm/ms-min.jpg')}}">
                                            </div>
                                        </div>
                                        <div class="col-1"></div>
                                    </div>
                                </div>
                                <div class="forDesktop">
                                    <div class="col-12 col-md-12" id="main">
                                        <div class="pt-5"></div>
                                        <svg width="100%" height="392" viewBox="0 0 1152 392" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M432.604 369H434.584V358.2H436.654V356.4H430.534V358.2H432.604V369ZM438.332 369H443.732V367.2H440.312V363.33H443.03V361.53H440.312V358.2H443.732V356.4H438.332V369ZM445.591 369H447.355V359.802H447.391L449.767 369H451.801V356.4H450.037V363.942H450.001L448.075 356.4H445.591V369ZM456.567 369.18C458.511 369.18 459.555 368.028 459.555 365.976C459.555 364.41 459.033 363.402 457.377 361.944C456.081 360.81 455.667 360.144 455.667 359.226C455.667 358.362 456.027 358.02 456.657 358.02C457.287 358.02 457.647 358.362 457.647 359.262V359.91H459.519V359.388C459.519 357.372 458.565 356.22 456.639 356.22C454.713 356.22 453.687 357.372 453.687 359.352C453.687 360.792 454.227 361.818 455.883 363.276C457.179 364.41 457.575 365.076 457.575 366.12C457.575 367.056 457.179 367.38 456.549 367.38C455.919 367.38 455.523 367.056 455.523 366.156V365.292H453.651V366.012C453.651 368.028 454.623 369.18 456.567 369.18ZM461.41 369H463.39V356.4H461.41V369ZM468.455 369.18C470.399 369.18 471.461 368.028 471.461 366.012V359.388C471.461 357.372 470.399 356.22 468.455 356.22C466.511 356.22 465.449 357.372 465.449 359.388V366.012C465.449 368.028 466.511 369.18 468.455 369.18ZM468.455 367.38C467.825 367.38 467.429 367.038 467.429 366.138V359.262C467.429 358.362 467.825 358.02 468.455 358.02C469.085 358.02 469.481 358.362 469.481 359.262V366.138C469.481 367.038 469.085 367.38 468.455 367.38ZM473.52 369H475.284V359.802H475.32L477.696 369H479.73V356.4H477.966V363.942H477.93L476.004 356.4H473.52V369ZM485.525 369H490.763V367.2H487.505V356.4H485.525V369ZM492.432 369H497.832V367.2H494.412V363.33H497.13V361.53H494.412V358.2H497.832V356.4H492.432V369ZM501.077 369H503.705L505.613 356.4H503.795L502.499 366.174H502.463L501.167 356.4H499.169L501.077 369ZM507.284 369H512.684V367.2H509.264V363.33H511.982V361.53H509.264V358.2H512.684V356.4H507.284V369ZM514.543 369H519.781V367.2H516.523V356.4H514.543V369ZM521.451 369H523.431V356.4H521.451V369ZM525.634 369H527.398V359.802H527.434L529.81 369H531.844V356.4H530.08V363.942H530.044L528.118 356.4H525.634V369ZM536.843 369.18C538.787 369.18 539.795 368.028 539.795 366.012V361.89H536.933V363.69H537.923V366.156C537.923 367.056 537.527 367.38 536.897 367.38C536.267 367.38 535.871 367.056 535.871 366.156V359.262C535.871 358.362 536.267 358.02 536.897 358.02C537.527 358.02 537.923 358.362 537.923 359.262V360.468H539.795V359.388C539.795 357.372 538.787 356.22 536.843 356.22C534.899 356.22 533.891 357.372 533.891 359.388V366.012C533.891 368.028 534.899 369.18 536.843 369.18ZM545.389 369H550.627V367.2H547.369V356.4H545.389V369ZM552.297 369H554.277V356.4H552.297V369ZM556.48 369H558.244V359.802H558.28L560.656 369H562.69V356.4H560.926V363.942H560.89L558.964 356.4H556.48V369ZM564.881 369H570.281V367.2H566.861V363.33H569.579V361.53H566.861V358.2H570.281V356.4H564.881V369Z" fill="#848484" />
                                            <rect x="0.5" y="1.5" width="162.343" height="157.626" fill="white" stroke="#D9D9D9" class="sendzimir w1 active" data-prod="sendzimir" data-fac=0 />
                                            <rect x="395.5" y="193.5" width="360" height="198" fill="white" stroke="#D9D9D9" class="tension w1" data-prod="tension" data-fac=6 />
                                            <rect x="395.5" y="0.5" width="162" height="157" fill="white" stroke="#D9D9D9" class="vertical-bright w1" data-prod="vertical-bright" data-fac="2" />
                                            <path d="M428.578 117H431.206L433.114 104.4H431.296L430 114.174H429.964L428.668 104.4H426.67L428.578 117ZM434.785 117H440.185V115.2H436.765V111.33H439.483V109.53H436.765V106.2H440.185V104.4H434.785V117ZM442.044 117H444.024V111.6H444.708C445.608 111.6 445.95 111.978 445.95 113.148V115.452C445.95 116.478 446.022 116.676 446.13 117H448.146C447.948 116.532 447.93 116.082 447.93 115.47V113.256C447.93 111.834 447.606 110.898 446.616 110.592V110.556C447.498 110.196 447.912 109.368 447.912 108.072V107.298C447.912 105.354 447.03 104.4 444.978 104.4H442.044V117ZM444.024 109.8V106.2H444.924C445.626 106.2 445.932 106.596 445.932 107.496V108.468C445.932 109.476 445.482 109.8 444.744 109.8H444.024ZM451.537 117H453.517V106.2H455.587V104.4H449.467V106.2H451.537V117ZM457.266 117H459.246V104.4H457.266V117ZM464.238 117.18C466.146 117.18 467.154 116.028 467.154 114.084V112.302H465.282V114.228C465.282 115.056 464.886 115.38 464.292 115.38C463.698 115.38 463.302 115.056 463.302 114.228V107.19C463.302 106.362 463.698 106.02 464.292 106.02C464.886 106.02 465.282 106.362 465.282 107.19V108.648H467.154V107.316C467.154 105.372 466.146 104.22 464.238 104.22C462.33 104.22 461.322 105.372 461.322 107.316V114.084C461.322 116.028 462.33 117.18 464.238 117.18ZM468.537 117H470.373L470.733 114.534H472.983V114.498L473.343 117H475.323L473.271 104.4H470.589L468.537 117ZM470.967 112.824L471.831 106.596H471.867L472.749 112.824H470.967ZM477.004 117H482.242V115.2H478.984V104.4H477.004V117ZM487.514 117H490.628C492.608 117 493.634 115.956 493.634 114.012V112.932C493.634 111.6 493.22 110.664 492.158 110.304V110.268C493.04 109.908 493.436 109.098 493.436 107.802V107.298C493.436 105.354 492.554 104.4 490.502 104.4H487.514V117ZM489.494 109.53V106.2H490.448C491.15 106.2 491.456 106.596 491.456 107.496V108.198C491.456 109.206 491.006 109.53 490.268 109.53H489.494ZM489.494 115.2V111.33H490.376C491.276 111.33 491.654 111.69 491.654 112.86V113.958C491.654 114.894 491.294 115.2 490.628 115.2H489.494ZM495.511 117H497.491V111.6H498.175C499.075 111.6 499.417 111.978 499.417 113.148V115.452C499.417 116.478 499.489 116.676 499.597 117H501.613C501.415 116.532 501.397 116.082 501.397 115.47V113.256C501.397 111.834 501.073 110.898 500.083 110.592V110.556C500.965 110.196 501.379 109.368 501.379 108.072V107.298C501.379 105.354 500.497 104.4 498.445 104.4H495.511V117ZM497.491 109.8V106.2H498.391C499.093 106.2 499.399 106.596 499.399 107.496V108.468C499.399 109.476 498.949 109.8 498.211 109.8H497.491ZM503.491 117H505.471V104.4H503.491V117ZM510.482 117.18C512.426 117.18 513.434 116.028 513.434 114.012V109.89H510.572V111.69H511.562V114.156C511.562 115.056 511.166 115.38 510.536 115.38C509.906 115.38 509.51 115.056 509.51 114.156V107.262C509.51 106.362 509.906 106.02 510.536 106.02C511.166 106.02 511.562 106.362 511.562 107.262V108.468H513.434V107.388C513.434 105.372 512.426 104.22 510.482 104.22C508.538 104.22 507.53 105.372 507.53 107.388V114.012C507.53 116.028 508.538 117.18 510.482 117.18ZM515.425 117H517.405V111.33H519.529V117H521.509V104.4H519.529V109.53H517.405V104.4H515.425V117ZM525.252 117H527.232V106.2H529.302V104.4H523.182V106.2H525.252V117ZM429.79 138H431.626L431.986 135.534H434.236V135.498L434.596 138H436.576L434.524 125.4H431.842L429.79 138ZM432.22 133.824L433.084 127.596H433.12L434.002 133.824H432.22ZM438.257 138H440.021V128.802H440.057L442.433 138H444.467V125.4H442.703V132.942H442.667L440.741 125.4H438.257V138ZM446.658 138H448.422V128.802H448.458L450.834 138H452.868V125.4H451.104V132.942H451.068L449.142 125.4H446.658V138ZM455.06 138H460.46V136.2H457.04V132.33H459.758V130.53H457.04V127.2H460.46V125.4H455.06V138ZM461.797 138H463.633L463.993 135.534H466.243V135.498L466.603 138H468.583L466.531 125.4H463.849L461.797 138ZM464.227 133.824L465.091 127.596H465.127L466.009 133.824H464.227ZM470.263 138H475.501V136.2H472.243V125.4H470.263V138ZM477.171 138H479.151V125.4H477.171V138ZM481.354 138H483.118V128.802H483.154L485.53 138H487.564V125.4H485.8V132.942H485.764L483.838 125.4H481.354V138ZM492.564 138.18C494.508 138.18 495.516 137.028 495.516 135.012V130.89H492.654V132.69H493.644V135.156C493.644 136.056 493.248 136.38 492.618 136.38C491.988 136.38 491.592 136.056 491.592 135.156V128.262C491.592 127.362 491.988 127.02 492.618 127.02C493.248 127.02 493.644 127.362 493.644 128.262V129.468H495.516V128.388C495.516 126.372 494.508 125.22 492.564 125.22C490.62 125.22 489.612 126.372 489.612 128.388V135.012C489.612 137.028 490.62 138.18 492.564 138.18ZM501.11 138H506.348V136.2H503.09V125.4H501.11V138ZM508.017 138H509.997V125.4H508.017V138ZM512.2 138H513.964V128.802H514L516.376 138H518.41V125.4H516.646V132.942H516.61L514.684 125.4H512.2V138ZM520.602 138H526.002V136.2H522.582V132.33H525.3V130.53H522.582V127.2H526.002V125.4H520.602V138Z" fill="#848484" class="caption-vertical-bright " />
                                            <path d="M429.141 75.6585L433.862 68.3794H442.821V52.2416H446.005V68.4128H456.694L458.55 40.3159H460.848L463.271 68.4629H471.821V47.5031C471.821 47.5031 471.946 45.9821 473.877 45.9821C473.877 45.9821 475.866 45.9821 475.866 47.3945V68.4629H530.238" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="vertical-bright " />
                                            <path d="M423.048 80.9148C426.413 80.9148 429.141 78.1871 429.141 74.8224C429.141 71.4576 426.413 68.73 423.048 68.73C419.683 68.73 416.956 71.4576 416.956 74.8224C416.956 78.1871 419.683 80.9148 423.048 80.9148Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="vertical-bright " />
                                            <path d="M423.048 77.5639C424.562 77.5639 425.789 76.3366 425.789 74.8227C425.789 73.3088 424.562 72.0815 423.048 72.0815C421.534 72.0815 420.307 73.3088 420.307 74.8227C420.307 76.3366 421.534 77.5639 423.048 77.5639Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="vertical-bright " />
                                            <path d="M530.58 80.5564C533.945 80.5564 536.673 77.8287 536.673 74.464C536.673 71.0992 533.945 68.3716 530.58 68.3716C527.215 68.3716 524.488 71.0992 524.488 74.464C524.488 77.8287 527.215 80.5564 530.58 80.5564Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="vertical-bright " />
                                            <path d="M530.58 77.2045C532.094 77.2045 533.321 75.9772 533.321 74.4633C533.321 72.9494 532.094 71.7222 530.58 71.7222C529.066 71.7222 527.839 72.9494 527.839 74.4633C527.839 75.9772 529.066 77.2045 530.58 77.2045Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="vertical-bright " />
                                            <path d="M462.954 59.4542H456.677C454.839 59.4542 453.351 57.9666 453.351 56.128V30.5801C453.351 28.7415 454.839 27.2539 456.677 27.2539H462.954C464.792 27.2539 466.28 28.7415 466.28 30.5801V56.128C466.28 57.9666 464.792 59.4542 462.954 59.4542Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="vertical-bright " />
                                            <path d="M494.243 59.4541H484.306C482.677 59.4541 481.348 60.7745 481.348 62.4125V75.8258C481.348 77.4555 482.668 78.7843 484.306 78.7843H494.243C495.873 78.7843 497.201 77.4638 497.201 75.8258V62.4125C497.193 60.7829 495.873 59.4541 494.243 59.4541Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="vertical-bright " />
                                            <path d="M511.71 59.4541H504.656C502.224 59.4541 500.26 61.4264 500.26 63.85V74.38C500.26 76.812 502.233 78.7759 504.656 78.7759H511.71C514.142 78.7759 516.105 76.8036 516.105 74.38V63.85C516.114 61.4264 514.142 59.4541 511.71 59.4541Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="vertical-bright " />
                                            <path d="M504.18 68.4627C504.891 68.4627 505.467 67.8865 505.467 67.1757C505.467 66.4649 504.891 65.8887 504.18 65.8887C503.469 65.8887 502.893 66.4649 502.893 67.1757C502.893 67.8865 503.469 68.4627 504.18 68.4627Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="vertical-bright " />
                                            <path d="M486.187 65.2208C486.768 65.2208 487.24 64.7493 487.24 64.1678C487.24 63.5862 486.768 63.1147 486.187 63.1147C485.605 63.1147 485.134 63.5862 485.134 64.1678C485.134 64.7493 485.605 65.2208 486.187 65.2208Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="vertical-bright " />
                                            <path d="M489.271 65.2208C489.852 65.2208 490.324 64.7493 490.324 64.1678C490.324 63.5862 489.852 63.1147 489.271 63.1147C488.689 63.1147 488.218 63.5862 488.218 64.1678C488.218 64.7493 488.689 65.2208 489.271 65.2208Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="vertical-bright " />
                                            <path d="M492.421 65.2208C493.003 65.2208 493.474 64.7493 493.474 64.1678C493.474 63.5862 493.003 63.1147 492.421 63.1147C491.84 63.1147 491.368 63.5862 491.368 64.1678C491.368 64.7493 491.84 65.2208 492.421 65.2208Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="vertical-bright " />
                                            <path d="M486.187 74.7554C486.768 74.7554 487.24 74.284 487.24 73.7024C487.24 73.1209 486.768 72.6494 486.187 72.6494C485.605 72.6494 485.134 73.1209 485.134 73.7024C485.134 74.284 485.605 74.7554 486.187 74.7554Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="vertical-bright " />
                                            <path d="M489.271 74.7554C489.852 74.7554 490.324 74.284 490.324 73.7024C490.324 73.1209 489.852 72.6494 489.271 72.6494C488.689 72.6494 488.218 73.1209 488.218 73.7024C488.218 74.284 488.689 74.7554 489.271 74.7554Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="vertical-bright " />
                                            <path d="M492.421 74.7554C493.003 74.7554 493.474 74.284 493.474 73.7024C493.474 73.1209 493.003 72.6494 492.421 72.6494C491.84 72.6494 491.368 73.1209 491.368 73.7024C491.368 74.284 491.84 74.7554 492.421 74.7554Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="vertical-bright " />
                                            <path d="M477.479 68.4627C478.189 68.4627 478.766 67.8865 478.766 67.1757C478.766 66.4649 478.189 65.8887 477.479 65.8887C476.768 65.8887 476.192 66.4649 476.192 67.1757C476.192 67.8865 476.768 68.4627 477.479 68.4627Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="vertical-bright " />
                                            <path d="M470.509 68.4627C471.219 68.4627 471.796 67.8865 471.796 67.1757C471.796 66.4649 471.219 65.8887 470.509 65.8887C469.798 65.8887 469.222 66.4649 469.222 67.1757C469.222 67.8865 469.798 68.4627 470.509 68.4627Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="vertical-bright " />
                                            <path d="M447.535 68.4627C448.246 68.4627 448.822 67.8865 448.822 67.1757C448.822 66.4649 448.246 65.8887 447.535 65.8887C446.824 65.8887 446.248 66.4649 446.248 67.1757C446.248 67.8865 446.824 68.4627 447.535 68.4627Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="vertical-bright " />
                                            <path d="M444.459 53.8216C445.59 53.8216 446.507 52.9049 446.507 51.7741C446.507 50.6433 445.59 49.7266 444.459 49.7266C443.329 49.7266 442.412 50.6433 442.412 51.7741C442.412 52.9049 443.329 53.8216 444.459 53.8216Z" fill="white" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="vertical-bright " />
                                            <path d="M459.678 42.3641C460.809 42.3641 461.725 41.4474 461.725 40.3166C461.725 39.1857 460.809 38.269 459.678 38.269C458.547 38.269 457.63 39.1857 457.63 40.3166C457.63 41.4474 458.547 42.3641 459.678 42.3641Z" fill="white" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="vertical-bright " />
                                            <path d="M521.212 72.6497C522.343 72.6497 523.259 71.733 523.259 70.6022C523.259 69.4714 522.343 68.5547 521.212 68.5547C520.081 68.5547 519.164 69.4714 519.164 70.6022C519.164 71.733 520.081 72.6497 521.212 72.6497Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="vertical-bright " />
                                            <path d="M441.083 68.4627C441.794 68.4627 442.37 67.8865 442.37 67.1757C442.37 66.4649 441.794 65.8887 441.083 65.8887C440.372 65.8887 439.796 66.4649 439.796 67.1757C439.796 67.8865 440.372 68.4627 441.083 68.4627Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="vertical-bright " />
                                            <path d="M434.481 71.3133C435.192 71.3133 435.768 70.7371 435.768 70.0263C435.768 69.3155 435.192 68.7393 434.481 68.7393C433.77 68.7393 433.194 69.3155 433.194 70.0263C433.194 70.7371 433.77 71.3133 434.481 71.3133Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="vertical-bright " />
                                            <path d="M464.7 68.4627C465.411 68.4627 465.987 67.8865 465.987 67.1757C465.987 66.4649 465.411 65.8887 464.7 65.8887C463.99 65.8887 463.413 66.4649 463.413 67.1757C463.413 67.8865 463.99 68.4627 464.7 68.4627Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="vertical-bright active" />
                                            <path d="M455.148 68.4627C455.859 68.4627 456.435 67.8865 456.435 67.1757C456.435 66.4649 455.859 65.8887 455.148 65.8887C454.437 65.8887 453.861 66.4649 453.861 67.1757C453.861 67.8865 454.437 68.4627 455.148 68.4627Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="vertical-bright " />
                                            <path d="M511.768 65.2704C513.24 65.2704 514.434 64.0768 514.434 62.6044C514.434 61.1321 513.24 59.9385 511.768 59.9385C510.296 59.9385 509.102 61.1321 509.102 62.6044C509.102 64.0768 510.296 65.2704 511.768 65.2704Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="vertical-bright " />
                                            <path d="M512.412 70.9617C513.122 70.9617 513.699 70.3855 513.699 69.6747C513.699 68.9639 513.122 68.3877 512.412 68.3877C511.701 68.3877 511.125 68.9639 511.125 69.6747C511.125 70.3855 511.701 70.9617 512.412 70.9617Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="vertical-bright " />
                                            <path d="M504.823 78.2069C506.296 78.2069 507.489 77.0133 507.489 75.5409C507.489 74.0686 506.296 72.875 504.823 72.875C503.351 72.875 502.157 74.0686 502.157 75.5409C502.157 77.0133 503.351 78.2069 504.823 78.2069Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="vertical-bright " />
                                            <rect x="791.5" y="0.5" width="162" height="157" fill="white" stroke="#D9D9D9" class="slitting-line w1" data-prod="slitting-line" data-fac=4 />
                                            <path d="M835.978 124.18C837.922 124.18 838.966 123.028 838.966 120.976C838.966 119.41 838.444 118.402 836.788 116.944C835.492 115.81 835.078 115.144 835.078 114.226C835.078 113.362 835.438 113.02 836.068 113.02C836.698 113.02 837.058 113.362 837.058 114.262V114.91H838.93V114.388C838.93 112.372 837.976 111.22 836.05 111.22C834.124 111.22 833.098 112.372 833.098 114.352C833.098 115.792 833.638 116.818 835.294 118.276C836.59 119.41 836.986 120.076 836.986 121.12C836.986 122.056 836.59 122.38 835.96 122.38C835.33 122.38 834.934 122.056 834.934 121.156V120.292H833.062V121.012C833.062 123.028 834.034 124.18 835.978 124.18ZM840.821 124H846.059V122.2H842.801V111.4H840.821V124ZM847.729 124H849.709V111.4H847.729V124ZM853.46 124H855.44V113.2H857.51V111.4H851.39V113.2H853.46V124ZM860.912 124H862.892V113.2H864.962V111.4H858.842V113.2H860.912V124ZM866.641 124H868.621V111.4H866.641V124ZM870.824 124H872.588V114.802H872.624L875 124H877.034V111.4H875.27V118.942H875.234L873.308 111.4H870.824V124ZM882.033 124.18C883.977 124.18 884.985 123.028 884.985 121.012V116.89H882.123V118.69H883.113V121.156C883.113 122.056 882.717 122.38 882.087 122.38C881.457 122.38 881.061 122.056 881.061 121.156V114.262C881.061 113.362 881.457 113.02 882.087 113.02C882.717 113.02 883.113 113.362 883.113 114.262V115.468H884.985V114.388C884.985 112.372 883.977 111.22 882.033 111.22C880.089 111.22 879.081 112.372 879.081 114.388V121.012C879.081 123.028 880.089 124.18 882.033 124.18ZM890.579 124H895.817V122.2H892.559V111.4H890.579V124ZM897.487 124H899.467V111.4H897.487V124ZM901.67 124H903.434V114.802H903.47L905.846 124H907.88V111.4H906.116V118.942H906.08L904.154 111.4H901.67V124ZM910.071 124H915.471V122.2H912.051V118.33H914.769V116.53H912.051V113.2H915.471V111.4H910.071V124Z" fill="#848484" class="caption-slitting-line" />
                                            <path d="M836.757 63.2444C840.628 63.2444 843.766 60.1064 843.766 56.2355C843.766 52.3646 840.628 49.2266 836.757 49.2266C832.886 49.2266 829.748 52.3646 829.748 56.2355C829.748 60.1064 832.886 63.2444 836.757 63.2444Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="slitting-line " />
                                            <path d="M836.757 59.3883C838.498 59.3883 839.91 57.9767 839.91 56.2354C839.91 54.4941 838.498 53.0825 836.757 53.0825C835.016 53.0825 833.604 54.4941 833.604 56.2354C833.604 57.9767 835.016 59.3883 836.757 59.3883Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="slitting-line " />
                                            <path d="M907.708 63.2444C911.579 63.2444 914.717 60.1064 914.717 56.2355C914.717 52.3646 911.579 49.2266 907.708 49.2266C903.837 49.2266 900.699 52.3646 900.699 56.2355C900.699 60.1064 903.837 63.2444 907.708 63.2444Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="slitting-line " />
                                            <path d="M907.708 59.3883C909.449 59.3883 910.861 57.9767 910.861 56.2354C910.861 54.4941 909.449 53.0825 907.708 53.0825C905.967 53.0825 904.555 54.4941 904.555 56.2354C904.555 57.9767 905.967 59.3883 907.708 59.3883Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="slitting-line " />
                                            <path d="M872.459 44.0095C878.648 44.0095 883.665 38.9928 883.665 32.8043C883.665 26.6159 878.648 21.5991 872.459 21.5991C866.271 21.5991 861.254 26.6159 861.254 32.8043C861.254 38.9928 866.271 44.0095 872.459 44.0095Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="slitting-line " />
                                            <path d="M872.459 37.8474C875.245 37.8474 877.502 35.5895 877.502 32.8043C877.502 30.0191 875.245 27.7612 872.459 27.7612C869.674 27.7612 867.416 30.0191 867.416 32.8043C867.416 35.5895 869.674 37.8474 872.459 37.8474Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="slitting-line" />
                                            <path d="M872.459 77.6326C878.648 77.6326 883.665 72.6158 883.665 66.4274C883.665 60.2389 878.648 55.2222 872.459 55.2222C866.271 55.2222 861.254 60.2389 861.254 66.4274C861.254 72.6158 866.271 77.6326 872.459 77.6326Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="slitting-line " />
                                            <path d="M872.459 71.4704C875.245 71.4704 877.502 69.2126 877.502 66.4274C877.502 63.6421 875.245 61.3843 872.459 61.3843C869.674 61.3843 867.416 63.6421 867.416 66.4274C867.416 69.2126 869.674 71.4704 872.459 71.4704Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="slitting-line " />
                                            <path d="M884.035 18H860.891C857.421 18 854.616 20.8126 854.616 24.2755V74.6536C854.616 78.124 857.428 80.9291 860.891 80.9291H884.035C887.505 80.9291 890.311 78.1164 890.311 74.6536V24.2755C890.311 20.8051 887.498 18 884.035 18Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="slitting-line " />
                                            <path d="M836.757 49.2266H907.708" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="slitting-line " />
                                            <rect x="594.5" y="0.5" width="161" height="157" fill="white" stroke="#D9D9D9" class="skin-pass-mill w1" data-prod="skin-pass-mill" data-fac=3 />
                                            <path d="M633.393 124.18C635.337 124.18 636.381 123.028 636.381 120.976C636.381 119.41 635.859 118.402 634.203 116.944C632.907 115.81 632.493 115.144 632.493 114.226C632.493 113.362 632.853 113.02 633.483 113.02C634.113 113.02 634.473 113.362 634.473 114.262V114.91H636.345V114.388C636.345 112.372 635.391 111.22 633.465 111.22C631.539 111.22 630.513 112.372 630.513 114.352C630.513 115.792 631.053 116.818 632.709 118.276C634.005 119.41 634.401 120.076 634.401 121.12C634.401 122.056 634.005 122.38 633.375 122.38C632.745 122.38 632.349 122.056 632.349 121.156V120.292H630.477V121.012C630.477 123.028 631.449 124.18 633.393 124.18ZM638.237 124H640.217V119.986L641.009 118.384L642.683 124H644.753L642.359 116.026L644.717 111.4H642.737L640.217 116.71V111.4H638.237V124ZM646.41 124H648.39V111.4H646.41V124ZM650.593 124H652.357V114.802H652.393L654.769 124H656.803V111.4H655.039V118.942H655.003L653.077 111.4H650.593V124ZM662.597 124H664.577V118.87H665.513C667.493 118.87 668.465 117.772 668.465 115.756V114.514C668.465 112.498 667.493 111.4 665.513 111.4H662.597V124ZM664.577 117.07V113.2H665.513C666.143 113.2 666.485 113.488 666.485 114.388V115.882C666.485 116.782 666.143 117.07 665.513 117.07H664.577ZM669.106 124H670.942L671.302 121.534H673.552V121.498L673.912 124H675.892L673.84 111.4H671.158L669.106 124ZM671.536 119.824L672.4 113.596H672.436L673.318 119.824H671.536ZM680.094 124.18C682.038 124.18 683.082 123.028 683.082 120.976C683.082 119.41 682.56 118.402 680.904 116.944C679.608 115.81 679.194 115.144 679.194 114.226C679.194 113.362 679.554 113.02 680.184 113.02C680.814 113.02 681.174 113.362 681.174 114.262V114.91H683.046V114.388C683.046 112.372 682.092 111.22 680.166 111.22C678.24 111.22 677.214 112.372 677.214 114.352C677.214 115.792 677.754 116.818 679.41 118.276C680.706 119.41 681.102 120.076 681.102 121.12C681.102 122.056 680.706 122.38 680.076 122.38C679.446 122.38 679.05 122.056 679.05 121.156V120.292H677.178V121.012C677.178 123.028 678.15 124.18 680.094 124.18ZM687.511 124.18C689.455 124.18 690.499 123.028 690.499 120.976C690.499 119.41 689.977 118.402 688.321 116.944C687.025 115.81 686.611 115.144 686.611 114.226C686.611 113.362 686.971 113.02 687.601 113.02C688.231 113.02 688.591 113.362 688.591 114.262V114.91H690.463V114.388C690.463 112.372 689.509 111.22 687.583 111.22C685.657 111.22 684.631 112.372 684.631 114.352C684.631 115.792 685.171 116.818 686.827 118.276C688.123 119.41 688.519 120.076 688.519 121.12C688.519 122.056 688.123 122.38 687.493 122.38C686.863 122.38 686.467 122.056 686.467 121.156V120.292H684.595V121.012C684.595 123.028 685.567 124.18 687.511 124.18ZM695.957 124H697.685V114.46H697.721L699.161 124H700.817L702.257 114.46H702.293V124H704.165V111.4H701.339L700.079 120.418H700.043L698.783 111.4H695.957V124ZM706.362 124H708.342V111.4H706.362V124ZM710.545 124H715.783V122.2H712.525V111.4H710.545V124ZM717.453 124H722.691V122.2H719.433V111.4H717.453V124Z" fill="#848484" class="caption-skin-pass-mill" />
                                            <path d="M694.62 68.2876L687.853 63.5394C687.452 63.2596 687.218 62.806 687.218 62.3145V29.7499C687.218 29.3643 687.067 28.9938 686.802 28.7216L680.837 22.4612C680.557 22.1664 680.164 22 679.755 22H671.03C670.637 22 670.259 22.1512 669.979 22.431L663.59 28.7216C663.303 29.0014 663.144 29.387 663.144 29.7877V62.3221C663.144 62.806 662.91 63.2672 662.509 63.547L655.742 68.2952C655.341 68.5749 655.107 69.0286 655.107 69.52V74.4649C655.107 75.6897 656.498 76.3929 657.481 75.6746L663.144 71.5388L663.794 71.2591C665.382 76.03 669.873 79.4701 675.174 79.4701C679.907 79.4701 683.99 76.7331 685.94 72.7561C686.326 71.9622 687.331 71.7051 688.072 72.1815L692.866 75.6821C693.856 76.4004 695.24 75.6973 695.24 74.4724V69.5276C695.255 69.021 695.021 68.5674 694.62 68.2876Z" fill="white" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="skin-pass-mill " />
                                            <path d="M635.895 74.3821C639.365 74.3821 642.178 71.569 642.178 68.099C642.178 64.6289 639.365 61.8159 635.895 61.8159C632.425 61.8159 629.612 64.6289 629.612 68.099C629.612 71.569 632.425 74.3821 635.895 74.3821Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="skin-pass-mill " />
                                            <path d="M635.895 70.926C637.457 70.926 638.723 69.66 638.723 68.0983C638.723 66.5365 637.457 65.2705 635.895 65.2705C634.333 65.2705 633.067 66.5365 633.067 68.0983C633.067 69.66 634.333 70.926 635.895 70.926Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="skin-pass-mill " />
                                            <path d="M714.755 74.3821C718.225 74.3821 721.038 71.569 721.038 68.099C721.038 64.6289 718.225 61.8159 714.755 61.8159C711.285 61.8159 708.472 64.6289 708.472 68.099C708.472 71.569 711.285 74.3821 714.755 74.3821Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="skin-pass-mill " />
                                            <path d="M714.755 70.926C716.316 70.926 717.583 69.66 717.583 68.0983C717.583 66.5365 716.316 65.2705 714.755 65.2705C713.193 65.2705 711.927 66.5365 711.927 68.0983C711.927 69.66 713.193 70.926 714.755 70.926Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="skin-pass-mill " />
                                            <path d="M633.067 62.4878L648.847 47.4189H701.659L714.755 61.8148" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="skin-pass-mill " />
                                            <path d="M649.762 51.3439C650.814 51.3439 651.667 50.4908 651.667 49.4385C651.667 48.3862 650.814 47.5332 649.762 47.5332C648.709 47.5332 647.856 48.3862 647.856 49.4385C647.856 50.4908 648.709 51.3439 649.762 51.3439Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="skin-pass-mill " />
                                            <path d="M700.646 51.3439C701.698 51.3439 702.552 50.4908 702.552 49.4385C702.552 48.3862 701.698 47.5332 700.646 47.5332C699.594 47.5332 698.741 48.3862 698.741 49.4385C698.741 50.4908 699.594 51.3439 700.646 51.3439Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="skin-pass-mill " />
                                            <path d="M675.181 65.7849C679.065 65.7849 682.213 62.6367 682.213 58.7533C682.213 54.8699 679.065 51.7217 675.181 51.7217C671.298 51.7217 668.15 54.8699 668.15 58.7533C668.15 62.6367 671.298 65.7849 675.181 65.7849Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="skin-pass-mill " />
                                            <path d="M675.181 62.8206C677.428 62.8206 679.249 60.9994 679.249 58.7528C679.249 56.5063 677.428 54.6851 675.181 54.6851C672.935 54.6851 671.113 56.5063 671.113 58.7528C671.113 60.9994 672.935 62.8206 675.181 62.8206Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="skin-pass-mill " />
                                            <path d="M675.181 43.5481C679.065 43.5481 682.213 40.3999 682.213 36.5165C682.213 32.633 679.065 29.4849 675.181 29.4849C671.298 29.4849 668.15 32.633 668.15 36.5165C668.15 40.3999 671.298 43.5481 675.181 43.5481Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="skin-pass-mill " />
                                            <path d="M675.181 40.5847C677.428 40.5847 679.249 38.7635 679.249 36.517C679.249 34.2704 677.428 32.4492 675.181 32.4492C672.935 32.4492 671.113 34.2704 671.113 36.517C671.113 38.7635 672.935 40.5847 675.181 40.5847Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="skin-pass-mill " />
                                            <rect x="989.157" y="0.5" width="162.343" height="157.626" fill="white" stroke="#D9D9D9" class="cold-rolled w1" data-prod="cold-rolled" data-fac=5 />
                                            <path d="M1035.08 103.18C1036.98 103.18 1037.99 102.028 1037.99 100.084V98.302H1036.12V100.228C1036.12 101.056 1035.72 101.38 1035.13 101.38C1034.54 101.38 1034.14 101.056 1034.14 100.228V93.19C1034.14 92.362 1034.54 92.02 1035.13 92.02C1035.72 92.02 1036.12 92.362 1036.12 93.19V94.648H1037.99V93.316C1037.99 91.372 1036.98 90.22 1035.08 90.22C1033.17 90.22 1032.16 91.372 1032.16 93.316V100.084C1032.16 102.028 1033.17 103.18 1035.08 103.18ZM1042.79 103.18C1044.74 103.18 1045.8 102.028 1045.8 100.012V93.388C1045.8 91.372 1044.74 90.22 1042.79 90.22C1040.85 90.22 1039.79 91.372 1039.79 93.388V100.012C1039.79 102.028 1040.85 103.18 1042.79 103.18ZM1042.79 101.38C1042.16 101.38 1041.77 101.038 1041.77 100.138V93.262C1041.77 92.362 1042.16 92.02 1042.79 92.02C1043.42 92.02 1043.82 92.362 1043.82 93.262V100.138C1043.82 101.038 1043.42 101.38 1042.79 101.38ZM1047.86 103H1053.1V101.2H1049.84V90.4H1047.86V103ZM1054.77 103H1057.79C1059.77 103 1060.74 101.902 1060.74 99.886V93.514C1060.74 91.498 1059.77 90.4 1057.79 90.4H1054.77V103ZM1056.75 101.2V92.2H1057.76C1058.39 92.2 1058.76 92.524 1058.76 93.424V99.976C1058.76 100.876 1058.39 101.2 1057.76 101.2H1056.75ZM1062.51 97.6H1066.47V95.8H1062.51V97.6ZM1068.37 103H1070.35V97.6H1071.04C1071.94 97.6 1072.28 97.978 1072.28 99.148V101.452C1072.28 102.478 1072.35 102.676 1072.46 103H1074.47C1074.28 102.532 1074.26 102.082 1074.26 101.47V99.256C1074.26 97.834 1073.93 96.898 1072.94 96.592V96.556C1073.83 96.196 1074.24 95.368 1074.24 94.072V93.298C1074.24 91.354 1073.36 90.4 1071.31 90.4H1068.37V103ZM1070.35 95.8V92.2H1071.25C1071.95 92.2 1072.26 92.596 1072.26 93.496V94.468C1072.26 95.476 1071.81 95.8 1071.07 95.8H1070.35ZM1079.21 103.18C1081.16 103.18 1082.22 102.028 1082.22 100.012V93.388C1082.22 91.372 1081.16 90.22 1079.21 90.22C1077.27 90.22 1076.21 91.372 1076.21 93.388V100.012C1076.21 102.028 1077.27 103.18 1079.21 103.18ZM1079.21 101.38C1078.58 101.38 1078.19 101.038 1078.19 100.138V93.262C1078.19 92.362 1078.58 92.02 1079.21 92.02C1079.84 92.02 1080.24 92.362 1080.24 93.262V100.138C1080.24 101.038 1079.84 101.38 1079.21 101.38ZM1084.28 103H1089.52V101.2H1086.26V90.4H1084.28V103ZM1091.19 103H1096.42V101.2H1093.17V90.4H1091.19V103ZM1098.09 103H1103.49V101.2H1100.07V97.33H1102.79V95.53H1100.07V92.2H1103.49V90.4H1098.09V103ZM1105.35 103H1108.38C1110.36 103 1111.33 101.902 1111.33 99.886V93.514C1111.33 91.498 1110.36 90.4 1108.38 90.4H1105.35V103ZM1107.33 101.2V92.2H1108.34C1108.97 92.2 1109.35 92.524 1109.35 93.424V99.976C1109.35 100.876 1108.97 101.2 1108.34 101.2H1107.33ZM1023.83 124.18C1025.78 124.18 1026.82 123.028 1026.82 120.976C1026.82 119.41 1026.3 118.402 1024.64 116.944C1023.35 115.81 1022.93 115.144 1022.93 114.226C1022.93 113.362 1023.29 113.02 1023.92 113.02C1024.55 113.02 1024.91 113.362 1024.91 114.262V114.91H1026.78V114.388C1026.78 112.372 1025.83 111.22 1023.9 111.22C1021.98 111.22 1020.95 112.372 1020.95 114.352C1020.95 115.792 1021.49 116.818 1023.15 118.276C1024.44 119.41 1024.84 120.076 1024.84 121.12C1024.84 122.056 1024.44 122.38 1023.81 122.38C1023.18 122.38 1022.79 122.056 1022.79 121.156V120.292H1020.92V121.012C1020.92 123.028 1021.89 124.18 1023.83 124.18ZM1030.22 124H1032.2V113.2H1034.27V111.4H1028.15V113.2H1030.22V124ZM1034.6 124H1036.44L1036.8 121.534H1039.05V121.498L1039.41 124H1041.39L1039.34 111.4H1036.66L1034.6 124ZM1037.03 119.824L1037.9 113.596H1037.93L1038.82 119.824H1037.03ZM1043.07 124H1045.05V111.4H1043.07V124ZM1047.25 124H1049.02V114.802H1049.05L1051.43 124H1053.46V111.4H1051.7V118.942H1051.66L1049.74 111.4H1047.25V124ZM1055.65 124H1060.89V122.2H1057.63V111.4H1055.65V124ZM1062.56 124H1067.96V122.2H1064.54V118.33H1067.26V116.53H1064.54V113.2H1067.96V111.4H1062.56V124ZM1072.43 124.18C1074.37 124.18 1075.42 123.028 1075.42 120.976C1075.42 119.41 1074.9 118.402 1073.24 116.944C1071.94 115.81 1071.53 115.144 1071.53 114.226C1071.53 113.362 1071.89 113.02 1072.52 113.02C1073.15 113.02 1073.51 113.362 1073.51 114.262V114.91H1075.38V114.388C1075.38 112.372 1074.43 111.22 1072.5 111.22C1070.58 111.22 1069.55 112.372 1069.55 114.352C1069.55 115.792 1070.09 116.818 1071.75 118.276C1073.04 119.41 1073.44 120.076 1073.44 121.12C1073.44 122.056 1073.04 122.38 1072.41 122.38C1071.78 122.38 1071.39 122.056 1071.39 121.156V120.292H1069.51V121.012C1069.51 123.028 1070.49 124.18 1072.43 124.18ZM1079.85 124.18C1081.79 124.18 1082.84 123.028 1082.84 120.976C1082.84 119.41 1082.31 118.402 1080.66 116.944C1079.36 115.81 1078.95 115.144 1078.95 114.226C1078.95 113.362 1079.31 113.02 1079.94 113.02C1080.57 113.02 1080.93 113.362 1080.93 114.262V114.91H1082.8V114.388C1082.8 112.372 1081.85 111.22 1079.92 111.22C1077.99 111.22 1076.97 112.372 1076.97 114.352C1076.97 115.792 1077.51 116.818 1079.16 118.276C1080.46 119.41 1080.86 120.076 1080.86 121.12C1080.86 122.056 1080.46 122.38 1079.83 122.38C1079.2 122.38 1078.8 122.056 1078.8 121.156V120.292H1076.93V121.012C1076.93 123.028 1077.9 124.18 1079.85 124.18ZM1090.87 124.18C1092.81 124.18 1093.86 123.028 1093.86 120.976C1093.86 119.41 1093.33 118.402 1091.68 116.944C1090.38 115.81 1089.97 115.144 1089.97 114.226C1089.97 113.362 1090.33 113.02 1090.96 113.02C1091.59 113.02 1091.95 113.362 1091.95 114.262V114.91H1093.82V114.388C1093.82 112.372 1092.87 111.22 1090.94 111.22C1089.01 111.22 1087.99 112.372 1087.99 114.352C1087.99 115.792 1088.53 116.818 1090.18 118.276C1091.48 119.41 1091.88 120.076 1091.88 121.12C1091.88 122.056 1091.48 122.38 1090.85 122.38C1090.22 122.38 1089.82 122.056 1089.82 121.156V120.292H1087.95V121.012C1087.95 123.028 1088.92 124.18 1090.87 124.18ZM1097.26 124H1099.24V113.2H1101.31V111.4H1095.19V113.2H1097.26V124ZM1102.99 124H1108.39V122.2H1104.97V118.33H1107.69V116.53H1104.97V113.2H1108.39V111.4H1102.99V124ZM1110.25 124H1115.65V122.2H1112.23V118.33H1114.94V116.53H1112.23V113.2H1115.65V111.4H1110.25V124ZM1117.51 124H1122.74V122.2H1119.49V111.4H1117.51V124ZM1026.69 145H1028.45V135.802H1028.49L1030.86 145H1032.9V132.4H1031.13V139.942H1031.1L1029.17 132.4H1026.69V145ZM1034.57 145H1036.4L1036.76 142.534H1039.01V142.498L1039.37 145H1041.35L1039.3 132.4H1036.62L1034.57 145ZM1037 140.824L1037.86 134.596H1037.9L1038.78 140.824H1037ZM1043.03 145H1045.01V139.6H1045.7C1046.6 139.6 1046.94 139.978 1046.94 141.148V143.452C1046.94 144.478 1047.01 144.676 1047.12 145H1049.14C1048.94 144.532 1048.92 144.082 1048.92 143.47V141.256C1048.92 139.834 1048.6 138.898 1047.61 138.592V138.556C1048.49 138.196 1048.9 137.368 1048.9 136.072V135.298C1048.9 133.354 1048.02 132.4 1045.97 132.4H1043.03V145ZM1045.01 137.8V134.2H1045.91C1046.62 134.2 1046.92 134.596 1046.92 135.496V136.468C1046.92 137.476 1046.47 137.8 1045.73 137.8H1045.01ZM1051.01 145H1052.99V139.6H1053.68C1054.58 139.6 1054.92 139.978 1054.92 141.148V143.452C1054.92 144.478 1054.99 144.676 1055.1 145H1057.12C1056.92 144.532 1056.9 144.082 1056.9 143.47V141.256C1056.9 139.834 1056.58 138.898 1055.59 138.592V138.556C1056.47 138.196 1056.88 137.368 1056.88 136.072V135.298C1056.88 133.354 1056 132.4 1053.95 132.4H1051.01V145ZM1052.99 137.8V134.2H1053.89C1054.6 134.2 1054.9 134.596 1054.9 135.496V136.468C1054.9 137.476 1054.45 137.8 1053.71 137.8H1052.99ZM1061.86 145.18C1063.8 145.18 1064.86 144.028 1064.86 142.012V135.388C1064.86 133.372 1063.8 132.22 1061.86 132.22C1059.91 132.22 1058.85 133.372 1058.85 135.388V142.012C1058.85 144.028 1059.91 145.18 1061.86 145.18ZM1061.86 143.38C1061.23 143.38 1060.83 143.038 1060.83 142.138V135.262C1060.83 134.362 1061.23 134.02 1061.86 134.02C1062.49 134.02 1062.88 134.362 1062.88 135.262V142.138C1062.88 143.038 1062.49 143.38 1061.86 143.38ZM1067.73 145H1070.36L1071.26 136.504H1071.29L1072.19 145H1074.66L1075.94 132.4H1074.23L1073.35 142.084H1073.31L1072.37 132.4H1070.21L1069.28 142.084H1069.24L1068.36 132.4H1066.45L1067.73 145ZM1082.07 145H1084.7L1085.6 136.504H1085.64L1086.54 145H1089L1090.28 132.4H1088.57L1087.69 142.084H1087.65L1086.72 132.4H1084.56L1083.62 142.084H1083.59L1082.7 132.4H1080.8L1082.07 145ZM1092 145H1093.98V132.4H1092V145ZM1096.19 145H1099.21C1101.19 145 1102.16 143.902 1102.16 141.886V135.514C1102.16 133.498 1101.19 132.4 1099.21 132.4H1096.19V145ZM1098.17 143.2V134.2H1099.17C1099.8 134.2 1100.18 134.524 1100.18 135.424V141.976C1100.18 142.876 1099.8 143.2 1099.17 143.2H1098.17ZM1105.7 145H1107.68V134.2H1109.75V132.4H1103.63V134.2H1105.7V145ZM1111.42 145H1113.4V139.33H1115.53V145H1117.51V132.4H1115.53V137.53H1113.4V132.4H1111.42V145Z" fill="#848484" class="caption-cold-rolled" />
                                            <path d="M1071.34 74.7764C1087.85 74.7764 1101.23 61.395 1101.23 44.8882C1101.23 28.3814 1087.85 15 1071.34 15C1054.83 15 1041.45 28.3814 1041.45 44.8882C1041.45 61.395 1054.83 74.7764 1071.34 74.7764Z" fill="#FFAF08" />
                                            <path d="M1070.44 77.4849C1086.94 77.4849 1100.33 64.1035 1100.33 47.5967C1100.33 31.0899 1086.94 17.7085 1070.44 17.7085C1053.93 17.7085 1040.55 31.0899 1040.55 47.5967C1040.55 64.1035 1053.93 77.4849 1070.44 77.4849Z" fill="white" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" />
                                            <path d="M1070.44 56.8763C1075.56 56.8763 1079.72 52.7216 1079.72 47.5966C1079.72 42.4716 1075.56 38.3169 1070.44 38.3169C1065.31 38.3169 1061.16 42.4716 1061.16 47.5966C1061.16 52.7216 1065.31 56.8763 1070.44 56.8763Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" />
                                            <path d="M1070.44 53.9326C1073.94 53.9326 1076.77 51.0955 1076.77 47.5957C1076.77 44.0959 1073.94 41.2588 1070.44 41.2588C1066.94 41.2588 1064.1 44.0959 1064.1 47.5957C1064.1 51.0955 1066.94 53.9326 1070.44 53.9326Z" fill="#FFAF08" />
                                            <path d="M1070.44 60.6581C1077.65 60.6581 1083.5 54.8101 1083.5 47.5962C1083.5 40.3823 1077.65 34.5342 1070.44 34.5342C1063.22 34.5342 1057.38 40.3823 1057.38 47.5962C1057.38 54.8101 1063.22 60.6581 1070.44 60.6581Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" />
                                            <path d="M1070.44 64.0889C1079.55 64.0889 1086.93 56.7051 1086.93 47.5967C1086.93 38.4883 1079.55 31.1045 1070.44 31.1045C1061.33 31.1045 1053.95 38.4883 1053.95 47.5967C1053.95 56.7051 1061.33 64.0889 1070.44 64.0889Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" />
                                            <path d="M1070.44 73.5943C1084.8 73.5943 1096.44 61.9548 1096.44 47.5967C1096.44 33.2387 1084.8 21.5991 1070.44 21.5991C1056.08 21.5991 1044.44 33.2387 1044.44 47.5967C1044.44 61.9548 1056.08 73.5943 1070.44 73.5943Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" />
                                            <path d="M1070.44 69.0985C1082.31 69.0985 1091.94 59.4717 1091.94 47.5964C1091.94 35.7211 1082.31 26.0942 1070.44 26.0942C1058.56 26.0942 1048.94 35.7211 1048.94 47.5964C1048.94 59.4717 1058.56 69.0985 1070.44 69.0985Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" />
                                            <path d="M1056.66 74.1176C1056.66 74.1176 1077.63 88.1455 1106.83 67.0405" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" />
                                            <path d="M36.6174 124.18C38.5614 124.18 39.6054 123.028 39.6054 120.976C39.6054 119.41 39.0834 118.402 37.4274 116.944C36.1314 115.81 35.7174 115.144 35.7174 114.226C35.7174 113.362 36.0774 113.02 36.7074 113.02C37.3374 113.02 37.6974 113.362 37.6974 114.262V114.91H39.5694V114.388C39.5694 112.372 38.6154 111.22 36.6894 111.22C34.7634 111.22 33.7374 112.372 33.7374 114.352C33.7374 115.792 34.2774 116.818 35.9334 118.276C37.2294 119.41 37.6254 120.076 37.6254 121.12C37.6254 122.056 37.2294 122.38 36.5994 122.38C35.9694 122.38 35.5734 122.056 35.5734 121.156V120.292H33.7014V121.012C33.7014 123.028 34.6734 124.18 36.6174 124.18ZM41.4606 124H46.8606V122.2H43.4406V118.33H46.1586V116.53H43.4406V113.2H46.8606V111.4H41.4606V124ZM48.7197 124H50.4837V114.802H50.5197L52.8957 124H54.9297V111.4H53.1657V118.942H53.1297L51.2037 111.4H48.7197V124ZM57.1213 124H60.1453C62.1253 124 63.0973 122.902 63.0973 120.886V114.514C63.0973 112.498 62.1253 111.4 60.1453 111.4H57.1213V124ZM59.1013 122.2V113.2H60.1093C60.7393 113.2 61.1173 113.524 61.1173 114.424V120.976C61.1173 121.876 60.7393 122.2 60.1093 122.2H59.1013ZM64.7578 124H70.5538V122.2H66.8818L70.5538 113.164V111.4H64.9378V113.2H68.4298L64.7578 122.236V124ZM72.3953 124H74.3753V111.4H72.3953V124ZM76.5782 124H78.3062V114.46H78.3422L79.7822 124H81.4382L82.8782 114.46H82.9142V124H84.7862V111.4H81.9602L80.7002 120.418H80.6642L79.4042 111.4H76.5782V124ZM86.9837 124H88.9637V111.4H86.9837V124ZM91.1666 124H93.1466V118.6H93.8306C94.7306 118.6 95.0726 118.978 95.0726 120.148V122.452C95.0726 123.478 95.1446 123.676 95.2526 124H97.2686C97.0706 123.532 97.0526 123.082 97.0526 122.47V120.256C97.0526 118.834 96.7286 117.898 95.7386 117.592V117.556C96.6206 117.196 97.0346 116.368 97.0346 115.072V114.298C97.0346 112.354 96.1526 111.4 94.1006 111.4H91.1666V124ZM93.1466 116.8V113.2H94.0466C94.7486 113.2 95.0546 113.596 95.0546 114.496V115.468C95.0546 116.476 94.6046 116.8 93.8666 116.8H93.1466ZM102.749 124H104.477V114.46H104.513L105.953 124H107.609L109.049 114.46H109.085V124H110.957V111.4H108.131L106.871 120.418H106.835L105.575 111.4H102.749V124ZM113.155 124H115.135V111.4H113.155V124ZM117.338 124H122.576V122.2H119.318V111.4H117.338V124ZM124.245 124H129.483V122.2H126.225V111.4H124.245V124Z" fill="#848484" class="caption-sendzimir active" />
                                            <path d="M56.1777 52.0601H106.563" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="sendzimir active" />
                                            <path d="M75.9267 40.2427C78.6367 40.2427 80.8337 38.0458 80.8337 35.3357C80.8337 32.6257 78.6367 30.4287 75.9267 30.4287C73.2166 30.4287 71.0197 32.6257 71.0197 35.3357C71.0197 38.0458 73.2166 40.2427 75.9267 40.2427Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="sendzimir active" />
                                            <path d="M81.2343 45.1342C83.0216 45.1342 84.4704 43.6854 84.4704 41.8982C84.4704 40.1109 83.0216 38.6621 81.2343 38.6621C79.4471 38.6621 77.9983 40.1109 77.9983 41.8982C77.9983 43.6854 79.4471 45.1342 81.2343 45.1342Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="sendzimir active" />
                                            <path d="M74.7924 46.4648C76.5797 46.4648 78.0285 45.0159 78.0285 43.2287C78.0285 41.4415 76.5797 39.9927 74.7924 39.9927C73.0052 39.9927 71.5564 41.4415 71.5564 43.2287C71.5564 45.0159 73.0052 46.4648 74.7924 46.4648Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="sendzimir active" />
                                            <path d="M79.0341 48.8244C80.2117 48.8244 81.1663 47.8698 81.1663 46.6922C81.1663 45.5147 80.2117 44.5601 79.0341 44.5601C77.8566 44.5601 76.902 45.5147 76.902 46.6922C76.902 47.8698 77.8566 48.8244 79.0341 48.8244Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="sendzimir active" />
                                            <path d="M83.291 48.8244C84.4685 48.8244 85.4231 47.8698 85.4231 46.6922C85.4231 45.5147 84.4685 44.5601 83.291 44.5601C82.1134 44.5601 81.1588 45.5147 81.1588 46.6922C81.1588 47.8698 82.1134 48.8244 83.291 48.8244Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="sendzimir active" />
                                            <path d="M87.6081 46.7753C89.3953 46.7753 90.8442 45.3265 90.8442 43.5393C90.8442 41.7521 89.3953 40.3032 87.6081 40.3032C85.8209 40.3032 84.3721 41.7521 84.3721 43.5393C84.3721 45.3265 85.8209 46.7753 87.6081 46.7753Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="sendzimir active" />
                                            <path d="M67.1787 44.794C69.8888 44.794 72.0857 42.597 72.0857 39.887C72.0857 37.1769 69.8888 34.98 67.1787 34.98C64.4687 34.98 62.2717 37.1769 62.2717 39.887C62.2717 42.597 64.4687 44.794 67.1787 44.794Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="sendzimir active" />
                                            <path d="M86.0053 40.2427C88.7153 40.2427 90.9123 38.0458 90.9123 35.3357C90.9123 32.6257 88.7153 30.4287 86.0053 30.4287C83.2952 30.4287 81.0983 32.6257 81.0983 35.3357C81.0983 38.0458 83.2952 40.2427 86.0053 40.2427Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="sendzimir active" />
                                            <path d="M94.7229 45.1495C97.433 45.1495 99.6299 42.9525 99.6299 40.2425C99.6299 37.5324 97.433 35.3354 94.7229 35.3354C92.0129 35.3354 89.8159 37.5324 89.8159 40.2425C89.8159 42.9525 92.0129 45.1495 94.7229 45.1495Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="sendzimir active" />
                                            <path d="M85.975 73.2832C88.6851 73.2832 90.882 71.0863 90.882 68.3762C90.882 65.6662 88.6851 63.4692 85.975 63.4692C83.2649 63.4692 81.068 65.6662 81.068 68.3762C81.068 71.0863 83.2649 73.2832 85.975 73.2832Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="sendzimir active" />
                                            <path d="M80.6673 65.0571C82.4545 65.0571 83.9034 63.6082 83.9034 61.821C83.9034 60.0338 82.4545 58.585 80.6673 58.585C78.8801 58.585 77.4313 60.0338 77.4313 61.821C77.4313 63.6082 78.8801 65.0571 80.6673 65.0571Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" />
                                            <path d="M87.1091 63.727C88.8963 63.727 90.3452 62.2782 90.3452 60.4909C90.3452 58.7037 88.8963 57.2549 87.1091 57.2549C85.3219 57.2549 83.873 58.7037 83.873 60.4909C83.873 62.2782 85.3219 63.727 87.1091 63.727Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="sendzimir active" />
                                            <path d="M82.8751 59.1598C84.0526 59.1598 85.0072 58.2052 85.0072 57.0277C85.0072 55.8501 84.0526 54.8955 82.8751 54.8955C81.6975 54.8955 80.7429 55.8501 80.7429 57.0277C80.7429 58.2052 81.6975 59.1598 82.8751 59.1598Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="sendzimir active" />
                                            <path d="M78.6108 59.1598C79.7884 59.1598 80.743 58.2052 80.743 57.0277C80.743 55.8501 79.7884 54.8955 78.6108 54.8955C77.4332 54.8955 76.4786 55.8501 76.4786 57.0277C76.4786 58.2052 77.4332 59.1598 78.6108 59.1598Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="sendzimir active" />
                                            <path d="M74.2935 63.4096C76.0808 63.4096 77.5296 61.9608 77.5296 60.1735C77.5296 58.3863 76.0808 56.9375 74.2935 56.9375C72.5063 56.9375 71.0575 58.3863 71.0575 60.1735C71.0575 61.9608 72.5063 63.4096 74.2935 63.4096Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="sendzimir active" />
                                            <path d="M94.7229 68.7315C97.433 68.7315 99.6299 66.5345 99.6299 63.8245C99.6299 61.1144 97.433 58.9175 94.7229 58.9175C92.0129 58.9175 89.8159 61.1144 89.8159 63.8245C89.8159 66.5345 92.0129 68.7315 94.7229 68.7315Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="sendzimir active" />
                                            <path d="M75.8964 73.2832C78.6064 73.2832 80.8034 71.0863 80.8034 68.3762C80.8034 65.6662 78.6064 63.4692 75.8964 63.4692C73.1863 63.4692 70.9894 65.6662 70.9894 68.3762C70.9894 71.0863 73.1863 73.2832 75.8964 73.2832Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="sendzimir active" />
                                            <path d="M67.1787 68.3765C69.8888 68.3765 72.0857 66.1796 72.0857 63.4695C72.0857 60.7594 69.8888 58.5625 67.1787 58.5625C64.4687 58.5625 62.2717 60.7594 62.2717 63.4695C62.2717 66.1796 64.4687 68.3765 67.1787 68.3765Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="sendzimir active" />
                                            <path d="M50.8851 55.0923L44.723 76.1266" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="sendzimir active" />
                                            <path d="M111.576 55.0923L117.738 76.1266" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="sendzimir active" />
                                            <path d="M51.7621 55.8931C53.5118 55.8931 54.9301 54.4748 54.9301 52.7251C54.9301 50.9755 53.5118 49.5571 51.7621 49.5571C50.0125 49.5571 48.5941 50.9755 48.5941 52.7251C48.5941 54.4748 50.0125 55.8931 51.7621 55.8931Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="sendzimir active" />
                                            <path d="M51.7621 54.0867C52.5137 54.0867 53.123 53.4773 53.123 52.7257C53.123 51.9741 52.5137 51.3647 51.7621 51.3647C51.0104 51.3647 50.4011 51.9741 50.4011 52.7257C50.4011 53.4773 51.0104 54.0867 51.7621 54.0867Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="sendzimir active" />
                                            <path d="M110.533 55.8931C112.282 55.8931 113.701 54.4748 113.701 52.7251C113.701 50.9755 112.282 49.5571 110.533 49.5571C108.783 49.5571 107.365 50.9755 107.365 52.7251C107.365 54.4748 108.783 55.8931 110.533 55.8931Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="sendzimir active" />
                                            <path d="M110.533 54.0867C111.284 54.0867 111.894 53.4773 111.894 52.7257C111.894 51.9741 111.284 51.3647 110.533 51.3647C109.781 51.3647 109.172 51.9741 109.172 52.7257C109.172 53.4773 109.781 54.0867 110.533 54.0867Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="sendzimir active" />
                                            <path d="M101.165 30.6706L95.6454 25H67.0503L61.3645 30.2321L56.1777 34.9728V67.9533L61.3645 73.4576L67.2166 79.1282H95.1464L100.159 73.7978L106.011 67.2652V35.1391L101.165 30.6706Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="sendzimir active" />
                                            <path d="M37.011 83.3243C41.621 83.3243 45.3582 79.5871 45.3582 74.9771C45.3582 70.367 41.621 66.6299 37.011 66.6299C32.401 66.6299 28.6638 70.367 28.6638 74.9771C28.6638 79.5871 32.401 83.3243 37.011 83.3243Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="sendzimir active
                                            " />
                                            <path d="M37.0109 78.7347C39.0863 78.7347 40.7687 77.0523 40.7687 74.977C40.7687 72.9016 39.0863 71.2192 37.0109 71.2192C34.9356 71.2192 33.2532 72.9016 33.2532 74.977C33.2532 77.0523 34.9356 78.7347 37.0109 78.7347Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="sendzimir active" />
                                            <path d="M125.45 83.3243C130.06 83.3243 133.798 79.5871 133.798 74.9771C133.798 70.367 130.06 66.6299 125.45 66.6299C120.84 66.6299 117.103 70.367 117.103 74.9771C117.103 79.5871 120.84 83.3243 125.45 83.3243Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="sendzimir active" />
                                            <path d="M125.45 78.7347C127.526 78.7347 129.208 77.0523 129.208 74.977C129.208 72.9016 127.526 71.2192 125.45 71.2192C123.375 71.2192 121.693 72.9016 121.693 74.977C121.693 77.0523 123.375 78.7347 125.45 78.7347Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="sendzimir active" />
                                            <rect x="199.5" y="1.5" width="162.343" height="157.626" fill="white" stroke="#D9D9D9" class="degreaser w1" data-prod="degreaser" data-fac="1" />
                                            <path d="M246.812 123H249.836C251.816 123 252.788 121.902 252.788 119.886V113.514C252.788 111.498 251.816 110.4 249.836 110.4H246.812V123ZM248.792 121.2V112.2H249.8C250.43 112.2 250.808 112.524 250.808 113.424V119.976C250.808 120.876 250.43 121.2 249.8 121.2H248.792ZM254.845 123H260.245V121.2H256.825V117.33H259.543V115.53H256.825V112.2H260.245V110.4H254.845V123ZM264.912 123.18C266.856 123.18 267.864 122.028 267.864 120.012V115.89H265.002V117.69H265.992V120.156C265.992 121.056 265.596 121.38 264.966 121.38C264.336 121.38 263.94 121.056 263.94 120.156V113.262C263.94 112.362 264.336 112.02 264.966 112.02C265.596 112.02 265.992 112.362 265.992 113.262V114.468H267.864V113.388C267.864 111.372 266.856 110.22 264.912 110.22C262.968 110.22 261.96 111.372 261.96 113.388V120.012C261.96 122.028 262.968 123.18 264.912 123.18ZM269.855 123H271.835V117.6H272.519C273.419 117.6 273.761 117.978 273.761 119.148V121.452C273.761 122.478 273.833 122.676 273.941 123H275.957C275.759 122.532 275.741 122.082 275.741 121.47V119.256C275.741 117.834 275.417 116.898 274.427 116.592V116.556C275.309 116.196 275.723 115.368 275.723 114.072V113.298C275.723 111.354 274.841 110.4 272.789 110.4H269.855V123ZM271.835 115.8V112.2H272.735C273.437 112.2 273.743 112.596 273.743 113.496V114.468C273.743 115.476 273.293 115.8 272.555 115.8H271.835ZM277.835 123H283.235V121.2H279.815V117.33H282.533V115.53H279.815V112.2H283.235V110.4H277.835V123ZM284.572 123H286.408L286.768 120.534H289.018V120.498L289.378 123H291.358L289.306 110.4H286.624L284.572 123ZM287.002 118.824L287.866 112.596H287.902L288.784 118.824H287.002ZM295.56 123.18C297.504 123.18 298.548 122.028 298.548 119.976C298.548 118.41 298.026 117.402 296.37 115.944C295.074 114.81 294.66 114.144 294.66 113.226C294.66 112.362 295.02 112.02 295.65 112.02C296.28 112.02 296.64 112.362 296.64 113.262V113.91H298.512V113.388C298.512 111.372 297.558 110.22 295.632 110.22C293.706 110.22 292.68 111.372 292.68 113.352C292.68 114.792 293.22 115.818 294.876 117.276C296.172 118.41 296.568 119.076 296.568 120.12C296.568 121.056 296.172 121.38 295.542 121.38C294.912 121.38 294.516 121.056 294.516 120.156V119.292H292.644V120.012C292.644 122.028 293.616 123.18 295.56 123.18ZM300.403 123H305.803V121.2H302.383V117.33H305.101V115.53H302.383V112.2H305.803V110.4H300.403V123ZM307.662 123H309.642V117.6H310.326C311.226 117.6 311.568 117.978 311.568 119.148V121.452C311.568 122.478 311.64 122.676 311.748 123H313.764C313.566 122.532 313.548 122.082 313.548 121.47V119.256C313.548 117.834 313.224 116.898 312.234 116.592V116.556C313.116 116.196 313.53 115.368 313.53 114.072V113.298C313.53 111.354 312.648 110.4 310.596 110.4H307.662V123ZM309.642 115.8V112.2H310.542C311.244 112.2 311.55 112.596 311.55 113.496V114.468C311.55 115.476 311.1 115.8 310.362 115.8H309.642Z" fill="#848484" class="caption-degreaser " />
                                            <path d="M296.088 56.7768H260.916V50.5745C260.916 45.7176 264.849 41.7842 269.706 41.7842H287.298C292.155 41.7842 296.088 45.7176 296.088 50.5745V56.7768Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="degreaser " />
                                            <path d="M248.021 58.3271H227.499C226.438 58.3271 225.583 59.1822 225.583 60.2425V78.0512C225.583 79.1115 226.438 79.9666 227.499 79.9666H248.021C249.081 79.9666 249.936 79.1115 249.936 78.0512V60.2425C249.936 59.1822 249.081 58.3271 248.021 58.3271Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="degreaser " />
                                            <path d="M329.699 58.3271H310.089C308.778 58.3271 307.718 59.3874 307.718 60.6986V77.5952C307.718 78.9063 308.778 79.9666 310.089 79.9666H329.699C331.01 79.9666 332.071 78.9063 332.071 77.5952V60.6986C332.071 59.3874 331.01 58.3271 329.699 58.3271Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="degreaser " />
                                            <path d="M302.074 58.3271H255.705C254.36 58.3271 253.277 59.4103 253.277 60.7556V77.5382C253.277 78.8835 254.36 79.9666 255.705 79.9666H302.074C303.419 79.9666 304.502 78.8835 304.502 77.5382V60.7556C304.502 59.4103 303.419 58.3271 302.074 58.3271Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="degreaser " />
                                            <path d="M328.103 33.3813H257.245C255.056 33.3813 253.288 35.1599 253.288 37.3376V52.809C253.288 54.998 255.067 56.7652 257.245 56.7652H328.114C330.303 56.7652 332.071 54.9866 332.071 52.809V37.3376C332.071 35.1485 330.292 33.3813 328.103 33.3813Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="degreaser " />
                                            <path d="M251.567 56.332C249.879 56.332 248.5 57.7002 248.5 59.3989V68.3147H254.634V59.3989C254.634 57.7002 253.266 56.332 251.567 56.332Z" fill="white" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="degreaser " />
                                            <path d="M246.106 68.3149H256.868" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="degreaser " />
                                            <path d="M251.567 56.3315V53.333" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="degreaser " />
                                            <path d="M274.711 56.332C273.024 56.332 271.644 57.7002 271.644 59.3989V68.3147H277.778V59.3989C277.767 57.7002 276.398 56.332 274.711 56.332Z" fill="white" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="degreaser " />
                                            <path d="M269.239 68.3149H280.001" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="degreaser " />
                                            <path d="M274.711 56.3315V53.333" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="degreaser " />
                                            <path d="M305.164 56.332C303.476 56.332 302.097 57.7002 302.097 59.3989V68.3147H308.231V59.3989C308.231 57.7002 306.863 56.332 305.164 56.332Z" fill="white" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="degreaser " />
                                            <path d="M299.691 68.3149H310.454" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="degreaser " />
                                            <path d="M305.164 56.3315V53.333" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="degreaser " />
                                            <path d="M290.183 72.1567H285.976V79.9666H290.183V72.1567Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="degreaser " />
                                            <path d="M287.925 65.5898C286.112 65.5898 284.642 67.0606 284.642 68.8734C284.642 70.6862 286.112 72.1569 287.925 72.1569C289.738 72.1569 291.209 70.6862 291.209 68.8734C291.209 67.0606 289.738 65.5898 287.925 65.5898Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="degreaser " />
                                            <path d="M225.583 41.7842H253.277" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="degreaser " />
                                            <path d="M315.562 42.7876L326.564 46.6754C327.487 47.006 328.103 47.8725 328.103 48.8416V56.7655" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="degreaser " />
                                            <path d="M195.635 74.8812L187.26 70.0984C187.178 70.0505 187.087 70.0194 186.993 70.0066C186.899 69.9938 186.804 69.9997 186.712 70.024C186.62 70.0483 186.534 70.0905 186.459 70.1481C186.384 70.2057 186.321 70.2776 186.275 70.3595C186.227 70.4398 186.195 70.5288 186.182 70.6213C186.169 70.7139 186.176 70.8081 186.2 70.8983C186.225 70.9885 186.267 71.0728 186.325 71.1464C186.384 71.22 186.456 71.2814 186.538 71.3268L192.595 74.7891L161.721 74.7891C161.53 74.7891 161.347 74.8644 161.211 74.9983C161.076 75.1322 161 75.3138 161 75.5031C161 75.6925 161.076 75.8741 161.211 76.008C161.347 76.1419 161.53 76.2171 161.721 76.2171L192.588 76.2171L186.538 79.6718C186.456 79.718 186.383 79.78 186.325 79.8543C186.267 79.9286 186.224 80.0136 186.2 80.1044C186.175 80.1952 186.169 80.29 186.182 80.3831C186.195 80.4763 186.226 80.5659 186.275 80.6468C186.337 80.755 186.427 80.8449 186.536 80.907C186.645 80.9691 186.769 81.0012 186.895 81C187.022 80.9993 187.148 80.9677 187.26 80.9078L195.635 76.1173C195.746 76.0561 195.838 75.967 195.902 75.8591C195.966 75.7511 196 75.6283 196 75.5031C195.999 75.377 195.966 75.2532 195.902 75.1441C195.838 75.035 195.746 74.9443 195.635 74.8812V74.8812Z" fill="#D9D9D9" />
                                            <path d="M394.646 74.8812L386.509 70.0984C386.43 70.0505 386.342 70.0194 386.251 70.0066C386.159 69.9938 386.066 69.9997 385.977 70.024C385.888 70.0483 385.805 70.0905 385.732 70.1481C385.659 70.2057 385.598 70.2776 385.553 70.3595C385.506 70.4398 385.475 70.5288 385.463 70.6213C385.45 70.7139 385.456 70.8081 385.48 70.8983C385.504 70.9885 385.545 71.0728 385.602 71.1464C385.658 71.22 385.729 71.2814 385.809 71.3268L391.693 74.7891L361.701 74.7891C361.515 74.7891 361.337 74.8644 361.205 74.9983C361.074 75.1322 361 75.3138 361 75.5031C361 75.6925 361.074 75.8741 361.205 76.008C361.337 76.1419 361.515 76.2171 361.701 76.2171L391.685 76.2171L385.809 79.6718C385.728 79.718 385.658 79.78 385.601 79.8543C385.545 79.9286 385.503 80.0136 385.48 80.1044C385.456 80.1952 385.45 80.29 385.462 80.3831C385.475 80.4763 385.506 80.5659 385.553 80.6468C385.613 80.755 385.701 80.8449 385.807 80.907C385.913 80.9691 386.033 81.0012 386.155 81C386.279 80.9993 386.401 80.9677 386.509 80.9078L394.646 76.1173C394.753 76.0561 394.842 75.967 394.904 75.8591C394.967 75.7511 395 75.6283 395 75.5031C394.999 75.377 394.966 75.2532 394.904 75.1441C394.842 75.035 394.753 74.9443 394.646 74.8812V74.8812Z" fill="#D9D9D9" />
                                            <path d="M395.646 292.881L387.509 288.098C387.43 288.051 387.342 288.019 387.251 288.007C387.159 287.994 387.066 288 386.977 288.024C386.888 288.048 386.805 288.09 386.732 288.148C386.659 288.206 386.598 288.278 386.553 288.36C386.506 288.44 386.475 288.529 386.463 288.621C386.45 288.714 386.456 288.808 386.48 288.898C386.504 288.988 386.545 289.073 386.602 289.146C386.658 289.22 386.729 289.281 386.809 289.327L392.693 292.789L362.701 292.789C362.515 292.789 362.337 292.864 362.205 292.998C362.074 293.132 362 293.314 362 293.503C362 293.692 362.074 293.874 362.205 294.008C362.337 294.142 362.515 294.217 362.701 294.217L392.685 294.217L386.809 297.672C386.728 297.718 386.658 297.78 386.601 297.854C386.545 297.929 386.503 298.014 386.48 298.104C386.456 298.195 386.45 298.29 386.462 298.383C386.475 298.476 386.506 298.566 386.553 298.647C386.613 298.755 386.701 298.845 386.807 298.907C386.913 298.969 387.033 299.001 387.155 299C387.279 298.999 387.401 298.968 387.509 298.908L395.646 294.117C395.753 294.056 395.842 293.967 395.904 293.859C395.967 293.751 396 293.628 396 293.503C395.999 293.377 395.966 293.253 395.904 293.144C395.842 293.035 395.753 292.944 395.646 292.881V292.881Z" fill="#D9D9D9" />
                                            <path d="M592.635 74.8812L584.26 70.0984C584.178 70.0505 584.087 70.0194 583.993 70.0066C583.899 69.9938 583.804 69.9997 583.712 70.024C583.62 70.0483 583.534 70.0905 583.459 70.1481C583.384 70.2057 583.321 70.2776 583.275 70.3595C583.227 70.4398 583.195 70.5288 583.182 70.6213C583.169 70.7139 583.176 70.8081 583.2 70.8983C583.225 70.9885 583.267 71.0728 583.325 71.1464C583.384 71.22 583.456 71.2814 583.538 71.3268L589.595 74.7891L558.721 74.7891C558.53 74.7891 558.347 74.8644 558.211 74.9983C558.076 75.1322 558 75.3138 558 75.5031C558 75.6925 558.076 75.8741 558.211 76.008C558.347 76.1419 558.53 76.2171 558.721 76.2171L589.588 76.2171L583.538 79.6718C583.456 79.718 583.383 79.78 583.325 79.8543C583.267 79.9286 583.224 80.0136 583.2 80.1044C583.175 80.1952 583.169 80.29 583.182 80.3831C583.195 80.4763 583.226 80.5659 583.275 80.6468C583.337 80.755 583.427 80.8449 583.536 80.907C583.645 80.9691 583.769 81.0012 583.895 81C584.022 80.9993 584.148 80.9677 584.26 80.9078L592.635 76.1173C592.746 76.0561 592.838 75.967 592.902 75.8591C592.966 75.7511 593 75.6283 593 75.5031C592.999 75.377 592.966 75.2532 592.902 75.1441C592.838 75.035 592.746 74.9443 592.635 74.8812V74.8812Z" fill="#D9D9D9" />
                                            <path d="M790.635 74.8812L782.26 70.0984C782.178 70.0505 782.087 70.0194 781.993 70.0066C781.899 69.9938 781.804 69.9997 781.712 70.024C781.62 70.0483 781.534 70.0905 781.459 70.1481C781.384 70.2057 781.321 70.2776 781.275 70.3595C781.227 70.4398 781.195 70.5288 781.182 70.6213C781.169 70.7139 781.176 70.8081 781.2 70.8983C781.225 70.9885 781.267 71.0728 781.325 71.1464C781.384 71.22 781.456 71.2814 781.538 71.3268L787.595 74.7891L756.721 74.7891C756.53 74.7891 756.347 74.8644 756.211 74.9983C756.076 75.1322 756 75.3138 756 75.5031C756 75.6925 756.076 75.8741 756.211 76.008C756.347 76.1419 756.53 76.2171 756.721 76.2171L787.588 76.2171L781.538 79.6718C781.456 79.718 781.383 79.78 781.325 79.8543C781.267 79.9286 781.224 80.0136 781.2 80.1044C781.175 80.1952 781.169 80.29 781.182 80.3831C781.195 80.4763 781.226 80.5659 781.275 80.6468C781.337 80.755 781.427 80.8449 781.536 80.907C781.645 80.9691 781.769 81.0012 781.895 81C782.022 80.9993 782.148 80.9677 782.26 80.9078L790.635 76.1173C790.746 76.0561 790.838 75.967 790.902 75.8591C790.966 75.7511 791 75.6283 791 75.5031C790.999 75.377 790.966 75.2532 790.902 75.1441C790.838 75.035 790.746 74.9443 790.635 74.8812V74.8812Z" fill="#D9D9D9" />
                                            <path d="M988.625 74.8812L980.01 70.0984C979.926 70.0505 979.833 70.0194 979.736 70.0066C979.639 69.9938 979.541 69.9997 979.446 70.024C979.352 70.0483 979.264 70.0905 979.187 70.1481C979.109 70.2057 979.045 70.2776 978.997 70.3595C978.947 70.4398 978.915 70.5288 978.902 70.6213C978.889 70.7139 978.895 70.8081 978.92 70.8983C978.945 70.9885 978.989 71.0728 979.049 71.1464C979.109 71.22 979.183 71.2814 979.268 71.3268L985.498 74.7891L953.742 74.7891C953.545 74.7891 953.356 74.8644 953.217 74.9983C953.078 75.1322 953 75.3138 953 75.5031C953 75.6925 953.078 75.8741 953.217 76.008C953.356 76.1419 953.545 76.2171 953.742 76.2171L985.49 76.2171L979.268 79.6718C979.183 79.718 979.108 79.78 979.049 79.8543C978.989 79.9286 978.945 80.0136 978.92 80.1044C978.894 80.1952 978.888 80.29 978.901 80.3831C978.915 80.4763 978.947 80.5659 978.997 80.6468C979.061 80.755 979.154 80.8449 979.266 80.907C979.378 80.9691 979.506 81.0012 979.635 81C979.766 80.9993 979.895 80.9677 980.01 80.9078L988.625 76.1173C988.738 76.0561 988.833 75.967 988.899 75.8591C988.965 75.7511 989 75.6283 989 75.5031C988.999 75.377 988.965 75.2532 988.899 75.1441C988.833 75.035 988.739 74.9443 988.625 74.8812V74.8812Z" fill="#D9D9D9" />
                                            <path d="M467.322 219H430.829V241.393H467.322V219Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M520.402 219H483.08V241.393H520.402V219Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M597.534 219H542.795V241.393H597.534V219Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M709.5 219H640.662V241.393H709.5V219Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M697.059 302.767H653.102V325.99H697.059V302.767Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M467.322 302.767H430.829V325.99H467.322V302.767Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M520.402 302.767H483.08V325.99H520.402V302.767Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M597.534 302.767H542.795V325.99H597.534V302.767Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M439.228 288.483C443.786 288.483 447.482 284.788 447.482 280.229C447.482 275.671 443.786 271.975 439.228 271.975C434.669 271.975 430.974 275.671 430.974 280.229C430.974 284.788 434.669 288.483 439.228 288.483Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M439.228 271.975V288.483" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M430.974 280.229H447.482" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M459.326 288.483C463.885 288.483 467.581 284.788 467.581 280.229C467.581 275.671 463.885 271.975 459.326 271.975C454.768 271.975 451.072 275.671 451.072 280.229C451.072 284.788 454.768 288.483 459.326 288.483Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M459.268 271.975L459.391 288.483" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M451.072 280.293L467.581 280.171" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M449.277 271.532C453.836 271.532 457.531 267.837 457.531 263.278C457.531 258.719 453.836 255.024 449.277 255.024C444.718 255.024 441.023 258.719 441.023 263.278C441.023 267.837 444.718 271.532 449.277 271.532Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M449.277 255.024V271.532" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M441.023 263.278H457.531" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M507.038 271.532C511.597 271.532 515.292 267.837 515.292 263.278C515.292 258.719 511.597 255.024 507.038 255.024C502.479 255.024 498.784 258.719 498.784 263.278C498.784 267.837 502.479 271.532 507.038 271.532Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M507.038 271.532V255.024" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M515.292 263.278H498.784" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M486.939 271.532C491.498 271.532 495.193 267.837 495.193 263.278C495.193 258.719 491.498 255.024 486.939 255.024C482.381 255.024 478.685 258.719 478.685 263.278C478.685 267.837 482.381 271.532 486.939 271.532Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M486.997 271.532L486.875 255.024" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M495.193 263.22L478.685 263.342" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M496.989 288.483C501.547 288.483 505.243 284.788 505.243 280.229C505.243 275.671 501.547 271.975 496.989 271.975C492.43 271.975 488.734 275.671 488.734 280.229C488.734 284.788 492.43 288.483 496.989 288.483Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M496.989 288.483V271.975" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M505.243 280.229H488.734" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M543.919 288.483C548.478 288.483 552.173 284.788 552.173 280.229C552.173 275.671 548.478 271.975 543.919 271.975C539.36 271.975 535.665 275.671 535.665 280.229C535.665 284.788 539.36 288.483 543.919 288.483Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M543.919 271.975V288.483" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M535.665 280.229H552.173" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M564.018 288.483C568.576 288.483 572.272 284.788 572.272 280.229C572.272 275.671 568.576 271.975 564.018 271.975C559.459 271.975 555.764 275.671 555.764 280.229C555.764 284.788 559.459 288.483 564.018 288.483Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M563.96 271.975L564.082 288.483" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M555.764 280.293L572.272 280.171" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M553.968 271.532C558.527 271.532 562.222 267.837 562.222 263.278C562.222 258.719 558.527 255.024 553.968 255.024C549.41 255.024 545.714 258.719 545.714 263.278C545.714 267.837 549.41 271.532 553.968 271.532Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M553.968 255.024V271.532" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M545.714 263.278H562.222" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M533.1 271.532C537.659 271.532 541.354 267.837 541.354 263.278C541.354 258.719 537.659 255.024 533.1 255.024C528.542 255.024 524.846 258.719 524.846 263.278C524.846 267.837 528.542 271.532 533.1 271.532Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M533.1 255.024V271.532" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M524.852 263.278H541.354" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M586.052 288.483C590.611 288.483 594.306 284.788 594.306 280.229C594.306 275.671 590.611 271.975 586.052 271.975C581.494 271.975 577.798 275.671 577.798 280.229C577.798 284.788 581.494 288.483 586.052 288.483Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M586.052 271.975V288.483" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M577.798 280.229H594.306" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M606.151 288.483C610.71 288.483 614.405 284.788 614.405 280.229C614.405 275.671 610.71 271.975 606.151 271.975C601.592 271.975 597.897 275.671 597.897 280.229C597.897 284.788 601.592 288.483 606.151 288.483Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M606.087 271.975L606.209 288.483" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M597.897 280.293L614.405 280.171" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M596.102 271.532C600.66 271.532 604.356 267.837 604.356 263.278C604.356 258.719 600.66 255.024 596.102 255.024C591.543 255.024 587.848 258.719 587.848 263.278C587.848 267.837 591.543 271.532 596.102 271.532Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M596.102 255.024V271.532" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M587.848 263.278H604.356" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M575.233 271.532C579.792 271.532 583.487 267.837 583.487 263.278C583.487 258.719 579.792 255.024 575.233 255.024C570.675 255.024 566.979 258.719 566.979 263.278C566.979 267.837 570.675 271.532 575.233 271.532Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M575.233 255.024V271.532" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M566.979 263.278H583.487" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M699.627 288.483C704.186 288.483 707.881 284.788 707.881 280.229C707.881 275.671 704.186 271.975 699.627 271.975C695.069 271.975 691.373 275.671 691.373 280.229C691.373 284.788 695.069 288.483 699.627 288.483Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M699.627 271.975V288.483" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M707.881 280.229H691.373" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M679.528 288.483C684.087 288.483 687.782 284.788 687.782 280.229C687.782 275.671 684.087 271.975 679.528 271.975C674.97 271.975 671.274 275.671 671.274 280.229C671.274 284.788 674.97 288.483 679.528 288.483Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M679.587 271.975L679.464 288.483" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M687.782 280.293L671.274 280.171" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M689.578 271.532C694.136 271.532 697.832 267.837 697.832 263.278C697.832 258.719 694.136 255.024 689.578 255.024C685.019 255.024 681.324 258.719 681.324 263.278C681.324 267.837 685.019 271.532 689.578 271.532Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M689.578 255.024V271.532" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M697.832 263.278H681.324" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M657.494 288.483C662.053 288.483 665.748 284.788 665.748 280.229C665.748 275.671 662.053 271.975 657.494 271.975C652.935 271.975 649.24 275.671 649.24 280.229C649.24 284.788 652.935 288.483 657.494 288.483Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M657.494 271.975V288.483" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M665.748 280.229H649.24" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M637.395 288.483C641.954 288.483 645.649 284.788 645.649 280.229C645.649 275.671 641.954 271.975 637.395 271.975C632.837 271.975 629.141 275.671 629.141 280.229C629.141 284.788 632.837 288.483 637.395 288.483Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M637.459 271.975L637.337 288.483" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M645.649 280.293L629.141 280.171" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M647.445 271.532C652.003 271.532 655.699 267.837 655.699 263.278C655.699 258.719 652.003 255.024 647.445 255.024C642.886 255.024 639.191 258.719 639.191 263.278C639.191 267.837 642.886 271.532 647.445 271.532Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M647.445 255.024V271.532" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M655.699 263.278H639.191" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M668.313 271.532C672.872 271.532 676.567 267.837 676.567 263.278C676.567 258.719 672.872 255.024 668.313 255.024C663.754 255.024 660.059 258.719 660.059 263.278C660.059 267.837 663.754 271.532 668.313 271.532Z" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M668.313 255.024V271.532" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M676.567 263.278H660.059" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M625.733 282.033C625.733 282.033 628.746 348.764 668.4 349.933C668.4 349.933 711.563 355.766 715.306 282.033" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M618.269 286.18C618.269 286.18 621.812 363.495 668.442 364.844C668.442 364.844 719.199 371.6 723.599 286.18" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M712.817 321.843L725.258 330.966" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M707.841 313.549L711.234 298.62L723.599 308.573L707.841 313.549Z" fill="#FFAF08" class="tension" />
                                            <path d="M716.135 306.76L734 311.738" stroke="#FFAF08" stroke-width="2" stroke-miterlimit="10" class="tension" />
                                            <path d="M430 268.542H436.277C439.372 268.542 441.231 269.407 443.807 271.035L446.104 272.304C447.969 273.478 449.268 273.229 451.238 272.431C451.466 272.337 451.693 272.237 451.915 272.127L457.836 269.218C458.104 269.085 458.378 268.958 458.658 268.853C461.222 267.878 463.612 267.85 466.258 268.792L479.407 272.67C481.761 273.362 484.297 273.257 486.581 272.365L491.903 270.287C494.444 269.296 497.294 269.279 499.847 270.243L507.237 273.03C508.484 273.501 509.813 273.739 511.148 273.739H527.205C528.464 273.739 529.717 273.523 530.9 273.107L538.809 270.315C541.479 269.373 544.439 269.49 547.021 270.642L549.149 271.595C552.174 272.947 555.688 272.863 558.637 271.379L559.226 271.08C562.257 269.551 565.882 269.506 568.947 270.969L570.183 271.556C573.086 272.935 576.489 272.98 579.427 271.672L581.263 270.858C584.264 269.523 587.744 269.601 590.681 271.058L591.072 271.251C594.202 272.808 597.938 272.786 601.044 271.185L603.824 269.756C605.375 268.958 607.111 268.542 608.872 268.542H634.615C636.381 268.542 638.112 268.958 639.663 269.756L642.297 271.107C645.485 272.747 649.326 272.725 652.497 271.058C655.597 269.423 659.357 269.368 662.504 270.913L663.512 271.407C666.508 272.875 670.057 272.902 673.076 271.484L674.545 270.792C677.675 269.318 681.37 269.407 684.424 271.024L684.582 271.107C687.676 272.753 691.43 272.814 694.589 271.279L699.187 269.041C700.685 268.315 702.341 267.933 704.019 267.933H719.452" stroke="#FFAF08" stroke-width="6" stroke-miterlimit="10" class="tension" />
                                            <path d="M718.294 261.416L730.082 269.476L718.294 275.415V261.416Z" fill="#FFAF08" stroke="#FFAF08" class="tension" />
                                            <path d="M276 160V293H362" stroke="#D9D9D9" stroke-width="1.5" />
                                            <path d="M873.881 157.354L869.098 165.491C869.051 165.57 869.019 165.658 869.007 165.749C868.994 165.841 869 165.934 869.024 166.023C869.048 166.112 869.09 166.195 869.148 166.268C869.206 166.341 869.278 166.402 869.359 166.447C869.44 166.494 869.529 166.525 869.621 166.537C869.714 166.55 869.808 166.544 869.898 166.52C869.988 166.496 870.073 166.455 870.146 166.398C870.22 166.342 870.281 166.271 870.327 166.191L873.789 160.307L873.789 190.299C873.789 190.485 873.864 190.663 873.998 190.795C874.132 190.926 874.314 191 874.503 191C874.692 191 874.874 190.926 875.008 190.795C875.142 190.663 875.217 190.485 875.217 190.299L875.217 160.315L878.672 166.191C878.718 166.272 878.78 166.342 878.854 166.399C878.929 166.455 879.014 166.497 879.104 166.52C879.195 166.544 879.29 166.55 879.383 166.538C879.476 166.525 879.566 166.494 879.647 166.447C879.755 166.387 879.845 166.299 879.907 166.193C879.969 166.087 880.001 165.967 880 165.845C879.999 165.721 879.968 165.599 879.908 165.491L875.117 157.354C875.056 157.247 874.967 157.158 874.859 157.096C874.751 157.033 874.628 157 874.503 157C874.377 157.001 874.253 157.034 874.144 157.096C874.035 157.158 873.944 157.247 873.881 157.354V157.354Z" fill="#D9D9D9" />
                                            <path d="M756 293H842" stroke="#D9D9D9" stroke-width="1.5" />
                                            <path d="M756 293H875" stroke="#D9D9D9" stroke-width="1.5" />
                                            <path d="M874.5 293V158" stroke="#D9D9D9" stroke-width="1.5" />
                                            <path d="M432.058 370H434.038V359.2H436.108V357.4H429.988V359.2H432.058V370ZM437.786 370H443.186V368.2H439.766V364.33H442.484V362.53H439.766V359.2H443.186V357.4H437.786V370ZM445.045 370H446.809V360.802H446.845L449.221 370H451.255V357.4H449.491V364.942H449.455L447.529 357.4H445.045V370ZM456.021 370.18C457.965 370.18 459.009 369.028 459.009 366.976C459.009 365.41 458.487 364.402 456.831 362.944C455.535 361.81 455.121 361.144 455.121 360.226C455.121 359.362 455.481 359.02 456.111 359.02C456.741 359.02 457.101 359.362 457.101 360.262V360.91H458.973V360.388C458.973 358.372 458.019 357.22 456.093 357.22C454.167 357.22 453.141 358.372 453.141 360.352C453.141 361.792 453.681 362.818 455.337 364.276C456.633 365.41 457.029 366.076 457.029 367.12C457.029 368.056 456.633 368.38 456.003 368.38C455.373 368.38 454.977 368.056 454.977 367.156V366.292H453.105V367.012C453.105 369.028 454.077 370.18 456.021 370.18ZM460.864 370H462.844V357.4H460.864V370ZM467.909 370.18C469.853 370.18 470.915 369.028 470.915 367.012V360.388C470.915 358.372 469.853 357.22 467.909 357.22C465.965 357.22 464.903 358.372 464.903 360.388V367.012C464.903 369.028 465.965 370.18 467.909 370.18ZM467.909 368.38C467.279 368.38 466.883 368.038 466.883 367.138V360.262C466.883 359.362 467.279 359.02 467.909 359.02C468.539 359.02 468.935 359.362 468.935 360.262V367.138C468.935 368.038 468.539 368.38 467.909 368.38ZM472.974 370H474.738V360.802H474.774L477.15 370H479.184V357.4H477.42V364.942H477.384L475.458 357.4H472.974V370ZM484.979 370H490.217V368.2H486.959V357.4H484.979V370ZM491.886 370H497.286V368.2H493.866V364.33H496.584V362.53H493.866V359.2H497.286V357.4H491.886V370ZM500.531 370H503.159L505.067 357.4H503.249L501.953 367.174H501.917L500.621 357.4H498.623L500.531 370ZM506.738 370H512.138V368.2H508.718V364.33H511.436V362.53H508.718V359.2H512.138V357.4H506.738V370ZM513.997 370H519.235V368.2H515.977V357.4H513.997V370ZM520.905 370H522.885V357.4H520.905V370ZM525.088 370H526.852V360.802H526.888L529.264 370H531.298V357.4H529.534V364.942H529.498L527.572 357.4H525.088V370ZM536.297 370.18C538.241 370.18 539.249 369.028 539.249 367.012V362.89H536.387V364.69H537.377V367.156C537.377 368.056 536.981 368.38 536.351 368.38C535.721 368.38 535.325 368.056 535.325 367.156V360.262C535.325 359.362 535.721 359.02 536.351 359.02C536.981 359.02 537.377 359.362 537.377 360.262V361.468H539.249V360.388C539.249 358.372 538.241 357.22 536.297 357.22C534.353 357.22 533.345 358.372 533.345 360.388V367.012C533.345 369.028 534.353 370.18 536.297 370.18ZM544.843 370H550.081V368.2H546.823V357.4H544.843V370ZM551.751 370H553.731V357.4H551.751V370ZM555.934 370H557.698V360.802H557.734L560.11 370H562.144V357.4H560.38V364.942H560.344L558.418 357.4H555.934V370ZM564.335 370H569.735V368.2H566.315V364.33H569.033V362.53H566.315V359.2H569.735V357.4H564.335V370Z" fill="#848484" class="caption-tension" />
                                        </svg>
                                        <div class="pb-5"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gx-0">
                <div class="col-1 position-relative">
                    <div class="left-fc-arrow forDesktop">
                        <svg width="47" height="46" viewBox="0 0 47 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.6818 -0.000101191C10.9913 -0.0001023 0.7037 10.2875 0.703699 22.978C0.703698 35.6684 10.9913 45.9561 23.6818 45.9561C36.3722 45.9561 46.6599 35.6684 46.6599 22.978C46.6599 10.2875 36.3722 -0.000100082 23.6818 -0.000101191Z" fill="#FFAF08" />
                            <path d="M27.0859 30.6375L19.9898 23.5413C19.2087 22.7602 19.2087 21.4939 19.9898 20.7128L27.0859 13.6167" stroke="white" stroke-width="3" />
                        </svg>
                    </div>
                </div>
                <div class="col-10">
                    <ul class="facilities-slide">
                        <li>
                            <div class="card bg-dark text-white " id="" data-idx=0>
                                <img src="{{asset('/images/bnm/facilities/1-send-min.jpg')}}" class="card-img forDesktop" alt="sendzimir">
                                <img src="{{asset('/images/bnm/facilities/1-sendzimir-m-min.jpg')}}" class="card-img forMobile" alt="sendzimir">
                                <div class="card-img-overlay">
                                    <h5 class="card-title forDesktop">SENDZIMIR MILL</h5>
                                    <h1 class="card-title forMobile">SENDZIMIR MILL</h1>
                                    <p class="card-text">A state-of-the-art stainless steel 20 high cold rolling mill manufactured by I2S – USA can roll stainless steel coils from 2mm thickness down to the final thickness of 0.05mm, while consistently maintaining surface quality, excellent strip flatness, and thickness tolerance of maximum 3 microns.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="card bg-dark text-white " id="" data-idx=1>
                                <img src="{{asset('/images/bnm/facilities/2-degr-min.jpg')}}" class="card-img forDesktop" alt="degreaser">
                                <img src="{{asset('/images/bnm/facilities/2-degreaser-m-min.jpg')}}" class="card-img forMobile" alt="degreaser">
                                <div class="card-img-overlay">
                                    <h5 class="card-title">DEGREASER LINE</h5>
                                    <p class="card-text">The degreasing process using alkaline and hot rinsing completely removes the oil residue carried by the strip from the cold rolling mill process.</div>
                            </div>
                        </li>
                        <li>
                            <div class="card bg-dark text-white " id="" data-idx=2>
                                <img src="{{asset('/images/bnm/facilities/3-min.jpg')}}" class="card-img forDesktop" alt="vertical-bright">
                                <img src="{{asset('/images/bnm/facilities/3-vertical-m-min.jpg')}}" class="card-img forMobile" alt="vertical-bright">
                                <div class="card-img-overlay">
                                    <h5 class="card-title">VERTICAL BRIGHT ANNEALING LINE</h5>
                                    <p class="card-text">A vertical bright annealing line manufacture by EBNER – Austria is designed with the proven muffle concept to make use of the pure hydrogen atmosphere with lowest dew point (-60°C) to maintain an oxidation-free process. The result is clean, damage-free surface as well as perfect mechanical values in the annealed strips.

Thickness: 0.05mm - 1mm
Width: 600mm max
Speed: 50 mpm max
Temperature: 1150°C max </div>
                            </div>
                        </li>
                        <li>
                            <div class="card bg-dark text-white " id="" data-idx=3>
                                <img src="{{asset('/images/bnm/facilities/5-o-min.jpg')}}" class="card-img forDesktop" alt="...">
                                <img src="{{asset('/images/bnm/facilities/4-skin-pass-m-min.jpg')}}" class="card-img forMobile" alt="...">
                                <div class="card-img-overlay">
                                    <h5 class="card-title">SKIN PASS MILL</h5>
                                    <p class="card-text">
                                        The skin pass mill improves the flatness and brightness of annealed strips. Thickness: 0.1mm - 1mm Width: 500mm max Brightness: 500 - 600 GU
                                    </div>
                            </div>
                        </li>
                        <li>
                            <div class="card bg-dark text-white " id="" data-idx=4>
                                <img src="{{asset('/images/bnm/facilities/5-min.jpg')}}" class="card-img forDesktop" alt="...">
                                <img src="{{asset('/images/bnm/facilities/5-slitting-m-min.jpg')}}" class="card-img forMobile" alt="...">
                                <div class="card-img-overlay">
                                    <h5 class="card-title">SLITTING LINE</h5>
                                    <p class="card-text">A precise control of the strip width and burr level is done by meticulously setting the precision circular slitting knives and spacers of the arbor. Thickness: 0.05mm min Width: 5mm min ID: 300 - 500mm</div>
                            </div>
                        </li>
                        <li>
                            <div class="card bg-dark text-white " id="" data-idx=5>
                                <img src="{{asset('/images/bnm/facilities/6-o-min.jpg')}}" class="card-img forDesktop" alt="...">
                                <img src="{{asset('/images/bnm/facilities/6-cold-rolled-m-min.jpg')}}" class="card-img forMobile" alt="...">
                                <div class="card-img-overlay">
                                    <h5 class="card-title">COLD ROLLED STAINLESS STEEL STRIP</h5>
                                    <p class="card-text">We take the time to develop a solid understanding of your project's specific requirements, allowing us to produce a customized strip with unparalleled precision and durability.</div>
                            </div>
                        </li>
                        <li>
                            <div class="card bg-dark text-white " id="" data-idx=6>
                                <img src="{{asset('/images/bnm/facilities/4-o-min.jpg')}}" class="card-img forDesktop" alt="...">
                                <img src="{{asset('/images/bnm/facilities/7-tension-m-min.jpg')}}" class="card-img forMobile" alt="...">
                                <div class="card-img-overlay">
                                    <h5 class="card-title">TENSION LEVELING LINE</h5>
                                    <p class="card-text">
                                        A new tension leveling line with multi-roll technology completes our production facilities to achieve excellent flatness of the stainless steel strips. Thickness: 0.05mm - 1mm Width: 550mm max Steepness ratio: 0.4% max
                                    </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-1 position-relative">
                    <div class="rignt-fc-arrow forDesktop">
                        <svg width="47" height="46" viewBox="0 0 47 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.3182 45.9562C36.0087 45.9562 46.2963 35.6685 46.2963 22.9781C46.2963 10.2876 36.0087 0 23.3182 0C10.6278 0 0.340149 10.2876 0.340149 22.9781C0.340149 35.6685 10.6278 45.9562 23.3182 45.9562Z" fill="#FFAF08" />
                            <path d="M19.9141 15.3186L27.0102 22.4148C27.7913 23.1958 27.7913 24.4622 27.0102 25.2432L19.9141 32.3394" stroke="white" stroke-width="3" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mar-30 mar-m-30 gx-0">
            <div class="col-1 col-xxl-1"></div>
            <div class="col-11 col-xxl-11 g-2">
                <svg width="2000" height="3" viewBox="0 0 1312 3" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-100">
                    <line y1="1.5" x2="2000" y2="1.5" stroke="#FFAF08" stroke-width="3" />
                </svg>
            </div>
        </div>
    </section>
    <!-- end production-facilities-section -->
    <!-- news-section2 -->
    <section class="news__section pt-5" id="news">
        <div class="container-full">
            <div class="row gx-0">
                <div class="col-1 col-md-1"></div>
                <div class="col-11 col-md-11">
                    <div class="row gx-0">
                        <div class="col-md-3">
                            <h1 class="m-4-c">NEWS</h1>
                            <a href="demo/news" class="see">See All</a>
                        </div>
                    </div>
                    <div class="row gx-0">
                        <div class="col-10 col-lg-11">
                            <ul class="d-flex newsCollections">
                                <li>
                                    <a href="demo/news/business-visit-at-washington-d-c">
                                        <div class=" p-3">
                                            <div class="card text-bg-dark bg-transparent card-news" style="border-radius: 30px;">
                                                <div class="overlay"></div>
                                                <img src="{{asset('/images/bnm/components/news_detail/news-1-min.jpg')}}" class="card-img" alt="...">
                                                <div class="card-img-overlay">
                                                    <h3 class="card-title">Business Visit at Washington DC </h3>
                                                    <div class="d-flex justify-content-between news-button">
                                                        <p class="mb-0 mt-3 news-card-content forDesktop">On March 8, 2018, the President of the United States of America, Donald Trump, announced the Section 232 of the Trade Expansion Act of ...</p>
                                                        <p class="mb-0 mt-2 w-100 news-card-content forMobile">On March 8, 2018, the President of the United States of America, Donald Trump...</p>
                                                        <a href="demo/news/business-visit-at-washington-d-c" class="btn-news p-2 my-auto">
                                                            <svg width="30" height="30" viewBox="0 0 47 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M23.3182 45.9562C36.0087 45.9562 46.2963 35.6685 46.2963 22.9781C46.2963 10.2876 36.0087 0 23.3182 0C10.6278 0 0.340149 10.2876 0.340149 22.9781C0.340149 35.6685 10.6278 45.9562 23.3182 45.9562Z" fill="#FFAF08" class="button-circle" />
                                                                <path d="M19.9141 15.3186L27.0102 22.4148C27.7913 23.1958 27.7913 24.4622 27.0102 25.2432L19.9141 32.3394" stroke="white" stroke-width="3" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                    <span class="card-text d-block mt-4">31 Jan 2022</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="demo/news/groundbreaking-ceremony-plant-2">
                                        <div class=" p-3">
                                            <div class="card text-bg-dark bg-transparent card-news" style="border-radius: 30px;">
                                                <div class="overlay"></div>
                                                <img src="{{asset('/images/bnm/components/news_detail/image-news2-min.jpg')}}" class="card-img" alt="...">
                                                <div class="card-img-overlay">
                                                    <h3 class="card-title">Groundbreaking Ceremony Plant 2</h3>
                                                    <div class="d-flex justify-content-between news-button">
                                                        <p class="mb-0 mt-3 news-card-content forDesktop">BNM&rsquo;s continuous success demanded a plant expansion. Located next to Plant 1, the groundbreaking ceremony for BNM Plant 2 took place on Friday, September 28, 2018 ...</p>
                                                        <p class="mb-0 mt-3 w-100 news-card-content forMobile">BNM&rsquo;s continuous success demanded a plant expansion. Located next to Plant 1 ...</p>
                                                        <a href="demo/news/groundbreaking-ceremony-plant-2" class="btn-news p-2 my-auto">
                                                            <svg width="30" height="30" viewBox="0 0 47 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M23.3182 45.9562C36.0087 45.9562 46.2963 35.6685 46.2963 22.9781C46.2963 10.2876 36.0087 0 23.3182 0C10.6278 0 0.340149 10.2876 0.340149 22.9781C0.340149 35.6685 10.6278 45.9562 23.3182 45.9562Z" fill="#FFAF08" class="button-circle" />
                                                                <path d="M19.9141 15.3186L27.0102 22.4148C27.7913 23.1958 27.7913 24.4622 27.0102 25.2432L19.9141 32.3394" stroke="white" stroke-width="3" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                    <span class="card-text d-block mt-4">31 Jan 2022</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <div class=" p-3">
                                            <div class="card text-bg-dark bg-transparent card-news" style="border-radius: 30px;">
                                                <div class="overlay"></div>
                                                <img src="{{asset('/images/bnm/news-2.jpg')}}" class="card-img" alt="...">
                                                <div class="card-img-overlay">
                                                    <h3 class="card-title">Lorem Ipsum</h3>
                                                    <div class="d-flex justify-content-between news-button">
                                                        <p class="mb-0 mt-3 news-card-content forDesktop">BNM&rsquo;s continuous success demanded a plant expansion. Located next to Plant 1, the groundbreaking ceremony for BNM Plant 2 took place on Friday, September 28, 2018. This new plant adds a total of 3,264 square meters to the original plant... </p>
                                                        <p class="mb-0 mt-3 w-100 news-card-content forMobile">BNM&rsquo;s continuous success demanded a plant expansion. Located next to Plant 1, the groundbreaking ceremony for BNM Plant 2 took place on Friday, September 28, 2018. This new plant adds a total of 3,264 square meters to the original plant...</p>
                                                        <a href="" class="btn-news p-2 my-auto">
                                                            <svg width="30" height="30" viewBox="0 0 47 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M23.3182 45.9562C36.0087 45.9562 46.2963 35.6685 46.2963 22.9781C46.2963 10.2876 36.0087 0 23.3182 0C10.6278 0 0.340149 10.2876 0.340149 22.9781C0.340149 35.6685 10.6278 45.9562 23.3182 45.9562Z" fill="#FFAF08" class="button-circle" />
                                                                <path d="M19.9141 15.3186L27.0102 22.4148C27.7913 23.1958 27.7913 24.4622 27.0102 25.2432L19.9141 32.3394" stroke="white" stroke-width="3" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                    <span class="card-text d-block mt-4">31 Jan 2022</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <div class=" p-3">
                                            <div class="card text-bg-dark bg-transparent card-news" style="border-radius: 30px;">
                                                <div class="overlay"></div>
                                                <img src="{{asset('/images/bnm/news-2.jpg')}}" class="card-img" alt="...">
                                                <div class="card-img-overlay">
                                                    <h3 class="card-title">Lorem Ipsum</h3>
                                                    <div class="d-flex justify-content-between news-button">
                                                        <p class="mb-0 mt-3 news-card-content forDesktop">Lorem, ipsum dolor sit amet consectetur adipisicing.</p>
                                                        <p class="mb-0 mt-3 w-100 news-card-content forMobile">Lorem, ipsum dolor sit amet consectetur adipisicing.</p>
                                                        <a href="" class="btn-news p-2 my-auto">
                                                            <svg width="30" height="30" viewBox="0 0 47 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M23.3182 45.9562C36.0087 45.9562 46.2963 35.6685 46.2963 22.9781C46.2963 10.2876 36.0087 0 23.3182 0C10.6278 0 0.340149 10.2876 0.340149 22.9781C0.340149 35.6685 10.6278 45.9562 23.3182 45.9562Z" fill="#FFAF08" class="button-circle" />
                                                                <path d="M19.9141 15.3186L27.0102 22.4148C27.7913 23.1958 27.7913 24.4622 27.0102 25.2432L19.9141 32.3394" stroke="white" stroke-width="3" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                    <p class="card-text d-block mt-4">Last updated 3 mins ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <div class=" p-3">
                                            <div class="card text-bg-dark bg-transparent card-news" style="border-radius: 30px;">
                                                <div class="overlay"></div>
                                                <img src="{{asset('/images/bnm/news-2.jpg')}}" class="card-img" alt="...">
                                                <div class="card-img-overlay">
                                                    <h3 class="card-title">Lorem Ipsum</h3>
                                                    <div class="d-flex justify-content-between news-button">
                                                        <p class="mb-0 mt-3 news-card-content forDesktop">Lorem, ipsum dolor sit amet consectetur adipisicing.</p>
                                                        <p class="mb-0 mt-3 w-100 news-card-content forMobile">Lorem, ipsum dolor sit amet consectetur adipisicing.</p>
                                                        <a href="" class="btn-news p-2 my-auto">
                                                            <svg width="30" height="30" viewBox="0 0 47 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M23.3182 45.9562C36.0087 45.9562 46.2963 35.6685 46.2963 22.9781C46.2963 10.2876 36.0087 0 23.3182 0C10.6278 0 0.340149 10.2876 0.340149 22.9781C0.340149 35.6685 10.6278 45.9562 23.3182 45.9562Z" fill="#FFAF08" class="button-circle" />
                                                                <path d="M19.9141 15.3186L27.0102 22.4148C27.7913 23.1958 27.7913 24.4622 27.0102 25.2432L19.9141 32.3394" stroke="white" stroke-width="3" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                    <span class="card-text d-block mt-4">Last updated 3 mins ago</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <div class=" p-3">
                                            <div class="card text-bg-dark bg-transparent card-news" style="border-radius: 30px;">
                                                <div class="overlay"></div>
                                                <img src="{{asset('/images/bnm/news-2.jpg')}}" class="card-img" alt="...">
                                                <div class="card-img-overlay">
                                                    <h3 class="card-title">Lorem Ipsum</h3>
                                                    <div class="d-flex justify-content-between news-button">
                                                        <p class="mb-0 mt-3 news-card-content forDesktop">Lorem, ipsum dolor sit amet consectetur adipisicing.</p>
                                                        <p class="mb-0 mt-3 w-100 news-card-content forMobile">Lorem, ipsum dolor sit amet consectetur adipisicing.</p>
                                                        <a href="" class="btn-news p-2 my-auto">
                                                            <svg width="30" height="30" viewBox="0 0 47 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M23.3182 45.9562C36.0087 45.9562 46.2963 35.6685 46.2963 22.9781C46.2963 10.2876 36.0087 0 23.3182 0C10.6278 0 0.340149 10.2876 0.340149 22.9781C0.340149 35.6685 10.6278 45.9562 23.3182 45.9562Z" fill="#FFAF08" class="button-circle" />
                                                                <path d="M19.9141 15.3186L27.0102 22.4148C27.7913 23.1958 27.7913 24.4622 27.0102 25.2432L19.9141 32.3394" stroke="white" stroke-width="3" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                    <span class="card-text d-block mt-4">Last updated 3 mins ago</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <div class=" p-4">
                                            <div class="card text-bg-dark bg-transparent card-news" style="border-radius: 30px;">
                                                <div class="overlay"></div>
                                                <img src="{{asset('/images/bnm/news-2.jpg')}}" class="card-img" alt="...">
                                                <div class="card-img-overlay">
                                                    <h3 class="card-title">Lorem Ipsum</h3>
                                                    <div class="d-flex justify-content-between news-button">
                                                        <p class="mb-0 mt-3 news-card-content forDesktop">Lorem, ipsum dolor sit amet consectetur adipisicing.</p>
                                                        <p class="mb-0 mt-3 w-100 news-card-content forMobile">Lorem, ipsum dolor sit amet consectetur adipisicing.</p>
                                                        <a href="" class="btn-news p-2">
                                                            <svg width="30" height="30" viewBox="0 0 47 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M23.3182 45.9562C36.0087 45.9562 46.2963 35.6685 46.2963 22.9781C46.2963 10.2876 36.0087 0 23.3182 0C10.6278 0 0.340149 10.2876 0.340149 22.9781C0.340149 35.6685 10.6278 45.9562 23.3182 45.9562Z" fill="#FFAF08" class="button-circle" />
                                                                <path d="M19.9141 15.3186L27.0102 22.4148C27.7913 23.1958 27.7913 24.4622 27.0102 25.2432L19.9141 32.3394" stroke="white" stroke-width="3" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                    <span class="card-text d-block mt-4">Last updated 3 mins ago</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-1 col-md-12"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mar-3 gx-0">
            <div class="col-1 col-xxl-1"></div>
            <div class="col-11 col-xxl-11 g-2">
                <svg width="2000" height="3" viewBox="0 0 1312 3" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-100">
                    <line y1="1.5" x2="2000" y2="1.5" stroke="#FFAF08" stroke-width="3" />
                </svg>
            </div>
        </div>
    </section>
    <!-- end news-section2 -->
    <!-- career-section -->
    <section class="career__section pt-5" id="career">
        <div class="container-full">
            <div class="row gx-0">
                <div class="col-1 col-md-1"></div>
                <div class="col-11 col-md-11">
                    <div class="row gx-0">
                        <div class="col-md-4">
                            <h1 class="m-4-c">JOIN OUR TEAM</h1>
                            <p class="mt-5">
                                We encourage the people who are talented and have a professional experience in order to build and strengthen the credibility of individuals and the company.
                            </p>
                            <div class="contain-btn-job">
                                <a class="btn btn-job rounded-pill btn-lg" href="demo/career">
                                    See Job Opening
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="forMobile">
                <div class="row gx-0">
                    <div class="col-1">
                    </div>
                    <div class="col-11">
                        <div class="d-flex ">
                            <a href="demo/career" class="btn-job-m rounded-pill btn-lg">
                                See Job Opening
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <img data-src="{{asset('/images/bnm/career-img-2-min.jpg')}}" alt="" class="w-100 lazy forDesktop">
            <img data-src="{{asset('/images/bnm/components/career_section/gmbr2-min.jpg')}}" alt="" class="w-100 lazy forMobile">
        </div>

        <div class="row mar-6 gx-0">
            <div class="col-1 col-xxl-1"></div>
            <div class="col-11 col-xxl-11 g-2">
                <svg width="2000" height="3" viewBox="0 0 1312 3" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-100">
                    <line y1="1.5" x2="2000" y2="1.5" stroke="#FFAF08" stroke-width="3" />
                </svg>
            </div>
        </div>
    </section>
    <!-- end-career-section -->
    <!-- popup header -->
    <div class="popupheader2">
        <div class="body">
            <ul class="slider-hotOffers">
                <li>
                    <div class="d-flex justify-content-center popSlider">
                        <div class="w-75 bg-white p-5 box-popupheader">
                            <div class="d-flex justify-content-end border-bottom">
                                <div class="mb-5 close-popup">
                                    <svg width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <line x1="40.9751" y1="14.3655" x2="14.3654" y2="40.9751" stroke="#FFAF08" stroke-width="3" />
                                        <line x1="38.8538" y1="40.9751" x2="12.2441" y2="14.3655" stroke="#FFAF08" stroke-width="3" />
                                    </svg>
                                </div>
                            </div>
                            <div class="row gx-0">
                                <div class="col-md-8 mt-3">
                                    <h1 id="p-title">HIGHLY DEDICATED STAINLESS STEEL EXPERTS
                                    </h1>
                                    <div id="p-body">
                                        It is equally essential to get the product to the customer just in time as it is to produce a high-quality product. To ensure quality, the stainless steel strips are inspected and tested at our in-house metallurgical laboratory before being delivered to the customers.<br>
                                        With over 130 professionals with a passion to serve, we supply stainless steel strips to international companies such as Toyota, Honda, Mitsubishi,  Daihatsu, Volkswagen, Samsung, and LG.
                                    </div>
                                </div>
                                <div class="col-md-4 mt-3">
                                    <img src="{{asset('/images/bnm/header/steel-experts-min.jpg')}}" alt="" class="w-100" id="p-img">
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mt-5">
                                <div class="left-header-arrow">
                                    <img src="{{asset('/images/bnm/header/left-arrow.png')}}" alt="">
                                </div>
                                <div class="right-header-arrow">
                                    <img src="{{asset('/images/bnm/header/right-arrow.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="d-flex justify-content-center popSlider">
                        <div class="w-75 bg-white p-5 box-popupheader">
                            <div class="d-flex justify-content-end border-bottom">
                                <div class="mb-5 close-popup">
                                    <svg width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <line x1="40.9751" y1="14.3655" x2="14.3654" y2="40.9751" stroke="#FFAF08" stroke-width="3" />
                                        <line x1="38.8538" y1="40.9751" x2="12.2441" y2="14.3655" stroke="#FFAF08" stroke-width="3" />
                                    </svg>
                                </div>
                            </div>
                            <div class="row gx-0">
                                <div class="col-md-8 mt-3">
                                    <h1 id="p-title">0.05 MM THICKNESS & 5MM MINIMUM WIDTH
                                    </h1>
                                    <div id="p-body">With built-in quality at the core of our production process, we are able to consistently deliver precision strips across various industries throughout the world.</div>
                                </div>
                                <div class="col-md-4 mt-3">
                                    <img src="{{asset('/images/bnm/header/head-1-min.jpg')}}" alt="" class="w-100" id="p-img">
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mt-5">
                                <div class="left-header-arrow">
                                    <img src="{{asset('/images/bnm/header/left-arrow.png')}}" alt="">
                                </div>
                                <div class="right-header-arrow">
                                    <img src="{{asset('/images/bnm/header/right-arrow.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="d-flex justify-content-center popSlider">
                        <div class="w-75 bg-white p-5 box-popupheader">
                            <div class="d-flex justify-content-end border-bottom">
                                <div class="mb-5 close-popup">
                                    <svg width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <line x1="40.9751" y1="14.3655" x2="14.3654" y2="40.9751" stroke="#FFAF08" stroke-width="3" />
                                        <line x1="38.8538" y1="40.9751" x2="12.2441" y2="14.3655" stroke="#FFAF08" stroke-width="3" />
                                    </svg>
                                </div>
                            </div>
                            <div class="row gx-0">
                                <div class="col-md-8 mt-3">
                                    <h1 id="p-title">STATE-OF-THE-ART MANUFACTURING EQUIPMENT
                                    </h1>
                                    <div id="p-body">Supplying high-quality strips requires not only excellent manufacturing skill, but also outstanding manufacturing equipment. BNM is equipped with state-of-the-art machineries supplied by I²S – USA and EBNER – Austria.</div>
                                </div>
                                <div class="col-md-4 mt-3">
                                    <img src="{{asset('/images/bnm/header/state-of-art-min.jpg')}}" alt="" class="w-100" id="p-img">
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mt-5">
                                <div class="left-header-arrow">
                                    <img src="{{asset('/images/bnm/header/left-arrow.png')}}" alt="">
                                </div>
                                <div class="right-header-arrow">
                                    <img src="{{asset('/images/bnm/header/right-arrow.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
    <!-- end popup header -->
    <!-- popup-end-product -->
    <div class="popupheader3">
        <div class="body">
            <ul class="slider-hotOffers3">
                <li>
                    <div class="d-flex justify-content-center popSlider">
                        <div class="w-75 bg-white p-5 box-popupheader3">
                            <div class="d-flex justify-content-end border-bottom">
                                <div class="mb-5 close-popupOffers3">
                                    <svg width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <line x1="40.9751" y1="14.3655" x2="14.3654" y2="40.9751" stroke="#FFAF08" stroke-width="3" />
                                        <line x1="38.8538" y1="40.9751" x2="12.2441" y2="14.3655" stroke="#FFAF08" stroke-width="3" />
                                    </svg>
                                </div>
                            </div>
                            <div class="row gx-0">
                                <div class="col-md-7 mt-3">
                                    <h1 id="p-title">AUTOMOTIVE
                                    </h1>
                                    <div id="p-body">
                                        <ul>
                                            <li>Engine gasket
<li>Brake system</li>
<li>Window trim</li>
<li>Cover magnet</li>
<li>Piston ring</li>
<li>Transmission spring</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-1"></div>
                                <div class="col-md-4 mt-5">
                                    <img src="{{asset('/images/bnm/header/steel-experts-min.jpg')}}" alt="" class="w-100" id="p-img">
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mt-5">
                                <div class="left-arrowPopup">
                                    <img src="{{asset('/images/bnm/header/left-arrow.png')}}" alt="">
                                </div>
                                <div class="right-arrowPopup">
                                    <img src="{{asset('/images/bnm/header/right-arrow.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="d-flex justify-content-center popSlider">
                        <div class="w-75 bg-white p-5 box-popupheader3">
                            <div class="d-flex justify-content-end border-bottom">
                                <div class="mb-5 close-popupOffers3">
                                    <svg width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <line x1="40.9751" y1="14.3655" x2="14.3654" y2="40.9751" stroke="#FFAF08" stroke-width="3" />
                                        <line x1="38.8538" y1="40.9751" x2="12.2441" y2="14.3655" stroke="#FFAF08" stroke-width="3" />
                                    </svg>
                                </div>
                            </div>
                            <div class="row gx-0">
                                <div class="col-md-7 mt-3">
                                    <h1 id="p-title">MEDICAL
                                    </h1>
                                    <div id="p-body">
                                        <ul>
                                            <li>Syringe</li>
                                            <li>Canister</li>
                                            <li>Tray</li>
                                            <li>Scalpel</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-1"></div>
                                <div class="col-md-4 mt-3">
                                    <img src="{{asset('/images/bnm/header/steel-experts-min.jpg')}}" alt="" class="w-100" id="p-img">
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mt-5">
                                <div class="left-arrowPopup">
                                    <img src="{{asset('/images/bnm/header/left-arrow.png')}}" alt="">
                                </div>
                                <div class="right-arrowPopup">
                                    <img src="{{asset('/images/bnm/header/right-arrow.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="d-flex justify-content-center popSlider">
                        <div class="w-75 bg-white p-5 box-popupheader3">
                            <div class="d-flex justify-content-end border-bottom">
                                <div class="mb-5 close-popupOffers3">
                                    <svg width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <line x1="40.9751" y1="14.3655" x2="14.3654" y2="40.9751" stroke="#FFAF08" stroke-width="3" />
                                        <line x1="38.8538" y1="40.9751" x2="12.2441" y2="14.3655" stroke="#FFAF08" stroke-width="3" />
                                    </svg>
                                </div>
                            </div>
                            <div class="row gx-0">
                                <div class="col-md-7 mt-3">
                                    <h1 id="p-title">ELECTRONICS
                                    </h1>
                                    <div id="p-body">
                                        <ul>
                                            <li>Flat springs</li>
                                            <li>Computer/TV parts</li>
                                            <li>Blender knife</li>
                                            <li>Dispenser water tank</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-1"></div>
                                <div class="col-md-4 mt-3">
                                    <img src="{{asset('/images/bnm/header/steel-experts-min.jpg')}}" alt="" class="w-100" id="p-img">
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mt-5">
                                <div class="left-arrowPopup">
                                    <img src="{{asset('/images/bnm/header/left-arrow.png')}}" alt="">
                                </div>
                                <div class="right-arrowPopup">
                                    <img src="{{asset('/images/bnm/header/right-arrow.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="d-flex justify-content-center popSlider">
                        <div class="w-75 bg-white p-5 box-popupheader3">
                            <div class="d-flex justify-content-end border-bottom">
                                <div class="mb-5 close-popupOffers3">
                                    <svg width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <line x1="40.9751" y1="14.3655" x2="14.3654" y2="40.9751" stroke="#FFAF08" stroke-width="3" />
                                        <line x1="38.8538" y1="40.9751" x2="12.2441" y2="14.3655" stroke="#FFAF08" stroke-width="3" />
                                    </svg>
                                </div>
                            </div>
                            <div class="row gx-0">
                                <div class="col-md-7 mt-3">
                                    <h1 id="p-title">INDUSTRIAL
                                    </h1>
                                    <div id="p-body">
                                        <ul>
                                            <li>Tower packing</li>
                                            <li>Cable tie</li>
                                            <li>Flexible hose</li>
                                            <li>Constant force spring</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-1"></div>
                                <div class="col-md-4 mt-3">
                                    <img src="{{asset('/images/bnm/header/steel-experts-min.jpg')}}" alt="" class="w-100" id="p-img">
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mt-5">
                                <div class="left-arrowPopup">
                                    <img src="{{asset('/images/bnm/header/left-arrow.png')}}" alt="">
                                </div>
                                <div class="right-arrowPopup">
                                    <img src="{{asset('/images/bnm/header/right-arrow.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="d-flex justify-content-center popSlider">
                        <div class="w-75 bg-white p-5 box-popupheader3">
                            <div class="d-flex justify-content-end border-bottom">
                                <div class="mb-5 close-popupOffers3">
                                    <svg width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <line x1="40.9751" y1="14.3655" x2="14.3654" y2="40.9751" stroke="#FFAF08" stroke-width="3" />
                                        <line x1="38.8538" y1="40.9751" x2="12.2441" y2="14.3655" stroke="#FFAF08" stroke-width="3" />
                                    </svg>
                                </div>
                            </div>
                            <div class="row gx-0">
                                <div class="col-md-8 mt-3">
                                    <h1 id="p-title">OTHER
                                    </h1>
                                    <div id="p-body">
                                        <ul>
                                            <li>Safety shoes sole</li>
                                            <li>Textile reed</li>
                                            <li>Pan rimming</li>
                                            <li>Window spacer</li>
                                            <li>Razor blade</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-3">
                                    <img src="{{asset('/images/bnm/header/steel-experts-min.jpg')}}" alt="" class="w-100" id="p-img">
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mt-5">
                                <div class="left-arrowPopup">
                                    <img src="{{asset('/images/bnm/header/left-arrow.png')}}" alt="">
                                </div>
                                <div class="right-arrowPopup">
                                    <img src="{{asset('/images/bnm/header/right-arrow.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
    <!-- end of popup-end-product -->
    <!-- popup specification -->
    <!-- end popup specification -->
    <!-- popup Serve Market -->
    <div class="popupServeMarket">
        <div class="body">
            <ul class="slider-serveMarket">
                <li>
                    <div class="d-flex justify-content-center popSlider">
                        <div class="w-75 bg-white p-5 box-popupServe">
                            <div class="d-flex justify-content-end">
                                <div class="mb-5 close-popupServeMarket">
                                    <svg width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <line x1="40.9751" y1="14.3655" x2="14.3654" y2="40.9751" stroke="#FFAF08" stroke-width="3" />
                                        <line x1="38.8538" y1="40.9751" x2="12.2441" y2="14.3655" stroke="#FFAF08" stroke-width="3" />
                                    </svg>
                                </div>
                            </div>
                            <h1>
                                TECHNICAL
                            </h1>
                            <div class="row gx-0">
                                <div class="col-md-7 mt-2">
                                    <h1 id="p-title-specs">ANNEALED [SOFT] MATERIALS
                                    </h1>
                                    <div id="p-specs-info" class="mt-5">
                                        <h4 class="fw-bold">
                                            Standards
                                        </h4>
                                        <p>
                                            ASTM A240
                                        </p>
                                        <h4 class="mt-5 fw-bold">
                                            Surface Finish
                                        </h4>
                                        <p>
                                            2B Smooth surface with low gloss
                                        </p>
                                        <p>
                                            BA Smooth, mirror like surface with high image clarity
                                        </p>
                                        <h4 class="fw-bold mt-5">
                                            Applications
                                        </h4>
                                        <p>
                                            Flexible hose, cannula, cover magnet, water dispenser tank, window spacer, automotive trim, etc
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-5 mt-3">
                                    <div class="d-flex flex-column justify-content-center">
                                        <div>
                                            <img src="{{asset('/images/bnm/table/annealed-img-min.jpg')}}" alt="" class="w-100" id="p-spec-img">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <a class="nav-link active" id="nav-home-tab0" data-bs-toggle="tab" href="#nav-home0" role="tab" aria-controls="nav-home0" aria-selected="true">
                                                <h3 class="text-center">CHEMICAL COMPOSITIONS</h3>
                                                <p class="nav-unit">
                                                    Unit: % (all values are maximum unless a range is otherwise indicated)
                                                </p>
                                            </a>
                                            <a class="nav-link" id="nav-profile-tab0" data-bs-toggle="tab" href="#nav-profile0" role="tab" aria-controls="nav-profile0" aria-selected="false">
                                                <h3 class="text-center">
                                                    MECHANICAL PROPERTIES
                                                </h3>
                                            </a>
                                        </div>
                                    </nav>
                                    <div class="tab-content" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="nav-home0" role="tabpanel" aria-labelledby="nav-home-tab0">
                                            <div class="row gx-0 border" style="height: 350px; overflow:scroll">
                                                <div class="col-md-12" style="height: 400px;">
                                                    <div class="row" style="overflow: scroll;">
                                                        <div class="col-1 col-md-1"></div>
                                                        <div class="col-10 col-md-10" style="overflow-y: scroll;">
                                                            <div style="height: 400px; width:100vw" class="mt-5">
                                                                <img src="{{asset('/images/bnm/table/annealed-chem-min.jpg')}}" alt="" style="width: 53%;">
                                                            </div>
                                                        </div>
                                                        <div class="col-1 col-md-1"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nav-profile0" role="tabpanel" aria-labelledby="nav-profile-tab0">
                                            <div class="row gx-0 border" style="height: 350px; overflow:scroll">
                                                <div class="col-md-12" style="height: 400px;">
                                                    <div class="row" style="overflow: scroll;">
                                                        <div class="col-1 col-md-1"></div>
                                                        <div class="col-10 col-md-10" style="overflow-y: scroll;">
                                                            <div style="height: 400px; width:100vw" class="mt-5">
                                                                <img src="{{asset('/images/bnm/table/annealed-mech-min.jpg')}}" alt="" style="width: 53%;">
                                                            </div>
                                                        </div>
                                                        <div class="col-1 col-md-1"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a class="contact-to ">Contact Us</a>
                            </div>
                            <div class="d-flex justify-content-end mt-5">
                                <div class="right-arrowPopupServeMarket">
                                    <img src="{{asset('/images/bnm/header/right-arrow.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="d-flex justify-content-center popSlider">
                        <div class="w-75 bg-white p-5 box-popupServe">
                            <div class="d-flex justify-content-end border-bottom">
                                <div class="mb-5 close-popupServeMarket">
                                    <svg width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <line x1="40.9751" y1="14.3655" x2="14.3654" y2="40.9751" stroke="#FFAF08" stroke-width="3" />
                                        <line x1="38.8538" y1="40.9751" x2="12.2441" y2="14.3655" stroke="#FFAF08" stroke-width="3" />
                                    </svg>

                                </div>
                            </div>
                            <h1>
                                TECHNICAL
                            </h1>
                            <div class="row gx-0">
                                <div class="col-md-7 mt-2">
                                    <h1 id="p-title-specs">TEMPERED HARD MATERIALS
                                    </h1>
                                    <div id="p-specs-info" class="mt-5">
                                        <h4 class="fw-bold">
                                            Standards
                                        </h4>
                                        <p>
                                            ASTM A 666
                                        </p>
                                        <p>
                                            JIS G 4313
                                        </p>
                                        <h4 class="mt-4 fw-bold">
                                            Applications
                                        </h4>
                                        <p>
                                            Spring Clips, exhaust manifold gasket, constant force spring, safety shoes sole, etc
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <a class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">
                                                <h3 class="text-center">CHEMICAL COMPOSITIONS</h3>
                                                <p class="nav-unit">
                                                    Unit: % (all values are maximum unless a range is otherwise indicated)
                                                </p>
                                            </a>
                                            <a class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">
                                                <h3 class="text-center">
                                                    MECHANICAL PROPERTIES
                                                </h3>
                                            </a>
                                        </div>
                                    </nav>
                                    <div class="tab-content" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                            <div class="row gx-0 border" style="height: 350px; overflow:scroll">
                                                <div class="col-md-12" style="height: 400px;">
                                                    <div class="row" style="overflow: scroll;">
                                                        <div class="col-1 col-md-1"></div>
                                                        <div class="col-10 col-md-10" style="overflow-y: scroll;">
                                                            <div style="height: 400px; width:100vw" class="mt-5">
                                                                <img src="{{asset('/images/bnm/table/tempered-chem-min.jpg')}}" alt="" style="width: 53%;">
                                                            </div>
                                                        </div>
                                                        <div class="col-1 col-md-1"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                            <div class="row gx-0 border" style="height: 350px; overflow:scroll">
                                                <div class="col-md-12" style="height: 400px;">
                                                    <div class="row" style="overflow: scroll;">
                                                        <div class="col-1 col-md-1"></div>
                                                        <div class="col-10 col-md-10" style="overflow-y: scroll;">
                                                            <div style="height: 400px; width:100vw" class="mt-5">
                                                                <img src="{{asset('/images/bnm/table/tempered-mech-1-min.jpg')}}" alt="" style="width: 53%;">
                                                                <img src="{{asset('/images/bnm/table/tempered-mech-2-min.jpg')}}" alt="" style="width: 53%;" class="mt-4">
                                                            </div>
                                                        </div>
                                                        <div class="col-1 col-md-1"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a class="contact-to ">Contact Us</a>

                            </div>
                            <div class="d-flex justify-content-between mt-5">
                                <div class="left-arrowPopupServeMarket">
                                    <img src="{{asset('/images/bnm/header/left-arrow.png')}}" alt="">
                                </div>
                                <div class="right-arrowPopupServeMarket">
                                    <img src="{{asset('/images/bnm/header/right-arrow.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="d-flex justify-content-center popSlider">
                        <div class="w-75 bg-white p-5 box-popupServe">
                            <div class="d-flex justify-content-end border-bottom">
                                <div class="mb-5 close-popupServeMarket">
                                    <svg width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <line x1="40.9751" y1="14.3655" x2="14.3654" y2="40.9751" stroke="#FFAF08" stroke-width="3" />
                                        <line x1="38.8538" y1="40.9751" x2="12.2441" y2="14.3655" stroke="#FFAF08" stroke-width="3" />
                                    </svg>
                                </div>
                            </div>
                            <h1>
                                TECHNICAL
                            </h1>
                            <div class="row gx-0">
                                <div class="col-md-12 mt-2">
                                    <h1 id="p-title-specs">PRECISION THICKNESS MATERIALS <span>(THICKNESS MIN 0.05)</span>
                                    </h1>
                                    <div id="p-specs-info" class="mt-5">
                                        <h4 class="fw-bold">
                                            Thickness Tolerance
                                        </h4>
                                        <p>
                                            Annealed (Soft) Materials - JIS G 4305
                                        </p>
                                        <p>Unit : mm</p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <a class="nav-link active" id="nav-home-tab1" data-bs-toggle="tab" href="#nav-home1" role="tab" aria-controls="nav-home1" aria-selected="true">
                                                <h3 class="text-center">CHEMICAL COMPOSITIONS</h3>
                                                <p class="nav-unit">
                                                    Unit: % (all values are maximum unless a range is otherwise indicated)
                                                </p>
                                            </a>
                                            <a class="nav-link" id="nav-profile-tab1" data-bs-toggle="tab" href="#nav-profile1" role="tab" aria-controls="nav-profile1" aria-selected="false">
                                                <h3 class="text-center">
                                                    MECHANICAL PROPERTIES
                                                </h3>
                                            </a>
                                        </div>
                                    </nav>
                                    <div class="tab-content" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="nav-home1" role="tabpanel" aria-labelledby="nav-home-tab1">
                                            <div class="row gx-0 border" style="height: 350px; overflow:scroll">
                                                <div class="col-md-12" style="height: 400px;">
                                                    <div class="row" style="overflow: scroll;">
                                                        <div class="col-1 col-md-1"></div>
                                                        <div class="col-10 col-md-10" style="overflow-y: scroll;">
                                                            <div style="height: 400px; width:100vw" class="mt-5">
                                                                <img src="{{asset('/images/bnm/table/precision-chem-min.jpg')}}" alt="" style="width: 53%;">
                                                            </div>
                                                        </div>
                                                        <div class="col-1 col-md-1"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nav-profile1" role="tabpanel" aria-labelledby="nav-profile-tab1">
                                            <div class="row gx-0 border" style="height: 350px; overflow:scroll">
                                                <div class="col-md-12" style="height: 400px;">
                                                    <div class="row" style="overflow: scroll;">
                                                        <div class="col-1 col-md-1"></div>
                                                        <div class="col-10 col-md-10" style="overflow-y: scroll;">
                                                            <div style="height: 400px; width:100vw" class="mt-5">
                                                                <img src="{{asset('/images/bnm/table/precision-mech-min.jpg')}}" alt="" style="width: 53%;">
                                                            </div>
                                                        </div>
                                                        <div class="col-1 col-md-1"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a class="contact-to ">Contact Us</a>
                            </div>
                            <div class="d-flex justify-content-between mt-5">
                                <div class="left-arrowPopupServeMarket">
                                    <img src="{{asset('/images/bnm/header/left-arrow.png')}}" alt="">
                                </div>
                                <div class="right-arrowPopupServeMarket">
                                    <img src="{{asset('/images/bnm/header/right-arrow.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="d-flex justify-content-center popSlider">
                        <div class="w-75 bg-white p-5 box-popupServe">
                            <div class="d-flex justify-content-end border-bottom">
                                <div class="mb-5 close-popupServeMarket">
                                    <svg width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <line x1="40.9751" y1="14.3655" x2="14.3654" y2="40.9751" stroke="#FFAF08" stroke-width="3" />
                                        <line x1="38.8538" y1="40.9751" x2="12.2441" y2="14.3655" stroke="#FFAF08" stroke-width="3" />
                                    </svg>
                                </div>
                            </div>
                            <h1>
                                TECHNICAL
                            </h1>
                            <div class="row gx-0">
                                <div class="col-md-12 mt-2">
                                    <h1 id="p-title-specs">NARROW WIDTH MATERIALS <span>(SLIT WIDTH MIN 5MM)</span>
                                    </h1>
                                    <div id="p-specs-info" class="mt-5">
                                        <h4 class="fw-bold">
                                            Width Tolerance
                                        </h4>
                                        <p>
                                            Annealed (Soft) Materials - JIS G 4305
                                        </p>
                                        <h4 class="mt-4">
                                            Surface Finish
                                        </h4>
                                        <p>
                                            2B Smooth surface with low gloss
                                        </p>
                                        <p>
                                            BA Smooth, mirror like surface with high image clarity
                                        </p>
                                        <h4 class="fw-bold mt-5">
                                            Applications
                                        </h4>
                                        <p>
                                            Flexible hose, cannula, cover magnet, water dispenser tank, window spacer, automotive trim, etc
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <a class="nav-link active" id="nav-home-tab2" data-bs-toggle="tab" href="#nav-home2" role="tab" aria-controls="nav-home2" aria-selected="true">
                                                <h3 class="text-center">CHEMICAL COMPOSITIONS</h3>
                                                <p class="nav-unit">
                                                    Unit: % (all values are maximum unless a range is otherwise indicated)
                                                </p>
                                            </a>
                                            <a class="nav-link" id="nav-profile-tab2" data-bs-toggle="tab" href="#nav-profile2" role="tab" aria-controls="nav-profile2" aria-selected="false">
                                                <h3 class="text-center">
                                                    MECHANICAL PROPERTIES
                                                </h3>
                                            </a>
                                        </div>
                                    </nav>
                                    <div class="tab-content" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="nav-home2" role="tabpanel" aria-labelledby="nav-home-tab2">
                                            <div class="row gx-0 border" style="height: 350px; overflow:scroll">
                                                <div class="col-md-12" style="height: 400px;">
                                                    <div class="row" style="overflow: scroll;">
                                                        <div class="col-1 col-md-1"></div>
                                                        <div class="col-10 col-md-10" style="overflow-y: scroll;">
                                                            <div style="height: 400px; width:100vw" class="mt-5">
                                                                <img src="{{asset('/images/bnm/table/annealed-chem-min.jpg')}}" alt="" style="width: 53%;">
                                                            </div>
                                                        </div>
                                                        <div class="col-1 col-md-1"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nav-profile2" role="tabpanel" aria-labelledby="nav-profile-tab2">
                                            <div class="row gx-0 border" style="height: 350px; overflow:scroll">
                                                <div class="col-md-12" style="height: 400px;">
                                                    <div class="row" style="overflow: scroll;">
                                                        <div class="col-1 col-md-1"></div>
                                                        <div class="col-10 col-md-10" style="overflow-y: scroll;">
                                                            <div style="height: 400px; width:100vw" class="mt-5">
                                                                <img src="{{asset('/images/bnm/table/annealed-chem-min.jpg')}}" alt="" style="width: 53%;">
                                                            </div>
                                                        </div>
                                                        <div class="col-1 col-md-1"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-5">
                                <a class="contact-to btn-contact">Contact Us</a>
                            </div>
                            <div class="d-flex justify-content-start mt-5">
                                <div class="left-arrowPopupServeMarket">
                                    <img src="{{asset('/images/bnm/header/left-arrow.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
    <!-- end popup Serve Market -->
    <!-- message-section -->
    <div id="contacts">
        @include('client.components.sections.message_section')
    </div>
    <!-- end-message-section -->
    @include('client.components.footer')
    @include('client.components.offcanvas')
    <!-- endoffcanvas -->
    @include('client.components.search')
    <div class="black-cover"></div>
</main>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script src="{{asset('/vendor/owlcarousel/dist/owl.carousel.min.js')}}"></script>

<script>
    $(document).ready(function() {
        $(".owl-one").owlCarousel({
            margin: 10,
            loop: true,
            autoWidth: true,
            items: 5,
            center: false,
            infinite: true,
            nav: false,
            dots: false,
            // stagePadding: 100,

            responsive: {
                480: {
                    items: 1,
                    nav: true,
                    // margin: 130,
                    // center: true,
                    // margin:30
                },
            }

        });

        $(".owl-zero").owlCarousel({
            margin: 10,
            loop: false,
            autoWidth: true,
            items: 5,
            center: false,
            infinite: true,
            nav: false,
            dots: false,
            // stagePadding: 100,

            responsive: {
                480: {
                    items: 1,
                    nav: true,
                    // margin: 130,
                    // center: true,
                    // margin:30
                },
            }

        });
        $(".owl-carousel").owlCarousel({
            margin: 10,
            loop: false,
            autoWidth: true,
            items: 5,
            center: false,
            infinite: false,
            nav: false,
            dots: false,
            // stagePadding: 100,

            responsive: {
                480: {
                    items: 1,
                    nav: true,
                    // margin: 130,
                    // center: true,
                    // margin:30
                },
            }

        });
        // $(".owl-carousel").owlCarousel({
        //     margin: 10,
        //     loop: false,
        //     autoWidth: true,
        //     items: 5,
        //     center: false,
        //     infinite: false,
        //     responsive: {
        //         480: {
        //             items: 1,
        //             nav: true,
        //         },
        //     }
        // });

        $(".owl-end").owlCarousel({
            // margin: 10,
            loop: true,
            autoWidth: true,
            items: 5
        });

        $('.infograph-slick').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: false,
            // margin:10
        })

        $('.newsCollections').slick({
            infinite: true,
            slidesToShow: 2,
            slidesToScroll: 2,
            dots: true,
            margin: 3,
            adaptiveHeight: true,
            responsive: [{
                    breakpoint: 414,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 650,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        })
        $('.product-mobile-slide').slick({
            infinite: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true,
            margin: 10
        })
        $('.serve-mobile-slide').slick({
            infinite: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true,
            margin: 10
        })
        $('.facilities-slide').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: false,
            arrows: true,
            margin: 10,
            prevArrow: $('.left-fc-arrow'),
            nextArrow: $('.rignt-fc-arrow')
        })
        $('.impact-slider').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: false,
            margin: 10
        })

        $('.facilities-slide').on('afterChange', function(event, slick, currentSlide) {
            var elt = slick.$slides.get(currentSlide);

            let previousSlideIndex = currentSlide;
            let prod = '';
            if (previousSlideIndex == 0) {
                prod = 'sendzimir'
            } else if (previousSlideIndex == 1) {
                prod = 'degreaser'
            } else if (previousSlideIndex == 2) {
                prod = 'vertical-bright'
            } else if (previousSlideIndex == 3) {
                prod = 'skin-pass-mill'
            } else if (previousSlideIndex == 4) {
                prod = 'slitting-line'
            } else if (previousSlideIndex == 5) {
                prod = 'cold-rolled'
            } else if (previousSlideIndex == 6) {
                prod = 'tension'
            }
            let not = $('rect').siblings(`:not(.${prod})`)
            let notCaption = $('rect').siblings(`.caption-${prod}`)
            $('rect').siblings(`.caption-${prod}`).removeClass('active')
            $('rect').siblings().removeClass('active')
            $('rect').siblings(`.${prod}`).addClass('active')
            $('rect').siblings(`.caption-${prod}`).addClass('active')

            if ($('rect').hasClass(prod)) {
                $(this).addClass('active')
            }
        });

        //////////////// end production facilities slider integration /////////
        //////////////// slider header ////////////////////////
        $(`.slider-hotOffers`).slick({
            slidesToScroll: 1,
            slidesToShow: 1,
            arrows: true,
            prevArrow: $(`.left-header-arrow`),
            nextArrow: $(`.right-header-arrow`),
            swipe: false
        });

        $(".pop-head").on("click", function() {
            var slideno = $(this).data('header');
            $('.slider-hotOffers').slick('slickGoTo', slideno - 1);
            $('.popupheader2').addClass('open')
        });
        ///////// end slider header //////////////
        $(`.slider-hotOffers3`).slick({
            slidesToScroll: 1,
            slidesToShow: 1,
            arrows: true,
            prevArrow: $(`.left-arrowPopup`),
            nextArrow: $(`.right-arrowPopup`),
            swipe: false
        });

        $(".specPopup3").on("click", function() {
            var slidenoEndProduct = $(this).data('end-product')
            console.log(slidenoEndProduct)
            $('.slider-hotOffers3').slick('slickGoTo', slidenoEndProduct)
            $('.popupheader3').addClass('open')
        })

        $(`.slider-serveMarket`).slick({
            slidesToScroll: 1,
            slidesToShow: 1,
            infinite: false,
            arrows: true,
            prevArrow: $(`.left-arrowPopupServeMarket`),
            nextArrow: $(`.right-arrowPopupServeMarket`),
            swipeToSlide: false,
            swipe: false
        });

        $(".specPopup").on("click", function() {
            var slideno = $(this).data('spec');
            // console.log(slideno)
            $('.slider-serveMarket').slick('slickGoTo', slideno);
            $('.popupServeMarket').addClass('open')
        });

        $('.product-specs-slider').slick({
            infinite: false,
            slidesToShow: 4.5,
            slidesToScroll: 1,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }

            ]
        });

        $('.product-specs-sliders').slick({
            infinite: true,
            slidesToShow: 4,
        })


        $('.product-up-slider').slick({
            infinite: false,
            slidesToShow: 4,
            slidesToScroll: 1,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        centerMode: false,
                        centerPadding: '40px',
                    }
                }
            ]
        });
        ////////////////////// end serveMarket popup ///////////////////

        $(`.owl-C1`).slick({
            dots: false,
            infinite: true,
            speed: 500,
            cssEase: 'linear',
            prevArrow: $(`.left-arrow`),
            nextArrow: $(`.right-arrow`),
        });
        $(".to").each(function(e) {
            $(this).on("click", function() {
                let toHref = $(this).data("to");
                // var nav = $(`#${toHref}`);
                let mobile = $(this).data("device");
                if (mobile === 1) {
                    $(".offcanvas").removeClass("show");
                    $(".black-cover").removeClass("active");
                    $("html,body").removeAttr("style");
                    $("html, body").animate({
                            scrollTop: $(`#${toHref}`).offset().top - 98,
                        },
                        500,
                        "swing"
                    );


                } else {
                   $(".offcanvas").removeClass("show");
                    $(".black-cover").removeClass("active");
                    $("html,body").removeAttr("style");
                    $("html, body").animate({
                            scrollTop: $(`#${toHref}`).offset().top - 128,
                        },
                        500,
                        "swing"
                    );   
                }

               
            });
        });
        
        if (window.localStorage) {
            console.log("init")
        }
        let store = localStorage.getItem("selector");
        console.log(store);
        console.log("init")
        
        if (
                    localStorage.getItem("selector") != "undefined" &&
                    localStorage.getItem("selector") != null
                ) {
                    const selector = localStorage.getItem("selector");
                    // console.log("ini");

                    //I'm asuming, my destination is <div id="destination-1"></div>
                    const destination = $(`#${selector}`);

                    if (localStorage.getItem("mobile") == 1) {
                        // console.log(destination.offset().top);
                        // console.log('tes')
                        
                        // console.log(localStorage.getItem("mobile"))
                        // alert(destination)
                        // console.log(destination)
                        
                            // window.scrollTo(0, destination.offset()-98)
                            $("html, body").animate(
                                {
                                    // scrollTop: 311,
                                    scrollTop: destination.offset().top - 98,
                                },
                                500,
                                "swing"
                            );
                            console.log(selector)
                        
                        window.localStorage.clear();
                    } else if(localStorage.getItem("mobile") != 0) {
                        $(".offcanvas").removeClass("show");
                        $(".black-cover").removeClass("active");
                        $("html,body").removeAttr("style");
                        $("html, body").animate(
                            {
                                 scrollTop: destination.offset().top - 128,
                            },
                            500,
                            "swing"
                        );
                        //distroy the local storage
                        window.localStorage.clear();
                    }
                }
        
        
    });
</script>

@endsection