@extends('includes.tab-default')
@push('head-css')
@vite(['resources/css/tin.css'])
@endpush
@section('content')

<div class="bg-white py-5">
  <div class="container">
    <div class="tab text-center pb-4">
      <button class="tablinks p-2 px-3 mb-1" onclick="openSurface(event, 'TANG')" id="defaultOpen">MẶT BĂNG TẦNG ĐIỂN HÌNH</button>
      <button class="tablinks p-2 px-3 mb-1" onclick="openSurface(event, 'CAN')">MẶT BĂNG CĂN ĐIỂN HÌNH</button>
    </div>

    <div id="TANG" class="tabcontent w-75 mx-auto tab-mat-bang px-md-5 py-md-4 py-0 px-sm-0 bg-light position-relative">
      <div class="total-tab position-absolute d-lg-block d-none">
        1/8
      </div>
      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="false">
        <div class="carousel-inner position-relative">
          <div class="position-absolute current-carousel d-lg-block d-none">
            <i class="fa fa-caret-right text-success"></i>
            <span>Mặt bằng tầng 1</span>
          </div>
          <div class="carousel-item active">
            <img src="{{asset('imgs/mat-bang.png')}}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
          </div>
        </div>
      </div>
    </div>

    <div id="CAN" class="tabcontent w-75 mx-auto tab-mat-bang px-md-5 py-md-4 py-0 px-sm-0 bg-light position-relative">
      <div class="total-tab position-absolute d-lg-block d-none">
        1/8
      </div>
      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="false">
        <div class="carousel-inner position-relative">
          <div class="position-absolute current-carousel d-lg-block d-none">
            <i class="fa fa-caret-right text-success"></i>
            <span>Mặt bằng tầng 1</span>
          </div>
          <div class="carousel-item active">
            <img src="..." class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
          </div>
        </div>

      </div>
    </div>

    <div class="d-flex justify-content-center mt-4">
      <div class="mx-1" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <i class="fa fa-angle-left ic-carousel fs-5"></i>
      </div>

      <div class="mx-1" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <i class="fa fa-angle-right ic-carousel fs-5"></i>
      </div>
    </div>


    <script>
      function openSurface(evt, cateName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cateName).style.display = "block";
        evt.currentTarget.className += " active";
      }
      document.getElementById("defaultOpen").click();
    </script>
  </div>
</div>

@stop