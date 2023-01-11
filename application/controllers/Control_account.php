<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control_account extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->library('session');
        date_default_timezone_set("Asia/Jakarta");
    }

    public function emailExist($email){
        $selectAccount = $this->Frontend_user->selectByEmail($email);
        $selectAccount = json_decode(json_encode($selectAccount), TRUE);
        
        return $selectAccount;
    }
    
    public function register(){
        extract($_POST);

        $exist = $this->emailExist($email);

        if($exist == NULL){
            $username = explode("@", $email);
            $accountData = array(
                "email" => $email,
                "password" => sha1($password),
                "username" => $username[0],
                "status" => 1,
                "role" => 2,
                "create_at" => date("Y-m-d H:i:s")
            );
            $this->Frontend_user->add($accountData);
            
            $selectAccount = $this->Frontend_user->selectByEmail($email);
            $selectAccount = json_decode(json_encode($selectAccount), TRUE);

            $informationData = array(
                "user_id" => $selectAccount['id'],
                "first_name" => $first_name,
                "last_name" => $last_name,
                "update_at" => date("Y-m-d H:i:s")
            );
            $this->Frontend_user->addInformation($informationData);

            $this->session->set_flashdata('success', 'Register successfully, Please login here.');
            redirect(base_url('account'));
        }
        else{
            $this->session->set_flashdata('err', 'Email already in use.');
            redirect(base_url('account/register'));
        }
    }

    public function login(){
        extract($_POST);

        $data = array('email' => $email, "password" => sha1($password), "role" => 2);

        $login = $this->Frontend_user->login($data);
        $login = json_decode(json_encode($login), TRUE);

        if($login == NULL){
            $this->session->set_flashdata('err', 'Email and Password does not match.');
            redirect(base_url('account'));
        }
        else{
            $this->session->set_userdata('customer', $login);
            if($redirect != ""){
                redirect($redirect);
            }
            else{
                redirect(base_url('account'));
            }
        }
    }

    public function forgot(){
        $this->load->library('General');
        $this->load->library('Phpmailer_lib');
        extract($_POST);

        $exist = $this->emailExist($email);
        $data = array('email' => $email);

        if($exist == NULL){
            $this->session->set_flashdata('err', 'Email not found.');
            redirect(base_url('account/forgot'));
        }
        else{
            $this->load->library('phpmailer_lib');
            $mail = $this->phpmailer_lib->load();
            
            $content = '
            <!DOCTYPE html>
            <html lang="en">
                <head>
                <title>Notify me!</title>
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                <meta name="viewport" content="width=device-width">
                <style>
                    .button__cell { background: {{ shop.email_accent_color }}; }
                    a, a:hover, a:active, a:visited { color: {{ shop.email_accent_color }}; }
                </style>
                </head>
                <body>
                Click this link to change the password<br><br>
                <a href="'.base_url("account/change").'?email='.$email.'">Change password</a>
                </body>
            </html>
            ';

            $sendmail = $this->general->sendMail($content, $email, $mail);
            
            if($sendmail == 201){
                $this->session->set_flashdata('success', 'Please check your email for the password change link.');
            }
            else{
                $this->session->set_flashdata('err', 'Err: Try again.');
            }

            redirect(base_url('account/forgot'));
        }
    }

    public function change(){
        extract($_POST);

        if($password != $confirm_password){
            $this->session->set_flashdata('err', 'Password and Confirm password are not the same');
            redirect(base_url("account/change"));
        }
        
        $exist = $this->emailExist($this->session->userdata('change_pass'));
        $data = array('password' => sha1($password));
        $this->Frontend_user->edit($data, $exist['id']);
        
        $this->session->set_flashdata('success', 'Password has been changed.');
        $this->session->unset_userdata('change_pass');
        redirect(base_url("account"));
    }
}