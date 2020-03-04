<?php

use Carbon\Carbon;

class Home extends KM_Controller {
    public function index()
    {
        // kapcsolt táblák használata:
        /* 
        $vendegInfo     = VendegModel::find($vendeg_id)->VendegInfo;
        $vendegCelok    = VendegModel::find($vendeg_id)->VendegCelok()->orderBy('teljesitett', 'ASC')->get(); */
        $title = "Home";
        $this->view('_template/head', ['title' => $title]);
        $this->view('home/index');
        $this->view('_template/footer');
    }
}