
<!-- header and nav of the page modifiable-->
<?php include('../APP/views/home/page_Parts/header.php') ?>

 <!-- Page Content -->
 <div class="container">

   <!-- modals of the page modifiable -->
   <!-- modal Sign In -->
  <?php include('../APP/views/home/modals/sign_In.php') ?>
    <!-- modal Log In -->
  <?php include('../APP/views/home/modals/log_In.php') ?>

  <!-- body of the page -->
     <div class="row">

       <!-- for the space page -->
       <br>
       <br>
       <br>
         <div class="col-md-3">
             <p class="lead">Image perfil??</p>
             <div class="list-group">
      <img class="img-responsive" src="http://placehold.it/250x300" alt="">
             </div>
         </div>

         <div class="col-md-9">

           <!-- textarea and button -->
           <h3>Comenta!!!</h3>
           <textarea name="comment" rows="6" cols="135" placeholder="Comenta!!!"></textarea>
           <button type="button" class="btn btn-success" name="button">Comentar</button>


             <div class="thumbnail">
                 <img class="img-responsive" src="http://placehold.it/800x300" alt="">
                 <div class="caption-full">
                     <h4 class="pull-right">$24.99</h4>
                     <h4><a href="#">Product Name</a>
                     </h4>
                     <p>See more snippets like these online store reviews at <a target="_blank" href="http://bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
                     <p>Want to make these reviews work? Check out
                         <strong><a href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">this building a review system tutorial</a>
                         </strong>over at maxoffsky.com!</p>
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                 </div>
                 <div class="ratings">
                     <p class="pull-right">3 reviews</p>
                     <p>
                         <span class="glyphicon glyphicon-star"></span>
                         <span class="glyphicon glyphicon-star"></span>
                         <span class="glyphicon glyphicon-star"></span>
                         <span class="glyphicon glyphicon-star"></span>
                         <span class="glyphicon glyphicon-star-empty"></span>
                         4.0 stars
                     </p>
                 </div>
             </div>

             <div class="well">

                 <div class="text-right">
                     <a class="btn btn-success">Leave a Review</a>
                 </div>

                 <hr>

                 <div class="row">
                     <div class="col-md-12">
                         <span class="glyphicon glyphicon-star"></span>
                         <span class="glyphicon glyphicon-star"></span>
                         <span class="glyphicon glyphicon-star"></span>
                         <span class="glyphicon glyphicon-star"></span>
                         <span class="glyphicon glyphicon-star-empty"></span>
                         Anonymous
                         <span class="pull-right">10 days ago</span>
                         <p>This product was great in terms of quality. I would definitely buy another!</p>
                     </div>
                 </div>

                 <hr>

                 <div class="row">
                     <div class="col-md-12">
                         <span class="glyphicon glyphicon-star"></span>
                         <span class="glyphicon glyphicon-star"></span>
                         <span class="glyphicon glyphicon-star"></span>
                         <span class="glyphicon glyphicon-star"></span>
                         <span class="glyphicon glyphicon-star-empty"></span>
                         Anonymous
                         <span class="pull-right">12 days ago</span>
                         <p>I've alredy ordered another one!</p>
                     </div>
                 </div>

                 <hr>

                 <div class="row">
                     <div class="col-md-12">
                         <span class="glyphicon glyphicon-star"></span>
                         <span class="glyphicon glyphicon-star"></span>
                         <span class="glyphicon glyphicon-star"></span>
                         <span class="glyphicon glyphicon-star"></span>
                         <span class="glyphicon glyphicon-star-empty"></span>
                         Anonymous
                         <span class="pull-right">15 days ago</span>
                         <p>I've seen some better than this, but not at this price. I definitely recommend this item.</p>
                     </div>
                 </div>

             </div>

         </div>

     </div>

 </div>
 <!-- /.container -->
 <!-- End of the body -->

 <!-- footer of the page modifiable -->
 <?php include('../APP/views/home/page_Parts/footer.php') ?>