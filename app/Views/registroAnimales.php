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
	<title>ANIMALANDIA</title>
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
                <a class="nav-link" href="<?= site_url("/productos/registro")?>">Registro Productos</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?= site_url("/animales/registro")?>">Registro Animales</a>
                </li>
            </ul>
            </div>
        </div>
        </nav>
    </header>

        <div class="container mt-5"> 
            <h1 class="fuente-bold">Registro de animales</h1>   
            <form action="" method="" class="mt-4">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nombre:</label>
                    <input type="text" class="form-control" id="">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Edad:</label>
                    <input type="number" class="form-control" id="">
                </div>
                <div class="mb-3">
                    <textarea name="" id="" cols="90" rows="6">Descripción</textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tipo de animal:</label>
                    <select class="form-select" name="tipoAnimal">
                        <option value="1" selected>Perro</option>
                        <option value="2">Gato</option>
                        <option value="3">Ave</option>
                        <option value="4">caballo</option>
                        <option value="5">Reptil</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Button</button>
            </form>
            <img src="<?= base_url("public/img/animales.jpg")?>" alt="">
        </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>	
<script src="https://kit.fontawesome.com/08b4b5fab5.js" crossorigin="anonymous"></script>

</body>
</html>