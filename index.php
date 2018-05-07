<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>Tabla dinamica</title>
  <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
  <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">

  <script src="librerias/jquery-3.2.1.min.js"></script>
  <script src="js/functions.js"></script> 
  <script src="librerias/bootstrap/js/bootstrap.js"></script>
  <script src="librerias/alertifyjs/alertify.js"></script>
</head>

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
            <li><a class="btn btn-sm btn-default" data-toggle="modal" data-target="#createModal">CREATE</a></li>
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
        <h1 align="center">Albums</h1>
    </div>
    <!-- Loop throw each album-->
    <div id="table"></div>

    <!-- To create a new album-->
    <div class="container">
      <div class="row">

          <div class="col-lg-3 col-sm-4 col-xs-6">
            <a title="Image 2" data-toggle="modal" data-target="#createModal">
              <img class="thumbnail img-responsive" src="images/plus.png">
            </a>
          </div>
          
      </div>
    </div>


    <!-- Add album modal -->
    <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLabel">Create new album</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Title:</label>
                <input type="text" class="form-control" id="name">
                <label for="message-text" class="col-form-label">Description:</label>
                <textarea class="form-control" id="description"></textarea>
              </div>
                <div>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal" id="save">Add</button>
                </div>
            </form>
          </div>
        </div>
     </div>
    </div>

        <!-- Edit album modal -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLabel">Edit album</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">ID:</label>
                <input type="text" disabled="disabled" class="form-control" id="idAlbum">
                <label for="recipient-name" class="col-form-label">Edit title:</label>
                <input type="text" class="form-control" id="update_name">
                <label for="message-text" class="col-form-label">Description:</label>
                <textarea class="form-control" id="update_description"></textarea>
              </div>
                <div>
                <button type="button" class="btn btn-primary" id="updateData" data-dismiss="modal">Save</button>
                </div>
            </form>
          </div>
        </div>
     </div>
    </div>

    <!-- View album details modal -->
    <div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLabel">Album Details</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Title: Title example</label>
                <br>
                <label for="recipient-name" class="col-form-label">Total images: 23</label>
                <br>
                <label for="recipient-name" class="col-form-label">Description: Here I have all my favorite animals images. </label>
                <label for="recipient-name" class="col-form-label">Date created: 5/6/2018</label>
                <br>
              </div>
                <div>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
          </div>
        </div>
     </div>
    </div>



  </body>
</body>
</html>

<script type="text/javascript">
  $(document).ready(function(){
    $('#table').load('componentes/table.php');
  });
</script>

<script type="text/javascript">
  $(document).ready(function(){
    $('#save').click(function(){
      name=$('#name').val();
      description=$('#description').val();
      addData(name,description);
    });

    $('#updateData').click(function(){
      updateData();
    });

  });
</script>