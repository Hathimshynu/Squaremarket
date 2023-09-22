  <?php
  ob_start();
  defined('BASEPATH') OR exit('No direct script access allowed');
  require_once APPPATH."/third_party/tarikh/php-mt5/vendor/autoload.php";
    use Tarikh\PhpMeta\MetaTraderClient;
    use Tarikh\PhpMeta\Entities\User;
    use Tarikh\PhpMeta\src\Lib\MTEnDealAction;
    use Tarikh\PhpMeta\Entities\Trade;

  class Admin extends CI_Controller {

    public function __construct()
    {
      parent::__construct();
      $this->load->database();
      $this->load->helper(array('form','url'));
      $this->load->library(array('form_validation', 'email','Mt5'));
      $this->form_validation->set_error_delimiters('<span style="color:red">', '</span>');

    }
    
    public function process_transfer()
    {
        if($this->session->userdata('asquareusertype') != 'a')
        redirect('admin','refresh');
        
        if ($_POST) {
            $id = $this->input->post('hids');
            if(!empty($id)){
                $transfer_data = $this->db->where('id',$id)->where('status !=','Transfered')->get('transfer')->row_array();
                if(!empty($transfer_data)){
                    $ticketidt = $this->mt5->deposit($transfer_data['acc_to'],$transfer_data['amount']); 
                    if(!empty($ticketidt)){
                        $this->db->set('status','Transfered');
                        $this->db->set('r_ticket',$ticketidt);
                          $this->db->where('id',$id);
                          $change = $this->db->update('transfer');
                       $this->session->set_flashdata('success_message', 'Process Done');
                       redirect('admin/transfer_request','refresh'); 
                    } else {
                       $this->session->set_flashdata('error_message', 'Please try again');
                       redirect('admin/transfer_request','refresh'); 
                    }
                } else {
                   $this->session->set_flashdata('error_message', 'Please try again');
                       redirect('admin/transfer_request','refresh');  
                }
            } else {
                $this->session->set_flashdata('error_message', 'Please try again');
                       redirect('admin/transfer_request','refresh'); 
            }
                
        } else {
            redirect('admin/transfer_request','refresh');
        }
    }

    
    public function test(){
        
        //$deposit_data = $this->db->where('admin_request_id',1)->get('admin_request')->row_array();
        $server = "78.140.153.253";
          $port = 443;
          $login = "12001";
          $password = "SQFX$%456";
          
          $api = new MetaTraderClient($server, $port, $login, $password, true);
          //$trade = new Trade();
          //$result = $api->getUser('91010229');
//             $total = $api->getOrderTotal(91010229);
// $trades = $api->getOrderPagination(91010229, $offset, $total);
// var_dump($total);

//// Get Deal Paginate
$total = $api->dealGetTotal(91010229, $timestampfrom, $timestampto);
$deals = $api->dealGetPaginate(91010229, $timestampfrom, $timestampto, 0, $total);

        //$trade->setLogin($deposit_data['user_id']);
        //$trade->setAmount($deposit_data['wallet_value']);
        //$trade->setComment("Withdrawal request");
        //$trade->setType(Trade::DEAL_BALANCE);
        //$result = $api->trade($trade);
        
        //$ticketidd = $result->getComment();
       // echo $ticketidd;
        echo '<pre>',print_r($deals,1),'</pre>';
    }
    public function index()
    {
      if($this->session->userdata('asquareusertype') == 'a')
      {
        $data['page_name'] = "dashboard";
        $this->load->view('admin/dashboard');
      }else{
        $data['page_name'] = "login";
        $this->load->view('admin/login',$data);  
      }
    }
    
       public function login()
      {
          if ($_POST) {
              $account_id = $this->input->post('account');
              log_message('error',$account);
              $password = $this->input->post('password');
              log_message('error',$password);
              
              $check = $this->admin->login($account_id,$password);
              if ($check !== false) {
                  
                   $this->session->set_userdata('asquareusername', $check['username']);
                  $this->session->set_userdata('asquarename', $check['name']);
                  $this->session->set_userdata('asquareusertype', $check['user_type']);
                  $this->session->set_userdata('asquareemail', $check['email']);
                  $this->session->set_flashdata('success_message' , "success");
                 redirect('admin/index','refresh');
                 

              } else {
                  $this->session->set_flashdata('error_message' , "Please enter valid username and password");
                  redirect('admin/index','refresh');
              }
          }
      
      }
      
       public function logout()
    {
      $this->session->set_userdata('asquareusername','');
      $this->session->set_userdata('asquarename','');
      $this->session->set_userdata('asquareusertype','');

      redirect('admin/logout_page','refresh');
    }
    
     public function logout_page()
    {
        $this->load->view('admin/logout');
      }
      public function withdraw_request()
    {
        if($this->session->userdata('asquareusertype') != 'a')
        redirect('admin','refresh');
        $this->load->view('admin/withdraw_request');
      }
       public function transfer_request()
    {
        if($this->session->userdata('asquareusertype') != 'a')
        redirect('admin','refresh');
        $this->load->view('admin/transfer_request');
      }

         public function forget_password()
    {
        $this->load->view('admin/forget_password');
      }
      
       public function notification()
    {
        $this->load->view('admin/notification');
      }
      
        public function usercredential()
    {
        if($this->session->userdata('asquareusertype') != 'a')
        redirect('admin','refresh');
        
        $this->load->view('admin/usercredential');
      }
      
       public function user_credential_view($username="")
    {
         if($this->session->userdata('asquareusertype') != 'a')
        redirect('admin','refresh');
        
        $data['user']=$username;
        $this->load->view('admin/user_credential_view',$data);
         
      }
      
    
     public function change_status($user_id,$status)
    {
          if($user_id != "" && $status != ""){
              if($status == "Active")
              {
                  $msg = "Connected";
                  $this->db->set('trading_status','Active');
                  $this->db->where('account_id',$user_id);
                  $change = $this->db->update('user_role');
              }else if($status == "Inactive"){
                  $msg = "Disconnected";
                  $this->db->set('trading_status','Inactive');
                  $this->db->where('account_id',$user_id);
                  $change = $this->db->update('user_role');
              }
              
              if($change)
              {
                 $this->session->set_flashdata('success_message', 'Now the trade is '.$msg);
                 redirect('admin/user_credential_view/'.$user_id,'refresh'); 
              }else{
                 $this->session->set_flashdata('success_message', "Please try again");
                 redirect('admin/user_credential_view/'.$user_id,'refresh');
              }
              
          }else{
              redirect('admin/user_credential_view','refresh');
          }
    }  
      
      
      
    public function client_deposit()
    {
         if($this->session->userdata('asquareusertype') != 'a')
        redirect('admin','refresh');
        
        $data['requests'] = $this->db->where('status','Request')->get('admin_request')->result_array();
        $data['history'] = $this->db->where('status!=','Request')->get('admin_request')->result_array();
        $this->load->view('admin/client_deposit',$data);
      }
    
    public function registration($acc_type="",$ref_idd="")
    {
        $data['account_type']=$acc_type;
        //$data['package']=$b;

        $ref_id = hex2bin($ref_idd);

        if($ref_id != "")
        {
           $check_ref = $this->db->where('account_id',$ref_id)->get('user_role')->row_array();

           if(!empty($check_ref))
           {
             $reff = $check_ref['account_id']; 
           }else{
             $reff = $this->db->select('account_id')->where('user_role_id',1)->get('user_role')->row()->account_id; 
           }
        }else{
            $reff = $this->db->select('account_id')->where('user_role_id',1)->get('user_role')->row()->account_id;
        }

        $data['ref_id'] = $reff;

        $this->load->view('admin/registration',$data);
      }
      
     
     
    //   public function register()      
    // {
    //   if($_POST){
    //     $config = array(
    //       'name'=>time(),    
    //       'upload_path' => "assets/images",
    //       'allowed_types' => "gif|jpg|png|jpeg|pdf|mp4",
    //       'overwrite' => false,
    //       'max_size' => "3074000" // Can be set to particular file size , here it is 3 MB(3074 Kb)
    //       // 'max_height' => "768",
    //       // 'max_width' => "1024"
    //       );
    //     $this->load->library('upload', $config);
    //     if($this->upload->do_upload('userfile')){
    //       $data = array('upload_data' => $this->upload->data());
    //           $this->form_validation->set_rules('fname', 'fname', 'trim|required');
    //           $this->form_validation->set_rules('lname', 'lname', 'trim|required');
    //           $this->form_validation->set_rules('useremail', 'useremail', 'trim|required');
    //           $this->form_validation->set_rules('phone', 'phone', 'trim|required');
    //           $this->form_validation->set_rules('gender', 'gender', 'trim|required');
    //           $this->form_validation->set_rules('city', 'city', 'trim|required');
    //           $this->form_validation->set_rules('state', 'state', 'trim|required');
    //           $this->form_validation->set_rules('pincode', 'pincode', 'trim|required');
    //           $this->form_validation->set_rules('country', 'country', 'trim|required');
    //           $this->form_validation->set_rules('password', 'password', 'trim|required');
    //           $this->form_validation->set_rules('con_password', 'con_password', 'trim|required');
    //           $this->form_validation->set_rules('proof_type', 'proof_type', 'trim|required');
    //           $this->form_validation->set_rules('package', 'package', 'trim|required');
    //           $this->form_validation->set_rules('account_type', 'account_type', 'trim|required');

    //       if($this->form_validation->run()==true){
              
    //           $pack = $this->input->post('package');
    //           switch ($pack) {
    //             case "crystal":
    //               $group = "wl5\SQFX - CRYSTAL";
    //               break;
    //             case "diamond":
    //               $group = "wl5\SQFX - DIAMOND";
    //               break;
    //             default:
    //               $group = "wl5\SQFX - STANDARD";
    //           }
    //       $server = "78.140.153.253";
    //       $port = 443;
    //       $login = "12001";
    //       $password = "SQFX$%456";
          
    //       $api = new MetaTraderClient($server, $port, $login, $password, true);
          
          
    //       $user = new User();
    //       $user->setName($this->input->post('fname'));
    //       $user->setEmail($this->input->post('useremail'));
    //       $user->setGroup($group);
    //       $user->setLeverage("50");
    //       $user->setPhone($this->input->post('phone'));
    //       $user->setAddress($this->input->post('city'));
    //       $user->setCity($this->input->post('city'));
    //       $user->setState($this->input->post('state'));
    //       $user->setCountry($this->input->post('country'));
    //       $user->setZipCode($this->input->post('pincode'));
    //       $user->setMainPassword($this->input->post('password'));
    //       $user->setInvestorPassword($this->input->post('password'));
    //       $user->setPhonePassword($this->input->post('password'));
    //       $result = $api->createUser($user);
    //       $loginid =  $result->getLogin(); 
          
    //       $refreg=$this->admin->register_manage($this->upload->data()['file_name'],$loginid);
    //         if($refreg[0] == true){
                
    //              $msg['account_id'] = $refreg[1];
    //              $msg['pwd'] = $refreg[2];
    //              $msg['investor_pwd'] = $refreg[3];
    //              $msg['email'] = $refreg[4];
               
                
    //   		 	    $this->load->view('admin/registrationsuccess_message',$msg);
    //                   $this->session->set_flashdata('success_message', 'New Service Added Successfully');
    //                   $this->testt($msg);
    //         }else{
              
    //           $this->session->set_flashdata('error_message', 'check your details');
    //           redirect('admin/registration','refresh');
    //         } 
    //       }else{
            
    //         $this->session->set_flashdata('error_message', ' Please Check Your Details');
    //         $this->load->view('admin/registration',$data);
    //       }

    //     }else{
       
    //       $this->session->set_flashdata('error_message', $this->upload->display_errors());
    //       redirect('admin/registration','refresh');

    //     }
    //   }else{
        
    //     $data['page_name'] = "registration";
    //     $this->load->view('admin/registration',$data);
    //   } 
      
    // }
   public function approve_request()
    {
        if($this->session->userdata('asquareusertype') != 'a')
        redirect('admin','refresh');
        
        log_message('error',$this->input->post('hids')." hiddd");
        log_message('error',$this->input->post('status')." statusss");
                
        if($this->input->post('hids') != "" && $this->input->post('status') != "")
        {
            if($this->input->post('status') == 'Approve')
            {
                
                $deposit_data = $this->db->where('admin_request_id',$this->input->post('hids'))->get('admin_request')->row_array();
                $ticketidd = $this->mt5->deposit($deposit_data['user_id'],$deposit_data['wallet_value']); 
        
                if(empty($ticketidd)){
                   $this->session->set_flashdata('error_message', 'Please try again');
                   redirect('admin/client_deposit','refresh'); 
                }

               $deposit =  $this->admin->accept_deposit($this->input->post('hids'),$ticketidd);
               
               if($deposit)
               {
                   $this->session->set_flashdata('success_message', 'Request accepted successfully');
                   redirect('admin/client_deposit','refresh');
               }else{
                   $this->session->set_flashdata('error_message', 'Please try again');
                   redirect('admin/client_deposit','refresh');
               }
               
            }else{
                 log_message('error',"reject");
                  $this->db->set('status','Rejected');
                  $this->db->set('approve_date',date('Y-m-d H:i:s'));
                  $this->db->set('remark',$this->input->post('remark'));
                  $this->db->where('admin_request_id',$this->input->post('hids'));
                  $deposit = $this->db->update('admin_request');
                  
                   if($deposit)
                   {
                       $this->session->set_flashdata('success_message', 'Request rejected successfully');
                       redirect('admin/client_deposit','refresh');
                   }else{
                       $this->session->set_flashdata('error_message', 'Please try again');
                       redirect('admin/client_deposit','refresh');
                   }
            }
            
        }else{
            redirect('admin/client_deposit','refresh');
        }
        
      }
      
    public function approve_withdraw()
    {
        if($this->session->userdata('asquareusertype') != 'a')
        redirect('admin','refresh');
        
        log_message('error',$this->input->post('hids')." hiddd");
        log_message('error',$this->input->post('status')." statusss");
                
        if($_POST && $this->input->post('hids') != "" && $this->input->post('status') != "")
        {
            if($this->input->post('status') == 'Approve')
            {
                
               //$deposit_data = $this->db->where('admin_request_id',$this->input->post('hids'))->get('admin_request')->row_array();
               
               
               $this->db->set('status','Accepted');
               $this->db->set('accepted_date',date('Y-m-d H:i:s'));
               $this->db->where('withdraw_request_id',$this->input->post('hids'));
               $deposit = $this->db->update('withdraw_request');
               
               if($deposit)
               {
                   $this->session->set_flashdata('success_message', 'Request accepted successfully');
                   redirect('admin/withdraw_request','refresh');
               }else{
                   $this->session->set_flashdata('error_message', 'Please try again');
                   redirect('admin/withdraw_request','refresh');
               }
               
            }else{
                 log_message('error',"reject");
                 $withdraw_data = $this->db->where('withdraw_request_id',$this->input->post('hids'))->get('withdraw_request')->row_array();
                 log_message('error',$withdraw_data['user_id']."//".$withdraw_data['amount']);
                 $ticketiddw = $this->mt5->deposit($withdraw_data['user_id'],500); 
        
                if(!empty($ticketiddw)){
                   $deposit = $this->admin->reject_withdraw($this->input->post('hids'),$ticketiddw);
                  
                   if($deposit)
                   {
                       $this->session->set_flashdata('success_message', 'Request rejected successfully');
                       redirect('admin/withdraw_request','refresh');
                   }else{
                       $this->session->set_flashdata('error_message', 'Rejected But Request not Updated');
                       redirect('admin/withdraw_request','refresh');
                   }
                } else {
                   $this->session->set_flashdata('error_message', 'Please try again');
                       redirect('admin/withdraw_request','refresh'); 
                }
                  
                  
            }
            
        }else{
            redirect('admin/withdraw_request','refresh');
        }
        
      }
    
    public function success(){
        $data['msg'] = $this->db->where('username',$this->session->userdata('registusername'))->get('user_role')->row_array();
        $this->load->view('admin/registrationsuccess_message',$data);
    }
    
    
    public function register() {
          $this->form_validation->set_rules('ref_id', 'Referral ID', 'trim|required|callback_refcheck');
          $this->form_validation->set_rules('page_name', 'Page', 'trim|required');
          $this->form_validation->set_rules('fname', 'First name', 'trim|required');
          $this->form_validation->set_rules('lname', 'Last name', 'trim|required');
          if($this->input->post('page_name') == "registration")
          {
             $this->form_validation->set_rules('useremail', 'Email', 'trim|required|callback_emailcheck');
          }else{
             $this->form_validation->set_rules('useremail', 'Email', 'trim|required');  
          }
          $this->form_validation->set_rules('phone', 'Phone', 'trim|required');
          $this->form_validation->set_rules('gender', 'Gender', 'trim|required');
          $this->form_validation->set_rules('city', 'City', 'trim|required');
          $this->form_validation->set_rules('state', 'State', 'trim|required');
          $this->form_validation->set_rules('pincode', 'Pin code', 'trim|required');
          $this->form_validation->set_rules('country', 'Country', 'trim|required');
          $this->form_validation->set_rules('password', 'Password', 'trim|required');
          $this->form_validation->set_rules('con_password', 'Confirm password', 'trim|required|matches[password]');
          $this->form_validation->set_rules('proof_type', 'Proof', 'trim|required');
          //$this->form_validation->set_rules('package', 'Package', 'trim|required');
          $this->form_validation->set_rules('account_type', 'Account_type', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $response['status'] = 'error';
            $response['fname_error'] = form_error('fname');
            $response['lname_error'] = form_error('lname');
            $response['useremail_error'] = form_error('useremail');
            $response['phone_error'] = form_error('phone');
            $response['gender_error'] = form_error('gender');
            $response['city_error'] = form_error('city');
            $response['state_error'] = form_error('state');
            $response['pincode_error'] = form_error('pincode');
            $response['country_error'] = form_error('country');
            $response['password_error'] = form_error('password');
            $response['cpassword_error'] = form_error('con_password');
            $response['proof_error'] = form_error('proof_type');
            //$response['package_error'] = form_error('package');
            $response['account_error'] = form_error('account_type');
            $response['ref_error'] = form_error('ref_id');
            //$response['message'] = validation_errors();
        } else {
              $config = array(
                  'name'=>time(),    
                  'upload_path' => "assets/images",
                  'allowed_types' => "jpg|png|jpeg",
                  'overwrite' => false,
                  'max_size' => "3074000" // Can be set to particular file size , here it is 3 MB(3074 Kb)
                  // 'max_height' => "768",
                  // 'max_width' => "1024"
                  );
                $this->load->library('upload', $config);

            if (!$this->upload->do_upload('userfile')) {
                $response['status'] = 'error';
                $response['message'] = $this->upload->display_errors();
            } else {
                
                    $pack = $this->input->post('package');
                      switch ($pack) {
                        case "crystal":
                          $group = "wl5\SQFX - CRYSTAL";
                          break;
                        case "diamond":
                          $group = "wl5\SQFX - DIAMOND";
                          break;
                        default:
                          $group = "wl5\SQFX - STANDARD";
                      }
                  $server = "78.140.153.253";
                  $port = 443;
                  $login = "12001";
                  $password = "SQFX$%456";
                  
                  $api = new MetaTraderClient($server, $port, $login, $password, true);
                  
                  
                  $user = new User();
                  $user->setName($this->input->post('fname'));
                  $user->setEmail($this->input->post('useremail'));
                  $user->setGroup($group);
                  $user->setLeverage("50");
                  $user->setPhone($this->input->post('phone'));
                  $user->setAddress($this->input->post('city'));
                  $user->setCity($this->input->post('city'));
                  $user->setState($this->input->post('state'));
                  $user->setCountry($this->input->post('country'));
                  $user->setZipCode($this->input->post('pincode'));
                  $user->setMainPassword($this->input->post('password'));
                  $user->setInvestorPassword($this->input->post('password'));
                  $user->setPhonePassword($this->input->post('password'));
                  $result = $api->createUser($user);
                  $loginid =  $result->getLogin(); 
                  if(!empty($loginid)){      
                $result = $this->admin->register_manage($this->upload->data()['file_name'],$loginid);
                
                 $this->session->set_userdata('registusername',$result[1]);
                
                if ($result[0] == true) {
                    $response['status'] = 'success';
                    //$response['message'] = 'Data inserted successfully.';
                } else {
                    $response['status'] = 'error';
                    $response['message'] = 'Data could not be inserted.';
                }
                  } else {
                     $response['status'] = 'error';
                    $response['message'] = 'Please try again'; 
                  }
            }
        }
        echo json_encode($response);
    }
    
     public function emailcheck(){
        
        $email_check = $this->db->where('email',$this->input->post('useremail'))->get('user_role')->row_array();

        if (!empty($email_check))
        {
            $this->form_validation->set_message('emailcheck','Email ID already exists');
            return FALSE;
        }
        else
        {
           return TRUE;
        }
     }
    
    public function refcheck(){
        
        $ref_check = $this->db->where('account_id',$this->input->post('ref_id'))->get('user_role')->row_array();

        if (empty($ref_check))
        {
            $this->form_validation->set_message('refcheck','Invalid Sponsor ID');
            return FALSE;
        }
        else
        {
          $reff = $this->db->select('account_id')->where('user_role_id',1)->get('user_role')->row()->account_id; 

           if($this->input->post('ref_id') == $reff)
           {
             return TRUE;
           }else{
            
            $check_ib_eligible = $this->db->select('ib_account')->where('account_id',$this->input->post('ref_id'))->get('user_role')->row()->ib_account;

            if($check_ib_eligible == 'Eligible')
            {
               return TRUE; 
            }else{
               $this->form_validation->set_message('refcheck','Sponsor ID not an IB account');
               return FALSE; 
            }

           }

        }
     }
    
      public function testt($msg=""){
       
      
      $this->load->library('email');
      $config = array();
      $config['mailtype'] = 'html';
      $this->email->initialize($config);
      $this->email->set_newline("\r\n");
      $this->email->from('noreplay@backofficee.com', 'SQUARE');
      $this->email->reply_to('noreplay@backofficee.com', 'SQUARE');
      $this->email->to($msg['email']);
      $this->email->subject("SQUARE");
      $this->email->message($this->load->view('admin/registrationsuccess_message',$msg,true));   
       $this->email->send();
   if($this->email->send()){
       echo "send";
   }else{
       echo "error";
   }
        
    }

    public function user_credential_update()
        {
            if ($this->session->userdata('asquareusertype') != 'a') 
            redirect('admin','refresh');
            
            if($_POST){ 
            
          $this->form_validation->set_rules('fname', 'First name', 'trim|required');
          $this->form_validation->set_rules('mname', 'Middle name', 'trim|required');
          $this->form_validation->set_rules('lname', 'Last name', 'trim|required');
          $this->form_validation->set_rules('email', 'Email', 'trim|required');
          $this->form_validation->set_rules('phone', 'Phone', 'trim|required');
          $this->form_validation->set_rules('company', 'company', 'trim|required');
          $this->form_validation->set_rules('star', 'star', 'trim|required');
          $this->form_validation->set_rules('language', 'language', 'trim|required');
          $this->form_validation->set_rules('id_no', 'id_no ', 'trim|required');
          $this->form_validation->set_rules('lead', 'lead', 'trim|required');
          $this->form_validation->set_rules('meta', 'meta', 'trim|required');
          $this->form_validation->set_rules('source', 'source', 'trim|required');
          $this->form_validation->set_rules('country', 'Country', 'trim|required');
          $this->form_validation->set_rules('state', 'State', 'trim|required');
          $this->form_validation->set_rules('city', 'city', 'trim|required');
           $this->form_validation->set_rules('pin_code', 'Pin code', 'trim|required');
          $this->form_validation->set_rules('address', 'address', 'trim|required');
           $this->form_validation->set_rules('comment', 'comment', 'trim|required');
                
                    if($this->form_validation->run()==true){
                            $upp = $this->admin->credential_update();
                            if($upp){
                                $this->session->set_flashdata('success_message','Details Updated Successfully');
                                redirect('admin/user_credential_view','refresh');
                            }else{
                             $this->session->set_flashdata('error_message','Please Try Again');
                             redirect('admin/user_credential_view','refresh');    
                            }
                            
                        
                    
                    }else{
                    $this->session->set_flashdata('error_message','Please Check Your Details');
                    $this->load->view('admin/user_credential_view');
                }
                
                
                }else{
                // $this->session->set_flashdata('error_message', $this->upload->display_errors());
                 redirect('admin/user_credential_view','refresh');
                }
                
            }
            
            
            
            public function user_password_update()
        {
            if ($this->session->userdata('asquareusertype') != 'a') 
            redirect('admin','refresh');
            
            if($_POST){ 
            
           $this->form_validation->set_rules('master', 'master ', 'trim');
          $this->form_validation->set_rules('investor', 'investor ', 'trim');
          $this->form_validation->set_rules('phone', 'phone', 'trim');
                
                    if($this->form_validation->run()==true){
                            $upp = $this->admin->password_update();
                            if($upp){
                                $this->session->set_flashdata('success_message','Details Updated Successfully');
                                redirect('admin/user_credential_view','refresh');
                            }else{
                             $this->session->set_flashdata('error_message','Please Try Again');
                             redirect('admin/user_credential_view','refresh');    
                            }
                    }else{
                    $this->session->set_flashdata('error_message','Please Check Your Details');
                    $this->load->view('admin/user_credential_view');
                }
                
                
                }else{
                // $this->session->set_flashdata('error_message', $this->upload->display_errors());
                 redirect('admin/user_credential_view','refresh');
                }
                
            }
            
       public function reset_password()
    {
        if($this->session->userdata('asquareusertype') != 'a')
        redirect('admin','refresh');
        $this->load->view('Admin/reset_password');
      }
    
       public function registrationsuccess_message()
    {
        $this->load->view('admin/registrationsuccess_message');
      }
      
    
        public function view()
    {
         if($this->session->userdata('asquareusertype') != 'a')
        redirect('admin','refresh');
        
        $this->load->view('Admin/view');
      }
      
          
        public function binary()
    {
         if($this->session->userdata('asquareusertype') != 'a')
        redirect('admin','refresh');
        $this->load->view('Admin/binary');
      }
      
             
        public function adminwallet()
    {
         if($this->session->userdata('asquareusertype') != 'a')
        redirect('admin','refresh');
        
        $this->load->view('Admin/adminwallet');
      }
      
          public function support()
    {
         if($this->session->userdata('asquareusertype') != 'a')
        redirect('admin','refresh');
        
        $this->load->view('Admin/support');
      }
      
             public function chat()
    {
         if($this->session->userdata('asquareusertype') != 'a')
        redirect('admin','refresh');
        
        $this->load->view('Admin/chat');
      }
    
    
       
             public function unilevel()
    {
         if($this->session->userdata('asquareusertype') != 'a')
        redirect('admin','refresh');
        
        $this->load->view('Admin/unilevel');
      }
      
      
         
             public function payout()
    {
         if($this->session->userdata('asquareusertype') != 'a')
        redirect('admin','refresh');
        
        $this->load->view('Admin/payout');
      }
    
    
        
         
             public function packagecreate()
    {
         if($this->session->userdata('asquareusertype') != 'a')
        redirect('admin','refresh');
        $this->load->view('Admin/packagecreate');
      }
    

    

    
    }                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
    
