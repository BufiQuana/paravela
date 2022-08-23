@extends('includes.tab-default')
@push('head-css')
@vite(['resources/css/tien-ich.css'])
@endpush
@section('content')

<div style="background-color: #f8f4ea" class="py-5">
    <div class="container">
        <div class="box-content">
            <div class="container ">
                <div class="row">
                    <div class="col-12 col-md-3 text-md-start text-center pb-2">
                        <h1 style="color: #bd9032">50+ Tiện Ích</h1>
                        <h1 style="font-size: xx-large; color: #bd9032" >hải cảng trên không</h1>
                        <p class="text-black pt-4">This tutorial follows Bootstrap 4, which was released in 2018, as an upgrade to Bootstrap 3, with new components, faster stylesheetc, more responsiveness, etc.

                            Bootstrap 5 (released 2021) is the newest version of Bootstrap; It supports the latest, stable releases of all major browsers and platforms. However, Internet Explorer 11 and down is not supported.

                           </p>
                        <a href="" class="btn contact-tags round">Xem thêm</a>
                    </div>
                    <div class="col-12 col-md-3 vh-75 pb-2">
                        <div class="card">
                            <div class="card-header list-title py-2 border-0">
                                <p>Cụm tiện ích</p>
                                <h5>"TROPIACAL HARBOR"</h5>
                                <P>Tầng 1- Khuôn viên</P>
                            </div>
                            <div class="card-body ">
                                <ul class="tien-ich-list">
                                    @for ($i=0;$i<20;$i++)
                                        @if ($i%2==0)
                                            <li class="white-list"> <b style="color: orange">{{$i}}. </b> A simple secondary list group item</li>
                                        @else
                                            <li class="orange-list"> <b style="color: orange">{{$i}}. </b> A simple secondary list group item</li>
                                        @endif
                                    @endfor
                                </ul>
                            </div>
                          </div>
                    </div>
                    <div class="col-12 col-md-3 pb-2">
                        <div class="card">
                            <div class="card-header list-title py-2 border-0">
                                <p>Cụm tiện ích</p>
                                <h5>"TROPIACAL HARBOR"</h5>
                                <P>Tầng 1- Khuôn viên</P>
                            </div>
                            <div class="card-body ">
                                <ul class="tien-ich-list">
                                    @for ($i=0;$i<10;$i++)
                                        @if ($i%2==0)
                                            <li class="white-list"> <b style="color: orange">{{$i}}. </b> A simple secondary list group item</li>
                                        @else
                                            <li class="orange-list"> <b style="color: orange">{{$i}}. </b> A simple secondary list group item</li>
                                        @endif
                                    @endfor
                                </ul>
                            </div>
                          </div>
                    </div>
                    <div class="col-12 col-md-3 pb-2">
                        <div class="card">
                            <div class="card-header list-title py-2 border-0">
                                <p>Cụm tiện ích</p>
                                <h5>"TROPIACAL HARBOR"</h5>
                                <P>Tầng 1- Khuôn viên</P>
                            </div>
                            <div class="card-body ">
                                <ul class="tien-ich-list">
                                    @for ($i=0;$i<5;$i++)
                                        @if ($i%2==0)
                                            <li class="white-list"> <b style="color: orange">{{$i}}. </b> A simple secondary list group item</li>
                                        @else
                                            <li class="orange-list"> <b style="color: orange">{{$i}}. </b> A simple secondary list group item</li>
                                        @endif
                                    @endfor
                                </ul>
                            </div>
                          </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="bg-white" >
    <div class="container">
        <div class="row text-start ">
            <h1 class="py-5 text-md-start text-center" style="color: #12565a">Cộng thêm tiện ích của KN PARADISE</h1>
            <div class="col">
                <ul><h4>Nghỉ dưỡng</h4>
                    <li>Wyndham grand KN Paradise Cam Ranh (đã hoạt động...)</li>
                    <li>Khách sạn, Resort, Căn hộ dịch vụ cao cấp</li>
                    <li>Trung tâm SPA chăm sóc sức khoẻ: 2,88 ha</li>
                </ul>
                <ul><h4>Thương mại</h4>
                    <li>Phố thương mại đa quốc gia</li>
                    <li>Trung tâm thương mại</li>
                    <li>Làng văn hoá</li>
                </ul>
                <ul><h4>KN GOLF LINKS: 90ha - Đã vận hành 2018 gồm:</h4>
                    <li>Sân Golf 27 lỗ: The Link(18 lỗ) - The Oasis(9 lỗ) - được thiết kế bởi huyền thoại golf: Cá mập trắng -Greg Nỏman</li>
                    <li>Sân tập 9 green nhắm vào khu putting green 280 yard</li>
                    <li>Nhà câu lạc bộ(clubhouse)</li>
                </ul>
            </div>
            <div class="col">
                <ul><h4>Giải trí</h4>
                    <li>Khu phức hợp giải trí & Trung tâm hội nghị</li>
                    <li>Khu vui chơi giải trí trong nhà</li>
                    <li>Câu lạc bộ bờ biển</li>
                    <li>Khu trò chơi biển</li>
                    <li>Công viên chủ đề</li>
                    <li>Công viên nước</li>
                </ul>
                <ul><h4>Tiện tích cộng đồng</h4>
                    <li>Bến du thuyền</li>
                    <li>Khu thể dục thể thao đa năng</li>
                    <li>Công viên Cát Tường</li>
                    <li>Quảng trường văn hoá & nghệ thuật</li>
                    <li>Cầu tình yêu</li>
                    <li>Làng dưỡng lão cao cấp</li>
                    <li>Trường học quốc tế</li>
                    <li>Bệnh viện quốc tế</li>
                </ul>
            </div>
        </div>


    </div>
</div>

<div class="bg-white">
    <div class="owl-carousel">
        <div class="item">
          <a href="#">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/43033/slider_bags.jpg" alt="" />
          <div class="inner">
            <a href="#">The Erling Bag</a>
          </div>
          </a>
      </div>
          <div class="item black">
          <a href="#">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/43033/slider_book_cover.jpg" alt="" />
          <div class="inner">
            <a href="#">Summer Book Series</a>
          </div>
          </a>
      </div>
          <div class="item">
          <a href="#">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/43033/slider_bags.jpg" alt="" />
          <div class="inner">
            <a href="#">The Erling Bag</a>
          </div>
          </a>
      </div>
          <div class="item black">
          <a href="#">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/43033/slider_book_cover.jpg" alt="" />
          <div class="inner">
            <a href="#">Summer Book Series</a>
          </div>
          </a>
      </div>
          <div class="item">
          <a href="#">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/43033/slider_bags.jpg" alt="" />
          <div class="inner">
            <a href="#">The Erling Bag</a>
          </div>
          </a>
      </div>
       <div class="item black">
          <a href="#">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/43033/slider_book_cover.jpg" alt="" />
          <div class="inner">
            <a href="#">Summer Book Series</a>
          </div>
          </a>
      </div>
    </div>
</div>


<script>
    $('.owl-carousel').owlCarousel({
    stagePadding: 50,
    loop:true,
    margin:10,
    nav:false,
    items:1,
    lazyLoad: true,

  responsive:{
        0:{
            items:1,
            stagePadding: 60
        },
        600:{
            items:1,
            stagePadding: 100
        },
        1000:{
            items:1,
            stagePadding: 200
        },
        1200:{
            items:1,
            stagePadding: 250
        },
        1400:{
            items:1,
            stagePadding: 300
        },
        1600:{
            items:1,
            stagePadding: 350
        },
        1800:{
            items:1,
            stagePadding: 400
        }
    }
})
</script>
@stop
