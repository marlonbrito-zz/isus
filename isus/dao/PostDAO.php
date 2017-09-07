<?php
/**
 * Created by PhpStorm.
 * User: marlon
 * Date: 15/08/2017
 * Time: 19:31
 */
include_once('model/Post.php');

class PostDAO {

    private $conn;

    public function __construct() {
        $registry = Registry::getInstance();
        $this->conn = $registry->get('Connection');
    }

    public function insert(Post $post) {
        $this->conn->beginTransaction();

        try {
            $stmt = $this->conn->prepare(
                'INSERT INTO login (user, pass, email) VALUES (:user, :pass, :email)'
            );

            $stmt->bindValue(':title', $post->getUser());
            $stmt->bindValue(':content', $post->getEmail());
            $stmt->execute();

            $this->conn->commit();
        }
        catch(Exception $e) {
            $this->conn->rollback();
        }
    }

    public function getAll() {
        $statement = $this->conn->query(
            'SELECT * FROM login'
        );

        return $this->processResults($statement);
    }

    private function processResults($statement) {
        $results = array();

        if($statement) {
            while($row = $statement->fetch(PDO::FETCH_OBJ)) {
                $post = new Post();

                $post->setId($row->id);
                $post->setUser($row->user);
                $post->setEmail($row->email);

                $results[] = $post;
            }
        }

        return $results;
    }

}
?>