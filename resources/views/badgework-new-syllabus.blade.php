@extends('layouts.master')


@section('content')
    <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
        <div class="container">
            <div class="row">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-white font-weight-bold text-8">Badgework New-Syllabus</h1>
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

                            <h4 class="font-weight-semi-bold text-center">-Download Zone for all notes related to the
                                Badgework Syllabus set out for Scouts
                                (For the syllabus effective from 2015)-</h4>

                            <p class="text-dark text-center text-4">National Scout Membership Badge – <a
                                    href="https://drive.usercontent.google.com/download?id=1FCvNHfd55uvj-JHs7nt61R_kjvA587kn&export=download&authuser=0"
                                    target="_blank">Download</a>
                            </p>
                            <div class="col-md-12 align-self-center p-static order-2 text-center">
                                <div class="responsive-iframe">

                                    <iframe src="https://drive.google.com/file/d/1FCvNHfd55uvj-JHs7nt61R_kjvA587kn/preview"
                                        width="800" height="480" allow="autoplay"></iframe>
                                </div>
                            </div>

                            <br>
                            <br>

                            <p class="text-dark text-center text-4">Scout Master’s Award –<a
                                    href="https://drive.usercontent.google.com/download?id=15_0jf29lmYoufmzVNq865N42oRCQ0xIc&export=download&authuser=0"
                                    target="_blank">Download</a>
                            </p>
                            <div class="col-md-12 align-self-center p-static order-2 text-center">
                                <div class="responsive-iframe">

                                    <iframe src="https://drive.google.com/file/d/15_0jf29lmYoufmzVNq865N42oRCQ0xIc/preview"
                                        width="800" height="480" allow="autoplay"></iframe>
                                </div>
                            </div>

                            <br>
                            <br>

                            <p class="text-dark text-center text-4">Group Scout Master’s Award –<a
                                    href="https://drive.usercontent.google.com/download?id=1IsOzsBtxgpW2U2oGMh2qVYk2nzfkpguJ&export=download&authuser=0"
                                    target="_blank">Download</a>
                            </p>
                            <div class="col-md-12 align-self-center p-static order-2 text-center">
                                <div class="responsive-iframe">

                                    <iframe src="https://drive.google.com/file/d/1IsOzsBtxgpW2U2oGMh2qVYk2nzfkpguJ/preview"
                                        width="800" height="480" allow="autoplay"></iframe>
                                </div>
                            </div>


                            <br>
                            <br>

                            <p class="text-dark text-center text-4">District Commissioner’s Award –<a
                                    href="https://drive.usercontent.google.com/download?id=1sbB7nGguhrumFvMp0QOXnKSwhOduTT_K&export=download&authuser=0"
                                    target="_blank">Download</a>
                            </p>
                            <div class="col-md-12 align-self-center p-static order-2 text-center">

                                <div class="responsive-iframe">

                                    <iframe src="https://drive.google.com/file/d/1sbB7nGguhrumFvMp0QOXnKSwhOduTT_K/preview"
                                        width="800" height="480" allow="autoplay"></iframe>
                                </div>
                            </div>



                        </div>


                        <br>
                        <br>

                        <div class="col-md-12 align-self-center p-static order-2 text-center">

                            <p class="text-dark text-center text-4">Please note that all the following documents are
                                extracts of the book titled “THE YOUTH PROGRAMME” published by the Sri Lanka Scout
                                Association:</p>
                        </div>

                        <br>
                        <br>
                        <p class="text-dark text-center text-4">Chief Commissioner’s Award –<a
                                href="{{ asset('scout_docs/Chief-Commissioners-Award.pdf') }}" target="_blank">Download</a>

                        </p>
                        <div class="col-md-12 align-self-center p-static order-2 text-center">

                            <div class="responsive-iframe">

                                <iframe src="{{ asset('scout_docs/CHIEF-COMMISSIONERS-AWARD.pdf') }}" width="800"
                                    height="480" allow="autoplay"></iframe>
                            </div>
                        </div>

                        <br>
                        <br>
                        <p class="text-dark text-center text-4">President’s Award  –<a
                                href="{{ asset('scout_docs/PRESIDENTS-AWARD.pdf') }}" target="_blank">Download</a>

                        </p>
                        <div class="col-md-12 align-self-center p-static order-2 text-center">

                            <div class="responsive-iframe">

                                <iframe src="{{ asset('scout_docs/PRESIDENTS-AWARD.pdf') }}" width="800"
                                    height="480" allow="autoplay"></iframe>
                            </div>
                        </div>
                    </article>

                </div>
            </div>
        </div>

    </div>

    <style>
        .responsive-iframe {
            position: relative;
            width: 100%;
            /* Full width */
            padding-top: 56.25%;
            /* Aspect ratio 16:9 */
            overflow: hidden;
        }

        .responsive-iframe iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 0;
        }
    </style>
@endsection
