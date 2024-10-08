      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          {{-- <div class="sidebar-brand">
            <a href="index.html">
                <img alt="image" src="{{ asset('backend/img/logo.png') }}" class="header-logo" />
                <span class="logo-name">DMG</span>
            </a>
          </div> --}}
          <div class="sidebar-user">
            <div class="sidebar-user-picture">
              <img alt="image" src="{{ asset('backend/img/logo/logo.png') }}">
            </div>
            <div class="sidebar-user-details">
                <div class="user-name">{{ Auth::user()->name }}</div>
                <div class="user-role">{{Auth::user()->roles->first()->name}}</div>
                <div class="sidebar-userpic-btn">
                    <a href="?language=en" data-toggle="tooltip" title="English">
                        <img src="https://img.icons8.com/emoji/32/000000/united-kingdom-emoji.png"/>
                    </a>
                    <a href="?language=ka" data-toggle="tooltip" title="ქართული">
                        <img src="https://img.icons8.com/emoji/32/000000/georgia-emoji.png"/>
                    </a>
                    <a href="?language=ru" data-toggle="tooltip" title="Pусский">
                        <img src="https://img.icons8.com/emoji/32/000000/russia-emoji.png"/>
                    </a>
                </div>
            </div>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header"></li>
            <li class="dropdown">
              <a href="{{ route('dashboard') }}" class="nav-link"><i data-feather="monitor"></i><span>@lang('dashboard.Dashboard')</span></a>
            </li>

            <li class="dropdown">
              <a href="{{ route('posts.index') }}" class="nav-link"><i data-feather="file-text"></i><span>@lang('dashboard.Posts')</span></a>
            </li>

            <li class="dropdown">
              <a href="{{ route('posts.index') }}" class="nav-link"><i data-feather="copy"></i><span>@lang('dashboard.Pages')</span></a>
            </li>

            <li class="dropdown">
              <a href="{{ route('clients.index') }}" class="nav-link"><i data-feather="briefcase"></i><span>@lang('dashboard.Clients')</span></a>
            </li>

            @can('contact-list')
            <li class="dropdown">
                <a href="{{ route('contacts.index') }}" class="nav-link"><i data-feather="mail"></i><span>@lang('dashboard.Notifications')</span></a>
            </li>
            @endcan

            <li class="menu-header"><hr></li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="users"></i><span>@lang('dashboard.Users')</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route('roles.index') }}">@lang('dashboard.Roles')</a></li>
                <li><a class="nav-link" href="{{ route('permissions.index') }}">@lang('dashboard.Permissions')</a></li>
                <li><a class="nav-link" href="{{ route('users.index') }}">@lang('dashboard.User List')</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="settings"></i><span>@lang('dashboard.Settings')</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route('roles.index') }}">@lang('dashboard.Roles')</a></li>
                <li><a class="nav-link" href="{{ route('permissions.index') }}">@lang('dashboard.Permissions')</a></li>
                <li><a class="nav-link" href="{{ route('users.index') }}">@lang('dashboard.User List')</a></li>
              </ul>
            </li>
          </ul>
        </aside>
      </div>
