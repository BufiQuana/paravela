<div class="tien-ich">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-xxl-3 col-sm-12  text-start mb-3">
                <h1>50+ Tiện Ích</h1>
                <h1 style="font-size: xx-large;">hải cảng trên không</h1>
                <p class="text-white pt-4">This tutorial follows Bootstrap 4, which was released in 2018, as an upgrade to Bootstrap 3, with new components, faster stylesheetc, more responsiveness, etc.

                    Bootstrap 5 (released 2021) is the newest version of Bootstrap; It supports the latest, stable releases of all major browsers and platforms. However, Internet Explorer 11 and down is not supported.

                </p>
                <a href="" class="btn contact-tags round">Xem thêm</a>
            </div>
            <div class="col-md-6 col-xxl-3 col-sm-12 mb-3">
                <div class="card">
                    <div class="card-header list-title py-2 border-0">
                        <p>Cụm tiện ích</p>
                        <h5>"TROPIACAL HARBOR"</h5>
                        <P>Tầng 1- Khuôn viên</P>
                    </div>
                    <div class="card-body ">
                        <ul class="tien-ich-list">
                            @for ($i=0;$i<20;$i++) @if ($i%2==0) <li class="white-list"> <b style="color: orange">{{$i}}. </b> A simple secondary list group item</li>
                                @else
                                <li class="orange-list"> <b style="color: orange">{{$i}}. </b> A simple secondary list group item</li>
                                @endif
                                @endfor
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xxl-3 col-sm-12 mb-3">
                <div class="card">
                    <div class="card-header list-title py-2 border-0">
                        <p>Cụm tiện ích</p>
                        <h5>"TROPIACAL HARBOR"</h5>
                        <P>Tầng 1- Khuôn viên</P>
                    </div>
                    <div class="card-body ">
                        <ul class="tien-ich-list">
                            @for ($i=0;$i<10;$i++) @if ($i%2==0) <li class="white-list"> <b style="color: orange">{{$i}}. </b> A simple secondary list group item</li>
                                @else
                                <li class="orange-list"> <b style="color: orange">{{$i}}. </b> A simple secondary list group item</li>
                                @endif
                                @endfor
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xxl-3 col-sm-12 mb-3">
                <div class="card">
                    <div class="card-header list-title py-2 border-0">
                        <p>Cụm tiện ích</p>
                        <h5>"TROPIACAL HARBOR"</h5>
                        <P>Tầng 1- Khuôn viên</P>
                    </div>
                    <div class="card-body ">
                        <ul class="tien-ich-list">
                            @for ($i=0;$i<5;$i++) @if ($i%2==0) <li class="white-list"> <b style="color: orange">{{$i}}. </b> A simple secondary list group item</li>
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