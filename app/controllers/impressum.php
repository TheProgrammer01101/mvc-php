<?php

Class Impressum extends Controller{
    function index() {
        $data['page_title'] = "impressum";
        $this->view("minima/impressum");
    }
}