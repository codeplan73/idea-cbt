 <script>
     var isFluid = JSON.parse(localStorage.getItem('isFluid'));
     if (isFluid) {
         var container = document.querySelector('[data-layout]');
         container.classList.remove('container');
         container.classList.add('container-fluid');
     }
 </script>

 <nav class="navbar navbar-light navbar-vertical navbar-expand-xl" style="display: none;">
     <script>
         var navbarStyle = localStorage.getItem("navbarStyle");
         if (navbarStyle && navbarStyle !== 'transparent') {
             document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
         }
     </script>
     <div class="d-flex align-items-center">
         <div class="toggle-icon-wrapper">
             <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip"
                 data-bs-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span
                         class="toggle-line"></span></span></button>
         </div><a class="navbar-brand" href="/student">
             <div class="d-flex align-items-center py-3">
                 <img class="me-2" src="{{ asset('assets/logo/logo.png') }}" alt="" width="40" />
                 <span class="font-sans-serif text-primary">Hira CBT</span>
             </div>
         </a>
     </div>

     <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
         <div class="navbar-vertical-content scrollbar">
             <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
                 <li class="nav-item">
                     <!-- parent pages--><a class="nav-link" href="/student" aria-expanded="true"
                         aria-controls="dashboard">
                         <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                     class="fas fa-chart-pie"></span></span><span
                                 class="nav-link-text ps-1">Dashboard</span></div>
                     </a>
                 </li>
                 <li class="nav-item">

                     @if (Auth::guard('student')->user()->Current_Status == 'Active')
                         <div class="nav-item">
                             <a class="nav-link " href="/notes-list" data-placement="left">
                                 <i class="fa-solid fa-book-open nav-icon"></i>
                                 <span class="nav-link-title">E-Note</span>
                             </a>
                         </div>
                         <div class="nav-item">
                             <a class="nav-link " href="/book-list" data-placement="left">
                                 <i class="fa-solid fa-book nav-icon"></i>
                                 <span class="nav-link-title">E-Book</span>
                             </a>
                         </div>
                         <div class="nav-item">
                             <a class="nav-link " href="/library-student" data-placement="left">
                                 <i class="fa-solid fa-book nav-icon"></i>
                                 <span class="nav-link-title">Library</span>
                             </a>
                         </div>

                         <div class="nav-item">
                             <a class="nav-link " href="/video-lesson" data-placement="left">
                                 <i class="fa-solid fa-video nav-icon"></i>
                                 <span class="nav-link-title">Video Lesson</span>
                             </a>
                         </div>
                         <div class="nav-item">
                             <a class="nav-link " href="/student-exam" data-placement="left">
                                 <i class="fa-solid fa-restroom nav-icon"></i>
                                 <span class="nav-link-title">Take Exam</span>
                             </a>
                         </div>
                         <div class="nav-item">
                             <a class="nav-link " href="/student-result" data-placement="left">
                                 <i class="fa-solid fa-square-poll-horizontal nav-icon"></i>
                                 <span class="nav-link-title">Check Result</span>
                             </a>
                         </div>
                         <div class="nav-item">
                             <a class="nav-link " href="/student-profile" data-placement="left">
                                 <i class="fa-solid fa-lock nav-icon"></i>
                                 <span class="nav-link-title">Update Password</span>
                             </a>
                         </div>
                     @endif

                     <div class="nav-item">
                         <a class="nav-link " href="/student-logout" data-placement="left">
                             <i class="fa-solid fa-right-from-bracket nav-icon"></i>
                             <span class="nav-link-title">Logout</span>
                         </a>
                     </div>


                 </li>

             </ul>

         </div>
     </div>
 </nav>
