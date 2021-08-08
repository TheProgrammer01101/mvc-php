<?php

Class Speisekarte extends Controller{
    function index() {
        $data['page_title'] = "speisekarte";
        $this->view("minima/speisekarte");
    }
}