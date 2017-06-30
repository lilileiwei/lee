<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products_model extends CI_Model {
    public function get_total_count(){
        $sql = "select prod.*,img.img_src as prod_img from t_product prod,t_product_img img where prod.prod_id = img.prod_id";
        return $this->db->query($sql)->num_rows();
    }
    public function get_products($limit, $offset,$search){
        $sql = "select prod.*,img.img_src as prod_img from t_product prod,t_product_img img where prod.prod_id = img.prod_id limit $offset,$limit";
        if(isset($search['cate_id'])){
            $cateId = $search['cate_id'];
            $sql = "select prod.*,img.img_src as prod_img from t_product prod,t_product_img img where prod.prod_id = img.prod_id and prod.cate_id = $cateId";
        }else if(isset($search['hit'])){
            $hitId = $search['hit'];
            $sql = "select prod.*,img.img_src as prod_img from t_product prod,t_product_img img where prod.prod_id = img.prod_id and prod.hit = $hitId";
        }
        return $this->db->query($sql)->result();
    }
    // 杨修平
    public function get_detail($id){
        $sql = "select u.*,p.*,i.*,c.* from t_product p,t_comment c,t_product_img i,t_user u where p.prod_id = '$id' and  p.prod_id = i.prod_id and  p.prod_id =  c.prod_id";
        return $this -> db ->query($sql) -> row();
    }
    
}