<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>College Official Web Page </h1>


    <nav class="navbar navbar-expand-lg navbar-light bg-danger">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html">Home</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">About</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="gallery.html">Gallery</a></li>
                  <li><a class="dropdown-item" href="contact.html">Contact</a></li>
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
    



<div class="container">
<div class="row">
    <div class="col col-12 col-sm-6 col-md-6 col-lg-6">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img height="300px" width="100%" src="data:image/jpeg;base64,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" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img height="300px" width="100%" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSFCt-EMI851z6BTQQ9QBFNRey8p29R02OzisjV3JDcJBobWmTjjtvLwWAsBrS1l9WGYjI&usqp=CAU" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img  src="..." class="d-block w-100" alt="...">
              </div>
            </div>
          </div>
     </div>


</div>



<div class="row">




<div class="col col-12 col-sm-6 col-md-6 col-lg-6">

<h1>Student/Faculty Login Form</h1>


<table class="table">

    <tr>
        <td>User Name</td>
        <td><input class= "form-control" type="text" name="" id=""></td>
    </tr>
    
      <tr>
          <td>Password</td>
          <td><input class=   "form-control"  type="text" name="" id=""></td>
      </tr>
    
    
     <tr>
       <td>Login Now</td>
       <td><button class="btn btn-success">LOGIN</button></td>
   </tr>
</table>

</div>








<div class="col col col-12 col-sm-6 col-md-6 col-lg-6"> 
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Accordion Item #1
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>This is the first item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Accordion Item #2
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Accordion Item #3
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
            </div>
          </div>
        </div>
      </div>











</div>



</div>


<div class="spinner-border text-primary" role="status">
    <span class="visually-hidden">Loading...</span>
  </div>
  









</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>