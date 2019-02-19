  <!-- menu -->
  <section id="menu">
    <div class="container">
      <div class="menu-area">
        <!-- Navbar -->
        <div class="navbar navbar-default" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>          
          </div>
          <div class="navbar-collapse collapse">
            <!-- Left nav -->
            <ul class="nav navbar-nav">
              <li><a href="{{route('home')}}" class="active">Home</a></li>
              <li><a href="#">Category<span class="caret"></span></a>
                <ul class="dropdown-menu sm-nowrap">
              @foreach($Category as $item)
                  <li>
                      <a href="{{$item->url}}">{{$item->category_name}}
                        @if($item->subcategory->count()>0)
                          <span class="caret"></span>     
                        @endif
                      </a>
                      @if ($item->subcategory->count()) 
                          <ul class="dropdown-menu">
                          @foreach ($item->subcategory as $subitem)
                              <li><a href="{{$subitem->url}}">{{$subitem->subcategory_name}}</a></li>
                          @endforeach
                          </ul>
                      @endif
                  </li>
              @endforeach
                </ul>
              </li>
             <li><a href="#">About Us</a></li>
            </ul>
           </div><!--/.nav-collapse -->
        </div>
      </div>       
    </div>
  </section>
  <!-- / menu -->

