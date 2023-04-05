@extends('client.layouts.app')

@section('title', 'Career')
@section('container')

<!-- header -->
<header class="position-relative career">
    <!-- import component navbar -->
    @include('client.components.navbar')
    <img src="{{asset('/images/bnm/career/purple.png')}}" alt="" style="width: 100%;object-fit: cover;" class="h-100 forDesktop">
    <img src="{{asset('/images/bnm/career/purple.png')}}" alt="" style="width: 100%;height:21vh;" class="banner-img forMobile">
    <div class="desc-first news">
        <h1>CAREER</h1>
    </div>


</header>
<!-- end header -->
<main id="career" page="career">
    <!-- career-section -->
    <div class="mt-5">
        @include('client.components.sections.career_section')
    </div>
    <!-- end-career-section -->
    
    <section class="job__section">
        <div class="container-full">
            <div class="container mb-5 forDesktop">
                <h1>
                    CURRENT OPENING
                </h1>
            </div>

            <div class="container mb-5 px-5 forMobile bg-special">
                <h1 class="py-5">
                    CURRENT OPENING
                </h1>
            </div>
            <div class="tableFull forDesktop">
                <div class="container">
                    <table class="table table-xl" id="jobtable">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Job Title</th>
                                <th scope="col">Department</th>
                                <th scope="col">Location</th>
                                <th scope="col">Employment Type</th>
                                <th scope="col">Job Post on</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr data-position="marketing">
                                <td>Marketing Staff</td>
                                <td>Marketing</td>
                                <td>Bekasi</td>
                                <td>Probation</td>
                                <td>Aug 23,2022</td>
                            </tr>
                            <tr data-position="engineer">
                                <td>Engineer</td>
                                <td>Engineer</td>
                                <td>Bekasi</td>
                                <td>Probation</td>
                                <td>Aug 23,2022</td>
                            </tr>
                            <tr data-position="QC Supervisor">
                                <td>QC Supervisor</td>
                                <td>Production</td>
                                <td>Bekasi</td>
                                <td>Probation</td>
                                <td>Aug 23,2022</td>
                            </tr>
                            <tr data-position="Marketing Development Support">
                                <td>Marketing Development Support</td>
                                <td>Marketing</td>
                                <td>Bekasi</td>
                                <td>Probation</td>
                                <td>Aug 23,2022</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="px-5 job-mobile forMobile">
                <div class="job-list py-5 border-bottom">
                    <h3 class="job-position" data-position="marketing">
                        Marketing Staff &nbsp; | Bekasi
                    </h3>
                    <h3>
                        Employment Type : <u>Probation</u>
                    </h3>
                    <p>
                        Aug 23, 2022
                    </p>

                </div>
                <div class="job-list py-5 border-bottom">
                    <h3 class="job-position" data-position="engineer">
                        Marketing Staff &nbsp; | Bekasi
                    </h3>
                    <h3>
                        Employment Type : <u>Probation</u>
                    </h3>
                    <p>
                        Aug 23, 2022
                    </p>

                </div>
                <div class="job-list py-5 border-bottom" data-position="QC Supervisor">
                    <h3 class="job-position">
                        Marketing Staff &nbsp; | Bekasi
                    </h3>
                    <h3>
                        Employment Type : <u>Probation</u>
                    </h3>
                    <p>
                        Aug 23, 2022
                    </p>

                </div>
                <div class="job-list py-5 border-bottom" data-position="Marketing Development Support">
                    <h3 class="job-position">
                        Marketing Staff &nbsp; | Bekasi
                    </h3>
                    <h3>
                        Employment Type : <u>Probation</u>
                    </h3>
                    <p>
                        Aug 23, 2022
                    </p>

                </div>
                <div class="job-list py-5 border-bottom" data-position="Marketing Development Support">
                    <h3 class="job-position">
                        Marketing Staff &nbsp; | Bekasi
                    </h3>
                    <h3>
                        Employment Type : <u>Probation</u>
                    </h3>
                    <p>
                        Aug 23, 2022
                    </p>

                </div>
                <div class="job-list py-5 border-bottom" data-position="Marketing Development Support">
                    <h3 class="job-position">
                        Marketing Staff &nbsp; | Bekasi
                    </h3>
                    <h3>
                        Employment Type : <u>Probation</u>
                    </h3>
                    <p>
                        Aug 23, 2022
                    </p>

                </div>
            </div>



    </section>
    <div class="d-flex justify-content-center mx-auto">
        <div>
            <nav aria-label="Page navigation example border-bottom">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                </ul>
            </nav>
        </div>

    </div>

    <!-- import component message-section -->
    <div id="contacts">
        @include('client.components.sections.message_section')
    </div>
    <!-- end component message-section -->

    <!-- popup specification -->
    <div class="popupCareer">
        <div class="body forDesktop">
            <div class="d-flex justify-content-center popSlider">
                <div class="w-75 bg-white pb-5 popupCareer">
                    <div class="d-flex justify-content-end border-bottom">
                        <div class="mb-5 close-popupCareer">
                            <img src="{{asset('/images/bnm/close-orange.png')}}" alt="">
                        </div>
                    </div>
                    <div class="row gx-0">
                        <div class="col-md-1"></div>
                        <div class="col-md-11">
                            <h1>
                                MARKETING STAFF
                            </h1>
                            <div class="row gx-0 mb-5">
                                <div class="col-md-8 mt-3">
                                    <div class="row gx-0">
                                        <div class="col-md-4">
                                            <h3>
                                                Department
                                            </h3>
                                            <p>
                                                Marketing
                                            </p>
                                            <h3>
                                                Location
                                            </h3>
                                            <p>
                                                Bekasi
                                            </p>

                                            <h3>
                                                Employment Type
                                            </h3>
                                            <p>
                                                Probation
                                            </p>
                                            <h3>
                                                Job Posted On
                                            </h3>
                                            <p>
                                                August 23,2022
                                            </p>
                                        </div>
                                        <div class="col-md-7">
                                            <h3 id="p-title">Requirement
                                            </h3>
                                            <!-- <div id="p-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, quo saepe autem voluptatum obcaecati laborum illum. Eaque vero doloribus debitis omnis dicta ex, doloremque nobis cum soluta? Voluptate minus saepe esse, eligendi asperiores sunt nulla, dolorem enim ipsa sit ad distinctio reprehenderit officia delectus nemo explicabo numquam! Est, iste totam.
                                            </div> -->
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta nulla quam aperiam totam dolores vero deleniti voluptatibus sed explicabo minus, nisi consequatur ex tenetur, nihil iure labore nemo repellat distinctio quo autem aspernatur in ipsa? Dolorem ex quaerat autem nemo, nihil ea explicabo cum voluptatibus iure voluptate perspiciatis sequi voluptatum?
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-3">
                                    <img src="{{asset('/images/bnm/header/head-1.jpg')}}" alt="" class="w-75" id="p-img">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="body forMobile">
            <div class="d-flex justify-content-center popSlider">
                <div class="w-75 bg-white pt-3 popupCareer">
                    <div class="p-5">
                        <div class="d-flex justify-content-between border-bottom" style="height: 6%;">
                            <div class="d-flex flex-column justify-content-end">
                                <p>
                                    August 23,2022
                                </p>
                            </div>
                            <div class="mb-5 close-popupCareer">
                                <img src="{{asset('/images/bnm/close-orange.png')}}" alt="">
                            </div>
                        </div>
                        <div class="row gx-0">
                            <div class="col-md-1"></div>
                            <div class="col-md-11">
                                <h1>
                                    MARKETING STAFF
                                </h1>
                                <p>
                                    BEKASI | Employment Type : <u>Probation</u>
                                </p>

                                <div class="mt-5">
                                    <h3>
                                        Requirement
                                    </h3>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia eos optio a illum quibusdam obcaecati facere, quisquam molestias asperiores autem natus quis fuga, temporibus, nam animi quas accusamus nostrum? Sunt magnam cum, qui, perspiciatis repellendus tempora quidem officiis earum mollitia fugit nihil culpa atque! Accusantium rerum beatae neque quidem nihil?
                                    </p>

                                    <h3 class="mt-4">
                                        Send CV to : <br>
                                        hrd@binaniagamultiusaha.co.id
                                    </h3>

                                </div>
                            </div>
                        </div>
                    </div>
                    <img src="{{asset('/images/bnm/components/career_section/gmbr1.png')}}" alt="" class="w-100 h-50 mobile-img" id="p-img">
                </div>
            </div>
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
    <!-- end popup specification -->
    <div class="black-cover"></div>

    @include('client.components.search')
    
    
    @include('client.components.offcanvas2')
    @include('client.components.footer')
</main>
@endsection