<form method='get' action=''>
<input type='text' name='coba' size=5>
<input type='submit' name='tampil' value='tampil'>
</form>
<?php
if(isset($_GET['tampil'])){
$a=$_GET['coba'];
//echo $_GET['coba'];
for($aw=1; $aw<=$a ;$aw++)
{
echo "$aw<br>";
}
}
?>


