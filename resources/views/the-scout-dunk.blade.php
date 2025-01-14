@extends('layouts.master')

@section('content')
    <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
        <div class="container">
            <div class="row">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-white font-weight-bold text-8">The Scout Dunk</h1>
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

                            <div class="post-image ms-0">
                                <img src="{{ asset('images/DUNK-1024x768.jpg') }}"
                                    class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                            </div>
                            <p class="text-dark text-justify text-4">One of unique creations of the 16th Colombo Scout Troop
                                is unarguably the “Dreaded Dunk” –
                                quite an interesting “game” for all your occasions – fairs, festivals, outdoor adventure
                                activities, parties etc.
                            </p>

                            <p class="text-dark text-justify text-4">The “Dreaded Dunk” was first tried out by the Troop for
                                the “April Rhythms 1997” – A charity
                                fund-raiser project organised by the Girl Guides of Colombo. The initiative was a great
                                success, and the Troop continued to develop and come up with even more engaging and
                                intriguing mechanisms for the Dunk. From thereon, the “Scout Dunk” has been a major
                                attraction of all the main functions of College, charity programmes in the vicinity and
                                other major activities carried out by various entities.</p>

                            <p class="text-dark text-justify text-4">If you wish to request the Dunk for your event please
                                go through the Terms and Conditions
                                mentioned below, and send a request by filling the online form at</p>


                            <br>
                            <h4 class="font-weight-semi-bold text-center">-Terms & Conditions-</h4>

                            <div class="col-md-12 align-self-center p-static order-2 text-center">

                                <div class="responsive-iframe">

                                    <iframe src="{{ asset('scout_docs/SCOUT-DUNK-REQUISITION-FORM.pdf') }}" width="800"
                                        height="480" allow="autoplay"></iframe>
                                </div>
                            </div>



                        </div>
                    </article>

                </div>
            </div>
        </div>

    </div>
@endsection
