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

    <section class="ftco-section services-section bg-light">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-placeholder"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Venue</h3>
                <p>	203 Fake St. Mountain View, San Francisco, California, USA</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-world"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Transport</h3>
                <p>A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-hotel"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Hotel</h3>
                <p>A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-cooking"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Restaurant</h3>
                <p>A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-counter img" id="section-counter">
    	<div class="container">
    		<div class="row d-flex">
    			<div class="col-md-6 d-flex">
    				<div class="img d-flex align-self-stretch" style="background-image: url('{{ asset('img/about.jpg') }}');"></div>
    			</div>
    			<div class="col-md-6 pl-md-5 py-5">
    				<div class="row justify-content-start pb-3">
		          <div class="col-md-12 heading-section ftco-animate">
		          	<span class="subheading">Fun Facts</span>
		            <h2 class="mb-4"><span>Fun</span> Facts</h2>
		            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
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
		        </div>
	        </div>
        </div>
    	</div>
    </section>

    <x-ftco-speakers />
    <x-ftco-testimonial />

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
    <x-ftco-gallery />
@endsection
