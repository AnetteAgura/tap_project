<?php


class User
{
    private $db;

    /**
     * User constructor.
     * @param $db
     */
    public function __construct()
    {
        $this->db = new Database();
    }

    public function findUserByEmail($email)
    {
        $this->db->query('SELECT * FROM users WHERE email=:email');
        $this->db->bind('');
    }

}