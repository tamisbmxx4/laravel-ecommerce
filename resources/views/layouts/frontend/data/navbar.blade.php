 <!-- Offcanvas Menu Begin -->
 <div class="offcanvas-menu-overlay"></div>
 <div class="offcanvas-menu-wrapper">
     <div class="offcanvas__close">+</div>
     <div class="offcanvas__logo">
        <div class="text-center">
         <a href="{{ url('/') }}"><img src="{{ asset('ashion') }}/img/logo.png" alt="" width="160" height="70"></a>
        </div>
     </div>
     <ul class="offcanvas__widget" style="text-align: left">
         <li><span class="icon_search search-switch"></span></li>
         <li><a href="{{ route('cart.index') }}"><span class="icon_bag_alt"></span>
             <div class="tip">{{ $totalCart ?? 0 }}</div>
         </a></li>
     </ul>
     <div id="mobile-menu-wrap"></div>
 </div>

 <!-- Offcanvas Menu End -->

 <!-- Header Section Begin -->
 <header class="header">
     <div class="container-fluid">
         <div class="row">
             <div class="col-xl-3 col-lg-2">
                 <div class="">
                 <a href="{{ url('/') }}"><img src="{{ asset('ashion') }}/img/logonav.jpeg" alt="" width="100" height="90"></a>
                 </div>
             </div>
             <div class="col-xl-6 col-lg-7 text-center">
                 <nav class="header__menu">
                     <ul>
                         <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="{{ url('/') }}">Beranda</a></li>
                         <li class="{{ request()->is('product*') ? 'active' : '' }}"><a href="{{ route('product.index') }}">Produk</a></li>
                         <li class="{{ request()->is('category*') ? 'active' : '' }}"><a href="{{ route('category.index') }}">Kategori</a></li>
                         @auth
                          <li class="{{ request()->is('category*') ? 'active' : '' }}"><a href="#"><i class="fa fa-angle-down"></i> {{ auth()->user()->name }}</a>
                            <ul class="dropdown">
                                <li><a href="{{ route('transaction.index') }}">Riwayat Belanja</a></li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <li>
                                        <a href="{{ route('logout')  }}" onclick="event.preventDefault();
                                        this.closest('form').submit();" > Logout
                                    </a>
                                    </li>
                                </form>
                            </ul>
                        </li>
                             @else
                             
                             <li><a href="{{ route('login') }}"> Masuk</a></li>
                         @endauth
                     </ul>
                 </nav>
             </div>
             <div class="col-lg-3">
                 <div class="header__right">
                     <ul class="header__right__widget">
                         <li><span class="icon_search search-switch"></span></li>
                         <li><a href="{{ route('cart.index') }}"><span class="icon_bag_alt"></span>
                             <div class="tip">
                                 {{ $totalCart ?? 0 }}
                             </div>
                         </a></li>
                     </ul>
                 </div>
             </div>
         </div>
         <div class="canvas__open">
             <i class="fa fa-bars"></i>
         </div>
     </div>
 </header>
 <!-- Header Section End -->