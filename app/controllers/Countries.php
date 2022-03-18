<?php
class Countries extends Controller {
    public function __construct() {
        $this->countryModel = $this->model('Country');
    }

    public function index() {
        $countryData = $this->countryModel->getCountries();
        $data = [
            'title' => 'Home page',
            'countryData' => $countryData
        ];

        $this->view('countries/index', $data);
    }
}
