@extends('layouts.master')

@section('content')
    <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
        <div class="container">
            <div class="row">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-white font-weight-bold text-8">International Achievement</h1>
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

                        
                             <div style="text-align: center;">
                              <span style="text-decoration:underline; color:black;">
                              5<sup>th</sup> Asia-Pacific Regional Award for Most Outstanding Scouts – 2012
                               </span>
                             </div>


                             <br>
                            <center>
                                <a href="your-link-here.html" class="read-more-link">
                                    Click here to open Gallery
                                </a>
                            </center>
                             <br>
                             <br>


                              <p class="text-dark text-justify text-4">Troop Leader of the 16<sup>th</sup> Colombo Scout Troop of
                                 S. Thomas’ College, Mount Lavinia and President’s Scout S.C. Gajanayaka was selected to the 
                                 top 5 finalists of the 5<sup>th</sup> Asia Pacific Regional Award for Outstanding Scouts. He represented
                                  Sri Lanka at the 24<sup>th</sup> Asia Pacific Regional Scout Conference held in Dhaka, Bangladesh from 
                                  the 24<sup>th</sup> to the 29<sup>th</sup> of November 2012. The final interview was held at this conference and 
                                  S.C. Gajanayaka was adjudged Runner Up at the competition. The Asia Pacific Region consists 
                                  of 24 countries with a total of 17 million Scouts. The award was presented by His Excellency 
                                  the Vice President of the Republic of Philippines, Hon.  Jejomar C. Binay.
                              </p>

                               <br>
                             <div class="col-md-12 align-self-center p-static order-2 text-center">
                                <img src="{{ asset('images\2012\Accepting-the-Award-1024x673.jpg') }}"
                                    class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0"
                                    alt="Accepting-the-Award-1024x673" />
                                 
                             </div> 

                            <br>
                             <div style="text-align: center;">
                              <span style="text-decoration; color:black;">
                               -Accepting the Award-
                               </span>
                             </div>
                              <br>



                             <div class="col-md-12 align-self-center p-static order-2 text-center">
                                <img src="{{ asset('images\2012\THE-WINNERS.jpg') }}"
                                    class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0"
                                    alt="THE-WINNERS" />
                                 
                             </div> 


                              <br>
                             <div style="text-align: center;">
                              <span style="text-decoration; color:black;">
                               -The Winners-
                               </span>
                             </div>
                              <br>
                             


                             <div class="col-md-12 align-self-center p-static order-2 text-center">
                                <img src="{{ asset('images\2012\Newspaper_Extract-667x1024.jpg') }}"
                                    class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0"
                                    alt="Newspaper_Extract-667x1024" />
                                 
                             </div> 

                

                           
                            
                        </div>
                        <br>

                    </article>

                </div>
            </div>
        </div>

    </div>
@endsection
