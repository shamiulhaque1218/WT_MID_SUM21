<?php include 'main_header.php';  
  include 'controllers/UserControllers.php';
?>

       <!--login start-->
<div class="center-login"> 
    <h1 class="text text-center">Login</h1>
    <h5 class="text-danger"><?php echo $err_db?> </h5>
    <form action="" method="post"  class="form-horizontal form-material">
    <div class="form-group"> 
            <h4 class="text">User Name </h4>
            <input type="text" name="uname"  value="<?php echo $uname; ?>" class="form-control">
            <span class="text-danger"> <?php echo$err_uname; ?> </span>
    </div>
    <div class="form-group"> 
            <h4 class="text">Password </h4>
            <input type="password" name="password"  value="<?php echo $password; ?>" class="form-control">
            <span class="text-danger"> <?php echo$err_password; ?> </span>
    </div>
    <div class="form-group text-center">
    <input type="submit" name="btn_login" class="btn btn-success" value="Login" class="form-control">
    </div>
    <div class="form-group text-center">
        <a href="signup.php" >Not Registered Yet? Sign Up </a>
        </div>
 </div>
         <!--login end-->
 <?php include 'main_footer.php'; ?>
