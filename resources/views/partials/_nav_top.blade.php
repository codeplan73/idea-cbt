 <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand" style="display: none;">
     <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse"
         data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false"
         aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
     <a class="navbar-brand me-1 me-sm-3" href="/home">
         <div class="d-flex align-items-center"><img class="me-2" src="{{ asset('assets/logo/logo.png') }}"
                 alt="" width="40" /><span class="font-sans-serif text-primary">IDEA-CBT</span></div>
     </a>

     <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center"
         style="margin-right: 1.2rem; margin-bottom: 1rem;">

         <li class="nav-item dropdown">
             <a class="nav-link pe-0 ps-2" id="navbarDropdownUser" role="button" data-bs-toggle="dropdown"
                 aria-haspopup="true" aria-expanded="false">
                 <div class="avatar avatar-xl">
                     <img src="{{ Auth::user()->Image ? 'data:image/jpeg;base64,' . base64_encode(Auth::user()->Image) : asset('assets/img/no-image.jpg') }}"
                         alt="" class="rounded-circle mr-4"
                         style="height: 50px; width: 50px; margin-right: 1rem" />
                 </div>
             </a>
             <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end py-0"
                 aria-labelledby="navbarDropdownUser">
                 <div class="bg-white dark__bg-1000 rounded-2 py-2">

                     <a class="dropdown-item" href="/profile">Profile &amp; account</a>
                     <div class="dropdown-divider"></div>

                     <a class="dropdown-item" href="/settings">Settings</a>

                     <a class="dropdown-item" href="{{ route('logout') }}" role="button"
                         onclick="event.preventDefault();
                                                     document.getElementById('logout-form1').submit();">Logout</a>

                     <form id="logout-form1" action="{{ route('logout') }}" method="POST" class="d-none">
                         @csrf
                     </form>

                     </a>
                 </div>
             </div>
         </li>
     </ul>
 </nav>



 <script>
     var navbarPosition = localStorage.getItem('navbarPosition');
     var navbarVertical = document.querySelector('.navbar-vertical');
     var navbarTopVertical = document.querySelector('.content .navbar-top');
     var navbarTop = document.querySelector('[data-layout] .navbar-top:not([data-double-top-nav');
     var navbarDoubleTop = document.querySelector('[data-double-top-nav]');
     var navbarTopCombo = document.querySelector('.content [data-navbar-top="combo"]');

     if (localStorage.getItem('navbarPosition') === 'double-top') {
         document.documentElement.classList.toggle('double-top-nav-layout');
     }

     if (navbarPosition === 'top') {
         navbarTop.removeAttribute('style');
         navbarTopVertical.remove(navbarTopVertical);
         navbarVertical.remove(navbarVertical);
         navbarTopCombo.remove(navbarTopCombo);
         navbarDoubleTop.remove(navbarDoubleTop);
     } else if (navbarPosition === 'combo') {
         navbarVertical.removeAttribute('style');
         navbarTopCombo.removeAttribute('style');
         navbarTop.remove(navbarTop);
         navbarTopVertical.remove(navbarTopVertical);
         navbarDoubleTop.remove(navbarDoubleTop);
     } else if (navbarPosition === 'double-top') {
         navbarDoubleTop.removeAttribute('style');
         navbarTopVertical.remove(navbarTopVertical);
         navbarVertical.remove(navbarVertical);
         navbarTop.remove(navbarTop);
         navbarTopCombo.remove(navbarTopCombo);
     } else {
         navbarVertical.removeAttribute('style');
         navbarTopVertical.removeAttribute('style');
         navbarTop.remove(navbarTop);
         navbarDoubleTop.remove(navbarDoubleTop);
         navbarTopCombo.remove(navbarTopCombo);
     }
 </script>
