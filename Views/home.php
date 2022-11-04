<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Furni3dots - Home</title>
        <link rel="stylesheet" href="../do-an-web-php/Public/CSS/header.css">
        <link rel="stylesheet" href="../do-an-web-php/Public/CSS/home.css">
        <link rel="stylesheet" href="../do-an-web-php/Public/CSS/footer.css">
        <!-- link bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
            integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
         <!-- link owl carousel -->
        <link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="owlcarousel/assets/owl.theme.default.min.css">
        <!-- link icon -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
        <!-- link font -->
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;600&display=swap" rel="stylesheet">
    </head>
    <body>
        <!-- header -->
        <?php
            include_once '../do-an-web-php/Views/blocks/header.php';
        ?>
        <!-- body -->
        <div class="container-fluid homepage px-5">
            <div class="carousel">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../Assets/img/chair-3-1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="../Assets/img/sofa-2-1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="../Assets/img/bed-1-2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="../Assets/img/table-5-1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="../Assets/img/clock-8-1.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </button>
                </div>
            </div>
            
            <div class="product py-5">
                <div id="myBtnContainer">
                    <button class="btn active" onclick="filterSelection('chair')">Chair</button>
                    <button class="btn" onclick="filterSelection('sofa')">Sofa</button>
                    <button class="btn" onclick="filterSelection('table')">Table</button>
                    <button class="btn" onclick="filterSelection('clock')">Clock</button>
                    <button class="btn" onclick="filterSelection('bed')">Bed</button>
                </div>
                <!-- Portfolio Gallery Grid -->
                <div class="row">
                    <!-- Chair -->
                    <div class="col-3 card item chair">
                        <a href="">
                            <div class="item-img">
                                <img src="../Assets/img/chair-1-1.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h5 class="card-title items-content__name">CIELO</h5>
                                <h5 class="card-text items-content__price">20 USD</h5>
                            </div>                          
                        </a>
                    </div>
                    <div class="col-3 card item chair">
                        <a href="">
                            <div class="item-img">
                                <img src="../Assets/img/chair-2-1.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h5 class="card-title items-content__name">NAGI 2013</h5>
                                <h5 class="card-text items-content__price">25 USD</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-3 card item chair">
                        <a href="">
                            <div class="item-img">
                                <img src="../Assets/img/chair-3-1.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h5 class="card-title items-content__name">CRAFT CHAIR</h5>
                                <h5 class="card-text items-content__price">23 USD</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-3 card item chair">
                        <a href="">
                            <div class="item-img">
                                <img src="../Assets/img/chair-4-1.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h5 class="card-title items-content__name">SAIL SOFA</h5>
                                <h5 class="card-text items-content__price">32 USD</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-3 card item chair">
                        <a href="">
                            <div class="item-img">
                                <img src="../Assets/img/chair-5-1.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h5 class="card-title items-content__name">HARU</h5>
                                <h5 class="card-text items-content__price">35 USD</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-3 card item chair">
                        <a href="">
                            <div class="item-img">
                                <img src="../Assets/img/chair-6-1.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h5 class="card-title items-content__name">CLOUD</h5>
                                <h5 class="card-text items-content__price">21 USD</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-3 card item chair">
                        <a href="">
                            <div class="item-img">
                                <img src="../Assets/img/chair-7-1.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h5 class="card-title items-content__name">MAST CHAIR</h5>
                                <h5 class="card-text items-content__price">28 USD</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-3 card item chair">
                        <a href="">
                            <div class="item-img">
                                <img src="../Assets/img/chair-8-1.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h5 class="card-title items-content__name">AZURE</h5>
                                <h5 class="caed-text items-content__price">42 USD</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-3 card item chair">
                        <a href="">
                            <div class="item-img">
                                <img src="../Assets/img/chair-9-1.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h5 class="card-title items-content__name">NC4</h5>
                                <h5 class="caed-text items-content__price">26 USD</h5>
                            </div>
                        </a>
                    </div>
                    <!-- table -->
                    <div class="col-3 card item table">
                        <a href="">
                            <div class="item-img">
                                <img src="../Assets/img/table-1-1.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h5 class="card-title items-content__name">CIELO</h5>
                                <h5 class="card-text items-content__price">20 USD</h5>
                            </div>                          
                        </a>
                    </div>
                    <div class="col-3 card item table">
                        <a href="">
                            <div class="item-img">
                                <img src="../Assets/img/table-2-1.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h5 class="card-title items-content__name">NAGI 2013</h5>
                                <h5 class="card-text items-content__price">25 USD</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-3 card item table">
                        <a href="">
                            <div class="item-img">
                                <img src="../Assets/img/table-3-1.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h5 class="card-title items-content__name">CRAFT CHAIR</h5>
                                <h5 class="card-text items-content__price">23 USD</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-3 card item table">
                        <a href="">
                            <div class="item-img">
                                <img src="../Assets/img/table-4-1.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h5 class="card-title items-content__name">SAIL SOFA</h5>
                                <h5 class="card-text items-content__price">32 USD</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-3 card item table">
                        <a href="">
                            <div class="item-img">
                                <img src="../Assets/img/table-5-1.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h5 class="card-title items-content__name">HARU</h5>
                                <h5 class="card-text items-content__price">35 USD</h5>
                            </div>
                        </a>
                    </div>
                    <!-- sofa -->
                    <div class="col-3 card item sofa">
                        <a href="">
                            <div class="item-img">
                                <img src="../Assets/img/sofa-1-1.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h5 class="card-title items-content__name">CIELO</h5>
                                <h5 class="card-text items-content__price">20 USD</h5>
                            </div>                          
                        </a>
                    </div>
                    <div class="col-3 card item sofa">
                        <a href="">
                            <div class="item-img">
                                <img src="../Assets/img/sofa-2-1.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h5 class="card-title items-content__name">NAGI 2013</h5>
                                <h5 class="card-text items-content__price">25 USD</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-3 card item sofa">
                        <a href="">
                            <div class="item-img">
                                <img src="../Assets/img/sofa-3-1.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h5 class="card-title items-content__name">CRAFT CHAIR</h5>
                                <h5 class="card-text items-content__price">23 USD</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-3 card item sofa">
                        <a href="">
                            <div class="item-img">
                                <img src="../Assets/img/sofa-4-1.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h5 class="card-title items-content__name">SAIL SOFA</h5>
                                <h5 class="card-text items-content__price">32 USD</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-3 card item sofa">
                        <a href="">
                            <div class="item-img">
                                <img src="../Assets/img/sofa-5-1.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h5 class="card-title items-content__name">HARU</h5>
                                <h5 class="card-text items-content__price">35 USD</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-3 card item sofa">
                        <a href="">
                            <div class="item-img">
                                <img src="../Assets/img/sofa-6-1.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h5 class="card-title items-content__name">CLOUD</h5>
                                <h5 class="card-text items-content__price">21 USD</h5>
                            </div>
                        </a>
                    </div>
                    <!-- clock -->
                    <div class="col-3 card item clock">
                        <a href="">
                            <div class="item-img">
                                <img src="../Assets/img/clock-1-1.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h5 class="card-title items-content__name">CIELO</h5>
                                <h5 class="card-text items-content__price">20 USD</h5>
                            </div>                          
                        </a>
                    </div>
                    <div class="col-3 card item clock">
                        <a href="">
                            <div class="item-img">
                                <img src="../Assets/img/clock-2-1.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h5 class="card-title items-content__name">NAGI 2013</h5>
                                <h5 class="card-text items-content__price">25 USD</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-3 card item clock">
                        <a href="">
                            <div class="item-img">
                                <img src="../Assets/img/clock-3-1.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h5 class="card-title items-content__name">CRAFT CHAIR</h5>
                                <h5 class="card-text items-content__price">23 USD</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-3 card item clock">
                        <a href="">
                            <div class="item-img">
                                <img src="../Assets/img/clock-4-1.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h5 class="card-title items-content__name">SAIL SOFA</h5>
                                <h5 class="card-text items-content__price">32 USD</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-3 card item clock">
                        <a href="">
                            <div class="item-img">
                                <img src="../Assets/img/clock-5-1.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h5 class="card-title items-content__name">HARU</h5>
                                <h5 class="card-text items-content__price">35 USD</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-3 card item clock">
                        <a href="">
                            <div class="item-img">
                                <img src="../Assets/img/clock-6-1.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h5 class="card-title items-content__name">CLOUD</h5>
                                <h5 class="card-text items-content__price">21 USD</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-3 card item clock">
                        <a href="">
                            <div class="item-img">
                                <img src="../Assets/img/clock-7-1.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h5 class="card-title items-content__name">CLOUD</h5>
                                <h5 class="card-text items-content__price">21 USD</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-3 card item clock">
                        <a href="">
                            <div class="item-img">
                                <img src="../Assets/img/clock-8-1.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h5 class="card-title items-content__name">CLOUD</h5>
                                <h5 class="card-text items-content__price">21 USD</h5>
                            </div>
                        </a>
                    </div>
                    <!-- bed -->
                    <div class="col-3 card item bed">
                        <a href="">
                            <div class="item-img">
                                <img src="../Assets/img/bed-1-1.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h5 class="card-title items-content__name">CIELO</h5>
                                <h5 class="card-text items-content__price">20 USD</h5>
                            </div>                          
                        </a>
                    </div>
                    <div class="col-3 card item bed">
                        <a href="">
                            <div class="item-img">
                                <img src="../Assets/img/bed-2-1.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h5 class="card-title items-content__name">NAGI 2013</h5>
                                <h5 class="card-text items-content__price">25 USD</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-3 card item bed">
                        <a href="">
                            <div class="item-img">
                                <img src="../Assets/img/bed-3-1.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h5 class="card-title items-content__name">CRAFT CHAIR</h5>
                                <h5 class="card-text items-content__price">23 USD</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-3 card item bed">
                        <a href="">
                            <div class="item-img">
                                <img src="../Assets/img/bed-4-1.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h5 class="card-title items-content__name">SAIL SOFA</h5>
                                <h5 class="card-text items-content__price">32 USD</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-3 card item bed">
                        <a href="">
                            <div class="item-img">
                                <img src="../Assets/img/bed-5-1.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h5 class="card-title items-content__name">HARU</h5>
                                <h5 class="card-text items-content__price">35 USD</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-3 card item bed">
                        <a href="">
                            <div class="item-img">
                                <img src="../Assets/img/bed-6-1.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h5 class="card-title items-content__name">CLOUD</h5>
                                <h5 class="card-text items-content__price">21 USD</h5>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="row">
  <div class="column chair">
    <div class="content">
      <img src="../Assets/img/chair-1-1.jpg" alt="Mountains" style="width:100%">
      <h4>Mountains</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column chair">
    <div class="content">
      <img src="../Assets/img/chair-1-1.jpg" alt="Lights" style="width:100%">
      <h4>Lights</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column chair">
    <div class="content">
      <img src="../Assets/img/chair-1-1.jpg" alt="Nature" style="width:100%">
      <h4>Forest</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>

  <div class="column sofa">
    <div class="content">
      <img src="../Assets/img/chair-1-1.jpg" alt="Car" style="width:100%">
      <h4>Retro</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column sofa">
    <div class="content">
      <img src="../Assets/img/chair-1-1.jpg" alt="Car" style="width:100%">
      <h4>Fast</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column sofa">
    <div class="content">
      <img src="../Assets/img/chair-1-1.jpg" alt="Car" style="width:100%">
      <h4>Classic</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>

  <div class="column table">
    <div class="content">
      <img src="../Assets/img/chair-1-1.jpg" alt="People" style="width:100%">
      <h4>Girl</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column table">
    <div class="content">
      <img src="../Assets/img/chair-1-1.jpg" alt="People" style="width:100%">
      <h4>Man</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column table">
    <div class="content">
      <img src="../Assets/img/chair-1-1.jpg" alt="People" style="width:100%">
      <h4>Woman</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
<!-- END GRID -->
</div>
            </div>
            

            

<!--

            <div class="chair mt-5">
                <h4 class="">CHAIR</h4>
                <div class="row items">
                    <div class="col-3 card item">
                        <a href="">
                            <div class="item-img">
                                <img src="../Assets/img/chair-1-1.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h5 class="card-title items-content__name">CIELO</h5>
                                <h5 class="card-text items-content__price">20 USD</h5>
                            </div>                          
                        </a>
                    </div>
                    <div class="col-3 card item">
                        <a href="">
                            <div class="item-img">
                                <img src="../Assets/img/chair-2-1.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h5 class="card-title items-content__name">NAGI 2013</h5>
                                <h5 class="card-text items-content__price">25 USD</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-3 card item">
                        <a href="">
                            <div class="item-img">
                                <img src="../Assets/img/chair-3-1.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h5 class="card-title items-content__name">CRAFT CHAIR</h5>
                                <h5 class="card-text items-content__price">23 USD</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-3 card item">
                        <a href="">
                            <div class="item-img">
                                <img src="../Assets/img/chair-4-1.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h5 class="card-title items-content__name">SAIL SOFA</h5>
                                <h5 class="card-text items-content__price">32 USD</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-3 card item">
                        <a href="">
                            <div class="item-img">
                                <img src="../Assets/img/chair-5-1.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h5 class="card-title items-content__name">HARU</h5>
                                <h5 class="card-text items-content__price">35 USD</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-3 card item">
                        <a href="">
                            <div class="item-img">
                                <img src="../Assets/img/chair-6-1.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h5 class="card-title items-content__name">CLOUD</h5>
                                <h5 class="card-text items-content__price">21 USD</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-3 card item">
                        <a href="">
                            <div class="item-img">
                                <img src="../Assets/img/chair-7-1.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h5 class="card-title items-content__name">MAST CHAIR</h5>
                                <h5 class="card-text items-content__price">28 USD</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-3 card item">
                        <a href="">
                            <div class="item-img">
                                <img src="../Assets/img/chair-8-1.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h5 class="card-title items-content__name">AZURE</h5>
                                <h5 class="caed-text items-content__price">42 USD</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-3 card item">
                        <a href="">
                            <div class="item-img">
                                <img src="../Assets/img/chair-9-1.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h5 class="card-title items-content__name">NC4</h5>
                                <h5 class="caed-text items-content__price">26 USD</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="sofa mt-5">
                <h4 class="">SOFA</h4>
                <div class="row items">
                    <div class="col-3 card item">
                        <a href="">
                            <div class="item-img">
                                <img src="../Assets/img/sofa-1-1.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h5 class="card-title items-content__name">CIELO</h5>
                                <h5 class="card-text items-content__price">20 USD</h5>
                            </div>                          
                        </a>
                    </div>
                    <div class="col-3 card item">
                        <a href="">
                            <div class="item-img">
                                <img src="../Assets/img/sofa-2-1.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h5 class="card-title items-content__name">NAGI 2013</h5>
                                <h5 class="card-text items-content__price">25 USD</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-3 card item">
                        <a href="">
                            <div class="item-img">
                                <img src="../Assets/img/sofa-3-1.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h5 class="card-title items-content__name">CRAFT CHAIR</h5>
                                <h5 class="card-text items-content__price">23 USD</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-3 card item">
                        <a href="">
                            <div class="item-img">
                                <img src="../Assets/img/sofa-4-1.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h5 class="card-title items-content__name">SAIL SOFA</h5>
                                <h5 class="card-text items-content__price">32 USD</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-3 card item">
                        <a href="">
                            <div class="item-img">
                                <img src="../Assets/img/sofa-5-1.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h5 class="card-title items-content__name">HARU</h5>
                                <h5 class="card-text items-content__price">35 USD</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-3 card item">
                        <a href="">
                            <div class="item-img">
                                <img src="../Assets/img/sofa-6-1.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h5 class="card-title items-content__name">CLOUD</h5>
                                <h5 class="card-text items-content__price">21 USD</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="table mt-5">
                <h4 class="">TABLE</h4>
                <div class="row items">
                    <div class="col-3 card item">
                        <a href="">
                            <div class="item-img">
                                <img src="../Assets/img/table-1-1.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h5 class="card-title items-content__name">CIELO</h5>
                                <h5 class="card-text items-content__price">20 USD</h5>
                            </div>                          
                        </a>
                    </div>
                    <div class="col-3 card item">
                        <a href="">
                            <div class="item-img">
                                <img src="../Assets/img/table-2-1.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h5 class="card-title items-content__name">NAGI 2013</h5>
                                <h5 class="card-text items-content__price">25 USD</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-3 card item">
                        <a href="">
                            <div class="item-img">
                                <img src="../Assets/img/table-3-1.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h5 class="card-title items-content__name">CRAFT CHAIR</h5>
                                <h5 class="card-text items-content__price">23 USD</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-3 card item">
                        <a href="">
                            <div class="item-img">
                                <img src="../Assets/img/table-4-1.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h5 class="card-title items-content__name">SAIL SOFA</h5>
                                <h5 class="card-text items-content__price">32 USD</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-3 card item">
                        <a href="">
                            <div class="item-img">
                                <img src="../Assets/img/table-5-1.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h5 class="card-title items-content__name">HARU</h5>
                                <h5 class="card-text items-content__price">35 USD</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="clock mt-5">
                <h4 class="">CLOCK</h4>
                <div class="row items">
                    <div class="col-3 card item">
                        <a href="">
                            <div class="item-img">
                                <img src="../Assets/img/clock-1-1.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h5 class="card-title items-content__name">CIELO</h5>
                                <h5 class="card-text items-content__price">20 USD</h5>
                            </div>                          
                        </a>
                    </div>
                    <div class="col-3 card item">
                        <a href="">
                            <div class="item-img">
                                <img src="../Assets/img/clock-2-1.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h5 class="card-title items-content__name">NAGI 2013</h5>
                                <h5 class="card-text items-content__price">25 USD</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-3 card item">
                        <a href="">
                            <div class="item-img">
                                <img src="../Assets/img/clock-3-1.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h5 class="card-title items-content__name">CRAFT CHAIR</h5>
                                <h5 class="card-text items-content__price">23 USD</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-3 card item">
                        <a href="">
                            <div class="item-img">
                                <img src="../Assets/img/clock-4-1.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h5 class="card-title items-content__name">SAIL SOFA</h5>
                                <h5 class="card-text items-content__price">32 USD</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-3 card item">
                        <a href="">
                            <div class="item-img">
                                <img src="../Assets/img/clock-5-1.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h5 class="card-title items-content__name">HARU</h5>
                                <h5 class="card-text items-content__price">35 USD</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-3 card item">
                        <a href="">
                            <div class="item-img">
                                <img src="../Assets/img/clock-6-1.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h5 class="card-title items-content__name">CLOUD</h5>
                                <h5 class="card-text items-content__price">21 USD</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-3 card item">
                        <a href="">
                            <div class="item-img">
                                <img src="../Assets/img/clock-7-1.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h5 class="card-title items-content__name">CLOUD</h5>
                                <h5 class="card-text items-content__price">21 USD</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-3 card item">
                        <a href="">
                            <div class="item-img">
                                <img src="../Assets/img/clock-8-1.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h5 class="card-title items-content__name">CLOUD</h5>
                                <h5 class="card-text items-content__price">21 USD</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="bed mt-5">
                <h4 class="">BED</h4>
                <div class="row items">
                    <div class="col-3 card item">
                        <a href="">
                            <div class="item-img">
                                <img src="../Assets/img/bed-1-1.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h5 class="card-title items-content__name">CIELO</h5>
                                <h5 class="card-text items-content__price">20 USD</h5>
                            </div>                          
                        </a>
                    </div>
                    <div class="col-3 card item">
                        <a href="">
                            <div class="item-img">
                                <img src="../Assets/img/bed-2-1.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h5 class="card-title items-content__name">NAGI 2013</h5>
                                <h5 class="card-text items-content__price">25 USD</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-3 card item">
                        <a href="">
                            <div class="item-img">
                                <img src="../Assets/img/bed-3-1.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h5 class="card-title items-content__name">CRAFT CHAIR</h5>
                                <h5 class="card-text items-content__price">23 USD</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-3 card item">
                        <a href="">
                            <div class="item-img">
                                <img src="../Assets/img/bed-4-1.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h5 class="card-title items-content__name">SAIL SOFA</h5>
                                <h5 class="card-text items-content__price">32 USD</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-3 card item">
                        <a href="">
                            <div class="item-img">
                                <img src="../Assets/img/bed-5-1.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h5 class="card-title items-content__name">HARU</h5>
                                <h5 class="card-text items-content__price">35 USD</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-3 card item">
                        <a href="">
                            <div class="item-img">
                                <img src="../Assets/img/bed-6-1.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h5 class="card-title items-content__name">CLOUD</h5>
                                <h5 class="card-text items-content__price">21 USD</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
-->
            <div class="banner">

            
            </div>
        </div>

        <!--Footer-->      
        <?php
            include_once '../do-an-web-php/Views/blocks/footer.php';
        ?>

        <!-- link bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
        <!-- owl-carousel -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="owlcarousel/owl.carousel.min.js"></script>
        <script>
            $('.owl-carousel').owlCarousel({
                loop:true,
                margin: 5,
                nav:true,
                responsive:{
                    0:{
                        items:2
                    },
                    600:{
                        items:3
                    },
                    1024:{
                        items:4
                    },
                    1200:{
                        item:5
                    }
                }
            })
        </script>
    </body>
    <script src="../do-an-web-php/Views/Public/JS/home.js"></script>
</html>