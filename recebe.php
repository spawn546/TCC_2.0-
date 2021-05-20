<?php include_once"conexao.php";?>
<html>
<body>
<?php 
$senha = $_POST["senha"];
$email = $_POST["email"];
$usoario = $_POST["usoario"];

$conn = mysqli_connect($servidor,$dbusuario,$dbsenha,$dbname);
mysqli_select_db($conn,'$dbname');
$sql = "INSERT INTO tb_usoario (nm_senha,nm_email,nm_usoario) VALUES ('$senha', '$email','$usoario')";
if (mysqli_query($conn, $sql)) {
echo "<script>alert('Salvei seus dados !'); window.location = 'index.php';</script>";
}else{
 echo "Deu errro: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

//header("location: login.php");
?>
</body>
</html>