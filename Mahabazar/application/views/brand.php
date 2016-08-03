<!DOCTYPE html>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css'); ?>" >
    <script src="<?= base_url('assets/js/jquery.min.js'); ?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/shopping.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/brand.css'); ?>">
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  </style>
</head>

<body>
	<!-- <div w3-include-html="shopping.html"></div> -->
	<script src="<?= base_url('assets/js/w3-include-html.js'); ?>"></script>
    <!-- Include ends -->
    <div class="container">
        <!-- top-header -->
        <div class="top-header">
            <div class="logo">
                <a href="index.html"><img src="<?= base_url('assets/images/image.png'); ?>" title="barndlogo" />
                </a>
            </div>
            <div class="top-header-info">
                <div class="top-contact-info">
                    <ul class="unstyled-list list-inline">
                        <!-- <img src="/var/www/html/rahul_ws1/assets/images/clients/client6.png.png">  -->
                        <li class="test"><span class="phone"> </span>090 - 223 44 66</li>
                        <li class="test"><span class="mail"> </span><a href="#">help@trendd.com</a>
                        </li>
                        <div class="clearfix"> </div>
                    </ul>
                </div>
                <div class="cart-details">
                    <div class="add-to-cart">
                        <ul class="unstyled-list list-inline">
                            <li class="test"><span class="cart"> </span>
                                <ul class="cart-sub">
                                    <li class="test">
                                        <p>0 Products</p>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="login-rigister">
                        <ul class="unstyled-list list-inline">
                            <li class="test"><a class="login" href="login/web">Login</a>
                            </li>
                            <li class="test"><a class="rigister" data-toggle="modal" data-target="#myModal" >REGISTER <span> </span></a>
                            </li>
                            <div class="clearfix"> </div>
                        </ul>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <!-- top-header -->
        <!-- top-header-nav -->
        <div class="top-header-nav">
            <!-- start-top-nav -->
            <nav class="top-nav main-menu">
                <ul class="top-nav">
                    <li class="test"><a href="products.html">OFFERS </a><span> </span>
                    </li>
                    <li class="test"><a href="products.html">PROMOTIONS</a><span> </span>
                    </li>
                    <li class="test"><a href="products.html">COUPENS</a><span> </span>
                    </li>
                    <li class="test"><a href="products.html">COMBOS</a><span> </span>
                    </li>
                    <li class="test"><a href="products.html">ABOUT US</a>
                    </li>
                    <div class="clearfix"> </div>
                </ul>
                <a href="#" id="pull"><img src="http://localhost/rahul_ws1/assets/images/clients/client6.png" title="menu" />
                </a>
            </nav>

             <div class="top-header-search-box">
			  	<form>
			  		<input type="text" placeholder="Search" required / maxlength="22">
			  		<input type="submit" value=" " >
			  	</form>
			  </div>
			  </div>





        <div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="/usr/share/kde4/apps/ksplash/Themes/joy/1280x1024/background.png " alt="Chania" width="460" height="345">
      </div>

      <div class="item">
        <img src="/usr/share/kde4/apps/ksplash/Themes/joy/1280x1024/background.png" alt="Chania" width="460" height="345">
      </div>

      <div class="item">
        <img src="/usr/share/kde4/apps/ksplash/Themes/joy/1280x1024/background.png" alt="Flower" width="460" height="345">
      </div>

      <div class="item">
        <img src="/usr/share/kde4/apps/ksplash/Themes/joy/1280x1024/background.png" alt="Flower" width="460" height="345">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>

  </div>
</div>


<!-- MODAL -->

<form action="php/M_login.php" method="POST">
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        ×</button>
                    <h4 class="modal-title" id="myModalLabel">
                        Login/Registration - <a href="http://www.jquery2dotnet.com">jquery2dotnet.com</a></h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-8" style="border-right: 1px dotted #C2C2C2;padding-right: 30px;">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#Login" data-toggle="tab">Login</a></li>
                                <li><a href="#Registration" data-toggle="tab">Registration</a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="Login">
                                    <form role="form" class="form-horizontal">
                                      <div class="form-group">
                                          <label for="email" class="col-sm-2 control-label">
                                              UserName </label>
                                          <div class="col-sm-10">
                                            <!-- <div class="row"> -->
                                              <input type="text" name="username" class="form-control" id="email1" placeholder="UserName" />
                                            <!-- </div> -->
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label for="exampleInputPassword1" class="col-sm-2 control-label">
                                              Password </label>
                                          <div class="col-sm-10">
                                              <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" />
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-sm-2">
                                          </div>
                                          <div class="col-sm-10">
                                              <button type="submit" class="btn btn-primary btn-sm">
                                                  Submit</button>
                                              <a href="javascript:;">Forgot your password?</a>
                                          </div>
                                      </div>
                                    </form>
                                </div>

                                <div class="tab-pane" id="Registration">
                                    <!-- <form method="post" action="php/M_login.php" role="form" class="form-horizontal"> -->
                                    <?php echo form_open_multipart('Welcome/register'); ?>
                                      <div class="form-group">
                                        <label for="email" class="col-sm-2 control-label">
                                            Name</label>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <select class="form-control">
                                                        <option>Mr.</option>
                                                        <option>Ms.</option>
                                                        <option>Mrs.</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="name" placeholder="Name" />
                                                </div>
                                            </div>
                                            <br>
                                        </div>
                                      </div>
                                    <div class="form-group">
                                        <label for="email" class="col-sm-2 control-label">
                                            Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="mobile" class="col-sm-2 control-label">
                                            Mobile</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="CustomerType" class="col-sm-2 control-label">
                                            Type </label>
                                        <div class="col-sm-10">
                                            <!-- <input type="password" class="form-control" id="password" placeholder="Password" /> -->
                                            <select name="customerType" class="form-control">
                                                <option readonly>Select Type</option>
                                                <option value="Customer">Customer</option>
                                                <option value="Shopkeeper">ShopKeeper</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                        </div>
                                        <div class="col-sm-10">
                                            <input type="submit" class="btn btn-primary btn-sm">
                                                Save
                                            <button type="button" class="btn btn-default btn-sm">
                                                Cancel</button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- Modal Ends -->


</body>

</html>
