<?php

class Users extends CI_Model {

    public function get_active_users() {
        $query = $this->db->where('is_active', 1)->where('verified_at !=', 'NULL')->get('users');
        return $query->num_rows();
    }

    public function get_in_active_users() {
        $query = $this->db->where('is_active', 0)->where('verified_at !=', 'NULL')->get('users');
        return $query->num_rows();
    }

    public function get_not_verified_users() {
        $query = $this->db->where('is_active', 0)->where('verified_at =', NULL)->get('users');
        return $query->num_rows();
    }

    public function users_have_products() {
        $query = $this->db->query("SELECT COUNT(users.id) as user_count FROM `users` where users.is_active = 1 AND users.verified_at AND users.id IN (select user_id from user_products)");
        return $query->result();
    }

    public function users_not_have_products() {
        $query = $this->db->query("SELECT COUNT(users.id) as user_count FROM `users` where users.is_active = 1 AND users.verified_at AND users.id Not IN (select user_id from user_products)");
        return $query->result();
    }

    public function per_user_sum() {
        $query = $this->db->query("SELECT SUM(products_order.total_price) as totalPrice, users.id, users.name
                                    FROM users
                                    INNER JOIN user_products
                                    ON users.id = user_products.user_id
                                    INNER JOIN products_order
                                    ON user_products.id = products_order.entry_id GROUP by  user_products.user_id");
        return $query->result();
    }

}

?>