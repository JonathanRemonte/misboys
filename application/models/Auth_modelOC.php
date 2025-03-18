<?php
class Auth_modelOC extends CI_Model{
  public function __construct(){
    parent::__construct();
    $this->load->database();
  }
  
  // OJT OrgChart
  public function getOJTOrgchart(){
    $query = $this->db->get('orgchart');
    return $query->result_array();
  }

  public function getDataEdit($default){
    $this->db->where('id', $default);
    $result = $this->db->get('orgchart');
    return $result->row_array();
  }

  public function getOrgChartHistory(){
    $query = $this->db->get('orgcharthis');
    return $query->result_array();
  }

  public function getFr(){
    $query = $this->db->get('embfr');
    return $query->result_array();
  }


  public function update_data($image_tmp) {
    $id = $this->input->post('id');
    $swapid = $this->input->post('swap');

    if (empty($image_tmp)){
        if (!empty($this->input->post('swap'))){
            $data = array (
                'id' => $this->input->post('swap'),
                'name' => $this->input->post('name'),
                'embid' => $this->input->post('embid'),
                'division' => $this->input->post('division'),
                'section' => $this->input->post('section'),
                'unit' => $this->input->post('unit'),
                'empstatus' => $this->input->post('empstatus'),
                'role' => $this->input->post('role'),
                'enmo' => $this->input->post('enmo'),
                'emptitle' => $this->input->post('emptitle')
            );
        }else
            $data = array(
                'name' => $this->input->post('name'),
                'embid' => $this->input->post('embid'),
                'division' => $this->input->post('division'),
                'section' => $this->input->post('section'),
                'unit' => $this->input->post('unit'),
                'empstatus' => $this->input->post('empstatus'),
                'role' => $this->input->post('role'),
                'enmo' => $this->input->post('enmo'),
                'emptitle' => $this->input->post('emptitle')
            );
    }else{
      $img_data = file_get_contents($image_tmp);
      $img_data = base64_encode($img_data);

        if (!empty($this->input->post('swap'))){
            $data = array(
                'id' => $this->input->post('swap'),
                'name' => $this->input->post('name'),
                'embid' => $this->input->post('embid'),
                'division' => $this->input->post('division'),
                'section' => $this->input->post('section'),
                'unit' => $this->input->post('unit'),
                'empstatus' => $this->input->post('empstatus'),
                'role' => $this->input->post('role'),
                'enmo' => $this->input->post('enmo'),
                'emptitle' => $this->input->post('emptitle'),
                'img' => $img_data
            );
        }else
            $data = array(
                'name' => $this->input->post('name'),
                'embid' => $this->input->post('embid'),
                'division' => $this->input->post('division'),
                'section' => $this->input->post('section'),
                'unit' => $this->input->post('unit'),
                'empstatus' => $this->input->post('empstatus'),
                'role' => $this->input->post('role'),
                'enmo' => $this->input->post('enmo'),
                'emptitle' => $this->input->post('emptitle'),
                'img' => $img_data
            );
    }

    $datahis = array(
        'name' => $this->input->post('name'),
        'embid' => $this->input->post('embid'),
        'action' => "Update",
        'date' => $this->input->post('date'),
        'remarks' => $this->input->post('remarks')
    );

    $this->db->insert('orgcharthis', $datahis);
    $this->db->where('id', $id);
    return $this->db->update('orgchart', $data);
  }

  public function deleteOld() {
      $now = time();
      $yesterday = strtotime('-1 day', $now);
      $date = date('Y-m-d', $yesterday);
      
      $this->db->where('STR_TO_DATE(authDate, "%Y-%m-%d") <=', $date);
      $this->db->delete('embfr');
      
      return $this->db->affected_rows();
  }

  public function delete_data() {
    $id = $this->input->post('id');

    $data = array(
        'name' => $this->input->post('name'),
        'embid' => $this->input->post('embid'),
        'division' => $this->input->post('division'),
        'section' => $this->input->post('section'),
        'unit' => $this->input->post('unit'),
        'empstatus' => $this->input->post('empstatus'),
        'role' => $this->input->post('role'),
        'enmo' => $this->input->post('enmo'),
        'block' => "noblock",
        'showhide'=> "0"
    );

    $datahis = array(
        'name' => $this->input->post('name'),
        'embid' => $this->input->post('embid'),
        'action' => "Delete",
        'date' => $this->input->post('date'),
        'remarks' => $this->input->post('remarks')
    );

    $this->db->insert('orgcharthis', $datahis);
    $this->db->where('id', $id);
    return $this->db->update('orgchart', $data);
  }

  public function update_swap() {
    $data = array( 'id' => "9999" );
    $this->db->where('id', $this->input->post('swap'));
    return $this->db->update('orgchart', $data);
  }

  public function update_swaptwo(){
      $idswap = $this->input->post('id');
      $data = array( 'id' => $idswap );
      $this->db->where('id', "9999");
      return $this->db->update('orgchart', $data);
  }

  public function getSimilarBlock($default){
      $this->db->where('block', $default);
      $query = $this->db->get('orgchart');
      return $query->row_array();
  }

  public function update_block() {
    $id = $this->input->post('id');
    $data = array( 'block' => $this->input->post('block'), );
    $this->db->where('id', $id);
    return $this->db->update('orgchart', $data);
  }

  public function update_existblock(){
      $existid = $this->input->post('existid');
      $data = array( 'block' => "noblock" );
      $this->db->where('id', $existid);
      return $this->db->update('orgchart', $data);
  }
}
?>