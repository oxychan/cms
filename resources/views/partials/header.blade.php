<div class="header">
    <div class="container">
        <div class="row">
          <div class="col-md-12">
             <div class="header-left">
                 <div class="logo">
                    <a href="{{ route('home') }}"><img src="{{ asset('assets/images/logo.png') }}" alt=""/></a>
                 </div>
                 <div class="menu">
                      <a class="toggleMenu" href="#"><img src="{{ asset('assets/images/nav.png') }}" alt="" /></a>
                        <ul class="nav" id="nav">
                            <li><a href="{{ route('shop') }}">Shop</a></li>
                            <li><a href="{{ route('team') }}">Team</a></li>
                            <li><a href="{{ route('events') }}">Events</a></li>
                            <li><a href="{{ route('experience') }}">Experiance</a></li>
                            <li><a href="{{ route('company') }}">Company</a></li>
                            <li><a href="{{ route('contact-us') }}">Contact</a></li>								
                            <div class="clear"></div>
                        </ul>
                        <script type="text/javascript" src="{{ asset('assets/js/responsive-nav.js') }}"></script>
                </div>							
                <div class="clear"></div>
            </div>
            <div class="header_right">
                @guest
                    @if (Route::has('login'))
                        <div class="login_button"><a href="{{ route('login') }}">Login</a></div>
                    @endif

                    @else
                    {{-- <ul style="display: inline-block; color:white; text-decoration: none; list-style: none;"> --}}
                        <li>
                            <div class="login_button">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();" style="text-decoration: none; color:#000;">
                                    {{ __('Logout') }}
                                </a>
                            </div>                              

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                        <li>
                            <span style="font-weight: bolder !important;">|</span>
                        </li>
                        <li>
                            <a id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="text-decoration: none; color:white;">
                                <b>{{ Auth::user()->name }}</b>
                            </a>                                                     
                        </li>                       
                        
                    {{-- </ul>                                --}}
                @endguest

                    <!----//search-scripts---->
                    <ul class="icon1 sub-icon1 profile_img">
                        <li><a class="active-icon c1" href="#"> </a>
                           <ul class="sub-icon1 list">
                             <div class="product_control_buttons">
                                 <a href="#"><img src="{{ asset('assets/images/edit.png') }}" alt=""/></a>
                                     <a href="#"><img src="{{ asset('assets/images/close_edit.png') }}" alt=""/></a>
                             </div>
                              <div class="clear"></div>
                             <li class="list_img"><img src="{{ asset('assets/images/1.jpg') }}" alt=""/></li>
                             <li class="list_desc"><h4><a href="#">velit esse molestie</a></h4><span class="actual">1 x
                             $12.00</span></li>
                             <div class="login_buttons">
                                <div class="check_button"><a href="{{ route('checkout') }}">Check out</a></div>
                                <div class="clear"></div>
                             </div>
                             <div class="clear"></div>
                           </ul>
                        </li>
                    </ul>
                
               <div class="clear"></div>
           </div>
      </div>
     </div>
    </div>
</div>