<?php


class Partners extends Controller
{

    /**
     * Partners constructor.
     */
    public function __construct()
    {
        $this->partnerModel = $this->model('Partner');
    }

    public function index()
    {
        // echo 'index method is loaded<br>';
        $partners = $this->partnerModel->getPatners();
        $data = array(
            'title' => 'Koostööpartnerid',
            'partners' => $partners
        );
        $this->view('partners/index', $data);
    }

    public function show($id)
    {
        $partner = $this->partnerModel->getPartner($id);
        $partner_activity = $this->partnerModel->getPartnerActivity($id);
        $data = array(
            'partner' => $partner,
            'activity' => $partner_activity
        );
        $this->view('partners/show', $data);
    }
}