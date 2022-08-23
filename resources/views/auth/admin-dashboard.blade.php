@extends('auth.default')
@section('content')



<div class="bg-white pt-3 pb-1"><div class="container"><p>Trang chủ</p></div></div>
<br>
<br>

<div class="bg-light container p-5 rounded shadow">


    <div class="row">
        <div class="col-sm-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Home views settings:</h5>
              <p class="card-text">Tuỳ chỉnh các trang home, giới thiệu...</p>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#homeModal">tuỳ chỉnh home views</a>
            </div>
          </div>
        </div>

        <div class="col-sm-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Thư viện ảnh:</h5>
                <p class="card-text">Hiện đang có : <b></b> </p>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#imgModaLabel">
                    Thêm ảnh
                  </button>

              </div>
            </div>
          </div>

        <div class="col-sm-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tin tức:</h5>
              <p class="card-text">Hiện đang có : <b></b> bài viết</p>
              <a href="{{route('input-new')}}" class="btn btn-primary">Tạo tin mới</a>
              <a href="{{route('listing')}}" class="btn btn-primary">Quản lý tin</a>
            </div>
          </div>
        </div>
      </div>


</div>

<!-- Button trigger modal -->


  <!-- Modal -->
  <div class="modal fade text-center" id="homeModal" tabindex="-1" aria-labelledby="homeModaLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="homeModaLabel">Chọn trang muốn chỉnh</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="d-grid gap-2 col-6 mx-auto">
                <a href="" class="btn btn-primary">Giới thiệu</a>
                <a href="" class="btn btn-danger">Tiện ích</a>
              </div>

        </div>
        {{-- <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div> --}}
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="imgModaLabel" tabindex="-1" aria-labelledby="imgModaLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="imgModaLabel">Thêm ảnh vào thư viện</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{route('libStore')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-floating pb-3">
                    <select class="form-select" id="category_id" name="category_id" aria-label="Floating label select example">
                      @foreach ($category as $i)
                      <option value="{{$i->id}}">{{$i->cate_name}}</option>
                      @endforeach
                    </select>
                    <label for="floatingSelect">Danh mục</label>
                  </div>


                <input type="file" class="form-control" id="image" name="image">


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Huỷ</button>
          <button type="submit" class="btn btn-primary">Đăng</button>
        </div>
    </form>
      </div>
    </div>
  </div>
<br><br>
@stop
