@extends('vera_defaulf')
@push('header_css')
    @vite('resources/css/home.css')
@endpush
@section('content')



@include('includes.home-nav')

<div class="medium-full-width bg box-sizing pb-4">

    <section class="vh-100" id="list-item-1">
        @include('vera_views.home-views.gioi-thieu')
    </section>

    <section class="vh-100" id="list-item-2">
        @include('vera_views.home-views.cau-chuyen')
    </section>

    <section class="vh-100" id="list-item-3">
        @include('vera_views.home-views.tong-quan')
    </section>

    <section class="vh-100" id="list-item-5">
        @include('vera_views.home-views.dau-tu')
    </section>

    {{-- <section class="vh-100" id="list-item-4">
            @include('vera_views.home-views.vi-tri')
    </section>  --}}

    <section class="vh-100" id="list-item-6">
                @include('vera_views.home-views.san-pham')
    </section>

    <section class="vh-100" id="list-item-7">
            @include('vera_views.home-views.tien-ich')
    </section>

    <section class="vh-100" id="list-item-8">
            @include('vera_views.home-views.tin-tuc')
    </section>

    @include('includes.footer')
    @include('includes.home-list-menu')

</div>



@push('body_js')
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
@endpush
@stop
