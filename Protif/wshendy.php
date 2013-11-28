<?php
/*
Nama Anggota Kelompok : 
Ahmad Faiz Nasshor / 18210023
Ikhawanul Hakim / 18210026
*/
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Well, here it is</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/pure-min.css">
</head>
<body style="background-color:#49739d">
<div id="content">
<h1 style="color:white;">WS Hendy</h1>
<button style="margin-left:70%; margin-top:-40%;" type="submit" class="pure-button" value="Page" onclick="location.href='index.php'">Back</button>
<br><br><br>

<?php
    $query= $_SERVER['HTTP_HOST'];
?>
<iframe style="width:500px; height:900px;" src="http://<?php echo $query;?>/tugas-2-pemrograman-integratif/tugas2.php"></iframe>
</div>
</body>
</html>