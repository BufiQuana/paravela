@extends('auth.default')
@section('content')
<div class="bg-white pt-3 pb-1"><div class="container"><p><a href="{{route('dashboard')}}">Trang chủ</a> / Đăng tin</p></div></div>
<br>
<br>

    <div class="container bg-light p-5 rounded shadow">
        <form action="{{route('storeNew')}}" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="row">
                    {{-- ======================================================== --}}
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 ">
                        <label for="basicInput" class="pt-1">Nội Dung</label>
                        <textarea name="content" id="content" style="min-height: 500px" class="py-5" style="height: 400px"></textarea>

                        <script>
                          $(document).ready(function() {
                              $('#content').summernote();
                          });
                        </script>

                        <label for="basicInput" class="pt-1">Tác Giả</label>
                        <input type="text" class="form-control" id="author" name="author" >

                </div>
                                {{-- ======================================================== --}}
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                      <div class="form-floating">
                        <select class="form-select" id="category_id" name="category_id" aria-label="Floating label select example">
                          @foreach ($category as $i)
                          <option value="{{$i->id}}">{{$i->cate_name}}</option>
                          @endforeach
                        </select>
                        <label for="floatingSelect">Danh mục</label>
                      </div>

                      <label for="basicInput" >Tiêu Đề</label>
                        <input type="text" class="form-control" id="title" name="title" >

                        <label for="basicInput" class="pt-1">Tên</label>
                        <input type="text" class="form-control" id="name" name="name" >

                        <label for="basicInput" class="pt-1">Meta Description</label>
                        <input type="text" class="form-control" id="meta_description" name="meta_description" >

                        <label for="basicInput" class="pt-1">Ảnh mô tả</label>
                        <input type="file" class="form-control" id="thumbnail" name="thumbnail" >

                        <label for="basicInput" class="pt-1">description</label>
                        <input type="text" class="form-control " id="description" name="description" >



                </div>
                <div class="pt-3  d-flex justify-content-end"><button type="submit" class="btn btn-info px-5 py-2 ">Đăng bài</button></div>

        </div>
        </form>
        </div>
@stop
