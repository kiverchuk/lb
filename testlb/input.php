<?
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Input</title>
</head>
<body>
<?
include("menu.php");
if (!empty($_POST["number"]) and isset($_POST["number"])){
	$_SESSION["number"][] = $_POST["number"];
	?>
	<h1>Adaugare Succes</h1>
	<?
}else{
?>
	<form method="post">
		<input type="number" name="number">
		<button type="submit">Submit</button>		
	</form>
<? } ?>
</html>
</body>