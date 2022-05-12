<?php

class Peminjaman_model{

    #belum fix

        #private $table = 'pinjam';
        #private $db;
        
        public function __construct()
        {
            $this->db = new Database;
        }

        public function getAllPeminjaman()
        {
            $this->db->query('SELECT * FROM ' . $this->table);
            return $this->db->resultSet();
        }
}