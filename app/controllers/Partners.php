<?php


class Partners extends Controller
{

    /**
     * Partners constructor.
     */
    public function __construct()
    {
        $this->pagesModel = $this->model('Partner');
    }

    public function index()
    {
        //echo 'index method is loaded<br>';
        $data = array(
            'title' => 'Koostööpartnerid'
        );
        $this->view('partners/index', $data);
    }
}