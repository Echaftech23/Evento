@extends('layouts.home.app')

@section('contents')
    <div class="hero-wrap js-fullheight" style="background-image: url('{{ asset('img/bg_1.jpg') }}');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
            <div class="col-xl-10 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"> Developer <br><span>Conference 2024</span></h1>
                <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">April 01-07, 2024. Youssoufia, Youcode</p>
                <div id="timer" class="d-flex mb-3">
                    <div class="time" id="days"></div>
                    <div class="time pl-4" id="hours"></div>
                    <div class="time pl-4" id="minutes"></div>
                    <div class="time pl-4" id="seconds"></div>
                </div>
            </div>
        </div>
      </div>
    </div>


    <section class="ftco-counter bg-light img" id="section-counter" style="padding: 7em 0;">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2><span>About</span> Event</h2>
          </div>
        </div>
        <div class="row d-flex">
            <div class="col-md-6 d-flex">
                <div class="img d-flex align-self-stretch" style="background-image: url('{{ asset('img/about.jpg') }}');"></div>
            </div>
            <div class="col-md-6 pl-md-5 py-5">
                <div class="row justify-content-start pb-3">
                    <div class="col-md-12 heading-section ftco-animate">
                        <h2 class="mb-4">Far far away, behind</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                    </div>
                </div>
                <div class="row justify-content-evenly pb-3">
                    <div class="col-12 col-md-6 lg-col-6 ftco-animate">
                        <h6 class="text-dark font-weight-bold">Price</h6>
                        <p>Yousoufia, Youcode</p>
                    </div>
                    <div class="col-12 col-md-6 pl-3 lg-col-5 ftco-animate">
                        <h6 class="text-dark font-weight-bold">Location</h6>
                        <div class="row px-3">
                            <h2 class="text-success mb-1 font-weight-bold">$99</h2>
                            <p class="text-muted ml-2"><del>$120</del></p>
                            <p class="text-success mb-1 ml-2">Save $21</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center py-4 bg-light mb-4">
                        <div class="text">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-guest"></span>
                            </div>
                            <strong class="number" data-number="30">0</strong>
                            <span>Speakers</span>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center py-4 bg-light mb-4">
                            <div class="text">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="flaticon-handshake"></span>
                                </div>
                                <strong class="number" data-number="200">0</strong>
                                <span>Sponsor</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center py-4 bg-light mb-4">
                        <div class="text">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-chair"></span>
                            </div>
                            <strong class="number" data-number="2500">0</strong>
                            <span>Total Seats</span>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center py-4 bg-light mb-4">
                        <div class="text">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-idea"></span>
                            </div>
                            <strong class="number" data-number="40">0</strong>
                            <span>Topics</span>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-4 ftco-animate">
                        <button class="btn btn-danger fs-3 btn-buy px-3 py-3">Buy Ticket Now</button>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </section>

    <x-ftco-speakers />

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Our Events</span>
            <h2><span>Recent</span> Event</h2>
          </div>
        </div>
        <div class="row d-flex">
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end" style="position: relative;">
                    <a href="blog-single.html" class="block-20" style="background-image: url({{ asset('img/event-1.jpg') }});"></a>
                    <div class="date" style="position: absolute; top: 0; left: 0; background-color: #77D7B9; padding: 1em 1.5em; z-index: 10; border-bottom-right-radius: 50%;">
                            <span class="day text-center font-weight-bold d-block text-white" style="font-size: 18px;">12</span>
                            <span class="month text-center d-block text-white" style="font-size: 14px;">Aug</span>
                            <span class="year text-center d-block text-white" style="font-size: 14px;">2024</span>
                        </div>
                    <div class="text p-4 float-right d-block">
                        <div class="row px-3 mt-4 mb-3">
                            <p class="rating mb-0 px-2 mr-3"><strong>8.0</strong></p>
                            <p class="text-primary mb-0 mr-2 grade"><strong>Very Good</strong></p>
                            <p class="text-secondary mb-0 mr-2">&middot;</p>
                            <p class="text-secondary mb-0">14K reviews</p>
                        </div>
                        <div class="row px-3 mt-1">
                            <h3 class="font-weight-bold">Amazing Tech Summit</h3>
                        </div>
                        <div class="line"></div>
                        <div class="row px-3 mt-3">
                            <h5 class="text-secondary mb-1">Limited Seats Available!</h5>
                        </div>
                        <div class="row px-3">
                            <h2 class="text-success mb-1 font-weight-bold">$99</h2>
                            <p class="text-muted ml-2"><del>$120</del></p>
                            <p class="text-success mb-1 ml-2">Save $21</p>
                        </div>
                        <div class="row px-3 mb-3">
                            <p class="text-muted mb-0">Only 20 seats left</p>
                        </div>
                        <div class="row erea d-flex px-3">
                            <button class="btn btn-danger btn-buy px-3">Buy Now</button>
                            <button class="btn btn-primary btn-view ml-2">View Detail</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end" style="position: relative;">
                    {{-- <a href="{{ route('events.show', $event->id) }}" class="block-20" style="background-image: url({{ asset('img/event-2.jpg') }});"></a> --}}
                    <a href="" class="block-20" style="background-image: url({{ asset('img/event-2.jpg') }});"></a>
                    <div class="date" style="position: absolute; top: 0; left: 0; background-color: #77D7B9; padding: 1em 1.5em; z-index: 10; border-bottom-right-radius: 50%;">
                            <span class="day text-center font-weight-bold d-block text-white" style="font-size: 18px;">12</span>
                            <span class="month text-center d-block text-white" style="font-size: 14px;">Aug</span>
                            <span class="year text-center d-block text-white" style="font-size: 14px;">2024</span>
                        </div>
                    <div class="text p-4 float-right d-block">
                        <div class="row px-3 mt-4 mb-3">
                            <p class="rating mb-0 px-2 mr-3"><strong>8.0</strong></p>
                            <p class="text-primary mb-0 mr-2 grade"><strong>Very Good</strong></p>
                            <p class="text-secondary mb-0 mr-2">&middot;</p>
                            <p class="text-secondary mb-0">14K reviews</p>
                        </div>
                        <div class="row px-3 mt-1">
                            <h3 class="font-weight-bold">Amazing Tech Summit</h3>
                        </div>
                        <div class="line"></div>
                        <div class="row px-3 mt-3">
                            <h5 class="text-secondary mb-1">Limited Seats Available!</h5>
                        </div>
                        <div class="row px-3">
                            <h2 class="text-success mb-1 font-weight-bold">$99</h2>
                            <p class="text-muted ml-2"><del>$120</del></p>
                            <p class="text-success mb-1 ml-2">Save $21</p>
                        </div>
                        <div class="row px-3 mb-3">
                            <p class="text-muted mb-0">Only 20 seats left</p>
                        </div>
                        <div class="row erea d-flex px-3">
                            <button class="btn btn-danger btn-buy px-3">Buy Now</button>
                            <a href="" class="btn btn-primary btn-view ml-2">View Detail</a>
                            {{-- <a href="{{ route('events.show', $event->id) }}" class="btn btn-primary btn-view ml-2">View Detail</a> --}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end" style="position: relative;">
                    <a href="blog-single.html" class="block-20" style="background-image: url({{ asset('img/event-1.jpg') }});"></a>
                    <div class="date" style="position: absolute; top: 0; left: 0; background-color: #77D7B9; padding: 1em 1.5em; z-index: 10; border-bottom-right-radius: 50%;">
                            <span class="day text-center font-weight-bold d-block text-white" style="font-size: 18px;">12</span>
                            <span class="month text-center d-block text-white" style="font-size: 14px;">Aug</span>
                            <span class="year text-center d-block text-white" style="font-size: 14px;">2024</span>
                        </div>
                    <div class="text p-4 float-right d-block">
                        <div class="row px-3 mt-4 mb-3">
                            <p class="rating mb-0 px-2 mr-3"><strong>8.0</strong></p>
                            <p class="text-primary mb-0 mr-2 grade"><strong>Very Good</strong></p>
                            <p class="text-secondary mb-0 mr-2">&middot;</p>
                            <p class="text-secondary mb-0">14K reviews</p>
                        </div>
                        <div class="row px-3 mt-1">
                            <h3 class="font-weight-bold">Amazing Tech Summit</h3>
                        </div>
                        <div class="line"></div>
                        <div class="row px-3 mt-3">
                            <h5 class="text-secondary mb-1">Limited Seats Available!</h5>
                        </div>
                        <div class="row px-3">
                            <h2 class="text-success mb-1 font-weight-bold">$99</h2>
                            <p class="text-muted ml-2"><del>$120</del></p>
                            <p class="text-success mb-1 ml-2">Save $21</p>
                        </div>
                        <div class="row px-3 mb-3">
                            <p class="text-muted mb-0">Only 20 seats left</p>
                        </div>
                        <div class="row erea d-flex px-3">
                            <button class="btn btn-danger btn-buy px-3">Buy Now</button>
                            <button class="btn btn-primary btn-view ml-2">View Detail</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </section>

    <x-ftco-testimonial />
    <x-ftco-newsletter />
    <x-ftco-gallery />
@endsection
