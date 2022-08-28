@extends('includes.tab-default')
@push('head-css')
@vite(['resources/css/tin.css'])
<style>
  .active {
    background-color: orange;
  }

  .tablinks {
    background-color: papayawhip;
  }
</style>
@endpush
@section('content')
<div class="bg-white py-5">
  <div class="container">
    <div class="tab text-center pb-4">
      <button class="tablinks" onclick="openImgCate(event, 'all')" id="defaultOpen">Tất Cả</button>
      <button class="tablinks" onclick="openImgCate(event, 'suKien')">Sự kiện</button>
      <button class="tablinks" onclick="openImgCate(event, 'thietKe')">Thiết kế</button>
      <button class="tablinks" onclick="openImgCate(event, 'khac')">Khác</button>
    </div>

    <div id="all" class="tabcontent">
      <div class="row g-4">
        @foreach ($all as $i)
        <div class="col-sm-12 col-md-3 border-0">
          <img src="{{$i->images}}" class="card-img-top rounded-2" style="height:250px;">
        </div>
        @endforeach
      </div>
    </div>

    <div id="suKien" class="tabcontent">
      <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($suKien as $i)
        <div class="col border-0">
          <div class="card border-0 h100">
            <div>
              <img src="{{$i->images}}" class="card-img-top" onclick="onClick(this)">
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>

    <div id="thietKe" class="tabcontent">
      <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($thietKe as $i)
        <div class="col border-0">
          <div class="card border-0 h100">
            <div>
              <img src="{{$i->images}}" class="card-img-top">
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>

    <div id="khac" class="tabcontent">
      <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($khac as $i)
        <div class="col border-0">
          <div class="card border-0 h100">
            <div>
              <img src="{{$i->image}}" class="card-img-top">
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    <script>
      function openImgCate(evt, cateName) {
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


    <div id="modal01" class="w3-modal" onclick="this.style.display='none'">
      <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
      <div class="w3-modal-content w3-animate-zoom">
        <img id="img01" style="width:100%">
      </div>
    </div>
    <script>
      function onClick(element) {
        document.getElementById("img01").src = element.src;
        document.getElementById("modal01").style.display = "block";
      }
    </script>
  </div>
</div>
@stop