@extends('includes.home-default')
@push('head-css')
@vite(['resources/css/index.css'])
@endpush
@section('content')
@include('includes.nav')

<!-- Swiper -->

<div class="swiper-container">
    <div class="swiper-wrapper">
        <div class="swiper-slide position-relative" data-name="Giới thiệu" id="list-item-1">
            <section>
                @include('vera_views.home-views.gioi-thieu')
            </section>
            <div class="position-absolute ic-angles-down d-md-block d-none">
                <i class="fa fa-angles-down text-white"></i>
            </div>
        </div>

        <div class="swiper-slide position-relative" data-name="Câu chuyện" id="list-item-2">
            <section>
                @include('vera_views.home-views.cau-chuyen')
            </section>
            <div class="position-absolute ic-angles-down d-md-block d-none">
                <i class="fa fa-angles-down text-white"></i>
            </div>
        </div>

        <div class="swiper-slide position-relative" data-name="Tổng quan" id="list-item-3">
            <section>
                @include('vera_views.home-views.tong-quan')
            </section>
            <div class="position-absolute ic-angles-down d-md-block d-none">
                <i class="fa fa-angles-down text-white"></i>
            </div>
        </div>

        <div class="swiper-slide position-relative" data-name="Vị trí" id="list-item-4">
            <section>
                @include('vera_views.home-views.vi-tri')
            </section>
            <div class="position-absolute ic-angles-down d-md-block d-none">
                <i class="fa fa-angles-down text-white"></i>
            </div>
        </div>

        <div class="swiper-slide position-relative" data-name="Đầu tư" id="list-item-5">
            <section>
                @include('vera_views.home-views.dau-tu')
            </section>
            <div class="position-absolute ic-angles-down d-md-block d-none">
                <i class="fa fa-angles-down text-white"></i>
            </div>
        </div>

        <div class="swiper-slide position-relative" data-name="Sản phẩm" id="list-item-6">
            <section>
                @include('vera_views.home-views.san-pham')
            </section>
            <div class="position-absolute ic-angles-down d-md-block d-none">
                <i class="fa fa-angles-down text-white"></i>
            </div>
        </div>

        <div class="swiper-slide position-relative" data-name="Tiện ích" id="list-item-7">
            <section>
                @include('vera_views.home-views.tien-ich')
            </section>
            <div class="position-absolute ic-angles-down d-md-block d-none">
                <i class="fa fa-angles-down text-white"></i>
            </div>
        </div>

        <div class="swiper-slide position-relative" data-name="Tin Tức" id="list-item-8">
            <section>
                @include('vera_views.home-views.tin-tuc')
            </section>
            <div class="position-absolute ic-angles-down d-md-block d-none">
                <i class="fa fa-angles-down text-white"></i>
            </div>
        </div>
        <div class="swiper-slide" data-name="Liên hệ" id="list-item-9">
            @include('includes.footer')
        </div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
</div>




{{-- <div id="fullpage">
        <div class="section">@include('vera_views.home-views.gioi-thieu')</div>
        <div class="section">@include('vera_views.home-views.cau-chuyen')</div>
        <div class="section">@include('vera_views.home-views.tong-quan')</div>
        <div class="section">@include('vera_views.home-views.vi-tri')</div>
        <div class="section">@include('vera_views.home-views.dau-tu')</div>
        <div class="section">@include('vera_views.home-views.san-pham')</div>
        <div class="section">@include('vera_views.home-views.tien-ich')</div>
        <div class="section">@include('vera_views.home-views.tin-tuc')</div>
        <div class="section">@include('includes.footer')</div>
    </div> --}}



{{-- <div class="page-listing">
        <ul class="bg-tranparent py-5">
        <li class="active-listing p-2">
            <a href="#list-item-1">1</a>
            <span class="ps-3 pt-2"> Giới thiệu</span>
        </li>
        <li class=p-2>
            <a href="#list-item-2">2</a>
            <span class="ps-3 pt-2"> Câu chuyện thương hiệu</span>
        </li>
        <li class=p-2>
            <a href="#list-item-3">3</a>
            <span class="ps-3 pt-2"> Tổng quan</span>
        </li>
        <li class=p-2>
            <a href="#list-item-4">4</a>
            <span class="ps-3 pt-2"> Vị trí</span>
        </li>
        <li class=p-2>
            <a href="#list-item-5">5</a>
            <span class="ps-3 pt-2"> Đầu tư</span>
        </li>
        <li class=p-2>
            <a href="#list-item-6">6</a>
            <span class="ps-3 pt-2"> Sản phẩm</span>
        </li>
        <li class=p-2>
            <a href="#list-item-7">7</a>
            <span class="ps-3 pt-2"> Tiện ích</span>
        </li>
        <li class=p-2>
            <a href="#list-item-8">8</a>
            <span class="ps-3 pt-2"> Tin tức</span>
        </li>
        <li class=p-2>
            <a href="#list-item-9">9</a>
            <span class="ps-3 pt-2"> Liên hệ</span>
        </li>
        </ul>
        <script>
          $(document).ready(function(){
              $('.page-listing ul li ').click(function(){
                  $('li ').removeClass("active-listing ");
                  $(this).addClass("active-listing ");
              });
              });
          </script>
      </div> --}}


@push('js')
@vite(['resources/js/index.js'])
@endpush



@stop