<?php
class Controller {
    protected $load;
    protected $input;
    protected $shopping_cart;
    function __construct(){
        $this->load = new Kernel();
        $this->input = new Form();
        $this->shopping_cart = new Shopping_cart();
    }
}