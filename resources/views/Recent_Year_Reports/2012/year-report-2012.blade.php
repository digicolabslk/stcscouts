@extends('layouts.master')

@section('content')
    <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
        <div class="container">
            <div class="row">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-white font-weight-bold text-8">YEAR REPORT – 2012 (THE CENTENARY YEAR)</h1>
                    {{-- <span class="sub-title text-white">Check out our Latest News!</span> --}}
                </div>

            </div>
        </div>
    </section>

    <div class="container py-4">

        <div class="row">
            <div class="col">
                <div class="blog-posts single-post">

                    <article class="post post-large blog-single-post border-0 m-0 p-0">



                        <div class="post-content ms-0">

                            {{-- <h4 class="font-weight-semi-bold">Post-war Scouting: 1946-1968:</h4> --}}

                            <div class="col-md-12 align-self-center p-static order-2 text-center">
                                <img src="{{ asset('images\2012\TROOP-PHOTO.jpg') }}"
                                    class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="TROOP-PHOTO" />
                            </div>





                            <br>
                            <br>
                            <div class="col-md-12 align-self-center p-static order-2 text-center">
                                <div style="text-align: left;">
                                    <a href="your-link-here.html" class="read-more-link">
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Click here to open “Centennial Flames 2012 –
                                        Report”
                                    </a>
                                </div>
                                <br>


                                <div class="col-md-12 align-self-center p-static order-2 text-center">
                                    <img src="{{ asset('images\2012\new1.jpg') }}"
                                        class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="new1.jpg" />
                                </div>

                            </div>


                            <div class="col-md-12 align-self-center p-static order-2 text-center">
                                <img src="{{ asset('images\2012\new2.jpg') }}"
                                    class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="new2.jpg" />
                            </div>

                        </div>


                        <div class="col-md-12 align-self-center p-static order-2 text-center">
                            <img src="{{ asset('images\2012\new4.jpg') }}"
                                class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="new4" />
                        </div>

                </div>

                <br>
                <br>
                <p class="text-dark text-justify text-4 text-center ">
                    <span class="font-weight"> The 49<sup>th</sup>Colombo Scout Camporee Video:
                </p>
                <br>

                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <iframe width="952" height="535" src="https://www.youtube.com/embed/PXDTDYgEJZ0"
                        title="49th Colombo Scout Camporee 2012 - 16th Colombo Scout Troop" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                    </iframe>


                    <div class="col-md-12 align-self-center p-static order-2 text-center">
                        <img src="{{ asset('images\2012\new5.jpg') }}"
                            class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="new5" />

                    </div>


                    <div class="col-md-12 align-self-center p-static order-2 text-center">
                        <img src="{{ asset('images\2012\pics.jpg') }}"
                            class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="pics" />

                    </div>

                </div>
                <br>

                </article>

            </div>
        </div>
    </div>

    </div>
@endsection
