
<!-- Header -->
    <div class="aitsheaderw3ls" id="agilehome">
        <!-- Navigation -->
        <div class="agiletopbar">

            <div class="wthreenavigation">
                <div class="menu-wrap">
                    <nav class="menu">
                        <div class="icon-list">

                            @if (Active::checkroute('frontend.index'))
                            <a class="scroll active" href="#agilehome"><i class="fa fa-home"></i><span>Home</span></a>
                            <a class="scroll" href="#about"><i class="fa fa-info"></i><span>About</span></a>
                            <a class="scroll" href="#skills"><i class="fa fa-bar-chart"></i><span>Skills</span></a>
                            <a class="scroll" href="#testimonials"><i class="fa fa-picture-o"></i><span>Testimonials</span></a>
                            <a class="scroll" href="#education"><i class="fa fa-book"></i><span>Education</span></a>
                            <a class="scroll" href="#experience"><i class="fa fa-university"></i><span>Experience</span></a>
                            <a class="scroll" href="#contact"><i class="fa fa-phone"></i><span>Contact Me</span></a>
                            <br>
                            @else
                            <a href="/"><i class="fa fa-home"></i><span>Home</span></a>
                            <br>
                            @endif

                            @guest
                                <a href="{{route('frontend.auth.login')}}" class="nav-link {{ active_class(Active::checkRoute('frontend.auth.login')) }}"><i class="fa fa-sign-in"></i><span>{{ __('navs.frontend.login') }}</span></a>

                                @if (config('access.registration'))
                                    <a href="{{route('frontend.auth.register')}}" class="nav-link {{ active_class(Active::checkRoute('frontend.auth.register')) }}"><i class="fa fa-lock"></i><span>{{ __('navs.frontend.register') }}</span></a>
                                @endif
                            @else
                                <a href="#" class="nav-link"><i class="fa fa-user-circle"></i><span>{{ $logged_in_user->name }}</span></a>
                                @can('view backend')
                                    <a href="{{ route('admin.dashboard') }}" class="nav-link">{{ __('navs.frontend.user.administration') }}</a>
                                @endcan

                                <a href="{{ route('frontend.user.account') }}" class="nav-link {{ active_class(Active::checkRoute('frontend.user.account')) }}"><i class="fa fa-arrow-circle-o-right"></i><span>{{ __('navs.frontend.user.account') }}</span></a>
                                <a href="{{ route('frontend.auth.logout') }}" class="nav-link"><i class="fa fa-sign-out"></i><span>{{ __('navs.general.logout') }}</span></a>

                            @endguest

                            @auth
                                <a href="{{route('frontend.user.dashboard')}}" class="nav-link {{ active_class(Active::checkRoute('frontend.user.dashboard')) }}"><i class="fa fa-tachometer"></i><span>{{ __('navs.frontend.dashboard') }}</span></a>
                            @endauth
                        </div>
                    </nav>
                    <button class="close-button" id="close-button">Close Menu</button>
                </div>
                <button class="menu-button" id="open-button">Open Menu</button>
            </div>

            </div>

        </div>
    </div>
<!-- //Header -->

