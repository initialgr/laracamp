 <nav class="navbar navbar-expand-lg navbar-light">
     <div class="container">
         <a class="navbar-brand" href="{{ route('welcome') }}">
             <img src="{{asset('images/logo.png') }}" alt="">
         </a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                 <li class="nav-item">
                     <a class="nav-link active" aria-current="page" href="#">Program</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="#">Mentor</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="#">Pricing</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="#">Business</a>
                 </li>
             </ul>
             @auth
             <div class="user-logged dropdown">
                 <a href="#">
                     Halo, {{ Auth::user()->name }}!</a>
                 <img src="{{ Auth::user()->avatar }}" class="user-photo" alt="">
                 <div class="dropdown-content">
                     <a href="#">My Dashboard</a>
                     <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Sign Out</a>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none">
                         <input type="hidden" name="_token" value="{{ csrf_token() }}">
                     </form>
                 </div>

             </div>
             @else
             <div class="d-flex">
                 <a href="{{ route('login') }}" class="btn btn-master btn-secondary me-3">
                     Sign In
                 </a>
                 <a href="{{ route('login') }}" class="btn btn-master btn-primary">
                     Sign Up
                 </a>
             </div>
         </div>
         @endauth
     </div>
 </nav>

 <style>
     /* Style The Dropdown Button */
     .dropbtn {
         background-color: #4CAF50;
         color: white;
         padding: 16px;
         font-size: 16px;
         border: none;
         cursor: pointer;
     }

     /* The container <div> - needed to position the dropdown content */
     .dropdown {
         position: relative;
         display: inline-block;
     }

     /* Dropdown Content (Hidden by Default) */
     .dropdown-content {
         display: none;
         position: absolute;
         background-color: #f9f9f9;
         min-width: 160px;
         box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
         z-index: 1;
     }

     /* Links inside the dropdown */
     .dropdown-content a {
         color: black;
         padding: 12px 16px;
         text-decoration: none;
         display: block;
     }

     /* Change color of dropdown links on hover */
     .dropdown-content a:hover {
         background-color: #f1f1f1
     }

     /* Show the dropdown menu on hover */
     .dropdown:hover .dropdown-content {
         display: block;
     }

     /* Change the background color of the dropdown button when the dropdown content is shown */
     .dropdown:hover .dropbtn {
         background-color: #3e8e41;
     }
 </style>