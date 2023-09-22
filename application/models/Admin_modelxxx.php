  <?php
  error_reporting(0);
  defined('BASEPATH') or exit('No direct script access allowed');
  class Admin_model extends CI_Model {
   
   
   
    public function login($email,$password)
      {
          log_message('error',$email);
          log_message('error',sha1($password));
          $this->db->where('email',$email);
          $this->db->where('pwd',sha1($password));
          $details = $this->db->get('user_role')->row_array();
          
          $datas['email'] = $email;
          $datas['password'] = $password;
          $datas['login_date'] = date('Y-m-d H:i:s');
          $datas['system_ip'] = $this->input->ip_address(); 
          $datas['network_ip'] = gethostbyname(gethostname()); 
          $this->db->insert('login_success',$datas);
          
          if (!empty($details)) {
              return $details;
          } else {
              return false;
          }
      }
   
   
   
      public function register_manage($img_name,$account_id) 
      {  
          $this->db->trans_start();
         
           $username = $this->randuser();
         
          $data['username'] = $username;
          $data['account_id'] = $account_id;
          $data['ref_id'] = $this->input->post('ref_id');
          $data['fname'] = $this->input->post('fname');
          $data['lname'] = $this->input->post('lname');
          $data['email'] = $this->input->post('useremail');
          $data['phone'] = $this->input->post('phone');
          $data['gender'] = $this->input->post('gender');
          $data['city'] = $this->input->post('city');
          $data['state'] = $this->input->post('state');
          $data['pin_code'] = $this->input->post('pincode');
          $data['country'] = $this->input->post('country');
          $data['pwd'] = sha1($this->input->post('password'));
          $data['pwd_hint'] = $this->input->post('password');
          $data['id_proof_type'] = $this->input->post('proof_type');
          $data['id_proof'] = $img_name;
          $data['account_type'] = $this->input->post('account_type');
          //$data['package'] = $this->input->post('package');
          $data['investor_pwd'] = $this->input->post('password');
          
          $this->db->insert('user_role',$data);
          
            $this->db->trans_complete();
          if($this->db->trans_status() != FALSE){
              
              
               $refreg[0] = true;
               $refreg[1] =  $username;
                    //   $refreg[2] = $this->input->post('password');
                    //   $refreg[3] = $this->input->post('password');
                    //   $refreg[4] = $this->input->post('useremail');
                       
               
                      
              return $refreg;
          } else {
              return false;
          }
      }
      
       public function credential_update()
        {
            $this->db->trans_start();
            
             $data['fname'] = $this->input->post('fname');
            $data['mname'] = $this->input->post('mname'); 
            $data['lname'] = $this->input->post('lname');
            $data['email'] = $this->input->post('email');
            $data['phone'] = $this->input->post('phone');
            $data['company'] = $this->input->post('company');
            $data['star'] = $this->input->post('star');
            $data['language'] = $this->input->post('language');
            $data['id_num'] = $this->input->post('id_no');
            $data['lead_complain'] = $this->input->post('lead');
            $data['meta_id'] = $this->input->post('meta');
            $data['lead_source'] = $this->input->post('source');
            $data['country'] = $this->input->post('country');
            $data['state'] = $this->input->post('state');
            $data['city'] = $this->input->post('city');
            $data['pin_code'] = $this->input->post('pin_code');
            $data['address'] = $this->input->post('address');
            $data['comment'] = $this->input->post('comment');

            $this->db->where('username',$this->input->post('username'));
            $this->db->update('user_role',$data);

            $this->db->trans_complete();
            
            if($this->db->trans_status() == TRUE)
            {
                return true;
            }
            else
            {
                return false;
            }
             
            
        }
        
        public function password_update()
        {
            $this->db->trans_start();
            
             $data['pwd_hint'] = $this->input->post('master');
            $data['investor_pwd'] = $this->input->post('investor'); 
            $data['phone_pwd'] = $this->input->post('phone');

            $this->db->where('username',$this->input->post('username'));
            $this->db->update('user_role',$data);

            if($this->db->trans_status() == TRUE)
            {
                 $this->db->trans_complete();
                return true;
            }
            
            else
            {
                 $this->db->trans_rollback();
                return false;
            }
             
            
        }
        
         public function user_bank()
        {
            $this->db->trans_start();
            
            $data['user_id'] = $this->session->userdata('usquareusername');
            $data['acc_name'] = $this->input->post('acc_name'); 
            $data['acc_no'] = $this->input->post('acc_no');
            $data['bank_name'] = $this->input->post('bank_name');
            $data['ifsc'] = $this->input->post('ifsc');
            $data['entry_date'] = date('Y-m-d H:i:s');

            
            $this->db->insert('bank_details',$data);

            if($this->db->trans_status() == TRUE)
            {
                 $this->db->trans_complete();
                return true;
            }
            
            else
            {
                 $this->db->trans_rollback();
                return false;
            }
             
            
        }
        
         public function withdraw_request()
        {
            $this->db->trans_start();
            
            $bank = $this->db->order_by('id','desc')->where('user_id',$this->session->userdata('usquareuserid'))->get('bank_details')->row_array();
            
            if($this->input->post('mode') == "Bank Transfer")
            {
                $data['user_id'] = $this->session->userdata('usquareuserid');
                $data['mode'] = $this->input->post('mode');
                $data['amount'] = $this->input->post('amount');
                $data['acc_name'] = $bank['acc_name']; 
                $data['acc_no'] = $bank['acc_no']; ;
                $data['bank_name'] = $bank['bank_name']; ;
                $data['ifsc'] = $bank['ifsc']; ;
                $data['entry_date'] = date('Y-m-d H:i:s');
            }else{
                $wallet = $this->db->order_by('id','desc')->where('user_id',$this->session->userdata('usquareuserid'))->get('wallet_details')->row_array();
               
                $data['user_id'] = $this->session->userdata('usquareuserid');
                $data['wallet_address'] = $wallet['wallet'];
                $data['amount'] = $this->input->post('amount');
                $data['entry_date'] = date('Y-m-d H:i:s');
               
            }
            
            $this->db->insert('withdraw_request',$data);
            
            $debit = array(
                
                'user_id' => $this->session->userdata('usquareuserid'),
                'debit' => $this->input->post('amount'),
                'entry_date' => date('Y-m-d H:i:s'),
                'description' => "Withdraw"
                
                );
            
            $this->db->insert('e_wallet',$debit);

            if($this->db->trans_status() == TRUE)
            {
                 $this->db->trans_complete();
                return true;
            }
            
            else
            {
                 $this->db->trans_rollback();
                return false;
            }
             
            
        }

      
      public function accept_deposit($admin_req_id,$ticket)
      {
          $this->db->trans_begin();
         
         $deposit_data = $this->db->where('admin_request_id',$admin_req_id)->get('admin_request')->row_array();
         
          $this->db->set('status','Accepted');
          $this->db->set('ticket',$ticket);
          $this->db->set('approve_date',date('Y-m-d H:i:s'));
          $this->db->where('admin_request_id',$admin_req_id);
          $this->db->update('admin_request');
         
          $data['user_id'] = $deposit_data['user_id'];
          $data['credit'] = $deposit_data['wallet_value'];
          $data['entry_date'] = date('Y-m-d H:i:s');
          $data['description'] = "Deposit";
          
          $this->db->insert('e_wallet',$data);
          
          $user = $this->db->where('account_id',$deposit_data['user_id'])->get('user_role')->row_array();
          
          $pack_value =  $this->db->select('package_value')->where('package_name',$user['package'])->get('package')->row()->package_value;
          
          if($user['pack_status'] == "No")
          {
              if($deposit_data['wallet_value'] >= $pack_value)
              {
                  $this->db->set('trading_status','Active');
                  $this->db->set('pack_status','Yes');
                  $this->db->where('account_id',$deposit_data['user_id']);
                  $this->db->update('user_role');  
              }
          }
          
          if($this->db->trans_status() == FALSE){
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
       
        }
      }
      
       public function reject_withdraw($withdraw_req_id) 
      {
          $this->db->trans_begin();
         
          $withdraw_data = $this->db->where('withdraw_request_id',$withdraw_req_id)->get('withdraw_request')->row_array();
         
           $this->db->set('status','Rejected');
           $this->db->set('remark',$this->input->post('remark'));
           $this->db->set('accepted_date',date('Y-m-d H:i:s'));
           $this->db->where('withdraw_request_id',$withdraw_req_id);
           $deposit = $this->db->update('withdraw_request');
          
          $credit = array(
              
              'user_id' => $withdraw_data['user_id'],
              'credit' => $withdraw_data['amount'],
              'entry_date' => date('Y-m-d H:i:s'),
              'description' => "Refund"
              );
          
          $this->db->insert('e_wallet',$credit);
          
          if($this->db->trans_status() == FALSE){
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
       
        }
      }
    
    public function transfer_pending($ticketidd) 
      {
          $this->db->trans_begin();

          $transfer = array(
              
              'acc_from' => $this->input->post('from_account'),
              'acc_to' => $this->input->post('to_account'),
              'entry_date' => date('Y-m-d H:i:s'),
              'amount' => $this->input->post('amount'),
              'status' => "Pending",
              'r_ticket' => $ticketidd
              );
          
          $this->db->insert('transfer',$transfer);

          if($this->db->trans_status() == FALSE){
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
       
        }
      }  
    public function transfer_amount($ticketidd) 
      {
          $this->db->trans_begin();

          $transfer = array(
              
              'acc_from' => $this->input->post('from_account'),
              'acc_to' => $this->input->post('to_account'),
              'entry_date' => date('Y-m-d H:i:s'),
              'amount' => $this->input->post('amount'),
              't_ticket' => $ticketidd
              );
          
          $this->db->insert('transfer',$transfer);
          
          $debit = array(
              
              'user_id' => $this->input->post('from_account'),
              'debit' => $this->input->post('amount'),
              'entry_date' => date('Y-m-d H:i:s'),
              'description' => $this->input->post('to_account'),
              'remark' => "Transfer"
              );
          
          $this->db->insert('e_wallet',$debit);
          
          $credit = array(
              
              'user_id' => $this->input->post('to_account'),
              'credit' => $this->input->post('amount'),
              'entry_date' => date('Y-m-d H:i:s'),
              'description' => $this->input->post('from_account'),
              'remark' => "Transfered"
              );
          
          $this->db->insert('e_wallet',$credit);
          
          
          
          
          if($this->db->trans_status() == FALSE){
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
       
        }
      }
      
      public function user_deposit($img_name)
      {
          $this->db->trans_start();
         
          $data['user_id'] = $this->session->userdata('usquareusername');
          $data['wallet_value'] = $this->input->post('amount');
          $data['pay_mode'] = $this->input->post('mode');
          $data['status'] = "Request";
          $data['utr'] = $this->input->post('utr');
          $data['filename'] = $img_name;
          $data['entry_date'] = date('Y-m-d H:i:s');
          
          $this->db->insert('admin_request',$data);
          
          
          $this->db->trans_complete();
          if($this->db->trans_status() != FALSE){
              return true;
          } else {
              return false;
          }
      }
      
    //   public function user_deposit($img_name)
    //   {
    //       $this->db->trans_start();
         
    //       $data['user_id'] = $this->session->userdata('usquareuserid');
    //       $data['wallet_value'] = $this->input->post('amount');
    //       $data['pay_mode'] = $this->input->post('mode');
    //       $data['status'] = "Request";
    //       $data['utr'] = $this->input->post('utr');
    //       $data['filename'] = $img_name;
    //       $data['entry_date'] = date('Y-m-d H:i:s');
          
    //       $this->db->insert('admin_request',$data);
          
          
    //       $this->db->trans_complete();
    //       if($this->db->trans_status() != FALSE){
    //           return true;
    //       } else {
    //           return false;
    //       }
    //   }

   
   public function randuser()
    {
        $uscode = time() + $this->db->order_by('user_role_id',"DESC")->limit(1)->get('user_role')->row()->user_role_id+0;
        $query = $this->db->get_where('user_role', array('username' => $uscode))->row_array();
        if (!empty($query)) {
            $this->randuser();
        }else{
            return $uscode; 
        }
        return $uscode;
    }
    
    
    
    public function profile_update()
        {
            $this->db->trans_start();
            
             $data['fname'] = $this->input->post('fname');
            $data['lname'] = $this->input->post('lname');
            //  $data['account_id'] = $this->input->post('user_id'); 
            // $data['email'] = $this->input->post('email');
            $data['phone'] = $this->input->post('mobile');
            $data['country'] = $this->input->post('country');
            // $data['sponsor'] = $this->input->post('sponsor');
            // $data['sp_id'] = $this->input->post('sp_id');
           // $data['j_date'] = $this->input->post('j_date');
            
            $this->db->where('username',$this->session->userdata('usquareusername'));
            $this->db->update('user_role',$data);

            $this->db->trans_complete();
            
            if($this->db->trans_status() == TRUE)
            {
                return true;
            }
            else
            {
                return false;
            }
             
            
        }
        
   
   
   
   
   
   
   
   
   
   
   
      
  }
       