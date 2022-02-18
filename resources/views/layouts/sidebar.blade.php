 <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="{{ route('home')}}"> <img alt="image" src="{{ asset('assets/img/logo.png')}}" class="header-logos" /> <span
                class="logo-name">Blog</span>
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown active">
              <a href="{{ route('home')}}" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>

            <li>
              <a href="{{ route('categories.index')}}"><i
                  data-feather="briefcase"></i><span>Categories</span></a>

            </li>




          </ul>
        </aside>
      </div>
