
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

           <!-- start bootstrap default -->

           <!-- textarea and button -->
           <h3>Comenta!!!</h3>
           <textarea name="comment" rows="6" cols="135" placeholder="Comenta!!!"></textarea>
           <button type="button" class="btn btn-success" name="button" >Comentar</button></p>

             <div class="thumbnail">
                 <img class="img-responsive" src="http://placehold.it/800x300" alt="">
                 <div class="caption-full">
                 </div>
             </div>
         </div>
         <!-- col 9 -->
         <!-- end bootstrap default -->

         <!-- only left a query inserting the comment and a loop for get the comment -->
         <div class="container">
         <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
         	<div class="row">
          </div>
         </div>

         	<!-- principal content -->
             <div class="comments-container">

               <!-- ul for comments -->
         		<ul id="comments-list" class="comments-list">
              <li>

              <?php $users = new users(); $users->getComments();?>

                <!-- comment princial end -->

                </li>
         		</ul>
         	</div>



 <!-- /.container -->
 <!-- End of the body -->

 <!-- footer of the page modifiable -->
 <?php include('../APP/views/home/page_Parts/footer.php') ?>
