<?php
ob_start();
defined('BASEPATH') OR exit('No direct script access allowed');
class Dist extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->load->helper(array('form','url'));
    $this->load->library(array('form_validation', 'email'));
    $this->form_validation->set_error_delimiters('<span style="color:red">', '</span>');

  }
 
public function index()
  {
      $this->load->view('dist/index');
    }
    
public function about_us()
  {
      $this->load->view('dist/about_us');
    }
    
public function account_type()
  {
      $this->load->view('dist/account_type');
    }
    
public function contact_us()
  {
      $this->load->view('dist/contact_us');
    }
    
public function cryptocurrency()
  {
      $this->load->view('dist/cryptocurrency');
    }
    
public function deposit_fund()
  {
      $this->load->view('dist/deposit_fund');
    }
    
public function energy()
  {
      $this->load->view('dist/energy');
    }
    
public function forex()
  {
      $this->load->view('dist/forex');
    }
    
public function indices()
  {
      $this->load->view('dist/indices');
    }
    
public function introducting_broker()
  {
      $this->load->view('dist/introducting_broker');
    }
    
public function meta_trader()
  {
      $this->load->view('dist/meta_trader');
    }
    
public function metachart()
  {
      $this->load->view('dist/metachart');
    }
    
public function mobile_trading_app()
  {
      $this->load->view('dist/mobile_trading_app');
    }
    
public function platform_metatrader()
  {
      $this->load->view('dist/platform_metatrader');
    }
    
public function precious_metals()
  {
      $this->load->view('dist/precious_metals');
    }
    
public function refer_a_friend()
  {
      $this->load->view('dist/refer_a_friend');
    }
    
public function regulations()
  {
      $this->load->view('dist/regulations');
    }
    
public function safety_of_funds()
  {
      $this->load->view('dist/safety_of_funds');
    }
    
public function share()
  {
      $this->load->view('dist/share');
    }
    
public function white_label()
  {
      $this->load->view('dist/white_label');
    }
    
public function why_square_fx()
  {
      $this->load->view('dist/why_square_fx');
    }
    
public function withdrawl_funds()
  {
      $this->load->view('dist/withdrawl_funds');
    }
    
  
    


  
  }
  
