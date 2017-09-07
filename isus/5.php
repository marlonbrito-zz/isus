<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Simple Responsive Admin</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet"/>
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet"/>
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet"/>
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'/>
</head>
<?php
/**
 * Created by PhpStorm.
 * User: marlon
 * Date: 01/09/2017
 * Time: 10:03
 */
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=isus', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = 'SELECT * FROM usuarios WHERE idade<:idade';
$sth = $pdo->prepare($sql);
$sth->bindValue(':idade', '6');
//$sth->bindValue(':user',  $_SESSION["user"]);
$sth->execute();
$data = $sth->fetchAll();

//print_r($data);
//if ($sth->rowCount() == 1) {
//cria as sessões
echo '<table class="table" style= "white-space: nowrap;">
                               <thead>
                                 <tr>
                                    <th>sus</th>
                                    <th>Nome</th>
                                    <th>Tratamento</th>
                                    <th>Rua</th>
                                    <th>Data de Nascimento</th>
                                </tr>';
if (!empty($data)) {
    $i = 0;
    foreach ($data as $dados) {
        $nome = $dados['nome'];
        $tratamento = $dados['remedio'];
        $sus = $dados['sus'];
        $rua = $dados['rua'];
        $datanasc = $dados['data_nasc'];
        echo " 
                              <tbody>
                                <tr class=\"success\">
                                    <td>$sus</td>
                                    <td>$nome</td>
                                    <td>$tratamento</td>
                                    <td>$rua</td> 
                                    <td>$datanasc</td> ";
    }
}
echo '   </tbody>
                            </table>';
//} else {
//    echo 'erro ' . $_POST['user'];
//}