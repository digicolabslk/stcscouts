@extends('layouts.master')

@section('content')
    <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
        <div class="container">
            <div class="row">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-white font-weight-bold text-8">Tribal Craft 2004</h1>
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
                                <img src="{{ asset('images\2004\Thomian-Scout-Exhibition.jpg') }}"
                                    class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0"
                                    alt="Thomian-Scout-Exhibition" />


                            </div>
                            <div class="col-md-12 align-self-center p-static order-2 text-center">

                                <img src="{{ asset('images\2004\Tribal-Craft-Crew.png') }}"
                                    class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0"
                                    alt="Tribal-Craft-Crew" />
                                    
                            </div>
                            <div class="col-md-12 align-self-center p-static order-2 text-center">
                                <img src="{{ asset('images\2004\Tribal-Craft.jpg') }}"
                                    class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0"
                                    alt="Tribal-Craft" />
                                    
                            </div>
                            <div class="col-md-12 align-self-center p-static order-2 text-center">
                                <img src="{{ asset('images\2004\Tribal-Craft-2.jpg') }}"
                                    class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0"
                                    alt="Tribal-Craft-2" />
                            </div>

                            <p class="text-center fw-bold">Press Write-up for Tribal Craft 2004:</p>



                            
                            <br>


                            <p class="text-dark text-justify text-4"><span class="font-weight-semi-bold">TRIBAL CRAFT,</span> an action activity based exhibition and theme park 
                                highlighting the facets of modern day scouting
                                 would be held on the 13<sup>th</sup> and 14<sup>th</sup> of February 2004 at S. Thomas’ College, Mt. Lavinia. 
                                 Organised by the 16<sup>th</sup> Colombo Scout Troop of S. Thomas’ College, Mt. Lavinia with the participation
                                  of Scouts and Guides from throughout the country, Tribal Craft offers a ‘different experience’ with
                                   a theme park with rides and games, food stalls, scout craft exhibition stalls and many other action packed acti
                                   vities to visitors.</p>



                            <p class="text-dark text-justify text-4">Special live demonstration shows will be conducted by the Special Task F
                                orce (STF) Commandos, The Sri Lanka Army, The Fire brigade and the St. Johns Ambulance Service.</p>



                            <p class="text-dark text-justify text-4">The visitors are also in for a host of prizes and 
                                surprises and an enthralling fireworks display at Tribal Craft 2004.
                            </p>

                            <p class="text-dark text-justify text-4">Tribal Craft would include all facets of scouting and would be a spectacular 
                                event where Scout theme parks, display stalls, camp equipment, activities and a campfire would be presented to be 
                                experienced by the general public. It would also be a meeting place for Scouts, Cub Scouts, Rovers and Scout leaders,
                                 Girl Guides, parents, schoolboys, scouting enthusiasts and other interested parties. We expect a minimum of 5000 people
                                  to attend this two day exhibition which will be held on the 13<sup>th</sup> and 14<sup>th</sup> of February 2004 at the College premises.
                            </p>

                            <p class="text-dark text-justify text-4">
                                The theme park would include: an aerial runway, rope climbing, a monkey bridge,
                                 a rope swing, toddy tappers walk, cartwheels and other working models.
                            </p>

                            <p class="text-dark text-justify text-4">
                                <span class="number">1.</span> Model Campsite: The ideal Scout Campsite 
                                including a gateway, kitchen, tents and camp gadgets will be displayed.
                            </p>

                            <p class="text-dark text-justify text-4"><span class="number">2.</span> Scout and Girl Guide Section: Scouts
                                 and Guides of participating schools will have their items on display.</p>

                            <p class="text-dark text-justify text-4"><span class="number">3.</span> class Cub Scout Section: An Exhibition and demonstration 
                                by the Cub Scouts and Akelas of S. Thomas’ College.</p>

                            <p class="text-dark text-justify text-4"><span class="number">4.</span> Pioneering and Outdoors: An inter Troop tower building competition will 
                                be held during the Exhibition where the winners will walk off with valuable prizes. The Scouts’ outdoor skills
                                 will also be on display, as visitors would experience the likes of “Backwoods Cooking”.</p>

                            <p class="text-dark text-justify text-4"><span class="number">5.</span> Scout Theme Park: This consists of an obstacle course which will include a monkey bridge,
                                 an Ariel Runway, a Giant Wheel and many more theme park items.</p>

                            <p class="text-dark text-justify text-4"><span class="number">6.</span>  Scout Museum: The History of World, Sri Lankan and Thomian Scouting will be exhibited. Scout memorabilia 
                                and the badge work scheme will also be amongst the display items.</p>

                            <p class="text-dark text-justify text-4"><span class="number">7.</span>  First Aid Section: The Knowledge on First Aid, acquired by the Scouts will be put on display by means of practical sessions and display stalls. 
                                The St. John’s Ambulance Brigade will provide the Special sessions.
                            </p>

                            <p class="text-dark text-justify text-4"><span class="number">8.</span>  Campfire and Entertainment: The Traditional Scout Campfire, which will mark 
                                the closing of the two day Exhibition, will include various items by various Scout troops and Guide companies.
                                 A Special demonstration and display by the Police STF too will be shown during the Exhibition.</p>

                            <p class="text-dark text-justify text-4"><span class="number">9.</span> Scout IT Section: The Troop web site will be put on display. We hope
                                 to exhibit the design and computer animation capabilities of our Scouts through latest IT devices.
                            </p>

                          <div class="col-md-12 align-self-center p-static order-2 text-center">
                                <img src="{{ asset('images\2004\covertribal.jpg') }}"
                                    class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0"
                                    alt="covertribal" />
                            </div>




                          <div class="col-md-12 align-self-center p-static order-2 text-center">
                                <img src="{{ asset('images\2004\tribal1.jpg') }}"
                                    class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0"
                                    alt="tribal1" />
                            </div>


                           

                            <div class="col-md-12 align-self-center p-static order-2 text-center">
                                <img src="{{ asset('images\2004\Tribal-Craft-2004_Guide.png') }}"
                                    class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0"
                                    alt="Tribal-Craft-2004_Guide" />
                            </div>



                             <div class="col-md-12 align-self-center p-static order-2 text-center">
                                <img src="{{ asset('images\2004\Tribal-Craft-2004_Map.png') }}"
                                    class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0"
                                    alt="Tribal-Craft-2004_Map" />
                            </div>

                            <br>


                            <span class="float-start">
                               <p class="text-dark text-justify text-4">[gview file=”https://stcscouts.com/wp-content/uploads/2014/01/TRIBAL-CRAFT.pdf”]
                            </p>

                            </span>

                            
                        </div>
                        <br>

                    </article>

                </div>
            </div>
        </div>

    </div>
@endsection
