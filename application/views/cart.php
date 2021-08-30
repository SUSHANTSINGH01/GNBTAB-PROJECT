<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <script type="text/javascript" src="<?php echo base_url("assets/js/cart.js")?>"></script>
  </head>
  <body>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/cart2.css")?>">


<div class="container px-4 py-5 mx-auto">
  <div class="row d-flex justify-content-center">
      <div class="col-5">
          <h4 class="heading">Shopping Bag</h4>
      </div>
      <div class="col-7">
          <div class="row text-right">
              <div class="col-3">
                  <h6 class="mt-2">Format</h6>
              </div>
			   <div class="col-5">
			  <div class="col-2">
			  </div>
              <div class="col-4">
			  
                  <h6 class="mt-2">Unit</h6>
              </div>
			   <div class="col-2">
			  </div>
               </div>
			  <div class="col-4">
                  <h6 class="mt-2">Price</h6>
              </div>
                  
          </div>
      </div>
  </div>
    <form class="row d-flex justify-content-center border-top" action="<?php echo site_url("construction/addToCart")?>" method="post">
      <div class="col-5">
          <div class="row d-flex">
              <div class="book"> <img src="<?php echo base_url("assets/img/bricks_f.jpg")?>" class="book-img"> </div>
              <div class="my-auto flex-column d-flex pad-left">
                  <h6 class="mob-text">Bricks</h6>
                  <p class="mob-text">Standard</p>
                  <button class="button " type="text" value="" style="background-color: #4CAF50;"> Add to cart</button>
              </div>
          </div>
      </div>
      <div class="my-auto col-7">
          <div class="row text-right">
              <div class="col-3">
			      <p></p>
				  <p></p>
                  <p class="mob-text">1000/unit</p>
              </div>
              <div class="col-5">
			      <div class="col-4">
                                  <input type="button" class="button button1" id="increase" style="background-color: #008CBA;" onclick="increaseValue()" value="+">
				  </div>
                  <div class="col-6" >
                      
					  <!--<div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value"></div>-->
                                          <input type="text" id="bric" name="bric" value="0" />
					  <!--<div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value"></div>-->
					
					
					<script>
						function increaseValue() {
						  var value = parseInt(document.getElementById('bric').value, 0);
						  value = isNaN(value) ? 0 : value;
						  value++;
                                                  var price=9.99*value;
						  document.getElementById('bric').value = value;
                                                  document.getElementById('bric_price').value = price;
						}
                                                document.getElementById('bric_price').value = "9.9";
					</script>
                  </div>
				  <div class="col-4">
                                      <input type="button" class="button button1" id="decrease" style="background-color: #008CBA;" onclick="decreaseValue()" value="-">
				  </div>
                  
                  <script>
                        function decreaseValue() {
                            var value = parseInt(document.getElementById('bric').value, 0);
                            value = isNaN(value) ? 0 : value;
                            value--;
                            if(value<1)
                            {
                                value=0;
                            }
                            var price=9.99*value;
                            document.getElementById('bric').value = value;
                            document.getElementById('bric_price').value = price;
                          }
                          
                 </script>
              </div>
              <div class="col-4">
			  <p></p>
			  
                          <input type="text" id="bric_price" name="bric_price" value="0" />
                  <!--<h6 class="text" id="bric_price" value="9.99">$0.0</h6>-->
                  
              </div>
          </div>
      </div>
  </form>
  <form class="row d-flex justify-content-center border-top" action="<?php echo site_url("construction/addToCart")?>" method="post">
      <div class="col-5">
          <div class="row d-flex">
              <div class="book"> <img src="<?php echo base_url("assets/img/cement_f.jpg")?>" class="book-img"> </div>
              <div class="my-auto flex-column d-flex pad-left">
                  <h6 class="mob-text">Cement</h6>
                  <p class="mob-text">Medium</p>
                  <button class="button "  value="Add to cart" style="background-color: #4CAF50;"> Add to cart</button>
              </div>
          </div>
      </div>
      <div class="my-auto col-7">
          <div class="row text-right">
              <div class="col-3">
			  <p></p>
                  <p class="mob-text">50kg/unit</p>
              </div>
              <div class="col-5">
                 <div class="col-4">
                     <input type="button" class="button button1" style="background-color: #008CBA;;"  onclick="increaseValueCement()" value="+">
				  </div>
                  <div class="col-6" >
                      <!--<div class="value-button" id="decrease" onclick="decreaseValueCement()" value="Decrease Value"></div>-->
                      <input type="text" id="cem" name="cem" value="0" />
					  <!--<div class="value-button" id="increase" onclick="increaseValueCement()" value="Increase Value"></div>-->
                  </div>
				  <div class="col-4">
                                      <input type="button" class="button button1" style="background-color: #008CBA;" onclick="decreaseValueCement()" value="-">
				  </div>
              </div>
              <script>
                            function increaseValueCement() {
                              var value = parseInt(document.getElementById('cem').value, 0);
                              value = isNaN(value) ? 0 : value;
                              value++;
                              var price=13.50*value;
                              document.getElementById('cem').value = value;
                              document.getElementById('cem_price').value = price;
                            }
                            
                        function decreaseValueCement() {
                            var value = parseInt(document.getElementById('cem').value, 0);
                            value = isNaN(value) ? 0 : value;
                            value--;
                            if(value<1)
                            {
                                value=0;
                            }
                            var price=13.50*value;
                            document.getElementById('cem').value = value;
                            
                            document.getElementById('cem_price').value = price;
                          }
            </script>
              <div class="col-4">
                   <p></p>
                   <input type="text" id="cem_price" value="0">
                  <!--<h6 class="mob-text">$13.50</h6>-->
              </div>
          </div>
      </div>
  </form>
  <div class="row justify-content-center">
      <div class="col-lg-12">
          <div class="card">
              <div class="row">
                  <div class="col-lg-3 radio-group">
                      <div class="row d-flex px-3 radio"> <img class="pay" src="https://i.imgur.com/WIAP9Ku.jpg">
                          <p class="my-auto">Credit Card</p>
                      </div>
                      <div class="row d-flex px-3 radio gray"> <img class="pay" src="https://i.imgur.com/OdxcctP.jpg">
                          <p class="my-auto">Debit Card</p>
                      </div>
                      <div class="row d-flex px-3 radio gray mb-3"> <img class="pay" src="https://i.imgur.com/cMk1MtK.jpg">
                          <p class="my-auto">PayPal</p>
                      </div>
                  </div>
                  <div class="col-lg-5">
                      <div class="row px-2">
                          <div class="form-group col-md-6"> <label class="form-control-label">Name on Card</label> <input type="text" id="cname" name="cname" placeholder="Johnny Doe"> </div>
                          <div class="form-group col-md-6"> <label class="form-control-label">Card Number</label> <input type="text" id="cnum" name="cnum" placeholder="1111 2222 3333 4444"> </div>
                      </div>
                      <div class="row px-2">
                          <div class="form-group col-md-6"> <label class="form-control-label">Expiration Date</label> <input type="text" id="exp" name="exp" placeholder="MM/YYYY"> </div>
                          <div class="form-group col-md-6"> <label class="form-control-label">CVV</label> <input type="text" id="cvv" name="cvv" placeholder="***"> </div>
                      </div>
                  </div>
                  <div class="col-lg-4 mt-2">
                      <div class="row d-flex justify-content-between px-4">
                          <p class="mb-1 text-left">Subtotal</p>
                          <h6 class="mb-1 text-right">$23.49</h6>
                      </div>
                      <div class="row d-flex justify-content-between px-4">
                          <p class="mb-1 text-left">Shipping</p>
                          <h6 class="mb-1 text-right">$2.99</h6>
                      </div>
                      <div class="row d-flex justify-content-between px-4" id="tax">
                          <p class="mb-1 text-left">Total (tax included)</p>
                          <h6 class="mb-1 text-right">$26.48</h6>
                      </div> <button class="btn-block btn-blue"> <span> <span id="checkout">Checkout</span> <span id="check-amt">$26.48</span> </span> </button>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    
  </body>
</html>