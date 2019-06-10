@extends('layout.app')
@section('PageContent')

  <!-- popular section -->
  <section id="aa-popular-category">

    <div class="container">

      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-6">
              <h3>Update Information for <b> {{$user->name}}</b></h3>
              @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
              @endif
              @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                   @foreach ($errors->all() as $error)
                     <li>  {{$error}}</li>
                   @endforeach
                </ul>
              </div>
               @endif
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="aa-popular-category-area">
              <!-- start prduct navigation -->
             <ul class="nav nav-tabs aa-products-tab">
                <li class="active"><a href="#" data-toggle="tab">Edit Information</a></li>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                <!-- Start men popular category -->
                <div class="tab-pane fade in active" id="popular">
                    <form method="post" action="{{route('customer.profile.settings.update')}}" style="width: 40%; margin: 0 auto">
                      @csrf

                      <input type="hidden" name="id" value="{{$user->id}}">
                       <div class="form-group row">
                          <label for="title">Name</label>
                              <input type="text" class="form-control" name="name" placeholder="Name" value="{{$user->name}}" required="">
                        </div>

                        <div class="form-group row">
                          <label for="title">Email</label>
                              <input type="email" class="form-control" name="email" placeholder="Email" value="{{$user->email}}" required="">
                        </div>
                         <div class="form-group row">
                          <label for="title">Address</label>
                              <input type="text" class="form-control" name="address" placeholder="Address" value="{{$user->address}}" required="">
                        </div>
                         <div class="form-group row">
                          <label for="title">Phone</label>
                              <input type="phone" class="form-control" name="phone" placeholder="Phone" value="{{$user->phone}}" required="">
                        </div>
                        <div class="form-group row">
                          <label for="title">Intrested Category</label>
                              <input type="text" class="form-control" name="interest" placeholder="Interested on" value="{{$user->interest}}" required="">
                        </div>
                        <p>Please fill up all the information to use our all features.</p>
                           <input type="submit" class="aa-browse-btn">
                    </form>
                 
                </div>
                <!-- / popular product category -->
           
                       
              </div>
            </div>
          </div> 
        </div>
      </div>
    </div>
  </section>



@endsection

@section('PageScript')

@endsection