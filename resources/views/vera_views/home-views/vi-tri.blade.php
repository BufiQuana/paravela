<div class="vi-tri">
    <div class="row">
        <div class="col-7 map">
        </div>
        <div class="col-5">
            <div class="row ">
                <div class="d-flex ">
                    <div class="flex-grow-1"><h1>Vị Trí</h1></div>
                    <div class=""></div>
                    <div class=""> <a href="" class="btn contact-tags round">Xem chỉ đường</a></div>
                  </div>
                  <p class="text-white">Trong quá trình triển khai dự án, có thể một số thông tin/ thiết kế sẽ thay đổi cho phù hợp với lợi ích của khách hàng. Hình ảnh chỉ mang tính chất minh hoạ</p>
                  <div >
                        <div class="row">
                            <div class="col">
                                <img src="{{asset('imgs/vi-tri-car.png')}}" alt="">
                                <p><b>5 phút</b></p>
                            </div>
                            <div class="col">
                                <img src="{{asset('imgs/vi-tri-car.png')}}" alt="">
                                <b>10 phút</b>
                            </div>
                            <div class="col">
                                <img src="{{asset('imgs/vi-tri-car.png')}}" alt="">
                                <b>15 phút</b>
                            </div>
                        </div>
                  </div>
            </div>
            <div class="row text-white introduce pb-5 pt-2">
                <h2>
                    Nơi trái tim thiên đường
                </h2>
                <p>Trong quá trình triển khai dự án, có thể một số thông tin/ thiết kế sẽ thay đổi cho phù hợp với lợi ích của khách hàng. Hình ảnh chỉ mang tính chất minh hoạ</p>
                <ul>
                    @for ($i=0; $i<3;$i++)
                        <li><span>💛</span> Nơi trái tim thiên đường</li>
                    @endfor
                </ul>
            </div>
        </div>
    </div>
</div>
