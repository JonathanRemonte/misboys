<!-- 4bhive all rights reserved for EMB MIMAROPA.
  code and name coined by TheMan
  Proposed by RD Joe, Csez and Yuri on 27Jan2022 @1300 hrs -->
<?php
class Ind extends CI_Controller{
  public function __construct(){
    parent:: __construct();
    $this->load->model('Ind_model');
  }

  public function adtask(){
    $this->Ind_model->adTask();
    redirect("Auth/index");
  }

  public function edtask($proid){
    $this->Ind_model->edTask($proid);
    redirect("Auth/index/");
  }

}
