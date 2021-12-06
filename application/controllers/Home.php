<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $this->load->view('home');
    }

    public function about()
    {
        $this->load->view('about');
    }

    public function services()
    {
        $this->load->view('services');
    }

    public function contact()
    {
        $this->load->view('contact');
    }

    public function error_404()
    {
        $this->load->view('common/error_404');
    }
    
     public function work_processing()
    {
        $this->load->view('workprocessing');
    }
    
    public function send_mail()
    {
        $this->load->helper('security');
        $this->load->helper('send_mail');
        $name=$this->input->post('name');
        $name=$this->security->xss_clean($name);
        $email=$this->input->post('email');
        $email=$this->security->xss_clean($email);
        $body=  $this->input->post('message');
        $body=$this->security->xss_clean($body);
        $detailedbody="You have received an enquiry from ".$name." <br>From Email: ".$email." <br>Message:<br>".$body;
        $data['sub']= $this->input->post('subject');
        if(send_user_mail($data,$detailedbody)){
            $data['message']="Enquiry Mail Sent Succesfully.";
            echo json_encode($data);
        }
        
    }


}
