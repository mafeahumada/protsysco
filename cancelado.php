
<html>
  <head>
    <title>protsys</title>
    <link rel="stylesheet" href="css/bootstrap.css">

    <style type="text/css">
    #escudo{
    width: 20px;
    }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <?php include 'menu.php' ?>
        </div>

        <div class="col-md-6">
        <h1><strong> Cancelado</strong> </h1>
          <div class="well">
                <form action="guardar.php" method="post">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Pt</label>
                    <input type="text" name="product" class="form-control" id="exampleInputEmail1" placeholder="nit">
                  </div>
                 <div class="form-group">
                    <label for="exampleInputEmail1">Razon de cancelacion </label>
                    <input type="text" name="rc"class="form-control" id="exampleInputEmail1" placeholder="razon social">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Ultima fecha</label>
                    <input type="text" name="uf" class="form-control" id="exampleInputEmail1" placeholder="direccion">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Fecha de ingreso</label>
                    <input type="text" name="fi" class="form-control" id="exampleInputEmail1" placeholder="telefono">
                  </div>
                  
                  <!-- <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <input type="file" id="exampleInputFile">
                    <p class="help-block">Example block-level help text here.</p>
                  </div> -->
                  <!-- <div class="checkbox">
                    <label>
                      <input type="checkbox"> Check me out
                    </label>
                  </div> -->
                  <button type="submit" class="btn btn-info"><strong>GUARDAR</strong></button>
                </form>
          </div>

        </div>
        <div class="col-md-6">
          <center><h1> <strong>Formulario de cancelado</strong></h1></center>
          <hr>
      <!--     <p>
            aqui se guarda una person
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum delectus, id temporibus vitae repudiandae. Numquam voluptatem nesciunt eligendi corrupti tempora natus illum, nihil ullam repudiandae fugit consequuntur, iure obcaecati ratione.
          </p>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde magni iusto dolores recusandae a, tenetur, inventore? Repudiandae illo ut assumenda saepe incidunt nostrum sunt molestiae. Commodi quo provident vitae id?
          </p> -->

          <div>
            <center><img src="logo1.jpg" alt="img-responsive" class="img-responsive" width="400"></center>
          </div>
        </div>



      </div>
    </div>
  </body>
</html>









                 