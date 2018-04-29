
<!doctype html>
  <head>
    <title>Pricing example for Bootstrap</title>
  </head>
  <meta charset="utf-8">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">


  <body>


    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <!-- The mobile navbar-toggle button can be safely removed since you do not need it in a non-responsive implementation -->
          <a class="navbar-brand" href="#">Photos Manager</a>
        </div>
        <!-- Note that the .navbar-collapse and .collapse classes have been removed from the #navbar -->
        <div id="navbar">
          <ul class="nav navbar-nav navbar-right">
			<ul class="nav navbar-nav">
            <li><a class="btn btn-sm btn-default" href="#create">CREATE</a></li>
            <li><a class="btn btn-sm btn-default" href="#upload">UPLOAD</a></li>
          </ul>
          <form class="navbar-form navbar-left">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
	</br></br>
    <div class="page-header">
        <h1>Albums</h1>
    </div>
  </body>
</html>