<?php

class First extends Application {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        $record = $this->quotes->first();
        $this->data = array_merge($this->data, $record);
        $this->render();
    }

    function zzz() {
    	$this->data['pagebody'] = 'justone';    // this is the view we want shown
        $record = $this->quotes->first();
        $this->data = array_merge($this->data, $record);
        $this->render();
    }

    function gimme($num) {
    	$this->data['pagebody'] = 'justone';    // this is the view we want shown
        $record = $this->quotes->get($num);
        $this->data = array_merge($this->data, $record);
        $this->render();
    }
    
}