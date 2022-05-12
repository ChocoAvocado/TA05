<?php

class Login_model {
    private $dbh; // database handler
    private $stmt;

    public function getUser()
    {
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}