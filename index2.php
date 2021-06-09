
	<!DOCTYPE html>
	<html>
      <head>
	   <title>Hola</title>
	   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
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
            <img src="./img2.jpg" class="d-block w-100" alt="...">
           </div>
           <div class="carousel-item">
             <img src="./5.jpg" class="d-block w-100" alt="...">
           </div>
            <div class="carousel-item">
              <img src="./3.jpg" class="d-block w-100" alt="...">
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
           <img src="./4.jpg" class="card-img-top" alt="...">
           <div class="card-body">
             <h5 class="card-title">Collar de perlas</h5>
             <p class="card-text">Exelente detalle para sorprender.</p>
             <a href="https://caratijoyeria.com/" class="btn btn-outline-dark">Comprar</a>
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
                <td>Anillo Riviere Amarillo</td>
                <td>$3,022.20 </td>
                <td>10</td>
               </tr>
              <tr>
                <th scope="row">2</th>
                <td>Collar Lady Di Esmeralda</td>
                <td>$2,752.20</td>
                <td>7</td>
               </tr>
               <tr>
                <th scope="row">3</th>
                <td>Aretes Coquitos</td>
                <td>$338.40</td>
                <td>5</td>
               </tr>
           </tbody>
         </table>
	</body>
</html>      	


