<?php
include 'usersdata/data.php';

include 'header.php' ;

?>

<?php if($log == false): ?>
    <form method ="post"   action="<?php echo $_SERVER['PHP_SELF'];?>"  >
    <div class="mb-3">
 <center> <label  class="form-label"><h3>Enter your IDnumber</h3></label></center>
  <input type="text" class="form-control"   name="name"  placeholder="Enter your number">
</div>
         <center> <input type="submit" name="submit" value="submit"   class="btn btn-primary"></center>
</form>
<?php endif;?>

<?php
  if(isset($_POST['submit'])):
   $log =true;
   $name =$_POST['name'];

   endif;
?>
<?php
    if($log == true):
    if(array_key_exists($name , $list)){
 
?>
   <center><div class="card" style="width: 18rem;">
  <img src="img.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h4 class="card-title">   <h4><b><?='welcome '.$list[$name];?></b></h4>
    <p class="card-text"> <?='your key numbr is '. $name;?> </p>
    
  </div>
</div></center>
<?php 
} else{
    echo '<div class="alert alert-danger" role="alert">
    wrong name ,please repeat!
  </div>';
}
endif;
?>


<?php include 'footer.php' ;

?>