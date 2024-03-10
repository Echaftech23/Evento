@extends('layouts.home.app')

@section('contents')

    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{ asset('img/bg_2.jpg') }}');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
            <h1 class="mb-3 bread">My Tickets</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>My Tickets <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    @if ($reservations->count() > 0)
        <section class="ftco-section bg-light">
            <div class="container">
                <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">My Events</span>
                    <h2><span>Recent</span> Event</h2>
                </div>
                </div>
                <div class="row d-flex">
                    @foreach ($reservations as $reservation)
                        <div class="col-md-4 d-flex ftco-animate">
                            <div class="blog-entry justify-content-end" style="position: relative;">
                                <a href="blog-single.html" class="block-20" style="background-image: url({{ asset('img/event-1.jpg') }});"></a>
                                <div class="text p-4 float-right d-block">
                                    <div class="row px-3 mt-4 mb-3">
                                        <p class="rating mb-0 px-2 mr-3"><strong>8.0</strong></p>
                                        <p class="text-primary mb-0 mr-2 grade"><strong>Very Good</strong></p>
                                        <p class="text-secondary mb-0 mr-2">&middot;</p>
                                        <p class="text-secondary mb-0">14K reviews</p>
                                    </div>
                                    <div class="row px-3 mt-1">
                                        <h3 class="font-weight-bold">{{ $reservation->event->title }}</h3>
                                    </div>
                                    <div class="line"></div>
                                    <div class="row px-3 mt-3">
                                        <h5 class="text-secondary mb-1">Limited Seats Available!</h5>
                                    </div>
                                    <div class="row px-3">
                                        <h2 class="text-success mb-1 font-weight-bold">${{ $reservation->event->price }}</h2>
                                        <p class="text-muted ml-2"><del>$120</del></p>
                                        <p class="text-success mb-1 ml-2">Save $21</p>
                                    </div>
                                    <div class="row px-3 mb-3">
                                        <p class="text-muted mb-0">Only 20 seats left</p>
                                    </div>
                                    <div class="row erea d-flex px-3">
                                            <form action="{{ route('reservations.store') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="reservation_id" value="{{$reservation->id}}">
                                                @php
                                                    $reservationStatus = $reservation->status;
                                                @endphp

                                                @php
                                                    $reservationStatus = $reservation->status;
                                                @endphp

                                                <button class="btn btn-danger btn-buy px-3"
                                                    {{ $reservationStatus == 0 ? 'disabled' : '' }}
                                                    @if ($reservationStatus == 0)
                                                        style="background-color: #ff7707; color: #212529;" disabled
                                                    @elseif ($reservationStatus == 1)
                                                        style="background-color: #28a745; color: #fff;"
                                                    @elseif ($reservationStatus == 2)
                                                        style="background-color: #d02b2b; color: #fff;" disabled
                                                    @endif
                                                >
                                                    @if ($reservationStatus == 0)
                                                        Pending
                                                    @elseif ($reservationStatus == 1)
                                                        Download Ticket
                                                    @else
                                                        Rejected
                                                    @endif
                                                </button>


                                            </form>
                                        <a href="{{route('home.show', $reservation->id)}}" class="btn btn-primary btn-view ml-2">View Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <x-ftco-testimonial />
@endsection
