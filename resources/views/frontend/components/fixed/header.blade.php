 <!-- Add this line to the head section of your HTML file -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

 <!-- Header Section Begin -->
 <header class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="header__logo">
                    <a href="#"><img src="img/logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6">
                <nav class="header__menu mobile-menu">
                    <ul>
                        <li class="active"><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('category') }}">vehicles</a>

                        </li>
                        <li><a href="{{ route('device.page') }}">Product</a></li>

                        <li><a href="{{ route('car') }}">Package</a></li>

                        <li><a href="{{ route('about') }}">About</a></li>


                        @auth
                        @if (auth()->user()->role == 'customer')

                        <li><a href="{{ route('logout.user') }}" style="color: red">Logout</a></li>
                        <li><a href="{{ route('user.profile') }}">{{ auth()->user()->name }}</a></li>

                        @endauth
                        @else
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('registration') }}">Register</a></li>

                        @endif

                    </ul>
                </nav>
            </div>
            <div class="col-lg-3">
                <div class="header__widget">

                    <a href="{{ route('view.cart') }}" class="btn btn-warning">
                        <i class="fas fa-shopping-cart"></i> <strong>{{ session()->has('cart') ? count(session()->get('cart')) : 0 }}</strong>
                    </a>

                </div>
            </div>
        </div>
        <div class="canvas__open"><i class="fa fa-bars"></i></div>
    </div>
</header>
<!-- Header Section End -->
