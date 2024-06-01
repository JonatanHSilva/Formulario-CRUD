<link rel="stylesheet" href="styletable.css">
<?php
include('connectDB.php');

$comeca = $_GET['pag'];

$sql = "SELECT * FROM evento LIMIT $comeca, 3";
$result = $conn->query($sql);
 
if ($result->num_rows == 0){
    echo "<h2>Sem eventos cadastrados!!!</h2><br>";
}
if ($result->num_rows > 0) {

    echo "<table>";

    while($row = $result->fetch_assoc()) {
        $id_evento = $row['id_evento'];
        $nomeEvento = $row['nome_evento'];
        $descEvento = $row['descricao_evento'];
        $dataInic = $row['data_inicio'];
        $bannerEven = $row['banner_evento'];
     
        echo "<a href='detalhes.php?id=$id_evento'> $nomeEvento<br></a> $descEvento<br> $dataInic <br> $bannerEven";
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
            input, button {
                float: none;
                margin-left: 820px;      
            }
                     
        </style>
        <script type="module">
            let button = document.getElementById("proximo");
            if(<?php echo $result->num_rows?> < 3){
                button.remove();
            }
        </script>
    </head>
    <body>
        <div>
            <form id="form" action="formDB.html" >
                <p><input type="submit" value="Inserir"></p>
            </form>
            <form id="detalhes" action="selectDB.php" method="GET">
                <p>
                    <button type="submit" id="proximo">Próximo</button>
                    <input type="hidden" name="pag" value=<?php echo $comeca + 3?>>
                </p>
            </form>
        </div>
    </body>
</html>