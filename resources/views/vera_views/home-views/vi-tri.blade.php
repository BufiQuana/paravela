<div class="vi-tri">
    <div class="row">
        <div class="col-lg-7 col-md-12  map">
        </div>
        <div class="col-lg-5 col-md-12 d-flex flex-column">
            <div class="d-flex flex-column flex-fill pe-5 ps-3 pt-3">
                <div class="d-flex justify-content-between">
                    <h1>Vị Trí</h1>
                    <div class=""> <a href="" class="btn contact-tags round">Xem chỉ đường</a></div>
                </div>
                <p class="text-white">Trong quá trình triển khai dự án, có thể một số thông tin/ thiết kế sẽ thay đổi cho phù hợp với lợi ích của khách hàng. Hình ảnh chỉ mang tính chất minh hoạ</p>
                <div class="flex-fill d-flex flex-column justify-content-center">
                    <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col text-center">
                                        <img src="{{asset('imgs/vi-tri-car.png')}}" alt="">
                                        <p class="linear-gradient mb-0">5 phút</p>
                                        <p class="text-white">đến Sân bay quốc tế Cam Ranh</p>
                                    </div>
                                    <div class="col text-center">
                                        <img src="{{asset('imgs/vi-tri-car.png')}}" alt="">
                                        <p class="linear-gradient mb-0">10 phút</p>
                                        <p class="text-white">đến Sân bay quốc tế Cam Ranh</p>
                                    </div>
                                    <div class="col text-center">
                                        <img src="{{asset('imgs/vi-tri-car.png')}}" alt="">
                                        <p class="linear-gradient mb-0">15 phút</p>
                                        <p class="text-white">đến Sân bay quốc tế Cam Ranh</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col text-center">
                                        <img src="{{asset('imgs/vi-tri-car.png')}}" alt="">
                                        <p class="linear-gradient mb-0">25 phút</p>
                                        <p class="text-white">đến Sân bay quốc tế Cam Ranh</p>
                                    </div>
                                    <div class="col text-center">
                                        <img src="{{asset('imgs/vi-tri-car.png')}}" alt="">
                                        <p class="linear-gradient mb-0">30 phút</p>
                                        <p class="text-white">đến Sân bay quốc tế Cam Ranh</p>
                                    </div>
                                    <div class="col text-center">
                                        <img src="{{asset('imgs/vi-tri-car.png')}}" alt="">
                                        <p class="linear-gradient mb-0">35 phút</p>
                                        <p class="text-white">đến Sân bay quốc tế Cam Ranh</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                    <!-- <div class="row">
                        <div class="col text-center">
                            <img src="{{asset('imgs/vi-tri-car.png')}}" alt="">
                            <p class="linear-gradient mb-0">5 phút</p>
                            <p class="text-white">đến Sân bay quốc tế Cam Ranh</p>
                        </div>
                        <div class="col text-center">
                            <img src="{{asset('imgs/vi-tri-car.png')}}" alt="">
                            <p class="linear-gradient mb-0">10 phút</p>
                            <p class="text-white">đến Sân bay quốc tế Cam Ranh</p>
                        </div>
                        <div class="col text-center">
                            <img src="{{asset('imgs/vi-tri-car.png')}}" alt="">
                            <p class="linear-gradient mb-0">15 phút</p>
                            <p class="text-white">đến Sân bay quốc tế Cam Ranh</p>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="row text-white introduce pt-2 pe-5 ps-3 pt-3">
                <h2>
                    Nơi trái tim thiên đường
                </h2>
                <p>Trong quá trình triển khai dự án, có thể một số thông tin/ thiết kế sẽ thay đổi cho phù hợp với lợi ích của khách hàng. Hình ảnh chỉ mang tính chất minh hoạ</p>
                <ul>
                    @for ($i=0; $i<3;$i++) <li><span>💛</span> Nơi trái tim thiên đường</li>
                        @endfor
                </ul>
            </div>
        </div>
    </div>
</div>