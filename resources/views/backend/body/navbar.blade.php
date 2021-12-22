    <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li>
                <a href="#" data-toggle="sidebar" class="nav-link nav-link-lg collapse-btn">
                    <i data-feather="menu"></i>
                </a>
            </li>
          </ul>
        </div>
        <ul class="navbar-nav navbar-right">
            <li>
                <a href="{{ url('/') }}"  target="_blank" class="nav-link nav-link-lg" data-toggle="tooltip" title="@lang('dashboard.View Website')">
                  <i data-feather="cast"></i>
                </a>
            </li>
            <li>
                <a href="#" class="nav-link nav-link-lg fullscreen-btn" data-toggle="tooltip" title="@lang('dashboard.Full Screen')">
                    <i data-feather="maximize"></i>
                </a>
            </li>
            <li class="dropdown dropdown-list-toggle" data-toggle="tooltip" title="@lang('dashboard.Notifications')">
                <a href="#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle">
                  <i data-feather="bell" class="mailAnim"></i>
                    <span class="badge headerBadge1"> </span>
                </a>
                <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
                    <div class="dropdown-header">
                        @lang('dashboard.Notifications')
                        <div class="float-right">

                        </div>
                    </div>
                    <div class="dropdown-list-content dropdown-list-message">
                        <a href="#" class="dropdown-item">
                            <span class="dropdown-item-icon bg-info text-white">
                                <i class="far fa-user"></i>
                            </span>
                            <span class="dropdown-item-desc">
                                <span class="message-user">@lang('dashboard.Update')</span>
                                <span class="time messege-text">@lang('dashboard.Technical Update') !!</span>
                                <span class="time">{{ date('d-m-Y') }}</span>
                            </span>
                        </a>
                        <a href="#" class="dropdown-item">
                            <span class="dropdown-item-icon bg-info text-white">
                                <i class="far fa-user"></i>
                            </span>
                            <span class="dropdown-item-desc">
                                <span class="message-user">@lang('dashboard.Update')</span>
                                <span class="time messege-text">@lang('dashboard.Technical Update') !!</span>
                                <span class="time">{{ date('d-m-Y') }}</span>
                            </span>
                        </a>
                        <a href="#" class="dropdown-item">
                            <span class="dropdown-item-icon bg-info text-white">
                                <i class="far fa-user"></i>
                            </span>
                            <span class="dropdown-item-desc">
                                <span class="message-user">@lang('dashboard.Update')</span>
                                <span class="time messege-text">@lang('dashboard.Technical Update') !!</span>
                                <span class="time">{{ date('d-m-Y') }}</span>
                            </span>
                        </a>
                        <a href="#" class="dropdown-item">
                            <span class="dropdown-item-icon bg-info text-white">
                                <i class="fas fa-code-branch"></i>
                            </span>
                            <span class="dropdown-item-desc">
                                <span class="message-user">@lang('dashboard.Update')</span>
                                <span class="time messege-text">@lang('dashboard.Technical Update') !!</span>
                                <span class="time">{{ date('d-m-Y') }}</span>
                            </span>
                        </a>
                    </div>
                    <div class="dropdown-footer text-center">
                        <a href="#"> @lang('dashboard.View All') <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </li>
            <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                  <img alt="image" src="{{ asset('backend/img/logo/logo.png') }}"  class="user-img-radious-style">
                  <span class="d-sm-none d-lg-inline-block"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right pullDown">
                    {{-- <div class="dropdown-title">Hello Sarah Smith</div> --}}
                    <a href="profile.html" class="dropdown-item has-icon">
                        <i class="far fa-user"></i>
                        @lang('dashboard.Profile')
                    </a>
                    <a href="#" class="dropdown-item has-icon">
                        <i class="fas fa-cog"></i>
                        @lang('dashboard.Settings')
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i>@lang('auth.Logout')
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </nav>
