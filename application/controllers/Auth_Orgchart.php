<?php
class Auth_Orgchart extends CI_Controller{
  public function __construct(){
    parent:: __construct();
    $this->orgchart = $this->Auth_modelOC->getOJTOrgchart();
    $this->orgcharthis = $this->Auth_modelOC->getOrgchartHistory();
    $this->fr = $this->Auth_modelOC->getFr();
  }

  public function ojtindex(){
    if ($this->session->userdata('userlog')) { redirect('ojt-home'); }
    $this->load->view('orgchart/oc-index', array('orgchart' => $this->orgchart));
  }

  public function authenticate() {
    if($this->input->post('codeinput') == 1){ $is_admin = 1; }
    else { $is_admin = 2; }

    $this->session->set_userdata('is_admin', $is_admin);
    $this->session->set_userdata('userlog', true);
    redirect('ojt-home');
  }
  
  public function ojtsignctrl() {
      $this->session->set_userdata('is_admin', null);
      $this->session->set_userdata('userlog', false);
      redirect('ojt-index');
  }

  public function ojthome(){
    if (!$this->session->userdata('userlog')) { redirect('ojt-index'); }
    $this->load->view('orgchart/oc-home');
  }

  public function ojtcontrol(){
    $this->load->view('orgchart/oc-control', array('orgchart' => $this->orgchart));
  }

  public function ojtlandscape(){
    $this->load->view('orgchart/oc-landscape-chart', array('orgchart' => $this->orgchart));
  }

  public function ojtlandscapev2(){
    $this->load->view('orgchart/oc-landscape-chart-v2', array('orgchart' => $this->orgchart));
  }

  public function ojthistory(){
    $this->load->view('orgchart/oc-history', array('orgchart' => $this->orgchart, 'orgcharthis' => $this->orgcharthis));
  }

  public function ojtfloorplanpismu(){
    $this->Auth_modelOC->deleteOld();
    $this->load->view('orgchart/oc-floorplan-pismu', array('orgchart' => $this->orgchart, 'fr' => $this->fr));
    $this->load->view('orgchart/template/modal-footer');
  }

  public function ojtfloorplanrecords(){
    $this->Auth_modelOC->deleteOld();
    $this->load->view('orgchart/oc-floorplan-records', array('orgchart' => $this->orgchart, 'fr' => $this->fr));
    $this->load->view('orgchart/template/modal-footer');
  }

  public function ojtfloorplantechnical() {
    $this->Auth_modelOC->deleteOld();
    $this->load->view('orgchart/oc-floorplan-technical', array('orgchart' => $this->orgchart, 'fr' => $this->fr));
    $this->load->view('orgchart/template/modal-footer');
  }

  public function ojtfloorplanfad() {
    $this->Auth_modelOC->deleteOld();
    $this->load->view('orgchart/oc-floorplan-fad', array('orgchart' => $this->orgchart, 'fr' => $this->fr));
    $this->load->view('orgchart/template/modal-footer');
  }

  public function ojtfloorplanord() {
    $this->Auth_modelOC->deleteOld();
    $this->load->view('orgchart/oc-floorplan-ord', array('orgchart' => $this->orgchart, 'fr' => $this->fr));
    $this->load->view('orgchart/template/modal-footer');
  }

  public function ojtfloorplanlist() {
    $this->Auth_modelOC->deleteOld();
    $this->load->view('orgchart/oc-floorplan-list', array('orgchart' => $this->orgchart, 'fr' => $this->fr));
  }

  public function ojtfloorplanchief() {
    $this->Auth_modelOC->deleteOld();
    $this->load->view('orgchart/oc-floorplan-chief', array('orgchart' => $this->orgchart, 'fr' => $this->fr));
  }

  public function ojtedit($default = null){
    $this->form_validation->set_rules('name', 'name', 'required');
    $this->form_validation->set_rules('embid', 'embid', 'required');
    
    $data['orgchart'] = $this->Auth_modelOC->getDataEdit($default);
    $data['orgchartget'] = $this->Auth_modelOC->getOJTOrgchart();
    
    $data['id'] = $data['orgchart']['id'];
    $data['name'] = $data['orgchart']['name'];
    $data['division'] = $data['orgchart']['division'];
    $data['unit'] = $data['orgchart']['unit'];
    $data['embid'] = $data['orgchart']['embid'];
    $data['section'] = $data['orgchart']['section'];
    $data['role'] = $data['orgchart']['role'];
    $data['enmo'] = $data['orgchart']['enmo'];
    $data['emptitle'] = $data['orgchart']['emptitle'];
    $data['empstatus'] = $data['orgchart']['empstatus'];
    $data['img'] = $data['orgchart']['img'];


    if($data['orgchart']){
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('orgchart/oc-edit', $data);
        } else {
            $image_tmp = $_FILES['img']['tmp_name'];

            $this->Auth_modelOC->update_swap();
            $this->Auth_modelOC->update_data($image_tmp);
            $this->Auth_modelOC->update_swaptwo();
            
            // $this->session->set_flashdata('post_edit', $data['name']. ' is successfully <b>EDITED.</b>');
            $this->session->set_tempdata('post_edit', $data['name']. ' is successfully <b>EDITED.</b>', 0);
            redirect(base_url().'ojt-landscape-chart');
        }
    }else{
        show_404();
    }
  }

  public function ojtdelete($default = null){
    $this->form_validation->set_rules('name', 'name', 'required');
    $this->form_validation->set_rules('embid', 'embid', 'required');
    
    $data['orgchart'] = $this->Auth_modelOC->getDataEdit($default);
    
    $data['id'] = $data['orgchart']['id'];
    $data['name'] = $data['orgchart']['name'];
    $data['division'] = $data['orgchart']['division'];
    $data['unit'] = $data['orgchart']['unit'];
    $data['embid'] = $data['orgchart']['embid'];
    $data['section'] = $data['orgchart']['section'];
    $data['role'] = $data['orgchart']['role'];
    $data['enmo'] = $data['orgchart']['enmo'];
    $data['empstatus'] = $data['orgchart']['empstatus'];
    $data['showhide'] = $data['orgchart']['showhide'];


    if($data['orgchart']){
        if ($this->form_validation->run() == FALSE) {
            if (!file_exists(APPPATH.'views/orgchart/oc-delete.php')){ show_404(); }
            $this->load->view('orgchart/oc-delete', $data);
        } else {
            $this->Auth_modelOC->delete_data();
            $this->session->set_tempdata('post_delete', $data['name']. ' is successfully <b>DELETED.</b>', 0);
            redirect(base_url().'ojt-landscape-chart');
        }
    }else{
        show_404();
    }
  }

  public function insert_data() {
    $this->form_validation->set_rules('name', 'name', 'required');
    $this->form_validation->set_rules('embid', 'embid', 'required');

    if ($this->form_validation->run() == FALSE) {
        if (!file_exists(APPPATH.'views/orgchart/oc-edit.php')){ show_404(); }

        $this->load->view('pages/edit');
    } else {
        $division = $this->input->post('division');
        $section = $this->input->post('section');
        $unit = $this->input->post('unit');
        $name = $this->input->post('name');
        $role = $this->input->post('role');
        $enmo = $this->input->post('enmo');
        $empstatus = $this->input->post('employeestatus');
        $embid = $this->input->post('embid');
        $date = $this->input->post('date');
        $remarks = $this->input->post('remarks');

        $this->db->where('name', $name);
        $query = $this->db->get('orgchart');

        if ($query->num_rows() > 0) {
            $data['division'] = $division;
            $data['section'] = $section;
            $data['unit'] = $unit;
            $data['name'] = $name;
            $data['role'] = $role;
            $data['enmo'] = $enmo;
            $data['empstatus'] = $empstatus;
            $data['embid'] = $embid;
            $data['date'] = $date;
            $data['remarks'] = $remarks;

            $this->load->view('orgchart/oc-promptdouble', $data);
        } else {
            $data = array(
                'embid' => $embid,
                'division' => $division,
                'section' => $section,
                'unit' => $unit,
                'name' => $name,
                'role' => $role,
                'enmo' => $enmo,
                'empstatus' => $empstatus
            );

            $datahis = array(
                'name' => $this->input->post('name'),
                'embid' => $this->input->post('embid'),
                'action' => "Added",
                'date' => $date,
                'remarks' => $remarks
            );
    
            $this->db->insert('orgcharthis', $datahis);
            $this->db->insert('orgchart', $data);
            $this->session->set_tempdata('post_added', $name. ' is successfully <b>ADDED.</b>', 0);
    
            redirect(base_url().'ojt-control');
        }
    }
  }

  public function insert_secdata() {
    $division = $this->input->post('division');
    $section = $this->input->post('section');
    $unit = $this->input->post('unit');
    $name = $this->input->post('name');
    $role = $this->input->post('role');
    $enmo = $this->input->post('enmo');
    $empstatus = $this->input->post('empstatus');
    $embid = $this->input->post('embid');
    
    $submit_value = $this->input->post('submit');

    if ($submit_value == "yes") {
        $data = array(
            'embid' => $embid,
            'division' => $division,
            'section' => $section,
            'unit' => $unit,
            'name' => $name,
            'role' => $role,
            'enmo' => $enmo,
            'empstatus' => $empstatus,
            'primarywork' => "0"
        );    
    }else if ($submit_value == "no"){
        $data = array(
            'embid' => $embid,
            'division' => $division,
            'section' => $section,
            'unit' => $unit,
            'name' => $name,
            'role' => $role,
            'enmo' => $enmo,
            'empstatus' => $empstatus,
            'primarywork' => "1"
        );
    }

    $datahis = array(
        'name' => $this->input->post('name'),
        'embid' => $this->input->post('embid'),
        'action' => "Added",
        'date' => $this->input->post('date'),
        'remarks' => $this->input->post('remarks')
    );

    $this->db->insert('orgcharthis', $datahis);
    $this->db->insert('orgchart', $data);
    $pageChart = "chart";
    $dataChart['orgchart'] = $this->Auth_modelOC->getOrgChart();
    $this->session->set_flashdata('post_added', $name. ' is successfully <b>ADDED.</b>');
    redirect(base_url().'control');
  }

  public function updateStatusFr() {
    $orgchart = $this->Auth_modelOC->getFr();
    echo json_encode($orgchart);
  }

  public function editblock($default = null){
    $name = $this->input->post('name');
    $block = $this->input->post('block');
    $id = $this->input->post('id');

    $this->form_validation->set_rules('block', 'block', 'required');

    if ($this->form_validation->run() == FALSE) {
        if (!file_exists(APPPATH.'views/orgchart/ojt-floorplan-pismu.php')){ show_404(); }

        $this->load->view('orgchart/ojt-floorplan-pismu');
    } else {
        $this->db->where('block', $block);
        $query = $this->db->get('orgchart');
    
        $default = $block;
        $data['existblock'] = $this->Auth_modelOC->getSimilarBlock($default);

        if ($query->num_rows() > 0) {
            $data['block'] = $block;
            $data['id'] = $id;
            $data['name'] = $name;
            $data['existid'] = $data['existblock']['id'];
            $this->load->view('orgchart/oc-promptblock', $data);
        } else {
            $this->Auth_modelOC->update_block();
            $this->session->set_tempdata('post_block', $name. ' is successfully <b>TRANSFERED.</b>', 0);
            redirect($_SERVER['HTTP_REFERER']);
        }
      }
  }

  public function insert_secblock() {
      $block = $this->input->post('block');
      $name = $this->input->post('name');
      $id = $this->input->post('id');
      $existid = $this->input->post('existid');

      $submit_value = $this->input->post('submit');

      if ($submit_value == "yes") {
          $this->Auth_modelOC->update_existblock();
          $this->Auth_modelOC->update_block();
          $this->session->set_tempdata('post_block', $name. ' is successfully <b>TRANSFERED.</b>', 0);
          redirect(base_url().'ojt-floorplan-pismu');
      }else if ($submit_value == "no"){
          $this->session->set_tempdata('post_blockcancel', $name. '&lsquo;s &nbsp;transfer has been <b>CANCELLED.</b>', 0);
          redirect(base_url().'ojt-floorplan-pismu');
      }
  }
}
?>
  