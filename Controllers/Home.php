<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function dashboard()
    {
        return view('dashboard_view');
    }

    public function getDashboardBoxes(){
        $new_order_count = 100;
        $bounce_rate_count = 100;
        $user_registration_count = 100;
        $unique_visitors_count = 100;

        $data = array(
            'status' => true,
            'new_orders' => $new_order_count,
            'bounce_rate' => $bounce_rate_count,
            'user_registration' => $user_registration_count,
            'unique_visitors'  => $unique_visitors_count
        );

        return $this->response->setJSON($data);

    }
    
}