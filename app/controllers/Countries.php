<?php
class Country extends Controller {
    public function __construct() {
        $this->countryModel = $this->model('Countries');
    }

    public function index() {
        $countryData = $this->countryModel->getCountries();
        $data = [
            'title' => 'Home page',
            'countryData' => $countryData
        ];

        $this->view('Countries/index', $data);
    }
}
