@extends('includes.tab-default')
@push('head-css')
@vite(['resources/css/can-ho.css'])
@endpush
@section('content')

<div class="bg-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 mb-3">
                <img src="{{asset('imgs/san-pham.png')}}" alt="" class="can-ho-img">
            </div>
            <div class="col-md-6 col-sm-12 mb-3">
                <h1>title</h1>
                <h4> supporting text below as </h4>
                <p>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
        </div>
        <div class="row flex-md-row-reverse">
            <div class="col-md-6 col-sm-12 mb-3">
                <img src="{{asset('imgs/san-pham.png')}}" alt="" class="can-ho-img">
            </div>
            <div class="col-md-6 col-sm-12 mb-3">
                <h1>title</h1>
                <h4> supporting text below as </h4>
                <p>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12 mb-3">
                <img src="{{asset('imgs/san-pham.png')}}" alt="" class="can-ho-img">
            </div>
            <div class="col-md-6 col-sm-12 mb-3">
                <h1>title</h1>
                <h4> supporting text below as </h4>
                <p>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
        </div>
    </div>
</div>

@stop