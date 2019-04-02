    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="{{route('/admin')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Admin Dashboard</span>
          </a>
        </li>

    
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-users"></i>
            <span>Accounts</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header" >Account Screens:</h6>
            <a class="dropdown-item" href="{{route('admin/addAccount')}}" >Add Account</a>
            <a class="dropdown-item" href="{{route('admin/viewAccount')}}">View and Edit Account</a>
          </div>
        </li>
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-book"></i>
            <span>Book</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Book Screens:</h6>
            <a class="dropdown-item" href="{{route('admin/addBook')}}">Add book</a>
            <a class="dropdown-item" href="{{route('admin/viewBook')}}">View and Edit Book</a>
          </div>
        </li>
       
        </li>
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-th"></i>
            <span>Category</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header" >Category Screens:</h6>

            <a class="dropdown-item" href="{{route('admin/addCategory')}}" >Add Main Category</a>
            <a class="dropdown-item" href="{{route('admin/addSubCategory')}}" >Add Sub Category</a>
            <a class="dropdown-item" href="{{route('admin/viewCategory')}}">View and Edit Category</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-map"></i>
            <span>Slider</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header" >Slider Screens:</h6>
            <a class="dropdown-item" href="{{route('admin/Slider')}}" >Add slider</a>
          </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-fw fa-user-tie"></i>
              <span>Testimonial</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
             <h6 class="dropdown-header" >Testimonial Screens:</h6>
              <a class="dropdown-item" href="{{route('admin/Testimonial')}}" >Add Testimonial</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-fw fa-edit"></i>
              <span>Blog</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
              <h6 class="dropdown-header" >Blog Screens:</h6>
              <a class="dropdown-item" href="{{route('admin/addBlog')}}" >Add Blog</a>
              <a class="dropdown-item" href="{{route('admin/showBlog')}}" >View And Edit</a>
            </div>
           <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-fw fa-users"></i>
              <span>Publication</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
              <h6 class="dropdown-header" >Publication Screens:</h6>
              <a class="dropdown-item" href="{{route('admin/addPublication')}}" >Add Publication</a>
              <a class="dropdown-item" href="{{route('admin/showPublication')}}" >View And Edit Publication</a>
            </div>
          </li>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-fw fa-info"></i>
              <span>About</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
              {{-- <h6 class="dropdown-header" >Category Screens:</h6> --}}
              <a class="dropdown-item" href="aboutEdit/1" >Edit About</a>
              <a class="dropdown-item" href="{{route('admin/staffs')}}" >add Staff</a>
            </div>
           
          </li>
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="/admin/writer"  role="button"  aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-fw fa-feather"></i>
                <span>Top Writers</span>
              </a>             
            </li>
              <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-envelope"></i>
            <span>Subscribers</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header" >Menu Screens:</h6>
            <a class="dropdown-item" href="addMenu" >View Subscriber</a>
          </div>
      </ul>

      <div id="content-wrapper">