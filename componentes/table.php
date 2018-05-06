<?php 

  require_once "../php/conexion.php";
  $conexion=conexion();

 ?>

    <!-- Albums -->
    <div class="container">
      <div class="row">

      <?php 

        $sql="SELECT 
          id,
          name,
          description,
          createDate
            from albums";
        $result=mysqli_query($conexion,$sql);
        while($ver=mysqli_fetch_row($result)){ 
       ?>

          <div class="col-lg-3 col-sm-4 col-xs-6">
            <a title="Image 2" href="#">
              <img class="thumbnail img-responsive" src="images/image_placeholder.png">
                <p><?php echo $ver[1] ?></p>
            </a>
            <div class="align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#viewModal">Details</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#editModal">Edit</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Delete</button>
                </div>
              </div>
          </div>
        <?php 
          }
        ?>
          
      </div>
    </div>


    