@extends('includes.tab-default')
@push('head-css')
@vite(['resources/css/tin.css'])
@endpush
@section('content')
<div class="bg-white py-5">
  <div class="container">
    <div class="tab text-center pb-4">
      <button class="tablinks" onclick="openNewsCate(event, 'all')" id="defaultOpen">Tất Cả</button>
      <button class="tablinks" onclick="openNewsCate(event, 'suKien')">Tin sự kiện</button>
      <button class="tablinks" onclick="openNewsCate(event, 'duAn')">Tin dự án</button>
      <button class="tablinks" onclick="openNewsCate(event, 'BDS')">Tin thị trường BĐS</button>
    </div>

    <div id="all" class="tabcontent">
      <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($all as $i)
        <div class="col border-0">
          <div class="card border-0 h100">
            <a href="{{route('tin-tuc-chi-tiet',$i->id)}}">
              <div>
                <img src="{{$i->thumbnail}}" class="card-img-top">
                <div class="card-img-overlay">
                  <p>{{$category->cate_name}}</p>
                </div>
              </div>
              <div class="card-body">
                <h5 class="card-title"></h5>
            </a>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>

  <div id="suKien" class="tabcontent">
    <div class="row row-cols-1 row-cols-md-3 g-4">
      @foreach ($suKien as $i)
      <div class="col border-0">
        <div class="card border-0 h100">
          <a href="{{route('tin-tuc-chi-tiet',$i->id)}}">
            <div>
              <img src="{{$i->thumbnail}}" class="card-img-top">
              <div class="card-img-overlay">
                <p>{{$category->cate_name}}</p>
              </div>
            </div>
            <div class="card-body">
              <h5 class="card-title">{{$i->title}}</h5>
          </a>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>

<div id="duAn" class="tabcontent">
  <div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach ($duAn as $i)
    <div class="col border-0">
      <div class="card border-0 h100">
        <a href="{{route('tin-tuc-chi-tiet',$i->id)}}">
          <div>
            <img src="{{$i->thumbnail}}" class="card-img-top">
            <div class="card-img-overlay">
              <p>{{$category->cate_name}}</p>
            </div>
          </div>
          <div class="card-body">
            <h5 class="card-title">{{$i->title}}</h5>
        </a>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  @endforeach
</div>
</div>

<div id="BDS" class="tabcontent">
  <div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach ($BDS as $i)
    <div class="col border-0">
      <div class="card border-0 h100">
        <a href="{{route('tin-tuc-chi-tiet',$i->id)}}">
          <div>
            <img src="{{$i->thumbnail}}" class="card-img-top">
            <div class="card-img-overlay">
              <p>{{$category->cate_name}}</p>
            </div>
          </div>
          <div class="card-body">
            <h5 class="card-title">{{$i->title}}</h5>
        </a>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  @endforeach
</div>
</div>
<script>
  function openNewsCate(evt, newCate) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(newCate).style.display = "block";
    evt.currentTarget.className += " active";
  }
  document.getElementById("defaultOpen").click();
</script>
</div>
</div>
@stop