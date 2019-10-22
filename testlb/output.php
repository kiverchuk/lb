<?
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Output</title>
</head>
<body>
<table class="table">
	<thead class="thead-light">
    <tr>
      <th scope="col">index</th>
      <th scope="col">Number</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
	<?
	include("menu.php");
	if( isset($_GET["del"]) and !empty($_GET["del"]) )
		if( count($_SESSION["number"]) >= $_GET["del"] )
			unset($_SESSION["number"][$_GET["del"]]);
	if (empty($_SESSION["number"])) {
		?><tr><td scope="col">Nu sunt numere</td></tr><?
	}else{
		if( isset($_GET["index"]) and !empty($_GET["index"]) ){
			if( count($_SESSION["number"]) >= $_GET["index"] )
			{
				?><tr>
					<td scope="col"><?=$_GET["index"]?></td>
					<td scope="col"><?=$_SESSION["number"][$_GET["index"]]?></td>
					<td scope="col"><a href="output.php?del=<?=$_GET["index"]?>">-</a></td>

				</tr><?
			}else{
				?><tr><td scope="col">nu exista element cu asha index</td></tr><?
			}
		}else{
			//	rsort($_SESSION["number"]);
			foreach ($_SESSION["number"] as $index => $value) {
				?>
				<tr>
					<td scope="col"><?=$index?></td>
					<td scope="col"><?=$value?></td>
					<td scope="col"><a href="output.php?del=<?=$index?>">-</a></td>

				</tr>
				<?
			}
		}
	}
	?>
</table>
</body>
</html>