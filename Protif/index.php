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
	<title>Hey Dude, Look for Something ?</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/pure-min.css">
</head>
<body style="background-color:#49739d">

		<div class="pure-menu pure-menu-open pure-menu-horizontal" id="headernya">
		    <ul>
		        <li data-value ="buku" onclick="gantiKategori('buku')"><a href="#">Buku</a></li>
		        <li data-value ="mahasiswa" onclick="gantiKategori('mahasiswa')"><a href="#">Mahasiswa</a></li>
		        <li data-value ="makanan" onclick="gantiKategori('makanan')"><a href="#" >Makanan</a></li>
		        <li><a href="wsteman.php" >WS Andi</a></li>
		        <li><a href="wshendy.php" >WS Hendy</a></li>
		    </ul>
		</div>
	<div id="content">
		<div id="textbuku">
			<h1> Hey Dude, Looking for Something ? </h1>
			<h3 ><a href="converter/mencari/daftarbuku.xml" style="color:white">Book List</a></h3>
		</div>
		<div id="textmahasiswa" style="display:none">
			<h1> Hey Dude, Looking for Someone ? </h1>
			<h3 ><a href="access/BernadetteVina/myxmlfile.xml" style="color:white">Student List</a></h3>
		</div>
		<div id="textmakanan" style="display:none">
			<h1> Hey Dude, Looking for Food ? </h1>
			<h3 ><a href="access/BintangAdinandra/menu.xml" style="color:white">Menu</a></h3>
		</div>
		<form class="pure-form" action="javascript:search()">
	    	<input id="keyword" type="text" placeholder="search here" class="pure-input-rounded" required>
	    	<button type="submit" class="pure-button">Go</button>
		</form>
	</div>
	<?php include 'footer.php' ?>
</body>
</html>

<script type="text/javascript">
	var kategori="buku";
	function gantiKategori(selectedKategori){
		kategori = selectedKategori;
		console.log(kategori);
		
		if(kategori == "makanan"){
			document.getElementById("textbuku").style.display='none';
			document.getElementById("textmahasiswa").style.display='none';
			document.getElementById("textmakanan").style.display='block';
		} if (kategori == "mahasiswa"){
			document.getElementById("textbuku").style.display='none';
			document.getElementById("textmahasiswa").style.display='block';
			document.getElementById("textmakanan").style.display='none';
		} if (kategori == "buku"){
			document.getElementById("textbuku").style.display='block';
			document.getElementById("textmahasiswa").style.display='none';
			document.getElementById("textmakanan").style.display='none';
		}

	};

	function search() {
		var loc = window.location.pathname;
		var dir = loc.substring(0, loc.lastIndexOf('/'));
		var input = document.getElementById("keyword").value;
		window.location = dir + "/tampilkan.php?keyword=" + input + "&kategori=" + kategori;
	};


</script>
