@extends('layouts.master')

@section('content')
    <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
        <div class="container">
            <div class="row">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-white font-weight-bold text-8">Photo Gallery</h1>
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

                            
                            <iframe 
                            src="https://drive.google.com/embeddedfolderview?id=1zXNyryEOXDCkS8AW1SEZvrludyRxQCTT#grid" 
                            width="100%" 
                            height="600" 
                            frameborder="0">
                        </iframe>
                        
                        </div>
                    </article>

                </div>
            </div>
        </div>

    </div>
@endsection
