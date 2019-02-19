
    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Admin Dashboard</span>
          </a>
        </li>

    
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
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
            <i class="fas fa-fw fa-folder"></i>
            <span>Book</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Book Screens:</h6>
            <a class="dropdown-item" href="{{route('admin/addBook')}}">Add book</a>
            <a class="dropdown-item" href="{{route('admin/viewBook')}}">View and Edit Book</a>
          </div>
        </li>
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Menus</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header" >Menu Screens:</h6>
            <a class="dropdown-item" href="addMenu" >Add Menu</a>
            <a class="dropdown-item" href="viewMenu">View and Edit Menu</a>
          </div>
        </li>
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Category</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header" >Category Screens:</h6>

            <a class="dropdown-item" href="{{route('admin/addCategory')}}" >Add Main Category</a>
            <a class="dropdown-item" href="{{route('admin/addCategory')}}" >Add Sub Category</a>
            <a class="dropdown-item" href="{{route('admin/viewCategory')}}">View and Edit Category</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Slider</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-header" href="{{route('admin/Slider')}}" >Add slider</a>
          </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-fw fa-folder"></i>
              <span>Testimonial</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
              {{-- <h6 class="dropdown-header" >Category Screens:</h6> --}}
              <a class="dropdown-item" href="{{route('admin/Testimonial')}}" >Add Testimonial</a>
            </div>
          </li>
      </ul>

      <div id="content-wrapper">