@include('admin.includes.header')
@include('admin.includes.navbar_top')
@include('admin.includes.menu_bar_side')
<div class="container">
@include('admin.includes.message')
@yield('content')
</div>
@include('admin.includes.footer')