<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/userguide3/general/urls.html
     */
    public function index() {
        $this->load->model('users');
        // Get Active and Verified users
        $data['active_users'] = $this->users->get_active_users();
        // Get In Active users
        $data['in_active_users'] = $this->users->get_in_active_users();
        // Get not verified users
        $data['not_verified_users'] = $this->users->get_not_verified_users();
        // Get users details who bought the products
        $data['users_have_products'] = $this->users->users_have_products();
        
        // Get Active Products
        $this->load->model('products');
        $data['active_products'] = $this->products->get_active_products();
        // Get In products.
        $data['in_active_products'] = $this->products->get_in_active_products();
        // Get products which not belong to any user.
        $data['products_not_belong'] = $this->products->products_not_belong_to_anyUser();
        // Get products which belong to any user.
        $data['products_belong'] = $this->products->products_belong_to_anyUser();
        // Get users details who have not bought the products
        $data['users_not_have_products'] = $this->users->users_not_have_products();
        
        // Number of all activate attached products
        $data['number_of_active_products'] = $this->products->amount_of_all_attached_products();
        
        // Price of all activate attached products
        $data['price_of_active_products'] = $this->products->price_of_all_attached_products();
        $data['per_user_sum'] = $this->users->per_user_sum();
        
        
        // Currency Exchange Rate
        $results = $this->get_currency_rate();
        $data['exchangerates_data'] = $this->get_currency_rate();
//        echo '<pre>';
//        print_r($data['per_user_sum']);
//        exit;
        
        
        $this->load->view('dashboard', $data);
    }

    public function get_currency_rate() {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.apilayer.com/exchangerates_data/convert?to=EUR&from=USD&amount=200",
            CURLOPT_HTTPHEADER => array(
                "Content-Type: text/plain",
                "apikey: Kdix9EoWXfAHpB29LBeQZO2Rbp5qmsxT"
            ),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET"
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return json_decode($response);
    }

}
