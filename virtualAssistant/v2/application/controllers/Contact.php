<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class contact extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        /*$this->load->view('email/contact_mailer');*/
    }


    public function send()
    {
        $mail = $this->constructMail($_POST);

        // Email configuration
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'mail.ursvirtually.co.za',
            'smtp_port' => 587,
            'smtp_user' => 'mailer@ursvirtually.co.za', // change it to yours
            'smtp_pass' => 'egbP-IY5-Z9O', // change it to yours
            'mailtype' => 'html',
            'charset' => 'iso-8859-1',
            'wordwrap' => TRUE
        );

        $this->load->library('email', $config);
        $this->email->from('mailer@ursvirtually.co.za', "Admin Team");
        $this->email->to("zeebagley@gmail.com");
        //$this->email->cc("testcc@domainname.com");
        $this->email->subject("New Contact (".$_POST['firstname']." ".$_POST['lastname'].") From Yours Virtually ");
        $this->email->message($mail['view']);

        $result = $this->email->send();

        if($result){
           echo 1;
        }
        else
        {
            echo 0;
        }
        exit;
    }


    public function constructMail($postData)
    {
        $myvar['view'] = $this->load->view('email/contact_mailer',$postData)->output->final_output;

        return $myvar;
    }
}
