
<nav class="sidebar sidebar-offcanvas" id="sidebar" >
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="index.html"><img src="{{asset('adminasset')}}/images/logo.svg" alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="{{asset('adminasset')}}/images/logo-mini.svg" alt="logo" /></a>
    </div>
    <ul class="nav">
        <li class="nav-item profile">
            <div class="profile-desc">
                <div class="profile-pic">
                    <div class="count-indicator">
                        <img class="img-xs rounded-circle " src="{{asset('adminasset')}}/images/faces/face15.jpg" alt="">
                        <span class="count bg-success"></span>
                    </div>
                    <div class="profile-name">
                        <h5 class="mb-0 font-weight-normal">{{Auth::user()->name}}</h5>
                        <span>  <a class="text-uppercase text-small" href="/logoutuser">Log Out</a></span>
                    </div>
                </div>
               </div>
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('admin.index')}}">
              <span class="menu-icon">
                <i class="mdi mdi-home"></i>
              </span>
                <span class="menu-title">Home</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('admin.category.index')}}">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
                <span class="menu-title">Category</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('admin.policlinic.index')}}">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
                <span class="menu-title">Policlinic</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('admin.message.index')}}">
              <span class="menu-icon">
                <i class="mdi mdi-message"></i>
              </span>
                <span class="menu-title">Messages</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('admin.faq.index')}}">
              <span class="menu-icon">
                <i class="mdi mdi-frequently-asked-questions"></i>
              </span>
                <span class="menu-title">FAQ</span>
            </a>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('admin.setting')}}">
              <span class="menu-icon">
                <i class="mdi mdi-settings"></i>
              </span>
                <span class="menu-title">Setting</span>
            </a>
        </li>
    </ul>
</nav>
