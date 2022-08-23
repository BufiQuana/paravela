@extends('includes.tab-default')
@push('head-css')
@vite(['resources/css/gioi-thieu.css'])
@endpush
@section('content')

<div class="bg-white pt-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="row py-1">
                    <h1>KN Para Vela</h1>
                    <p>Set the direction of flex items in a flex container with direction utilities. In most cases you can omit the horizontal class here as the browser default is row. However, you may encounter situations where you needed to explicitly set this value, or .flex-row-reverse to start the horizontal direction from the opposite side.c</p>
                </div>
                <div class="row py-1">
                    <img src="{{asset('imgs/dau-tu-1.png')}}" alt="">
                </div>
                <div class="row py-1">
                    <img src="{{asset('imgs/dau-tu-2.png')}}" alt="">
                </div>
                <div class="p-0 text-center" >
                    <a href="{{route('can-ho-mau')}}" style="text-decoration: none">
                        <img src="{{asset('imgs/intro-plut.png')}}" style="margin-top: -7%;" alt="">
                        <p style="color: #019a81;">Xem thêm về dự án</p></a>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="row ">
                    <img src="{{asset('imgs/dau-tu-4.png')}}" alt="">
                </div>
                <div class="row py-2">
                    <img src="{{asset('imgs/dau-tu-3.png')}}" alt="">
                </div>
                <div class="row py-2">
                    <p><b style="color: #bf8e2c;">Tên dự án:</b> Tháp nghỉ dưỡng Vara Vela</p>
                    <p><b style="color: #bf8e2c;">Chủ đầu tư:</b> Công ty TNHH KN Cam Ranh</p>
                    <p><b style="color: #bf8e2c;">Vị trí:</b> KN Paradise, bãi Dài, P. Cam Nghĩa, TP. Cam Ranh, Khánh Hoà</p>
                    <p><b style="color: #bf8e2c;">Quy mô:</b> 7749 phòng, ok ?</p>
                    <p><b style="color: #bf8e2c;">Loại hình sản phẩm:</b> seasuite</p>
                    <p><b style="color: #bf8e2c;">Pháp lý:</b> sở hữu lâu dài</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg-light pt-5 pb-0">
    <div class="container pb-0">
        <div class="row">
            <div class="col-md-4 col-12 text-center">
                <img src="{{asset('imgs/para-logo.png')}}" alt="">
            </div>
            <div class="col-md-8 col-12 text-start">
                <h4>Set the direction of flex items in a flex container with direction utilities.</h4>
                <p>Set the direction of flex items in a flex container with direction utilities. In most cases you can omit the horizontal class here as the browser default is row. However, you may encounter situations where you needed to explicitly set this value (like responsive layouts).

                    Use .flex-row to set a horizontal direction (the browser default), or .flex-row-reverse to start the horizontal direction from the opposite side.
                </p>
            </div>

        </div>
        <div class="row pt-3 pb-0">
            <div class="col">
                <img src="{{asset('imgs/gioi-thieu-1.png')}}" class="img-fluid">
            </div>
            <div class="col">
                <img src="{{asset('imgs/gioi-thieu-2.png')}}" class="img-fluid">
            </div>
            <div class="col">
                <img src="{{asset('imgs/gioi-thieu-3.png')}}" class="img-fluid">
            </div>
        </div>
    </div>
</div>

<div class="bg-white py-5">
    <div class="container pt-5">
        <div class="row">
            <div class="col-md-8 col-12">
                <h4>Set the direction of flex items in a flex container with direction utilities.</h4>
                <p>Set the direction of flex items in a flex container with direction utilities. In most cases you can omit the horizontal class here as the browser default is row. However, you may encounter situations where you needed to explicitly set this value (like responsive layouts).

                    Use .flex-row to set a horizontal direction (the browser default), or .flex-row-reverse to start the horizontal direction from the opposite side.
                </p>
            </div>
            <div class="col-md-4 col-12 text-center">
                <img src="{{asset('imgs/gioi-thieu-dxmb.png')}}" alt="">
            </div>
        </div>

        <div class="row text-center tong-quan">
            <div class="col shadow ronded-5 p-5 tong-quan">
                <div class="row border-bottom">
                    <div class="col border-end p-4">
                        <h2>+3000</h2>
                        <b style="color: gray;">NHÂN SỰ</b>
                    </div>
                    <div class="col border-end p-4">
                        <h2>23</h2>
                        <b style="color: gray;">CHI NHÁNH VÀ CÔNG TY THÀNH VIÊN</b>
                    </div>
                    <div class="col p-4">
                        <h2>28</h2>
                        <b style="color: gray;">CĐT CHỌN ĐẤT XANH LÀM ĐẠI DIỆN TƯ VẤN, BÁN HÀNG VÀ QUẢ LÝ DỰ ÁN</b>
                    </div>
                </div>
                <div class="row">
                    <div class="col border-end p-4">
                        <h2>+250.000</h2>
                        <b style="color: gray;">KHÁCH HÀNG SỬ DỤNG DỊCH VỤ CỦA ĐẤT XANH</b>
                    </div>
                    <div class="col border-end p-4">
                        <h2>+500</h2>
                        <b style="color: gray;">DỰ ÁN ĐƯỢC PHÂN PHỐI</b>
                    </div>
                    <div class="col p-4">
                        <h2>20</h2>
                        <b style="color: gray;">TỈNH THÀNH PHỐ CÓ DỊCH VỤ CỦA ĐẤT XANH</b>
                    </div>
                </div>
            </div>
        </div>

        <div class="row text-center">
            <div class="p-5"><img src="{{asset('imgs/dxmb.png')}}" alt="" class="img-fluid"></div>

                <a href="https://datxanhmienbac.com.vn/">Xem thêm về Đất Xanh Miền Bắc</a>

                <div class="d-flex justify-content-center P-5"><img src="{{asset('imgs/facebook.png')}}" alt="" class="p-1"> <img src="{{asset('imgs/youtube.png')}}" alt="" class="p-1"></div>

        </div>
    </div>
</div>
@stop
