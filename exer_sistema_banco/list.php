<?php
include_once("connect.php");

$sql = "SELECT telefone, nome_cliente, id FROM `cliente` ORDER BY id DESC LIMIT 10 ";
$stmt = $conn->prepare($sql);
$stmt->execute();
$resultado = $stmt->get_result();
$dados = "";
while ($row = $resultado->fetch_assoc()) {
    extract($row);
    $dados .= "<tr>
                <td>$id</td>
                <td>$nome_cliente</td>
                <td> <button class='btn btn-outline-' value='Visualizar'> </td>
            </tr>
    ";
} echo $dados;