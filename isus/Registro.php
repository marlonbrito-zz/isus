<?php
/**
 * Created by PhpStorm.
 * User: marlon
 * Date: 15/08/2017
 * Time: 19:28
 */
include_once('Registry.php');
include_once('dao/PostDAO.php');
include_once('model/Post.php');
$user = $_POST["user"];
$pass = $_POST["pass"];
$email = $_POST["email"];

// Instanciar uma conexão com PDO
$conn = new PDO(
    'mysql:host=localhost;port=3306;dbname=isus', 'root', ''
);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Armazenar essa instância no Registry
$registry = Registry::getInstance();
$registry->set('Connection', $conn);

// Instanciar um novo Post e setar informações
$cadastro = new Post();
$cadastro->setUser($user);
$cadastro->setEmail($pass);



// Instanciar o DAO e trabalhar com os métodos
$postDAO = new PostDAO();
$postDAO->insert($cadastro);


// Resgatar todos os registros e iterar
$results = $postDAO->getAll();
foreach($results as $post) {
    echo $post->getUser();
    $user=$post->getUser();
    $email=$post->getEmail();
    echo $user . "!!!!!!!!!" ;
}

echo $user. " ";
echo $email." ". $pass;

?>