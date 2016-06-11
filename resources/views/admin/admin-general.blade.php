
@include('include.head')
<style media="screen">
  .nav.side-menu> li.active > a{
    background: radial-gradient(farthest-corner at 95% 10%, #94525A, #181528);
  }
  body.nav-md ul.nav.child_menu li:before{
    background: white;
  }
  body.nav-md ul.nav.child_menu li:after{
    background: white;
  }
</style>
<body class="nav-md" style="background: radial-gradient(farthest-corner at 95% 10%, #94525A, #181528); ">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0; background:radial-gradient(farthest-corner at 95% 10%, #94525A, #181528);">
            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentellela Alela!</span></a>
          </div>
          <div class="clearfix"></div>
          <!-- menu prile quick info -->
          @include('include.logo')
          <!-- /menu prile quick info -->
          <br />
          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-home"></i>Panel</a>
                </li>
                <li><a><i class="fa fa-university"></i>Instituciones</a>
                </li>
                <li><a><i class="fa fa-users"></i>Administradores</a>
                </li>
                <li><a><i class="fa fa-cogs"></i>Configuracion<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="general_elements.html">General Elements</a>
                    </li>
                    <li><a href="media_gallery.html">Media Gallery</a>
                    </li>
                    <li><a href="typography.html">Typography</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- top navigation -->
      <div class="top_nav">
        @include('include.nav')
      </div>
      <!-- /top navigation -->
      <!-- page content -->
      <div class="right_col" role="main">
        @include('include.title-nav')
        @yield("content")
        @include('include.footer')
      </div>
      <!-- /page content -->
    </div>
  </div>
  @include('include.foot')
</body>
