<!-- Stored in resources/views/layouts/master.blade.php -->

<html>
    <head>
        @include('includes.head')
        @method('header-css')
        @stack('head-css')
    </head>
    <body>
        {{-- =================================== fullPage.js ===================================== --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/4.0.10/vendors/easings.min.js" integrity="sha512-SrKslwu6IjHEo/8mAOtkoUOT3MzHCEOFWktrC8BNtjPuBBYLYjg1y/Marat34uYfOfxDMLEwy8DLArWEVc2i+w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/4.0.10/fullpage.js" integrity="sha512-5Kp21g+Nh8kPxSiYx6V8DZEhMfw1lnFmI4trArKux2Z/4738SyB4j3F9H89s0w9jsX4M1C29QFvqA+l55rK8aw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
{{-- =================================== fullPage.js ===================================== --}}

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- owl carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @include('includes.modal-dang-ky')
        <div class="box-sizing">
            @yield('content')
        </div>
          @stack('js')
          <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
          <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    </body>
</html>
