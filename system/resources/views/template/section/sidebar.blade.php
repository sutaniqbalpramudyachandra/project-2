@php
    function checkRouteActive($route){
    if(Route::current()->uri == $route) return 'active';
  }
@endphp
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile"><img src="{{url('system')}}/img/kibul123.jpg" class="img-circle" width="80"></a></p>
          <h5 class="centered">Sutan Iqbal Pramudya Chandra</h5>
          <li class="mt">
            <a  href="{{url('beranda')}}"  class="nav-link {{checkRouteActive('beranda')}}">
              <i class="fa fa-home"></i>
              <span>Beranda</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="{{url('product')}}" class="nav-link {{checkRouteActive('product')}}">
              <i class="fa fa-desktop"></i>
              <span>Product</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="{{url('kategori')}}" class="nav-link {{checkRouteActive('kategori')}}">
              <i class="fa fa-cogs"></i>
              <span>Kategori</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="{{url('system')}}/javascript:;" class="nav-link {{checkRouteActive('master data')}}">
              <i class="fa fa-book"></i>
              <span>Master Data</span>
              </a>
            <ul class="sub">
              <li><a href="pelanggan" class="nav-link {{checkRouteActive('pelanggan')}}">Pelanggan</a></li>
              <li><a href="supplier" class="nav-link {{checkRouteActive('supplier')}}">Supplier</a></li>
            </ul>
          </li>
          <li>
            <a href="promo" class="nav-link {{checkRouteActive('promo')}}">
              <i class="fa fa-envelope"></i>
              <span>Promo</span>
              <span class="label label-theme pull-right mail-info">2</span>
              </a>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>