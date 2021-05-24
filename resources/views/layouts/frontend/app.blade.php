<!DOCTYPE html>
<html lang="en">

<head>
    <!-- set the encoding of your site -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- set the page title -->
    <title>Globelgri</title>
    <!-- include google roboto font cdn link -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <!-- include the site bootstrap stylesheet -->
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.css')}}">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="{{asset('frontend/css/fancybox.css')}}">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="{{asset('frontend/style.css')}}">
    <style>
        .findFormBlock .btn {
    padding: 8px;
    font-size: 25px;
    line-height: 1.2;
}
.headerHolder {
    padding-top: 28px;
    padding-bottom: 0px;
}
    </style>
</head>

<body>
    <!-- pageWrapper -->
    <div id="pageWrapper">
        <!-- pageMenuPushWrap -->
        <div class="pageMenuPushWrap pageMenuPushWrap1">
            <!-- bgBaseWrap -->
            <div class="bgBaseWrap">
                <!-- pageHeader -->
                <header id="pageHeader" class="bgWhite offsetBottom">

                    <!-- pageHeaderWrap -->
                    <div class="pageHeaderWrap">

                        <?php
                           $phone = '';
                            $email = '';
                            $address = '';
                            $description = '';
                            $logo = '';
                            $setting = App\GeneralSetting::get();
                            foreach ($setting as $row) {
                                $phone = $row->phone;
                                $email = $row->email;
                                $address = $row->address;
                                $description = $row->description;
                                $logo = $row->logo;
                            }
                        ?>
                      
                        <div class="container-fluid" style="background-color: #f0f9fb">
                            
                            <!-- headerHolder -->
                            <div class="headerHolder" style="background-color: #f0f9fb">
                                <div class="row">
                                    <div class="col-xs-6 col-sm-5" style="margin-left:7%;">
                                        <ul class="nav navbar-nav pageMainNav pageMainNav1" >
                                            <li class="active" >
                                                {{-- <li class="active dropdown"> --}}
                                                <a style="color: #8b5925" href="{{route('index')}}">Home</a>
                                                {{-- <a href="#" class="dropdown-toggle">Home<span class="caret"></span> --}}
                                                {{-- <div class="frame-wrap">
                                                    <div class="frame">
                                                        <ul
                                                            class="dropdown-menu pageMainNavDropdown pageMainNavDropdown1">
                                                            <li><a href="home.html">Homepage 1</a></li>
                                                            <li><a href="home2.html">Homepage 2</a></li>
                                                            <li><a href="home3.html">Homepage 3</a></li>
                                                            <li><a href="home4.html">Homepage 4</a></li>
                                                            <li><a href="home5.html">Homepage 5</a></li>
                                                            <li><a href="home6.html">Homepage 6</a></li>
                                                        </ul>
                                                    </div>
                                                </div> --}}
                                            </li>
                                            <!-- remove dropdownFull class when its just regular dropdown -->
                                            <li>

                                            <li class="dropdown dropdownFull">
                                                <a href="#" class="dropdown-toggle" style="color: #8b5925">Buy <span class="caret"></span></a>
                                                <div class="frame-wrap">
                                                    <div class="frame">
                                                        <ul
                                                            class="dropdown-menu pageMainNavDropdown pageMainNavDropdown1">
                                                            
                                                            <li><a href="{{route('home_for_sale')}}">Homes for Sale</a></li>
                                                            <li><a href="{{route('home_for_sale')}}">Open Houses</a></li>
                                                            <li><a href="{{route('home_for_sale')}}">New Homes</a></li>
                                                            <li><a href="{{route('home_for_sale')}}">Recently Soled</a></li>
                                                            <li><a href="{{route('home_for_sale')}}">See Newest Listning</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>

                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" style="color: #8b5925">Rent<span class="caret"></span></a>
                                                <div class="frame-wrap">
                                                    <div class="frame">
                                                        <ul
                                                            class="dropdown-menu pageMainNavDropdown pageMainNavDropdown1">
                                                           
                                                            <li><a href="{{route('home_for_sale')}}">All Rentals</a></li>
                                                            <li><a href="{{route('home_for_sale')}}">Apartments for Rent</a></li>
                                                            <li><a href="{{route('home_for_sale')}}">Houses for Rent</a></li>
                                                            <li><a href="{{route('home_for_sale')}}">Roomes for Rent</a></li>
                                                            <li><a href="{{route('home_for_sale')}}">See Newest Listning</a></li>
                                                            <li><a href="{{route('home_for_sale')}}">Post Rental Listning</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                            <li class="dropdown">

                                                <a href="#" class="dropdown-toggle" style="color: #8b5925">Mortgage<span
                                                        class="caret"></span></a>
                                                <div class="frame-wrap">
                                                    <div class="frame">
                                                        <ul
                                                            class="dropdown-menu pageMainNavDropdown pageMainNavDropdown1">
                                                           
                                                            <li><a href="{{route('home_for_sale')}}">Mortgage Overview </a></li>
                                                            <li><a href="{{route('home_for_sale')}}">Get Pre-Qualified</a></li>
                                                            <li><a href="{{route('home_for_sale')}}">Mortgage Rates</a></li>
                                                            <li><a href="{{route('home_for_sale')}}">Refinance Rates</a></li>
                                                            <li><a href="{{route('home_for_sale')}}">Mortgage Calculator</a></li>
                                                            <li><a href="{{route('home_for_sale')}}">Affordability Calculator</a></li>
                                                            <li><a href="{{route('home_for_sale')}}">Refinance
                                                                    Calculator</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>

                                    </div>
                                        <div class="col-xs-6 col-sm-2" style="margin-left:-7%">
                                        <!-- logo -->
                                        @if ($logo)
                                        <div class="logo"><a href="{{route('index')}}"><img src="{{$logo}}" style="height:120px; width:135px;margin-top:-35px" alt="globelgri"></a>
                                        </div>
                                        @else
                                        <div class="logo"><a href="{{route('index')}}"><img
                                                    src="{{asset('frontend/images/logo5.png')}}" style="height:120px; width:135px; margin-top:-35px" alt="globelgri"></a>
                                        </div>
                                        @endif
                                    </div>
                                    <div class="col-xs-6 col-sm-4 d-flex" style="margin-left:0%">
                                       @if(Auth::check())
                                    <!-- headerModalOpener -->
                                       <ul class="list-unstyled UserLinksList">
                                        <li>
                                            <a href="{{route('property.create')}}" >
                                                <i class="fa fa-plus" style="color:#8b5925"></i>&nbsp;<strong class="text fwNormal hidden-xs hidden-sm" style="color: #8b5925"> Submit Property</strong>
                                            </a>
                                        </li>
                                    </ul>
                                    <a href="{{route('agent.dashboard')}}" class="headerModalOpener text-uppercase fontNeuron fwBold" style="background-color: #8b5925">Dashboard</a>
                                    @else
                                    <ul class="list-unstyled UserLinksList">
                                        <li>
                                            <a href="#popup1" class="lightbox">
                                                <i class="fi flaticon-social icn" style=" color: #8b5925;"></i>
                                                <strong class="text fwNormal hidden-xs hidden-sm" style="color: #8b5925">Login</strong>
                                            </a>
                                        </li>
                                        @if (Route::has('register'))
                                        <li>
                                            <a href="#popup1" class="lightbox">
                                                <i class="fi flaticon-edit icn" style="color: #8b5925"></i>
                                                <strong class="text fwNormal hidden-xs hidden-sm" style="color: #8b5925">Register</strong>
                                            </a>
                                        </li>
                                        @endif
                                    </ul>
                                    <a href="" class="headerModalOpener text-uppercase fontNeuron fwBold" style="background-color: #8b5925">Saved Property</a>
                                    @endif
                                    </div>
                                </div>
                            </div>
                            <!-- pageNav -->
                        </div>
                    </div>
                </header>
                @yield('content')
            </div>
            <!-- pageFooterBlock -->
            <div class="pageFooterBlock">
                <!-- pageAside -->
                <aside class="pageAside textWhite">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-4 col">
                                <h2 class="fontNeuron fwSemi text-uppercase">LemanHouse</h2>
                                @if($description)
                                <p>{{$description}}</p>
                                @else
                                <p>Zillow Group is committed to ensuring digital accessibility for individuals with disabilities. </p>
                                @endif
                                <address>
                                    <dl>
                                        <dt><i class="fi flaticon-navigation" style="color: white"></i></dt>
                                        @if ($address)
                                        <dd>{{$address}}</dd>
                                        @else
                                        <dd>PO Box 16122 Collins Street West Victoria 8007 Australia</dd>
                                        @endif

                                        <dt><i class="fi flaticon-24-hours" style="color: white"></i></dt>
                                        @if ($phone)
                                        <dd><a href="tel:+12463450695">{{$phone}}</a></dd>
                                        @else
                                        <dd><a href="tel:+12463450695">+111-222-333</a></dd>
                                        @endif

                                        <dt><i class="fi flaticon-mail" style="color: white"></i></dt>
                                        @if ($email)
                                        <dd><a
                                                href="mailto:&#105;&#110;&#102;&#111;&#064;&#104;&#111;&#109;&#101;&#115;&#119;&#101;&#101;&#116;&#046;&#099;&#111;&#109;">{{$email}}</a>
                                        </dd>
                                        @else
                                        <dd><a
                                                href="mailto:&#105;&#110;&#102;&#111;&#064;&#104;&#111;&#109;&#101;&#115;&#119;&#101;&#101;&#116;&#046;&#099;&#111;&#109;">globelgri@gmail.com</a>
                                        </dd>
                                        @endif

                                    </dl>
                                </address>
                            </div>
                            <!-- ftNav -->
                            <nav class="col-xs-12 ftNav col-sm-4 col">
                                <h2 class="fontNeuron fwSemi text-uppercase">Useful Links</h2>
                                <div class="ftNavListsHolder">
                                    <ul class="list-unstyled">
                                        <li><a href="#">Terms of Use</a></li>
                                        <li><a href="#">About US</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Contact Support</a></li>
                                        <li><a href="#">Careers</a></li>
                                        <li><a href="#">FAQs</a></li>
                                    </ul>
                                    <ul class="list-unstyled">
                                        <li><a href="#">FAQ</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Our Agents</a></li>
                                        <li><a href="#">How It Works</a></li>
                                        <li><a href="#">Contact</a></li>
                                    </ul>
                                </div>
                            </nav>
                            <div class="col-xs-12 col-sm-4 col">
                                <h2 class="fontNeuron fwSemi text-uppercase">LATEST PROPERTIES</h2>
                                <!-- postsWidgetList -->
                                <ul class="list-unstyled postsWidgetList">
                                    <li>
                                        <div class="alignleft">
                                            <a href="#">
                                                <img src="https://via.placeholder.com/90x70" alt="image description">
                                            </a>
                                        </div>
                                        <div class="descrWrap">
                                            <h3 class="fwNormal"><a href="#">Do what you love and tomorrow will pay</a>
                                            </h3>
                                            <h4 class="fwSemi" style="color: white">$ 1,27,000</h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="alignleft">
                                            <a href="#">
                                                <img src="https://via.placeholder.com/90x70" alt="image description">
                                            </a>
                                        </div>
                                        <div class="descrWrap">
                                            <h3 class="fwNormal"><a href="#">We’re ready for the TRID rules!</a></h3>
                                            <h4 class="fwSemi" style="color: white">$ 527,000</h4>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </aside>
                <!-- pageFooter -->
                <footer id="pageFooter" style="background-color: #06356d">
                    <div class="container pageFooterHolder" >
                        <div class="row">
                            <div class="col-xs-12 col-sm-push-6 col-sm-6">
                                <!-- pageFooterSocial -->
                                <ul class="socialNetworks list-unstyled pageFooterSocial">
                                    <li style="color: white"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li style="color: white"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li style="color: white"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li style="color: white"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    <li style="color: white"><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                    <li style="color: white"><a href="#"><i class="fab fa-google"></i></a></li>
                                </ul>
                            </div>
                            <div class="col-xs-12 col-sm-pull-6 col-sm-6">
                                <p style="color: white">2021 <a href="#">globelgri</a> - All rights reserved</p>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- btnScrollToTop -->
                <a href="#pageWrapper" class="btnScrollToTop smooth textWhite">Scroll Top <i
                        class="fi flaticon-arrows btnScrollIcn"></i></a>
                <span class="bgCover elemenBlock"
                    style="background-image: url(https://via.placeholder.com/1920x520);"></span>
            </div>
        </div>
        <!-- pagePopupWrap -->
        <div class="popup-holder">
            <div id="popup1" class="lightbox-demo">
                <!-- popupLoginFrom -->
                <form action="{{ route('login') }}" method="post"
                    class="popupHolderWrap bgLightDark center-block popupLarge popupLoginFrom">
                    @csrf
                    <ul class="list-unstyled popupTabsetList text-center fwBold text-uppercase fontNeuron">
                        <li class="active"><a href="#tab01">LOGIN</a></li>
                        <li><a href="#tab02">REGISTER</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab01" class="tab-active">
                            <div class="popupColsHolder">
                                <div class="col bgWhite">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control elemenBlock"
                                            placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control elemenBlock"
                                            placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label class="fwNormal customLabelCheck">
                                            <input type="checkbox" class="customFormInputReset" name="remember"
                                                id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <span class="fakeCheckbox"></span>
                                            <span class="fakeLabel">Remember me</span>
                                        </label>
                                    </div>
                                    <button type="submit"
                                        class="btn btnSecondary elemenBlock fontNeuron fwNormal text-uppercase btnSubmit">LOGIN</button>
                                    @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}" class="linkForget">Forgot Password?</a>
                                    @endif
                                </div>

                                <div class="col">
                                    <p>You Can Login using your facebook Profile or Google account</p>
                                    <button type="button" class="btnSocial btnFb elemenBlock"><i
                                            class="fab fa-facebook-f btnIco"></i> Facebook Connect</button>
                                    <button type="button" class="btnSocial btnTw elemenBlock"><i
                                            class="fab fa-twitter btnIco"></i> Twitter Connect</button>
                                    <button type="button" class="btnSocial btnG elemenBlock"><i
                                            class="fab fa-google btnIco"></i> Google Connect</button>
                                </div>
                            </div>
                        </div>
                </form>
                <form action="{{ route('register') }}" method="post">
                    @csrf
                    <div id="tab02">
                        <div class="popupColsHolder">
                            <div class="col bgWhite">
                                <div class="form-group">
                                    <input type="text" class="form-control elemenBlock" id="name" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus
                                        placeholder="Enter a username..">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control elemenBlock" name="password" required
                                        autocomplete="new-password" placeholder="Choose a safe one..">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control elemenBlock" name="password_confirmation"
                                        required autocomplete="new-password" placeholder="..and confirm it!">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control elemenBlock" name="email"
                                        value="{{ old('email') }}" required autocomplete="email"
                                        placeholder="Your valid email..">
                                </div>
                                <div class="form-group">
                                    <?php $roles = App\Role::all(); ?>
                                    <select data-placeholder="Type" class="chosen-select" name="agent_role">
                                        <option selected="selected">Select Role</option>
                                        @foreach ($roles as $row)
                                        <option value="{{$row->id}}">{{$row->agent_role}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="fwNormal customLabelCheck">
                                        <input type="checkbox" class="customFormInputReset" checked>
                                        <span class="fakeCheckbox"></span>
                                        <span class="fakeLabel">I have read and agree to the Term of Service.</span>
                                    </label>
                                </div>
                                <button type="submit"
                                    class="btn btn-primary elemenBlock fontNeuron fwNormal text-uppercase btnSubmit">REGISTER</button>
                            </div>
                            <div class="col">
                                <p>You Can Login using your facebook Profile or Google account</p>
                                <button type="button" class="btnSocial btnFb elemenBlock"><i
                                        class="fab fa-facebook-f btnIco"></i> Facebook Connect</button>
                                <button type="button" class="btnSocial btnTw elemenBlock"><i
                                        class="fab fa-twitter btnIco"></i> Twitter Connect</button>
                                <button type="button" class="btnSocial btnG elemenBlock"><i
                                        class="fab fa-google btnIco"></i> Google Connect</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
    </div>
    <!-- include jQuery library -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAziipzIN4zP3UtFIBC3-e6NcNfY2vIG48&callback=myMap"></script>
    <script src="{{asset('frontend/js/jquery.js')}}"></script>
    <script src="{{asset('frontend/js/plugins.js')}}"></script>
    <!-- include bootstrap JavaScript -->
    <script src="{{asset('frontend/js/bootstrap-slider.min.js')}}"></script>
    <!-- include custom JavaScript -->
    <script src="{{asset('frontend/js/jquery.main.js')}}"></script>
    	<script type="text/javascript" src="{{asset('frontend/js/map2.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/js/init.js')}}"></script>
    
    
</body>

</html>
