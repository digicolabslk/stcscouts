@extends('layouts.master')

@section('content')
    <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
        <div class="container">
            <div class="row">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-white font-weight-bold text-8">MR. W.I. MUTTIAH</h1>
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

                            <h4 class="font-weight-semi-bold">MEN OF HONOUR</h4>

                            <div class="col-md-12 align-self-center p-static order-2 text-center">
                                <img src="{{ asset('images/Mr-WI-Muttiah.jpg') }}"
                                    class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                            </div>

                            <br>
                            <p class="text-dark text-justify text-4">Remembering the 1940’s at S. Thomas’ College, Mount
                                Lavinia, brings to mind an outstanding personality of that era – Wilson I. Muthiah. He was
                                an excellent Scoutmaster, a dedicated teacher and a fine gentleman with a quiet sense of
                                humour. His life centred around his teaching, his scouting and the care of his elderly, sick
                                mother; in the furtherance of these vocational tasks he remained a bachelor throughout.
                                Wilson I. Muthiah (affectionately known as “WIM”) was Scoutmaster of the then 16th Colombo
                                Scout Troop based at S.T.C. and he cared for and nurtured this troop with great skill and
                                compassion. He left an indelible impression on every young Scout who was fortunate to be a
                                member of the 16th Colombo.</p>

                            <p class="text-dark text-justify text-4">He built up their characters and imparted to them
                                life-skills, self-confidence and the ability to communicate effectively. He achieved these
                                ends both by routine Scouting activities and also through the production of regular concerts
                                and the publication of a Troop magazine. The concerts were always a sell out, featuring
                                humorous skits and lilting musicals, the scripts and scores which he wrote himself. With
                                this background, former Scouts went onto play lead roles in university dramatics and one
                                became an acclaimed international entertainer. A patrol leader became Head Prefect and
                                another became the Editor of the College Magazine. Former Scouts have distinguished
                                themselves in diverse fields as leaders in the medical profession, company directors,
                                successful bankers and a variety of other roles. We all owe Wilson I. Muthiah a deep debt of
                                gratitude.</p>



                            <span class="float-end">
                                <p class="text-dark text-4 float-end"><b>-A Scout-</b></p>
                                <br>
                                <p class="text-dark text-4 float-end"><b>Extracted from “The Old Boy” Magazine –
                                        31.12.2006</b></p>
                            </span>
                        </div>
                        
                    </article>

                </div>
            </div>
        </div>

    </div>
@endsection
