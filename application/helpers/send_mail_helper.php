<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 {
	function set_config()
	{
	     	$config['protocol'] = "smtp";
            $config['smtp_host'] = 'ssl://mail.accendon.com';
            $config['smtp_port'] = '465';
            $config['smtp_user'] = 'info@accendon.com';
            $config['smtp_pass'] = 'j];Sv1]SG#k(';
            $config['mailtype'] = 'html';
            $config['charset'] = 'utf-8';
            $config['newline'] = "\r\n";
            $config['wordwrap'] = TRUE;
	    return $config;
	}
 	function send_user_mail($mail_data,$message_body)
	{
		$CI =& get_instance();
		$CI->load->library('email');
        $config=set_config();
		$CI->email->initialize($config);
		$CI->email->from('info@accendon.com','Accendon.com');
		// $CI->email->to( $mail_data['email']);
		$CI->email->to(array('renjipr@gmail.com'));
		$CI->email->subject($mail_data['sub']);
	    $CI->email->message($message_body);
	    if(!empty($mail_data['pdf_path']))
	    	$CI->email->attach(base_url($mail_data['pdf_path']));
		if($CI->email->send())
		{
			if(!empty($mail_data['pdf_path']))
	    		unlink('./'.$mail_data['pdf_path']);
			return true;
		}
		else
		{
			//echo $CI->email->print_debugger();
            return false;
		}
	}

}