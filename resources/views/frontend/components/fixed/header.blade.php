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
                            <ul class="dropdown">
                                <li><a href="./Project-details.html">Project Details</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="./services.html">Services</a></li>
                                <li><a href="./blog-details.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('device.page') }}">Product</a></li>
                        <li><a href="{{ route('about') }}">About</a></li>

                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('registration') }}">Register</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3">
                <div class="header__widget">
                    <span>Call us for any questions</span>
                    <h4>+01 123 456 789</h4>
                </div>
            </div>
        </div>
        <div class="canvas__open"><i class="fa fa-bars"></i></div>
    </div>
</header>
<!-- Header Section End -->
