<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Furni3dots - Search</title>
        <link rel="stylesheet" href="../Public/CSS/header.css">
        <link rel="stylesheet" href="../Public/CSS/search.css">
        <link rel="stylesheet" href="../Public/CSS/footer.css">
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
            include_once './blocks/header.php'
        ?>
        
        <!-- body -->
        <div class="container-fluid my-search p-0 px-5 mt-4">
            <div class="row m-0">
                <div class="col-2 filter">
                    <div class="filter-status">
                        <div class="filter-status__icon">
                            <i class="fas fa-filter"></i>
                        </div>
                        <div class="filter-panel__text">
                            <h5>SEARCH FILTER</h5>
                        </div>
                    </div>
                    <div class="filter-group location-filter">
                        <h5 class="filter-group__header">List Product</h5>
                        <div class="filter-group__body">
                            <div class="checkbox-filter">
                                <input type="checkbox">
                                <span>Chair</span>
                            </div>
                            <div class="checkbox-filter">
                                <input type="checkbox">
                                <span>Sofa</span>
                            </div>
                            <div class="checkbox-filter">
                                <input type="checkbox">
                                <span>Bed</span>
                            </div>
                            <div class="checkbox-filter">
                                <input type="checkbox">
                                <span>Clock</span>
                            </div>
                            <div class="checkbox-filter">
                                <input type="checkbox">
                                <span>Table</span>
                            </div>
                        </div>
                    </div>
                    <div class="filter-group price-range-filter">
                        <h5 class="filter-group__header">Price range</h5>
                        <div class="filter-group__body">
                            <div class="checkbox-filter">
                                <input type="checkbox">
                                <span>0 - 20 USD</span>
                            </div>
                            <div class="checkbox-filter">
                                <input type="checkbox">
                                <span>20 - 50 USD</span>
                            </div>
                            <div class="checkbox-filter">
                                <input type="checkbox">
                                <span>over 50 USD</span>
                            </div>
                        </div>
                    </div>
                    <div class="filter-group judge-filter">
                        <h5 class="filter-group__header">Rating</h5>
                        <div class="filter-group__body">
                            <div class="checkbox-filter">
                                <i class="fas fa-star col-yellow"></i>
                                <i class="fas fa-star col-yellow"></i>
                                <i class="fas fa-star col-yellow"></i>
                                <i class="fas fa-star col-yellow"></i>
                                <i class="fas fa-star col-yellow"></i>
                            </div>
                            <div class="checkbox-filter">
                                <i class="fas fa-star col-yellow"></i>
                                <i class="fas fa-star col-yellow"></i>
                                <i class="fas fa-star col-yellow"></i>
                                <i class="fas fa-star col-yellow"></i>
                                <i class="fas fa-star col-white"></i>
                                <span>& Up</span>
                            </div>
                            <div class="checkbox-filter">
                                <i class="fas fa-star col-yellow"></i>
                                <i class="fas fa-star col-yellow"></i>
                                <i class="fas fa-star col-yellow"></i>
                                <i class="fas fa-star col-white"></i>
                                <i class="fas fa-star col-white"></i>
                                <span>& Up</span>
                            </div>
                        </div>
                    </div>
                    <button class="button-delete">CLEAR ALL</button>
                </div>
                <div class="col-10 main">
                    <div class="search-result">
                        <h5 class="search-result__header">Search result for "<span>chair</span>"</h5>
                        <div class="row search-result__items">
                            <div class="col-3 card search-result__item">
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
                            <div class="col-3 card search-result__item">
                                <a href="">
                                    <div class="item-img">
                                        <img src="../Assets/img/clock-7-1.jpg" alt="">
                                    </div>
                                    <div class="card-body items-content">
                                        <h5 class="card-title items-content__name">NAGI 2013</h5>
                                        <h5 class="card-text items-content__price">25 USD</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="col-3 card search-result__item">
                                <a href="">
                                    <div class="item-img">
                                        <img src="../Assets/img/bed-5-1.jpg" alt="">
                                    </div>
                                    <div class="card-body items-content">
                                        <h5 class="card-title items-content__name">CRAFT CHAIR</h5>
                                        <h5 class="card-text items-content__price">23 USD</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="col-3 card search-result__item">
                                <a href="">
                                    <div class="item-img">
                                        <img src="../Assets/img/chair-2-1.jpg" alt="">
                                    </div>
                                    <div class="card-body items-content">
                                        <h5 class="card-title items-content__name">SAIL SOFA</h5>
                                        <h5 class="card-text items-content__price">32 USD</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="col-3 card search-result__item">
                                <a href="">
                                    <div class="item-img">
                                        <img src="../Assets/img/table-4-1.jpg" alt="">
                                    </div>
                                    <div class="card-body items-content">
                                        <h5 class="card-title items-content__name">HARU</h5>
                                        <h5 class="card-text items-content__price">35 USD</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="col-3 card search-result__item">
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
                            <div class="col-3 card search-result__item">
                                <a href="">
                                    <div class="item-img">
                                        <img src="../Assets/img/chair-3-1.jpg" alt="">
                                    </div>
                                    <div class="card-body items-content">
                                        <h5 class="card-title items-content__name">MAST CHAIR</h5>
                                        <h5 class="card-text items-content__price">28 USD</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="col-3 card search-result__item">
                                <a href="">
                                    <div class="item-img">
                                        <img src="../Assets/img/bed-4-1.jpg" alt="">
                                    </div>
                                    <div class="card-body items-content">
                                        <h5 class="card-title items-content__name">AZURE</h5>
                                        <h5 class="card-text items-content__price">42 USD</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="col-3 card search-result__item">
                                <a href="">
                                    <div class="item-img">
                                        <img src="../Assets/img/clock-5-1.jpg" alt="">
                                    </div>
                                    <div class="card-body items-content">
                                        <h5 class="card-title items-content__name">NC4</h5>
                                        <h5 class="card-text items-content__price">26 USD</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="col-3 card search-result__item">
                                <a href="">
                                    <div class="item-img">
                                        <img src="../Assets/img/chair-4-1.jpg" alt="">
                                    </div>
                                    <div class="card-body items-content">
                                        <h5 class="card-title items-content__name">MASSENA</h5>
                                        <h5 class="card-text items-content__price">25 USD</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="col-3 card search-result__item">
                                <a href="">
                                    <div class="item-img">
                                        <img src="../Assets/img/sofa-5-1.jpg" alt="">
                                    </div>
                                    <div class="card-body items-content">
                                        <h5 class="card-title items-content__name">ROUND</h5>
                                        <h5 class="card-text items-content__price">22 USD</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="col-3 card search-result__item">
                                <a href="">
                                    <div class="item-img">
                                        <img src="../Assets/img/clock-4-1.jpg" alt="">
                                    </div>
                                    <div class="card-body items-content">
                                        <h5 class="card-title items-content__name">YC1</h5>
                                        <h5 class="card-text items-content__price">24 USD</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="col-3 card search-result__item">
                                <a href="">
                                    <div class="item-img">
                                        <img src="../Assets/img/table-2-1.jpg" alt="">
                                    </div>
                                    <div class="card-body items-content">
                                        <h5 class="card-title items-content__name">YC1</h5>
                                        <h5 class="card-text items-content__price">24 USD</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="col-3 card search-result__item">
                                <a href="">
                                    <div class="item-img">
                                        <img src="../Assets/img/sofa-3-1.jpg" alt="">
                                    </div>
                                    <div class="card-body items-content">
                                        <h5 class="card-title items-content__name">SKIFF CHAIR</h5>
                                        <h5 class="card-text items-content__price">2 USD</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="col-3 card search-result__item">
                                <a href="">
                                    <div class="item-img">
                                        <img src="../Assets/img/clock-3-1.jpg" alt="">
                                    </div>
                                    <div class="card-body items-content">
                                        <h5 class="card-title items-content__name">HARU COLLECTION</h5>
                                        <h5 class="card-text items-content__price">21 USD</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="col-3 card search-result__item">
                                <a href="">
                                    <div class="item-img">
                                        <img src="../Assets/img/chair-5-1.jpg" alt="">
                                    </div>
                                    <div class="card-body items-content">
                                        <h5 class="card-title items-content__name">BRIO</h5>
                                        <h5 class="card-text items-content__price">20 USD</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="col-3 card search-result__item">
                                <a href="">
                                    <div class="item-img">
                                        <img src="../Assets/img/table-1-1.jpg" alt="">
                                    </div>
                                    <div class="card-body items-content">
                                        <h5 class="card-title items-content__name">NS-2</h5>
                                        <h5 class="card-text items-content__price">32 USD</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="col-3 card search-result__item">
                                <a href="">
                                    <div class="item-img">
                                        <img src="../Assets/img/chair-6-1.jpg" alt="">
                                    </div>
                                    <div class="card-body items-content">
                                        <h5 class="card-title items-content__name">NAGI 2011</h5>
                                        <h5 class="card-text items-content__price">31 USD</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="col-3 card search-result__item">
                                <a href="">
                                    <div class="item-img">
                                        <img src="../Assets/img/bed-2-1.jpg" alt="">
                                    </div>
                                    <div class="card-body items-content">
                                        <h5 class="card-title items-content__name">NS-2</h5>
                                        <h5 class="card-text items-content__price">32 USD</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="col-3 card search-result__item">
                                <a href="">
                                    <div class="item-img">
                                        <img src="../Assets/img/sofa-2-1.jpg" alt="">
                                    </div>
                                    <div class="card-body items-content">
                                        <h5 class="card-title items-content__name">NS-2</h5>
                                        <h5 class="card-text items-content__price">32 USD</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="col-3 card search-result__item">
                                <a href="">
                                    <div class="item-img">
                                        <img src="../Assets/img/chair-7-1.jpg" alt="">
                                    </div>
                                    <div class="card-body items-content">
                                        <h5 class="card-title items-content__name">NS-2</h5>
                                        <h5 class="card-text items-content__price">32 USD</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="col-3 card search-result__item">
                                <a href="">
                                    <div class="item-img">
                                        <img src="../Assets/img/clock-2-1.jpg" alt="">
                                    </div>
                                    <div class="card-body items-content">
                                        <h5 class="card-title items-content__name">NS-2</h5>
                                        <h5 class="card-text items-content__price">32 USD</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="col-3 card search-result__item">
                                <a href="">
                                    <div class="item-img">
                                        <img src="../Assets/img/chair-8-1.jpg" alt="">
                                    </div>
                                    <div class="card-body items-content">
                                        <h5 class="card-title items-content__name">NS-2</h5>
                                        <h5 class="card-text items-content__price">32 USD</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="col-3 card search-result__item">
                                <a href="">
                                    <div class="item-img">
                                        <img src="../Assets/img/sofa-1-1.jpg" alt="">
                                    </div>
                                    <div class="card-body items-content">
                                        <h5 class="card-title items-content__name">NS-2</h5>
                                        <h5 class="card-text items-content__price">32 USD</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="col-3 card search-result__item">
                                <a href="">
                                    <div class="item-img">
                                        <img src="../Assets/img/chair-9-1.jpg" alt="">
                                    </div>
                                    <div class="card-body items-content">
                                        <h5 class="card-title items-content__name">NS-2</h5>
                                        <h5 class="card-text items-content__price">32 USD</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="col-3 card search-result__item">
                                <a href="">
                                    <div class="item-img">
                                        <img src="../Assets/img/clock-1-1.jpg" alt="">
                                    </div>
                                    <div class="card-body items-content">
                                        <h5 class="card-title items-content__name">NS-2</h5>
                                        <h5 class="card-text items-content__price">32 USD</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="col-3 card search-result__item">
                                <a href="">
                                    <div class="item-img">
                                        <img src="../Assets/img/bed-1-1.jpg" alt="">
                                    </div>
                                    <div class="card-body items-content">
                                        <h5 class="card-title items-content__name">NS-2</h5>
                                        <h5 class="card-text items-content__price">32 USD</h5>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>
                    <div class="related-products mt-4">
                        <h5 class="related-products__header">Related products</h5>
                        <div class="owl-carousel owl-theme mt-3">
                            <div class="item">
                                <img src="../Assets/img/clock-1-1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="../Assets/img/sofa-1-1.jpg" alt="">                       
                            </div>
                            <div class="item">
                                <img src="../Assets/img/bed-1-1.jpg" alt="">                      
                            </div>
                            <div class="item">
                                <img src="../Assets/img/table-1-1.jpg" alt="">                       
                            </div>
                            <div class="item">
                                <img src="../Assets/img/chair-1-1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="../Assets/img/bed-2-1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="../Assets/img/sofa-2-1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="../Assets/img/table-2-1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="../Assets/img/table-3-1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="../Assets/img/clock-3-1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="../Assets/img/chair-3-1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="../Assets/img/chair-4-1.jpg" alt="">
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
        <!--Footer-->      
        <?php
            include_once './blocks/footer.php'
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
</html>