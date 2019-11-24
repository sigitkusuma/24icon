<!DOCTYPE html>
<html lang="en">

@if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
      <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
@endif

@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>Icon24 Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   
    <link href="{{ asset('bootstrap/admin/css/style.css') }}" rel="stylesheet">
     <script type="text/javascript" src="{{ asset('bootstrap/admin/js/index.js')}}"></script>


</head>

<body>

<div class="page-wrapper chiller-theme toggled">
  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-brand">
        <a href="#">24SLIDES</a>
        <div id="close-sidebar">
          <i class="fas fa-times"></i>
        </div>
      </div>
      <div class="sidebar-header">
        <div class="user-info">
          <span class="user-name">Jhon
            <strong>Smith</strong>
          </span>
          <span class="user-role">Administrator</span>
          <span class="user-status">
            <i class="fa fa-circle"></i>
            <span>Online</span>
          </span>
        </div>
      </div>
      <!-- sidebar-header  -->
      <div class="sidebar-search">
        <div>
          <div class="input-group">
            <input type="text" class="form-control search-menu" placeholder="Search...">
            <div class="input-group-append">
              <span class="input-group-text">
                <i class="fa fa-search" aria-hidden="true"></i>
              </span>
            </div>
          </div>
        </div>
      </div>
      <!-- sidebar-search  -->
      <div class="sidebar-menu">
        <ul>
          <li class="header-menu">
            <span>General</span>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-tachometer-alt"></i>
              <span>Dashboard</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
              <li>
                  <a href="#">Home
                  </a>
                </li>
                <li>
                  <a href="#">Upload Material
                  </a>
                </li>
                <li>
                  <a href="#">List Material</a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
      <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->
    <div class="sidebar-footer">
      <a href="#">
        <i class="fa fa-bell"></i>
        <span class="badge badge-pill badge-warning notification">3</span>
      </a>
      <a href="#">
        <i class="fa fa-envelope"></i>
        <span class="badge badge-pill badge-success notification">7</span>
      </a>
      <a href="#">
        <i class="fa fa-cog"></i>
        <span class="badge-sonar"></span>
      </a>
      <a href="#">
        <i class="fa fa-power-off"></i>
      </a>
    </div>
  </nav>
  <!-- sidebar-wrapper  -->
  <main class="page-content">
    <div class="container-fluid">
      <h2>Upload Your Material</h2>
      <form class="text-center border border-light p-5" action="{{ route('store.image') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- Name -->
        <input type="text" id="defaultContactFormName" name="name" class="form-control mb-4" placeholder="Name File">

        <!-- category -->
        <select class="browser-default custom-select mb-4" name="categories_id" required="required">
            <option>Icon</option>
            <option>Illustration</option>
            <option>Image</option>
        </select>

         <!-- category -->
         <select class="browser-default custom-select mb-4" name="categories_id" required="required">
            <option value="" disabled selected="">Type Files</option>
            @foreach($categories as $categori)
              <option value="{{ $categori->id }}">{{ $categori->name }}</option>
            @endforeach
        </select>


        <!-- Image -->
        <input type="file" class="form-control-file border" name="file" required="required"><br>
    
        <!-- Message -->
        <div class="form-group">
            <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" placeholder="Tags"></textarea>
        </div>
    
        <!-- Send button -->
        <button class="btn btn-info btn-block" type="submit">Upload</button>
    
    </form>
        
    </div>

  </main>
  <!-- page-content" -->
</div>
<!-- page-wrapper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    
</body>

</html>


<!-- file lawas -->
<style type="text/css">

            div{
                float:left;
                clear: both;
            }
            img{
                cursor: pointer;
          
            }
   
</style>

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
  function myFunction() {
    alert("You copied image!");
  }
  //Cross-browser function to select content
  function SelectText(element) {
      var doc = document;
      if (doc.body.createTextRange) {
          var range = document.body.createTextRange();
          range.moveToElementText(element);
          range.select();
      } else if (window.getSelection) {
          var selection = window.getSelection();
          var range = document.createRange();
          range.selectNodeContents(element);
          selection.removeAllRanges();
          selection.addRange(range);
      }
  }
  $(".copyable").click(function (e) {
      //Make the container Div contenteditable
      $(this).attr("contenteditable", true);
      //Select the image
      SelectText($(this).get(0));
      //Execute copy Command
      //Note: This will ONLY work directly inside a click listenner
      document.execCommand('copy');
      //Unselect the content
      window.getSelection().removeAllRanges();
      //Make the container Div uneditable again
      $(this).removeAttr("contenteditable");

      $(this).copyTexImage2D($(this).TEXTURE_2D, 0, gl.RGBA, 0, 0, 512, 512, 0);
      //Success!!
      alert("image copied!");
  });
</script>

  