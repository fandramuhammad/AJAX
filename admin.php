<?php
session_start();
if(!isset($_SESSION['username'])){
    die("Oops Anda belum login");
}

if($_SESSION['level']!="admin"){
	header('location:manager.php');

}else{
	$username = $_SESSION['username']; 
	$level=$_SESSION['level'];
}
?>



<body style="background: url(Fan.jpg);">
	<title>Admin</title>
<div align='center'>
  <h1 style="text-align: center; font-family: sans-serif; color: red;">Welcome <?php echo $level;?> <b><?php echo $username;?></b><a href="logout.php"  onclick="javascript: return confirm('Wanna Log out?')"><b>Logout</b></a>
</div></h1> 
</head>
<body>
	<form id="form-container" class="form-container">
	<center>
	<a href="insert.php"><button>Insert</button></a>
	<h1 style="text-align: center; font-family: sans-serif; color: #A52A2A;">View Product</h1>
	<?php
		include 'connect.php';
		$getProduct = $connection ->query("SELECT * FROM product");
		while ($fetchProduct = $getProduct ->fetch_assoc()) {	
	?>

	<table style="display:inline-table;width:200px">
		<tr>
			<td><img style="width: 100%" src="<?=$fetchProduct["image"]?>"></td>
		</tr>
		<tr>
			<td>
				<strong><?=$fetchProduct["name"]?></strong><br>
				IDR <?=number_format($fetchProduct["price"])?>
				<br>
				<br>
				<?=$fetchProduct["description"]?>
				<br>

			</td>
		</tr>
		<tr>
			<td>
				<a href="update.php?id=<?=$fetchProduct["id"]?>"><button>Update</button></a>
				 <a href="delete.php?id=<?=$fetchProduct["id"]?>" onclick="javascript: return confirm('Sure do you want to delete this product?')"><button>Delete</button></a>
			</td>
		</tr>
	</table>


	<?php
		}
	?>

</center>

<center>
       <div class="menu">
     
			<ul>
		
        <label for="input">Wikipedia :</label>
        <input type="text" id="input" value="">
        <button id="submit-btn">submit</button>
					
			</ul>
			
		</div>
</center>

	  </header> 
	<center>
	<li class="wikipedia-container">
        <h3 id="wikipedia-header">Berikut merupakan link untuk redirect ke wikipedia</h3>
        <ul id="wikipedia-links">Cari apa?</ul>
    </li>
      </body>
	  <script src="jquery.min.js"></script>
    <script src="script.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>   

