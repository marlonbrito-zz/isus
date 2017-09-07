<?php
/**
 * Created by PhpStorm.
 * User: marlon
 * Date: 15/08/2017
 * Time: 22:29
 */
session_start();
$user = $_POST["user"];
$pass = $_POST["pass"];

$form = $_POST["button"];
$ano_atual = date("Y");

try {
    $pdo = new PDO('mysql:host=localhost;dbname=isus', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    switch ($form) {
        case 'cadastrar':
            $nome = $_POST['nome'];
            $sus = $_POST['sus'];
            $data_nasc = $_POST['data'];
            $email = $_POST["email"];
            $ha = $_POST['ha'];
            $dia = $_POST['dia'];
            $rua = $_POST['rua'];
            $gest = $_POST['gest'];
            $mental = $_POST['mental'];
            $acamado = $_POST['acamado'];
            $remedio = $_POST['remedio'];
            $dum = $_POST['dum'];
            $dpp = $_POST['dpp'];
            $ai = $_POST['ai'];
            $obs = $_POST['obs'];
            $data = $data_nasc;
            $partes = explode("/", $data);
            $dia = $partes[0];
            $mes = $partes[1];
            $ano = $partes[2];
            $idade = $ano - $ano_atual;
            $stmt = $pdo->prepare("INSERT INTO usuarios ( nome, data_nasc, sus, ha, dia, gest, idade, mental, acamado, remedio, rua, obs, sexo, dum, dpp, ai) VALUES (:nome, :data_nasc, :sus, :ha, :dia, :gest, :idade, :mental, :acamado, :remedio, :rua, :obs, :sexo, :dum, :dpp, :ai)");
            $stmt->bindValue(':nome', $nome);
            $stmt->bindValue(':data_nasc', $data_nasc);
            $stmt->bindValue(':sus', $sus);
            $stmt->bindValue(':ha', $ha);
            $stmt->bindValue(':dia', $dia);
            $stmt->bindValue(':gest', $gest);
            $stmt->bindValue(':idade', $idade);
            $stmt->bindValue(':mental', $mental);
            $stmt->bindValue(':acamado', $acamado);
            $stmt->bindValue(':remedio', $remedio);
            $stmt->bindValue(':rua', $rua);
            $stmt->bindValue(':obs', $obs);
            $stmt->bindValue(':sexo', $sexo);
            $stmt->bindValue(':dum', $dum);
            $stmt->bindValue(':dpp', $dpp);
            $stmt->bindValue(':ai', $ai);


            if (($stmt->execute()) && ($stmt->rowCount() == 1)) {

                return header("Location: index.php");
            } else {

                return "error";
            }

            break;
        case 'SELECIONAR':


            $sql = 'SELECT * FROM login WHERE user=:user AND pass=:pass';
            $sth = $sql->prepare($sql);
            $sth->bindValue(':user', $user);
            $sth->bindValue(':pass', $pass);
            $sth->execute();
            $data = $sth->fetchAll();

            print_r($data);
            if ($sth->rowCount() == 1) {
                //cria as sessões
                $_SESSION["user"] = $_POST['user'];
                $_SESSION["pass"] = $_POST['pass'];
                echo header("Location: index.php");
            } else {
                echo 'erro ' . $_POST['user'];
            }

            break;

        case 'ADD':

            break;
    }
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}
?>