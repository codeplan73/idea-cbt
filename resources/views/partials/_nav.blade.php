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
         </div><a class="navbar-brand" href="/home">
             <div class="py-3 d-flex align-items-center"><img class="me-2" src="{{ asset('assets/logo/logo.png') }}"
                     alt="" width="40" /><span class="font-sans-serif text-primary">Hira CBT</span></div>
         </a>
     </div>

     <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
         <div class="navbar-vertical-content scrollbar">
             <ul class="mb-3 navbar-nav flex-column" id="navbarVerticalNav">
                 <li class="nav-item">
                     <!-- parent pages--><a class="nav-link" href="/home" aria-expanded="true"
                         aria-controls="dashboard">
                         <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                     class="fas fa-chart-pie"></span></span><span
                                 class="nav-link-text ps-1">Dashboard</span></div>
                     </a>
                 </li>
                 <li class="nav-item">



                     {{-- @if (Auth::guard('student')->user()->Current_Status == 'Inactive') --}}


                     {{-- Staff Section --}}
                     <div class="nav-item">
                         <a class="nav-link " href="/staff-list" data-placement="left">
                             <i class="fa-solid fa-users nav-icon"></i>
                             <span class="nav-link-title">Staff List</span>
                         </a>
                     </div>
                     <div class="nav-item">
                         <a class="nav-link " href="/student-list" data-placement="left">
                             <i class="fa-solid fa-users nav-icon"></i>
                             <span class="nav-link-title">Student List</span>
                         </a>
                     </div>


                     <div class="nav-item">
                         <a class="nav-link " href="/note" data-placement="left">
                             <i class="fa-solid fa-book-open nav-icon"></i>
                             <span class="nav-link-title">Set E-Note</span>
                         </a>
                     </div>
                     <div class="nav-item">
                         <a class="nav-link " href="/book" data-placement="left">
                             <i class="fa-solid fa-book nav-icon"></i>
                             <span class="nav-link-title">Set E-Book</span>
                         </a>
                     </div>
                     <div class="nav-item">
                         <a class="nav-link " href="/videos" data-placement="left">
                             <i class="fa-solid fa-video nav-icon"></i>
                             <span class="nav-link-title">Video Lesson</span>
                         </a>
                     </div>
                     @if (auth()->user()->role === 'admin')
                         <div class="nav-item">
                             <a class="nav-link " href="/question" data-placement="left">
                                 <i class="fa-solid fa-restroom nav-icon"></i>
                                 <span class="nav-link-title">Set Question</span>
                             </a>
                         </div>
                         <div class="nav-item">
                             <a class="nav-link " href="/manage-student" data-placement="left">
                                 <i class="fa-solid fa-graduation-cap nav-icon"></i>
                                 <span class="nav-link-title">Register Student</span>
                             </a>
                         </div>
                         <div class="nav-item">
                             <a class="nav-link " href="/question-code" data-placement="left">
                                 <i class="fa-solid fa-file-circle-question nav-icon"></i>
                                 <span class="nav-link-title">Exam Code</span>
                             </a>
                         </div>

                         <a class="nav-link dropdown-indicator" href="#answer" role="button" data-bs-toggle="collapse"
                             aria-expanded="false" aria-controls="answer">
                             <div class="d-flex align-items-center">
                                 <span class="nav-link-icon"> <i
                                         class="fa-solid fa-square-poll-vertical"></i></span><span
                                     class="nav-link-text ps-1">Manage Answers</span>
                             </div>
                         </a>
                         <ul class="nav collapse" id="answer">
                             <li class="nav-item">
                                 <a class="nav-link" href="/answers">
                                     <div class="d-flex align-items-center">
                                         <span class="nav-link-text ps-1">Answers List</span>
                                     </div>
                                 </a><!-- more inner pages-->
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" href="/answers-by-class">
                                     <div class="d-flex align-items-center">
                                         <span class="nav-link-text ps-1">Del By Class & Subject</span>
                                     </div>
                                 </a><!-- more inner pages-->
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" href="/answers-by-test-type">
                                     <div class="d-flex align-items-center">
                                         <span class="nav-link-text ps-1">Del By Class & Sub & Test</span>
                                     </div>
                                 </a><!-- more inner pages-->
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" href="/answers-all">
                                     <div class="d-flex align-items-center">
                                         <span class="nav-link-text ps-1">Delete All Answers</span>
                                     </div>
                                 </a><!-- more inner pages-->
                             </li>
                         </ul>

                         <a class="nav-link dropdown-indicator" href="#result" role="button"
                             data-bs-toggle="collapse" aria-expanded="false" aria-controls="result">
                             <div class="d-flex align-items-center">
                                 <span class="nav-link-icon">
                                     <i class="fa-solid fa-square-poll-vertical nav-icon"></i></span>
                                 <span class="nav-link-text ps-1">Manage Result</span>
                             </div>
                         </a>
                         <ul class="nav collapse" id="result">
                             <li class="nav-item">
                                 <a class="nav-link" href="/results">
                                     <div class="d-flex align-items-center">
                                         <span class="nav-link-text">Check CBT Result</span>
                                     </div>
                                 </a><!-- more inner pages-->
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" href="/class-results">
                                     <div class="d-flex align-items-center">
                                         <span class="nav-link-text">Print CBT Result</span>
                                     </div>
                                 </a><!-- more inner pages-->
                             </li>
                         </ul>


                         <a class="nav-link dropdown-indicator" href="#sms" role="button"
                             data-bs-toggle="collapse" aria-expanded="false" aria-controls="sms">
                             <div class="d-flex align-items-center">
                                 <span class="nav-link-icon">
                                     <i class="fa-solid fa-envelope-open nav-icon"></i></span>
                                 <span class="nav-link-text ps-1">Send SMS</span>
                             </div>
                         </a>
                         <ul class="nav collapse" id="sms">
                             <li class="nav-item">
                                 <a class="nav-link" href="/sms">
                                     <div class="d-flex align-items-center">
                                         <span class="nav-link-text">General SMS</span>
                                     </div>
                                 </a><!-- more inner pages-->
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" href="/sms-owning">
                                     <div class="d-flex align-items-center">
                                         <span class="nav-link-text">School Fees SMS</span>
                                     </div>
                                 </a><!-- more inner pages-->
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" href="/sms-individual">
                                     <div class="d-flex align-items-center">
                                         <span class="nav-link-text">Individual SMS</span>
                                     </div>
                                 </a><!-- more inner pages-->
                             </li>
                         </ul>

                         <a class="nav-link dropdown-indicator" href="#password" role="button"
                             data-bs-toggle="collapse" aria-expanded="false" aria-controls="password">
                             <div class="d-flex align-items-center">
                                 <span class="nav-link-icon">
                                     <i class="fa-solid fa-lock nav-icon"></i></span>
                                 <span class="nav-link-text ps-1">Set
                                     Password</span>
                             </div>
                         </a>
                         <ul class="nav collapse" id="password">
                             <li class="nav-item">
                                 <a class="nav-link" href="/set-staff-password">
                                     <div class="d-flex align-items-center">
                                         <span class="nav-link-text"> Set Staff Password</span>
                                     </div>
                                 </a><!-- more inner pages-->
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" href="/password">
                                     <div class="d-flex align-items-center">
                                         <span class="nav-link-text">Set Student Password</span>
                                     </div>
                                 </a><!-- more inner pages-->
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" href="/status">
                                     <div class="d-flex align-items-center">
                                         <span class="nav-link-text">Set Class Status</span>
                                     </div>
                                 </a><!-- more inner pages-->
                             </li>
                         </ul>

                         <a class="nav-link dropdown-indicator" href="#system" role="button"
                             data-bs-toggle="collapse" aria-expanded="false" aria-controls="system">
                             <div class="d-flex align-items-center">
                                 <span class="nav-link-icon"><i class="fa-brands fa-ubuntu"></i></span><span
                                     class="nav-link-text ps-1">System Settings</span>
                             </div>
                         </a>
                         <ul class="nav collapse" id="system">
                             <li class="nav-item">
                                 <a class="nav-link" href="/system">
                                     <div class="d-flex align-items-center">
                                         <span class="nav-link-text ps-1">General Settings</span>
                                     </div>
                                 </a><!-- more inner pages-->
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" href="/setup">
                                     <div class="d-flex align-items-center">
                                         <span class="nav-link-text ps-1">Bulletin Settings</span>
                                     </div>
                                 </a><!-- more inner pages-->
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" href="/set-result">
                                     <div class="d-flex align-items-center">
                                         <span class="nav-link-text ps-1">Result Settings</span>
                                     </div>
                                 </a><!-- more inner pages-->
                             </li>
                         </ul>
                     @endif

                     <div class="nav-item">
                         <a class="nav-link" data-placement="left" href="{{ route('logout') }}" role="button"
                             onclick="event.preventDefault();
                                                     document.getElementById('logout-form1').submit();">
                             <span class="nav-link-icon"> <i
                                     class="fa-solid fa-right-from-bracket nav-icon"></i></span>
                             <span class="nav-link-title">
                                 Logout
                                 <form id="logout-form1" action="{{ route('logout') }}" method="POST"
                                     class="d-none">
                                     @csrf
                                 </form>
                             </span>
                         </a>
                     </div>
                 </li>

             </ul>

         </div>
     </div>
 </nav>
