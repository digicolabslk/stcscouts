@extends('layouts.main_template')

@section('body_content')
    <div role="main" class="main">
        <section class="page-header page-header-modern bg-color-grey page-header-lg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 align-self-center p-static order-2 text-center">
                        <h1 class="font-weight-bold text-dark">Sitemap</h1>
                    </div>
                    <div class="col-md-12 align-self-center order-1">
                        <ul class="breadcrumb d-block text-center">
{{--                            Need to be fixed - 1-7-2024 --}}
                            <li><a href="#">Home</a></li>
                            <li class="active">Pages</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <div class="container py-4">
            <div class="row">
                <div class="col-sm-3">
                    <h3 class="font-weight-bold text-4 mb-2">HOME</h3>
                    <ul class="list list-icons list-icons-sm mb-4">
                        <li><a href="index.html"><i class="far fa-file"></i>Landing Page</a></li>
                        <li>
                            <h4 class="font-weight-bold text-3 mb-1 mt-2">Classic</h3>
                                <ul class="list list-icons list-icons-sm mb-3 text-2">
                                    <li><a href="index-classic.html"><i class="far fa-file"></i>Classic - Original</a></li>
                                    <li><a href="index-classic-color.html"><i class="far fa-file"></i>Classic - Color</a></li>
                                    <li><a href="index-classic-light.html"><i class="far fa-file"></i>Classic - Light</a></li>
                                    <li><a href="index-classic-video.html"><i class="far fa-file"></i>Classic - Video</a></li>
                                    <li><a href="index-classic-video-light.html"><i class="far fa-file"></i>Classic - Video - Light</a></li>
                                </ul>
                        </li>
                        <li>
                            <h4 class="font-weight-bold text-3 mb-1 mt-2">Corporate</h3>
                                <ul class="list list-icons list-icons-sm mb-3 text-2">
                                    <li><a href="index-corporate.html"><i class="far fa-file"></i>Corporate - Version 1</a></li>
                                    <li><a href="index-corporate-2.html"><i class="far fa-file"></i>Corporate - Version 2</a></li>
                                    <li><a href="index-corporate-3.html"><i class="far fa-file"></i>Corporate - Version 3</a></li>
                                    <li><a href="index-corporate-4.html"><i class="far fa-file"></i>Corporate - Version 4</a></li>
                                    <li><a href="index-corporate-5.html"><i class="far fa-file"></i>Corporate - Version 5</a></li>
                                    <li><a href="index-corporate-6.html"><i class="far fa-file"></i>Corporate - Version 6</a></li>
                                    <li><a href="index-corporate-7.html"><i class="far fa-file"></i>Corporate - Version 7</a></li>
                                    <li><a href="index-corporate-8.html"><i class="far fa-file"></i>Corporate - Version 8</a></li>
                                    <li><a href="index-corporate-9.html"><i class="far fa-file"></i>Corporate - Version 9</a></li>
                                    <li><a href="index-corporate-10.html"><i class="far fa-file"></i>Corporate - Version 10</a></li>
                                    <li><a href="index-corporate-11.html"><i class="far fa-file"></i>Corporate - Version 11</a></li>
                                    <li><a href="index-corporate-12.html"><i class="far fa-file"></i>Corporate - Version 12</a></li>
                                    <li><a href="index-corporate-13.html"><i class="far fa-file"></i>Corporate - Version 13</a></li>
                                    <li><a href="index-corporate-14.html"><i class="far fa-file"></i>Corporate - Version 14</a></li>
                                </ul>
                        </li>
                        <li>
                            <h4 class="font-weight-bold text-3 mb-1 mt-2">One Page</h3>
                                <ul class="list list-icons list-icons-sm mb-3 text-2">
                                    <li><a href="index-one-page.html"><i class="far fa-file"></i>One Page Original</a></li>
                                </ul>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h3 class="font-weight-bold text-4 mb-2">ELEMENTS</h3>
                    <ul class="list list-icons list-icons-sm mb-4">
                        <li>
                            <h4 class="font-weight-bold text-3 mb-1 mt-2">Elements 1</h3>
                                <ul class="list list-icons list-icons-sm mb-3 text-2">
                                    <li><a href="elements-accordions.html"><i class="far fa-file"></i>Accordions</a></li>
                                    <li><a href="elements-toggles.html"><i class="far fa-file"></i>Toggles</a></li>
                                    <li><a href="elements-tabs.html"><i class="far fa-file"></i>Tabs</a></li>
                                    <li><a href="elements-icons.html"><i class="far fa-file"></i>Icons</a></li>
                                    <li><a href="elements-icon-boxes.html"><i class="far fa-file"></i>Icon Boxes</a></li>
                                    <li><a href="elements-carousels.html"><i class="far fa-file"></i>Carousels</a></li>
                                    <li><a href="elements-modals.html"><i class="far fa-file"></i>Modals</a></li>
                                    <li><a href="elements-lightboxes.html"><i class="far fa-file"></i>Lightboxes</a></li>
                                </ul>
                        </li>
                        <li>
                            <h4 class="font-weight-bold text-3 mb-1 mt-2">Elements 2</h3>
                                <ul class="list list-icons list-icons-sm mb-3 text-2">
                                    <li><a href="elements-buttons.html"><i class="far fa-file"></i>Buttons</a></li>
                                    <li><a href="elements-badges.html"><i class="far fa-file"></i>Badges</a></li>
                                    <li><a href="elements-lists.html"><i class="far fa-file"></i>Lists</a></li>
                                    <li><a href="elements-image-gallery.html"><i class="far fa-file"></i>Image Gallery</a></li>
                                    <li><a href="elements-image-frames.html"><i class="far fa-file"></i>Image Frames</a></li>
                                    <li><a href="elements-testimonials.html"><i class="far fa-file"></i>Testimonials</a></li>
                                    <li><a href="elements-blockquotes.html"><i class="far fa-file"></i>Blockquotes</a></li>
                                    <li><a href="elements-word-rotator.html"><i class="far fa-file"></i>Word Rotator</a></li>
                                </ul>
                        </li>
                        <li>
                            <h4 class="font-weight-bold text-3 mb-1 mt-2">Elements 3</h3>
                                <ul class="list list-icons list-icons-sm mb-3 text-2">
                                    <li><a href="elements-call-to-action.html"><i class="far fa-file"></i>Call to Action</a></li>
                                    <li><a href="elements-pricing-tables.html"><i class="far fa-file"></i>Pricing Tables</a></li>
                                    <li><a href="elements-tables.html"><i class="far fa-file"></i>Tables</a></li>
                                    <li><a href="elements-progressbars.html"><i class="far fa-file"></i>Progress Bars</a></li>
                                    <li><a href="elements-counters.html"><i class="far fa-file"></i>Counters</a></li>
                                    <li><a href="elements-sections.html"><i class="far fa-file"></i>Sections</a></li>
                                    <li><a href="elements-tooltips-popovers.html"><i class="far fa-file"></i>Tooltips &amp; Popovers</a></li>
                                    <li><a href="elements-sticky-elements.html"><i class="far fa-file"></i>Sticky Elements</a></li>
                                </ul>
                        </li>
                        <li>
                            <h4 class="font-weight-bold text-3 mb-1 mt-2">Elements 4</h3>
                                <ul class="list list-icons list-icons-sm mb-3 text-2">
                                    <li><a href="elements-headings.html"><i class="far fa-file"></i>Headings</a></li>
                                    <li><a href="elements-dividers.html"><i class="far fa-file"></i>Dividers</a></li>
                                    <li><a href="elements-animations.html"><i class="far fa-file"></i>Animations</a></li>
                                    <li><a href="elements-medias.html"><i class="far fa-file"></i>Medias</a></li>
                                    <li><a href="elements-maps.html"><i class="far fa-file"></i>Maps</a></li>
                                    <li><a href="elements-arrows.html"><i class="far fa-file"></i>Arrows</a></li>
                                    <li><a href="elements-alerts.html"><i class="far fa-file"></i>Alerts</a></li>
                                    <li><a href="elements-posts.html"><i class="far fa-file"></i>Posts</a></li>
                                </ul>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h3 class="font-weight-bold text-4 mb-2">PAGES</h3>
                    <ul class="list list-icons list-icons-sm mb-4">
                        <li>
                            <h4 class="font-weight-bold text-3 mb-1 mt-2">Contact Us</h3>
                                <ul class="list list-icons list-icons-sm mb-3 text-2">
                                    <li><a href="contact-us-advanced.php"><i class="far fa-file"></i>Contact Us - Advanced</a></li>
                                    <li><a href="contact-us.html"><i class="far fa-file"></i>Contact Us - Basic</a></li>
                                    <li><a href="contact-us-recaptcha.html"><i class="far fa-file"></i>Contact Us - Recaptcha</a></li>
                                </ul>
                        </li>
                        <li>
                            <h4 class="font-weight-bold text-3 mb-1 mt-2">About Us</h3>
                                <ul class="list list-icons list-icons-sm mb-3 text-2">
                                    <li><a href="about-us-advanced.html"><i class="far fa-file"></i>About Us - Advanced</a></li>
                                    <li><a href="about-us.html"><i class="far fa-file"></i>About Us - Basic</a></li>
                                    <li><a href="about-me.html"><i class="far fa-file"></i>About Me</a></li>
                                </ul>
                        </li>
                        <li>
                            <h4 class="font-weight-bold text-3 mb-1 mt-2">Layouts</h3>
                                <ul class="list list-icons list-icons-sm mb-3 text-2">
                                    <li><a href="page-full-width.html"><i class="far fa-file"></i>Full Width</a></li>
                                    <li><a href="page-left-sidebar.html"><i class="far fa-file"></i>Left Sidebar</a></li>
                                    <li><a href="page-right-sidebar.html"><i class="far fa-file"></i>Right Sidebar</a></li>
                                    <li><a href="page-left-and-right-sidebars.html"><i class="far fa-file"></i>Left and Right Sidebars</a></li>
                                    <li><a href="page-sticky-sidebar.html"><i class="far fa-file"></i>Sticky Sidebar</a></li>
                                    <li><a href="page-secondary-navbar.html"><i class="far fa-file"></i>Secondary Navbar</a></li>
                                </ul>
                        </li>
                        <li>
                            <h4 class="font-weight-bold text-3 mb-1 mt-2">Extra</h3>
                                <ul class="list list-icons list-icons-sm mb-3 text-2">
                                    <li><a href="page-404.html"><i class="far fa-file"></i>404 Error</a></li>
                                    <li><a href="page-coming-soon.html"><i class="far fa-file"></i>Coming Soon</a></li>
                                    <li><a href="page-maintenance-mode.html"><i class="far fa-file"></i>Maintenance Mode</a></li>
                                    <li><a href="sitemap.html"><i class="far fa-file"></i>Sitemap</a></li>
                                </ul>
                        </li>
                        <li>
                            <h4 class="font-weight-bold text-3 mb-1 mt-2">Team</h3>
                                <ul class="list list-icons list-icons-sm mb-3 text-2">
                                    <li><a href="page-team-advanced.html"><i class="far fa-file"></i>Team - Advanced</a></li>
                                    <li><a href="page-team.html"><i class="far fa-file"></i>Team - Basic</a></li>
                                </ul>
                        </li>
                        <li>
                            <h4 class="font-weight-bold text-3 mb-1 mt-2">Services</h3>
                                <ul class="list list-icons list-icons-sm mb-3 text-2">
                                    <li><a href="page-services.html"><i class="far fa-file"></i>Services - Version 1</a></li>
                                    <li><a href="page-services-2.html"><i class="far fa-file"></i>Services - Version 2</a></li>
                                    <li><a href="page-services-3.html"><i class="far fa-file"></i>Services - Version 3</a></li>
                                </ul>
                        </li>
                        <li><a href="page-careers.html"><i class="far fa-file"></i>Careers</a></li>
                        <li><a href="page-faq.html"><i class="far fa-file"></i>FAQ</a></li>
                        <li><a href="page-login.html"><i class="far fa-file"></i>Login / Register</a></li>
                        <li><a class="dropdown-item" href="page-user-profile.html">User Profile</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h3 class="font-weight-bold text-4 mb-2">PORTFOLIO</h3>
                    <ul class="list list-icons list-icons-sm mb-4">
                        <li>
                            <h4 class="font-weight-bold text-3 mb-1 mt-2">Single Project</h3>
                                <ul class="list list-icons list-icons-sm mb-3 text-2">
                                    <li><a href="portfolio-single-wide-slider.html" aria-label=""><i class="far fa-file"></i>Small Slider</a></li>
                                    <li><a href="portfolio-single-wide-slider.html" aria-label=""><i class="far fa-file"></i>Wide Slider</a></li>
                                    <li><a href="portfolio-single-full-width-slider.html"><i class="far fa-file"></i>Full Width Slider</a></li>
                                    <li><a href="portfolio-single-gallery.html"><i class="far fa-file"></i>Gallery</a></li>
                                    <li><a href="portfolio-single-carousel.html"><i class="far fa-file"></i>Carousel</a></li>
                                    <li><a href="portfolio-single-medias.html"><i class="far fa-file"></i>Medias</a></li>
                                    <li><a href="portfolio-single-full-width-video.html"><i class="far fa-file"></i>Full Width Video</a></li>
                                    <li><a href="portfolio-single-masonry-images.html"><i class="far fa-file"></i>Masonry Images</a></li>
                                    <li><a href="portfolio-single-left-sidebar.html"><i class="far fa-file"></i>Left Sidebar</a></li>
                                    <li><a href="portfolio-single-right-sidebar.html"><i class="far fa-file"></i>Right Sidebar</a></li>
                                    <li><a href="portfolio-single-left-and-right-sidebars.html"><i class="far fa-file"></i>Left and Right Sidebars</a></li>
                                    <li><a href="portfolio-single-sticky-sidebar.html"><i class="far fa-file"></i>Sticky Sidebar</a></li>
                                    <li><a href="portfolio-single-extended.html"><i class="far fa-file"></i>Extended</a></li>
                                </ul>
                        </li>
                        <li>
                            <h4 class="font-weight-bold text-3 mb-1 mt-2">Grid Layouts</h3>
                                <ul class="list list-icons list-icons-sm mb-3 text-2">
                                    <li><a href="portfolio-grid-1-column.html"><i class="far fa-file"></i>1 Column</a></li>
                                    <li><a href="portfolio-grid-2-columns.html"><i class="far fa-file"></i>2 Columns</a></li>
                                    <li><a href="portfolio-grid-3-columns.html"><i class="far fa-file"></i>3 Columns</a></li>
                                    <li><a href="portfolio-grid-4-columns.html"><i class="far fa-file"></i>4 Columns</a></li>
                                    <li><a href="portfolio-grid-5-columns.html"><i class="far fa-file"></i>5 Columns</a></li>
                                    <li><a href="portfolio-grid-6-columns.html"><i class="far fa-file"></i>6 Columns</a></li>
                                    <li><a href="portfolio-grid-no-margins.html"><i class="far fa-file"></i>No Margins</a></li>
                                    <li><a href="portfolio-grid-full-width.html"><i class="far fa-file"></i>Full Width</a></li>
                                    <li><a href="portfolio-grid-full-width-no-margins.html"><i class="far fa-file"></i>Full Width No Margins</a></li>
                                    <li><a href="portfolio-grid-1-column-title-and-description.html"><i class="far fa-file"></i>Title and Description</a></li>
                                </ul>
                        </li>
                        <li>
                            <h4 class="font-weight-bold text-3 mb-1 mt-2">Masonry Layouts</h3>
                                <ul class="list list-icons list-icons-sm mb-3 text-2">
                                    <li><a href="portfolio-masonry-2-columns.html"><i class="far fa-file"></i>2 Columns</a></li>
                                    <li><a href="portfolio-masonry-3-columns.html"><i class="far fa-file"></i>3 Columns</a></li>
                                    <li><a href="portfolio-masonry-4-columns.html"><i class="far fa-file"></i>4 Columns</a></li>
                                    <li><a href="portfolio-masonry-5-columns.html"><i class="far fa-file"></i>5 Columns</a></li>
                                    <li><a href="portfolio-masonry-6-columns.html"><i class="far fa-file"></i>6 Columns</a></li>
                                    <li><a href="portfolio-masonry-no-margins.html"><i class="far fa-file"></i>No Margins</a></li>
                                    <li><a href="portfolio-masonry-full-width.html"><i class="far fa-file"></i>Full Width</a></li>
                                </ul>
                        </li>
                        <li>
                            <h4 class="font-weight-bold text-3 mb-1 mt-2">Sidebar Layouts</h3>
                                <ul class="list list-icons list-icons-sm mb-3 text-2">
                                    <li><a href="portfolio-sidebar-left.html"><i class="far fa-file"></i>Left Sidebar</a></li>
                                    <li><a href="portfolio-sidebar-right.html"><i class="far fa-file"></i>Right Sidebar</a></li>
                                    <li><a href="portfolio-sidebar-left-and-right.html"><i class="far fa-file"></i>Left and Right Sidebars</a></li>
                                    <li><a href="portfolio-sidebar-sticky.html"><i class="far fa-file"></i>Sticky Sidebar</a></li>
                                </ul>
                        </li>
                        <li>
                            <h4 class="font-weight-bold text-3 mb-1 mt-2">Ajax</h3>
                                <ul class="list list-icons list-icons-sm mb-3 text-2">
                                    <li><a href="portfolio-ajax-page.html"><i class="far fa-file"></i>Ajax on Page</a></li>
                                    <li><a href="portfolio-ajax-modal.html"><i class="far fa-file"></i>Ajax on Modal</a></li>
                                </ul>
                        </li>
                        <li>
                            <h4 class="font-weight-bold text-3 mb-1 mt-2">Extra</h3>
                                <ul class="list list-icons list-icons-sm mb-3 text-2">
                                    <li><a href="portfolio-extra-timeline.html"><i class="far fa-file"></i>Timeline</a></li>
                                    <li><a href="portfolio-extra-lightbox.html"><i class="far fa-file"></i>Lightbox</a></li>
                                    <li><a href="portfolio-extra-load-more.html"><i class="far fa-file"></i>Load More</a></li>
                                    <li><a href="portfolio-extra-infinite-scroll.html"><i class="far fa-file"></i>Infinite Scroll</a></li>
                                    <li><a href="portfolio-extra-pagination.html"><i class="far fa-file"></i>Pagination</a></li>
                                    <li><a href="portfolio-extra-combination-filters.html"><i class="far fa-file"></i>Combination Filters</a></li>
                                </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection