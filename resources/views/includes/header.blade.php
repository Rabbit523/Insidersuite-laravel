@if(Auth::User())
@if(Request::segment(1) == 'offers' || Request::segment(1) == 'sponsor' || Request::segment(1) == 'credit' || Request::segment(1) == 'gift-card' || Request::segment(1) == 'how-it-works' || Request::segment(1) == 'offer_detail' || Request::segment(1) == null || Request::segment(1) == 'blog' || Request::segment(1) == 'blog_detail')
<nav class="navbar navbar-fixed-top transparent_navbar">
    <div class="container-fluid">
        <div class="row">
            <div class="responsive_short">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle toggle-transparent" data-toggle="collapse" data-target="#navbar-full">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    @if (Auth::User()->role == 0)
                    <a class="navbar-brand" id="logo_white" href="{{ url('dashboard') }}"><img src="{{ url('imgs/logo.png') }}" class="white_logo"></a>
                    <a class="navbar-brand" id="logo_black" href="{{ url('dashboard') }}"><img src="{{ url('imgs/logo_black.png') }}" class="black_logo"></a>
                    @else
                    <a class="navbar-brand" id="logo_white" href="{{ url('offers') }}"><img src="{{ url('imgs/logo.png') }}" class="white_logo"></a>
                    <a class="navbar-brand" id="logo_black" href="{{ url('offers') }}"><img src="{{ url('imgs/logo_black.png') }}" class="black_logo"></a>
                    @endif
                </div>
                <div id="navbar-full" class="collapse full_white_icons" >           
                    <ul class="nav-lists">
                        <li><a href="{{ url('gift-card') }}"><img src="../imgs/black_gift.png" class="header_icon nav_gift"><p class="header_text">Gift card</p></a></li>
                        <li><a href="{{ url('favourites/list') }}"><img src="../imgs/black_heart.png" class="header_icon nav_heart" ><p class="header_text">Favourites</p></a></li>
                        <li><a href="{{ url('write-to-us') }}"><img src="../imgs/black_help.png" class="nav_help header_icon" ><p class="header_text header_text_help">Help</p></a></li>                
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><img src="../imgs/black_user.png" class="nav_user header_icon" ><p class="header_text header_text_account">Account</p></a>             
                            <ul class="dropdown-menu">
                                <li>
                                    @if(Auth::User()->profile_img != null)
                                    <img class="header_logo" src="{{Auth::User()->profile_img}}">{{ Auth::User()->username }}
                                    @else 
                                    <img class="header_logo" src="//res.cloudinary.com/staycation/image/upload/q_auto,fl_lossy,f_auto/c_scale,dpr_2/c_fill,g_face,w_90,h_90/v1497970672/common/static/default-avatar">{{ Auth::User()->username }}
                                    @endif
                                </li>
                                <li @if(Request::segment(1) == 'profile') class="active" @endif><a href="{{ url('profile') }}">Profile</a></li>
                                <li @if(Request::segment(1) == 'travel') class="active" @endif><a href="{{ url('travel') }}">Travel Companion</a></li>
                                <li @if(Request::segment(1) == 'alerts') class="active" @endif><a href="{{ url('alerts') }}">Alerts</a></li>
                                <li @if(Request::segment(1) == 'subscription') class="active" @endif><a href="{{ url('subscription') }}">Subscriptions</a></li>                               
                                <li @if(Request::segment(1) == 'mail_gift_card') class="active" @endif><a href="{{ url('mail_gift_card') }}">Gift card</a></li>
                                <li><a href="{{ url('logout') }}">Log out</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>            
            </div>            
            <div class="responsive_long">
                <div class="col-md-3 col-xs-3 col-lg-3">
                    @if (Auth::User()->role == 0)
                    <a class="navbar-brand" id="logo_white" href="{{ url('dashboard') }}"><img src="{{ url('imgs/logo.png') }}" class="white_logo"></a>
                    <a class="navbar-brand" id="logo_black" href="{{ url('dashboard') }}"><img src="{{ url('imgs/logo_black.png') }}" class="black_logo"></a>
                    @else
                    <a class="navbar-brand" id="logo_white" href="{{ url('offers') }}"><img src="{{ url('imgs/logo.png') }}" class="white_logo"></a>
                    <a class="navbar-brand" id="logo_black" href="{{ url('offers') }}"><img src="{{ url('imgs/logo_black.png') }}" class="black_logo"></a>
                    @endif
                </div>
                <div class="col-md-9 col-xs-9 col-lg-9">
                    <div id="navbar" class="collapse navbar-collapse white_icons">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="{{ url('gift-card') }}"><img src="../imgs/white_gift.png" class="header_icon"><p class="header_text">Gift card</p></a></li>
                            <li><a href="{{ url('favourites/list') }}"><img src="../imgs/white_heart.png" class="header_icon" ><p class="header_text">Favourites</p></a></li>
                            <li><a href="{{ url('write-to-us') }}"><img src="../imgs/white_help.png" class="header_icon" ><p class="header_text header_text_help">Help</p></a></li>                
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><img src="../imgs/white_user.png" class="header_icon" ><p class="header_text header_text_account">Account</p></a>             
                                <ul class="dropdown-menu">
                                    <li>
                                        @if(Auth::User()->profile_img != null)
                                        <img class="header_logo" src="{{Auth::User()->profile_img}}">{{ Auth::User()->username }}
                                        @else 
                                        <img class="header_logo" src="//res.cloudinary.com/staycation/image/upload/q_auto,fl_lossy,f_auto/c_scale,dpr_2/c_fill,g_face,w_90,h_90/v1497970672/common/static/default-avatar">{{ Auth::User()->username }}
                                        @endif
                                    </li>
                                    <li @if(Request::segment(1) == 'profile') class="active" @endif><a href="{{ url('profile') }}">Profile</a></li>
                                    <li @if(Request::segment(1) == 'travel') class="active" @endif><a href="{{ url('travel') }}">Travel Companion</a></li>
                                    <li @if(Request::segment(1) == 'alerts') class="active" @endif><a href="{{ url('alerts') }}">Alerts</a></li>
                                    <li @if(Request::segment(1) == 'subscription') class="active" @endif><a href="{{ url('subscription') }}">Subscriptions</a></li>                               
                                    <li @if(Request::segment(1) == 'mail_gift_card') class="active" @endif><a href="{{ url('mail_gift_card') }}">Gift card</a></li>
                                    <li><a href="{{ url('logout') }}">Log out</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div id="navbar" class="collapse navbar-collapse black_icons" style="display:none !important;">            
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="{{ url('gift-card') }}"><img src="../imgs/black_gift.png" class="header_icon"><p class="header_text">Gift card</p></a></li>
                            <li><a href="{{ url('favourites/list') }}"><img src="../imgs/black_heart.png" class="header_icon" ><p class="header_text">Favourites</p></a></li>
                            <li><a href="{{ url('write-to-us') }}"><img src="../imgs/black_help.png" class="header_icon" ><p class="header_text header_text_help">Help</p></a></li>                
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><img src="../imgs/black_user.png" class="header_icon" ><p class="header_text header_text_account">Account</p></a>             
                                <ul class="dropdown-menu">
                                    <li>
                                        @if(Auth::User()->profile_img != null)
                                        <img class="header_logo" src="{{Auth::User()->profile_img}}">{{ Auth::User()->username }}
                                        @else 
                                        <img class="header_logo" src="//res.cloudinary.com/staycation/image/upload/q_auto,fl_lossy,f_auto/c_scale,dpr_2/c_fill,g_face,w_90,h_90/v1497970672/common/static/default-avatar">{{ Auth::User()->username }}
                                        @endif
                                    </li>
                                    <li @if(Request::segment(1) == 'profile') class="active" @endif><a href="{{ url('profile') }}">Profile</a></li>
                                    <li @if(Request::segment(1) == 'travel') class="active" @endif><a href="{{ url('travel') }}">Travel Companion</a></li>
                                    <li @if(Request::segment(1) == 'alerts') class="active" @endif><a href="{{ url('alerts') }}">Alerts</a></li>
                                    <li @if(Request::segment(1) == 'subscription') class="active" @endif><a href="{{ url('subscription') }}">Subscriptions</a></li>                               
                                    <li @if(Request::segment(1) == 'mail_gift_card') class="active" @endif><a href="{{ url('mail_gift_card') }}">Gift card</a></li>
                                    <li><a href="{{ url('logout') }}">Log out</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
 @elseif(Request::segment(1) == 'our-story' || Request::segment(1) == 'profile' || Request::segment(1) == 'write-to-us' || Request::segment(1) == 'legal-terms' || Request::segment(1) == 'travel' || Request::segment(1) == 'alerts' || Request::segment(1) == 'subscription' || Request::segment(1) == 'mail_gift_card' || Request::segment(1) == 'contact' || Request::segment(1) == 'career' || Request::segment(1) == 'career_detail' || Request::segment(1) == 'career_detail_info')
 <nav class="navbar navbar-fixed-top  solid_navbar">
    <div class="container-fluid">
        <div class="row">
            <div class="responsive_short">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle toggle-transparent" data-toggle="collapse" data-target="#navbar-full">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" id="logo_black" href="{{ url('offers') }}"><img src="{{ url('imgs/logo_black.png') }}" class="black_logo"></a>
                </div>
                <div id="navbar-full" class="collapse full_white_icons" >           
                    <ul class="nav-lists">
                        <li><a href="{{ url('gift-card') }}"><img src="../imgs/black_gift.png" class="header_icon"><p class="header_text">Gift card</p></a></li>
                        <li><a href="{{ url('favourites/list') }}"><img src="../imgs/black_heart.png" class="header_icon" ><p class="header_text">Favourites</p></a></li>
                        <li><a href="{{ url('write-to-us') }}"><img src="../imgs/black_help.png" class="header_icon" ><p class="header_text header_text_help">Help</p></a></li>                
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><img src="../imgs/black_user.png" class="header_icon" ><p class="header_text header_text_account">Account</p></a>             
                            <ul class="dropdown-menu">
                                <li>
                                    @if(Auth::User()->profile_img != null)
                                    <img class="header_logo" src="{{Auth::User()->profile_img}}">{{ Auth::User()->username }}
                                    @else 
                                    {{ Auth::User()->username }}
                                    @endif
                                </li>
                                <li @if(Request::segment(1) == 'profile') class="active" @endif><a href="{{ url('profile') }}">Profile</a></li>
                                <li @if(Request::segment(1) == 'travel') class="active" @endif><a href="{{ url('travel') }}">Travel Companion</a></li>
                                <li @if(Request::segment(1) == 'alerts') class="active" @endif><a href="{{ url('alerts') }}">Alerts</a></li>
                                <li @if(Request::segment(1) == 'subscription') class="active" @endif><a href="{{ url('subscription') }}">Subscriptions</a></li>                               
                                <li @if(Request::segment(1) == 'mail_gift_card') class="active" @endif><a href="{{ url('mail_gift_card') }}">Gift card</a></li>
                                <li><a href="{{ url('logout') }}">Log out</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>            
            </div>            
            <div class="responsive_long">
                <div class="col-md-3 col-xs-3 col-lg-3">                    
                    <a class="navbar-brand" id="logo_black" href="{{ url('offers') }}"><img src="{{ url('imgs/logo_black.png') }}" class="black_logo"></a>
                </div>
                <div class="col-md-9 col-xs-9 col-lg-9">
                    <div id="navbar" class="collapse navbar-collapse black_icons">            
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="{{ url('gift-card') }}"><img src="../imgs/black_gift.png" class="header_icon"><p class="header_text">Gift card</p></a></li>
                            <li><a href="{{ url('favourites/list') }}"><img src="../imgs/black_heart.png" class="header_icon" ><p class="header_text">Favourites</p></a></li>
                            <li><a href="{{ url('write-to-us') }}"><img src="../imgs/black_help.png" class="header_icon" ><p class="header_text header_text_help">Help</p></a></li>                
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><img src="../imgs/black_user.png" class="header_icon" ><p class="header_text header_text_account">Account</p></a>             
                                <ul class="dropdown-menu">
                                    <li>
                                        @if(Auth::User()->profile_img != null)
                                        <img class="header_logo" src="{{Auth::User()->profile_img}}">{{ Auth::User()->username }}
                                        @else 
                                        {{ Auth::User()->username }}
                                        @endif
                                    </li>
                                    <li @if(Request::segment(1) == 'profile') class="active" @endif><a href="{{ url('profile') }}">Profile</a></li>
                                    <li @if(Request::segment(1) == 'travel') class="active" @endif><a href="{{ url('travel') }}">Travel Companion</a></li>
                                    <li @if(Request::segment(1) == 'alerts') class="active" @endif><a href="{{ url('alerts') }}">Alerts</a></li>
                                    <li @if(Request::segment(1) == 'subscription') class="active" @endif><a href="{{ url('subscription') }}">Subscriptions</a></li>                               
                                    <li @if(Request::segment(1) == 'mail_gift_card') class="active" @endif><a href="{{ url('mail_gift_card') }}">Gift card</a></li>
                                    <li><a href="{{ url('logout') }}">Log out</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
@endif
@elseif(Request::segment(1) == null || Request::segment(1) == 'careers' || Request::segment(1) == 'how_it_works' || Request::segment(1) == 'blogs' || Request::segment(1) == 'blog-detail' || Request::segment(1) == 'career-detail' || Request::segment(1) == 'career-detail-info' || Request::segment(1) == 'reset_password')
<nav class="navbar navbar-fixed-top  homepage_navbar">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-xs-3 col-lg-3">
                <a class="navbar-brand" href="/" id="logo_white"><img src="{{ url('imgs/logo.png') }}" class="white_logo"></a>
                <a class="navbar-brand" href="/" id="logo_black"><img src="{{ url('imgs/logo_black.png') }}" class="black_logo"></a>
            </div>
            <div class="col-md-9 col-xs-9 col-lg-9">
                <div id="navbar" class="collapse navbar-collapse">           
                    <ul class="nav navbar-nav navbar-right homepage_collapse">
                        <li><a href="#" data-toggle="modal" data-target="#authentication" id="home_register">SIGN UP</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#authentication" id="home_login">LOGIN</a></li>
                    </ul>
                    <div class="homepage_button">
                        <a class="btn btn-get-started" data-toggle="modal" data-target="#authentication">Get started</a>                        
                    </div>
                </div>
            </div>
        </div> 
    </div>  
</nav>
@else
<nav class="navbar navbar-fixed-top  unsigned_navbar">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-xs-3 col-lg-3">                
                <a class="navbar-brand" href="/" id="logo_black"><img src="{{ url('imgs/logo_black.png') }}" class="black_logo"></a>
            </div>
            <div class="col-md-9 col-xs-9 col-lg-9">
                <div id="navbar" class="collapse navbar-collapse">           
                    <ul class="nav navbar-nav navbar-right homepage_collapse">
                        <li><a href="#" data-toggle="modal" data-target="#authentication" id="home_register">SIGN UP</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#authentication" id="home_login">LOGIN</a></li>
                    </ul>
                    <div class="homepage_button">
                        <a class="btn btn-get-started" data-toggle="modal" data-target="#authentication">Get started</a>                        
                    </div>
                </div>
            </div>
        </div> 
    </div>  
</nav>
@endif
