<?php


class Activity
{
    private $db;

    /**
     * Activity constructor.
     */
    public function __construct()
    {
        $this->db = new Database();
    }

    public function getActivities()
    {
        $this->db->query('SELECT * FROM activity');
        $result = $this->db->getAll();
        return $result;
    }
}