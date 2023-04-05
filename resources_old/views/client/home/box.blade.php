@extends('layouts.app')
@section('title', 'BNM Home')

@section('container')
<!-- Header -->

<header class="position-relative">
    <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-transparent position-absolute w-100">
        <div class="container mt-5">
            <a class="navbar-brand" href="#">
                <img src="{{asset('/images/bnm/logo.png')}}" alt="" class="logo forDesktop" width="200px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="vl"></div>
            <div class="input-group mb-3 mt-4 input-header">
                <input type="search" class="form-control d-block" placeholder="Search..." aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn btn-outline-white bg-white py-2" type="button" id="button-addon2">Button</button>
            </div>
            <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarSupportedContent">


                <form class="d-flex justify-content-end"> -->
                    <!-- <input class="form-control me-2 " type="search" placeholder="Search" aria-label="Search"> -->
                    <!-- <button class="btn btn-outline-none" type="submit">
                        <div id="menu-hamburger" class="btn" data-bs-toggle="offcanvas">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>

                        </div>
                    </button>
                </form>
            </div>
        </div>
    </nav> -->
    @include('components.navbar')
    <img src="{{asset('/images/bnm/BNM.jpg')}}" alt="" style="width: 100%;">
    <div class="desc-first">
        <h1>A PASSION <br> FOR CUSTOMER <br> EXPERIENCE</h1>
        <p>Precise Manageable Stainless Steel</p>
    </div>

    <div class="desc-second">
        <div class="d-flex justify-content-center">
            <div class="plus-header"> <img src="{{asset('/images/bnm/plus-header.png')}}" alt=""></div>
            <div class="caption">
                <u>
                    Minimum Slit <br> Width 5mm
                </u>
            </div>
        </div>
    </div>

    <div class="desc-third">
        <div class="d-flex justify-content-center">
            <div class="plus-header"> <img src="{{asset('/images/bnm/plus-header.png')}}" alt=""></div>
            <div class="caption">
                <u>
                    Vertical Bright <br> Annealing Line
                </u>
            </div>
        </div>
    </div>

    <div class="desc-fourth">
        <div class="d-flex justify-content-center">
            <div class="plus-header"> <img src="{{asset('/images/bnm/plus-header.png')}}" alt=""></div>
            <div class="caption">
                <u>
                    Using 20 hi <br> Sendzimir Mill
                </u>
            </div>
        </div>
    </div>
</header>

<main id="bnm" page="bnm">
    <!-- profile-section -->
    <section class="profile__section" id="profile">
        <div class="row g-0">
            <div class="col-md-6 gx-0"></div>
            <div class="col-md-6 gx-0">
                <img src="{{asset('/images/bnm/background.png')}}" alt="" class="img-fluid w-100">
            </div>
        </div>
        <div class="container-full">
            <div class="profile-caption">
                <div class="row g-0">
                    <div class="col-md-1"></div>
                    <div class="col-md-11">
                        <div class="row g-0">
                            <div class="col-md-3">
                                <h1 class="m-4-c">PROFILE</h1>

                            </div>
                            <div class="col-md-6 pad-left">
                                <h3>
                                    We Believe in
                                </h3>

                                <h1>
                                    SINCE IT'S ESTABLISMENT <br> IN 1996
                                </h1>

                                <p>
                                    PT. Bina Niaga Multiusaha has supported multinasional corporations such as Toyota, Honda, Suzuki, Samsung, Nokia, LG, Toshiba, Fujitsu, and others in establishing electronic, chemical, Automotive, and medical instrument sectors.
                                </p>

                            </div>
                            <div class="col-md-3 gx-0"></div>
                            <div class="w-100"></div>
                            <div class="col-md-3">
                                <img src="https://source.unsplash.com/320x360?technology" alt="" class="w-100 h-75">
                            </div>
                            <div class="col-md-9 pad-left position-relative">
                                <video src="movie.ogg" controls width="80%" height="120%">
                                    Your browser does not support the video tag.
                                </video>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-0">
            <div class="col-md-1"></div>
            <div class="col-md-11 g-2">
                <img src="{{asset('/images/bnm/Line-4.png')}}" alt="" class="img-fluid w-100">
            </div>
        </div>

    </section>
    <!-- end-profile-section -->

    <!-- product-section -->


    <section class="product__section2 pt-5">
        <div class="container-full">
            <div class="row g-0">
                <div class="col-md-1"></div>
                <div class="col-md-11 gx-0">
                    <div class="row gx-0">
                        <div class="col-md-4">
                            <img src="{{asset('/images/bnm/Rectangle_1.png')}}" alt="" width="80%" height="80%">
                        </div>
                        <div class="col-md-7">
                            <h1>PRODUCT</h1>
                            <h1>WE PROVIDE HIGH <br>ACCURACY PRODUCT</h1>

                            <p class="mt-5">
                                Our product is a precision cold-rolled with high accuracy in size dimension, mechanical characteristics, and surface quality. It is very customizable to meet the needs of each customer. Our product is a precision cold-rolled stainless steel with high Accuracy in size dimension, mechanical characteristicsm and surface quality. It is cery customizable to meet the needs of each customer.
                            </p>

                            <div class="d-flex justify-content-between">
                                <div class="card me-2" style="width: 15rem;">
                                    <div class="card-body">
                                        <h1 class="card-title fs-3">PRODUCT 1</h1>
                                        <p class="card-text fs-5">Our product is a precision cold-rolled stainless steel with high accuracy in size dimension.</p>
                                    </div>
                                </div>
                                <div class="card me-2" style="width: 15rem;">
                                    <div class="card-body">
                                        <h1 class="card-title fs-3">PRODUCT 2</h1>
                                        <p class="card-text fs-5">Our product is a precision cold-rolled stainless steel with high accuracy in size dimension.</p>
                                    </div>
                                </div>
                                <div class="card me-2" style="width: 15rem;">
                                    <div class="card-body">
                                        <h1 class="card-title fs-3">PRODUCT 3</h1>
                                        <p class="card-text fs-5">Our product is a precision cold-rolled stainless steel with high accuracy in size dimension.</p>
                                    </div>
                                </div>
                                <div class="card" style="width: 15rem;">
                                    <div class="card-body">
                                        <h1 class="card-title fs-3">PRODUCT 4</h1>
                                        <p class="card-text fs-5">Our product is a precision cold-rolled stainless steel with high accuracy in size dimension.</p>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="row gx-0 mt-5">
                        <div class="col-md-4">
                            <h1>
                                END-PRODUCT APPLICATIONS
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="card__collections owl-carousel d-flex justify-content-between">
                    <div class="card me-2" style="width: 30rem;">
                        <div class="card-body">
                            <h1 class="card-title">AUTOMOTIVE</h1>
                            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non quae laborum aperiam.</p>
                        </div>
                        <img src="{{asset('/images/bnm/Rectangle_1.png')}}" class="card-img-top mx-auto p-3" alt="..." width="23vw" style="height:23vh; object-fit:contain;">
                    </div>
                    <div class="card mx-2" style="width: 30rem;">
                        <div class="card-body">
                            <h1 class="card-title">HEALTH CARE</h1>
                            <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet commodi vitae excepturi.</p>
                        </div>
                        <img src="{{asset('/images/bnm/Rectangle_2.png')}}" class="card-img-top mx-auto p-3" alt="..." width="23vw" style="height:23vh ;object-fit:contain;">
                    </div>
                    <div class="card mx-2" style="width: 30rem;">
                        <div class="card-body">
                            <h1 class="card-title">Lorem, ipsum.</h1>
                            <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi sit eius molestiae?</p>
                        </div>
                        <img src="{{asset('/images/bnm/Rectangle_3.png')}}" class="card-img-top mx-auto p-3" alt="..." width="23vw" style="height:23vh ;object-fit:contain;">
                    </div>
                    <div class="card mx-2" style="width: 30rem;">
                        <div class="card-body">
                            <h1 class="card-title">Lorem, ipsum.</h1>
                            <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil animi atque impedit?</p>
                        </div>
                        <img src="{{asset('/images/bnm/Rectangle_4.png')}}" class="card-img-top mx-auto p-3" alt="..." width="23vw" style="height:23vh ;object-fit:contain;">
                    </div>

                </div>
            </div>
            <div class="row g-0 mar-30">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-11 gx-0">
                        <img src="{{asset('/images/bnm/Line-4.png')}}" alt="" class="img-fluid w-100">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end-product-section -->

    <section class="plant-section pt-5">
        <div class="row g-0">
            <div class="col-md-1 gx-0"></div>
            <div class="col-md-11 gx-0">
                <div class="row g-0">
                    <div class="col-md-3 g-0">
                        <h1>PLANT TOUR</h1>
                        <div style="margin-top: 100%;">
                            <div class=" border border-0 border-dark border-top">
                                <div class="p-5 pt-2 ps-0 pe-1">
                                    <div class="d-flex justify-content-between">
                                        <h1>PLANT #1</h1>
                                        <img src="{{asset('/images/bnm/Rectangle-gray.png')}}" class="p-2" alt="">

                                    </div>
                                </div>
                            </div>
                            <div class=" border border-0 border-dark border-top">
                                <div class="p-5 pt-2 ps-0 pe-1">
                                    <div class="d-flex justify-content-between">
                                        <h1>PLANT #2</h1>
                                        <img src="{{asset('/images/bnm/Rectangle-gray.png')}}" class="p-2" alt="">

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-9">
                        <div>
                            <img src="{{asset('/images/bnm/IMG20220603111731.png')}}" alt="" class="img-fluid w-100">
                            <div class="d-flex justify-content-between pe-3">
                                <div>
                                    <h1>Entrance to Plant #1</h1>
                                    <p>
                                        Our Product is a precision cold-rolled stainless steel with high <br> accuracy in size dimension, mechanical characteristics, and <br> surface quality. It is very customizable to meet the needs of <br> each customer.
                                    </p>
                                </div>
                                <div class="me-3 pt-5">
                                    <!-- <a href="" class="bg-primary rounded-circle ">
                                        <img src="{{asset('/images/bnm/Rectangle-kiri.png')}}" alt="">
                                    </a> -->
                                    <div class="d-flex justify-content-between">
                                        <button class="bg-primary rounded-circle btn-sm p-3 me-3">
                                            <img src="{{asset('/images/bnm/Rectangle-kiri.png')}}" alt="">
                                        </button>
                                        <button class="bg-primary rounded-circle btn-sm p-3">
                                            <img src="{{asset('/images/bnm/Rectangle-kanan.png')}}" alt="">
                                        </button>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- technical-section -->
    <section class="technical__section pt-5" id="technical">
        <div class="container-full">
            <div class="row g-0">
                <div class="col-md-1"></div>
                <div class="col-md-11">
                    <div class="row g-0">
                        <div class="col-md-3">
                            <h1 class="m-4-c">TECHNICAL</h1>
                        </div>
                        <div class="col-md-9">
                            <h1>WE OFFER ADJUSTABLE <br> PRODUCT SPECIFICATION</h1>

                            <p class="mt-5">
                                Each product type that we manufacture has certain <br> requirements that will meet the needs of our customers.
                            </p>
                        </div>
                        <div class="col-md-11">
                            <table class="table table-striped-columns">
                                <thead>
                                    <tr>
                                        <th scope="col">GRADE</th>
                                        <th scope="col">TEMPER</th>
                                        <th scope="col">HARDNESS <br> (HV) MAX</th>
                                        <th scope="col">YIELD <br> STRENGTH <br> (MPA) MIN</th>
                                        <th scope="col">TENSILE <br> STRENGTH <br> (MPA) MIN</th>
                                        <th scope="col">ELONGATION <br> (%) MIN</th>
                                        <th scope="col">WIDTH <br> RANGE <br> (MM) MAX</th>
                                        <th scope="col">THICKNESS <br> MAXMIN</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="cob">
                                        <th scope="row">SS 304</th>
                                        <td>Annealed</td>
                                        <td>200</td>
                                        <td>201</td>
                                        <td>501</td>
                                        <td>40</td>
                                        <td>500</td>
                                        <td>1.000.10</td>
                                    </tr>
                                    <tr class="cob">
                                        <th scope="row">SS 316</th>
                                        <td>Annealed</td>
                                        <td>200</td>
                                        <td>172</td>
                                        <td>471</td>
                                        <td>40</td>
                                        <td>500</td>
                                        <td>1.000.10</td>
                                    </tr>
                                    <tr class="cob">
                                        <th scope="row">SS 410</th>
                                        <td>Annealed</td>
                                        <td>200</td>
                                        <td>172</td>
                                        <td>402</td>
                                        <td>20</td>
                                        <td>500</td>
                                        <td>1.000.10</td>
                                    </tr>
                                    <tr class="cob">
                                        <th scope="row">SS 430</th>
                                        <td>Annealed</td>
                                        <td>200</td>
                                        <td>201</td>
                                        <td>441</td>
                                        <td>22</td>
                                        <td>500</td>
                                        <td>1.000.10</td>
                                    </tr>

                                </tbody>
                            </table>
                            <div>
                                <div class="d-flex end-table mt-5">
                                    <div class="ps-5">
                                        <h1 class="text-white table-caption">OTHER CAN BE DEFINED UPON REQUEST | SOFT PRODUCT</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





        </div>
        <div class="row mar-30">
            <div class="col-md-1"></div>
            <div class="col-md-11">
                <img src="{{asset('/images/bnm/Line-4.png')}}" alt="" class="img-fluid w-100">
            </div>
        </div>

    </section>
    <!-- end-technical-section -->

    <!-- news-section -->
    <section class="news__section pt-5" id="news">
        <div class="container-full">
            <div class="row g-0">
                <div class="col-md-1"></div>
                <div class="col-md-11">
                    <div class="row g-0">
                        <div class="col-md-3">
                            <h1 class="m-4-c">NEWS</h1>
                        </div>
                        <div class="col-md-6">
                            <h1>
                                OUR RECENT NEWS
                            </h1>
                            <p class="mt-5">
                                Bina Niaga Multiusaha brings you the most recent news, including fascinating facts about metals, the business industry, and other intriguing topics
                            </p>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </div>
            </div>

            <div class="container mt-5">
                <div class="d-flex flex-wrap justify-content-center">
                    <div class="card bg-dark text-white  news-card m-4 border border-white" style="width: 22rem;">
                        <img src="{{asset('/images/bnm/message-photo.png')}}" class="card-img img-fluid" alt="...">
                        <div class="card-img-overlay d-flex flex-column justify-content-end no-border">
                            <div class="news-desc container">
                                <h4 class="card-title">Lorem, ipsum.</h4>
                                <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi, quisquam?</p>
                                <div class="d-flex justify-content-between news-button">
                                    <p class="mb-0 mt-3">31 Jan 2022</p>
                                    <a href="" class="rounded-circle p-4">
                                        <img src="{{asset('/images/bnm/next.png')}}" alt="">
                                    </a>

                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="card bg-dark text-white  news-card m-4 border border-white" style="width: 22rem;">
                        <img src="{{asset('/images/bnm/message-photo.png')}}" class="card-img img-fluid" alt="...">
                        <div class="card-img-overlay d-flex flex-column justify-content-end no-border">
                            <div class="news-desc container">
                                <h4 class="card-title">Lorem, ipsum.</h4>
                                <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi, quisquam?</p>
                                <div class="d-flex justify-content-between news-button">
                                    <p class="mb-0 mt-3">31 Jan 2022</p>
                                    <a href="" class="rounded-circle p-4">
                                        <img src="{{asset('/images/bnm/next.png')}}" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card bg-dark text-white  news-card m-4 border border-white" style="width: 22rem;">
                        <img src="{{asset('/images/bnm/message-photo.png')}}" class="card-img img-fluid" alt="...">
                        <div class="card-img-overlay d-flex flex-column justify-content-end no-border">
                            <div class="news-desc container">
                                <h4 class="card-title">Lorem, ipsum.</h4>
                                <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi, quisquam?</p>
                                <div class="d-flex justify-content-between news-button">
                                    <p class="mb-0 mt-3">31 Jan 2022</p>
                                    <a href="" class="rounded-circle p-4">
                                        <img src="{{asset('/images/bnm/next.png')}}" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-dark text-white  news-card m-4 border border-white" style="width: 22rem;">
                        <img src="{{asset('/images/bnm/message-photo.png')}}" class="card-img img-fluid" alt="...">
                        <div class="card-img-overlay d-flex flex-column justify-content-end no-border">
                            <div class="news-desc container">
                                <h4 class="card-title">Lorem, ipsum.</h4>
                                <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi, quisquam?</p>
                                <div class="d-flex justify-content-between news-button">
                                    <p class="mb-0 mt-3">31 Jan 2022</p>
                                    <a href="" class="rounded-circle p-4">
                                        <img src="{{asset('/images/bnm/next.png')}}" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-dark text-white  news-card m-4 border border-white" style="width: 22rem;">
                        <img src="{{asset('/images/bnm/message-photo.png')}}" class="card-img img-fluid" alt="...">
                        <div class="card-img-overlay d-flex flex-column justify-content-end no-border">
                            <div class="news-desc container">
                                <h4 class="card-title">Lorem, ipsum.</h4>
                                <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi, quisquam?</p>
                                <div class="d-flex justify-content-between news-button">
                                    <p class="mb-0 mt-3">31 Jan 2022</p>
                                    <a href="" class="rounded-circle p-4">
                                        <img src="{{asset('/images/bnm/next.png')}}" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-dark text-white  news-card m-4 border border-white" style="width: 22rem;">
                        <img src="{{asset('/images/bnm/message-photo.png')}}" class="card-img img-fluid" alt="...">
                        <div class="card-img-overlay d-flex flex-column justify-content-end no-border">
                            <div class="news-desc container">
                                <h4 class="card-title">Lorem, ipsum.</h4>
                                <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi, quisquam?</p>
                                <div class="d-flex justify-content-between news-button">
                                    <p class="mb-0 mt-3">31 Jan 2022</p>
                                    <a href="" class="rounded-circle p-4">
                                        <img src="{{asset('/images/bnm/next.png')}}" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-dark text-white  news-card m-4 border border-white" style="width: 22rem;">
                        <img src="{{asset('/images/bnm/message-photo.png')}}" class="card-img img-fluid" alt="...">
                        <div class="card-img-overlay d-flex flex-column justify-content-end no-border">
                            <div class="news-desc container">
                                <h4 class="card-title">Lorem, ipsum.</h4>
                                <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi, quisquam?</p>
                                <div class="d-flex justify-content-between news-button">
                                    <p class="mb-0 mt-3">31 Jan 2022</p>
                                    <a href="" class="rounded-circle p-4">
                                        <img src="{{asset('/images/bnm/next.png')}}" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-dark text-white  news-card m-4 border border-white" style="width: 22rem;">
                        <img src="{{asset('/images/bnm/message-photo.png')}}" class="card-img img-fluid" alt="...">
                        <div class="card-img-overlay d-flex flex-column justify-content-end no-border">
                            <div class="news-desc container">
                                <h4 class="card-title">Lorem, ipsum.</h4>
                                <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi, quisquam?</p>
                                <div class="d-flex justify-content-between news-button">
                                    <p class="mb-0 mt-3">31 Jan 2022</p>
                                    <a href="" class="rounded-circle p-4">
                                        <img src="{{asset('/images/bnm/next.png')}}" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row mar-30">
            <div class="col-md-1"></div>
            <div class="col-md-11">
                <img src="{{asset('/images/bnm/Line-4.png')}}" alt="" class="img-fluid w-100">
            </div>
        </div>

    </section>
    <!-- end-news-section -->

    <!-- career-section -->
    <section class="career__section pt-5">
        <div class="container-full">
            <div class="row g-0">
                <div class="col-md-1"></div>
                <div class="col-md-11">
                    <div class="row g-0">
                        <div class="col-md-3">
                            <h1 class="m-4-c">CAREER</h1>
                        </div>
                        <div class="col-md-6">
                            <h1>WE INVITE YOU</h1>
                            <P class="mt-5">
                                We encourage the people who talented and have a professional experience in order to build and strengthen the credibility of individuals <br> and the company.
                            </P>
                            <div class="d-flex">
                                <button class="btn btn-white btn-lg d-block w-60">See Job Openings</button>
                            </div>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-0 mar-6">
            <div class="col-md-1"></div>
            <div class="col-md-11">
                <img src="{{asset('/images/bnm/Line-4.png')}}" alt="" class="img-fluid w-100">
            </div>
        </div>

    </section>
    <!-- end-career-section -->

    <!-- message-section -->
    <!-- <section class="message__section2 pt-5">
        <div class="position-relative">
            <div class="row g-0">
                <div class="col-7 kiri">
                    <div class="d-flex flex-column justify-content-center h-100">
                        <div class="d-flex justify-content-end margin-15">
                            <div class="card shadow-lg">
                                <div class="d-flex h-100">
                                    <div class="left w-50 p-3">
                                        <div class="container">
                                            <h1 class="mb-5 mt-3 fw-bold ">
                                                Send Message
                                            </h1>

                                            <form action="">
                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">Full Name</label>
                                                    <input type="text" class="form-control border-bottom" id="exampleInputEmail1">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleInputPassword1" class="form-label">Phone</label>
                                                    <input type="password" class="form-control border-bottom" id="exampleInputPassword1">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleInputPassword2" class="form-label">Email</label>
                                                    <input type="password" class="form-control border-bottom" id="exampleInputPassword2">
                                                </div>
                                            </form>

                                            <div class="d-flex justify-content-end border-bottom pb-2">
                                                <button class="border-0">
                                                    <img src="{{asset('/images/bnm/yesh-1.png')}}" alt="">
                                                </button>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="right w-50 p-3">
                                        <div class="container">
                                            <h1 class="fw-bold mb-5 mt-4 text-white">Contact Us</h1>

                                            <div class="d-flex">
                                                <div class="me-5">
                                                    <img src="{{asset('/images/bnm/location.png')}}" alt="">
                                                </div>

                                                <p class="text-white fs-5">
                                                    Kawasan Industri Jababeka Tahap 2 Jl. Industri Selatan 4, Blok PP-4 Lemahabang, Bekasi 17530 Indonesia
                                                </p>
                                            </div>
                                            <div class="d-flex">
                                                <div class="me-5">
                                                    <img src="{{asset('/images/bnm/phone.png')}}" alt="">
                                                </div>

                                                <p class="text-white fs-5">
                                                    (+62-21)89830472, 89830535
                                                </p>
                                            </div>
                                            <div class="d-flex">
                                                <div class="me-5">
                                                    <img src="{{asset('/images/bnm/fax.png')}}" alt="">
                                                </div>

                                                <p class="text-white fs-5">
                                                    (+62-21)8937635
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="col-4 g-0">
                    <img src="{{asset('/images/bnm/message-photo.png')}}" alt="" class="h-100">
                </div>
            </div>
            <div>

            </div>

        </div>

    </section> -->
    @include('components.sections.message_section')
    <!-- end-message-section -->

    @include('components.footer')
    @include('components.offcanvas')

   
</main>

<div class="show-btn d-flex justify-content-center">
    <!-- <input type="checkbox" id="show"> -->
    <div class="d-flex flex-column justify-content-center">
        <div>
            <img src="{{asset('/images/bnm/i-2.png')}}" alt="">
        </div>
    </div>
    <!-- <label for="show">
    </label> -->
</div>

<div class="show-box shadow-lg mb-2">
    <div class="container p-5">
        <p>
            Hello, how can we help you?
        </p>
        <p>
            Just send us a message
        </p>
        <div class="d-flex mt-5">
            <div class="bg-success rounded-circle p-2 me-4">
                <img src="{{asset('/images/bnm/twitter.png')}}" alt="">
            </div>
            <div class="bg-danger rounded-circle p-2 me-4">
                <img src="{{asset('/images/bnm/twitter.png')}}" alt="">
            </div>
            <div class="bg-warning rounded-circle p-2 me-4">
                <img src="{{asset('/images/bnm/twitter.png')}}" alt="">
            </div>
            <!-- <div class="bg-b rounded-circle p-2 me-4">
                <img src="{{asset('/images/bnm/twitter.png')}}" alt="">
            </div> -->

        </div>
    </div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script src="{{asset('/vendor/owlcarousel/dist/owl.carousel.min.js')}}"></script>

<script>
    $(document).ready(function() {
        $(".owl-carousel").owlCarousel({
            // margin: 10,
            loop: true,
            autoWidth: true,
            items: 4
        });
    });
    // $('#menu-hamburger').on('click', (e) => {
    //     e.preventDefault();
    //     let hamburger = $('div').find('.offcvs')
    //     $(hamburger).addClass('active')
    //     // if (hamburger) {
    //     //     // console.log("ada")
    //     //     $('.offcanvas').addClass('active')


    //     // } else {
    //     //     // console.log("ga ada")
    //     // }
    //     $('#close-offcvs').on('click',()=>{
    //         ('.black-cover').removeClass('active')
    //         $('html,body').css('overflow', 'auto')

    //     })

    //     $('.close-off').on('click', () => {
    //         e.preventDefault();
    //         let hamburger = $('div').find('.offcvs')
    //         $('.offcanvas').removeClass('active')
    //     })

    // })

    // $('.offcanvas').on('click', () => {
    //     $('.black-cover').addClass('active')
    //     $('html,body').css('overflow-y', 'hidden')

    // })

    // $('.btn-close').on('click', () => {
    //     $('html,body').css('overflow', 'auto')
    // })
</script>