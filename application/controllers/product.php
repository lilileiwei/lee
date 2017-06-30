<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Controller {

    public function __construct()
    {//加载product_model模块；
        parent::__construct();
        $this->load->model('products_model');
    }

    public function index()
    {
        $this->load->view('index');
    }
    public function get_products(){
        $pageNo = $this->input->get('page');
        $cateId = $this->input->get('cateId');
        $hitId = $this->input->get('hitId');
        $search = array();
        if ($cateId && $cateId != 0) {
            $search['cate_id'] = $cateId;
        }else if($hitId && $hitId != 0){
            $search['hit'] = $hitId;
        }

        $per_page = 3;
        $total_count =  $this->products_model->get_total_count();
//        var_dump( $total_count);
//        die();
        $total_page = ceil($total_count / $per_page);
        $products = $this->products_model->get_products($per_page,($pageNo-1)*$per_page,$search);
        if($pageNo == $total_page){
            $data = array(
                'products' => $products,
                'isEnd' => true//标识数据是否已经到最后一条，若为true，则表示已经是最后一条；
            );
        }else{
            $data = array(
                'products' => $products,
                'isEnd' => false//标识数据是否已经是最后一条，若为false，则表示未到最后一条；
            );
        }
//        if($cateId && $cateId != 0){
//            $data = array(
//                'products' => $products,
//                'isEnd' => true
//            );
//        }
        echo json_encode($data);
    }

    public function about(){
        $this->load->view('about');
    }
    public function details(){
        $this->load->view('details');
    }
    public function shopping_cart(){
        $this->load->view('shopping_cart');
    }
    public function history(){
        $this->load->view('history');
    }
    public function personal(){
        $this->load->view('personal');
    }
    public  function  confirm(){
        $this->load->view('confirm');
    }
    public function add_cart(){
        $productInfo = $this->input->get('productInfo');
        $row =  $this->products_model->add_cart();
    }
/*杨修平*/
    public function detail(){
        $productid  = $this->uri->segment(3);//获取参数值
        $data['detail'] = $this -> products_model -> get_detail($productid);
        $this -> load -> view('details',$data);
    }

    public function cart(){
        $loginedUser = $this -> session -> userdata('loginedUser');
        $this -> load -> view('shopping_cart');
    }

}

