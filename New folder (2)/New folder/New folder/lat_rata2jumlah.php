<form method='get' action=''>
<input type='text' name='coba' size=5>
<input type='submit' name='tampil' value='tampil'>
</form>
<?php
if(isset($_GET['tampil'])){
$a=$_GET['coba'];
//echo $_GET['coba'];
/*for($aw=1; $aw<=$a ;$aw++)
{
echo "$aw<br>";
}  */
if($a<=100)
{
$i=1;
//echo "Angka valid";
for($i=1; $i<=$a ;$i++)
{
echo "$i<br>";
}



}
else{
echo "Angka tidak valid <br>";
echo "Angka yangg vali adalah 1 sampai 10...!!!";
}
}
?>


