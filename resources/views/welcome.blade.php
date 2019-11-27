 <!DOCTYPE html>
<html lang="en">
<head>
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link href="{{ asset('bootstrap/css/mdb.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap/css/style.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap/css/style.css') }}" rel="stylesheet">
    <script src="{{ asset('bootstrap/js/icon.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@jaames/iro/dist/iro.min.js"></script>
</head>
<body>
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
    <div class="container-fluid">
        <div class="input-group input-group-md">
          <div class="input-group-prepend">
            <button class="btn btn-outline-deep-purple btn-md m-0 px-3 py-2 z-depth-0 dropdown-toggle" type="button"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Category</button>
            <div class="dropdown-menu">
            @foreach($categories as $category)
              <a class="dropdown-item" href="{{route('category',$category->slug)}}">{{$category->name}}</a>
              @endforeach
            </div>
          </div>
          <input type="text" class="form-control" placeholder="Search" aria-label="Text input with dropdown button">
        </div>
    </div>
  </nav>

  <!-- Full Page Intro -->
  <div class="view" style="background-image: url({{asset('img/unt.gif')}}); background-repeat: no-repeat; background-size: cover;">

    <!-- Mask & flexbox options-->
    <div class="mask rgba-light d-flex justify-content-center align-items-center">

      <!-- Content -->
      <div class="text-left deep-purple-text mx-5 wow fadeIn">
        
      <img class="mt-0" src="{{asset('img/logo.png')}}">

        <h1 class="mb-4">
          <strong>Icon Material</strong>
        </h1>

        <p><strong>Best & free guide of responsive web design</strong></p>

        <p class="mb-4 d-none d-md-block">
          <strong>The most comprehensive tutorial for the Bootstrap 4. Loved by over 500 000 users. Video and written
            versions available.
            Create your own, stunning website.</strong>
        </p>
          <a href="{{ route('login') }}" class="btn btn-outline-deep-purple btn-lg">Upload Your Material
            <i class="fas fa-cloud-upload-alt ml-2"></i>
          </a>
      </div>
    </div>
  </div>

  <main style="background-color:#e8eaf6;">
  <br><br>
      <div class="text-center deep-purple-text mx-5 wow fadeIn">
        <h3 class="mb-4">
          <strong>Explore Your Creativity</strong>
          <a href="{{ route('login') }}" class="btn btn-outline-deep-purple btn-lg">Browse
        </a>
        </h3>
      </div>
    <br>

      <div class="container-fluid" background-color="black">
        <div class="row text-center text-lg-left">
          @foreach($images as $image)
          <div class="col-lg-1 col-md-2 col-4">
            <a class="d-block mb-4 h-100">
                <img class="img-fluid efek" src="{{asset('resources/image/'.$image->categories_id.'/'.$image->file)}}" data-toggle="modal" data-target="#myModalimage" alt="">
                <h6 class="text-center pt-2 ukuran">
                {{($image->name)}}
                </h6>
            </a>
          </div>
          @endforeach
      </div>

      <!-- Modal image -->
      <div class="modal centered fade" id="myModalimage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> 
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title w-100" id="myModalLabel">nama data</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>      
                <div class="modal-body">
                    <div class="container">
                        <div class="row" >
                            <div class="col-md-8" style="text-align: center">
                                <img src="https://images.unsplash.com/photo-1455853659719-4b521eebc76d?auto=format&fit=crop&w=750&q=80" alt="placeholder" style="width: 400px">
                            </div>
                              <div class="col-md-4" style="text-align: center">
                                  <div class="btn-group">                                                    
                                      <!-- <button type="button" class="btn btn-dark btn-sm">SVG</button>                                                     -->
                                        <div class="btn-group">
                                          <button type="button" class="btn btn-dark btn-sm">JPG</button>
                                            <button type="button" class="btn btn-dark btn-sm dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
                                              <span class="caret"></span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">512 px</a>
                                                <a class="dropdown-item" href="#">256 px</a>
                                                <a class="dropdown-item" href="#">128 px</a>
                                                <a class="dropdown-item" href="#">64 px</a>
                                                <a class="dropdown-item" href="#">32 px</a>
                                            </div>
                                        </div>                                       
                                  </div>
                              </div>
                        </div>
                        <hr><br>
                        <h5>More <u>Bussiness</u> Image</h5>
                            <div class="row-fluid">
                            @foreach($images as $image)
                                <div class="col-lg-12 col-md-10 ">
                                    <div class="cover-container">
                                        <!-- START PANEL -->
                                        <div class="cover-item" style="background-image: url('{{asset('resources/image/'.$image->categories_id.'/'.$image->file)}}')"></div>
                                        <!-- END PANEL -->
                                    </div>
                                </div>
                                @endforeach
                            </div>  
                    </div>
                </div> 
                        <br>                 
            </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                </div>
            </div>
      </div>
  </div>
        <h2 class="my-5 h3 text-center">...and even more</h2>
      </div>
  </main>
    <footer class="page-footer text-center font-small deep-purple pt-4">
      <div class="pb-4">
        <a href="https://www.facebook.com/24slides" target="_blank">
          <i class="fab fa-facebook-f mr-3"></i>
        </a>
        <a href="https://twitter.com/24slides" target="_blank">
          <i class="fab fa-twitter mr-3"></i>
        </a>
        <a href="https://www.youtube.com/watch?v=XeiCouL64WI" target="_blank">
          <i class="fab fa-youtube mr-3"></i>
        </a>
      </div>
      <div class="footer-copyright py-3">
        © 2019 Copyright:
        <a href="https://24slides.com" target="_blank"> 24Slides.com </a>
      </div>
    </footer>

  <script type="text/javascript" src="{{ asset('bootstrap/js/jquery-3.4.1.min.js')}}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{ asset('bootstrap/js/popper.min.js')}}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.min.js')}}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{ asset('bootstrap/js/mdb.min.js')}}"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();
  </script>
</body>

</html>