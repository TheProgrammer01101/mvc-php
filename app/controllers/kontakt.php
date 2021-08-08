<?php

Class Kontakt extends Controller{
    function index() {
        $data['page_title'] = "Kontakt";
        $this->view("minima/kontakt");
    }
}