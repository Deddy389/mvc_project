<?php


class Cart extends Controller {

    function __construct(){
        parent:: __construct();
         $this->load->model('mymodel', 'model');
       
    }


    public function index(){
      
       $data['sql'] = $this->load->model->getdata("barang");
       $data["cart"] = $this->shopping_cart->display();
       $this->load->view('layouts/header');
       $this->load->view('pages/index',$data);
       $this->load->view('layouts/header');
    }

     public function edit($id){
       $data['sql'] = $this->load->model->where("blogs", $id);
       $this->load->view('layouts/header');
       $this->load->view('pages/edit',$data);
       $this->load->view('layouts/header');
    }

    public function add(){
       $this->load->view('layouts/header');
       $this->load->view('pages/add');
       $this->load->view('layouts/header');
    }

    public function insert(){
        $arr = [
            'title'=>$this->input->post('title'),
            'body'=>$this->input->post('body')
        ];

      $sql =  $this->load->model->insert($arr);
      if ($sql) {
          redirect(BASE_URL.'cart');
      }
    }

    public function update(){
      $data = [
        "name"=>$this->input->post("name"),
        "body"=>$this->input->post("body")
      ];
      $this->load->model->update($data, ["id"=>$this->input->post("id")]);
      redirect(BASE_URL.'cart');
    }

    public function delete($id){
         $this->load->model->del($id);
         redirect(BASE_URL.'cart');
    }

      public function cart_delete($id){
         $this->shopping_cart->delete($id);
         redirect(BASE_URL.'cart');
    }
   
   
    public function carts($id){
    //session_destroy();
      $prod = $this->load->model->where("barang", $id);
      $data = [
      "cart_id"=>$prod->id,
      "nama"=>$prod->nama,
      "harga"=>$prod->harga,
      "qty"=>1
      ];
      
      $this->shopping_cart->insert($data);
      
      redirect(BASE_URL.'cart');
    }


    
}