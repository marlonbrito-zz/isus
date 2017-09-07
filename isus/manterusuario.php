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

$form=$_POST["button"];


    try {
        $pdo = new PDO('mysql:host=localhost;dbname=isus', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        switch ($form){
            case 'REGISTER':
                $email = $_POST["email"];
        $stmt = $pdo->prepare("INSERT INTO login ( user, pass, email) VALUES (:user, :pass, :email)");
        $stmt->bindValue(':user', $user);
        $stmt->bindValue(':pass', $pass);
        $stmt->bindValue(':email', $email);
        $_session["user"] = $user;
        if (($stmt->execute()) && ($stmt->rowCount() == 1)) {

            return header("Location: index.php");
        } else {

            return "error";
        }

        break;
            case 'LOGIN':


                $sql = 'SELECT * FROM login WHERE user=:user AND pass=:pass';
                $sth = $pdo->prepare($sql);
                $sth->bindValue(':user', $user);
                $sth->bindValue(':pass', $pass);
                $sth->execute();
                $data = $sth->fetchAll();

                print_r($data);
                if ( $sth->rowCount() == 1) {
                    //cria as sessões
                    $_SESSION["user"] = $_POST['user'];
                    $_SESSION["pass"] = $_POST['pass'];
                    echo header("Location: index.php");
                }else{
                    echo'erro '.$_POST['user'];
                }

        break;

            case 'ADD':

                break;
}
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
    ?>