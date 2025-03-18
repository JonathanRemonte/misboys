<?php

class Auth extends CI_Controller{
  public function __construct(){
    parent:: __construct();
    $this->load->model('Auth_model');
    // if(empty($_SESSION['userid'])){
    //   redirect(base_url()); }
  }

  public function firmdash(){
    $data2['lgacc']=$this->Auth_model->getLgAcc();
    $data2['lgres']=$this->Auth_model->getLgReg();
    $data2['result9']=$this->Auth_model->getRecFoi();
    $data2['resultx']=$this->Auth_model->Upcpd4recfoi();
    $this->load->view('header',$data2);
    $data['result1']=$this->Auth_model->getlastfid();
    $data['result']=$this->Auth_model->getAllData();
    // $data['result8']=$this->Auth_model->getRecFoi0();

    $this->load->view('firmdash',$data);
    // $this->load->view('footer');
  }

  public function index(){
    $data['resprmtOcMin']=$this->Auth_model->getPrmtOcMin();
    $data['resprmtOrMin']=$this->Auth_model->getPrmtOrMin();
    $data['resprmtMar']=$this->Auth_model->getPrmtMar();
    $data['resprmtRom']=$this->Auth_model->getPrmtRom();
    $data['resprmtPal']=$this->Auth_model->getPrmtPal();

    $data['resultq10']=$this->Auth_model->getQcas();
    $data['resultm1']=$this->Auth_model->getQmis();
    $data['resultq2']=$this->Auth_model->getQecc();
    $data['resultq3']=$this->Auth_model->getQcnc();
    $data['resultq4']=$this->Auth_model->getQhwm();
    $data['resultq9']=$this->Auth_model->getQswm();
    $data['resultq8']=$this->Auth_model->getQcmr();
    $data['resultq7']=$this->Auth_model->getQsmr();
    $data['resultq5']=$this->Auth_model->getQpto();
    $data['resultq6']=$this->Auth_model->getQdp();
    $data['resultq31']=$this->Auth_model->getQpco();
    $data['resultq1']=$this->Auth_model->getQord();
    $data['resultq13']=$this->Auth_model->getQgss();
    $data['resultq11']=$this->Auth_model->getQrec();
    $data['resultq12']=$this->Auth_model->getQleg();
    $data['resultq101']=$this->Auth_model->getQdata();
    $data['resulthof2']=$this->Auth_model->getQhof2();

    $data['resulta1']=$this->Auth_model->getGolfmar();
    $data['resulta2']=$this->Auth_model->getGolfocmin();
    $data['resulta3']=$this->Auth_model->getGolformin();
    $data['resulta4']=$this->Auth_model->getGolfrom();
    $data['resulta5']=$this->Auth_model->getGolfpal();
    $data['resultb1']=$this->Auth_model->getHeavmar();
    $data['resultb2']=$this->Auth_model->getHeavocmin();
    $data['resultb3']=$this->Auth_model->getHeavormin();
    $data['resultb4']=$this->Auth_model->getHeavrom();
    $data['resultb5']=$this->Auth_model->getHeavpal();
    $data['resultc1']=$this->Auth_model->getInfrmar();
    $data['resultc2']=$this->Auth_model->getInfrocmin();
    $data['resultc3']=$this->Auth_model->getInfrormin();
    $data['resultc4']=$this->Auth_model->getInfrrom();
    $data['resultc5']=$this->Auth_model->getInfrpal();
    $data['resultd1']=$this->Auth_model->getOthemar();
    $data['resultd2']=$this->Auth_model->getOtheocmin();
    $data['resultd3']=$this->Auth_model->getOtheormin();
    $data['resultd4']=$this->Auth_model->getOtherom();
    $data['resultd5']=$this->Auth_model->getOthepal();
    $data['resulte1']=$this->Auth_model->getResomar();
    $data['resulte2']=$this->Auth_model->getResoocmin();
    $data['resulte3']=$this->Auth_model->getResoormin();
    $data['resulte4']=$this->Auth_model->getResorom();
    $data['resulte5']=$this->Auth_model->getResopal();

    $data['result']=$this->Auth_model->getProgress();
    $data['result2']=$this->Auth_model->getAct();
    $data['result3']=$this->Auth_model->MarFirmCount();
    $data['result4']=$this->Auth_model->OccFirmCount();
    $data['result5']=$this->Auth_model->OrFirmCount();
    $data['result6']=$this->Auth_model->RomFirmCount();
    $data['result7']=$this->Auth_model->PalFirmCount();
    $data['result8']=$this->Auth_model->getRecFoi0();

    $data2['lgacc']=$this->Auth_model->getLgAcc();
    $data2['lgres']=$this->Auth_model->getLgReg();
    $data2['result9']=$this->Auth_model->getRecFoi();
    $data2['resultx']=$this->Auth_model->Upcpd4recfoi();
    $this->load->view('header',$data2);
    $this->load->view('index',$data);
    $this->load->view('footer');
  }

  public function blackhive(){
    $data['resultcp1']=$this->Auth_model->changePass();
    $data['result']=$this->Auth_model->getUser0();
    $data['result1']=$this->Auth_model->getInactFirm();
    $data['result2']=$this->Auth_model->getInactlgl();
    $data['result3']=$this->Auth_model->getUserStat();
    $data['result4']=$this->Auth_model->getPcoDeact();

    $data2['lgacc']=$this->Auth_model->getLgAcc();
    $data2['lgres']=$this->Auth_model->getLgReg();
    $data2['result9']=$this->Auth_model->getRecFoi();
    $data2['resultx']=$this->Auth_model->Upcpd4recfoi();
    $this->load->view('header',$data2);
    $this->load->view('blackhive',$data);
    $this->load->view('footer');
  }

  public function firmprof($fid){
    $data['row']=$this->Auth_model->getData($fid);
    $data['result']=$this->Auth_model->getOneLGL($fid);
    $data['result1']=$this->Auth_model->getAllLGL($fid);
    $data['result2']=$this->Auth_model->getUpemed($fid);
    $data['result3']=$this->Auth_model->getUplgl($fid);
    $data['result4']=$this->Auth_model->getUpcpd($fid);
    $data['result5']=$this->Auth_model->getUpProFlo($fid);
    $data['result6']=$this->Auth_model->getPco($fid);
    $data['result7']=$this->Auth_model->getRecFoi();
    $data['result8']=$this->Auth_model->getRecFoi0();
    // $data2['resultw']=$this->Auth_model->getRecFoi0();
    $data2['lgacc']=$this->Auth_model->getLgAcc();
    $data2['lgres']=$this->Auth_model->getLgReg();
    $data2['result9']=$this->Auth_model->getRecFoi();
    $data2['resultx']=$this->Auth_model->Upcpd4recfoi();
    $this->load->view('header',$data2);
    $this->load->view('locscript');
    $this->load->view('firmprof',$data);
    $this->load->view('edmod');
    $this->load->view('footer');
  }

  public function que(){
    $data['resultchm']=$this->Auth_model->getQchime();
    $data['resulthof']=$this->Auth_model->getQhof();
    $data['resultm1']=$this->Auth_model->getQmis();
    $data['resultq1']=$this->Auth_model->getQord();
    $data['resultq2']=$this->Auth_model->getQecc();
    $data['resultq3']=$this->Auth_model->getQcnc();
    $data['resultq31']=$this->Auth_model->getQpco();
    $data['resultq4']=$this->Auth_model->getQhwm();
    $data['resultq5']=$this->Auth_model->getQpto();
    $data['resultq6']=$this->Auth_model->getQdp();
    $data['resultq7']=$this->Auth_model->getQsmr();
    $data['resultq8']=$this->Auth_model->getQcmr();
    $data['resultq9']=$this->Auth_model->getQswm();
    $data['resultq10']=$this->Auth_model->getQcas();
    $data['resultq11']=$this->Auth_model->getQrec();
    $data['resultq12']=$this->Auth_model->getQleg();
    $data['resultq13']=$this->Auth_model->getQgss();
    $this->load->view('que',$data);
  }

  public function req2op(){
    $data['result8']=$this->Auth_model->getRecFoi0();
    $data2['result9']=$this->Auth_model->getRecFoi();
    $data2['resultx']=$this->Auth_model->Upcpd4recfoi();
    $this->load->view('header',$data2);
    $this->load->view('req2op',$data);
    $this->load->view('footer');
  }

  public function form(){
    $data['resultord1']=$this->Auth_model->getQDatORD();
    $data['resultQ1']=$this->Auth_model->getQDat4Que();
    $data['resultQ2']=$this->Auth_model->getQDat4Tab();
    $this->load->view('form',$data);
    // $this->load->view('footer');
  }

  // swm start
  public function swmdash(){
    $data2['lgacc']=$this->Auth_model->getLgAcc();
    $data2['lgres']=$this->Auth_model->getLgReg();
    $data2['result9']=$this->Auth_model->getRecFoi();
    $data2['resultx']=$this->Auth_model->Upcpd4recfoi();
    $data['result8']=$this->Auth_model->getRecFoi0();
    $this->load->view('header',$data2);
    $this->load->view('swmdash',$data);
    $this->load->view('footer');
  }

  public function swmadmin(){
    $data2['actlguser']=$this->Auth_model->ActiveLgUser();
    $data2['lgacc']=$this->Auth_model->getLgAcc();
    $data2['lgres']=$this->Auth_model->getLgReg();
    $data2['result9']=$this->Auth_model->getRecFoi();
    $data2['resultx']=$this->Auth_model->Upcpd4recfoi();

    $data['resup']=$this->Auth_model->getUpLgu();

    $data['resid']=$this->Auth_model->getlguid();
    $data['res']=$this->Auth_model->getswmlgu();
    $this->load->view('header',$data2);
    $this->load->view('swmadmin',$data);
    $this->load->view('footer');
  }

  public function swmlgrep(){
    $data2['actlguser']=$this->Auth_model->ActiveLgUser();
    $data2['lgacc']=$this->Auth_model->getLgAcc();
    $data2['lgres']=$this->Auth_model->getLgReg();
    $data2['result9']=$this->Auth_model->getRecFoi();
    $data2['resultx']=$this->Auth_model->Upcpd4recfoi();

    $data['resup']=$this->Auth_model->getUpLgu();

    $data['resid']=$this->Auth_model->getlguid();
    $data['reslgbio']=$this->Auth_model->wasBio();
    $data['reslgwas']=$this->Auth_model->wasRec();

    // $data['res']=$this->Auth_model->getswmlgu();
    $this->load->view('header',$data2);
    $this->load->view('swmlgrep',$data);
    $this->load->view('footer');
  }



  public function arcgis(){
    $data2['actlguser']=$this->Auth_model->ActiveLgUser();
    $data2['lgacc']=$this->Auth_model->getLgAcc();
    $data2['lgres']=$this->Auth_model->getLgReg();
    $data2['result9']=$this->Auth_model->getRecFoi();
    $data2['resultx']=$this->Auth_model->Upcpd4recfoi();
    $this->load->view('header',$data2);
    $this->load->view('arcgis');
  }// overall

  public function arcwqma(){
    $data2['actlguser']=$this->Auth_model->ActiveLgUser();
    $data2['lgacc']=$this->Auth_model->getLgAcc();
    $data2['lgres']=$this->Auth_model->getLgReg();
    $data2['result9']=$this->Auth_model->getRecFoi();
    $data2['resultx']=$this->Auth_model->Upcpd4recfoi();
    $this->load->view('header',$data2);
    $this->load->view('arcwqma');
  }// WQMA

  public function arcpowerp(){
    $data2['actlguser']=$this->Auth_model->ActiveLgUser();
    $data2['lgacc']=$this->Auth_model->getLgAcc();
    $data2['lgres']=$this->Auth_model->getLgReg();
    $data2['result9']=$this->Auth_model->getRecFoi();
    $data2['resultx']=$this->Auth_model->Upcpd4recfoi();
    $this->load->view('header',$data2);
    $this->load->view('arcpowerp');
  }// Powerplant

  public function arcmining(){
    $data2['actlguser']=$this->Auth_model->ActiveLgUser();
    $data2['lgacc']=$this->Auth_model->getLgAcc();
    $data2['lgres']=$this->Auth_model->getLgReg();
    $data2['result9']=$this->Auth_model->getRecFoi();
    $data2['resultx']=$this->Auth_model->Upcpd4recfoi();
    $this->load->view('header',$data2);
    $this->load->view('arcmining');
  }// Mining

  public function arcslf(){
    $data2['actlguser']=$this->Auth_model->ActiveLgUser();
    $data2['lgacc']=$this->Auth_model->getLgAcc();
    $data2['lgres']=$this->Auth_model->getLgReg();
    $data2['result9']=$this->Auth_model->getRecFoi();
    $data2['resultx']=$this->Auth_model->Upcpd4recfoi();
    $this->load->view('header',$data2);
    $this->load->view('arcslf');
  }// arcslf

  public function arcairshed(){
    $data2['actlguser']=$this->Auth_model->ActiveLgUser();
    $data2['lgacc']=$this->Auth_model->getLgAcc();
    $data2['lgres']=$this->Auth_model->getLgReg();
    $data2['result9']=$this->Auth_model->getRecFoi();
    $data2['resultx']=$this->Auth_model->Upcpd4recfoi();
    $this->load->view('header',$data2);
    $this->load->view('arcairshed');
  }// arcairshed

  public function cpdex(){
    $data['resex']=$this->Auth_model->cpdEx();
    $data2['actlguser']=$this->Auth_model->ActiveLgUser();
    $data2['lgacc']=$this->Auth_model->getLgAcc();
    $data2['lgres']=$this->Auth_model->getLgReg();
    $data2['result9']=$this->Auth_model->getRecFoi();
    $data2['resultx']=$this->Auth_model->Upcpd4recfoi();
    $this->load->view('header',$data2);
    $this->load->view('cpdex',$data);
    $this->load->view('footer');
  }

  public function remuplgu($lguid,$uplguid){
    $this->Auth_model->remUpLgu($lguid,$uplguid);
    redirect("Auth/swmadmin");
  }//lgu unup

  //multiple upload
  public function uplgu($lguid){
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
          $config['upload_path']='./upglobal/uplgu/';
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
            $this->Auth_model->uploadLgu($lguid,$filename);
          }//// File upload
        }//if(!empty($_FILES['files']['name'][$i]))
      }//for($i=0;$i<$countfiles;$i++)
      // load view
      redirect("Auth/swmadmin");
      // $this->load->view('user_view',$data);
    }else{
      // load view
      redirect("Auth/swmadmin");
      // $this->load->view('user_view');
    }//else
  }//multiple upload func

  public function lgactuser($userid){
    $this->Auth_model->LgActUser($userid);
    redirect("Auth/swmadmin#lgureg");
  }//activate lguser

  public function lgdeactuser($userid){
    $this->Auth_model->LgDeActUser($userid);
    redirect("Auth/swmadmin#lgureg");
  }//deactivate lguser
  // swm end

  public function changepass(){
    // $this->load->view('header');
    $this->load->view('changepass');
    // $this->load->view('footer');
  }

  function adlgu(){
      $data=$this->Auth_model->adLgu();
      redirect ('Auth/swmadmin');
      // echo json_encode($data);
  }//ad lgu

  function edlgu($lguid){
      $data=$this->Auth_model->edLgu($lguid);
      redirect ('Auth/swmadmin');
      // echo json_encode($data);
  }//edit lgu

  function delgu($lguid){
      $data=$this->Auth_model->deLgu($lguid);
      redirect ('Auth/swmadmin');
      // echo json_encode($data);
  }//del lgu

  //swm ends
  // public function adlgu(){
  //   $this->Auth_model->adlgu();
  //   redirect("Auth/firmdash");
  // }// swm end


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

  // public function queIntAdd(){
  //   $this->Auth_model->queIntAdd();
  //   // redirect("Auth/form");
  // }//addqclient

  public function edRateclient($qid){
    $this->Auth_model->edRateClient($qid);
    redirect("Auth/form");
  }//edqclient

  public function addpco($fid){
    $this->Auth_model->addPCO($fid);
    redirect("Auth/firmprof/".$fid);
  }  //addPCO

  public function addLGL($fid){
    $this->Auth_model->createLGL($fid);
    redirect("Auth/firmprof/".$fid);
  }  //addLGL

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
  }// edone

  public function delone($fid,$upcpdid){
    $this->Auth_model->delOne($fid,$upcpdid);
    redirect("Auth/firmprof/".$fid);
  }//cpd unup

  public function deleg($fid,$uplegid){
    $this->Auth_model->deLeg($uplegid);
    redirect("Auth/firmprof/".$fid);
  }//un lgl

  public function deloneEm($fid,$upemeid){
    $this->Auth_model->deloneEmed($fid,$upemeid);
    redirect("Auth/firmprof/".$fid);
  }//emed unup

  public function remfirimg($fid){
    $this->Auth_model->remFirImg($fid);
    redirect("Auth/firmdash/");
  }//remove firmimg

  public function edfirm($fid){
    $this->Auth_model->updateFirm($fid);
    redirect("Auth/firmprof/".$fid);
  }

  public function edGeneric($issid,$upact){
    $this->Auth_model->edGenIssCon($issid,$upact);
    redirect("Auth/isscon/");
  }//generic fileupload

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
  }//edisscon

  //blackhive start
  public function useact($userid){
    $this->Auth_model->useAct($userid);
    redirect("Auth/blackhive");
  }//useact

  public function firmact($fid){
    $this->Auth_model->firmAct($fid);
    redirect("Auth/blackhive");
  }//firmact

  public function lglact($fid){
    $this->Auth_model->lglAct($fid);
    redirect("Auth/blackhive");
  }//firmact

  public function pcoact($pcocnt){
    $this->Auth_model->pcoAct($pcocnt);
    redirect("Auth/blackhive");
  }//pco act

  public function chrights($userid){
    $this->Auth_model->chRights($userid);
    redirect("Auth/blackhive");
  }//chnge rights
  //blackhive end

  public function updmanyEMED($fid){
    $this->Auth_model->updateEmed($fid);
    redirect("Auth/firmprof/".$fid);
  }//edit emed

  public function edlgl($cntlegal,$fid){
    $this->Auth_model->updateLGL($cntlegal,$fid);
    redirect("Auth/firmprof/".$fid);
  }//edit lgl

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
  }//fstat

  public function edcpass(){
    $this->Auth_model->edcPass();
    redirect("Auth/blackhive");
  }//change pass

  public function edque($id,$uname){
    $this->Auth_model->edQue($id,$uname);
    redirect("Auth/index");
  }

  public function edunque($qid){
    $this->Auth_model->edUnque($qid);
    redirect("Auth/index");
  }

  //reqedsta
  public function reqedsta($rfnum){
    $this->Auth_model->reqedsta($rfnum);
    redirect("Auth/req2op");
  }

  //reqdesta
  public function reqdesta($rfnum){
    $this->Auth_model->reqdesta($rfnum);
    redirect("Auth/req2op");
  }

  //req2cpd
  public function reqcpd($fid){
    $this->Auth_model->req2cpd($fid);
    redirect("Auth/firmprof/".$fid);
  }

  public function dropdown(){
    $this->load->model('model_name');
    $this->data['dropdown'] = $this->model_name->get_dropdown_list();
    $this->load->view('yourview', $this->data);
  }//dropdown

  function logout(){
    if(empty($_SESSION['userid'])){
      redirect(base_url());
    }else{

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
    }//else

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

        redirect("index","");

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

  function quenotif(){
    $resecc=$this->Auth_model->getQecc(); $rescnc=$this->Auth_model->getQcnc();
    $respco=$this->Auth_model->getQpco(); $reshwm=$this->Auth_model->getQhwm();
    $respto=$this->Auth_model->getQpto(); $resdp=$this->Auth_model->getQdp();
    $ressmr=$this->Auth_model->getQsmr(); $rescmr=$this->Auth_model->getQcmr();
    $resswm=$this->Auth_model->getQswm(); $rescas=$this->Auth_model->getQcas();
    $resrec=$this->Auth_model->getQrec(); $resleg=$this->Auth_model->getQleg();
    $resord=$this->Auth_model->getQord(); $resgss=$this->Auth_model->getQgss();
    $resmis=$this->Auth_model->getQmis();
    $reschime=$this->Auth_model->getQchime();

    $ecccount=((empty($resecc)) ? 0 : count($resecc)); $cnccount=((empty($rescnc)) ? 0 : count($rescnc));
    $pcocount=((empty($respco)) ? 0 : count($respco)); $hwmcount=((empty($reshwm)) ? 0 : count($reshwm));
    $ptocount=((empty($respto)) ? 0 : count($respto)); $dpcount=((empty($resdp)) ? 0 : count($resdp));
    $smrcount=((empty($ressmr)) ? 0 : count($ressmr)); $cmrcount=((empty($rescmr)) ? 0 : count($rescmr));
    $swmcount=((empty($resswm)) ? 0 : count($resswm)); $cascount=((empty($rescas)) ? 0 : count($rescas));
    $reccount=((empty($resrec)) ? 0 : count($resrec)); $legcount=((empty($resleg)) ? 0 : count($resleg));
    $ordcount=((empty($resord)) ? 0 : count($resord)); $gsscount=((empty($resgss)) ? 0 : count($resgss));
    $miscount=((empty($resmis)) ? 0 : count($resmis)); $chmcount=((empty($reschime)) ? 0 : count($reschime));
    // $qindex=((empty($resQindex)) ? 0 : count($resQindex));

    echo json_encode(array('ecccount' => $ecccount, 'cnccount' => $cnccount, 'pcocount' => $pcocount, 'hwmcount' => $hwmcount,
                          'ptocount' => $ptocount, 'dpcount' => $dpcount, 'smrcount' => $smrcount, 'cmrcount' => $cmrcount,
                          'swmcount' => $swmcount,'cascount' => $cascount, 'reccount' => $reccount, 'legcount' => $legcount,
                          'ordcount' => $ordcount, 'gsscount' => $gsscount, 'miscount' => $miscount, 'chmcount' => $chmcount
                        ));
  }

  function testpage(){
    $this->load->view('testpage');
  }

  function list(){
    $this->load->view('list');
  }

  public function cpass(){
    //get datenow
    date_default_timezone_set('Asia/Manila'); $cpdat=date('Ymd'); $cptim=date('H:i:s');

    $uname = $this->input->post('uname'); $upass = $this->input->post('upass');

    $data = array( 'uname'=> $uname, 'upass'=> md5($upass), 'cpdat'=> $cpdat, 'cptim'=> $cptim, 'cpstat'=> 0 );

    $this->load->model('Auth_model');
    $insert=$this->Auth_model->cPass($data);
    redirect("/");
    // echo json_encode($insert);
  }//save cpass

// public function qintad(){
//   $adstub='';
//   if($this->input->post('qlane')=='P'){ $qlane=$this->input->post('cour'); $adstub='P'; }else{ $qlane=$this->input->post('qlane'); $adstub=''; }
//   $data=array(
//     'qnam'=>$this->input->post('qnam'), 'qfirm'=>$this->input->post('qfirm'), 'qnum'=>$this->input->post('qnum'), 'qsex'=>$this->input->post('qsex'),
//     'qlane'=>$qlane, 'qdat'=>$this->input->post('qdat'), 'qtim'=>$this->input->post('qtim'), 'qintent'=>$this->input->post('qintent'), 'qstat'=>1,
//     'qque'=>$this->input->post('qque'), 'qstub'=>substr($this->input->post('qintent'),0,3).$this->input->post('qstub').$adstub, 'qcon'=>$this->input->post('qcon')
//   );
//   $this->load->model('Auth_model');
//   $insert=$this->Auth_model->queIntAdd($data);
//   echo json_encode($insert);
// }//save intent
//
public function adQclient(){
  $this->Auth_model->adQClient();
  redirect("Auth/form");
}//addqclient

  function lgu_data(){
      $data=$this->Auth_model->lgu_list();
      echo json_encode($data);
  }

  function savelgu(){
    $data=$this->Auth_model->saveLGU();
    echo json_encode($data);
  }

  function lguupdate(){
      $data=$this->Auth_model->lguUpdate();
      echo json_encode($data);
  }

}//main
