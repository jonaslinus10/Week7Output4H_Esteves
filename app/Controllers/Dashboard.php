<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        return view('dashboard_view');
    }

    public function resident_record()
    {
        return view('resident_record');
    }

    public function user(){
        
        return view('user_view');
    }
    
    public function getNewValues()
    {
        $new_population = 4000;
        $new_youthkids= 2000;
        $new_seniors = 200;
        $new_household = 700;

        $data = array (

        'new_population' =>  $new_population,
        'new_youthkids'=>  $new_youthkids,
        'new_seniors' =>  $new_seniors,
        'new_household' =>  $new_household
        );

        return $this->response->setJSON($data);
    }

    

}
