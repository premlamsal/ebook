@extends('layout.app')
@section('PageContent')

 <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
   <img src="/img/photo-1524995997946-a1c2e315a42f.jpg" alt="fashion img" class="jumbot-image">
   <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>Stationery List</h2>
        <ol class="breadcrumb">
         <!--  <li><a href="index.html">Home</a></li>   -->       
          <li class="active">List of Stationeries</li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->

 <!-- stationery predesh 1 section -->
  <section class="stationery">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>Kathmandu</h2>
            <table class="table">
                <th>Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Mobile</th>
                <th>Proprietor</th>
                @foreach($state_kathmandu as $data)
                <tr>
                  <td class="name">{{$data->name}}</td>
                  <td class="address">{{$data->address}}</td>
                  <td class="phone">{{$data->phone}}</td>
                  <td class="mobile">{{$data->mobile}}</td>
                  <td class="proprietor">{{$data->proprietor}}</td>
                </tr>
                @endforeach
            </table>
        </div>
      </div>
    </div>
  </section>


  <!-- stationery predesh 1 section -->
  <section class="stationery">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>Pradesh 1</h2>
            <table class="table">
                <th>Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Mobile</th>
                <th>Proprietor</th>
               @foreach($state_one as $data)
                <tr>
                  <td class="name">{{$data->name}}</td>
                  <td class="address">{{$data->address}}</td>
                  <td class="phone">{{$data->phone}}</td>
                  <td class="mobile">{{$data->mobile}}</td>
                  <td class="proprietor">{{$data->proprietor}}</td>
                </tr>
                @endforeach
            </table>
        </div>
      </div>
    </div>
  </section>
  <!-- stationery pradesh 2 section -->
  <section class="stationery">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
            <h2>Pradesh 2</h2>
            <table class="table">
                <th>Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Mobile</th>
                <th>Proprietor</th>
               @foreach($state_two as $data)
                <tr>
                  <td class="name">{{$data->name}}</td>
                  <td class="address">{{$data->address}}</td>
                  <td class="phone">{{$data->phone}}</td>
                  <td class="mobile">{{$data->mobile}}</td>
                  <td class="proprietor">{{$data->proprietor}}</td>
                </tr>
                @endforeach
            </table>
        </div>
      </div>
    </div>
  </section>
  <!-- stationery pradesh 3 section -->
  <section class="stationery">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
            <h2>Pradesh 3</h2>
            <table class="table">
                <th>Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Mobile</th>
                <th>Proprietor</th>
                <tr>
                  @foreach($state_three as $data)
                <tr>
                  <td class="name">{{$data->name}}</td>
                  <td class="address">{{$data->address}}</td>
                  <td class="phone">{{$data->phone}}</td>
                  <td class="mobile">{{$data->mobile}}</td>
                  <td class="proprietor">{{$data->proprietor}}</td>
                </tr>
                @endforeach
            </table>
        </div>
      </div>
    </div>
  </section>
  <!-- stationery pradesh 4 section -->
  <section class="stationery">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
            <h2>Pradesh 4</h2>
            <table class="table">
                <th>Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Mobile</th>
                <th>Proprietor</th>
               @foreach($state_four as $data)
                <tr>
                  <td class="name">{{$data->name}}</td>
                  <td class="address">{{$data->address}}</td>
                  <td class="phone">{{$data->phone}}</td>
                  <td class="mobile">{{$data->mobile}}</td>
                  <td class="proprietor">{{$data->proprietor}}</td>
                </tr>
                @endforeach
            </table>
        </div>
      </div>
    </div>
  </section>
  <!-- stationery pradesh 5 section -->
  <section class="stationery">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
            <h2>Pradesh 5</h2>
            <table class="table">
                <th>Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Mobile</th>
                <th>Proprietor</th>
              @foreach($state_five as $data)
                 <tr>
                  <td class="name">{{$data->name}}</td>
                  <td class="address">{{$data->address}}</td>
                  <td class="phone">{{$data->phone}}</td>
                  <td class="mobile">{{$data->mobile}}</td>
                  <td class="proprietor">{{$data->proprietor}}</td>
                </tr>
                @endforeach
            </table>
        </div>
      </div>
    </div>
  </section>
  <!-- stationery pradesh 6 section -->
  <section class="stationery">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
            <h2>Pradesh 6</h2>
            <table class="table">
                <th>Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Mobile</th>
                <th>Proprietor</th>
                <tr>
                 @foreach($state_six as $data)
                 <tr>
                  <td class="name">{{$data->name}}</td>
                  <td class="address">{{$data->address}}</td>
                  <td class="phone">{{$data->phone}}</td>
                  <td class="mobile">{{$data->mobile}}</td>
                  <td class="proprietor">{{$data->proprietor}}</td>
                </tr>
                @endforeach
            </table>
        </div>
      </div>
    </div>
  </section>
  <!-- stationery pradesh 7 section -->
  <section class="stationery">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
            <h2>Pradesh 7</h2>
            <table class="table">
                <th>Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Mobile</th>
                <th>Proprietor</th>
               @foreach($state_seven as $data)
                 <tr>
                  <td class="name">{{$data->name}}</td>
                  <td class="address">{{$data->address}}</td>
                  <td class="phone">{{$data->phone}}</td>
                  <td class="mobile">{{$data->mobile}}</td>
                  <td class="proprietor">{{$data->proprietor}}</td>
                </tr>
                @endforeach
            </table>
        </div>
      </div>
    </div>
  </section>


@endsection