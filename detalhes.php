<link rel="stylesheet" href="styletable.css">
<?php
include('connectDB.php');

$id_evento = $_GET['id'];
$sql = "SELECT * FROM evento WHERE id_evento = $id_evento";
$result = $conn->query($sql);
if ($result->num_rows == 0){
    echo "<h2>Sem eventos cadastrados!!!</h2><br>";
}
if ($result->num_rows > 0) {
    echo "<hr><table><tr><td>ID</td><td>Nome</td><td>Descrição</td><td>Data Início</td><td>Data Fim</td><td>Tipo</td><td>Banner</td><td>Possui Wi-fi</td><td>Possui Estacionamento</td><td>Possui Bebida</td>";

    while($row = $result->fetch_assoc()) {
        $id_evento = $row['id_evento'];
        $nomeEvento = $row['nome_evento'];
        $descEvento = $row['descricao_evento'];
        $dataInic = $row['data_inicio'];
        $dataEnc = $row['data_fim'];
        $tipoEven = $row['tipo_evento'];
        $bannerEven = $row['banner_evento'];
        $possuiWifi = $row['possui_wifi'];
        $possuiEst = $row['possui_estacionamento'];
        $possuiBeb = $row['possui_bebida'];
     
        echo "<tr><td>$id_evento</td><td>$nomeEvento</td><td>$descEvento</td><td>$dataInic</td><td>$dataEnc</td><td>$tipoEven</td><td>$bannerEven</td><td>$possuiWifi</td><td>$possuiEst</td><td>$possuiBeb</td>";
    }

    echo "</table>";
}

$conn->close();
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Eventos</title>
        <style>
            input {float: none;
                   margin-left: 820px;      
            }
                     
        </style>
    </head>
    <body>
        <div>
            <form id="form" action="formDB.html" >
                <p><input type="submit" value="Inserir"></p>
            </form>
        </div>
    </body>
</html>