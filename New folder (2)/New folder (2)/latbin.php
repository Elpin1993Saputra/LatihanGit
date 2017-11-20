<form method='get' action=''>
<input type='text' name='coba' size=5>
<input type='submit' name='tampil' value='tampil'>
</form>
<?php
if(isset($_GET['tampil'])){
$jumlah=$_GET['coba'];
//echo $_GET['coba'];
/*for($aw=1; $aw<=$a ;$aw++)
{
echo "$aw<br>";
}  */
if($jumlah<=10)
{
$baris=1;
//echo "Angka valid";
while($baris<=$jumlah)
{
//echo "#";
$kolom=1;
while($kolom<=$baris)
{
echo "#";
$kolom++;
}
echo"<br>";
$baris++;
}


}
else{
echo "Angka tidak valid <br>";
echo "Angka yangg vali adalah 1 sampai 10...!!!";
}
}
?>


