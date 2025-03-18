<!-- 4bhive all rights reserved for EMB MIMAROPA.
  code and name coined by TheMan
  Proposed by RD Joe, Csez and Yuri on 27Jan2022 @1300 hrs -->
<?php
class User extends CI_Controller{
  public function __construct(){
    parent::__construct();
    if (!isset($_SESSION['user_logged'])) {
      $this->session->set_flashdata("error","You are accessing illegally, your action is punishable by law!");
      redirect("auth/login");
    }
  }

  // public function dashed(){
  //   $this->load->view('header');
  //   $this->load->view('dashed');
  //   $this->load->view('footer');
  // }

  public function logout(){
      $this->session->sess_destroy();
      redirect('auth/login',"refresh");
  }


}
