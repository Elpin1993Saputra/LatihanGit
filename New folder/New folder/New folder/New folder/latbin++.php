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
$kolum=1;
$kolom=$jumlah+1-$baris;
while($kolum<=$kolom)
{
echo "a"; #"&nbsp;&nbsp;";
$kolum++;
}
echo "#";
$add=2*$baris-1;
$kolomadd=2;
while($kolomadd<=$add)
{
echo "$";
$kolomadd++;
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







