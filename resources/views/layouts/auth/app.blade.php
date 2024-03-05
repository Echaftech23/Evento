@include('layouts.auth.header')
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">@yield('header-title')</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <div class="wrap d-md-flex">
                    <div class="img" style="background-image: url('{{ asset('img/bg-1.jpg') }}');"></div>
                    @yield('contents')
                </div>
            </div>
        </div>
    </div>
</section>
@include('layouts.auth.footer')
