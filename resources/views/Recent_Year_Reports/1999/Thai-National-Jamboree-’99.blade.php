@extends('layouts.master')

@section('content')
    <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
        <div class="container">
            <div class="row">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-white font-weight-bold text-8">3<sup>RD</sup> NATIONAL JAMBOREE – THAILAND</h1>
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


                            <p class="text-dark text-center" style="white-space: nowrap; font-size: 12px;">
                             <span class="font-weight-semi-bold">
                            Few of our Scouts had the opportunity to take part in the 3<sup>rd</sup> National Jamboree of Thailand, held in December 1999. The following is a log of the Jamboree:
                             </span>
                           </p>


                                 

                           
                             <div class="col-md-12 align-self-center p-static order-2 text-center">
                                <img src="{{ asset('images\1999\thai-photo-fin.jpg') }}"
                                    class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0"
                                    alt="thai-photo-fin.jpg" />
                                    
                            </div>


                             <div class="col-md-12 align-self-center p-static order-2 text-center">
                                <img src="{{ asset('images\1999\Full-doc_jamboree_thai.jpg') }}"
                                    class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0"
                                    alt="Full-doc_jamboree_thai.jpg" />
                                    
                            </div>


                             


                            
                        </div>
                        <br>

                    </article>

                </div>
            </div>
        </div>

    </div>
@endsection
