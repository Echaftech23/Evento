@extends('layouts.home.app')

@section('contents')
    <div class="hero-wrap js-fullheight" style="background-image: url('{{ asset('img/bg_1.jpg') }}');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
            <div class="col-xl-10 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }" style="max-width: 500px"><span>{{$event->title}}</span></h1>
                @if ($event)
                    {{ $timerData['formattedStartDate'] }}, {{ $timerData['formattedDayStart'] }}-{{ $timerData['formattedDayEnd'] }}.
                    {{ $timerData['formattedYearStart'] }}.  {{ $event->city->name }}, {{ $event->address }}
                @endif
                <input id="timer-value" type="hidden" value="{{ $timerData['formattedEndDateTimer'] }} 09:56:00 GMT+01:00"></input>
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
                        <h2 class="mb-4">{{$event->title}}</h2>
                        <p>{{$event->description}}</p>
                    </div>
                </div>
                <div class="row justify-content-evenly pb-3">
                    <div class="col-12 col-md-6 lg-col-6 ftco-animate">
                        <h6 class="text-dark font-weight-bold">Location</h6>
                        <p>Yousoufia, {{$event->address}}</p>
                    </div>
                    <div class="col-12 col-md-6 pl-3 lg-col-5 ftco-animate">
                        <h6 class="text-dark font-weight-bold">Price</h6>
                        <div class="row px-3">
                            <h2 class="text-success mb-1 font-weight-bold">${{$event->price}}</h2>
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
                                <span class="flaticon-chair"></span>
                            </div>
                            <strong class="number" data-number="{{$event->capacity}}">0</strong>
                            <span>Total Seats</span>
                        </div>
                        </div>
                    </div>

                    <div class="col-md-4 ftco-animate">
                        <form action="{{ route('reservations.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="event_id" value="{{$event->id}}">
                            <button type="submit" class="btn btn-danger fs-3 btn-buy px-3 py-3">Reserve  Now</button>
                        </form>
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
          	<span class="subheading">Our Blog</span>
            <h2><span>Recent</span> Blog</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="blog-single.html" class="block-20" style="background-image: url({{asset('img/image_1.jpg')}});">
              </a>
              <div class="text p-4 float-right d-block">
              	<div class="d-flex align-items-center pt-2 mb-4">
              		<div class="one">
              			<span class="day">07</span>
              		</div>
              		<div class="two">
              			<span class="yr">2019</span>
              			<span class="mos">January</span>
              		</div>
              	</div>
                <h3 class="heading mt-2"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="blog-single.html" class="block-20" style="background-image: url({{asset('img/image_2.jpg')}});">
              </a>
              <div class="text p-4 float-right d-block">
              	<div class="d-flex align-items-center pt-2 mb-4">
              		<div class="one">
              			<span class="day">01</span>
              		</div>
              		<div class="two">
              			<span class="yr">2019</span>
              			<span class="mos">January</span>
              		</div>
              	</div>
                <h3 class="heading mt-2"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry">
              <a href="blog-single.html" class="block-20" style="background-image: url({{asset('img/image_3.jpg')}});">
              </a>
              <div class="text p-4 float-right d-block">
              	<div class="d-flex align-items-center pt-2 mb-4">
              		<div class="one">
              			<span class="day">03</span>
              		</div>
              		<div class="two">
              			<span class="yr">2023</span>
              			<span class="mos">April</span>
              		</div>
              	</div>
                <h3 class="heading mt-2"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <x-ftco-newsletter />
@endsection
