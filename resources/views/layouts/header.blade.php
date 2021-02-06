<!-- Start Header Area -->
<header class="header_area sticky-header">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light main_box">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                J-M SHOP
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav mr-auto ml-5">
                        <li class="nav-item"><a class="nav-link" href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a></li>
                        <li class="nav-item submenu dropdown">
                            <a href="{{ route('shop.index') }}" class="nav-link "
                                ><i class="fas fa-shopping-bag"></i> Shop</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}"> <i class="fas fa-envelope"></i> Contact</a></li>
                    </ul>
                    <!-- login logout -->
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        @guest
                            
                       
                        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}"><i class="fas fa-user-plus"></i> Sign Up</a></li>
                        <li class="nav-item submenu dropdown">
                            <a href="{{ route('login') }}" class="nav-link "
                             aria-expanded="false"><i class="fas fa-sign-in-alt"></i> login</a>
                        </li>
                        @else
                        <li class="nav-item"><a class="nav-link" href="{{ route('orders') }}"> <i class="fas fa-truck"></i> Orders</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('logout') }}"> <i class="fas fa-sign-out-alt"></i> Logout</a></li>
                        @endguest
                        <li class="nav-item"><a class="nav-link" href="{{ route('cart.index') }}"> <i class="fab fa-opencart"></i> Cart</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<!-- End Header Area -->