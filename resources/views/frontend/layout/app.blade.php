<!DOCTYPE html>
<html lang="zxx">

<head>
    @include('frontend\components\fixed\meta')

    @include('frontend\components\fixed\style')
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__logo">
            <a href="#"><img src="img/logo.png" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__widget">
            <span>Call us for any questions</span>
            <h4>+01 123 456 789</h4>
        </div>
    </div>
    <!-- Offcanvas Menu End -->



    @include('frontend\components\fixed\header')



        @yield('content')



    @include('frontend\components\fixed\footer')

    @include('frontend\components\fixed\script')
</body>

</html>
