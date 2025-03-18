<?php
class Auth extends CI_Controller{
  public function __construct(){
    parent:: __construct();
    // $this->load->model('Auth_model');
    // if(empty($_SESSION['userid'])){
    //   redirect(base_url()); }
  }

  public function firmdash(){
    $data2['lgacc']=$this->Auth_model->getLgAcc();
    $data2['lgres']=$this->Auth_model->getLgReg();
    $data2['result9']=$this->Auth_model->getRecFoi();
    $data2['resultx']=$this->Auth_model->Upcpd4recfoi();

    $data['result8']=$this->Auth_model->getRecFoi0();
    $data['result1']=$this->Auth_model->getlastfid();
    $data['result']=$this->Auth_model->getAllData();

    $this->load->view('template/header',$data2);
    $this->load->view('firm/firmdash',$data);
  }

  public function firmview(){
    $data2['lgacc']=$this->Auth_model->getLgAcc();
    $data2['lgres']=$this->Auth_model->getLgReg();
    $data2['result9']=$this->Auth_model->getRecFoi();
    $data2['resultx']=$this->Auth_model->Upcpd4recfoi();

    $data['result8']=$this->Auth_model->getRecFoi0();
    $data['result1']=$this->Auth_model->getlastfid();
    $data['result']=$this->Auth_model->getAllData();

    $this->load->view('template/header',$data2);
    $this->load->view('firm/firmview',$data);
  }

  public function firmvpermit(){
    $data2['lgacc']=$this->Auth_model->getLgAcc();
    $data2['lgres']=$this->Auth_model->getLgReg();
    $data2['result9']=$this->Auth_model->getRecFoi();
    $data2['resultx']=$this->Auth_model->Upcpd4recfoi();
    $data2['rescon']=$this->Auth_model->getLguMsg();

    // $data['gpco']=$this->Auth_model->getPco($fid);
    // $data['gpco']=$this->Auth_model->getPco();
    $data['result8']=$this->Auth_model->getRecFoi0();
    // $data['result1']=$this->Auth_model->getlastfid();
    $data['result']=$this->Auth_model->getfirmvpermit();

    $this->load->view('template/header',$data2);
    $this->load->view('firm/firmvpermit',$data);
    // $this->load->view('template/footer');
  }

  public function firmgllry($fid){
    $data2['lgacc']=$this->Auth_model->getLgAcc();
    $data2['lgres']=$this->Auth_model->getLgReg();
    $data2['result9']=$this->Auth_model->getRecFoi();
    $data2['resultx']=$this->Auth_model->Upcpd4recfoi();

    $data['gllry']=$this->Auth_model->getGallery($fid);
    $data['upgal']=$this->Auth_model->getUpGall($fid);
    $data['upgalvid']=$this->Auth_model->getUpGalVid($fid);
    $data['getgal']=$this->Auth_model->getGallery($fid);
    $data['getfdes']=$this->Auth_model->getFirDes($fid);

    $this->load->view('template/header',$data2);
    $this->load->view('firm/firmgllry',$data);
    $this->load->view('template/footer');
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
    $data['resultq61']=$this->Auth_model->getQche();
    $data['resultq31']=$this->Auth_model->getQpco();
    $data['resultq1']=$this->Auth_model->getQord();
    $data['resultq13']=$this->Auth_model->getQgss();
    $data['resultq11']=$this->Auth_model->getQrec();
    $data['resultq12']=$this->Auth_model->getQleg();
    $data['resqhr']=$this->Auth_model->getQhr();
    $data['resultq101']=$this->Auth_model->getQdata();
    $data['resulthof2']=$this->Auth_model->getQhof2();

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
    $data2['rescon']=$this->Auth_model->getLguMsg();

    $data['year'] = $this->Auth_model->dashYr();
    $data['yearPco'] = $this->Auth_model->firmPcoYr();

    $this->load->view('template/header',$data2);
    $this->load->view('dashboard/index',$data);
    $this->load->view('template/footer');
  }

  // firms Chart
  public function firms(){
    $year = $this->input->post('year');
    $start_date = $this->input->post('start_date');
    $end_date = $this->input->post('end_date');

    if(!empty($year)){
      $data = $this->Auth_model->yearFirms($year);
    }
    else if(!empty($start_date) && !empty($end_date)){
      $data = $this->Auth_model->dateFirms($start_date, $end_date);
    }
    else{
      $data = $this->Auth_model->getFirms();
    }

    echo json_encode($data);
  }
  // end

  public function permits(){
    $startDate = $this->input->post('startDate');
    $endDate = $this->input->post('endDate');
    $year1 = $this->input->post('year1');


    if(!empty($startDate) && !empty($endDate))
    {
      $data = $this->Auth_model->getPermitsDate($startDate, $endDate);
    }else if(!empty($year1))
    {
      $data = $this->Auth_model->getPermitsYr($year1);
    }
    else
    {
      $data = $this->Auth_model->getPermits();

    }

    echo json_encode($data);
  }


    // pco
    public function firmPco()
    {
      $sDate = $this->input->post('sDate');
      $eDate = $this->input->post('eDate');
      $year2 = $this->input->post('year2');

      if(!empty($sDate) && !empty($eDate))
      {
        $data = $this->Auth_model->pcoChartDate($sDate, $eDate);
      }else if(!empty($year2))
      {
        $data = $this->Auth_model->pcoChartYear($year2);
      }
      else
      {
      $data = $this->Auth_model->pcoChart();
      }
      echo json_encode($data);
    }

  public function blackhive(){
    $data['resultcp1']=$this->Auth_model->changePass();
    $data['result']=$this->Auth_model->getUser0();
    $data['result1']=$this->Auth_model->getInactFirm();
    $data['result2']=$this->Auth_model->getInactlgl();
    $data['result3']=$this->Auth_model->getUserStat();

    // $data['gpco']=$this->Auth_model->getPco($fid);
    $data['result4']=$this->Auth_model->getPcoDeact();
    $data['reschck']=$this->Auth_model->getPcoCheck();

    $data2['rescon']=$this->Auth_model->getLguMsg();
    $data2['lgacc']=$this->Auth_model->getLgAcc();
    $data2['lgres']=$this->Auth_model->getLgReg();
    $data2['result9']=$this->Auth_model->getRecFoi();
    $data2['resultx']=$this->Auth_model->Upcpd4recfoi();
    $this->load->view('template/header',$data2);
    $this->load->view('xxblackxx/blackhive',$data);
    $this->load->view('template/footer');
  }

  public function firmprof($fid){
    $data['row']=$this->Auth_model->getData($fid);
    $data['gllry']=$this->Auth_model->getCountGllry($fid);
    $data['vidgal']=$this->Auth_model->getCountVidGal($fid);

    // $data['prof']=$this->Auth_model->getFirmProf($fid);
    $data['getgal']=$this->Auth_model->getGallery($fid);
    $data['result']=$this->Auth_model->getOneLGL($fid);
    $data['result1']=$this->Auth_model->getAllLGL($fid);
    $data['result2']=$this->Auth_model->getUpemed($fid);
    $data['result3']=$this->Auth_model->getUplgl($fid);
    $data['result4']=$this->Auth_model->getUpcpd($fid);
    $data['result5']=$this->Auth_model->getUpProFlo($fid);
    $data['result6']=$this->Auth_model->getPco($fid);
    $data['result7']=$this->Auth_model->getRecFoi();
    $data['result8']=$this->Auth_model->getRecFoi0();
    $data2['resultw']=$this->Auth_model->getRecFoi0();
    $data2['lgacc']=$this->Auth_model->getLgAcc();
    $data2['lgres']=$this->Auth_model->getLgReg();
    $data2['result9']=$this->Auth_model->getRecFoi();
    $data2['resultx']=$this->Auth_model->Upcpd4recfoi();
    $this->load->view('template/header',$data2);
    $this->load->view('firm/locscript');
    $this->load->view('firm/firmprof',$data);
    $this->load->view('firm/edmod');
    $this->load->view('template/footer');
  }

  public function fingaa($gaayr){
    $data['fingaa']=$this->Auth_model->getGaayr($gaayr);

    $this->load->view('fingaa',$data);
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
    $data['resqche']=$this->Auth_model->getQche();
    $data['resultq7']=$this->Auth_model->getQsmr();
    $data['resultq8']=$this->Auth_model->getQcmr();
    $data['resultq9']=$this->Auth_model->getQswm();
    $data['resultq10']=$this->Auth_model->getQcas();
    $data['resultq11']=$this->Auth_model->getQrec();
    $data['resultq12']=$this->Auth_model->getQleg();
    $data['resqhr']=$this->Auth_model->getQhr();
    $data['resultq13']=$this->Auth_model->getQgss();
    $this->load->view('que/que',$data);
  }

  public function req2op(){
    $data['result8']=$this->Auth_model->getRecFoi0();
    $data2['result9']=$this->Auth_model->getRecFoi();
    $data2['resultx']=$this->Auth_model->Upcpd4recfoi();
    $data2['lgres']=$this->Auth_model->getLgReg();
    $this->load->view('template/header',$data2);
    $this->load->view('req2op/req2op',$data);
    $this->load->view('template/footer');
  }

  public function form(){
    $data['resultord1']=$this->Auth_model->getQDatORD();
    $data['resultQ1']=$this->Auth_model->getQDat4Que();
    $data['resultQ2']=$this->Auth_model->getQDat4Tab();
    $this->load->view('que/form',$data);
    // $this->load->view('template/footer');
  }

  public function usermanual(){
    // $data2['result9']=$this->Auth_model->getRecFoi();
    // $data2['resultx']=$this->Auth_model->Upcpd4recfoi();
    $this->load->view('upkeep/usermanual');
    $this->load->view('template/footer');
  }

  public function isscon(){
    $data2['lgacc']=$this->Auth_model->getLgAcc();
    $data2['lgres']=$this->Auth_model->getLgReg();
    $data2['result9']=$this->Auth_model->getRecFoi();
    $data2['resultx']=$this->Auth_model->Upcpd4recfoi();
    $data2['rescon']=$this->Auth_model->getLguMsg();

    $data['result8']=$this->Auth_model->getRecFoi0();
    $data['result']=$this->Auth_model->getIssCon();
    $this->load->view('template/header',$data2);
    $this->load->view('upkeep/isscon',$data);
    $this->load->view('template/footer');
  }

  // swm start
  public function swmdash(){
    $data2['lgacc']=$this->Auth_model->getLgAcc();
    $data2['lgres']=$this->Auth_model->getLgReg();
    $data2['result9']=$this->Auth_model->getRecFoi();
    $data2['resultx']=$this->Auth_model->Upcpd4recfoi();
    $data2['rescon']=$this->Auth_model->getLguMsg();
    // $data2['req'] =  $this->Auth_model->lguuserreq();

    $data['result8']=$this->Auth_model->getRecFoi0();
    $data['year10list'] = $this->Auth_model->yearPlan();
    // Chart
    $start_date = $this->input->post('start_date');
    $end_date = $this->input->post('end_date');

    $data['jsPs'] = $this->Auth_model->jsPlanStatus();

    echo form_hidden(',' .  $data['jsPs']['approvedCount'] . ',' .  $data['jsPs']['notApprovedCount'] . ',');

    $this->load->view('template/header',$data2);
    $this->load->view('swm/swmdash',$data);
    $this->load->view('template/footer');
  }

  // plan status
  public function planStatus() {
    $start_date = $this->input->post('start_date');
    $end_date = $this->input->post('end_date');
    $year = $this->input->post('year');

    if(!empty($start_date) && !empty($end_date)){
    $data = $this->Auth_model->planStatus($start_date, $end_date);
    }else{
      $data = $this->Auth_model->yearPlanStatus($year);
    }

    echo json_encode($data);

  }

    // planSummary
    public function planSummary() {
      $startDate = $this->input->post('startDate');
      $endDate = $this->input->post('endDate');
      $year1 = $this->input->post('year1');

      if(!empty($startDate) && !empty($endDate)){
        $data = $this->Auth_model->planSummary($startDate, $endDate);
      }
      else if(!empty($year1)){
        $data = $this->Auth_model->yrPlanSummary($year1);
      }
      else{
        $data = $this->Auth_model->planYrDB();
      }

      echo json_encode($data);
    }

  //  totalRegistered
  public function totalPlan() {
    $firstDate = $this->input->post('firstDate');
    $lastDate = $this->input->post('lastDate');
    $year2 = $this->input ->post('year2');

    if(!empty($firstDate) && !empty($lastDate)){
      $data = $this->Auth_model->totalPlan($firstDate, $lastDate);
    }else if(!empty($year2)){
      $data = $this->Auth_model->yrTotalPlan($year2);
    }
    else{
      $data = $this->Auth_model->totalYrDB();
    }

    echo json_encode($data);
  }

  public function swmadmin(){
    $data2['actlguser']=$this->Auth_model->ActiveLgUser();
    $data2['inactlguser']=$this->Auth_model->InActiveLgUser();
    $data2['lgacc']=$this->Auth_model->getLgAcc();
    $data2['actemail']=$this->Auth_model->actEmail();
    // $data2['prbr']=$this->Auth_model->getprovbrgy();
    $data2['lgres']=$this->Auth_model->getLgReg();
    $data2['result9']=$this->Auth_model->getRecFoi();
    $data2['resultx']=$this->Auth_model->Upcpd4recfoi();
    $data2['rescon']=$this->Auth_model->getLguMsg();
    $data2['rescnt']=$this->Auth_model->getCntMsg();

    $data['result8']=$this->Auth_model->getRecFoi0();
    $data['resup']=$this->Auth_model->getUpLgu();
    $data['resid']=$this->Auth_model->getlguid();
    $data['res']=$this->Auth_model->getswmlgu();

    $data2['req'] =  $this->Auth_model->lguuserreq();

    $this->load->view('template/header',$data2);
    $this->load->view('swm/swmadmin',$data);
    $this->load->view('template/footer');
  }

  public function swmlgrep(){
    $data2['actlguser']=$this->Auth_model->ActiveLgUser();
    $data2['lgacc']=$this->Auth_model->getLgAcc();
    $data2['lgres']=$this->Auth_model->getLgReg();
    $data2['result9']=$this->Auth_model->getRecFoi();
    $data2['resultx']=$this->Auth_model->Upcpd4recfoi();
    $data2['rescon']=$this->Auth_model->getLguMsg();
    $data['resup']=$this->Auth_model->getUpLgu();
    $data['resid']=$this->Auth_model->getlguid();
    $data['reslgbio']=$this->Auth_model->wasBio();
    $data['reslgwas']=$this->Auth_model->wasRec();


    // $data['res']=$this->Auth_model->getswmlgu();
    $this->load->view('template/header',$data2);
    $this->load->view('swm/swmlgrep',$data);
    $this->load->view('template/footer');
  }

  public function swmlgman(){
    $data2['actlguser']=$this->Auth_model->ActiveLgUser();
    $data2['lgacc']=$this->Auth_model->getLgAcc();
    $data2['lgres']=$this->Auth_model->getLgReg();
    $data2['result9']=$this->Auth_model->getRecFoi();
    $data2['resultx']=$this->Auth_model->Upcpd4recfoi();
    $data2['rescon']=$this->Auth_model->getLguMsg();
    $data['resup']=$this->Auth_model->getUpLgu();
    $data['resid']=$this->Auth_model->getlguid();
    // $data['reslgbio']=$this->Auth_model->wasBio();
    $data['reslgwas']=$this->Auth_model->wasRec();
    $data['res']=$this->Auth_model->getswmlgu();

    // $data['res']=$this->Auth_model->getswmlgu();
    $this->load->view('template/header',$data2);
    $this->load->view('swm/swmlgman',$data);
    $this->load->view('template/footer');
  }

public function swmassmon(){
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
  $this->load->view('template/header',$data2);
  $this->load->view('swm/swmassmon',$data);
  $this->load->view('template/footer');
}

  public function arcgis(){
    $data2['actlguser']=$this->Auth_model->ActiveLgUser();
    $data2['lgacc']=$this->Auth_model->getLgAcc();
    $data2['lgres']=$this->Auth_model->getLgReg();
    $data2['result9']=$this->Auth_model->getRecFoi();
    $data2['resultx']=$this->Auth_model->Upcpd4recfoi();
    $data2['result8']=$this->Auth_model->getRecFoi0();
    $this->load->view('template/header',$data2);
    $this->load->view('arcgis/arcgis');
  }// overall

  public function arcwqma(){
    $data2['actlguser']=$this->Auth_model->ActiveLgUser();
    $data2['lgacc']=$this->Auth_model->getLgAcc();
    $data2['lgres']=$this->Auth_model->getLgReg();
    $data2['result9']=$this->Auth_model->getRecFoi();
    $data2['resultx']=$this->Auth_model->Upcpd4recfoi();
    $data2['result8']=$this->Auth_model->getRecFoi0();
    $this->load->view('template/header',$data2);
    $this->load->view('arcgis/arcwqma');
  }// WQMA

  public function arcwatbod(){
    $data2['actlguser']=$this->Auth_model->ActiveLgUser();
    $data2['lgacc']=$this->Auth_model->getLgAcc();
    $data2['lgres']=$this->Auth_model->getLgReg();
    $data2['result9']=$this->Auth_model->getRecFoi();
    $data2['resultx']=$this->Auth_model->Upcpd4recfoi();
    $data2['result8']=$this->Auth_model->getRecFoi0();
    $this->load->view('template/header',$data2);
    $this->load->view('arcgis/arcwatbod');
  }// water bodies

  public function arcoilspill(){
    $data2['actlguser']=$this->Auth_model->ActiveLgUser();
    $data2['lgacc']=$this->Auth_model->getLgAcc();
    $data2['lgres']=$this->Auth_model->getLgReg();
    $data2['result9']=$this->Auth_model->getRecFoi();
    $data2['resultx']=$this->Auth_model->Upcpd4recfoi();
    $data2['result8']=$this->Auth_model->getRecFoi0();
    $this->load->view('template/header',$data2);
    $this->load->view('arcgis/arcoilspill');
  }// oilspill

  public function arcpowerp(){
    $data2['actlguser']=$this->Auth_model->ActiveLgUser();
    $data2['lgacc']=$this->Auth_model->getLgAcc();
    $data2['lgres']=$this->Auth_model->getLgReg();
    $data2['result9']=$this->Auth_model->getRecFoi();
    $data2['resultx']=$this->Auth_model->Upcpd4recfoi();
    $data2['result8']=$this->Auth_model->getRecFoi0();
    $this->load->view('template/header',$data2);
    $this->load->view('arcgis/arcpowerp');
  }// Powerplant

  public function arcmining(){
    $data2['actlguser']=$this->Auth_model->ActiveLgUser();
    $data2['lgacc']=$this->Auth_model->getLgAcc();
    $data2['lgres']=$this->Auth_model->getLgReg();
    $data2['result9']=$this->Auth_model->getRecFoi();
    $data2['resultx']=$this->Auth_model->Upcpd4recfoi();
    $data2['result8']=$this->Auth_model->getRecFoi0();
    $this->load->view('template/header',$data2);
    $this->load->view('arcgis/arcmining');
  }// Mining

public function arcslf(){
  $data2['actlguser']=$this->Auth_model->ActiveLgUser();
  $data2['lgacc']=$this->Auth_model->getLgAcc();
  $data2['lgres']=$this->Auth_model->getLgReg();
  $data2['result9']=$this->Auth_model->getRecFoi();
  $data2['resultx']=$this->Auth_model->Upcpd4recfoi();
  $data2['result8']=$this->Auth_model->getRecFoi0();
  $this->load->view('template/header',$data2);
  $this->load->view('arcgis/arcslf');
}// arcslf

public function arcairshed(){
  $data2['actlguser']=$this->Auth_model->ActiveLgUser();
  $data2['lgacc']=$this->Auth_model->getLgAcc();
  $data2['lgres']=$this->Auth_model->getLgReg();
  $data2['result9']=$this->Auth_model->getRecFoi();
  $data2['resultx']=$this->Auth_model->Upcpd4recfoi();
  $data2['result8']=$this->Auth_model->getRecFoi0();
  $this->load->view('template/header',$data2);
  $this->load->view('arcgis/arcairshed');
}// arcairshed

public function arcelnidourgent(){
  $data2['actlguser']=$this->Auth_model->ActiveLgUser();
  $data2['lgacc']=$this->Auth_model->getLgAcc();
  $data2['lgres']=$this->Auth_model->getLgReg();
  $data2['result9']=$this->Auth_model->getRecFoi();
  $data2['resultx']=$this->Auth_model->Upcpd4recfoi();
  $data2['result8']=$this->Auth_model->getRecFoi0();
  $this->load->view('template/header',$data2);
  $this->load->view('arcgis/arcelnidourgent');
}// arcestab

public function cpdex(){
  $data2['actlguser']=$this->Auth_model->ActiveLgUser();
  $data2['lgacc']=$this->Auth_model->getLgAcc();
  $data2['lgres']=$this->Auth_model->getLgReg();

  $data['reseccnlast']=$this->Auth_model->getUpcpdEccnLast();

  $data2['result9']=$this->Auth_model->getRecFoi();
  $data2['resultx']=$this->Auth_model->Upcpd4recfoi();
  $data['cpdex']=$this->Auth_model->cpdEx();
  $this->load->view('template/header',$data2);
  $this->load->view('cpd/cpdex',$data);
  $this->load->view('template/footer');
}// cpdex

public function cpdpcoex(){
  $data2['actlguser']=$this->Auth_model->ActiveLgUser();
  $data2['lgacc']=$this->Auth_model->getLgAcc();
  $data2['lgres']=$this->Auth_model->getLgReg();

  $data['reseccnlast']=$this->Auth_model->getUpcpdEccnLast();

  $data2['result9']=$this->Auth_model->getRecFoi();
  $data2['resultx']=$this->Auth_model->Upcpd4recfoi();
  $data['cpdex']=$this->Auth_model->cpdEx();
  $this->load->view('template/header',$data2);
  $this->load->view('cpdpcoex',$data);
  $this->load->view('template/footer');
}// cpdpcoex

public function ghgdash(){
  $data2['actlguser']=$this->Auth_model->ActiveLgUser();
  $data2['lgacc']=$this->Auth_model->getLgAcc();
  $data2['lgres']=$this->Auth_model->getLgReg();
  $data2['result9']=$this->Auth_model->getRecFoi();
  $data2['resultx']=$this->Auth_model->Upcpd4recfoi();
  $data['result8']=$this->Auth_model->getRecFoi0();
  $this->load->view('template/header',$data2);
  $this->load->view('ghg/ghgdash',$data);
  $this->load->view('template/footer');
}// cpdex

public function ghgent(){
  $data2['actlguser']=$this->Auth_model->ActiveLgUser();
  $data2['lgacc']=$this->Auth_model->getLgAcc();
  $data2['lgres']=$this->Auth_model->getLgReg();
  $data2['result9']=$this->Auth_model->getRecFoi();
  $data2['resultx']=$this->Auth_model->Upcpd4recfoi();
  $data['resghg']=$this->Auth_model->getGhgFuel();
  $data['resel']=$this->Auth_model->getGhgElec();
  $data['resair']=$this->Auth_model->getGhgAir();
  $data['convent']=$this->Auth_model->getConvention();
  $this->load->view('template/header',$data2);
  $this->load->view('ghg/ghgent',$data);
  $this->load->view('template/footer');
}// ghg entity level

public function airqdash(){
  $data2['actlguser']=$this->Auth_model->ActiveLgUser();
  $data2['lgacc']=$this->Auth_model->getLgAcc();
  $data2['lgres']=$this->Auth_model->getLgReg();
  $data2['result9']=$this->Auth_model->getRecFoi();
  $data2['resultx']=$this->Auth_model->Upcpd4recfoi();
  $data['result8']=$this->Auth_model->getRecFoi0();
  $this->load->view('template/header',$data2);
  $this->load->view('air/airqdash',$data);
  $this->load->view('template/footer');
}// air quality

public function airqcaams(){
  $data2['actlguser']=$this->Auth_model->ActiveLgUser();
  $data2['lgacc']=$this->Auth_model->getLgAcc();
  $data2['lgres']=$this->Auth_model->getLgReg();
  $data2['result9']=$this->Auth_model->getRecFoi();
  $data2['resultx']=$this->Auth_model->Upcpd4recfoi();
  $data['recaams']=$this->Auth_model->getCAAMS();
  $this->load->view('template/header',$data2);
  $this->load->view('air/airqcaams',$data);
  $this->load->view('template/footer');
}// air quality caams

public function convention(){
  $data2['actlguser']=$this->Auth_model->ActiveLgUser();
  $data2['lgacc']=$this->Auth_model->getLgAcc();
  $data2['lgres']=$this->Auth_model->getLgReg();
  $data2['result9']=$this->Auth_model->getRecFoi();
  $data2['resultx']=$this->Auth_model->Upcpd4recfoi();
  // $data['result8']=$this->Auth_model->getRecFoi0();
  $data['convent']=$this->Auth_model->getConvention();
  $this->load->view('template/header',$data2);
  $this->load->view('upkeep/convention',$data);
  $this->load->view('template/footer');
}// air quality caams

public function plan(){
  $data2['actlguser']=$this->Auth_model->ActiveLgUser();
  $data2['lgacc']=$this->Auth_model->getLgAcc();
  $data2['lgres']=$this->Auth_model->getLgReg();
  $data2['result9']=$this->Auth_model->getRecFoi();
  $data2['resultx']=$this->Auth_model->Upcpd4recfoi();
  $data['result8']=$this->Auth_model->getRecFoi0();
  $data['plan']=$this->Auth_model->getPlan();
  $this->load->view('template/header',$data2);
  $this->load->view('planning/plan',$data);
  $this->load->view('template/footer');
}// plan

public function planmoac(){
  $data2['actlguser']=$this->Auth_model->ActiveLgUser();
  $data2['lgacc']=$this->Auth_model->getLgAcc();
  $data2['lgres']=$this->Auth_model->getLgReg();
  $data2['result9']=$this->Auth_model->getRecFoi();
  $data2['resultx']=$this->Auth_model->Upcpd4recfoi();
  $data['result8']=$this->Auth_model->getRecFoi0();
  $data['plan']=$this->Auth_model->getPlan();
  $this->load->view('template/header',$data2);
  $this->load->view('planning/planmoac',$data);
  $this->load->view('template/footer');
}// planmoac

public function planproac(){
  $data2['actlguser']=$this->Auth_model->ActiveLgUser();
  $data2['lgacc']=$this->Auth_model->getLgAcc();
  $data2['lgres']=$this->Auth_model->getLgReg();
  $data2['result9']=$this->Auth_model->getRecFoi();
  $data2['resultx']=$this->Auth_model->Upcpd4recfoi();
  $data['result8']=$this->Auth_model->getRecFoi0();
  $data['plan']=$this->Auth_model->getPlan();
  $this->load->view('template/header',$data2);
  $this->load->view('planning/planproac',$data);
  $this->load->view('template/footer');
}// planproac

public function planfig(){
  $data2['actlguser']=$this->Auth_model->ActiveLgUser();
  $data2['lgacc']=$this->Auth_model->getLgAcc();
  $data2['lgres']=$this->Auth_model->getLgReg();
  $data2['result9']=$this->Auth_model->getRecFoi();
  $data2['resultx']=$this->Auth_model->Upcpd4recfoi();
  $data['result8']=$this->Auth_model->getRecFoi0();
  $data['plan']=$this->Auth_model->getPlan();
  $this->load->view('template/header',$data2);
  $this->load->view('planning/planfig',$data);
  $this->load->view('template/footer');
}// planfig

public function plantarget(){
  $data2['actlguser']=$this->Auth_model->ActiveLgUser();
  $data2['lgacc']=$this->Auth_model->getLgAcc();
  $data2['lgres']=$this->Auth_model->getLgReg();
  $data2['result9']=$this->Auth_model->getRecFoi();
  $data2['resultx']=$this->Auth_model->Upcpd4recfoi();
  $data['result8']=$this->Auth_model->getRecFoi0();
  // $data['plan']=$this->Auth_model->getPlan();
  $data['plantar']=$this->Auth_model->getPlanTar();

  $this->load->view('template/header',$data2);
  $this->load->view('planning/plantarget',$data);
  $this->load->view('template/footer');
}// plantarget

public function findash(){
  // $data2['actlguser']=$this->Auth_model->ActiveLgUser();
  $data2['lgacc']=$this->Auth_model->getLgAcc();
  $data2['lgres']=$this->Auth_model->getLgReg();
  $data2['result9']=$this->Auth_model->getRecFoi();
  $data2['resultx']=$this->Auth_model->Upcpd4recfoi();
  $data['result8']=$this->Auth_model->getRecFoi0();
  $data['resgayr']=$this->Auth_model->getGayr();
  $data['resbrob']=$this->Auth_model->resBrob();
  // $data['plan']=$this->Auth_model->getPlan();
  // $data['plantar']=$this->Auth_model->getPlanTar();

  $this->load->view('template/header',$data2);
  $this->load->view('finance/findash',$data);
  $this->load->view('template/footer');
}

public function casmon(){
  // $data2['actlguser']=$this->Auth_model->ActiveLgUser();
  $data2['lgacc']=$this->Auth_model->getLgAcc();
  $data2['lgres']=$this->Auth_model->getLgReg();
  $data2['result9']=$this->Auth_model->getRecFoi();
  $data2['resultx']=$this->Auth_model->Upcpd4recfoi();
  $data['result8']=$this->Auth_model->getRecFoi0();
  $data['resgayr']=$this->Auth_model->getGayr();
  $data['resbrob']=$this->Auth_model->resBrob();
  // $data['plan']=$this->Auth_model->getPlan();
  // $data['plantar']=$this->Auth_model->getPlanTar();

  $this->load->view('template/header',$data2);
  $this->load->view('finance/casmon',$data);
  $this->load->view('template/footer');
}

public function finbrobps($gaayr){
  // $data['fingaatot1']=$this->Auth_model->getGaatot1($gaayr);

  $data['fingaa']=$this->Auth_model->getGaayr($gaayr);
  $data['fingass']=$this->Auth_model->getGass($gaayr);
  $data['finsaa']=$this->Auth_model->getSaayr($gaayr);

  $this->load->view('finbrobps',$data);
}

public function finbrobps2(){
  $data2['lgacc']=$this->Auth_model->getLgAcc();
  $data2['lgres']=$this->Auth_model->getLgReg();
  $data2['result9']=$this->Auth_model->getRecFoi();
  $data2['resultx']=$this->Auth_model->Upcpd4recfoi();
  $data['finbrobps']=$this->Auth_model->getFinbrobps();
  $data['fingabr']=$this->Auth_model->getFinga4br();

  $this->load->view('finbrobps2',$data);
}

public function fintry(){
  $data2['lgacc']=$this->Auth_model->getLgAcc();
  $data2['lgres']=$this->Auth_model->getLgReg();
  $data2['result9']=$this->Auth_model->getRecFoi();
  $data2['resultx']=$this->Auth_model->Upcpd4recfoi();
  $data['finbrobps']=$this->Auth_model->getFinbrobps();
  $data['fingabr']=$this->Auth_model->getFinga4br();

  $this->load->view('fintry',$data);
}

// public function method_name() {
//   $filter_option = $this->input->get('filter_option');
//
//   $this->load->model('Auth_model');
//   $data['results'] = $this->Auth_model->get_filtered_data($filter_option);
//
//   $this->load->view('fintry', $data);
// }//fintry

// public function wasrec2xl($lgu){

  public function embvrfy($bioid){
    $this->Auth_model->embVrfy($bioid);
    redirect("swmlgrep");
  }// verify lgu waste

  // lgu
  public function lgurply($lgisid){
    $this->Auth_model->lguRply($lgisid);
    redirect("swmadmin");
  }// contact message

  public function remuplgu($lguid,$uplguid){
    $this->Auth_model->remUpLgu($lguid,$uplguid);
    redirect("swmlgman");
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
      redirect("swmlgman");
      // $this->load->view('user_view',$data);
    }else{
      // load view
      redirect("swmlgman");
      // $this->load->view('user_view');
    }//else
  }//multiple upload func

  public function lgactuser($userid){
    $this->Auth_model->LgActUser($userid);
    redirect("Auth/swmadmin#lgureg");
  }//activate lguser

  public function lgforactivate($userid){
    $this->Auth_model->LgForActivate($userid);
    redirect("Auth/swmadmin#lgureg");
  }//deactivate lguser
  // swm end

  public function lgactivateuser($userid){
    $this->Auth_model->LgActivateUser($userid);
    redirect("Auth/swmadmin#lgureg");
  }//activate lguser

  public function changepass(){
    // $this->load->view('header');
    $this->load->view('1intro/changepass');
    // $this->load->view('template/footer');
  }

  function adlgu(){
    $data=$this->Auth_model->adLgu();
    redirect ('swmadmin');
    // echo json_encode($data);
  }//ad lgu

  function edlgu($lguid){
      $data=$this->Auth_model->edLgu($lguid);
      redirect ('swmlgman');
      // echo json_encode($data);
  }//edit lgu

  function delgu($lguid){
      $data=$this->Auth_model->deLgu($lguid);
      redirect ('swmlgman');
      // echo json_encode($data);
  }//del lgu

  function delghg($ghgid){
      $data=$this->Auth_model->delGhg($ghgid);
      redirect ('ghgent');
      // echo json_encode($data);
  }//delghg

  function delele($elecid){
      $data=$this->Auth_model->delEle($elecid);
      redirect ('ghgent#pills-profile-tab');
      // echo json_encode($data);
  }//delelec

  function delair($airid){
      $data=$this->Auth_model->delAir($airid);
      redirect ('ghgent#pills-contact-tab');
      // echo json_encode($data);
  }//delair

  public function datatab(){
    $this->load->view('datatab');
  }

  public function getfingabr(){
    $this->Auth_model->getFingabr();
    redirect("finbrobps2");
  }

  public function create(){
    $this->Auth_model->createData();
    redirect("cpdex");
  }

  public function edit($fid){
    $data['row']=$this->Auth_model->getData($fid);
    $this->load->view('header');
    $this->load->view('dashed',$data);
    $this->load->view('template/footer');
  }//edit

  public function upfirmprof($fid){
    $config['upload_path']='./upglobal/upfirmprof/';
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
      $firimg=$_FILES['userfile']['name'];
    }//if

    $this->Auth_model->uploadProf($fid,$firimg);
    redirect('Auth/firmprof/'.$fid);
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

  public function adfinpart($gaayr){
    $uacscod=$this->input->post('uacscod');
    $this->Auth_model->adFinPart($gaayr);
    redirect("Auth/fingaa/".$gaayr."#savetotps");
  }// add Particulars

  public function adbrobps(){
    $uacscod=$this->input->post('uacscod');
    $this->Auth_model->adBrobps();
    redirect("finbrobps2");
  }// add

  public function adsaaps($currentYear){
    $this->Auth_model->adSaaps($currentYear);
    redirect("finbrobps");
  }// add Particulars

  // public function edfinpart($gaid,$gaayr){
  //   $this->Auth_model->edFinPart($gaid);
  //   redirect("Auth/fingaa",$gaayr);
  // }// edit Particulars

  public function edfinsup($gaid){
    $this->Auth_model->edFinSup($gaid);
    redirect("fingaa/#".$gaid);
  }// edit support

  public function edfinass($gaid){
    $this->Auth_model->edFinAss($gaid);
    redirect("fingaa/#".$gaid);
  }// edit Assessment

  public function edfinmgt($gaid){
    // print_r($_POST);
    // end();
    $this->Auth_model->edFinMgt($gaid);
    redirect("fingaa/#".$gaid);
  }// edit mgt

  public function edfinmo($gaayr){
    $this->Auth_model->edFinMo($gaayr);
    redirect("fingaa/#savetotmo");
  }// edit mgt

  public function edfintot($gaayr){

    $this->Auth_model->edFinTot($gaayr, $gaayr);

    // echo json_encode(array('status' => 'success'));

    // $this->Auth_model->edFinTot();
    redirect("fingaa/#savetotps");
  }// ad or ed fintot

  // public function edpstot($gaid){
  //   $this->Auth_model->edPsTot($gaid);
  //   redirect("fingaa/#savetotps");
  // }// ad or ed pstot

  public function edfincoas($gaid){
    $this->Auth_model->edFinCoas($gaid);
    redirect("fingaa/#savecoas");
  }// ad or ed fincoas

  public function edqmf($gaid){
    $this->Auth_model->edQmf($gaid);
    redirect("fingaa/#".$gaid);
  }// ed aqmf

  public function edgaapart($gaid,$gaayr){
    $this->Auth_model->edGaaPart($gaid);
    redirect("Auth/fingaa/".$gaayr."#".$gaid);
  }// add gaa Particulars

  public function degaapart($gaid,$gaayr){
    $this->Auth_model->deGaaPart($gaid);
    redirect("Auth/fingaa/".$gaayr."#".$gaid-1);
  }// del gaa Particulars

  public function searchFirm() {
    $keyword = $this->input->get('firm');
    $data['results'] = $this->Auth_model->search_keyword($keyword);

    $data2['actlguser']=$this->Auth_model->ActiveLgUser();
    $data2['lgacc']=$this->Auth_model->getLgAcc();
    $data2['lgres']=$this->Auth_model->getLgReg();
    $data2['result9']=$this->Auth_model->getRecFoi();
    $data2['resultx']=$this->Auth_model->Upcpd4recfoi();
    $data['cpdex']=$this->Auth_model->cpdEx();
    $this->load->view('template/header',$data2);
    $this->load->view('cpd/cpdpcoex', $data);
    $this->load->view('template/footer',$data2);
  }

  // public function srchgaa() {
  //   $kword = $this->input->get('gaayr');
  //   $data['results'] = $this->Auth_model->srchGaa($kword);
  //
  //   $data2['lgacc']=$this->Auth_model->getLgAcc();
  //   $data2['lgres']=$this->Auth_model->getLgReg();
  //   $data2['result9']=$this->Auth_model->getRecFoi();
  //   $data2['resultx']=$this->Auth_model->Upcpd4recfoi();
  //   $data['fingaa']=$this->Auth_model->getFinGaa();
  //
  //   $this->load->view('fingaa', $data);
  // }

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

  public function delgalpho($fid,$galid){
    $this->Auth_model->delgalPho($fid,$galid);
    redirect("Auth/firmgllry/".$fid);
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
    redirect("blackhive");
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

  public function exdatchck($fid){
    $this->Auth_model->exdatChck($fid);
    redirect("Auth/blackhive");
  }//exdat check

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

  public function deconv($conid){
    $this->Auth_model->deConv($conid);
    redirect("convention");
  }//deac conv

  public function edhead($fid){
    $this->Auth_model->updateHead($fid);
    redirect("Auth/firmprof/".$fid);
  }//edit managing head

  public function edpco($fid,$pcocnt){
    $this->Auth_model->updatePco($fid,$pcocnt);
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
  public function upcpdexeccn($fid){
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
            $this->Auth_model->uploadCpdEx($fid,$filename);
          }//// File upload
        }//if(!empty($_FILES['files']['name'][$i]))
      }//for($i=0;$i<$countfiles;$i++)
      // load view
      redirect("Auth/cpdex");
      // $this->load->view('user_view',$data);
    }else{
      // load view
      redirect("Auth/cpdex");
      // $this->load->view('user_view');
    }//else
  }//multiple upload func

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
  // public function upemed($fid){
  //   // Check form submit or not
  //   if($this->input->post('upload') != NULL ){
  //     $data = array();
  //     // Count total files
  //     $countfiles = count($_FILES['files']['name']);
  //     // Looping all files
  //     for($i=0;$i<$countfiles;$i++){
  //       if(!empty($_FILES['files']['name'][$i])){
  //         // Define new $_FILES array - $_FILES['file']
  //         $_FILES['file']['name'] = $_FILES['files']['name'][$i];
  //         $_FILES['file']['type'] = $_FILES['files']['type'][$i];
  //         $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
  //         $_FILES['file']['error'] = $_FILES['files']['error'][$i];
  //         $_FILES['file']['size'] = $_FILES['files']['size'][$i];
  //
  //         // Set preference
  //         $varOne=$this->input->post('varOne');
  //         if($varOne=='phovid'){
  //           $config['upload_path']='./upglobal/upfirmgllry/';
  //         }else{
  //           $config['upload_path']='./upglobal/upemed/';
  //         }
  //         $config['allowed_types']='doc|docx|xls|xlsx|pdf|jpg|jpeg|png';
  //         $config['max_size']='2000000';
  //         $config['max_width']='*';
  //         $config['max_height']='*';
  //         $config['remove_spaces'] = FALSE;
  //         $config['file_name'] = $_FILES['files']['name'][$i];
  //         //Load upload library
  //         $this->load->library('upload',$config);
  //         $this->upload->initialize($config);
  //
  //         // File upload
  //         if($this->upload->do_upload('file')){
  //           // Get data about the file
  //           $uploadData = $this->upload->data();
  //           $filename = $uploadData['file_name'];
  //
  //           // Initialize array
  //           $data['filenames'][] = $filename;
  //           $this->Auth_model->uploadEmed($fid,$filename);
  //         }//// File upload
  //       }//if(!empty($_FILES['files']['name'][$i]))
  //     }//for($i=0;$i<$countfiles;$i++)
  //     // load view
  //     redirect("Auth/firmprof/".$fid);
  //     // $this->load->view('user_view',$data);
  //   }else{
  //     // load view
  //     redirect("Auth/firmprof/".$fid);
  //     // $this->load->view('user_view');
  //   }//else
  // }//multiple upload func

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
          $varOne=$this->input->post('varOne');
          if($varOne=='phovid'){
            $config['upload_path']='./upglobal/upfirmgllry/';
          }else{
            $config['upload_path']='./upglobal/upemed/';
          }
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
          if(!$this->upload->do_upload('file')){
            // If upload fails, show error message and redirect to previous page
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('error', $error['error']);
            redirect("Auth/firmprof/".$fid);
          }

          // Get data about the file
          $uploadData = $this->upload->data();
          $filename = $uploadData['file_name'];

          // Initialize array
          $data['filenames'][] = $filename;
          $this->Auth_model->uploadEmed($fid,$filename);
        }//if(!empty($_FILES['files']['name'][$i]))
      }//for($i=0;$i<$countfiles;$i++)
      // If all uploads succeed, redirect to previous page
      redirect("Auth/firmprof/".$fid);
    }else{
      // If no files uploaded, redirect to previous page
      redirect("Auth/firmprof/".$fid);
    }//else
  }//multiple upload func

  //upload video
  public function upfirmgvid($fid){
    // Set the upload configuration
    $config['upload_path'] = './upglobal/upfirmgvid/'; // Change this to your desired upload directory
    $config['allowed_types'] = 'mp4|avi|wmv|mov'; // Specify the allowed video file types
    $config['max_size'] = 10240; // Set the maximum file size (in kilobytes)

    $this->load->library('upload',$config);
    $this->upload->initialize($config);

    // Check if the upload was successful

    if ($this->upload->do_upload('video')) {
      // If the upload was successful, get the file data
      $file_data = $this->upload->data();
      $filename = $file_data['file_name']; // Set $filename to the uploaded file's name
    }

    $this->Auth_model->uploadFVid($fid,$filename);
    redirect("Auth/firmprof/".$fid);
  }//upload video

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
    redirect("index");
  }

  public function edattndd($id){
    $this->Auth_model->edAttndd($id);
    redirect("index");
  }

  public function edunque($qid){
    $this->Auth_model->edUnque($qid);
    redirect("index");
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

  public function login()
  {
      if ($this->session->userdata('user_log')) {
          redirect('index');
      }
      $this->form_validation->set_rules('uname', 'Username', 'required');
      $this->form_validation->set_rules('upass', 'Password', 'required');
      // $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

      if ($this->form_validation->run() == TRUE) {
          $uname = $this->input->post('uname');
          $password = $this->input->post('upass');
          $ustat = '1';

          $this->db->select('*');
          $this->db->from('user');
          $this->db->where('uname', $uname);
          $query = $this->db->get();
          $user = $query->row();

          if ($user && password_verify($password, $user->upass) && $user->ustat == $ustat) {

              $this->session->set_userdata('user_log', TRUE);
              $this->session->set_userdata('userid', $user->userid);
              $this->session->set_userdata('fname', $user->fname);
              $this->session->set_userdata('mname', $user->mname);
              $this->session->set_userdata('lname', $user->lname);
              $this->session->set_userdata('uname', $user->uname);
              $this->session->set_userdata('usec', $user->usec);
              $this->session->set_userdata('urights', $user->urights);
              $this->session->set_userdata('udiv', $user->udiv);

              // $this->session->set_userdata('fname', $user->fname);

              date_default_timezone_set('Asia/Manila');
              $actdat = date('Ymd H:i:s');
              $data = array(
                  'uname' => $this->session->userdata('uname'),
                  'acttyp' => 'logged in',
                  'actdat' => $actdat
              );
              $this->db->insert('actvty', $data);

              $data = array(
                  'lilo' => 1,
                  'lilodat' => $actdat
              );
              $this->db->where('userid', $this->session->userdata('userid'));
              $this->db->update('user', $data);

              // Redirect with success toast message
              // $this->session->set_tempdata('toast_message', 'success', 0);

              $this->db->select('COUNT(uname) AS user_count');
              $this->db->from('actvty');
              $this->db->where('uname', $uname);
              $query = $this->db->get();
              $act_user = $query->row();

              if ($act_user->user_count == 2) {
                  $this->session->set_tempdata('user_logged', 'Welcome to EMB MIMAROPA ' . ucwords($user->fname) . '! 👋 Please change your password for more security, Thank you!', 0);
              } else {
                  $this->session->set_tempdata('user_logged', 'Welcome back ' . ucwords($user->fname) . '! 👋', 0);
              }

              redirect('index');
          } else {
              // Redirect with error toast message
              $this->session->set_tempdata('ic_username', $uname, 0);
              $this->session->set_tempdata('toast_message', 'error', 0);
              redirect('login');
          }
      }

      $this->load->view('1intro/login');
  }//end login

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

  // public function logout(){
  //   if(empty($_SESSION['userid'])){
  //     redirect(base_url());
  //   }else{
  //     $this->load->library('session');
  //     $this->session->unset_userdata('userid');
  //     redirect('/');
  //   }
  // }


public function enlist()
{
    // Load form validation library
    $this->load->library('form_validation');

    // Set form validation rules
    $this->form_validation->set_rules('fname', 'First Name', 'required');
    $this->form_validation->set_rules('mname', 'Middle Name');
    $this->form_validation->set_rules('lname', 'Last Name', 'required');
    // $this->form_validation->set_rules('upass', 'Password', 'required|min_length[3]');
    // $this->form_validation->set_rules('upass2', 'Confirm Password', 'required|min_length[3]|matches[upass]');
    $this->form_validation->set_rules('position', 'Position', 'required');
    $this->form_validation->set_rules('uemail', 'Email', 'required');
    $this->form_validation->set_rules('uphone', 'Phone', 'required|min_length[3]');

    if ($this->form_validation->run() == TRUE) {
        // Retrieve form data
        $fname = $this->input->post('fname');
        $mname = $this->input->post('mname');
        $lname = $this->input->post('lname');
        // $upass = $this->input->post('upass');
        $uemail = $this->input->post('uemail');

        // Generate username
        $firstLetterFname = strtolower(substr($fname, 0, 1));
        $firstLetterMname = strtolower(substr($mname, 0, 1));
        $firstLetterLname = strtolower($lname);
        $username = $firstLetterFname . $firstLetterMname . $firstLetterLname;

       //generate simple random code
			$set = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$code = substr(str_shuffle($set), 0, 5);


        // Prepare data for insertion
        $data = array(
            'fname' => $fname,
            'mname' => $mname,
            'lname' => $lname,
            'uname' => $username,
            // 'upass' => password_hash($upass, PASSWORD_BCRYPT),
            'upass' => '0',
            'uemail' => $this->input->post('uemail'),
            'position' => $this->input->post('position'),
            'udiv' => $this->input->post('udiv'),
            'usec' => $this->input->post('usec'),
            'usex' => $this->input->post('usex'),
            'uphone' => $this->input->post('uphone'),
            'code' => $code,
            'udaten' => $this->input->post('udaten'),
            'urights' => '0',
            'empstat' => $this->input->post('estat'),
            'ustat' => '0'
        );

        // Insert data into the database
        $this->load->database();
        $this->db->insert('user', $data);

            $activityData = array(
                'uname' => $username,
                'acttyp' => 'registered',
                'actdat' => $this->input->post('udaten')
            );

            $this->db->insert('actvty', $activityData);
            $this->session->set_tempdata('toast_message', 'success', 0);
            redirect("enlist", "refresh");

    } else {
        $this->load->view('1intro/enlist');
    }
}

  // activation account
  public function useractivate() {
    $id = $this->uri->segment(3);
    $code = $this->uri->segment(4);

    // // Fetch user details
    $user = $this->Auth_model->getUser($id);

    if ($user && $user['ustat'] == '1') {
      // Redirect the user to a different page or display a message
      redirect('Expired_link');
      return;
  }

  // // If code matches
  if ($user && $user['code'] == $code) {
      // Update user active status
      $data = array('ustat' => '1');
      $query = $this->Auth_model->activate($data, $id);

      if ($query) {
        $this->session->set_flashdata('message', 'User activated successfully, Log in to your account and change your password for more security!');
        $this->session->set_flashdata('message_type', 'success-message');
      } else {
        $this->session->set_flashdata('message', 'Something went wrong in activating the account');
        $this->session->set_flashdata('message_type', 'error-message');
      }
  } else {
      $this->session->set_flashdata('message', 'Cannot activate account. Code did not match'.$code);
  }

  // redirect('login');
}

public function Expired_link(){
  $this->load->view('Expired_link');
}

public function idProfile($user_id)
  {
    // Fetch the user data from the database based on the $user_id
    $user_data = $this->db->get_where('user', array('userid' => $user_id))->row();

    if ($user_data) {
        $data['userID'] = $user_data;
        // $user = $this->Auth_model->getUserById($this->session->userdata('userid'));

        $profileImage = $this->Auth_model->getProfileImage($user_id); // Fetch profile picture for user ID 103
        $data['profileImage'] = $profileImage;
        $this->load->view('accSettings', $data);
    } else {
        echo "User not found";
    }
  }

  //change pass in profsettings

  public function changePass1() {
      $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

      $this->form_validation->set_rules('old_password', 'Old Password', 'trim|required|max_length[150]');
      $this->form_validation->set_rules('new_password', 'New Password', 'trim|required|max_length[150]');
      $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|max_length[150]|matches[new_password]');

      $user = $this->Auth_model->getUserById($this->session->userdata('userid'));

      if ($this->form_validation->run() == false) {
          $userid = $user->userid;
          $data['userID'] = $user; // Pass user data to the view
          $this->load->view('accSettings', $data); // Display the view with validation errors
      } else {
          $old_password = $this->input->post('old_password');
          $new_password = $this->input->post('new_password');
          $confirm_password = $this->input->post('confirm_password');

          $data = array(
              'upass' => password_hash($new_password, PASSWORD_BCRYPT)
          );

          if ($this->Auth_model->checkOldPass($this->session->userdata('userid'), $old_password)) {
              $result = $this->Auth_model->Update_User_Data($this->session->userdata('userid'), $data);
              if ($result) {
                  $this->session->set_tempdata('toast_message', 'success', 0);
              } else {
                  $this->session->set_flashdata('error_msg', '<b>Error: </b>User Password not Change.');
              }
          } else {
              $this->session->set_tempdata('toast_message', 'error', 0);
          }

          redirect('accSettings/' . $user->userid); // Redirect to the account settings page
      }
  }


    // activation account
    public function lgactive() {
      $id = $this->uri->segment(3);
      // $code = $this->uri->segment(4);

      // // Fetch user details
      $user = $this->Auth_model->lgugetUser($id);

      if ($user && $user['stat'] == '2') {
        // Redirect the user to a different page or display a message
        // redirect('http://203.160.179.194:8000/4blive/lguexpLink');
        // redirect('http://136.239.215.90:8000/4blive/lguexpLink');
        redirect('http://136.239.215.90:8000/4blive/lguexpLink');
        return;
    }

    // // If code matches
    if ($user) {
        // Update user active status
        $data = array('stat' => '2');
        $query = $this->Auth_model->lguactivate($data, $id);

        if ($query) {
            $this->session->set_tempdata('message', 'User activated successfully!');
        } else {
            $this->session->set_tempdata('message', 'Something went wrong in activating account');
        }
    } else {
        $this->session->set_tempdata('message', 'Cannot activate account. Code did not match'.$code);
    }

    // redirect('http://' . $_SERVER['HTTP_HOST'] . '/4blive/index.php/portal/');
    redirect('http://136.239.215.90:8000/4blive/');
}

public function lguExpired_link(){
  $this->load->view('lguexpLink');
}
//activate lguser

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
    $miscount=((empty($resmis)) ? 0 : count($resmis));
    $chmcount=((empty($reschime)) ? 0 : count($reschime));
    // $qindex=((empty($resQindex)) ? 0 : count($resQindex));

    echo json_encode(array('ecccount' => $ecccount, 'cnccount' => $cnccount, 'pcocount' => $pcocount, 'hwmcount' => $hwmcount,
                          'ptocount' => $ptocount, 'dpcount' => $dpcount, 'smrcount' => $smrcount, 'cmrcount' => $cmrcount,
                          'swmcount' => $swmcount,'cascount' => $cascount, 'reccount' => $reccount, 'legcount' => $legcount,
                          'ordcount' => $ordcount, 'gsscount' => $gsscount, 'miscount' => $miscount
                          // 'chmcount' => $chmcount
                        ));
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
    redirect("form");
  }//addqclient

  public function adfuel(){
    $this->Auth_model->adFuel();
    redirect("Auth/ghgent");
  }//add fuel

  public function adelec(){
    $this->Auth_model->adElec();
    redirect("Auth/ghgent#pills-profile-tab");
  }//add electricity

  public function adair(){
    $this->Auth_model->adAir();
    redirect("Auth/ghgent#pills-contact-tab");
  }//add electricity

  public function adcaams(){
    $this->Auth_model->adCaams();
    redirect("Auth/airqcaams");
  }//add caams

  public function adconv(){
    $this->Auth_model->adConv();
    redirect("convention");
  }//add conv

  public function adplan(){
    $pprov=$this->input->post('pprov'); $prov2be=$this->input->post('prov2be');
    if($pprov==$prov2be){
      $this->Auth_model->adPlan();
      redirect("planmoac");
    }else{
      redirect("planalertProv");
      // redirect("planmoac");
    }
  }//add plan

  function edprovtar($userid){
    $this->Auth_model->edProvTar($userid);
    redirect("plantarget");
  }//ad plantar

  public function planalertProv(){
    $this->load->view('planalertProv');
  }

  public function adhelp($val){
    $this->Auth_model->adHelp($val);
    if($val=='login'){ redirect("login"); }elseif($val=='enlist'){ redirect("enlist"); }
  }//add help

  public function edconv($conid){
    $this->Auth_model->edConv($conid);
    redirect("convention");
  }//edit conv

  public function edrepconv($conid){
    $this->Auth_model->edRepConv($conid);
    redirect("convention");
  }//edit reply conv

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

  public function filterData() {
    $startDate = $this->input->post('startDate');
    $endDate = $this->input->post('endDate');

    // Retrieve data from the database based on the date range
    $this->db->select('year10, year10');
    $this->db->where('date_column >=', $startDate);
    $this->db->where('date_column <=', $endDate);
    $query = $this->db->get('swmlgu');
    $result = $query->result_array();

    // Transform the data as needed
    $filteredData = array();
    foreach ($result as $row) {
      $filteredData[] = $row['year10'] + $row['year10'];
    }

    echo json_encode($filteredData);
  }


  // cant display in profPic
  public function image() {
    $data['images'] = $this->Auth_model->getImages();
  $this->load->view('image_gallery' , $data);
}

public function upload() {
    if ($_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $imageData = file_get_contents($_FILES['image']['tmp_name']);
        $imageType = $_FILES['image']['type'];
        $this->Auth_model->uploadImage($imageData, $imageType);
    }

    redirect('image');
}

public function download($id) {
    $imageData = $this->Auth_model->getImageData($id);
    if ($imageData) {
        $user = $this->Auth_model->getUserInfo($id); // Replace with your logic to get user info
        $filename = $user->fname . '_' . $user->lname . '.jpg'; // Adjust the extension as needed

        header("Content-Type: " . $imageData->image_type);
        header("Content-Disposition: attachment; filename=\"$filename\"");
        echo $imageData->profPic;
    } else {
        echo "Image not found.";
    }
}

public function update1($id) {
  $user = $this->Auth_model->getUserById($this->session->userdata('userid'));

  if ($_FILES['image']['error'] === UPLOAD_ERR_OK) {
      $imageData = file_get_contents($_FILES['image']['tmp_name']);
      $imageType = $_FILES['image']['type'];
      $this->Auth_model->updateImage($id, $imageData, $imageType);

      echo 'wrong';
    }else{
      echo 'wrong';
    }

    redirect('accSettings/' . $user->userid);
}

// limit image size
// public function update1($id) {
//   $user = $this->Auth_model->getUserById($this->session->userdata('userid'));

//   if ($_FILES['image']['error'] === UPLOAD_ERR_OK) {
//       $uploadedImage = $_FILES['image']['tmp_name'];

//       // Get image dimensions
//       list($uploadedWidth, $uploadedHeight) = getimagesize($uploadedImage);

//       // Define the required dimensions (2x2)
//       $requiredWidth = 2;
//       $requiredHeight = 2;

//       // Check if the uploaded image has the required dimensions
//       if ($uploadedWidth === $requiredWidth && $uploadedHeight === $requiredHeight) {
//           // The image dimensions are correct, proceed with update
//           $imageData = file_get_contents($uploadedImage);
//           $imageType = $_FILES['image']['type'];
//           $this->Auth_model->updateImage($id, $imageData, $imageType);
//           echo 'Update successful.';
//       } else {
//           // The image dimensions are not correct, show an error message
//           echo "Uploaded image must have dimensions of $requiredWidth x $requiredHeight pixels.";
//       }
//   } else {
//       echo 'Image upload failed.';
//   }

//   redirect('accSettings/' . $user->userid);
// }


public function viewProf() {
  $user = $this->Auth_model->getUserById($this->session->userdata('userid'));

  $profileImage = $this->Auth_model->getProfileImage($user);
  $data['profileImage'] = $profileImage;
  $this->load->view('accSettings', $data);
}



}//main
