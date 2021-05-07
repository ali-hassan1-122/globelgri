<!DOCTYPE html>
<html lang="en">

<head>
    <!-- set the encoding of your site -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- set the page title -->
    <title>LemanHouse - Real Estate HTML Template</title>
    <!-- include google roboto font cdn link -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <!-- include the site bootstrap stylesheet -->
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.css')}}">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="{{asset('frontend/css/fancybox.css')}}">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="{{asset('frontend/style.css')}}">
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
                      
                        <!-- headerTopBar -->
                        <div class="bgLightDark headerTopBar textLightDark">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-6 col-sm-4">
                                        <time datetime="2011-01-12" class="TopBarTime">Mon - Sat: 08.00 AM - 18.00
                                            PM</time>
                                    </div>
                                      @if(session()->has('message'))
                                    <div class="alert alert-danger">
                                        {{ session()->get('message') }}
                                    </div>
                                    @endif
                                    <div class="col-xs-6 col-sm-8 text-right">
                                        <!-- topBarPanelList -->
                                        <ul class="list-unstyled topBarPanelList">
                                            <li class="hidden-xs">
                                                <!-- topBarPanelListSocial -->
                                                <ul class="list-unstyled socialNetworks topBarPanelListSocial">
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-google"></i></a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <!-- topBarPanelListDropdown -->
                                                <div class="dropdown topBarPanelListDropdown">
                                                    <button class="dropdown-toggle buttonReset" type="button"
                                                        id="dropdownDol" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">USD ($)<span
                                                            class="caret"></span></button>
                                                    <!-- dropdownDol -->
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownDol">
                                                        <li><a href="#">USD</a></li>
                                                        <li><a href="#">EURO</a></li>
                                                        <li><a href="#">YTL</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <!-- topBarPanelListDropdown -->
                                                <div class="dropdown topBarPanelListDropdown">
                                                    <button class="dropdown-toggle buttonReset" type="button"
                                                        id="dropdownLang" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">English<span
                                                            class="caret"></span></button>
                                                    <!-- dropdownLang -->
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownLang">
                                                        <li><a href="#">English</a></li>
                                                        <li><a href="#">Turkish</a></li>
                                                        <li><a href="#">French</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <!-- headerHolder -->
                            <div class="headerHolder">
                                <div class="row">
                                    <div class="col-xs-6 col-sm-3">
                                        <!-- logo -->
                                        <div class="logo"><a href="home.html"><img src="{{asset('frontend/images/logo.png')}}"
                                                    alt="LemanHouse"></a></div>
                                    </div>
                                    <div class="col-xs-6 col-sm-9 d-flex">
                                        <!-- headerContactList -->
                                        <ul class="list-unstyled headerContactList">
                                            <li>
                                                <a href="tel:+12463450695" class="icn icnBubble noShrink text-info"><i
                                                        class="fi flaticon-24-hours"></i></a>
                                                <div class="descr hidden-xs">
                                                    <strong class="fwNormal elemenBlock text"><a
                                                            href="tel:+12463450695">+1 246-345-0695</a></strong>
                                                    <strong class="fwNormal elemenBlock text"><a
                                                            href="mailto:&#105;&#110;&#102;&#111;&#064;&#104;&#111;&#109;&#101;&#115;&#119;&#101;&#101;&#116;&#046;&#099;&#111;&#109;">&#105;&#110;&#102;&#111;&#064;&#104;&#111;&#109;&#101;&#115;&#119;&#101;&#101;&#116;&#046;&#099;&#111;&#109;</a></strong>
                                                </div>
                                            </li>
                                            <li class="hidden-xs">
                                                <span class="icn icnJumping text-info noShrink"><i
                                                        class="fi flaticon-pin-1"></i></span>
                                                <div class="descr">
                                                    <strong class="fwNormal elemenBlock text">PO Box 16122 Collins
                                                        Street West <br>Victoria 8007 Australia</strong>
                                                </div>
                                            </li>
                                        </ul>
                                        <!-- headerSearchForm -->
                                        <form action="#" class="headerSearchForm">
                                            <a class="headerSearchOpener roundedCircle bgWhite" role="button"
                                                data-toggle="collapse" href="#headerSearchFormcollapse"
                                                aria-expanded="false" aria-controls="headerSearchFormcollapse"><i
                                                    class="fi flaticon-search btnOpen"></i><i
                                                    class="fas fa-times btnClose"></i></a>
                                            <!-- headerSearchFormcollapse -->
                                            <div class="collapse searchFormcollapse bgWhite"
                                                id="headerSearchFormcollapse" aria-expanded="false" role="form">
                                                <div class="form-group form-group-lg">
                                                    <label for="s" class="labelIcn"><i
                                                            class="fi flaticon-search"></i></label>
                                                    <input type="search" id="s" class="form-control elemenBlock"
                                                        placeholder="Search&hellip;">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- pageNav -->
                            <nav id="pageNav" class="navbar navbar-default pageNav1">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header hidden-sm hidden-md hidden-lg">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <!-- navbar collapse -->
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <div class="navigation-wrapper">
                                        <strong
                                            class="h elemenBlock h4 textWhite text-center hidden-sm hidden-md hidden-lg menuTitle fontNeuron"
                                            id="menu-title">Menu</strong>
                                        <!-- pageMainNav -->
                                        <ul class="nav navbar-nav pageMainNav pageMainNav1">
                                            <li class="active dropdown">
                                                <a href="#" class="dropdown-toggle">Home<span class="caret"></span></a>
                                                <div class="frame-wrap">
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
                                                </div>
                                            </li>
                                            <!-- remove dropdownFull class when its just regular dropdown -->
                                            <li class="dropdown dropdownFull">
                                                <a href="#" class="dropdown-toggle">Properties <span
                                                        class="caret"></span></a>
                                                <div class="frame-wrap">
                                                    <div class="frame">
                                                        <ul
                                                            class="dropdown-menu pageMainNavDropdown pageMainNavDropdown1 pageMainNavDropdownFull pageMainNavDropdownFull1">
                                                            <li>
                                                                <div class="dropdownColumnsHolder">
                                                                    <div class="dropdownCol">
                                                                        <strong
                                                                            class="fontNeuron elemenBlock dropdownTitle text-uppercase hidden-xs">Properties</strong>
                                                                        <ul class="list-unstyled dropdownColList">
                                                                            <li><a href="properties-grid.html">Properties
                                                                                    Grid</a></li>
                                                                            <li><a href="properties-list.html">Properties
                                                                                    List</a></li>
                                                                            <li><a href="properties-map-grid.html">Properties
                                                                                    Map Grid</a></li>
                                                                            <li><a href="properties-map-list.html">Properties
                                                                                    Map List</a></li>
                                                                            <li><a
                                                                                    href="properties-grid-left-search.html">Properties
                                                                                    Grid Left</a></li>
                                                                            <li><a href="properties-half-map-grid.html">Properties
                                                                                    Half Map Grid</a></li>
                                                                            <li><a href="properties-half-map-list.html">Properties
                                                                                    Half Map List</a></li>
                                                                            <li><a
                                                                                    href="properties-full-width-list.html">Properties
                                                                                    Full Width List</a></li>
                                                                            <li><a
                                                                                    href="properties-full-width-grid.html">Properties
                                                                                    Full Width Grid</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="dropdownCol">
                                                                        <strong
                                                                            class="fontNeuron elemenBlock dropdownTitle text-uppercase hidden-xs">Properties
                                                                            Single</strong>
                                                                        <ul class="list-unstyled dropdownColList">
                                                                            <li><a href="properties-single1.html">Properties
                                                                                    Single 1</a></li>
                                                                            <li><a href="properties-single2.html">Properties
                                                                                    Single 2</a></li>
                                                                            <li><a href="properties-single3.html">Properties
                                                                                    Single 3</a></li>
                                                                            <li><a href="properties-single4.html">Properties
                                                                                    Single 4</a></li>
                                                                            <li><a href="properties-single5.html">Properties
                                                                                    Single 5</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="dropdownCol">
                                                                        <strong
                                                                            class="fontNeuron elemenBlock dropdownTitle text-uppercase hidden-xs">New
                                                                            Properties</strong>
                                                                        <ul class="list-unstyled dropdownColList">
                                                                            <li><a href="add-step-01.html">Add step
                                                                                    01</a></li>
                                                                            <li><a href="add-step-02.html">Add step
                                                                                    02</a></li>
                                                                            <li><a href="add-step-03.html">Add step
                                                                                    03</a></li>
                                                                            <li><a href="add-step-04.html">Add step
                                                                                    04</a></li>
                                                                            <li><a href="add-step-05.html">Add step
                                                                                    05</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="dropdownCol">
                                                                        <strong
                                                                            class="fontNeuron elemenBlock dropdownTitle text-uppercase hidden-xs">Other
                                                                            Pages</strong>
                                                                        <ul class="list-unstyled dropdownColList">
                                                                            <li><a href="user-profile.html">User
                                                                                    Profile</a></li>
                                                                            <li><a href="my-properties.html">My
                                                                                    Properties</a></li>
                                                                            <li><a href="favourite-properties.html">Favourite
                                                                                    Properties</a></li>
                                                                            <li><a href="membership.html">Membership</a>
                                                                            </li>
                                                                            <li><a href="properties-faqs.html">Properties
                                                                                    Faqs</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle">Pages<span class="caret"></span></a>
                                                <div class="frame-wrap">
                                                    <div class="frame">
                                                        <ul
                                                            class="dropdown-menu pageMainNavDropdown pageMainNavDropdown1">
                                                            <li><a href="404.html">404</a></li>
                                                            <li><a href="about.html">About</a></li>
                                                            <li><a href="agencies.html">Agencies</a></li>
                                                            <li><a href="agencies-detail.html">Agencies detail</a></li>
                                                            <li><a href="agent.html">Agent</a></li>
                                                            <li><a href="agent-detail.html">Agent detail</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle">Blog<span class="caret"></span></a>
                                                <div class="frame-wrap">
                                                    <div class="frame">
                                                        <ul
                                                            class="dropdown-menu pageMainNavDropdown pageMainNavDropdown1">
                                                            <li><a href="blog.html">Blog</a></li>
                                                            <li><a href="blog2.html">Blog 2</a></li>
                                                            <li><a href="blog-detail.html">Blog detail</a></li>
                                                            <li><a href="blog-list.html">Blog list</a></li>
                                                            <li><a href="blog-full-width.html">Blog full width</a></li>
                                                            <li><a href="blog-list-full-width.html">Blog list full
                                                                    width</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="contact.html">Contact</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- userOptions -->
                                <div class="userOptions">
                                    <!-- UserLinksList -->
                                    <ul class="list-unstyled UserLinksList">
                                        <li>
                                            <a href="#popup1" class="lightbox">
                                                <i class="fi flaticon-social icn"></i>
                                                <strong class="text fwNormal hidden-xs hidden-sm">Login</strong>
                                            </a>
                                        </li>

                                        @if (Route::has('register'))
                                        <li>
                                            <a href="#popup1" class="lightbox">
                                                <i class="fi flaticon-edit icn"></i>
                                                <strong class="text fwNormal hidden-xs hidden-sm">Register</strong>
                                            </a>
                                        </li>
                                        @endif
                                    </ul>
                                    <!-- headerModalOpener -->
                                    <a href="#" class="headerModalOpener text-uppercase fontNeuron fwBold"><i
                                            class="openerIcon"></i> Submit Property</a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </header>
                <!-- main -->
                <main>
                    <!-- introSlider -->
                    <section class="slick-fade slickSlider introSlider">
                        <div>
                            <!-- introSlide -->
                            <article class="introSlide bgCover"
                                style="background-image: url(https://via.placeholder.com/1920x750);">
                                <div class="container introSlideHolder">
                                    <div class="align">
                                        <!-- introSlideCaption -->
                                        <div class="introSlideCaption">
                                            <h1 class="text-uppercase fontNeuron">Mordern Family Home</h1>
                                            <div class="introSlideCaptionHolder">
                                                <address class="text-primary">
                                                    <span class="icn"><i class="fi flaticon-pin-1"></i></span>
                                                    <p>PO Box 16122 Collins Street West Victoria 8007 Australia</p>
                                                </address>
                                                <h2 class="fontNeuron">$ 490,000 <strong class="fwNormal textUnit">/
                                                        monthly</strong></h2>
                                                <div class="btnsWrap">
                                                    <a href="#" class="btn btn-success btnSmall">For Sale</a>
                                                    <a href="#" class="btn btn-info btnSmall">Featured</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div>
                            <!-- introSlide -->
                            <article class="introSlide bgCover"
                                style="background-image: url(https://via.placeholder.com/1920x750);">
                                <div class="container introSlideHolder">
                                    <div class="align">
                                        <!-- introSlideCaption -->
                                        <div class="introSlideCaption">
                                            <h1 class="text-uppercase fontNeuron">Mordern Home</h1>
                                            <div class="introSlideCaptionHolder">
                                                <address class="text-primary">
                                                    <span class="icn"><i class="fi flaticon-pin-1"></i></span>
                                                    <p>PO Box 16122 Collins Street West Victoria 8007 Australia</p>
                                                </address>
                                                <h2 class="fontNeuron">$ 400,000 <strong class="fwNormal textUnit">/
                                                        monthly</strong></h2>
                                                <div class="btnsWrap">
                                                    <a href="#" class="btn btn-success btnSmall">For Sale</a>
                                                    <a href="#" class="btn btn-info btnSmall">Featured</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div>
                            <!-- introSlide -->
                            <article class="introSlide bgCover"
                                style="background-image: url(https://via.placeholder.com/1920x750);">
                                <div class="container introSlideHolder">
                                    <div class="align">
                                        <!-- introSlideCaption -->
                                        <div class="introSlideCaption">
                                            <h1 class="text-uppercase fontNeuron">Latest Family Home</h1>
                                            <div class="introSlideCaptionHolder">
                                                <address class="text-primary">
                                                    <span class="icn"><i class="fi flaticon-pin-1"></i></span>
                                                    <p>PO Box 16122 Collins Street West Victoria 8007 Australia</p>
                                                </address>
                                                <h2 class="fontNeuron">$ 390,000 <strong class="fwNormal textUnit">/
                                                        monthly</strong></h2>
                                                <div class="btnsWrap">
                                                    <a href="#" class="btn btn-success btnSmall">For Sale</a>
                                                    <a href="#" class="btn btn-info btnSmall">Featured</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </section>
                    <!-- findFormBlock -->
                    <form action="#" class="bgWhite findFormBlock hasShadow">
                        <div class="container">
                            <h2 class="fontNeuron">FIND YOUR <span class="text-info">HOME</span></h2>
                            <hr class="sep elemenBlock">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control elemenBlock"
                                            placeholder="Enter Your Keyword&hellip;">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control elemenBlock" placeholder="Location">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <select data-placeholder="All Property Types" class="chosen-select">
                                            <option value="1">For Rent</option>
                                            <option value="2">For Sale</option>
                                            <option value="3">House</option>
                                            <option value="4">Property</option>
                                            <option value="5">Real Estate</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <select data-placeholder="All Property Types" class="chosen-select">
                                            <option value="1">For Rent</option>
                                            <option value="2">For Sale</option>
                                            <option value="3">House</option>
                                            <option value="4">Property</option>
                                            <option value="5">Real Estate</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <div class="price-wrapper">Price Range: From <b class="startValue">$500</b> to
                                            <b class="endValue">$500,000</b>
                                            <!-- Filter by price interval: <b>€ 10</b><b>€ 1000</b> -->
                                        </div>
                                        <input id="price-range" type="text" class="span2" value="" data-slider-min="500"
                                            data-slider-max="500000" data-slider-step="10"
                                            data-slider-value="[100000,400000]" />
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="form-group">
                                                <select data-placeholder="Beds" class="chosen-select">
                                                    <option value="1">Beds</option>
                                                    <option value="1">Beds</option>
                                                    <option value="1">Beds</option>
                                                    <option value="1">Beds</option>
                                                    <option value="1">Beds</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="form-group">
                                                <select data-placeholder="Baths" class="chosen-select">
                                                    <option value="1">Baths</option>
                                                    <option value="1">Baths</option>
                                                    <option value="1">Baths</option>
                                                    <option value="1">Baths</option>
                                                    <option value="1">Baths</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control elemenBlock"
                                            placeholder="Area Min... (Sq Ft)">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <select data-placeholder="Parking" class="chosen-select">
                                            <option value="1">Parking</option>
                                            <option value="1">Parking</option>
                                            <option value="1">Parking</option>
                                            <option value="1">Parking</option>
                                            <option value="1">Parking</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- orderRow -->
                            <div class="row orderRow">
                                <div class="col-xs-12 col-sm-3 order1">
                                    <!-- otherFeaturesOpener -->
                                    <a class="btnPlus otherFeaturesOpener text-capitalize" role="button"
                                        data-toggle="collapse" href="#otherFeaturescollapse" aria-expanded="false"
                                        aria-controls="otherFeaturescollapse">
                                        <i class="fas btnIcn fa-plus-circle text-info opener"></i>
                                        <i class="fas fa-minus-circle closer btnIcn text-info"></i>
                                        Others Features
                                    </a>
                                </div>
                                <div class="col-xs-12 order3">
                                    <!-- otherFeaturesCollapse -->
                                    <div class="collapse otherFeaturesCollapse" id="otherFeaturescollapse">
                                        <!-- checkList -->
                                        <ul class="list-unstyled checkList text-primary">
                                            <li>
                                                <label class="fwNormal customLabelCheck">
                                                    <input type="checkbox" class="customFormInputReset">
                                                    <span class="fakeCheckbox"></span>
                                                    <span class="fakeLabel">Air conditioning</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="fwNormal customLabelCheck">
                                                    <input type="checkbox" class="customFormInputReset">
                                                    <span class="fakeCheckbox"></span>
                                                    <span class="fakeLabel">Cofee pot</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="fwNormal customLabelCheck">
                                                    <input type="checkbox" class="customFormInputReset">
                                                    <span class="fakeCheckbox"></span>
                                                    <span class="fakeLabel">Fan</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="fwNormal customLabelCheck">
                                                    <input type="checkbox" class="customFormInputReset">
                                                    <span class="fakeCheckbox"></span>
                                                    <span class="fakeLabel">Hi-fi</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="fwNormal customLabelCheck">
                                                    <input type="checkbox" class="customFormInputReset">
                                                    <span class="fakeCheckbox"></span>
                                                    <span class="fakeLabel">Balcony</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="fwNormal customLabelCheck">
                                                    <input type="checkbox" class="customFormInputReset">
                                                    <span class="fakeCheckbox"></span>
                                                    <span class="fakeLabel">Computer</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="fwNormal customLabelCheck">
                                                    <input type="checkbox" class="customFormInputReset">
                                                    <span class="fakeCheckbox"></span>
                                                    <span class="fakeLabel">Fridge</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="fwNormal customLabelCheck">
                                                    <input type="checkbox" class="customFormInputReset">
                                                    <span class="fakeCheckbox"></span>
                                                    <span class="fakeLabel">Internet</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="fwNormal customLabelCheck">
                                                    <input type="checkbox" class="customFormInputReset">
                                                    <span class="fakeCheckbox"></span>
                                                    <span class="fakeLabel">Bedding</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="fwNormal customLabelCheck">
                                                    <input type="checkbox" class="customFormInputReset">
                                                    <span class="fakeCheckbox"></span>
                                                    <span class="fakeLabel">Cot</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="fwNormal customLabelCheck">
                                                    <input type="checkbox" class="customFormInputReset">
                                                    <span class="fakeCheckbox"></span>
                                                    <span class="fakeLabel">Grill</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="fwNormal customLabelCheck">
                                                    <input type="checkbox" class="customFormInputReset">
                                                    <span class="fakeCheckbox"></span>
                                                    <span class="fakeLabel">Iron</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="fwNormal customLabelCheck">
                                                    <input type="checkbox" class="customFormInputReset">
                                                    <span class="fakeCheckbox"></span>
                                                    <span class="fakeLabel">Cable TV</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="fwNormal customLabelCheck">
                                                    <input type="checkbox" class="customFormInputReset">
                                                    <span class="fakeCheckbox"></span>
                                                    <span class="fakeLabel">Dishwasher</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="fwNormal customLabelCheck">
                                                    <input type="checkbox" class="customFormInputReset">
                                                    <span class="fakeCheckbox"></span>
                                                    <span class="fakeLabel">Hairdryer</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="fwNormal customLabelCheck">
                                                    <input type="checkbox" class="customFormInputReset">
                                                    <span class="fakeCheckbox"></span>
                                                    <span class="fakeLabel">Juicer</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="fwNormal customLabelCheck">
                                                    <input type="checkbox" class="customFormInputReset">
                                                    <span class="fakeCheckbox"></span>
                                                    <span class="fakeLabel">Cleaning after exit</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="fwNormal customLabelCheck">
                                                    <input type="checkbox" class="customFormInputReset">
                                                    <span class="fakeCheckbox"></span>
                                                    <span class="fakeLabel">DVD</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="fwNormal customLabelCheck">
                                                    <input type="checkbox" class="customFormInputReset">
                                                    <span class="fakeCheckbox"></span>
                                                    <span class="fakeLabel">Heating</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="fwNormal customLabelCheck">
                                                    <input type="checkbox" class="customFormInputReset">
                                                    <span class="fakeCheckbox"></span>
                                                    <span class="fakeLabel">Lift</span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-offset-6 col-sm-3 order2">
                                    <button type="button"
                                        class="btn btnSecondary text-uppercase fontNeuron pull-right">SEARCH</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- latestPostsBlock -->
                    <section class="latestPostsBlock container">
                        <!-- rowHead -->
                        <header class="row rowHead">
                            <div class="col-xs-12 col-sm-5">
                                <h1 class="fontNeuron blockH text-uppercase"><span class="bdrBottom">LATEST</span> <span
                                        class="textSecondary">PROPERTIES</span></h1>
                            </div>
                            <div class="col-xs-12 col-sm-7">
                                <!-- postsFiltersList -->
                                <ul class="list-unstyled postsFiltersList text-capitalize text-center isoFiltersList">
                                    <li class="active"><a href="#">All</a></li>
                                    <li><a href="#" data-filter=".rent">For Rent</a></li>
                                    <li><a href="#" data-filter=".sale">For Sale</a></li>
                                </ul>
                            </div>
                        </header>
                        <!-- isoContentHolder -->
                        <div class="isoContentHolder">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-4 col isoCol sale">
                                    <!-- postColumn -->
                                    <article class="postColumn hasOver bgWhite">
                                        <div class="aligncenter">
                                            <!-- postColumnImageSlider -->
                                            <div class="slick-carousel slickSlider postColumnImageSlider">
                                                <div>
                                                    <div class="imgHolder">
                                                        <a href="properties-single1.html">
                                                            <img src="https://via.placeholder.com/360x260"
                                                                alt="image description">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="imgHolder">
                                                        <a href="properties-single1.html">
                                                            <img src="https://via.placeholder.com/360x260"
                                                                alt="image description">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="imgHolder">
                                                        <a href="properties-single1.html">
                                                            <img src="https://via.placeholder.com/360x260"
                                                                alt="image description">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- postHoverLinskList -->
                                            <ul class="list-unstyled postHoverLinskList">
                                                <li><a href="#"><i class="fi flaticon-repeat"></i></a></li>
                                                <li class="hasOver">
                                                    <a href="#"><i class="fi flaticon-share"></i></a>
                                                    <!-- postColumnSocial -->
                                                    <ul class="list-unstyled socialNetworks postColumnSocial">
                                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-google"></i></a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <!-- linkToFavourite -->
                                            <a href="#"
                                                class="linkToFavourite roundedCircle bg-primary textWhite icnHeartBeatAnim"><i
                                                    class="far fa-heart"></i></a>
                                        </div>
                                        <h2 class="fontNeuron text-capitalize"><a href="properties-single1.html">Luxury
                                                Family Home</a></h2>
                                        <address>
                                            <span class="icn"><i class="fi flaticon-pin-1"></i></span>
                                            <p>The Village, Jersey City, NJ 07302, USA </p>
                                        </address>
                                        <span class="btn btnSmall btn-success text-capitalize">For Sale</span>
                                        <h3 class="fontNeuron fwSemi"><span class="textSecondary">$ 490,000</span> <span
                                                class="textUnit fwNormal">/ monthly</span></h3>
                                        <!-- postColumnFoot -->
                                        <footer class="postColumnFoot">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <strong class="fwNormal elemenBlock text-primary">Area</strong>
                                                    <strong class="fwNormal elemenBlock">2100 m2</strong>
                                                </li>
                                                <li>
                                                    <strong class="fwNormal elemenBlock text-primary">Beds</strong>
                                                    <strong class="fwNormal elemenBlock">3</strong>
                                                </li>
                                                <li>
                                                    <strong class="fwNormal elemenBlock text-primary">Baths</strong>
                                                    <strong class="fwNormal elemenBlock">2</strong>
                                                </li>
                                                <li>
                                                    <strong class="fwNormal elemenBlock text-primary">Garages</strong>
                                                    <strong class="fwNormal elemenBlock">1</strong>
                                                </li>
                                            </ul>
                                        </footer>
                                    </article>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 col isoCol rent">
                                    <!-- postColumn -->
                                    <article class="postColumn hasOver bgWhite">
                                        <div class="aligncenter">
                                            <!-- postColumnImageSlider -->
                                            <div class="slick-carousel slickSlider postColumnImageSlider">
                                                <div>
                                                    <div class="imgHolder">
                                                        <a href="properties-single1.html">
                                                            <img src="https://via.placeholder.com/360x260"
                                                                alt="image description">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="imgHolder">
                                                        <a href="properties-single1.html">
                                                            <img src="https://via.placeholder.com/360x260"
                                                                alt="image description">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="imgHolder">
                                                        <a href="properties-single1.html">
                                                            <img src="https://via.placeholder.com/360x260"
                                                                alt="image description">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- postHoverLinskList -->
                                            <ul class="list-unstyled postHoverLinskList">
                                                <li><a href="#"><i class="fi flaticon-repeat"></i></a></li>
                                                <li class="hasOver">
                                                    <a href="#"><i class="fi flaticon-share"></i></a>
                                                    <!-- postColumnSocial -->
                                                    <ul class="list-unstyled socialNetworks postColumnSocial">
                                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-google"></i></a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <!-- linkToFavourite -->
                                            <a href="#"
                                                class="linkToFavourite roundedCircle bg-primary textWhite icnHeartBeatAnim"><i
                                                    class="far fa-heart"></i></a>
                                        </div>
                                        <h2 class="fontNeuron text-capitalize"><a
                                                href="properties-single1.html">Meridian Villas</a></h2>
                                        <address>
                                            <span class="icn"><i class="fi flaticon-pin-1"></i></span>
                                            <p>London, United Kingdom</p>
                                        </address>
                                        <span class="btn btnSmall btn-info text-capitalize">For Rent</span>
                                        <h3 class="fontNeuron fwSemi"><span class="textSecondary">$ 920,000</span> <span
                                                class="textUnit fwNormal">/ monthly</span></h3>
                                        <!-- postColumnFoot -->
                                        <footer class="postColumnFoot">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <strong class="fwNormal elemenBlock text-primary">Area</strong>
                                                    <strong class="fwNormal elemenBlock">2100 m2</strong>
                                                </li>
                                                <li>
                                                    <strong class="fwNormal elemenBlock text-primary">Beds</strong>
                                                    <strong class="fwNormal elemenBlock">3</strong>
                                                </li>
                                                <li>
                                                    <strong class="fwNormal elemenBlock text-primary">Baths</strong>
                                                    <strong class="fwNormal elemenBlock">2</strong>
                                                </li>
                                                <li>
                                                    <strong class="fwNormal elemenBlock text-primary">Garages</strong>
                                                    <strong class="fwNormal elemenBlock">1</strong>
                                                </li>
                                            </ul>
                                        </footer>
                                    </article>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 col isoCol sale">
                                    <!-- postColumn -->
                                    <article class="postColumn hasOver bgWhite">
                                        <div class="aligncenter">
                                            <!-- postColumnImageSlider -->
                                            <div class="slick-carousel slickSlider postColumnImageSlider">
                                                <div>
                                                    <div class="imgHolder">
                                                        <a href="properties-single1.html">
                                                            <img src="https://via.placeholder.com/360x260"
                                                                alt="image description">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="imgHolder">
                                                        <a href="properties-single1.html">
                                                            <img src="https://via.placeholder.com/360x260"
                                                                alt="image description">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="imgHolder">
                                                        <a href="properties-single1.html">
                                                            <img src="https://via.placeholder.com/360x260"
                                                                alt="image description">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- postHoverLinskList -->
                                            <ul class="list-unstyled postHoverLinskList">
                                                <li><a href="#"><i class="fi flaticon-repeat"></i></a></li>
                                                <li class="hasOver">
                                                    <a href="#"><i class="fi flaticon-share"></i></a>
                                                    <!-- postColumnSocial -->
                                                    <ul class="list-unstyled socialNetworks postColumnSocial">
                                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-google"></i></a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <!-- linkToFavourite -->
                                            <a href="#"
                                                class="linkToFavourite roundedCircle bg-primary textWhite icnHeartBeatAnim"><i
                                                    class="far fa-heart"></i></a>
                                        </div>
                                        <h2 class="fontNeuron text-capitalize"><a href="properties-single1.html">4
                                                Bedroom New House For Sale</a></h2>
                                        <address>
                                            <span class="icn"><i class="fi flaticon-pin-1"></i></span>
                                            <p>778 Country St. Panama City, FL</p>
                                        </address>
                                        <span class="btn btnSmall btn-success text-capitalize">For Sale</span>
                                        <h3 class="fontNeuron fwSemi"><span class="textSecondary">$ 250,000</span> <span
                                                class="textUnit fwNormal">/ monthly</span></h3>
                                        <!-- postColumnFoot -->
                                        <footer class="postColumnFoot">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <strong class="fwNormal elemenBlock text-primary">Area</strong>
                                                    <strong class="fwNormal elemenBlock">2100 m2</strong>
                                                </li>
                                                <li>
                                                    <strong class="fwNormal elemenBlock text-primary">Beds</strong>
                                                    <strong class="fwNormal elemenBlock">3</strong>
                                                </li>
                                                <li>
                                                    <strong class="fwNormal elemenBlock text-primary">Baths</strong>
                                                    <strong class="fwNormal elemenBlock">2</strong>
                                                </li>
                                                <li>
                                                    <strong class="fwNormal elemenBlock text-primary">Garages</strong>
                                                    <strong class="fwNormal elemenBlock">1</strong>
                                                </li>
                                            </ul>
                                        </footer>
                                    </article>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 col isoCol rent">
                                    <!-- postColumn -->
                                    <article class="postColumn hasOver bgWhite">
                                        <div class="aligncenter">
                                            <!-- postColumnImageSlider -->
                                            <div class="slick-carousel slickSlider postColumnImageSlider">
                                                <div>
                                                    <div class="imgHolder">
                                                        <a href="properties-single1.html">
                                                            <img src="https://via.placeholder.com/360x260"
                                                                alt="image description">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="imgHolder">
                                                        <a href="properties-single1.html">
                                                            <img src="https://via.placeholder.com/360x260"
                                                                alt="image description">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="imgHolder">
                                                        <a href="properties-single1.html">
                                                            <img src="https://via.placeholder.com/360x260"
                                                                alt="image description">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- postHoverLinskList -->
                                            <ul class="list-unstyled postHoverLinskList">
                                                <li><a href="#"><i class="fi flaticon-repeat"></i></a></li>
                                                <li class="hasOver">
                                                    <a href="#"><i class="fi flaticon-share"></i></a>
                                                    <!-- postColumnSocial -->
                                                    <ul class="list-unstyled socialNetworks postColumnSocial">
                                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-google"></i></a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <!-- linkToFavourite -->
                                            <a href="#"
                                                class="linkToFavourite roundedCircle bg-primary textWhite icnHeartBeatAnim"><i
                                                    class="far fa-heart"></i></a>
                                        </div>
                                        <h2 class="fontNeuron text-capitalize"><a href="properties-single1.html">Elegant
                                                studio flat</a></h2>
                                        <address>
                                            <span class="icn"><i class="fi flaticon-pin-1"></i></span>
                                            <p>The Village, Jersey City, NJ 07302, USA </p>
                                        </address>
                                        <span class="btn btnSmall btn-success text-capitalize">For Sale</span>
                                        <h3 class="fontNeuron fwSemi"><span class="textSecondary">$ 490,000</span> <span
                                                class="textUnit fwNormal">/ monthly</span></h3>
                                        <!-- postColumnFoot -->
                                        <footer class="postColumnFoot">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <strong class="fwNormal elemenBlock text-primary">Area</strong>
                                                    <strong class="fwNormal elemenBlock">2100 m2</strong>
                                                </li>
                                                <li>
                                                    <strong class="fwNormal elemenBlock text-primary">Beds</strong>
                                                    <strong class="fwNormal elemenBlock">3</strong>
                                                </li>
                                                <li>
                                                    <strong class="fwNormal elemenBlock text-primary">Baths</strong>
                                                    <strong class="fwNormal elemenBlock">2</strong>
                                                </li>
                                                <li>
                                                    <strong class="fwNormal elemenBlock text-primary">Garages</strong>
                                                    <strong class="fwNormal elemenBlock">1</strong>
                                                </li>
                                            </ul>
                                        </footer>
                                    </article>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 col isoCol sale">
                                    <!-- postColumn -->
                                    <article class="postColumn hasOver bgWhite" data-label="featured">
                                        <div class="aligncenter">
                                            <!-- postColumnImageSlider -->
                                            <div class="slick-carousel slickSlider postColumnImageSlider">
                                                <div>
                                                    <div class="imgHolder">
                                                        <a href="properties-single1.html">
                                                            <img src="https://via.placeholder.com/360x260"
                                                                alt="image description">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="imgHolder">
                                                        <a href="properties-single1.html">
                                                            <img src="https://via.placeholder.com/360x260"
                                                                alt="image description">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="imgHolder">
                                                        <a href="properties-single1.html">
                                                            <img src="https://via.placeholder.com/360x260"
                                                                alt="image description">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- postHoverLinskList -->
                                            <ul class="list-unstyled postHoverLinskList">
                                                <li><a href="#"><i class="fi flaticon-repeat"></i></a></li>
                                                <li class="hasOver">
                                                    <a href="#"><i class="fi flaticon-share"></i></a>
                                                    <!-- postColumnSocial -->
                                                    <ul class="list-unstyled socialNetworks postColumnSocial">
                                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-google"></i></a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <!-- linkToFavourite -->
                                            <a href="#"
                                                class="linkToFavourite roundedCircle bg-primary textWhite icnHeartBeatAnim"><i
                                                    class="far fa-heart"></i></a>
                                        </div>
                                        <h2 class="fontNeuron text-capitalize"><a href="properties-single1.html">Full
                                                Floor Office Condo</a></h2>
                                        <address>
                                            <span class="icn"><i class="fi flaticon-pin-1"></i></span>
                                            <p>London, United Kingdom </p>
                                        </address>
                                        <span class="btn btnSmall btn-info text-capitalize">For Rent</span>
                                        <h3 class="fontNeuron fwSemi"><span class="textSecondary">$ 920,000</span> <span
                                                class="textUnit fwNormal">/ monthly</span></h3>
                                        <!-- postColumnFoot -->
                                        <footer class="postColumnFoot">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <strong class="fwNormal elemenBlock text-primary">Area</strong>
                                                    <strong class="fwNormal elemenBlock">2100 m2</strong>
                                                </li>
                                                <li>
                                                    <strong class="fwNormal elemenBlock text-primary">Beds</strong>
                                                    <strong class="fwNormal elemenBlock">3</strong>
                                                </li>
                                                <li>
                                                    <strong class="fwNormal elemenBlock text-primary">Baths</strong>
                                                    <strong class="fwNormal elemenBlock">2</strong>
                                                </li>
                                                <li>
                                                    <strong class="fwNormal elemenBlock text-primary">Garages</strong>
                                                    <strong class="fwNormal elemenBlock">1</strong>
                                                </li>
                                            </ul>
                                        </footer>
                                    </article>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 col isoCol rent">
                                    <!-- postColumn -->
                                    <article class="postColumn hasOver bgWhite">
                                        <div class="aligncenter">
                                            <!-- postColumnImageSlider -->
                                            <div class="slick-carousel slickSlider postColumnImageSlider">
                                                <div>
                                                    <div class="imgHolder">
                                                        <a href="properties-single1.html">
                                                            <img src="https://via.placeholder.com/360x260"
                                                                alt="image description">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="imgHolder">
                                                        <a href="properties-single1.html">
                                                            <img src="https://via.placeholder.com/360x260"
                                                                alt="image description">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="imgHolder">
                                                        <a href="properties-single1.html">
                                                            <img src="https://via.placeholder.com/360x260"
                                                                alt="image description">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- postHoverLinskList -->
                                            <ul class="list-unstyled postHoverLinskList">
                                                <li><a href="#"><i class="fi flaticon-repeat"></i></a></li>
                                                <li class="hasOver">
                                                    <a href="#"><i class="fi flaticon-share"></i></a>
                                                    <!-- postColumnSocial -->
                                                    <ul class="list-unstyled socialNetworks postColumnSocial">
                                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-google"></i></a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <!-- linkToFavourite -->
                                            <a href="#"
                                                class="linkToFavourite roundedCircle bg-primary textWhite icnHeartBeatAnim"><i
                                                    class="far fa-heart"></i></a>
                                        </div>
                                        <h2 class="fontNeuron text-capitalize"><a href="properties-single1.html">Villa
                                                on Hollywood Boulevard</a></h2>
                                        <address>
                                            <span class="icn"><i class="fi flaticon-pin-1"></i></span>
                                            <p>778 Country St. Panama City, FL</p>
                                        </address>
                                        <span class="btn btnSmall btn-info text-capitalize">For Rent</span>
                                        <h3 class="fontNeuron fwSemi"><span class="textSecondary">$ 320,000</span> <span
                                                class="textUnit fwNormal">/ monthly</span></h3>
                                        <!-- postColumnFoot -->
                                        <footer class="postColumnFoot">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <strong class="fwNormal elemenBlock text-primary">Area</strong>
                                                    <strong class="fwNormal elemenBlock">2100 m2</strong>
                                                </li>
                                                <li>
                                                    <strong class="fwNormal elemenBlock text-primary">Beds</strong>
                                                    <strong class="fwNormal elemenBlock">3</strong>
                                                </li>
                                                <li>
                                                    <strong class="fwNormal elemenBlock text-primary">Baths</strong>
                                                    <strong class="fwNormal elemenBlock">2</strong>
                                                </li>
                                                <li>
                                                    <strong class="fwNormal elemenBlock text-primary">Garages</strong>
                                                    <strong class="fwNormal elemenBlock">1</strong>
                                                </li>
                                            </ul>
                                        </footer>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="row text-center btnHolder">
                            <a href="properties-detial.html"
                                class="btn btn-primary btnPrimaryOutline text-capitalize fontNeuron">Show More
                                Property</a>
                        </div>
                    </section>
                    <!-- mostPostsBlock -->
                    <section class="mostPostsBlock bgWhite">
                        <div class="container">
                            <h1 class="fontNeuron blockH text-uppercase"><span class="bdrBottom">MOST POPULAR</span>
                                <span class="textSecondary">PLACES</span></h1>
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <!-- visualPostColumn -->
                                    <a href="properties-detial.html"
                                        class="visualPostColumn hasOver elemenBlock text-center type01 textWhite">
                                        <span class="bgCover elemenBlock"
                                            style="background-image: url(https://via.placeholder.com/555x450);"></span>
                                        <div class="captionWrap">
                                            <h2 class="fontNeuron">New York</h2>
                                            <h3 class="fontNeuron fwNormal">24 Properties</h3>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <!-- visualPostColumn -->
                                    <a href="properties-detial.html"
                                        class="visualPostColumn hasOver elemenBlock text-center type02 textWhite">
                                        <span class="bgCover elemenBlock"
                                            style="background-image: url(https://via.placeholder.com/555x210);"></span>
                                        <div class="captionWrap">
                                            <h2 class="fontNeuron">Chicago</h2>
                                            <h3 class="fontNeuron fwNormal">24 Properties</h3>
                                        </div>
                                    </a>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6">
                                            <a href="#"
                                                class="visualPostColumn hasOver elemenBlock text-center type03 textWhite">
                                                <span class="bgCover elemenBlock"
                                                    style="background-image: url(https://via.placeholder.com/265x210);"></span>
                                                <div class="captionWrap">
                                                    <h2 class="fontNeuron">Los Angeles</h2>
                                                    <h3 class="fontNeuron fwNormal">24 Properties</h3>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                            <a href="properties-detial.html"
                                                class="visualPostColumn hasOver elemenBlock text-center type03 textWhite">
                                                <span class="bgCover elemenBlock"
                                                    style="background-image: url(https://via.placeholder.com/265x210);"></span>
                                                <div class="captionWrap">
                                                    <h2 class="fontNeuron">San Francisco</h2>
                                                    <h3 class="fontNeuron fwNormal">24 Properties</h3>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- servicesFetaureBlock -->
                    <section class="servicesFetaureBlock container">
                        <h1 class="fontNeuron blockH text-uppercase"><span class="bdrBottom">OUR</span> <span
                                class="textSecondary">SERVICE</span></h1>
                        <!-- servicesFetauresList -->
                        <ul class="servicesFetauresList list-unstyled text-center">
                            <li>
                                <a href="#">
                                    <span class="icnHolder roundedCircle"><i class="fi flaticon-house"></i></span>
                                    <h2 class="fontNeuron text-capitalize">Saling Service</h2>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="icnHolder roundedCircle"><i class="fi flaticon-rent"></i></span>
                                    <h2 class="fontNeuron text-capitalize">Renting Service</h2>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="icnHolder roundedCircle"><i class="fi flaticon-list"></i></span>
                                    <h2 class="fontNeuron text-capitalize">Property Listing</h2>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="icnHolder roundedCircle"><i class="fi flaticon-house-1"></i></span>
                                    <h2 class="fontNeuron text-capitalize">Property Management</h2>
                                </a>
                            </li>
                        </ul>
                    </section>
                    <!-- ourAgentBlock -->
                    <section class="bgWhite ourAgentBlock">
                        <div class="container">
                            <h1 class="fontNeuron blockH text-uppercase"><span class="bdrBottom">OUR</span> <span
                                    class="textSecondary">AGENT</span></h1>
                            <div class="row">
                                <!-- profilesSlider -->
                                <div class="four-slider slickSlider profilesSlider">
                                    <div>
                                        <div class="col-xs-12">
                                            <!-- profileColumn -->
                                            <article class="profileColumn hasOver">
                                                <div class="aligncenter">
                                                    <a href="agent-detail.html">
                                                        <img src="https://via.placeholder.com/260x260"
                                                            alt="Veronica Green Sales Executive">
                                                    </a>
                                                </div>
                                                <div class="textWrap">
                                                    <h2 class="fontNeuron text-capitalize"><a
                                                            href="agent-detail.html">Veronica Green</a></h2>
                                                    <h3 class="fwNormal text-capitalize">Sales Executive</h3>
                                                    <div class="collapseWrap">
                                                        <!-- profileColumnSocial -->
                                                        <ul class="list-unstyled socialNetworks profileColumnSocial">
                                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-google"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="col-xs-12">
                                            <!-- profileColumn -->
                                            <article class="profileColumn hasOver">
                                                <div class="aligncenter">
                                                    <a href="agent-detail.html">
                                                        <img src="https://via.placeholder.com/260x260"
                                                            alt="Guti Salvio Real Estate Broker">
                                                    </a>
                                                </div>
                                                <div class="textWrap">
                                                    <h2 class="fontNeuron text-capitalize"><a
                                                            href="agent-detail.html">Guti Salvio</a></h2>
                                                    <h3 class="fwNormal text-capitalize">Real Estate Broker</h3>
                                                    <div class="collapseWrap">
                                                        <!-- profileColumnSocial -->
                                                        <ul class="list-unstyled socialNetworks profileColumnSocial">
                                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-google"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="col-xs-12">
                                            <!-- profileColumn -->
                                            <article class="profileColumn hasOver">
                                                <div class="aligncenter">
                                                    <a href="agent-detail.html">
                                                        <img src="https://via.placeholder.com/260x260"
                                                            alt="Elenia Jesse Selling Agent">
                                                    </a>
                                                </div>
                                                <div class="textWrap">
                                                    <h2 class="fontNeuron text-capitalize"><a
                                                            href="agent-detail.html">Elenia Jesse</a></h2>
                                                    <h3 class="fwNormal text-capitalize">Selling Agent</h3>
                                                    <div class="collapseWrap">
                                                        <!-- profileColumnSocial -->
                                                        <ul class="list-unstyled socialNetworks profileColumnSocial">
                                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-google"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="col-xs-12">
                                            <!-- profileColumn -->
                                            <article class="profileColumn hasOver">
                                                <div class="aligncenter">
                                                    <a href="agent-detail.html">
                                                        <img src="https://via.placeholder.com/260x260"
                                                            alt="Emmy Ramos Buying Agent">
                                                    </a>
                                                </div>
                                                <div class="textWrap">
                                                    <h2 class="fontNeuron text-capitalize"><a
                                                            href="agent-detail.html">Emmy Ramos</a></h2>
                                                    <h3 class="fwNormal text-capitalize">Buying Agent</h3>
                                                    <div class="collapseWrap">
                                                        <!-- profileColumnSocial -->
                                                        <ul class="list-unstyled socialNetworks profileColumnSocial">
                                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-google"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="col-xs-12">
                                            <!-- profileColumn -->
                                            <article class="profileColumn hasOver">
                                                <div class="aligncenter">
                                                    <a href="agent-detail.html">
                                                        <img src="https://via.placeholder.com/260x260"
                                                            alt="Veronica Green Sales Executive">
                                                    </a>
                                                </div>
                                                <div class="textWrap">
                                                    <h2 class="fontNeuron text-capitalize"><a
                                                            href="agent-detail.html">Veronica Green</a></h2>
                                                    <h3 class="fwNormal text-capitalize">Sales Executive</h3>
                                                    <div class="collapseWrap">
                                                        <!-- profileColumnSocial -->
                                                        <ul class="list-unstyled socialNetworks profileColumnSocial">
                                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-google"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="col-xs-12">
                                            <!-- profileColumn -->
                                            <article class="profileColumn hasOver">
                                                <div class="aligncenter">
                                                    <a href="#">
                                                        <img src="https://via.placeholder.com/260x260"
                                                            alt="Guti Salvio Real Estate Broker">
                                                    </a>
                                                </div>
                                                <div class="textWrap">
                                                    <h2 class="fontNeuron text-capitalize"><a href="agent.html">Guti
                                                            Salvio</a></h2>
                                                    <h3 class="fwNormal text-capitalize">Real Estate Broker</h3>
                                                    <div class="collapseWrap">
                                                        <!-- profileColumnSocial -->
                                                        <ul class="list-unstyled socialNetworks profileColumnSocial">
                                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-google"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="col-xs-12">
                                            <!-- profileColumn -->
                                            <article class="profileColumn hasOver">
                                                <div class="aligncenter">
                                                    <a href="#">
                                                        <img src="https://via.placeholder.com/260x260"
                                                            alt="Elenia Jesse Selling Agent">
                                                    </a>
                                                </div>
                                                <div class="textWrap">
                                                    <h2 class="fontNeuron text-capitalize"><a href="agent.html">Elenia
                                                            Jesse</a></h2>
                                                    <h3 class="fwNormal text-capitalize">Selling Agent</h3>
                                                    <div class="collapseWrap">
                                                        <!-- profileColumnSocial -->
                                                        <ul class="list-unstyled socialNetworks profileColumnSocial">
                                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-google"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="col-xs-12">
                                            <!-- profileColumn -->
                                            <article class="profileColumn hasOver">
                                                <div class="aligncenter">
                                                    <a href="#">
                                                        <img src="https://via.placeholder.com/260x260"
                                                            alt="Emmy Ramos Buying Agent">
                                                    </a>
                                                </div>
                                                <div class="textWrap">
                                                    <h2 class="fontNeuron text-capitalize"><a href="agent.html">Emmy
                                                            Ramos</a></h2>
                                                    <h3 class="fwNormal text-capitalize">Buying Agent</h3>
                                                    <div class="collapseWrap">
                                                        <!-- profileColumnSocial -->
                                                        <ul class="list-unstyled socialNetworks profileColumnSocial">
                                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-google"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- testimonilasBlock -->
                    <section class="testimonilasBlock">
                        <div class="container">
                            <h1 class="fontNeuron blockH text-uppercase"><span class="bdrBottom">OUR</span> <span
                                    class="textSecondary">Testimonials</span></h1>
                            <div class="row">
                                <div class="col-xs-12 col-md-8 col-md-offset-2">
                                    <!-- testimonialSlider -->
                                    <div class="slickSlider testimonial-carousel testimonialSlider">
                                        <div>
                                            <!-- testimonialColumn -->
                                            <article class="testimonialColumn text-center">
                                                <div class="aligncenter roundedCircle">
                                                    <a href="#">
                                                        <img src="https://via.placeholder.com/184x184"
                                                            class="roundedCircle" alt="image description">
                                                    </a>
                                                </div>
                                                <h2 class="fontNeuron"><a href="#">The Hermess Family</a></h2>
                                                <p><em>Although we haven’t had many issues but any time there has been
                                                        an issue you have been incredibly helpful and whenever you have
                                                        come out for an inspection you have been so personable and
                                                        absolutely lovely to be around. You are a great addition to the
                                                        Realtyspace Team and i&hellip;</em></p>
                                            </article>
                                        </div>
                                        <div>
                                            <!-- testimonialColumn -->
                                            <article class="testimonialColumn text-center">
                                                <div class="aligncenter roundedCircle">
                                                    <a href="#">
                                                        <img src="https://via.placeholder.com/184x184"
                                                            class="roundedCircle" alt="image description">
                                                    </a>
                                                </div>
                                                <div class="textWrap">
                                                    <h2 class="fontNeuron"><a href="#">The Hermess Family</a></h2>
                                                    <p><em>Although we haven’t had many issues but any time there has
                                                            been an issue you have been incredibly helpful and whenever
                                                            you have come out for an inspection you have been so
                                                            personable and absolutely lovely to be around. You are a
                                                            great addition to the Realtyspace Team and i&hellip;</em>
                                                    </p>
                                                </div>
                                            </article>
                                        </div>
                                        <div>
                                            <!-- testimonialColumn -->
                                            <article class="testimonialColumn text-center">
                                                <div class="aligncenter roundedCircle">
                                                    <a href="#">
                                                        <img src="https://via.placeholder.com/184x184"
                                                            class="roundedCircle" alt="image description">
                                                    </a>
                                                </div>
                                                <div class="textWrap">
                                                    <h2 class="fontNeuron"><a href="#">The Hermess Family</a></h2>
                                                    <p><em>Although we haven’t had many issues but any time there has
                                                            been an issue you have been incredibly helpful and whenever
                                                            you have come out for an inspection you have been so
                                                            personable and absolutely lovely to be around. You are a
                                                            great addition to the Realtyspace Team and i&hellip;</em>
                                                    </p>
                                                </div>
                                            </article>
                                        </div>
                                        <div>
                                            <!-- testimonialColumn -->
                                            <article class="testimonialColumn text-center">
                                                <div class="aligncenter roundedCircle">
                                                    <a href="#">
                                                        <img src="https://via.placeholder.com/184x184"
                                                            class="roundedCircle" alt="image description">
                                                    </a>
                                                </div>
                                                <div class="textWrap">
                                                    <h2 class="fontNeuron"><a href="#">The Hermess Family</a></h2>
                                                    <p><em>Although we haven’t had many issues but any time there has
                                                            been an issue you have been incredibly helpful and whenever
                                                            you have come out for an inspection you have been so
                                                            personable and absolutely lovely to be around. You are a
                                                            great addition to the Realtyspace Team and i&hellip;</em>
                                                    </p>
                                                </div>
                                            </article>
                                        </div>
                                        <div>
                                            <!-- testimonialColumn -->
                                            <article class="testimonialColumn text-center">
                                                <div class="aligncenter roundedCircle">
                                                    <a href="#">
                                                        <img src="https://via.placeholder.com/184x184"
                                                            class="roundedCircle" alt="image description">
                                                    </a>
                                                </div>
                                                <div class="textWrap">
                                                    <h2 class="fontNeuron"><a href="#">The Hermess Family</a></h2>
                                                    <p><em>Although we haven’t had many issues but any time there has
                                                            been an issue you have been incredibly helpful and whenever
                                                            you have come out for an inspection you have been so
                                                            personable and absolutely lovely to be around. You are a
                                                            great addition to the Realtyspace Team and i&hellip;</em>
                                                    </p>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- newsNstoriesBlock -->
                    <section class="bgWhite newsNstoriesBlock">
                        <div class="container">
                            <h1 class="fontNeuron blockH text-uppercase"><span class="bdrBottom">NEWS AND</span> <span
                                    class="textSecondary">STORIES</span></h1>
                            <div class="row">
                                <!-- newsCarousel -->
                                <div class="news-posts-carousel slickSlider newsCarousel">
                                    <div>
                                        <div class="col-xs-12">
                                            <!-- newsPostColumn -->
                                            <article class="newsPostColumn">
                                                <div class="aligncenter">
                                                    <a href="blog-detail.html">
                                                        <img src="https://via.placeholder.com/555x310"
                                                            alt="image description">
                                                    </a>
                                                </div>
                                                <h2 class="fontNeuron"><a href="blog-detail.html">Getting Started
                                                        Designing Apps for the Apple Watch</a></h2>
                                                <p>
                                                    <a href="#" class="btn btnSmall btn-info">Ali Tufan</a>
                                                    <time datetime="2011-01-12">February 9, 2017</time>
                                                    <a href="#" class="commentsCount">12 comment</a>
                                                </p>
                                                <footer class="PostColumnFoot">
                                                    <a href="#" class="elemenBlock readMore text-capitalize">Read
                                                        Article <i class="fi flaticon-arrows readMoreIcn"></i></a>
                                                </footer>
                                            </article>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="col-xs-12">
                                            <!-- newsPostColumn -->
                                            <article class="newsPostColumn">
                                                <div class="aligncenter">
                                                    <a href="blog-detail.html">
                                                        <img src="https://via.placeholder.com/555x310"
                                                            alt="image description">
                                                    </a>
                                                </div>
                                                <h2 class="fontNeuron"><a href="blog-detail.html">Take Away You Can Get
                                                        From</a></h2>
                                                <p>
                                                    <a href="#" class="btn btnSmall btn-info">Ali Tufan</a>
                                                    <time datetime="2011-01-12">February 9, 2017</time>
                                                    <a href="#" class="commentsCount">12 comment</a>
                                                </p>
                                                <footer class="PostColumnFoot">
                                                    <a href="#" class="elemenBlock readMore text-capitalize">Read
                                                        Article <i class="fi flaticon-arrows readMoreIcn"></i></a>
                                                </footer>
                                            </article>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="col-xs-12">
                                            <!-- newsPostColumn -->
                                            <article class="newsPostColumn">
                                                <div class="aligncenter">
                                                    <a href="blog-detail.html">
                                                        <img src="https://via.placeholder.com/555x310"
                                                            alt="image description">
                                                    </a>
                                                </div>
                                                <h2 class="fontNeuron"><a href="blog-detail.html">Getting Started
                                                        Designing Apps for the Apple Watch</a></h2>
                                                <p>
                                                    <a href="#" class="btn btnSmall btn-info">Ali Tufan</a>
                                                    <time datetime="2011-01-12">February 9, 2017</time>
                                                    <a href="#" class="commentsCount">12 comment</a>
                                                </p>
                                                <footer class="PostColumnFoot">
                                                    <a href="#" class="elemenBlock readMore text-capitalize">Read
                                                        Article <i class="fi flaticon-arrows readMoreIcn"></i></a>
                                                </footer>
                                            </article>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="col-xs-12">
                                            <!-- newsPostColumn -->
                                            <article class="newsPostColumn">
                                                <div class="aligncenter">
                                                    <a href="blog-detail.html">
                                                        <img src="https://via.placeholder.com/555x310"
                                                            alt="image description">
                                                    </a>
                                                </div>
                                                <h2 class="fontNeuron"><a href="blog-detail.html">Take Away You Can Get
                                                        From</a></h2>
                                                <p>
                                                    <a href="#" class="btn btnSmall btn-info">Ali Tufan</a>
                                                    <time datetime="2011-01-12">February 9, 2017</time>
                                                    <a href="#" class="commentsCount">12 comment</a>
                                                </p>
                                                <footer class="PostColumnFoot">
                                                    <a href="#" class="elemenBlock readMore text-capitalize">Read
                                                        Article <i class="fi flaticon-arrows readMoreIcn"></i></a>
                                                </footer>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- sponsorsBlock -->
                    <section class="container sponsorsBlock">
                        <h1 class="fontNeuron blockH text-uppercase"><span class="bdrBottom">OUR</span> <span
                                class="textSecondary">PARTNERS</span></h1>
                        <!-- LogosCarousel -->
                        <div class="logos-slider slickSlider LogosCarousel">
                            <div>
                                <!-- logoColumn -->
                                <div class="logoColumn">
                                    <a href="#">
                                        <img src="{{asset('frontend/images/sponsor01.png')}}" alt="helsinki">
                                    </a>
                                </div>
                            </div>
                            <div>
                                <!-- logoColumn -->
                                <div class="logoColumn">
                                    <a href="#">
                                        <img src="{{asset('frontend/images/sponsor02.png')}}" alt="norway">
                                    </a>
                                </div>
                            </div>
                            <div>
                                <!-- logoColumn -->
                                <div class="logoColumn">
                                    <a href="#">
                                        <img src="{{asset('frontend/images/sponsor03.png')}}" alt="lars grondahl">
                                    </a>
                                </div>
                            </div>
                            <div>
                                <!-- logoColumn -->
                                <div class="logoColumn">
                                    <a href="#">
                                        <img src="{{asset('frontend/images/sponsor04.png')}}" alt="kirsten">
                                    </a>
                                </div>
                            </div>
                            <div>
                                <!-- logoColumn -->
                                <div class="logoColumn">
                                    <a href="#">
                                        <img src="{{asset('frontend/images/sponsor05.png')}}" alt="only oslo">
                                    </a>
                                </div>
                            </div>
                            <div>
                                <!-- logoColumn -->
                                <div class="logoColumn">
                                    <a href="#">
                                        <img src="{{asset('frontend/images/sponsor02.png')}}" alt="norway">
                                    </a>
                                </div>
                            </div>
                            <div>
                                <!-- logoColumn -->
                                <div class="logoColumn">
                                    <a href="#">
                                        <img src="{{asset('frontend/images/sponsor03.png')}}" alt="lars grondahl">
                                    </a>
                                </div>
                            </div>
                            <div>
                                <!-- logoColumn -->
                                <div class="logoColumn">
                                    <a href="#">
                                        <img src="{{asset('frontend/images/sponsor04.png')}}" alt="kirsten">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- signupFormAside -->
                    <form action="#" class="bgWhite signupFormAside">
                        <div class="container signupFormAsideHolder">
                            <span class="icnAbsolute elemenBlock fi flaticon-message"></span>
                            <div class="col-xs-12 col-md-offset-2 col-md-6">
                                <h3 class="fontNeuron textSecondary">Sign up for our newsletter.</h3>
                                <p>Lorem molestie odio. Interdum et malesuada fames ac ante ipsum primis in faucibus.
                                </p>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <input type="email" id="email" class="form-control elemenBlock"
                                        placeholder="Your email">
                                    <button type="button" class="buttonReset fi flaticon-navigation"></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </main>
            </div>
            <!-- pageFooterBlock -->
            <div class="pageFooterBlock">
                <!-- pageAside -->
                <aside class="pageAside textWhite">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-4 col">
                                <h2 class="fontNeuron fwSemi text-uppercase">LemanHouse</h2>
                                <p>Lorem ipsum dolor amet, consectetur adipiscing elit. Sed ut purus eget nunc ut
                                    dignissim cursus.</p>
                                <address>
                                    <dl>
                                        <dt><i class="fi flaticon-navigation"></i></dt>
                                        <dd>Collins Street West, Victoria 8007, Australia.</dd>
                                        <dt><i class="fi flaticon-24-hours"></i></dt>
                                        <dd><a href="tel:+12463450695">+1 246-345-0695</a></dd>
                                        <dt><i class="fi flaticon-mail"></i></dt>
                                        <dd><a
                                                href="mailto:&#105;&#110;&#102;&#111;&#064;&#104;&#111;&#109;&#101;&#115;&#119;&#101;&#101;&#116;&#046;&#099;&#111;&#109;">&#105;&#110;&#102;&#111;&#064;&#104;&#111;&#109;&#101;&#115;&#119;&#101;&#101;&#116;&#046;&#099;&#111;&#109;</a>
                                        </dd>
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
                                            <h4 class="fwSemi">$ 1,27,000</h4>
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
                                            <h4 class="fwSemi">$ 527,000</h4>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </aside>
                <!-- pageFooter -->
                <footer id="pageFooter">
                    <div class="container pageFooterHolder">
                        <div class="row">
                            <div class="col-xs-12 col-sm-push-6 col-sm-6">
                                <!-- pageFooterSocial -->
                                <ul class="socialNetworks list-unstyled pageFooterSocial">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google"></i></a></li>
                                </ul>
                            </div>
                            <div class="col-xs-12 col-sm-pull-6 col-sm-6">
                                <p>2018 <a href="#">LemanHouse</a> - All rights reserved</p>
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
                                    <input type="text"
                                        class="form-control elemenBlock @error('name') is-invalid @enderror" id="name"
                                        name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                                        placeholder="Enter a username..">
                                </div>
                                <div class="form-group">
                                    <input type="password"
                                        class="form-control elemenBlock @error('password') is-invalid @enderror"
                                        name="password" required autocomplete="new-password"
                                        placeholder="Choose a safe one..">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control elemenBlock" name="password_confirmation"
                                        required autocomplete="new-password" placeholder="..and confirm it!">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control elemenBlock" @error('email') is-invalid
                                        @enderror name="email" value="{{ old('email') }}" required autocomplete="email"
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
    <script src="{{asset('frontend/js/jquery.js')}}"></script>
    <script src="{{asset('frontend/js/plugins.js')}}"></script>
    <!-- include bootstrap JavaScript -->
    <script src="{{asset('frontend/js/bootstrap-slider.min.js')}}"></script>
    <!-- include custom JavaScript -->
    <script src="{{asset('frontend/js/jquery.main.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/js/init.js')}}"></script>
</body>

</html>
