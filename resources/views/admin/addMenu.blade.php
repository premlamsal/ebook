
@include('admin.includes.header')
@include('admin.includes.navbar_top')
@include('admin.includes.menu_bar_side')

<div class="container">
  <h2>Add Menu</h2>
  <form action="upload_menu.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label for="writer">Menu Name:</label>
      <input type="writer"  placeholder="Menu Name" name="menu" style="width: 100%; margin: 5px 0px; padding:2px 0px;">
    </div>
    <div class="form-group">
      <label for="short">Menu Link:</label>
      <input type="text"  placeholder="Menu Link" name="link" style="width: 100%; margin: 5px 0px; padding:2px 0px;">
    </div>
  <button type="submit" class="btn btn-primary btn-block btn-large" name="upload">Submit</button>
  </form>
</div>

@include('admin.includes.footer')
