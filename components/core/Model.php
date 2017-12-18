<?php

namespace components\core;


use models\Customer;

class Model {

    protected $db;
    private $header;
    private $footer;
    private $view;
    public $error;
    public $customer;

    public function getCustomers() {
        if ($this->customer === null) {
            $this->customer = new Customer();
        }
        return $this->customer;
    }

    public function setHeaderLayout($header){
        $this->header=LAYOUTS.$header.'.php';
    }
    public function setFooterLayout($footer){
       $this->footer=LAYOUTS.$footer.'.php';
    }
    public function setView($view){
        $this->view=VIEWS.$view.'.php';
    }

    /**
     * @return mixed
     */
    public function getView() {
        return $this->view;
    }

    /**
     * @return mixed
     */
    public function getFooter() {
        return $this->footer;
    }

    /**
     * @return mixed
     */
    public function getHeader() {
        return $this->header;
    }
}