
@extends('admin.layouts.app')
@section('content')
  <!-- Icon Cards-->
          <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-user"></i>
                  </div>
                  @if($userNo== 0)
                  <div class="mr-5">No record to be viewed</div>
                  @else
                  <div class="mr-5">Total Users: <b>{{$userNo}}</b></div>
                  @endif
                </div>
                <a class="card-footer text-white clearfix small z-1" href="{{route('admin/viewAccount')}}">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-book"></i>
                  </div>
                  @if($bookNo== 0)
                  <div class="mr-5">No record to be viewed</div>
                  @else
                  <div class="mr-5">Total Books: <b>{{$bookNo}}</b></div>
                  @endif
                </div>
                <a class="card-footer text-white clearfix small z-1" href="{{route('admin/viewBook')}}">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-th"></i>
                  </div>
                   @if($CatNo== 0)
                  <div class="mr-5">No record to be viewed</div>
                  @else
                  <div class="mr-5">Total Categories: <b>{{$CatNo}}</b></div>
                  @endif
                </div>
                <a class="card-footer text-white clearfix small z-1" href="{{route('admin/viewCategory')}}">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-danger o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-th"></i>
                  </div>
                  @if($subCatNo== 0)
                  <div class="mr-5">No record to be viewed</div>
                  @else
                  <div class="mr-5">Total SubCategories: <b>{{$subCatNo}}</b></div>
                  @endif
                </div>
                <a class="card-footer text-white clearfix small z-1" href="{{route('admin/viewCategory')}}">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-danger o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-edit"></i>
                  </div>
                  @if($blogNo== 0)
                  <div class="mr-5">No record to be viewed</div>
                  @else
                  <div class="mr-5">Total Blogs: <b>{{$blogNo}}</b></div>
                  @endif
                </div>
                <a class="card-footer text-white clearfix small z-1" href="{{route('admin/showBlog')}}">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-user"></i>
                  </div>
                  @if($pubNo== 0)
                  <div class="mr-5">No record to be viewed</div>
                  @else
                  <div class="mr-5">Total Publications: <b>{{$pubNo}}</b></div>
                  @endif
                </div>
                <a class="card-footer text-white clearfix small z-1" href="{{route('admin/showPublication')}}">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-pen"></i>
                  </div>
                  @if($TestNo== 0)
                  <div class="mr-5">No record to be viewed</div>
                  @else
                  <div class="mr-5">Total Testimonial: <b>{{$TestNo}}</b></div>
                  @endif
                </div>
                <a class="card-footer text-white clearfix small z-1" href="{{route('admin/Testimonial')}}">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            {{--For distributor--}}
               <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-list"></i>
                  </div>
                  @if($TestNo== 0)
                  <div class="mr-5">No record to be viewed</div>
                  @else
                  <div class="mr-5">Total Testimonial: <b>{{$TestNo}}</b></div>
                  @endif
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
              



          </div>

@endsection