<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Veiculos</h1>

    <table>
        <thead>
            <tr>
                <th>Placa</th>
                <th>Cor</th>
                <th>Modelo</th>
                <th>Ano</th>
                <th>Chassi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($veiculos as $v){
                    echo "<tr>". 
                            "<td>".$v->placa."<td>".
                            "<td>".$v->cor."<td>".
                            "<td>".$v->modelo."<td>".
                            "<td>".$v->ano."<td>".
                            "<td>".$v->chassi."<td>".
                        "<tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>