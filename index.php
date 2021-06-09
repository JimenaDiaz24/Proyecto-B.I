<!DOCTYPE html>
	<html>
		    <head>
			  <title>Hola</title>
			  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
			  <link rel="stylesheet" href="./style-fabi.css">
			  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
			</head>
	   <body>
			<nav class="navbar navbar-expand-lg navbar-light bg-light navbar navbar-dark bg-dark">
				<div class="container-fluid">
				    <a class="navbar-brand" href="#">Navbar</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					  <span class="navbar-toggler-icon"></span>
					</button>
				    <div class="collapse navbar-collapse" id="navbarSupportedContent">
					    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
						 <li class="nav-item">
						     <a class="nav-link active" aria-current="page" href="#">Home</a>
						    </li>
						    <li class="nav-item">
						      <a class="nav-link" href="#">Link</a>
						    </li>
						   <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Dropdown
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item" href="#">Action</a></li>
							<li><a class="dropdown-item" href="#">Another action</a></li>
							<li><hr class="dropdown-divider"></li>
							<li><a class="dropdown-item" href="#">Something else here</a></li>
						</ul>
						   </li>
						<li class="nav-item">
						  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
						</li>
						</ul>
						<form class="d-flex">
						<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
						<button class="btn btn-outline-success" type="submit">Search</button>
						</form>
				    </div>
				</div>
			</nav>
	        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
               <div class="carousel-inner">
                   <div class="carousel-item active">
                     <img src="./img/img2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                       <img src="./img/5.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="./img/3.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                   <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
					<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
					</button>
      </div>
	  <br></br></br>
	   <div class="card" style="width: 18rem;">
           <img src="./img/4.jpg" class="card-img-top" alt="...">
           <div class="card-body">
             <h5 id="titulo-collar-perlas" class="card-title">Collar de perlas</h5>
             <p class="card-text">Exelente detalle para sorprender.</p>
             <a onclick="alerta();" class="btn btn-outline-dark">Comprar</a>
            </div>
        </div>
		<br></br></br>
		<button onclick="desaparecer();" type="button" class="btn btn-primary">Primary</button>
		<br></br></br>
		<h1 id="card2"  >Hola</h1>
		<br></br>
		<div class="card miclase" style="width: 18rem;">
			<div class="card-body">
			   <h5 class="card-title">Card title</h5>
				<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				<a href="#" class="card-link">Card link</a>
				<a href="#" class="card-link">Another link</a>
			</div>
		</div>
        <br></br></br>
			<table class="table">
			    <thead class="table-dark">
					<tr>
						<th scope="col">#</th>
						<th scope="col">Producto</th>
						<th scope="col">Costo</th>
						<th scope="col">En existencia</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">1</th>
						<td class="a1">Anillo Riviere Amarillo</td>
						<td>$3,022.20 </td>
						<td>10</td>
					</tr>
						<tr>
						<th scope="row">2</th>
						<td class="a1">Collar Lady Di Esmeralda</td>
						<td>$2,752.20</td>
						<td>7</td>
					</tr>
					<tr>
						<th scope="row">3</th>
						<td class="a1">Aretes Coquitos</td>
						<td>$338.40</td>
						<td>5</td>
					</tr>
			    </tbody>
			</table>
			<br></br></br>
			<div class="d-flex justify-content-center">
				<div class="btn-group" role="group" aria-label="Basic example">
					<button type="button" class="btn btn-primary" onclick="solomostrar('gatito');">Gatitos</button>
					<button type="button" class="btn btn-primary" onclick="solomostrar('perrito');">Perritos</button>
					<button type="button" class="btn btn-primary" onclick="solomostrar('ave');">Aves</button>
				</div>
			</div>	
			<br></br></br>
			<div class="container">
				<div class="row">
					<div class="col py-2 gatito">
						<div class="card" style="width: 18rem;">
							<img src="./img/gat1.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">GATO</h5>
							</div>
						</div>
				    </div>
				    <div class="col py-2 perrito">
					    <div class="card" style="width: 18rem;">
							<img src="./img/per1.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">PERRO</h>	
							</div>
						</div>
				    </div>
					<div class="col py-2 ave">
					    <div class="card" style="width: 18rem;">
							<img src="./img/1ave.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">AVE</h5>	
							</div>
						</div>
				   </div>
			    </div>
				<div class="row">
				<div class="col py-2 perrito">
						<div class="card" style="width: 18rem;">
							<img src="./img/per2.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">PERRO</h5>	
							</div>
						</div>
				    </div>
				    <div class="col py-2 gatito">
					    <div class="card" style="width: 18rem;">
							<img src="./img/gat2.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">GATO</h5>
							</div>
						</div>
				    </div>
					<div class="col py-2 ave">
					    <div class="card" style="width: 18rem;">
							<img src="./img/2ave.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">AVE</h5>								
							</div>
						</div>
				   </div>
			    </div>
				<div class="row">
				<div class="col py-2 ave">
						<div class="card" style="width: 18rem;">
							<img src="./img/3ave.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">AVE</h5>								
							</div>
						</div>
				    </div>
				    <div class="col py-2 perrito">
					    <div class="card" style="width: 18rem;">
							<img src="./img/per3.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">PERRO</h5>								
							</div>
						</div>
				    </div>
					<div class="col py-2 gatito">
					    <div class="card" style="width: 18rem;">
							<img src="./img/gat3.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">GATO</h5>							
							</div>
						</div>
				   </div>
			    </div>
		    </div>
		   <br></br></br>
			<script>
				function alerta(){
					alert('No hay concidencias');
				}
				function desaparecer(){
					var x= document.getElementById("card2");
					x.classList.toggle("desaparecido");
				}
				function solomostrar(tipo){
			      var conjuntomostrar = document.getElementsByClassName(tipo);
				  var conjuntoperros = document.getElementsByClassName('perrito');
				  var conjuntoave = document.getElementsByClassName('ave');
				  var conjuntogato = document.getElementsByClassName('gatito');
			      if(tipo=='gatito'){
							for(var i=0; i<conjuntomostrar.length; i++){
								conjuntogato[i].classList.remove("desaparecido");
								conjuntoperros[i].classList.add("desaparecido");
								conjuntoave[i].classList.add("desaparecido");
							}
			        }else if(tipo=='perrito'){
							for(var i=0; i<conjuntomostrar.length; i++){
								conjuntoperros[i].classList.remove("desaparecido");
								conjuntoave[i].classList.add("desaparecido");
								conjuntogato[i].classList.add("desaparecido");
							}
			        }else if(tipo=='ave'){
							for(var i=0; i<conjuntomostrar.length; i++){
								conjuntoave[i].classList.remove("desaparecido");
								conjuntoperros[i].classList.add("desaparecido");
								conjuntogato[i].classList.add("desaparecido");
							}
			        }
		        }
			</script>
	    </body>
    </html>      	

