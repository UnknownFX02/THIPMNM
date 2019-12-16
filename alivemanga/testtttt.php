<?php 
if(isset($_GET['btn_submit']))
{
  //print_r($_GET);
  foreach ($_GET['test'] as $key => $value) {
    echo "KEY = ".$key.", value = ".$value."\n";
  }
}
//$str="1,2,3,4,5";
//print_r(explode(',',$str));

?>
<form action="">
  <select name="test[]" size="4" multiple>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
  </select>
  <br><br>
  <input type="submit" name="btn_submit">
</form>