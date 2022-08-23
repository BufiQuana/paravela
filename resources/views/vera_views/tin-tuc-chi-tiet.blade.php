@extends('includes.tab-default')
@push('head-css')
    @vite(['resources/css/tin.css'])
@endpush
@section('content')
<div class="bg-white">
    <div class="container py-5 text-star">

        <div class="new-content row">
            <h1 class="tin-title">{{$new->title}}</h1>
            <p><b>{{$new->name}}</b></p>
            <p><b>danh mục: {{$new->category_id}}</b></p>
            <div>{!!$new->content!!}</div>
            <p><b>{{$new->description}}</b></p>
        </div>
        <div>

            <div class="d-flex bd-highlight mb-3 nav-next">
                <div class="me-auto p-2 bd-highlight">
                    <a href="{{route('tin-tuc-chi-tiet',$new->id-1)}}" class="btn nav-next">TIN TRƯỚC</a>
                </div>
                <div class="p-2 bd-highlight">
                    <a href="{{route('tin-tuc-chi-tiet',$new->id+1)}}" class="btn nav-next">TIN TIẾP THEO</a>
                </div>
              </div>
              <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach ($news as $i)
                <div class="col border-0">
                    <div class="card border-0 h100">
                    <a href="{{route('tin-tuc-chi-tiet',$i->id)}}">
                        <div>
                            <img src="{{$i->thumbnail}}" class="card-img-top">
                            <div class="card-img-overlay"><p>{{$category->cate_name}}</p></div>
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
    </div>
</div>
@stop
