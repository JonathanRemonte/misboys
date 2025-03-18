<!-- 4bhive all rights reserved for EMB MIMAROPA.
  code and name coined by TheMan
  Proposed by RD Joe, Csez and Yuri on 27Jan2022 @1300 hrs -->

<?php
class Ind_model extends CI_Model{
  public function __construct(){
    parent::__construct();
    $this->load->database();
  }

  public function adTask(){
    $data=array(
      'proid'=>$this->input->post('proid'), 'task'=>$this->input->post('task'), 'scale'=>$this->input->post('scale')
    );
    $this->db->insert('progress',$data);
  }

  function edTask($proid){
    $data=array(
      'task'=>$this->input->post('task'),
      'scale'=>$this->input->post('scale')
    );
    $this->db->where('proid',$proid);
    $this->db->update('progress',$data);
  }//update

}
