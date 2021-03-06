<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-info">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Rajagiri college</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="login.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="feature.php">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Career</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="contact.php" tabindex="-1" aria-disabled="true">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    <div class="container">
      <div class="row">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img height="450px" src="https://rajagiri.edu/uploads/home-banner/5/5.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img height="450px" src="https://images.jdmagicbox.com/comp/ernakulam/j9/0484px484.x484.170301062419.v5j9/catalogue/rajagiri-centre-for-business-studies-rajagiri-valley-ernakulam-institutes-zsaxm649ya.jpg?clr=#3a3a2c" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img height="450px" src="https://lh3.googleusercontent.com/proxy/1qH1bSSYlV7p0arZ_gM6XfzJVII2BxM4DhcWYT-8Lj1FMTNy7ZjBv6lah54fgSgBN5Rjd_1-bvqryGmVjnsOFX2y8F6m" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
        <div class="row">
            <div class="col col-12 col-sm-4 col-md-4 col-lg-4">
                <table class="table table-borderless">
                    <tr>
                        <td>Name</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Rollno</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Admission no</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>college</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>password</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>

                    <tr>
                        <td>Confirm paswword</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td><button class="btn btn-primary">Register</button></td>
                    </tr>
                </table>
            
            
        </div>
        
            
                <div class="col col-12 col-sm-4 col-md-4 col-lg-4">
                    <table class="table table-borderless">
                        <tr>
                            <td>Username</td>
                            <td><input type="text" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>password</td>
                            <td><input type="text" class="form-control"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><button class="btn btn-primary">Login</button></td>
                        </tr>
                    </table>
                </div>
    
    <div class="col col-12 col-sm-4 col-md-4 col-lg-4"><div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
              Accordion Item #1
            </button>
          </h2>
          <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
              Accordion Item #2
            </button>
          </h2>
          <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
              Accordion Item #3
            </button>
          </h2>
          <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
          </div>
        </div>
      </div></div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>