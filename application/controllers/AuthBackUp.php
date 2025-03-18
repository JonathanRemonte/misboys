<!-- 4bhive all rights reserved for EMB MIMAROPA.
  code and name coined by TheMan
  Proposed by RD Joe, Csez and Yuri on 27Jan2022 @1300 hrs -->
<?php
class Auth extends CI_Controller{
  public function __construct(){
    parent:: __construct();
    $this->load->model('Auth_model');
  }

  public function firmdash(){
    $data['result1']=$this->Auth_model->getlastfid();
    $data['result']=$this->Auth_model->getAllData();
    $this->load->view('firmdash',$data);
  }

  public function index(){
    $data['result']=$this->Auth_model->getProgress();
    $data['result2']=$this->Auth_model->getAct();
    $data['result3']=$this->Auth_model->MarFirmCount();
    $data['result4']=$this->Auth_model->OccFirmCount();
    $data['result5']=$this->Auth_model->OrFirmCount();
    $data['result6']=$this->Auth_model->RomFirmCount();
    $data['result7']=$this->Auth_model->PalFirmCount();
    $this->load->view('header');
    $this->load->view('index',$data);
    $this->load->view('footer');
  }

  public function blackhive(){
    $data['result']=$this->Auth_model->getUser0();
    $data['result1']=$this->Auth_model->getInactFirm();
    $data['result2']=$this->Auth_model->getInactlgl();
    $data['result3']=$this->Auth_model->getUserStat();
    $data['result4']=$this->Auth_model->getPcoDeact();
    $this->load->view('header');
    $this->load->view('blackhive',$data);
    $this->load->view('footer');
  }

  public function firmprof($fid){
    $data['row']=$this->Auth_model->getData($fid);
    $data['result']=$this->Auth_model->getOneLGL($fid);
    $data['result1']=$this->Auth_model->getAllLGL($fid);
    // $data['result2']=$this->Auth_model->getUpdp($fid);
    $data['result2']=$this->Auth_model->getUpemed($fid);
    $data['result3']=$this->Auth_model->getUplgl($fid);
    $data['result4']=$this->Auth_model->getUpcpd($fid);
    $data['result5']=$this->Auth_model->getUpProFlo($fid);
    $data['result6']=$this->Auth_model->getPco($fid);
    $this->load->view('header');
    $this->load->view('locscript');
    $this->load->view('firmprof',$data);
    $this->load->view('edmod');
    $this->load->view('footer');
  }

  public function isscon(){
    $data['result']=$this->Auth_model->getIssCon();
    $this->load->view('isscon',$data);
  }

  public function datatab(){
    $this->load->view('datatab');
  }

  public function create(){
    $this->Auth_model->createData();
    redirect("Auth/firmdash");
  }

  public function edit($fid){
    $data['row']=$this->Auth_model->getData($fid);
    $this->load->view('header');
    $this->load->view('dashed',$data);
    $this->load->view('footer');
  }//edit

  public function upfirmprof($fid){
    $config['upload_path']='./upglobal/upfirmprof/';
    $config['allowed_types']='*';
    $config['max_size']='2000000';
    $config['max_width']='*';
    $config['max_height']='*';
    $config['remove_spaces'] = FALSE;

    $this->load->library('upload',$config);
    $this->upload->initialize($config);

    if(!$this->upload->do_upload('userfile')) {

      $errors=array('error' => $this->upload->display_errors());
      $post_image='noimage.jpg';
    }else{
      $data=array('upload_data'=>$this->upload->data());
      $firimg=$_FILES['userfile']['name'];
    }//if

    $this->Auth_model->create_post($fid,$firimg);
    redirect('Auth/firmdash');

  }//updp

  //addPCO
  public function addpco($fid){
    $this->Auth_model->addPCO($fid);
    redirect("Auth/firmprof/".$fid);
  }  //addPCO

  //addLGL
  public function addLGL($fid){
    $this->Auth_model->createLGL($fid);
    redirect("Auth/firmprof/".$fid);
  }  //addLGL

  //adisscon
  public function adisscon(){
    $this->Auth_model->adIssCon();
    redirect("Auth/isscon");
  }  //adisscon

  public function update($fid){
    $this->Auth_model->updateData($fid);
    redirect("Auth/firmdash");
  }

  public function edone($fid){
    $this->Auth_model->updateOne($fid);
    redirect("Auth/firmprof/".$fid);
  }

  //cpd unup
  public function delone($fid,$upcpdid){
    $this->Auth_model->delOne($fid,$upcpdid);
    redirect("Auth/firmprof/".$fid);
  }

  //un lgl
  public function deleg($fid,$uplegid){
    $this->Auth_model->deLeg($uplegid);
    redirect("Auth/firmprof/".$fid);
  }

  //emed unup
  public function deloneEm($fid,$upemeid){
    $this->Auth_model->deloneEmed($fid,$upemeid);
    redirect("Auth/firmprof/".$fid);
  }

  public function edfirm($fid){
    $this->Auth_model->updateFirm($fid);
    redirect("Auth/firmprof/".$fid);
  }

  //generic fileupload
  public function edGeneric($issid,$upact){
    $this->Auth_model->edGenIssCon($issid,$upact);
    redirect("Auth/isscon/");
  }

  //edisscon
  public function edisscon($issid){
    $config['upload_path']='./upact/';
    $config['allowed_types']='*';
    $config['max_size']='2000000';
    $config['max_width']='*';
    $config['max_height']='*';
    $config['remove_spaces'] = FALSE;

    $this->load->library('upload',$config);
    $this->upload->initialize($config);

    if(!$this->upload->do_upload('userfile')) {

      $errors=array('error' => $this->upload->display_errors());
      $post_image='noimage.jpg';
    }else{
      $data=array('upload_data'=>$this->upload->data());
      $upact=$_FILES['userfile']['name'];
    }//if

    $this->Auth_model->edIssCon($issid,$upact);
    redirect("Auth/isscon/");
  }

  //useact
  public function useact($userid){
    $this->Auth_model->useAct($userid);
    redirect("Auth/blackhive");
  }//useact

  //firmact
  public function firmact($fid){
    $this->Auth_model->firmAct($fid);
    redirect("Auth/blackhive");
  }//firmact

  //firmact
  public function lglact($fid){
    $this->Auth_model->lglAct($fid);
    redirect("Auth/blackhive");
  }//firmact

  //pco act
  public function pcoact($pcocnt){
    $this->Auth_model->pcoAct($pcocnt);
    redirect("Auth/blackhive");
  }

  //edit lgl
  public function updmanyEMED($fid){
    $this->Auth_model->updateEmed($fid);
    redirect("Auth/firmprof/".$fid);
  }//edit emed

  //edit lgl
  public function edlgl($cntlegal,$fid){
    $this->Auth_model->updateLGL($cntlegal,$fid);
    redirect("Auth/firmprof/".$fid);
  }//edit lgl

  //deac lgl
  public function dellgl($cntlegal,$fid){
    $this->Auth_model->deacLGL($cntlegal,$fid);
    redirect("Auth/firmprof/".$fid);
  }//deac lgl

  public function edhead($fid){
    $this->Auth_model->updateHead($fid);
    redirect("Auth/firmprof/".$fid);
  }//edit managing head

  public function edpco($fid,$pcocnt){
    $this->Auth_model->updatePco($pcocnt);
    redirect("Auth/firmprof/".$fid);
  }//edit pco

  public function delpco($fid,$pcocnt){
    $this->Auth_model->deactPco($pcocnt);
    redirect("Auth/firmprof/".$fid);
  }//deact pco

  //ediss
  public function ediss($issid){
    $this->Auth_model->updateIss($issid);
    redirect("Auth/isscon/");
  }

  //dp upload
  public function updplab($fid){
    $config['upload_path']='./upglobal/updplab/';
    $config['allowed_types']='doc|docx|xls|xlsx|pdf|jpg|jpeg|png';
    $config['max_size']='2000000';
    $config['max_width']='*';
    $config['max_height']='*';
    $config['remove_spaces'] = FALSE;

    $this->load->library('upload',$config);
    $this->upload->initialize($config);

    if(!$this->upload->do_upload('userfile')) {
      $errors=array('error' => $this->upload->display_errors());
      $post_image='noimage.jpg';
    }else{
      $data=array('upload_data'=>$this->upload->data());
      $dplabfile=$_FILES['userfile']['name'];
    }//if

    $this->Auth_model->uploadDPlab($fid,$dplabfile);
    redirect("Auth/firmprof/".$fid);
  }//main func

  //multiple upload
  public function upcpd($fid){
    // Check form submit or not
    if($this->input->post('upload') != NULL ){
      $data = array();
      // Count total files
      $countfiles = count($_FILES['files']['name']);
      // Looping all files
      for($i=0;$i<$countfiles;$i++){
        if(!empty($_FILES['files']['name'][$i])){
          // Define new $_FILES array - $_FILES['file']
          $_FILES['file']['name'] = $_FILES['files']['name'][$i];
          $_FILES['file']['type'] = $_FILES['files']['type'][$i];
          $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
          $_FILES['file']['error'] = $_FILES['files']['error'][$i];
          $_FILES['file']['size'] = $_FILES['files']['size'][$i];

          // Set preference
          $config['upload_path']='./upglobal/upcpd/';
          $config['allowed_types']='doc|docx|xls|xlsx|pdf|jpg|jpeg|png';
          $config['max_size']='2000000';
          $config['max_width']='*';
          $config['max_height']='*';
          $config['remove_spaces'] = FALSE;
          $config['file_name'] = $_FILES['files']['name'][$i];
          //Load upload library
          $this->load->library('upload',$config);
          $this->upload->initialize($config);

          // File upload
          if($this->upload->do_upload('file')){
            // Get data about the file
            $uploadData = $this->upload->data();
            $filename = $uploadData['file_name'];

            // Initialize array
            $data['filenames'][] = $filename;
            $this->Auth_model->uploadCpd($fid,$filename);
          }//// File upload
        }//if(!empty($_FILES['files']['name'][$i]))
      }//for($i=0;$i<$countfiles;$i++)
      // load view
      redirect("Auth/firmprof/".$fid);
      // $this->load->view('user_view',$data);
    }else{
      // load view
      redirect("Auth/firmprof/".$fid);
      // $this->load->view('user_view');
    }//else
  }//multiple upload func

  //multiple upload
  public function upemed($fid){
    // Check form submit or not
    if($this->input->post('upload') != NULL ){
      $data = array();
      // Count total files
      $countfiles = count($_FILES['files']['name']);
      // Looping all files
      for($i=0;$i<$countfiles;$i++){
        if(!empty($_FILES['files']['name'][$i])){
          // Define new $_FILES array - $_FILES['file']
          $_FILES['file']['name'] = $_FILES['files']['name'][$i];
          $_FILES['file']['type'] = $_FILES['files']['type'][$i];
          $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
          $_FILES['file']['error'] = $_FILES['files']['error'][$i];
          $_FILES['file']['size'] = $_FILES['files']['size'][$i];

          // Set preference
          $config['upload_path']='./upglobal/upemed/';
          $config['allowed_types']='doc|docx|xls|xlsx|pdf|jpg|jpeg|png';
          $config['max_size']='2000000';
          $config['max_width']='*';
          $config['max_height']='*';
          $config['remove_spaces'] = FALSE;
          $config['file_name'] = $_FILES['files']['name'][$i];
          //Load upload library
          $this->load->library('upload',$config);
          $this->upload->initialize($config);

          // File upload
          if($this->upload->do_upload('file')){
            // Get data about the file
            $uploadData = $this->upload->data();
            $filename = $uploadData['file_name'];

            // Initialize array
            $data['filenames'][] = $filename;
            $this->Auth_model->uploadEmed($fid,$filename);
          }//// File upload
        }//if(!empty($_FILES['files']['name'][$i]))
      }//for($i=0;$i<$countfiles;$i++)
      // load view
      redirect("Auth/firmprof/".$fid);
      // $this->load->view('user_view',$data);
    }else{
      // load view
      redirect("Auth/firmprof/".$fid);
      // $this->load->view('user_view');
    }//else
  }//multiple upload func

  //multiple upload
  public function uplgl($fid){
    // Check form submit or not
    if($this->input->post('upload') != NULL ){
      $data = array();
      // Count total files
      $countfiles = count($_FILES['files']['name']);
      // Looping all files
      for($i=0;$i<$countfiles;$i++){
        if(!empty($_FILES['files']['name'][$i])){
          // Define new $_FILES array - $_FILES['file']
          $_FILES['file']['name'] = $_FILES['files']['name'][$i];
          $_FILES['file']['type'] = $_FILES['files']['type'][$i];
          $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
          $_FILES['file']['error'] = $_FILES['files']['error'][$i];
          $_FILES['file']['size'] = $_FILES['files']['size'][$i];

          // Set preference
          $config['upload_path']='./upglobal/uplgl/';
          $config['allowed_types']='doc|docx|xls|xlsx|pdf|jpg|jpeg|png';
          $config['max_size']='2000000';
          $config['max_width']='*';
          $config['max_height']='*';
          $config['remove_spaces'] = FALSE;
          $config['file_name'] = $_FILES['files']['name'][$i];
          //Load upload library
          $this->load->library('upload',$config);
          $this->upload->initialize($config);

          // File upload
          if($this->upload->do_upload('file')){
            // Get data about the file
            $uploadData = $this->upload->data();
            $filename = $uploadData['file_name'];

            // $data=array('upload_data'=>$this->upload->data());
            // $uplgl=$_FILES['userfile']['name'];

            // Initialize array
            $data['filenames'][] = $filename;
            $this->Auth_model->uploadLegal($fid,$filename);
          }//// File upload
        }//if(!empty($_FILES['files']['name'][$i]))
      }//for($i=0;$i<$countfiles;$i++)
      // load view
      redirect("Auth/firmprof/".$fid);
      // $this->load->view('user_view',$data);
    }else{
      // load view
      redirect("Auth/firmprof/".$fid);
      // $this->load->view('user_view');
    }//else
  }//multiple upload func

  //generic dynamic upload
  public function upgeneric($id,$uploc){
    $config['upload_path']='./'.$uploc.'/';
    $config['allowed_types']='*';
    $config['max_size']='2000000';
    $config['max_width']='*';
    $config['max_height']='*';
    $config['remove_spaces'] = FALSE;

    $this->load->library('upload',$config);
    $this->upload->initialize($config);

    if(!$this->upload->do_upload('userfile')) {

      $errors=array('error' => $this->upload->display_errors());
      $post_image='noimage.jpg';
    }else{
      $data=array('upload_data'=>$this->upload->data());
      $uploc=$_FILES['userfile']['name'];
    }//if
    $this->edGeneric($id,$uploc);
  }//generic dynamic upload

  public function updparam($fid){
    $this->Auth_model->updateParam($fid);
    redirect("Auth/firmprof/".$fid);
  }

  public function updoutlet($fid){
    $this->Auth_model->updateOutlet($fid);
    redirect("Auth/firmprof/".$fid);
  }

  public function edwwtf($fid){
    $this->Auth_model->updateWwtf($fid);
    redirect("Auth/firmprof/".$fid);
  }

  public function edadrs($fid){
    $this->Auth_model->updateAdrs($fid);
    redirect("Auth/firmprof/".$fid);
  }

  public function edfs($fid){
    $this->Auth_model->edfstat($fid);
    redirect("Auth/firmdash");
  }

  public function dropdown(){
    $this->load->model('model_name');
    $this->data['dropdown'] = $this->model_name->get_dropdown_list();
    $this->load->view('yourview', $this->data);
  }//dropdown

  function logout(){
    // actdat for activity
    date_default_timezone_set('Asia/Manila'); // CDT
    $actdat = date('YMd H:i:s');

    $data=array(
      'uname'=>$_SESSION['uname'], 'acttyp'=>'logged out', 'actdat'=>$actdat
     );
    $this->db->insert('actvty',$data);

    //lilo
    $data=array(
      'lilo'=>0, 'lilodat'=>$actdat
     );
     $this->db->where('userid',$_SESSION['userid']);
     $this->db->update('user',$data);

    $this->session->sess_destroy();
    redirect(base_url());
  }//logout

  public function login(){
    $this->form_validation->set_rules('uname','Username','required');
    $this->form_validation->set_rules('upass','Password','required');

    if ($this->form_validation->run()== TRUE) {

      $uname=$_POST['uname'];
      $upass=md5($_POST['upass']);

      // check user in // DB
      $this->db->select('*');
      $this->db->from('user');
      $this->db->where(array('uname'=>$uname,'upass'=>$upass));
      $query=$this->db->get();

      $user=$query->row();
      //if user exists
      if ($user->ustat) {
        //temp msg

        //set session Variables
        $_SESSION['user_logged']=TRUE;
        // $_SESSION['uname']=$user->uemail;
        $_SESSION['userid']=$user->userid;
        $_SESSION['uname']=$user->uname;
        $_SESSION['urights']=$user->urights;
        $_SESSION['udiv']=$user->udiv;

        // actdat for activity
        date_default_timezone_set('Asia/Manila'); // CDT
        $actdat = date('YMd H:i:s');

        $data=array(
          'uname'=>$_SESSION['uname'], 'acttyp'=>'logged in', 'actdat'=>$actdat
         );
        $this->db->insert('actvty',$data);

        //lilo
        $data=array(
          'lilo'=>1, 'lilodat'=>$actdat
         );
         $this->db->where('userid',$_SESSION['userid']);
         $this->db->update('user',$data);

        redirect("auth/index","");

      }else{
        $this->session->set_flashdata("error","Access denied!");
        redirect(base_url(),"refresh");
      }//if user
    }//if true

    $this->load->view('login');
  }

  public function enlist(){
    // if (isset($_POST['enlist'])) {
      // code...
      $this->form_validation->set_rules('uname','Username','required');
      $this->form_validation->set_rules('upass','Password','required|min_length[3]');
      $this->form_validation->set_rules('upass2','Confirm Password','required|min_length[3]|matches[upass]');
      $this->form_validation->set_rules('uemail','Email','required');
      $this->form_validation->set_rules('uphone','Phone','required|min_length[3]');
        //if form validation true
        if ($this->form_validation->run() == TRUE) {
          // echo 'form validated';
          //add user in database
          $data=array(
            'uname'=>$_POST['uname'], 'upass'=>md5($_POST['upass']), 'uemail'=>$_POST['uemail'],
            'udiv'=>$_POST['udiv'], 'usec'=>$_POST['usec'], 'usex'=>$_POST['usex'], 'uphone'=>$_POST['uphone'],
            'udaten'=>$_POST['udaten'], 'urights'=>$_POST['urights'], 'ustat'=>$_POST['ustat']
           );
           $this->db->insert('user',$data);

           $data=array(
             'uname'=>$_POST['uname'], 'acttyp'=>'registered', 'actdat'=>$_POST['udaten']
            );
           $this->db->insert('actvty',$data);

           $this->session->set_flashdata("success","File an IIS Support Ticket to the MIS.");
           redirect("auth/login","refresh");
        }
    // }//if isset

    //load view
    // $data["title"]='@#$%^&SATOR#$%^&';
    $this->load->view('enlist');
  }//func enlist

//export to excel

//export to excel end

//check uname duplicate
function unameduplicate() {
  if (isset($_POST['uname'])) {
    $uname = $_POST['uname'];
    $results = $this->Auth_model->get_uname($uname);
    if ($results === TRUE) {
      echo '<span style="color:red;">Username already exists! Please change it.</span>';
    } else {
      echo '<span style="color:green;">Username is available. Take it!</span>';
    }
  } else {
    echo '<span style="color:red;">Username is required field.</span>';
  }
}

  function trial(){
    echo '#$%^&*()';
  }
}//main
