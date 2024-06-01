<?php
include('connectDB.php');

$nomeEvento = $_POST['nomeEvento'];
$descEvento = $_POST['descEvento'];
$dataInic = $_POST['dataInic'];
$dataEncer = $_POST['dataEncer'];
$tipoEven = $_POST['tipoEven'];
$bannerEven = $_POST['bannerEven'];
$possuiWifi = $_POST['wifi'];
$possuiEst = $_POST['estacionamento'];
$possuiBeb = $_POST['bebida'];


$sql = "INSERT INTO evento (nome_evento, descricao_evento, data_inicio, data_fim, tipo_evento, banner_evento, possui_wifi, possui_estacionamento, possui_bebida) VALUES ('$nomeEvento', '$descEvento', '$dataInic', '$dataEncer', '$tipoEven', '$bannerEven', '$possuiWifi', '$possuiEst', '$possuiBeb');";

if ($conn->query($sql) === TRUE) {
    echo "Cadastro efetuado com sucesso!";
}
else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}


$conn->close();

header("Location: formDB.html");
exit();
?>