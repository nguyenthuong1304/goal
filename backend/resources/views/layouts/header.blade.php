@if(Auth::check())
<nav class="t-header">
  <div class="t-header-brand-wrapper">
    <a href="/">
      <img class="logo" src="{{ asset('template/images/logo.svg') }}" alt="">
      <img class="logo-mini" src="{{ asset('template/images/logo_mini.svg') }}" alt="">
    </a>
  </div>
  <div class="t-header-content-wrapper">
    <div class="t-header-content">
      <button class="t-header-toggler t-header-mobile-toggler d-block d-lg-none">
        <i class="mdi mdi-menu"></i>
      </button>
      <form action="#" class="t-header-search-box">
        <div class="input-group">
          <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Search" autocomplete="off">
          <button class="btn btn-primary" type="submit"><i class="mdi mdi-arrow-right-thick"></i></button>
        </div>
      </form>
      <ul class="nav ml-auto">
        <li class="nav-item dropdown">
            <a 
                class="nav-link"
                href="#"
                id="notificationDropdown"
                data-toggle="dropdown"
                aria-expanded="false"
            >
            <i class="mdi mdi-bell-outline mdi-1x"></i>
            @if(auth()->user()->unreadNotifications->count() > 0)
                <span class="notification-indicator notification-indicator-primary notification-indicator-ripple" id="notification-read"></span>
            @endif
          </a>
            <notification
                :notis="{{ getNotifications() }}"
                :userid="{{ auth()->id() }}" 
                :count="{{ auth()->user()->unreadNotifications->count() }}"
            ></notification>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" id="messageDropdown" data-toggle="dropdown" aria-expanded="false">
            <i class="mdi mdi-message-outline mdi-1x"></i>
            <span class="notification-indicator notification-indicator-primary notification-indicator-ripple"></span>
          </a>
          <div class="dropdown-menu navbar-dropdown dropdown-menu-right" aria-labelledby="messageDropdown">
            <div class="dropdown-header">
              <h6 class="dropdown-title">Messages</h6>
              <p class="dropdown-title-text">You have 4 unread messages</p>
            </div>
            <div class="dropdown-body">
              <div class="dropdown-list">
                <div class="image-wrapper">
                  <img class="profile-img" src="{{ asset('template/images/profile/male/image_1.png') }}" alt="profile image">
                  <div class="status-indicator rounded-indicator bg-success"></div>
                </div>
                <div class="content-wrapper">
                  <small class="name">Clifford Gordon</small>
                  <small class="content-text">Lorem ipsum dolor sit amet.</small>
                </div>
              </div>
              <div class="dropdown-list">
                <div class="image-wrapper">
                  <img class="profile-img" src="{{ asset('template/images/profile/female/image_2.png') }}" alt="profile image">
                  <div class="status-indicator rounded-indicator bg-success"></div>
                </div>
                <div class="content-wrapper">
                  <small class="name">Rachel Doyle</small>
                  <small class="content-text">Lorem ipsum dolor sit amet.</small>
                </div>
              </div>
              <div class="dropdown-list">
                <div class="image-wrapper">
                  <img class="profile-img" src="{{ asset('template/images/profile/male/image_3.png') }}" alt="profile image">
                  <div class="status-indicator rounded-indicator bg-warning"></div>
                </div>
                <div class="content-wrapper">
                  <small class="name">Lewis Guzman</small>
                  <small class="content-text">Lorem ipsum dolor sit amet.</small>
                </div>
              </div>
            </div>
            <div class="dropdown-footer">
              <a href="#">View All</a>
            </div>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" id="appsDropdown" data-toggle="dropdown" aria-expanded="false">
            <i class="mdi mdi-apps mdi-1x"></i>
          </a>
          <div class="dropdown-menu navbar-dropdown dropdown-menu-right" aria-labelledby="appsDropdown">
            <div class="dropdown-header">
              <h6 class="dropdown-title">Apps</h6>
              <p class="dropdown-title-text mt-2">Authentication required for 3 apps</p>
            </div>
            <div class="dropdown-body border-top pt-0">
              <a class="dropdown-grid" href="{{ route('change-lang', currentLocale() == 'vi'? 'en' : 'vi') }}">
                <i class="grid-icon mdi mdi-2x">
                  <img src="{{ asset('images/'. getLang()) }}" width="40">
                </i>
                <span class="grid-tittle">{{ getNameLang() }}</span>
              </a>
              <a class="dropdown-grid">
                <i class="grid-icon mdi mdi-trello mdi-2x"></i>
                <span class="grid-tittle">Trello</span>
              </a>
              <a class="dropdown-grid" href="{{ route('profile') }}">
                <i class="grid-icon mdi mdi-account-circle mdi-2x"></i>
                <span class="grid-tittle">{{ __('page.profile') }}</span>
              </a>
              <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();" class="dropdown-grid">
                <i class="grid-icon mdi mdi-bitbucket mdi-2x"></i>
                <span class="grid-tittle">{{ __('page.logout') }}</span>
              </a>    
              <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
              </form>
            </div>
            <div class="dropdown-footer">
              <a href="#">{{ __('page.viewAll') }}</a>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
@endif