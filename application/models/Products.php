<?php
class Products extends CI_Model {

        public function get_active_products()
        {
                $query = $this->db->where('status',1)->get('products');
                return $query->num_rows();
        }
        
        public function get_in_active_products()
        {
                $query = $this->db->where('status',0)->get('products');
                return $query->num_rows();
        }
        
        public function products_not_belong_to_anyUser()
        {
                $query = $this->db->query("SELECT COUNT(products.id) as product_count FROM `products` where products.status = 1 AND products.id Not IN (select product_id from user_products)");
                return $query->result();
        }

        public function products_belong_to_anyUser()
        {
                $query = $this->db->query("SELECT COUNT(products.id) as product_count FROM `products` where products.status = 1 AND products.id IN (select product_id from user_products)");
                return $query->result();
        }
        
        
        public function amount_of_all_attached_products()
        {
                $this->db->select_sum('qty');
                $this->db->from('products_order');
                $amount = $this->db->get()->row();
                return $amount->qty;
        }
        
        public function price_of_all_attached_products()
        {
                $this->db->select_sum('total_price');
                $this->db->from('products_order');
                $amount = $this->db->get()->row();
                return $amount->total_price;
        }


}

?>