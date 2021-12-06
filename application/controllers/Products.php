<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Products extends CI_Controller
{
    public function leaning_managment_system()
    {
        $this->load->view('leaning_managment_system');
    }

    public function facility_management_system()
    {
        $this->load->view('facility_management_system');
    }

   
    public function wellness_ayurveda()
    {
        $this->load->view('wellness_ayurveda');
    }

      
}
