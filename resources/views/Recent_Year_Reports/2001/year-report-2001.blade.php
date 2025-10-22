@extends('layouts.master')

@section('content')
    <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
        <div class="container">
            <div class="row">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-white font-weight-bold text-8">Year Report - 2001</h1>
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

                          
                                    

                             <br>
                               <center>
                               <a href="your-link-here.html" class="read-more-link">
                               Click here to view the Gallery for Year 2001
                               </a>
                               </center>
                               <br>
                                 

                           
                             <div class="col-md-12 align-self-center p-static order-2 text-center">
                                <img src="{{ asset('images\2001\Officials2.jpg') }}"
                                    class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0"
                                    alt="Officials2" />
                                    
                            </div>


                             <div class="col-md-12 align-self-center p-static order-2 text-center">
                                <img src="{{ asset('images\2001\Page-1.jpg') }}"
                                    class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0"
                                    alt="Page-1" />
                                    
                            </div>


                             <div class="col-md-12 align-self-center p-static order-2 text-center">
                                <img src="{{ asset('images\2001\Page-21.jpg') }}"
                                    class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0"
                                    alt="Page-21" />
                                    
                            </div>


                            
                        </div>
                        <br>

                    </article>

                </div>
            </div>
        </div>

    </div>
@endsection
