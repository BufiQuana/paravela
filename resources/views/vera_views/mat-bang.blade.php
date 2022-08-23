@extends('includes.tab-default')
@push('head-css')
    @vite(['resources/css/tin.css'])
@endpush
@section('content')

<div class="bg-white py-5">
    <div class="container">
        <div class="tab text-center pb-4">
            <button class="tablinks" onclick="openSurface(event, 'TANG')" id="defaultOpen">MẶT BĂNG TẦNG ĐIỂN HÌNH</button>
            <button class="tablinks" onclick="openSurface(event, 'CAN')">MẶT BĂNG CĂN ĐIỂN HÌNH</button>
          </div>

          <div id="TANG" class="tabcontent">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
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

          <div id="CAN" class="tabcontent">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
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

          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>


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
