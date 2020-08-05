<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="css/login.css">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title></title>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
</head>
  <body>
    
    
    <div class="container bg" style="background-image:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)), url('images/backImg.jpg');">
       <div class="row">
        <div class="col-sm">

        </div>
       <div class="col-sm " >
         <form class="contact-form" action="validation.php" method="post">
                       <div class="row">
                           <div class="col-sm register-left ">
                               <div id="legend" >
                                 <legend class="">Log In</legend>
                             </div>
                               <div class="form-group">
                                  <label for="uname">User name:</label>
                                   <input type="text" class="form-control" placeholder="user name" name="uname" required="required">
                               </div>
                               
                               <div class="form-group">
                                  <label for="password">Password:</label>
                                   <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                               </div>
                              
                           
                               <div class="form-group">
                                   <input type="submit" class="btn btn-primary btn-block" name="submit">
                               </div>
                           </div>
                       </div>
                   </form>
                  <p style="color:white"><b><i>Not yet a MEmber?... <a href="http://localhost/tanjum/reg.php">Registration</a></i></b></p>   
         
       </div>
       <div class="col-sm">

       </div>
   </div>
</div>




  </body>
</html>

