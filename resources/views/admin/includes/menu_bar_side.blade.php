
    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
           <a class="nav-link" href="{{route('/admin')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Admin Dashboard</span>
          </a>
        </li>

       <!--  <?php
      //   $sess = $_SESSION['admin_email'];
      //   if($sess == 'info@shaikshikchetana.org.np'){
      //   echo"<li class='nav-item dropdown'>";
      //     echo"<a class='nav-link dropdown-toggle' href='#'' id='pagesDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>";
      //       echo"<i class='fas fa-fw fa-folder'></i>";
      //       echo"<span>Account Setting</span>";
      //     echo"</a>";
      //     echo"<div class='dropdown-menu' aria-labelledby='pagesDropdown'>";
      //       echo"<h6 class='dropdown-header'>Account Screens:</h6>";
      //       echo"<a class='dropdown-item' href='addAccount.php'>Add Account</a>";
      //       echo"<a class='dropdown-item' href='viewAccount.php'>View and Edit Account</a>";
      //     echo"</div>";
      //   echo"</li>";
      // }
        ?> -->
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
            <span>Transaction</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header" >Transaction Screens:</h6>
            <a class="dropdown-item" href="{{route('admin/viewTransaction')}}">View Transaction</a>
          </div>
        </li>
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Category</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header" >Category Screens:</h6>
            <a class="dropdown-item" href="{{route('admin/addCategory')}}" >Add Category</a>
            <a class="dropdown-item" href="{{route('admin/viewCategory')}}">View and Edit Category</a>
          </div>
        </li>
      </ul>

      <div id="content-wrapper">