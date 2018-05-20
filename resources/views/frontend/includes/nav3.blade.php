
<!-- Header -->
    <div class="aitsheaderw3ls" id="agilehome">

        <!-- Navigation -->
        <div class="agiletopbar">
            <div class="wthreenavigation">
                <div class="menu-wrap">
                    <nav class="menu">
                        <div class="icon-list">
                            <a class="scroll active" href="#agilehome"><i class="fa fa-home"></i><span>Home</span></a>
                            <a class="scroll" href="#about"><i class="fa fa-info"></i><span>About</span></a>
                            <a class="scroll" href="#skills"><i class="fa fa-bar-chart"></i><span>Skills</span></a>
                            <a class="scroll" href="#testimonials"><i class="fa fa-picture-o"></i><span>Testimonials</span></a>
                            <a class="scroll" href="#education"><i class="fa fa-book"></i><span>Education</span></a>
                            <a class="scroll" href="#experience"><i class="fa fa-university"></i><span>Experience</span></a>
                            <a class="scroll" href="#contact"><i class="fa fa-phone"></i><span>Contact Me</span></a>
                        </div>
                    </nav>
                    <button class="close-button" id="close-button">Close Menu</button>
                </div>
                <button class="menu-button" id="open-button">Open Menu</button>
            </div>

            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('labels.general.toggle_navigation') }}">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="agileinfomenu">
                <p>MENU</p>
            </div>

            <div class="aitslogow3ls">
                    <a href="/"><div class="agilelogo">My Career</div></a>
            </div>

            <div class="wthreenavigation">
                <div class="menu-wrap">
                    <nav class="menu">
                        <div class="icon-list">
                            @if (config('locale.status') && count(config('locale.languages')) > 1)
                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownLanguageLink" data-toggle="dropdown"
                                       aria-haspopup="true" aria-expanded="false">{{ __('menus.language-picker.language') }} ({{ strtoupper(app()->getLocale()) }})</a>

                                    @include('includes.partials.lang')
                                </li>
                            @endif
                            
                            @auth
                                <a href="{{route('frontend.user.dashboard')}}" class="nav-link {{ active_class(Active::checkRoute('frontend.user.dashboard')) }}">{{ __('navs.frontend.dashboard') }}</a>
                            @endauth

                            @guest
                                <a href="{{route('frontend.auth.login')}}" class="nav-link {{ active_class(Active::checkRoute('frontend.auth.login')) }}">{{ __('navs.frontend.login') }}</a>

                                @if (config('access.registration'))
                                    <a href="{{route('frontend.auth.register')}}" class="nav-link {{ active_class(Active::checkRoute('frontend.auth.register')) }}">{{ __('navs.frontend.register') }}</a>
                                @endif
                            @else
                                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuUser" data-toggle="dropdown"
                                       aria-haspopup="true" aria-expanded="false">{{ $logged_in_user->name }}</a>

                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuUser">
                                        @can('view backend')
                                            <a href="{{ route('admin.dashboard') }}" class="dropdown-item">{{ __('navs.frontend.user.administration') }}</a>
                                        @endcan

                                        <a href="{{ route('frontend.user.account') }}" class="dropdown-item {{ active_class(Active::checkRoute('frontend.user.account')) }}">{{ __('navs.frontend.user.account') }}</a>
                                        <a href="{{ route('frontend.auth.logout') }}" class="dropdown-item">{{ __('navs.general.logout') }}</a>
                                    </div>
                            @endguest
                        </div>
                    </nav>
            <button class="close-button" id="close-button">Close Menu</button>
            </div>
                <button class="menu-button" id="open-button">Open Menu</button>
            </div>

            <div class="wthreecontact">
                <p><a class="scroll" href="#contact"><i class="fa fa-envelope-o" aria-hidden="true"></i> CONTACT ME</a></p>
            </div>
            <div class="clearfix"></div>
        </div>
        <!-- //Navigation -->
    </div>
<!-- //Header -->

