<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Amatic+SC&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo(base_url("public/styles/estilos.css")) ?>">
    <title>Document</title>
</head>
<body>
    
<header>
	<nav class="navbar navbar-expand-lg navbar-dark fondo">
  <div class="container-fluid">
    <a class="navbar-brand fuente" href="#">
		<i class="fas fa-paw"></i>
		Animalandia
	</a>	
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

	  <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?= site_url("/home")?>">Home</a>
                </li>
                <li class="nav-item">
      </ul>
    </div>
  </div>
</nav>
	</header>

    <main>
        <div class="container">
            <div class="row row-cols-1 row-cols-md-5 g-4">
                <?php foreach($productos as $producto): ?>
                    <div class="col">
                        <div class="card h-100 p-3 mt-5">
                            <h5 class="card-title"><?= $producto['producto'] ?></h5>
                            <img src="<?= $producto['foto'] ?>" class="card-img-top h-100 w-100" alt="foto">
                                <div class="card-body">
                                    <p class="card-text"><?= $producto['precio'] ?></p>
                                    <p class="card-text"><?= $producto['descripcion'] ?></p>
                                    <a data-bs-toggle="modal" data-bs-target="#confirmacion<?= $producto['id'] ?>" href="#" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                    <a data-bs-toggle="modal" data-bs-target="#editar<?= $producto['id'] ?>" href="#" class="btn btn-primary"><i class="far fa-edit"></i></a>
                                </div>
                        </div>

                        <section>
                            <div class="modal fade" id="confirmacion<?= $producto['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header fondo text-white">
                                    <h5 class="modal-title" id="exampleModalLabel text-align">Modal title</h5>
                                </div>
                                <div class="modal-body">
                                    <p>¿Estás seguro de eliminar este producto?</p>
                                    <p><?= $producto['id'] ?></p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    <a href="<?= site_url('/productos/eliminar/'.$producto['id']) ?>" class="btn btn-danger">Eliminar</a>
                                </div>
                                </div>
                            </div>
                        </div>

                        </section>

                        <section>
                            <div class="modal fade" id="editar<?= $producto['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header fondo text-white">
                                    <h5 class="modal-title" id="exampleModalLabel text-align">Modal title</h5>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-3 align-self-center">
                                            <img src="<?= $producto['foto'] ?>" alt="" class="img-fluid w-100">
                                        </div>
                                        <div class="col-9">
                                            <form action="<?= site_url('/productos/editar/'.$producto['id']) ?>" method="POST">
                                                <div class="mb-3">
                                                    <label class="form-label">Precio</label>
                                                    <input type="number" class="form-control" name="precio" value="<?= $producto['precio'] ?>">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Nombre</label>
                                                    <input type="text" class="form-control" name="producto" value="<?= $producto['producto'] ?>">
                                                </div>
                                                <button type="submit" class="btn btn-primary">Editar</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>

                        </section>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>	
    <script src="https://kit.fontawesome.com/08b4b5fab5.js" crossorigin="anonymous"></script>

</body>
</html>