<?php
include_once 'backend/Database/database.php';
include_once 'backend/Model/contato.php';

$resultado = buscaUsuario($db);
/*for($i=0); $i < count($resultado); $i++{
    echo $resultado[$i]['nome_usuario'] . "<br>";
}
loop infinito
while(){
 
}
*/
// echo "<h1>Lista de Usuarios</h1>";
// echo "<ul>";
// foreach($resultado as $usuario){
//     echo"<li>" .$usuario['nome_usuario'] ." - ".  $usuario['email_usuario'] . "</li>";
// }
// echo "</ul>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <main>
        <h1>Lista de Contatos</h1>
        <table class = "table table-striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Email</th>
                    <th>Mensagem</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($resultado as $contato): ?>
                <tr>    <!-- sanitizar os dados -->
                    <td><?php echo htmlspecialchars($contato['nome_contato']); ?></td>
                    <td><?php echo htmlspecialchars($contato['email_contato']); ?></td>
                    <td><?php echo htmlspecialchars($contato['telefone_contato']); ?></td>
                    <td><?php echo htmlspecialchars($contato['mensagem_contato']); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
</body>
</html>