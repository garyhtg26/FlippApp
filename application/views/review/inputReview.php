<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product</title>
    <link href="https://unpkg.com/ionicons@4.5.5/dist/css/ionicons.min.css" rel="stylesheet">
    <link href="<?php echo base_url('css/style.css') ?>" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('styles/bootstrap4/bootstrap.min.css') ?>">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('plugins/OwlCarousel2-2.2.1/owl.carousel.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('plugins/OwlCarousel2-2.2.1/owl.theme.default.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('plugins/OwlCarousel2-2.2.1/animate.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/product.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/product_responsive.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css') ?>">
</head>

<body>

<div class="super_container">


    <!-- Product Details -->

    <div class="product_details">
        <div class="container">
            <div class="row details_row">

                <!-- Product Image -->
                <div class="col-lg-6">
                    <div class="details_image">
                        <div class="details_image_large"><img src="<?php echo base_url('images/details_1.jpg') ?>" alt=""><div class="product_extra product_new"><a href="categories.html">New</a></div></div>
                        <div class="details_image_thumbnails d-flex flex-row align-items-start justify-content-between">
                            <div class="details_image_thumbnail active" data-image="images/details_1.jpg"><img src="<?php echo base_url('images/details_1.jpg') ?>" alt=""></div>
                            <div class="details_image_thumbnail" data-image="images/details_2.jpg"><img src="<?php echo base_url('images/details_2.jpg') ?>" alt=""></div>
                            <div class="details_image_thumbnail" data-image="images/details_3.jpg"><img src="<?php echo base_url('images/details_3.jpg') ?>" alt=""></div>
                            <div class="details_image_thumbnail" data-image="images/details_4.jpg"><img src="<?php echo base_url('images/details_4.jpg') ?>" alt=""></div>
                        </div>
                    </div>
                </div>

                <!-- Product Content -->
                <div class="col-lg-6">
                    <div class="details_content">
                        <div class="details_name">Porto</div>
                        <div class="details_discount">$17</div>
                        <div class="details_price">$16</div>

                        <!-- In Stock -->
                        <div class="dropdown">
                            <button class="btn dropdown-toggle" type="button" data-toggle="dropdown">Regular Liscense
                            <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                              <li><a href="#">Extended Liscense</a></li>
                              
                            </ul>
                        </div>
                        <div class="details_text">
                        
                        </div>
                        <span class="heading">User Rating</span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <p>4.1 average based on 254 reviews.</p>
                        <hr style="border:3px solid #f1f1f1">


                        <!-- Product Quantity -->
                        <div class="product_quantity_container">
                            <div class="button cart_button"><a style="color: orange" href="#">Demo</a></div>
                            <div class="button cart_button"><a href="#">Beli Sekarang</a></div>
                        </div>

                        <!-- Share -->
                        <div class="details_share">
                            <span>Share:</span>
                            <ul>
                                <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row description_row">
                <div class="col">
                    <div class="description_title_container">
                        <div class="description_title">Description</div>
                        <div class="reviews_title"><a href="<?= base_url('comment')?>">Comment <span>(1)</span></a></div>
                        <div class="reviews_title"><a href="<?= base_url('inputReview')?>">Reviews <span>(9)</span></a></div>
                    </div>
                    <div class="description_text">
                        <p>Menjadi Best seller di code canyon sebagai HTML site template. sudah dibangun sejak 2013, memiliki versi porto admin, wordpress, magento, drupal, shopify, ioomla. dan diupdate setiap hari untuk new feature </p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="newsletter">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="newsletter_border"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="newsletter_content text-center">
                        <div class="newsletter_title">Subscribe to our newsletter</div>
                        <div class="newsletter_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros</p></div>
                        <div class="newsletter_form_container">
                            <form action="#" id="newsletter_form" class="newsletter_form">
                                <input type="email" class="newsletter_input" required="required">
                                <button class="newsletter_button trans_200"><span>Subscribe</span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="js/product.js"></script>


</body>
</html>