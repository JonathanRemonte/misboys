<?php
class Auth_model extends CI_Model{
  public function __construct(){
    parent::__construct();
    $this->load->database();
  }

  public function createData(){
    // actdat for activity
    date_default_timezone_set('Asia/Manila'); // CDT
    $actdat = date('YMd H:i:s');

    if(empty($this->input->post('subspec'))){ $subspec='N/A'; }else{ $subspec=$this->input->post('subspec'); }

    $data=array(
      'fid'=>$this->input->post('fid'), 'firm'=>$this->input->post('firm'), 'fown'=>$this->input->post('fown'),
      'eccn'=>$this->input->post('eccn'), 'ecisdat'=>$this->input->post('ecisdat'),
      'fcat'=>$this->input->post('fcat'), 'subcat'=>$this->input->post('subcat'), 'specat'=>$this->input->post('specat'),
      'flat'=>$this->input->post('flat'), 'flon'=>$this->input->post('flon'),
      'subspec'=>$subspec, 'fstat'=>1
    );

    $this->db->insert('firmaster3',$data);

    $data2=array(
      'fid'=>$this->input->post('fid'), 'firm'=>$this->input->post('firm'), 'fown'=>$this->input->post('fown'),
      'fcat'=>$this->input->post('fcat'), 'subcat'=>$this->input->post('subcat'), 'specat'=>$this->input->post('specat'),
      'flat'=>$this->input->post('flat'), 'flon'=>$this->input->post('flon'),
      'subspec'=>$subspec, 'fstat'=>1
    );
    $this->db->insert('firmaster3',$data2);

    $data=array(
      'varbl'=>$this->input->post('firm'), 'acttyp'=>'added', 'uname'=>$_SESSION['uname'], 'actdat'=>$actdat
    );
    $this->db->insert('actvty',$data);
  }

  // dash Search by year
  function dashYr(){
    $this->db->select("YEAR(ecisdat) AS year");
    $this->db->from('firmaster3');
    $this->db->where('fid !=', '0');
    $this->db->where('fstat !=', '0');
    $this->db->group_by('year');
    $this->db->order_by('year','DESC');
    $query = $this->db->get();

    return $query->result();
  }
  function firmPcoYr(){
    $this->db->select("YEAR(ecisdat) AS year");
    $this->db->from('firmaster3');
    $this->db->where('fid !=', '0');
    $this->db->where('fstat !=', '0');
    $this->db->group_by('year');
    $this->db->order_by('year','DESC');
    $query = $this->db->get();

    return $query->result();
  }


  //********** Golf **************

  // firms

    public function getFirms()
    {
      $this->db->select('fprov, SUM(CASE WHEN fcat = "Heavy and Other Processing/Manufacturing Industries" THEN 1 ELSE 0 END) AS heavy, SUM(CASE WHEN fcat = "Infrastructure Projects" THEN 1 ELSE  0 END) AS infra, SUM(CASE WHEN fcat = "Resources Extractive" THEN 1 ELSE 0 END) AS extract,  SUM(CASE WHEN fcat = "Golf Course and other Tourism Projects" THEN 1 ELSE 0 END) as golf, SUM(CASE WHEN fcat = "Other Resources" THEN 1 ELSE 0 END) AS res');
      $this->db->from('firmaster3');
      $this->db->where('fid !=', '0' );
      $this->db->where("fprov != '' AND fprov IS NOT NULL");
      $this->db->where('fstat !=', '0');
      $this->db->group_by('fprov');
      $query = $this->db->get();

      return $query->result();

    }
    public function yearFirms($year)
    {
      $this->db->select('YEAR(ecisdat) as year,fprov, SUM(CASE WHEN fcat = "Heavy and Other Processing/Manufacturing Industries" THEN 1 ELSE 0 END) AS heavy, SUM(CASE WHEN fcat = "Infrastructure Projects" THEN 1 ELSE  0 END) AS infra, SUM(CASE WHEN fcat = "Resources Extractive" THEN 1 ELSE 0 END) AS extract,  SUM(CASE WHEN fcat = "Golf Course and other Tourism Projects" THEN 1 ELSE 0 END) as golf, SUM(CASE WHEN fcat = "Other Resources" THEN 1 ELSE 0 END) AS res');
      $this->db->from('firmaster3');
      $this->db->where('YEAR(ecisdat)', $year);
      $this->db->where('fid !=', '0' );
      $this->db->where("fprov != '' AND fprov IS NOT NULL");
      $this->db->where('fstat !=', '0');
      $this->db->group_by('fprov');
      $query = $this->db->get();

      return $query->result();

    }
    public function dateFirms($start_date, $end_date)
    {
      $this->db->select('fprov, SUM(CASE WHEN fcat = "Heavy and Other Processing/Manufacturing Industries" THEN 1 ELSE 0 END) AS heavy, SUM(CASE WHEN fcat = "Infrastructure Projects" THEN 1 ELSE  0 END) AS infra, SUM(CASE WHEN fcat = "Resources Extractive" THEN 1 ELSE 0 END) AS extract,  SUM(CASE WHEN fcat = "Golf Course and other Tourism Projects" THEN 1 ELSE 0 END) as golf, SUM(CASE WHEN fcat = "Other Resources" THEN 1 ELSE 0 END) AS res');
      $this->db->from('firmaster3');
      $this->db->where('ecisdat >=', $start_date);
      $this->db->where('ecisdat <=', $end_date);
      $this->db->where('fid !=', '0' );
      $this->db->where("fprov != '' AND fprov IS NOT NULL");
      $this->db->where('fstat !=', '0');
      $this->db->group_by('fprov');
      $query = $this->db->get();

      return $query->result();
    }

    // end of firms chart

    // Permits
    public function getPermits()
    {
      $this->db->select('fprov, SUM(CASE WHEN eccn > "" THEN 1 ELSE 0 END) as ecc, SUM(CASE WHEN pto > "" THEN 1 ELSE 0 END) as pto, SUM(CASE WHEN dp > "" THEN 1 ELSE 0 END) as dp, SUM(CASE WHEN hazid > "" THEN 1 ELSE 0 END) as haz');
      $this->db->from('firmaster3');
      $this->db->where('fprov !=', ' ');
      $this->db->where('fstat', '1');
      $this->db->group_by('fprov');
      $query = $this->db->get();

      return $query->result();
    }

    public function getPermitsDate($startDate, $endDate)
    {
      $this->db->select('fprov, SUM(CASE WHEN eccn > " " THEN 1 ELSE 0 END) as ecc, SUM(CASE WHEN pto > " " THEN 1 ELSE 0 END) as pto, SUM(CASE WHEN dp > " " THEN 1 ELSE 0 END) as dp, SUM(CASE WHEN hazid > " " THEN 1 ELSE 0 END) as haz');
      $this->db->from('firmaster3');
      $this->db->where('ecisdat >=', $startDate);
      $this->db->where('ecisdat <=', $endDate);
      $this->db->where('fprov !=', ' ');
      $this->db->where('fstat', '1');
      $this->db->group_by('fprov');
      $query = $this->db->get();

      return $query->result();
    }
    public function getPermitsYr($year1)
    {
      $this->db->select('fprov, SUM(CASE WHEN eccn > " " THEN 1 ELSE 0 END) as ecc, SUM(CASE WHEN pto > " " THEN 1 ELSE 0 END) as pto, SUM(CASE WHEN dp > " " THEN 1 ELSE 0 END) as dp, SUM(CASE WHEN hazid > " " THEN 1 ELSE 0 END) as haz');
      $this->db->from('firmaster3');
      $this->db->where('YEAR(ecisdat)', $year1);
      $this->db->where('fprov !=', ' ');
      $this->db->where('fstat', '1');
      $this->db->group_by('fprov');
      $query = $this->db->get();

      return $query->result();
    }

    //model

      // firms vs pco chart

      public function pcoChart()
      {

        $this->db->select("fprov, SUM(CASE WHEN pcoexdat > CURRENT_DATE THEN 1 ELSE 0 END) as pco, SUM(CASE WHEN fstat = 1 THEN 1 ELSE 0 END) as firm");
        $this->db->from('firmaster3');
        $this->db->where("fstat", "1");
        $this->db->where("fprov !=", "");
        $this->db->group_by('fprov');
        $query = $this->db->get();

        return $query->result();
      }

      public function pcoChartDate($sDate, $eDate)
      {
        $this->db->select('fprov, SUM(CASE WHEN ecisdat BETWEEN "'.$sDate.'" AND "'.$eDate.'" THEN 1 ELSE 0 END) as firm, SUM(CASE WHEN pcoisdat BETWEEN "'.$sDate.'" AND "'.$eDate.'" AND pcoexdat > "'.$eDate.'" THEN 1 ELSE 0 END) as pco ');
        $this->db->from('firmaster3')
                 ->where('fprov !=' , '')
                 ->where('fstat' , '1')
                 ->group_by('fprov');
        $query = $this->db->get();

        return $query->result();
      }
      public function pcoChartYear($year2)
      {
        $this->db->select('fprov, SUM(CASE WHEN YEAR(ecisdat) = "'.$year2.'" THEN 1 ELSE 0 END) as firm, SUM(CASE WHEN YEAR(pcoisdat) = "'.$year2.'" AND pcoexdat > "'.$year2.'" THEN 1 ELSE 0 END) as pco ');
        $this->db->from('firmaster3')
                 ->where('fprov !=' , '')
                 ->where('fstat' , '1')
                 ->group_by('fprov');
        $query = $this->db->get();

        return $query->result();
      }


      // end of firms vs pco chart

    // end

//********** Golf **************
  // function getGolfmar(){ $act=$this->db->query('SELECT COUNT(fid) as golfmar FROM firmaster3 WHERE fid!=0 && fstat!=0 && fcat="Golf Course and other Tourism Projects" && fprov="Marinduque" '); return $act->result(); }//golfmar

//   function getGolfocmin(){ $act=$this->db->query('SELECT COUNT(fid) as golfocmin FROM firmaster3 WHERE fid!=0 && fstat!=0 && fcat="Golf Course and other Tourism Projects" && fprov="Occidental Mindoro" '); return $act->result(); }//golfocmin
//
//   function getGolformin(){ $act=$this->db->query('SELECT COUNT(fid) as golformin FROM firmaster3 WHERE fid!=0 && fstat!=0 && fcat="Golf Course and other Tourism Projects" && fprov="Oriental Mindoro" '); return $act->result(); }//golformin
//
//   function getGolfrom(){ $act=$this->db->query('SELECT COUNT(fid) as golfrom FROM firmaster3 WHERE fid!=0 && fstat!=0 && fcat="Golf Course and other Tourism Projects" && fprov="Romblon" '); return $act->result(); }//golformin
//
//   function getGolfpal(){ $act=$this->db->query('SELECT COUNT(fid) as golfpal FROM firmaster3 WHERE fid!=0 && fstat!=0 && fcat="Golf Course and other Tourism Projects" && fprov="Palawan" '); return $act->result(); }//golformin
// //********** Golf **************
// //********** heavy **************
//   function getHeavmar(){ $act=$this->db->query('SELECT COUNT(fid) as heavmar FROM firmaster3 WHERE fid!=0 && fstat!=0 && fcat="Heavy and Other Processing/Manufacturing Industries" && fprov="Marinduque" '); return $act->result(); }//golfmar
//
//   function getHeavocmin(){ $act=$this->db->query('SELECT COUNT(fid) as heavocmin FROM firmaster3 WHERE fid!=0 && fstat!=0 && fcat="Heavy and Other Processing/Manufacturing Industries" && fprov="Occidental Mindoro" '); return $act->result(); }//golfocmin
//
//   function getHeavormin(){ $act=$this->db->query('SELECT COUNT(fid) as heavormin FROM firmaster3 WHERE fid!=0 && fstat!=0 && fcat="Heavy and Other Processing/Manufacturing Industries" && fprov="Oriental Mindoro" '); return $act->result(); }//golformin
//
//   function getHeavrom(){ $act=$this->db->query('SELECT COUNT(fid) as heavrom FROM firmaster3 WHERE fid!=0 && fstat!=0 && fcat="Heavy and Other Processing/Manufacturing Industries" && fprov="Romblon" '); return $act->result(); }//golformin
//
//   function getHeavpal(){ $act=$this->db->query('SELECT COUNT(fid) as heavpal FROM firmaster3 WHERE fid!=0 && fstat!=0 && fcat="Heavy and Other Processing/Manufacturing Industries" && fprov="Palawan" '); return $act->result(); }//golformin
// //********** heavy **************
// //********** infr **************
//   function getInfrmar(){ $act=$this->db->query('SELECT COUNT(fid) as infrmar FROM firmaster3 WHERE fid!=0 && fstat!=0 && fcat="Infrastructure Projects" && fprov="Marinduque" '); return $act->result(); }//golfmar
//
//   function getInfrocmin(){ $act=$this->db->query('SELECT COUNT(fid) as infrocmin FROM firmaster3 WHERE fid!=0 && fstat!=0 && fcat="Infrastructure Projects" && fprov="Occidental Mindoro" '); return $act->result(); }//golfocmin
//
//   function getInfrormin(){ $act=$this->db->query('SELECT COUNT(fid) as infrormin FROM firmaster3 WHERE fid!=0 && fstat!=0 && fcat="Infrastructure Projects" && fprov="Oriental Mindoro" '); return $act->result(); }//golformin
//
//   function getInfrrom(){ $act=$this->db->query('SELECT COUNT(fid) as infrrom FROM firmaster3 WHERE fid!=0 && fstat!=0 && fcat="Infrastructure Projects" && fprov="Romblon" '); return $act->result(); }//golformin
//
//   function getInfrpal(){ $act=$this->db->query('SELECT COUNT(fid) as infrpal FROM firmaster3 WHERE fid!=0 && fstat!=0 && fcat="Infrastructure Projects" && fprov="Palawan" '); return $act->result(); }//golformin
//********** infr **************
//********** othe **************
  // function getOthemar(){ $act=$this->db->query('SELECT COUNT(fid) as othemar FROM firmaster3 WHERE fid!=0 && fstat!=0 && fcat="Other Resources" && fprov="Marinduque" '); return $act->result(); }//golfmar
  //
  // function getOtheocmin(){ $act=$this->db->query('SELECT COUNT(fid) as otheocmin FROM firmaster3 WHERE fid!=0 && fstat!=0 && fcat="Other Resources" && fprov="Occidental Mindoro" '); return $act->result(); }//golfocmin
  //
  // function getOtheormin(){ $act=$this->db->query('SELECT COUNT(fid) as otheormin FROM firmaster3 WHERE fid!=0 && fstat!=0 && fcat="Other Resources" && fprov="Oriental Mindoro" '); return $act->result(); }//golformin
  //
  // function getOtherom(){ $act=$this->db->query('SELECT COUNT(fid) as otherom FROM firmaster3 WHERE fid!=0 && fstat!=0 && fcat="Other Resources" && fprov="Romblon" '); return $act->result(); }//golformin
  //
  // function getOthepal(){ $act=$this->db->query('SELECT COUNT(fid) as othepal FROM firmaster3 WHERE fid!=0 && fstat!=0 && fcat="Other Resources" && fprov="Palawan" '); return $act->result(); }//golformin
//********** othe **************
//********** reso **************
  // function getResomar(){ $act=$this->db->query('SELECT COUNT(fid) as resomar FROM firmaster3 WHERE fid!=0 && fstat!=0 && fcat="Resources Extractive" && fprov="Marinduque" '); return $act->result(); }//golfmar
  //
  // function getResoocmin(){ $act=$this->db->query('SELECT COUNT(fid) as resoocmin FROM firmaster3 WHERE fid!=0 && fstat!=0 && fcat="Resources Extractive" && fprov="Occidental Mindoro" '); return $act->result(); }//golfocmin
  //
  // function getResoormin(){ $act=$this->db->query('SELECT COUNT(fid) as resoormin FROM firmaster3 WHERE fid!=0 && fstat!=0 && fcat="Resources Extractive" && fprov="Oriental Mindoro" '); return $act->result(); }//golformin
  //
  // function getResorom(){ $act=$this->db->query('SELECT COUNT(fid) as resorom FROM firmaster3 WHERE fid!=0 && fstat!=0 && fcat="Resources Extractive" && fprov="Romblon" '); return $act->result(); }//golformin
  //
  // function getResopal(){ $act=$this->db->query('SELECT COUNT(fid) as resopal FROM firmaster3 WHERE fid!=0 && fstat!=0 && fcat="Resources Extractive" && fprov="Palawan" '); return $act->result(); }//golformin
//********** reso **************

  function MarFirmCount(){
    $act=$this->db->query('SELECT COUNT(fid) as marfirm FROM firmaster3 WHERE fid!=0 and fstat!=0 and fprov="Marinduque" ');
    return $act->result();
  }//marfirm

  function OccFirmCount(){
    $act=$this->db->query('SELECT COUNT(fid) as occfirm FROM firmaster3 WHERE fid!=0 and fstat!=0 and fprov="Occidental Mindoro" ');
    return $act->result();
  }//occfirm

  function OrFirmCount(){
    $act=$this->db->query('SELECT COUNT(fid) as orfirm FROM firmaster3 WHERE fid!=0 and fstat!=0 and fprov="Oriental Mindoro" ');
    return $act->result();
  }//orfirm

  function RomFirmCount(){
    $act=$this->db->query('SELECT COUNT(fid) as romfirm FROM firmaster3 WHERE fid!=0 and fstat!=0 and fprov="Romblon" ');
    return $act->result();
  }//romfirm

  function PalFirmCount(){
    $act=$this->db->query('SELECT COUNT(fid) as palfirm FROM firmaster3 WHERE fid!=0 and fstat!=0 and fprov="Palawan" ');
    return $act->result();
  }//romfirm

  function getQhof(){
    $qres=$this->db->query('SELECT qid,qestaff FROM que WHERE qdat=DATE(now()) AND qstat=3 ');
    return $qres->result();
  }//hof

  function getQhof2(){
    $qres=$this->db->query('SELECT COUNT(qid) as count2 FROM que WHERE qdat=DATE(now()) AND qstat=2 ');
    return $qres->result();
  }//hof

  function getQmis(){
    $qres=$this->db->query('SELECT qid,qlane FROM que WHERE qdat=DATE(now()) AND qstat=1 AND qintent="MIS" ORDER BY qlane desc,qid desc ');
    return $qres->result();
  }//mis

  function getQord(){
    $qres=$this->db->query('SELECT qid,qlane FROM que WHERE qdat=DATE(now()) AND qstat=1 AND qintent="ORD" ORDER BY qlane desc,qid desc ');
    return $qres->result();
  }//ord

  function getQecc(){
    $qres=$this->db->query('SELECT qid,qlane FROM que WHERE qdat=DATE(now()) AND qstat=1 AND qintent="ECC" ORDER BY qlane desc, qid desc ');
    return $qres->result();
  }//ecc

  function getQcnc(){
    $qres=$this->db->query('SELECT qid,qlane FROM que WHERE qdat=DATE(now()) AND qstat=1 AND qintent="CNC" ORDER BY qlane desc,qid desc ');
    return $qres->result();
  }//ecc

  function getQpco(){
    $qres=$this->db->query('SELECT qid,qlane FROM que WHERE qdat=DATE(now()) AND qstat=1 AND qintent="PCO" ORDER BY qlane desc,qid desc ');
    return $qres->result();
  }//pco

  function getQhwm(){
    $qres=$this->db->query('SELECT qid,qlane FROM que WHERE qdat=DATE(now()) AND qstat=1 AND qintent="HWM" ORDER BY qlane desc,qid desc ');
    return $qres->result();
  }//haz

  function getQpto(){
    $qres=$this->db->query('SELECT qid,qlane FROM que WHERE qdat=DATE(now()) AND qstat=1 AND qintent="PTO" ORDER BY qlane desc,qid desc ');
    return $qres->result();
  }//pto

  function getQdp(){
    $qres=$this->db->query('SELECT qid,qlane FROM que WHERE qdat=DATE(now()) AND qstat=1 AND qintent="DP" ORDER BY qlane desc,qid desc ');
    return $qres->result();
  }//dp

  function getQche(){
    $qres=$this->db->query('SELECT qid,qlane FROM que WHERE qdat=DATE(now()) AND qstat=1 AND qintent="CHEMICALS" ORDER BY qlane desc,qid desc ');
    return $qres->result();
  }//chem

  function getQsmr(){
    $qres=$this->db->query('SELECT qid,qlane FROM que WHERE qdat=DATE(now()) AND qstat=1 AND qintent="SMR" ORDER BY qlane desc,qid desc ');
    return $qres->result();
  }//smr

  function getQcmr(){
    $qres=$this->db->query('SELECT qid,qlane FROM que WHERE qdat=DATE(now()) AND qstat=1 AND qintent="CMR" ORDER BY qlane desc,qid desc ');
    return $qres->result();
  }//cmr

  function getQswm(){
    $qres=$this->db->query('SELECT qid,qlane FROM que WHERE qdat=DATE(now()) AND qstat=1 AND qintent="SWM" ORDER BY qlane desc,qid desc ');
    return $qres->result();
  }//swm

  function getQcas(){
    $qres=$this->db->query('SELECT qid,qlane FROM que WHERE qdat=DATE(now()) AND qstat=1 AND qintent="CASHIER" ORDER BY qlane desc,qid desc ');
    return $qres->result();
  }//qcas

  function getQrec(){
    $qres=$this->db->query('SELECT qid,qlane FROM que WHERE qdat=DATE(now()) AND qstat=1 AND qintent="RECORDS" ORDER BY qlane desc,qid desc ');
    return $qres->result();
  }//rec

  function getQleg(){
    $qres=$this->db->query('SELECT qid,qlane FROM que WHERE qdat=DATE(now()) AND qstat=1 AND qintent="LEGAL" ORDER BY qlane desc,qid desc ');
    return $qres->result();
  }//leg

  function getQhr(){
    $qres=$this->db->query('SELECT qid,qlane FROM que WHERE qdat=DATE(now()) AND qstat=1 AND qintent="HR" ORDER BY qlane desc,qid desc ');
    return $qres->result();
  }//leg

  function getQgss(){
    $qres=$this->db->query('SELECT qid,qlane FROM que WHERE qdat=DATE(now()) AND qstat=1 AND qintent="GSU" ORDER BY qlane desc,qid desc ');
    return $qres->result();
  }//gss

  function que2Data(){
    $qres=$this->db->query('SELECT qid,qlane,qstub,qestaff FROM que WHERE qdat=DATE(now()) && qstat=2 ORDER BY qlane desc,qid desc ');
    return $qres->result();
  }//qdat

  function getQdata(){
    $qres=$this->db->query('SELECT qid,qlane,qspec,qstub,qestaff FROM que WHERE qdat=DATE(now()) && qstat=2 ORDER BY qlane,qid  ');
    return $qres->result();
  }//qdat

  function getQchime(){
    $qres=$this->db->query('SELECT qid FROM que WHERE qdat=DATE(now()) && qstat=1 ');
    return $qres->result();
  }//qchime

  function getAct(){
    $act=$this->db->query('SELECT * FROM actvty ORDER BY 1 DESC LIMIT 8 ');
    return $act->result();
  }//

  function getLgReg(){
    $dblive=$this->load->database('dblgu', TRUE);
    $lgres=$dblive->query('SELECT COUNT(cnt) AS lgcount FROM lguser WHERE stat=0 ');
    return $lgres->result();
  }//get lgu count

  // get prov and brgy
  function getprovbrgy(){
    $prbr=$this->db->query('SELECT b.fprov,b.fmun,c.brgyname FROM 4blive.lguser a
                            INNER JOIN 4bhive.swmlgu b ON a.lguid = b.fprov
                            INNER JOIN 4bhive.swmlgubrgy c ON a.brgyid = c.brgyid');
    return $prbr->result();
  }

  function getLgAcc(){
    $dblive=$this->load->database('dblgu', TRUE);
    $lgres=$dblive->query('SELECT cnt,lgusid,fnam,mnam,lnam,phone,email,lgu,idntfy,regdat,stat FROM lguser WHERE stat=0 || stat=4 ');
    return $lgres->result();
  }//get lgu reg account

  function getlastfid(){
    $lastfid=$this->db->query('SELECT fid FROM firmaster3 WHERE fid!=0 ORDER BY 1 DESC LIMIT 1 ');
    return $lastfid->result();
  }//

  // function getCountProf($fid){
  //   $getGllry=$this->db->query('SELECT COUNT(fid) as pfid,firimg FROM firmaster3 WHERE `fid`='.$fid);
  //   return $getGllry->result();
  // }//
  public function getFirmProf($fid) {
      // Get the image data from the database
      $query = $this->db->get_where('firmaster3', array('fid' => $fid));
      $row = $query->row();

      if (isset($row)) {
          // Check if the image file exists
          if (file_exists($row->firimg)) {
              // Return the image HTML with its alt text
              return '<img src="' . $row->firimg . '" alt="' . $row->alt_text . '">';
          } else {
              // Return an alternative image HTML with its alt text
              return '<img src="4BHiveLogo1.png" alt="Alternative Text">';
          }
      } else {
          return '';
      }
  }

  function getCountVidGal($fid){
    $getGllry=$this->db->query('SELECT COUNT(fid) as vfid,filename FROM upgallvid WHERE `fid`='.$fid);
    return $getGllry->result();
  }//

  function getCountGllry($fid){
    $getGllry=$this->db->query('SELECT COUNT(fid) as cfid FROM upgallery WHERE `fid`='.$fid);
    return $getGllry->result();
  }//

  function getGallery($fid){
    $getGllry=$this->db->query('SELECT fid,firimg FROM firmaster3 WHERE `fid`='.$fid);
    return $getGllry->result();
  }//

  function getUpGall($fid){
    $getGllry=$this->db->query('SELECT galid,fid,filename FROM upgallery WHERE `fid`='.$fid);
    return $getGllry->result();
  }//

  function getUpGalVid($fid){
    $getGllVd=$this->db->query('SELECT galid,fid,filename FROM upgallvid WHERE `fid`='.$fid);
    return $getGllVd->result();
  }//

  //Active firms turn into firmaster3
  // function getAllData(){
  //   $query=$this->db->query('SELECT fid,firm,flat,flon,fcat,subcat,specat,subspec,fprov,fmun,fbrgy,fstret FROM firmaster3 WHERE fstat=1 ORDER BY fid desc');
  //   return $query->result();
  // }//getAllData

  //Active firms turn into firmaster3
  function getAllData(){
    $query=$this->db->query('SELECT fid,firm,flat,flon,fcat,subcat,specat,subspec,fprov,fmun,fbrgy,fstret FROM firmaster3 WHERE fstat=1 ORDER BY fid desc');
    return $query->result();
  }//getAllData

  //Active firms turn into firmaster3
  function getfirmvpermit(){
    $query=$this->db->query('SELECT fid,firm,flat,flon,eccn,pto,dp,hazid,ptt,fprov,fmun,fbrgy,fstret FROM firmaster3 WHERE fstat=1 ORDER BY fid desc');
    return $query->result();
  }//getAllData

  //Active firms
  // function cpdEx(){
  //   $query=$this->db->query('SELECT fid,firm,fown,firimg,flat,flon,fcat,subcat,specat,subspec,fprov,fmun,fbrgy,fstret,eccn,ecisdat FROM firmaster3 WHERE fstat=1 && fid!=0 ORDER BY fid desc LIMIT 1');
  //   return $query->result();
  // }//getMindoroData

  //for firmaster3
  function cpdEx(){
    $query=$this->db->query('SELECT fid,firm,fown,flat,flon,fcat,subcat,specat,subspec,fprov,fmun,fbrgy,fstret,eccn,ecisdat FROM firmaster3 WHERE fstat=1 && fid!=0 ORDER BY fid desc LIMIT 1');
    return $query->result();
  }//for firmaster3

  //Active firms
  // function get4View(){
  //   $query=$this->db->query('SELECT fid,firm,firimg,fcat,subcat,specat,subspec,fprov,fmun,fbrgy,fstret FROM firmaster3 WHERE fstat=1 && fid!=0 ORDER BY fid desc');
  //   return $query->result();
  // }//get for viewing data

  function getPrmtOcMin(){
    $perm=$this->db->query('SELECT fprov,eccn,pto,dp,hazid FROM `firmaster3` WHERE fprov="Occidental Mindoro" && fstat=1 ');
    return $perm->result();
  }//permits OcMin

  function getPrmtOrMin(){
    $perm=$this->db->query('SELECT fprov,eccn,pto,dp,hazid FROM `firmaster3` WHERE fprov="Oriental Mindoro" && fstat=1 ');
    return $perm->result();
  }//permits OrMin

  function getPrmtMar(){
    $perm=$this->db->query('SELECT fprov,eccn,pto,dp,hazid FROM `firmaster3` WHERE fprov="Marinduque" && fstat=1 ');
    return $perm->result();
  }//permits Mar

  function getPrmtRom(){
    $perm=$this->db->query('SELECT fprov,eccn,pto,dp,hazid FROM `firmaster3` WHERE fprov="Romblon" && fstat=1 ');
    return $perm->result();
  }//permits Rom

  function getPrmtPal(){
    $perm=$this->db->query('SELECT fprov,eccn,pto,dp,hazid FROM `firmaster3` WHERE fprov="Palawan" && fstat=1 ');
    return $perm->result();
  }//permits Pal

  function getProgress(){
    $query=$this->db->query('SELECT * FROM `progress` ORDER BY scale DESC');
    return $query->result();
  }//getProgress

  function getIssCon(){
    $query=$this->db->query('SELECT * FROM `isscon` WHERE issta!=0 && `issid`!=0');
    return $query->result();
  }//getIssCon

  function getData($fid){
    $query=$this->db->query('SELECT * FROM firmaster3 WHERE `fid`='.$fid);
    return $query->row();
  }

  function getFirDes($fid){
    $query=$this->db->query('SELECT firdes FROM firmaster3 WHERE `fid`='.$fid);
    return $query->result();
  }

  // public function getGaatot1($gaayr) {
  //   $query=$this->db->query('SELECT * FROM fingaatot1 WHERE `gaayr`='.$gaayr);
  //   return $query->result();
  // }//getgaayr

  public function getGaayr($gaayr) {
    $query=$this->db->query('SELECT * FROM fingaa WHERE `gaayr`='.$gaayr);
    return $query->result();
  }//getgaayr

public function getGass($gaayr) {
  $query=$this->db->query('SELECT * FROM fingaatot WHERE `gaayr`='.$gaayr);
  return $query->result();
}//getGass

  public function getSaayr($gaayr) {
    $query=$this->db->query('SELECT * FROM finsaa WHERE `sayr`='.$gaayr);
    return $query->result();
  }//getsaayr

  function getFinGaa(){
    $date = new DateTime();
    $nowmoyr=$date->format('Y-n');
    $query=$this->db->query("SELECT * FROM fingaa WHERE `gaasta`=1 AND `gaayr`='" . $nowmoyr . "' ORDER BY uacscod ");
    return $query->result();
  }//get fingaa

  function getFinga4br(){
    $query=$this->db->query("SELECT allgastot,subpsgasgms,subpsgashrd,subpsgasapb,subpssupppf,subpssupleg,subenvistot,
      subsuplabstot,subsupedustot,subsupeiastot,subairstot,subh2ostot,subswmstot,subtoxstot,subpsappall FROM fingaatot WHERE gaayr='2023' ");
    // $query=$this->db->query("SELECT * FROM fingaa as f INNER JOIN fingaatot as ft WHERE f.`gaasta`=1 AND f.`gaayr`='2023-2' ORDER BY f.uacscod ");
    return $query->result();
  }//get fingaa

  // public function get_filtered_data($filter_option) {
  //   $this->db->select('*');
  //   $this->db->from('finsaa');
  //   $this->db->where('sayr', $filter_option);
  //   $query = $this->db->get();
  //   return $query->result();
  // }//fintry

  function getFinbrobps(){
    // $date = new DateTime();
    // $nowmoyr=$date->format('Y-n');
    $query=$this->db->query("SELECT * FROM finbrobps WHERE `obpssta`=1");
    return $query->result();
  }//get fingaa

  function getFingabr(){
    // $date = new DateTime();
    // $nowmoyr=$date->format('Y-n');
      $gaayr=$this->input->post('gaayr');

    $query=$this->db->query("SELECT * FROM fingaatot WHERE gaayr=`$gaayr` ");
    // $query=$this->db->query("SELECT * FROM fingaa as f INNER JOIN fingaatot as ft WHERE f.`gaasta`=1 AND f.`gaayr`='2023-2' ORDER BY f.uacscod ");
    return $query->result();
  }//get fingaa

  function uploadProf($fid,$firimg){
    $data=array(
      'firimg'=>$firimg
    );
    $this->db->where('fid',$fid);
    $this->db->update('firmaster3',$data);
  }

  function enlistUser($data){
    $this->db->insert('user', $data);
  }

  // public function login($uname, $upass) {
  //     // Find user by username
  //     echo $uname.''.$upass;
  //     exit();
  //
  //     $this->db->where('uname', $uname);
  //     $query = $this->db->get('user');
  //     $user = $query->row();
  //
  //     if ($user) {
  //         // Verify password
  //         if (password_verify($upass, $user->upass)) {
  //             // Password is correct, return user object
  //             return $user;
  //         }
  //     }
  //
  //     return false; // Invalid username or password
  // }

  // public function getHashedPassword($username) {
  //     $this->db->select('upass');
  //     $this->db->where('uname', $username);
  //     $query = $this->db->get('user');
  //
  //     if ($query->num_rows() > 0) {
  //
  //       return $query->row()->upass;
  //     }
  //
  //     return false;
  // }

  function createLGL($fid){
    $data=array(
      'cntlegal'=>$this->input->post('cntlegal'), 'fid'=>$this->input->post('fid'), 'track'=>$this->input->post('track'),
      'airlgl'=>$this->input->post('airlgl'), 'wtrlgl'=>$this->input->post('wtrlgl'), 'hazlgl'=>$this->input->post('hazlgl'), 'exclgl'=>$this->input->post('exclgl'),
      'pd15lgl'=>$this->input->post('pd15lgl'), 'pdairlgl'=>$this->input->post('pdairlgl'), 'pdwtrlgl'=>$this->input->post('pdwtrlgl'), 'pdhazlgl'=>$this->input->post('pdhazlgl'),
      'novnum'=>$this->input->post('novnum'), 'natvio'=>$this->input->post('natvio'),
      'datinsrep'=>$this->input->post('datinsrep'), 'datissnov'=>$this->input->post('datissnov'),
      'datrecnov'=>$this->input->post('datrecnov'), 'novpospap'=>$this->input->post('novpospap'), 'commit'=>$this->input->post('commit'), 'lglsta'=>1
    );
    $this->db->insert('legal',$data);
  }//addLGL

  // add pco with firmaster3
  function addPCO($fid){
       $data=array(
         'fid'=>$this->input->post('fid'), 'coa'=>$this->input->post('coa'), 'cat'=>$this->input->post('cat'), 'stat'=>$this->input->post('stat'),
         'pcoisdat'=>$this->input->post('pcoisdat'), 'pcoexdat'=>$this->input->post('pcoexdat'),
         'pcof'=>$this->input->post('pcof'), 'pcom'=>$this->input->post('pcom'), 'pcol'=>$this->input->post('pcol'),
         'pconum'=>$this->input->post('pconum'), 'pcoeml'=>$this->input->post('pcoeml'), 'trnngctr'=>$this->input->post('trnngctr'),
         'trnstdat'=>$this->input->post('trnstdat'), 'trnfidat'=>$this->input->post('trnfidat'), 'pcosta'=>1
       );
       $this->db->insert('pco',$data);

       // Get number of rows with matching fid in pco table
       $this->db->where('fid', $fid);
       $this->db->where('pcosta', 1);
       $numRows = $this->db->count_all_results('pco');

       if ($numRows == 1) {
           // Only one row exists in pco table, so update firmaster3 with pcoisdat and pcoexdat
           $data = array(
               'pco' => 1,
               'pcoisdat' => $this->input->post('pcoisdat'),
               'pcoexdat' => $this->input->post('pcoexdat')
           );
           $this->db->where('fid', $fid);
           $this->db->update('firmaster3', $data);
       } else if ($numRows > 1) {
         // Check if multiple rows exist in pco table for this fid
         $this->db->where('fid', $fid);
         $query = $this->db->get('pco');

         if ($query->num_rows() > 0) {
             if ($query->num_rows() == 1) {
                 // Only one row exists in pco table, so get pcoisdat and pcoexdat
                 $row = $query->row();
                 $pcoisdat = $row->pcoisdat;
                 $pcoexdat = $row->pcoexdat;
             } else {
                 // Multiple rows exist in pco table, so get earliest pcoisdat and latest pcoexdat
                 $this->db->select_min('pcoisdat');
                 $this->db->select_max('pcoexdat');
                 $this->db->where('fid', $fid);
 		             $this->db->where('pcosta', 1);
                 $query = $this->db->get('pco');

                 $row = $query->row();
                 $pcoisdat = $row->pcoisdat;
                 $pcoexdat = $row->pcoexdat;
             }

             // Update firmaster3 with pcoisdat and pcoexdat
             $data = array(
                 'pcoisdat' => $pcoisdat,
                 'pcoexdat' => $pcoexdat
             );
             $this->db->where('fid', $fid);
             $this->db->update('firmaster3', $data);
         }
       }
   }

  // function addPCO($fid){
  //   $data=array(
  //     'fid'=>$this->input->post('fid'), 'coa'=>$this->input->post('coa'), 'cat'=>$this->input->post('cat'), 'stat'=>$this->input->post('stat'),
  //     'pcoisdat'=>$this->input->post('pcoisdat'), 'pcoexdat'=>$this->input->post('pcoexdat'),
  //     'pcof'=>$this->input->post('pcof'), 'pcom'=>$this->input->post('pcom'), 'pcol'=>$this->input->post('pcol'),
  //     'pconum'=>$this->input->post('pconum'), 'pcoeml'=>$this->input->post('pcoeml'), 'trnngctr'=>$this->input->post('trnngctr'),
  //     'trnstdat'=>$this->input->post('trnstdat'), 'trnfidat'=>$this->input->post('trnfidat'), 'pcosta'=>1
  //   );
  //   $this->db->insert('pco',$data);
  //
  //   // Get existing pco and pcoexdat from the database
  //   $this->db->select('pco, pcoexdat');
  //   $this->db->where('fid', $fid);
  //   $query = $this->db->get('firmaster3');
  //
  //   if ($query->num_rows() > 0) {
  //       $row = $query->row();
  //       $pco = $row->pco;
  //       $pcoexdat = $row->pcoexdat;
  //
  //       // Check if pco is already set to 1
  //       if ($pco == 1) {
  //           $newPcoExDat = $this->input->post('pcoexdat');
  //
  //           // Compare new pcoexdat with existing pcoexdat
  //           if ($newPcoExDat > $pcoexdat) {
  //               // Update database with new pcoexdat
  //               $data = array(
  //                   'pcoexdat' => $newPcoExDat
  //               );
  //               $this->db->where('fid', $fid);
  //               $this->db->update('firmaster3', $data);
  //           }
  //           // Else ignore the saving
  //       } else {
  //           // Update database with pco = 1 and pcoisdat and pcoexdat
  //           $data = array(
  //               'pco' => 1,
  //               'pcoisdat' => $this->input->post('pcoisdat'),
  //               'pcoexdat' => $this->input->post('pcoexdat')
  //           );
  //           $this->db->where('fid', $fid);
  //           $this->db->update('firmaster3', $data);
  //       }
  //   }
  //
  // }//addPCO

  function adQClient(){
    $adstub='';
    if($this->input->post('qlane')=='P'){ $qlane=$this->input->post('cour'); $adstub='P'; }else{ $qlane=$this->input->post('qlane'); $adstub=''; }
    $data=array(
      'qnam'=>$this->input->post('qnam'), 'qfirm'=>$this->input->post('qfirm'), 'qfprov'=>$this->input->post('qfprov'), 'qfmun'=>$this->input->post('qfmun'),
      'qfbrgy'=>$this->input->post('qfbrgy'), 'qnum'=>$this->input->post('qnum'), 'qsex'=>$this->input->post('qsex'),
      'qage'=>$this->input->post('qage'), 'qlane'=>$qlane, 'qdat'=>$this->input->post('qdat'), 'qtim'=>$this->input->post('qtim'),'qintent'=>$this->input->post('qintent'),
      'qstat'=>1, 'qque'=>$this->input->post('qque'), 'qstub'=>substr($this->input->post('qintent'),0,3).$this->input->post('qstub').$adstub,
      'qspec'=>$this->input->post('qspec')
    );
    $this->db->insert('que',$data);
  }//add client

  function adFuel(){
    $data=array(
      'ghgdat'=>$this->input->post('ghgdat'), 'model'=>$this->input->post('model'), 'plate'=>$this->input->post('plate'),
      'fuel'=>$this->input->post('fuel'), 'charge'=>$this->input->post('charge'), 'kgco2'=>$this->input->post('kgco2'),
      'kgch4'=>$this->input->post('kgch4'), 'kgn2o'=>$this->input->post('kgn2o'), 'kgco2e'=>$this->input->post('kgco2e'),
      'tco2e'=>$this->input->post('tco2e'), 'ghgsta'=>1
    );
    $this->db->insert('ghgfuel',$data);
  }//add fuel

  function adElec(){
    $data=array(
      'month'=>$this->input->post('month'), 'kwh'=>$this->input->post('kwh'), 'eleuse'=>$this->input->post('eleuse'),
      'mwh'=>$this->input->post('mwh'), 'lvef'=>$this->input->post('lvef'), 'tco2e'=>$this->input->post('etco2e'), 'elesta'=>1
    );
    $this->db->insert('ghgelec',$data);
  }//add elec

  function adAir(){
    $data=array(
      'staff'=>$this->input->post('staff'), 'airdat'=>$this->input->post('airdat'), 'destin'=>$this->input->post('destin'),
      'miles'=>$this->input->post('miles'), 'cathaul'=>$this->input->post('cathaul'), 'co2em'=>$this->input->post('co2em'),
      'ch4em'=>$this->input->post('ch4em'), 'n2oem'=>$this->input->post('n2oem'), 'totem'=>$this->input->post('totem'), 'airsta'=>1
    );
    $this->db->insert('ghgair',$data);
  }//add air

  function adCaams(){
    $data=array(
      'author'=>$this->input->post('author'), 'camdat'=>$this->input->post('camdat'), 'parmat'=>$this->input->post('parmat'),
      'allave'=>$this->input->post('allave'), 'amtot'=>$this->input->post('amtot'), 'pmtot'=>$this->input->post('pmtot'), 'tot'=>$this->input->post('tot'),
      'pm113'=>$this->input->post('pm113'), 'pm11'=>$this->input->post('pm11'), 'pm11av'=>$this->input->post('pm11av'),
      'pm103'=>$this->input->post('pm103'), 'pm10'=>$this->input->post('pm10'), 'pm10av'=>$this->input->post('pm10av'),
      'pm93'=>$this->input->post('pm93'), 'pm9'=>$this->input->post('pm9'), 'pm9av'=>$this->input->post('pm9av'),
      'pm83'=>$this->input->post('pm83'), 'pm8'=>$this->input->post('pm8'), 'pm8av'=>$this->input->post('pm8av'),
      'pm73'=>$this->input->post('pm73'), 'pm7'=>$this->input->post('pm7'), 'pm7av'=>$this->input->post('pm7av'),
      'pm63'=>$this->input->post('pm63'), 'pm6'=>$this->input->post('pm6'), 'pm6av'=>$this->input->post('pm6av'),
      'pm53'=>$this->input->post('pm53'), 'pm5'=>$this->input->post('pm5'), 'pm5av'=>$this->input->post('pm5av'),
      'pm43'=>$this->input->post('pm43'), 'pm4'=>$this->input->post('pm4'), 'pm4av'=>$this->input->post('pm4av'),
      'pm33'=>$this->input->post('pm33'), 'pm3'=>$this->input->post('pm3'), 'pm3av'=>$this->input->post('pm3av'),
      'pm23'=>$this->input->post('pm23'), 'pm2'=>$this->input->post('pm2'), 'pm2av'=>$this->input->post('pm2av'),
      'pm13'=>$this->input->post('pm13'), 'pm1'=>$this->input->post('pm1'), 'pm1av'=>$this->input->post('pm1av'),
      'pm123'=>$this->input->post('pm123'), 'pm12'=>$this->input->post('pm12'), 'pm12av'=>$this->input->post('pm12av'),

      'am113'=>$this->input->post('am113'), 'am11'=>$this->input->post('am11'), 'am11av'=>$this->input->post('am11av'),
      'am103'=>$this->input->post('am103'), 'am10'=>$this->input->post('am10'), 'am10av'=>$this->input->post('am10av'),
      'am93'=>$this->input->post('am93'), 'am9'=>$this->input->post('am9'), 'am9av'=>$this->input->post('am9av'),
      'am83'=>$this->input->post('am83'), 'am8'=>$this->input->post('am8'), 'am8av'=>$this->input->post('am8av'),
      'am73'=>$this->input->post('am73'), 'am7'=>$this->input->post('am7'), 'am7av'=>$this->input->post('am7av'),
      'am63'=>$this->input->post('am63'), 'am6'=>$this->input->post('am6'), 'am6av'=>$this->input->post('am6av'),
      'am53'=>$this->input->post('am53'), 'am5'=>$this->input->post('am5'), 'am5av'=>$this->input->post('am5av'),
      'am43'=>$this->input->post('am43'), 'am4'=>$this->input->post('am4'), 'am4av'=>$this->input->post('am4av'),
      'am33'=>$this->input->post('am33'), 'am3'=>$this->input->post('am3'), 'am3av'=>$this->input->post('am3av'),
      'am23'=>$this->input->post('am23'), 'am2'=>$this->input->post('am2'), 'am2av'=>$this->input->post('am2av'),
      'am13'=>$this->input->post('am13'), 'am1'=>$this->input->post('am1'), 'am1av'=>$this->input->post('am1av'),
      'am123'=>$this->input->post('am123'), 'am12'=>$this->input->post('am12'), 'am12av'=>$this->input->post('am12av'),
      'camsta'=>1
    );
    $this->db->insert('aircaams',$data);
  }//add caams

  function adConv(){
    $data=array(
      'userid'=>$this->input->post('userid'), 'staff'=>$this->input->post('staff'), 'condat'=>$this->input->post('condat'),
      'idea'=>$this->input->post('idea'), 'consta'=>1
    );
    $this->db->insert('convention',$data);
  }//add conv

  function adPlan(){
    $data=array(
      'userid'=>$this->input->post('userid'), 'puser'=>$this->input->post('puser'), 'pact'=>$this->input->post('pact'),
      'mondat'=>$this->input->post('mondat'), 'iisno'=>$this->input->post('iisno'),'pfirm'=>$this->input->post('pfirm'),
      'pprov'=>$this->input->post('pprov'), 'pmun'=>$this->input->post('pmun'), 'pbrgy'=>$this->input->post('pbrgy'),
      'plat'=>$this->input->post('plat'), 'plon'=>$this->input->post('plon'), 'psta'=>1
    );
    $this->db->insert('plan',$data);
  }//add plan

  function adHelp(){
    date_default_timezone_set('Asia/Manila');
    $hdat=date('Y-m-d'); $htim=date('H:i:s');

    $data=array(
      'hnam'=>$this->input->post('hnam'), 'hnum'=>$this->input->post('hnum'),
      'heml'=>$this->input->post('heml'), 'hiss'=>$this->input->post('hiss'),
      'hdat'=>$hdat, 'htim'=>$htim,
      'hsta'=>0
    );
    $this->db->insert('help',$data);
  }//add help

  function adIssCon(){
    $data=array(
      'issid'=>$this->input->post('issid'), 'office'=>$this->input->post('office'),
      'datiss'=>$this->input->post('datiss'), 'isstyp'=>$this->input->post('isstyp'), 'issue'=>$this->input->post('issue'), 'back'=>$this->input->post('back'),
      'recom'=>$this->input->post('recom'), 'act'=>$this->input->post('act'), 'issby'=>$this->input->post('issby'), 'issta'=>$this->input->post('issta')
    );
    $this->db->insert('isscon',$data);
  }

  function adFinPart($gaayr){
    // capitalized except articles
    $articles = array("a", "an", 'the', 'and', 'of', 'but', 'or', 'for', 'nor', 'with', 'on', 'at', 'to', 'from', 'by');
    $part = $this->input->post('part');
    $part = explode(" ", $part);
    foreach($part as &$word) { if(!in_array(strtolower($word), $articles)) { $word = ucfirst($word); } }
    $part = implode(" ", $part);

    $data=array(
      'gaayr'=>$this->input->post('gaayr'), 'uacscod'=>$this->input->post('uacscod'), 'parthead'=>$this->input->post('parthead'), 'part'=>$part,
      'gasgms'=>0, 'gashrd'=>0, 'gasapb'=>0, 'gasstot'=>0, 'supppf'=>0, 'supleg'=>0,
      'supstot'=>0, 'assstot'=>0, 'asslab'=>0, 'assedu'=>0, 'asseia'=>0, 'mgtstot'=>0,
      'mgtair'=>0, 'mgth2o'=>0, 'mgtswm'=>0, 'mgttox'=>0,
      'subop'=>0, 'fintot'=>0, 'aqmf'=>0, 'nwqmf'=>0,
      'totapp'=>0,'gaasta'=>1
    );
    $this->db->insert('fingaa',$data);

  }// add Particulars

  // function adBrobps(){
  //   $data=array(
  //
  //   );
  //   $this->db->insert('finbrobps',$data);
  // }

  function getQDat4Que(){
    $query=$this->db->query('SELECT qdat,qque FROM que ');
    return $query->result();
  }//last qque

  function getQDat4Tab(){
    // $query=$this->db->query('SELECT qid,qnam,qfirm,qdat,qstat,qstub,qestaff FROM que WHERE qdat=DATE(now()) AND qstat=1 || qstat=2 ORDER BY qstat ');
    $query=$this->db->query('SELECT qid,qnam,qfirm,qdat,qspec,qstat,qstub,qestaff FROM que WHERE qdat=DATE(now()) ORDER BY qstat ');
    return $query->result();
  }//for client que table

  function getQDatORD(){
    $query=$this->db->query('SELECT qid,qdat,qque FROM que WHERE qdat=DATE(now()) AND qstat=1 AND qintent="ORD" ');
    return $query->result();
  }//last ORD

  function changePass(){
    $query=$this->db->query('SELECT * FROM cpass WHERE `cpstat`=0 ');
    return $query->result();
  }//Inactive user

  function getUser0(){
    $query=$this->db->query('SELECT * FROM user WHERE `ustat`=0 and `urights`=0 ORDER BY 1 desc');
    return $query->result();
  }//Inactive user

  function getInactFirm(){
    $query=$this->db->query('SELECT * FROM firmaster3 WHERE `fstat`=0 and `fid`!=0 ORDER BY 1 desc');
    return $query->result();
  }//Inactive firms

  function getInactlgl(){
    $query=$this->db->query('SELECT * FROM legal WHERE `lglsta`=0 and `cntlegal`!=0 ORDER BY 1 desc');
    return $query->result();
  }//Inactive legal

  function getUserStat(){
    $query=$this->db->query('SELECT userid,uname,lilo,lilodat,urights,ustat FROM user ORDER BY 1 desc');
    return $query->result();
  }//Inactive user

  function getPcoDeact(){
    $query=$this->db->query('SELECT pcocnt,coa,pcof,pcom,pcol FROM pco WHERE `fid`!=0 && `pcosta`=0 ORDER BY 1 desc');
    return $query->result();
  }//Inactive user

  function getPcoCheck(){
    $query=$this->db->query('SELECT fid,pcocheck FROM firmaster3 WHERE `pcocheck`=1 ');
    return $query->result();
  }//Inactive user

  function getRecFoi(){
    $query=$this->db->query('SELECT * FROM recfoi ORDER BY reqapdat desc ');
    return $query->result();
  }//req2open

  function getRecFoi0(){
    $query=$this->db->query('SELECT COUNT(reqsta) as foi FROM recfoi WHERE reqsta=0 ');
    return $query->result();
  }//req2open

  function getGayr(){
    $query=$this->db->query('SELECT DISTINCT(gaayr) FROM fingaa ORDER BY gaayr ');
    return $query->result();
  }//gaa

  function resBrob(){
    $query=$this->db->query('SELECT DISTINCT(gaayr) FROM fingaatot ORDER BY gaayr ');
    return $query->result();
  }//brob

  function getRecFoi1(){
    $query=$this->db->query('SELECT COUNT(reqsta) as foi FROM recfoi WHERE reqsta=1 ');
    return $query->result();
  }//req2trash

  function getOneLGL($fid){
    $query=$this->db->query('SELECT * FROM legal WHERE `fid`='.$fid.' && `lglsta`=1 ORDER BY 1 desc');
    return $query->result();
  }//

  function getAllLGL($fid){
    $query=$this->db->query('SELECT cntlegal FROM legal');
    return $query->result();
  }//LGL

  function getUplgl($fid){
    $query=$this->db->query('SELECT * FROM uplegal WHERE `fid`='.$fid.' ');
    return $query->result();
  }// LGL

  function getUpcpdEccnLast(){
    $query=$this->db->query('SELECT upterm,upcpdfil FROM upcpd ORDER BY fid desc LIMIT 1 ');
    return $query->result();
  }// CPD

  function getUpcpd($fid){
    $query=$this->db->query('SELECT * FROM upcpd WHERE `fid`='.$fid.' ');
    return $query->result();
  }// CPD

  function Upcpd4recfoi(){
    $query=$this->db->query('SELECT upcpdid,fid,upterm,upcpdfil FROM upcpd ');
    return $query->result();
  }//recfoi

  // from 4blive
  function getLguMsg(){
    $query=$this->db->query('SELECT lgisid,lgusid,name,email,sub,mess,sendat,stat FROM 4blive.contact WHERE stat=0 ');
    return $query->result();
  }//lgumsg

  function getCntMsg(){
    $query=$this->db->query('SELECT COUNT(lgisid) AS msgcnt FROM 4blive.contact WHERE stat=0 ');
    return $query->result();
  }//lgumsg

  function getUpemed($fid){
    $query=$this->db->query('SELECT COUNT(fid) as pfid,upemeid,fid,upterm,filename,updat FROM upemed WHERE `fid`='.$fid.' ');
    return $query->result();
  }//EMED

  function getPco($fid){
    $query=$this->db->query('SELECT * FROM pco WHERE `fid`='.$fid.' AND pcosta=1 ');
    return $query->result();
  }// pco

  function getUpProFlo($fid){
    $query=$this->db->query('SELECT * FROM upemed WHERE `fid`='.$fid.' ');
    return $query->result();
  }// proflo

  function getUpdp($fid){
    $query=$this->db->query('SELECT * FROM updplab WHERE `fid`='.$fid.' ORDER BY 1 desc ');
    return $query->result();
  }//

  function getGhgFuel(){
    $query=$this->db->query('SELECT * FROM ghgfuel WHERE ghgsta=1 ORDER BY 1 ');
    return $query->result();
  }// ghg fuel

  function getGhgElec(){
    $query=$this->db->query('SELECT * FROM ghgelec WHERE elesta=1 ORDER BY 1 desc ');
    return $query->result();
  }// ghg electricity

  function getGhgAir(){
    $query=$this->db->query('SELECT * FROM ghgair WHERE airsta=1 ORDER BY 1 desc ');
    return $query->result();
  }// ghg electricity

  function getCAAMS(){
    $query=$this->db->query('SELECT * FROM aircaams WHERE camsta=1 ORDER BY 1 desc ');
    return $query->result();
  }// air quality caams

  function getConvention(){
    $query=$this->db->query('SELECT * FROM convention WHERE consta=1 || consta=2 ORDER BY 1 desc ');
    return $query->result();
  }//req2open

  function getPlan(){
    $query=$this->db->query('SELECT * FROM plan WHERE psta=1 ORDER BY 1 desc ');
    return $query->result();
  }//plan

  function getPlanTar(){
    $query=$this->db->query('SELECT `userid`,`uname`,`urights`,`usec`,`provtar`,`tardat`,`taryr`,`provtar`,`plantar` FROM `plantar` ');
    return $query->result();
  }//getPlanUser

  function updateData($fid){
    $data=array(
      'firm'=>$this->input->post('firm')
    );
    $this->db->where('fid',$fid);
    $this->db->update('firmaster3',$data);
  }//update

  function edRateClient($qid){
    $data=array(
      'qstat'=>'4',
      'qcomdat'=>$this->input->post('qcomdat'), 'qcomtim'=>$this->input->post('qcomtim'),
      'gridProf'=>$this->input->post('gridProf'), 'gridProm'=>$this->input->post('gridProm'),
      'gridTech'=>$this->input->post('gridTech'), 'gridDeli'=>$this->input->post('gridDeli'),
      'gridEnvi'=>$this->input->post('gridEnvi'), 'gridOver'=>$this->input->post('gridOver'),
      'qmark'=>$this->input->post('qmark')
    );
    $this->db->where('qid',$qid);
    $this->db->update('que',$data);
  }//update rate client

  //updateisscon
  function edIssCon($issid,$upact){
    $data=array(
      'act'=>$this->input->post('act'),
      'upact'=>$upact,
      'datact'=>$this->input->post('datact'),
      'actby'=>$this->input->post('actby'),
      'issta'=>$this->input->post('issta')
    );
    $this->db->where('issid',$issid);
    $this->db->update('isscon',$data);
  }//updateisscon

  //updateisscon
  function edGenIssCon($issid,$upact){
    $data=array(
      'upact'=>$upact
    );
    $this->db->where('issid',$issid);
    $this->db->update('isscon',$data);
  }//updateisscon

  //updateisscon
  function updateIss($issid){
    $data=array(
      'issue'=>$this->input->post('issue'), 'back'=>$this->input->post('back'),
      'recom'=>$this->input->post('recom'), 'issby'=>$this->input->post('issby')
    );
    $this->db->where('issid',$issid);
    $this->db->update('isscon',$data);
  }//updateisscon

  function edProvTar($userid){
    $varone=$this->input->post('varOne');
    if($varone=='prov'){
      $data=array( 'provtar'=>$this->input->post('target') );
    }else{
      $data=array( 'plantar'=>$this->input->post('target') );
    }
    $this->db->where('userid',$userid);
    $this->db->update('plantar',$data);
  }

   //useAct
   function useAct($userid){
    // update user rights

    //generate simple random pass
			$set = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$pass = substr(str_shuffle($set), 0, 5);


    $data=array(
        'upass' => password_hash($pass, PASSWORD_BCRYPT),
        'urights'=>$this->input->post('urights')
    );
    $this->db->where('userid',$userid);
    $this->db->update('user',$data);

    // retrieve data
    $this->db->where('userid',$userid);
    $query = $this->db->get('user');
    $user = $query->row();

    // check if to be saved to plantar
    $urights=$this->input->post('urights');
    if($urights=='1.6'||$urights=='1.6.1'||$urights=='1.7'||$urights=='1.7.1'||$urights=='1.8'||$urights=='1.8.1'||$urights=='1.9'||$urights=='1.9.1'||$urights=='1.10'||$urights=='1.10.1'){
        // insert to plan prov
        $data=array(
            'userid'=>$this->input->post('userid'),
            'urights'=>$this->input->post('urights'),
            'uname'=>$this->input->post('uname'),
            'usec'=>$this->input->post('usec'),
            'tardat'=>$this->input->post('tardat'),
            'taryr'=>$this->input->post('taryr'),
            'provtar'=>0,
            'plantar'=>0,
            'tarsta'=>1
        );
        $this->db->insert('plantar',$data);

        } else {
        // Code for handling the else condition if necessary
        }
        // $this->load->library('email');

        $config = array(
            'protocol' => 'smtp',
            'smtp_host' => 'smtp-mail.outlook.com',
            'smtp_port' => 587,
            'smtp_user' => 'r4bsupport@emb.gov.ph',
            'smtp_pass' => 'Groundzero2868***',
            'smtp_crypto' => 'tls',
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'wordwrap' => TRUE
        );

        $this->email->initialize($config);
        $this->email->set_newline("\r\n");
        $this->email->from('r4bsupport@emb.gov.ph', 'r4bsupport');
        $this->email->to($user->uemail);
        $this->email->subject('Email Verification');

        $url = "http://localhost/4BHive/ActivateAccount/". $user->userid ."/". $user->code ."";
        $encodedUrl = urlencode($url);

        $message = 	"
        <html>
        <head>
            <title>Verification</title>
        </head>
        <body>
            <h2>Good day ". ucfirst($user->fname)."!</h2>
            <p>Here is your 4BHive Account:</p>
            <p>Username: ".$user->uname."</p>
            <p>Password: ".$pass."</p>
            <p>Please click the link below to activate your account.</p></br>
            <h4><a href='". base_url() ."Auth/activate/". $user->userid ."/". $user->code ."'>$encodedUrl</a></h4>
        </body>
        </html>
        ";
        $this->email->message($message);

        // Send the email
        if ($this->email->send()) {
            // Emailsent successfully
        redirect("blackhive", "refresh");
        } else {
        // Email sending failed
        $error_message = $this->email->print_debugger();
        echo $error_message;
        // Handle the error scenario as per your application's requirements
        }
}
// end userAct

  // Activation
  public function getUser($id){
    $query = $this->db->get_where('user',array('userid'=>$id));
    return $query->row_array();
  }

  public function activate($data, $id){
    $this->db->where('userid', $id);
    return $this->db->update('user', $data);
  }
  // end of account Activation

  // change user password
    public function checkOldPass($userid, $old_password) {
      $this->db->select('upass');
      $this->db->where('userid', $userid);
      $query = $this->db->get('user');
      $user = $query->row();

      if ($user) {
          return password_verify($old_password, $user->upass);
      } else {
          return false;
      }
    }

    public function Update_User_Data($userid, $data) {
      $this->db->set($data);
      $this->db->where('userid', $userid);
      $this->db->update('user');
      if ($this->db->affected_rows() > 0) {
          return true;
      } else {
          return false;
      }
    }

    public function getUserById($userid) {
      $this->db->where('userid', $userid);
      $query = $this->db->get('user');
      return $query->row();
    }
  //forgot password

  function edcPass(){
    $userid=$this->input->post('userid'); $upass=$this->input->post('upass');

    $this->db->where('userid',$userid);
    $query = $this->db->get('user');
    $user = $query->row();

    if($upass){
    $config = array(
      'protocol' => 'smtp',
      'smtp_host' => 'smtp-mail.outlook.com',
      'smtp_port' => 587,
      'smtp_user' => 'r4bsupport@emb.gov.ph',
      'smtp_pass' => 'Groundzero2868***',
      'smtp_crypto' => 'tls',
      'mailtype' => 'html',
      'charset' => 'utf-8',
      'wordwrap' => TRUE
  );

  $this->email->initialize($config);
  $this->email->set_newline("\r\n");
  $this->email->from('r4bsupport@emb.gov.ph', 'r4bsupport');
  $this->email->to($user->uemail);
  $this->email->subject('Email Verification');

  $url = "http://localhost/4BHive/";
  $encodedUrl = urlencode($url);

  $message = 	"
  <html>
  <head>
      <title>Verification</title>
  </head>
  <body>
      <h2>Good day ". ucfirst($user->fname)."!</h2>
      <p>Here is the confirmation of your reset password</p>
      <p>Please click the link below and login your account with your new password!</p>
      <h4><a href='". base_url() ."Auth/login/"."'>$encodedUrl</a></h4>
  </body>
  </html>
  ";
  $this->email->message($message);
  if ($this->email->send()) {
    $this->db->query("UPDATE user SET `upass` = '$upass' WHERE `userid` = '$userid'");

    date_default_timezone_set('Asia/Manila');
    $changedat=date('Y-m-d'); $changetim=date('H:i:s');
    $cpid=$this->input->post('cpid');
    $this->db->query("UPDATE cpass SET `changedat` = '$changedat', `changetim` = '$changetim', `cpstat`=1 WHERE `cpid` = '$cpid'");

  redirect("blackhive", "refresh");
  } else {
  $error_message = $this->email->print_debugger();
  echo $error_message;
  }

} }
//end forgot pass


  //firmAct
  function firmAct($fid){
    $data=array(
      'fstat'=>$this->input->post('fstat')
    );
    $this->db->where('fid',$fid);
    $this->db->update('firmaster3',$data);
  }//firmAct

  //lglAct
  function lglAct($cntlegal){
    $data=array(
      'lglsta'=>$this->input->post('lglsta')
    );
    $this->db->where('cntlegal',$cntlegal);
    $this->db->update('legal',$data);
  }//lglAct

function LgActUser($lgusid) {
  $stat=$this->input->post('stat');
  //3-disapprove
  if($stat==3){
    $data=array( 'stat'=>$this->input->post('stat') );
    $this->db->where('lgusid', $lgusid);
    return $this->db->update('4blive.lguser', $data);
  //4-swm admin
  }elseif($stat==4){
      $data=array( 'stat'=>$this->input->post('stat') );
      $this->db->where('lgusid', $lgusid);
      return $this->db->update('4blive.lguser', $data);
  //1-approve
  }else if($stat==1){
    $data = array('stat' => 1);
    $this->db->where('lgusid', $lgusid);
    $this->db->update('4blive.lguser', $data);

    $this->load->library('email'); // Load the Email Library

    $config = array(
        'protocol' => 'smtp',
        'smtp_host' => 'smtp-mail.outlook.com',
        'smtp_port' => 587,
        'smtp_user' => 'r4bsupport@emb.gov.ph',
        'smtp_pass' => 'Groundzero2868***',
        'smtp_crypto' => 'tls',
        'mailtype' => 'html',
        'charset' => 'utf-8',
        'wordwrap' => TRUE
    );

    $this->email->initialize($config);
    $this->email->set_newline("\r\n");
    $this->email->from('r4bsupport@emb.gov.ph', 'r4bsupport');

    $user = $this->db->get_where('4blive.lguser', array('lgusid' => $lgusid))->row();
    $this->email->to($user->email); // Assuming email field is named 'email' in your database

    $this->email->subject('DENR|EMB-MIMAROPA Email Verification');

    $url = "https://localhost/4blive/index.php/portal/{$user->lgusid}";
    $encodedUrl = urlencode($url);

    $message = "<html>
                <head>
                    <title>Verification</title>
                </head>
                <body>
                    <h2>Good day " . ucfirst($user->fnam) . "!</h2>
                    <h3>Click the link to activate your account.</h3></br>
                    <a href='" . base_url() . "Auth/lgactive/{$user->lgusid}'>$encodedUrl</a>
                </body>
                </html>";


    $this->email->message($message);

    if ($this->email->send()) {
        redirect("Auth/swmadmin");
    } else {
        $error_message = $this->email->print_debugger();
        echo $error_message;
    }

  }//stat=1

}//func

// Activation
public function lgugetUser($id){
$query = $this->db->get_where('4blive.lguser',array('lgusid'=>$id));
return $query->row_array();
}

public function lguactivate($data, $id){
$this->db->where('lgusid', $id);
return $this->db->update('4blive.lguser', $data);
}

// end of account Activation

  //blackhive start
  function pcoAct($pcocnt){
    $data=array(
      'pcosta'=>$this->input->post('pcosta')
    );
    $this->db->where('pcocnt',$pcocnt);
    $this->db->update('pco',$data);
  }////pco Act

  function exdatChck($fid){
    $data=array(
      'pcocheck'=>$this->input->post('pcocheck')
    );
    $this->db->where('fid',$fid);
    $this->db->update('firmaster3',$data);
  }////pco Act

  function chrights($userid){
    $data=array(
      'urights'=>$this->input->post('urights')
    );
    $this->db->where('userid',$userid);
    $this->db->update('user',$data);
  }////pco Act
  //blackhive end

  function updateOne($fid){
    // actdat for activity
    date_default_timezone_set('Asia/Manila'); // CDT
    $actdat = date('YMd H:i:s');

    $varOne = $this->input->post('varOne');
    $data=array(
      $varOne=>$this->input->post($varOne)
    );
    $this->db->where('fid',$fid);
    $this->db->update('firmaster3',$data);
    if($varOne!='firdes'){
      $this->db->where('fid',$fid);
      $this->db->update('firmaster3',$data);
    }

    $data=array(
      'uname'=>$_SESSION['uname'], 'acttyp'=>'changed', 'varbl'=>$varOne, 'firm'=>$this->input->post('firm'),
      'former'=>$this->input->post('former'), 'new'=>$this->input->post($varOne), 'actdat'=>$actdat
    );
    $this->db->insert('actvty', $data);
  }//update

  function deloneEmed($fid,$upemeid){
    // actdat for activity
    date_default_timezone_set('Asia/Manila'); // CDT
    $actdat = date('YMd H:i:s');
    $varOne = $this->input->post('varOne');

    $data=array(
      'fid'=>$this->input->post('fid'),
      'upterm'=>$this->input->post('upterm'),
      // 'upcpdid'=>$this->input->post('upcpdid'),
      'filename'=>$this->input->post($varOne)
    );
    unlink('./upglobal/upemed/'.$varOne);

    $this->db->where('upemeid',$upemeid);
    $this->db->delete('upemed');
  }//update

  function delgalPho($fid,$galid){
    // actdat for activity
    date_default_timezone_set('Asia/Manila'); // CDT
    $actdat = date('YMd H:i:s');
    $filename=$this->input->post('filename');

    $data=array(
      'fid'=>$this->input->post('fid'),
      'filename'=>$this->input->post('filename')
    );
    unlink('./upglobal/upfirmgllry/'.$filename);

    $this->db->where('galid',$galid);
    $this->db->delete('upgallery');
  }//update

  function remFirImg($fid){
    // actdat for activity
    date_default_timezone_set('Asia/Manila'); // CDT
    $actdat = date('YMd H:i:s');
    $varOne = $this->input->post('varOne');

    $data=array( 'firimg'=>'' );
    unlink('./upglobal/upfirmprof/'.$varOne);

    $this->db->where('fid',$fid);
    $this->db->update('firmaster3',$data);
  }//deUpImg

  function deLeg($uplegid){

    $varOne = $this->input->post('varOne');

    $data=array(
      'fid'=>$this->input->post('fid'),
      'upterm'=>$this->input->post('upterm'),
      // 'upcpdid'=>$this->input->post('upcpdid'),
      'uplglfil'=>$this->input->post($varOne)
    );
    unlink('./upglobal/uplgl/'.$varOne);

    $this->db->where('uplegid',$uplegid);
    $this->db->delete('uplegal');
  }//update

  function delOne($fid,$upcpdid){
    // actdat for activity
    date_default_timezone_set('Asia/Manila'); // CDT
    $actdat = date('YMd H:i:s');
    $varOne = $this->input->post('varOne');

    $data=array(
      'fid'=>$this->input->post('fid'),
      'upterm'=>$this->input->post('upterm'),
      // 'upcpdid'=>$this->input->post('upcpdid'),
      'upcpdfil'=>$this->input->post($varOne)
    );
    unlink('./upglobal/upcpd/'.$varOne);

    $this->db->where('upcpdid',$upcpdid);
    $this->db->delete('upcpd');
  }//update

  function updateFirm($fid){
    // actdat for activity
    date_default_timezone_set('Asia/Manila'); // CDT
    $actdat = date('YMd H:i:s');

    $varOne = $this->input->post('varOne');
    $data=array(
      $varOne=>$this->input->post($varOne)
    );
    $this->db->where('fid',$fid);
    $this->db->update('firmaster3',$data);

    $data=array(
      'uname'=>$_SESSION['uname'], 'acttyp'=>'changed', 'varbl'=>$varOne, 'firm0'=>$this->input->post('firm'),
      'former'=>$this->input->post('former'), 'new'=>$this->input->post($varOne), 'actdat'=>$actdat
    );
    $this->db->insert('actvty', $data);

  }//update

  function updateLGL($cntlegal,$fid){
    $data=array(
      'cntlegal'=>$this->input->post('cntlegal'), 'fid'=>$this->input->post('fid'), 'track'=>$this->input->post('track'),
      'airlgl'=>$this->input->post('airlgl'), 'wtrlgl'=>$this->input->post('wtrlgl'), 'hazlgl'=>$this->input->post('hazlgl'), 'hazlgl'=>$this->input->post('hazlgl'),
      'pd15lgl'=>$this->input->post('pd15lgl'), 'pdairlgl'=>$this->input->post('pdairlgl'), 'pdwtrlgl'=>$this->input->post('pdwtrlgl'), 'pdhazlgl'=>$this->input->post('pdhazlgl'),
      'novnum'=>$this->input->post('novnum'), 'natvio'=>$this->input->post('natvio'),
      'datinsrep'=>$this->input->post('datinsrep'), 'datissnov'=>$this->input->post('datissnov'),
      'datrecnov'=>$this->input->post('datrecnov'), 'novpospap'=>$this->input->post('novpospap'), 'commit'=>$this->input->post('commit'),
      'docket'=>$this->input->post('docket'), 'datissord'=>$this->input->post('datissord'), 'datrecord'=>$this->input->post('datrecord'),
      'ordpospap'=>$this->input->post('ordpospap'), 'ordsta'=>$this->input->post('ordsta'),
      'datappres'=>$this->input->post('datappres'), 'resrec'=>$this->input->post('resrec')
    );
    $duowhere = array('fid' => $fid,'cntlegal' => $cntlegal);
    $this->db->where($duowhere);
    $this->db->update('legal',$data);
  }//update  //update lgl

  function deacLGL($cntlegal,$fid){
    $data=array( 'lglsta'=>0 );
    $duowhere = array('fid' => $fid,'cntlegal' => $cntlegal);
    $this->db->where($duowhere);
    $this->db->update('legal',$data);
  }//del lgl  //deact lgl

  function deConv($conid){
    $data=array('consta'=>0);
    $this->db->where('conid',$conid);
    $this->db->update('convention',$data);
  }//del conv

  function deactPco($pcocnt){
      $this->db->trans_start();

      $data=array('pcosta'=>0);
      $this->db->where('pcocnt',$pcocnt);
      $this->db->update('pco',$data);

      // Get number of rows with matching fid in pco table
      $fid = $this->db->select('fid')->where('pcocnt', $pcocnt)->get('pco')->row()->fid;
      $this->db->where('fid', $fid);
      $this->db->where('pcosta', 1);
      $numRows = $this->db->count_all_results('pco');

      if ($numRows == 1) {
          // Only one row exists in pco table, so update firmaster3 with pco=0
          $data = array('pco' => 0);
          $this->db->where('fid', $fid);
          $this->db->update('firmaster3', $data);
      } else if ($numRows > 1) {
          // Multiple rows exist in pco table, so update pcocheck=1
          $data = array('pcocheck' => 1);
          $this->db->where('fid', $fid);
          $this->db->update('firmaster3', $data);
      }

      $this->db->trans_complete();
      if ($this->db->trans_status() === FALSE) {
          // Handle error
          $error_msg = "An error occurred while deactivating the PCO. Please inform and show this error message to the BHive Master!";
          echo "<script type='text/javascript'>alert('$error_msg');</script>";
      }
  }//deact pco

  // function deactPco($pcocnt){
  //   $data=array('pcosta'=>0);
  //   $this->db->where('pcocnt',$pcocnt);
  //   $this->db->update('pco',$data);
  // }//deact pco

  //managing head
  function updateHead($fid){
    // actdat for activity
    date_default_timezone_set('Asia/Manila'); // CDT
    $actdat = date('YMd H:i:s');

    $data=array(
      'headl'=>$this->input->post('headl'),
      'headf'=>$this->input->post('headf'),
      'headm'=>$this->input->post('headm')
    );
    $this->db->where('fid',$fid);
    $this->db->update('firmaster3',$data);

    $varOne = $this->input->post('varOne');
    // $data=array(
    //   $varOne=>$this->input->post($varOne)
    // );
    $data=array(
      'uname'=>$_SESSION['uname'], 'acttyp'=>'changed', 'varbl'=>'PCO', 'firm'=>$this->input->post('firm'),
      'former'=>$this->input->post('former'), 'new'=>$this->input->post('headf').' '.$this->input->post('headm').' '.$this->input->post('headl'), 'actdat'=>$actdat
    );
    $this->db->insert('actvty', $data);
  }//update

  // update pco with firmaster3
  function updatePco($fid,$pcocnt){
      // actdat for activity
      date_default_timezone_set('Asia/Manila'); // CDT
      $actdat = date('YMd H:i:s');

      $data=array(
        'coa'=>$this->input->post('coa'), 'cat'=>$this->input->post('cat'), 'stat'=>$this->input->post('stat'),
        'pcoisdat'=>$this->input->post('pcoisdat'), 'pcoexdat'=>$this->input->post('pcoexdat'),
        'pcof'=>$this->input->post('pcof'), 'pcom'=>$this->input->post('pcom'), 'pcol'=>$this->input->post('pcol'),
        'pconum'=>$this->input->post('pconum'), 'pcoeml'=>$this->input->post('pcoeml'), 'trnngctr'=>$this->input->post('trnngctr'),
        'trnstdat'=>$this->input->post('trnstdat'), 'trnfidat'=>$this->input->post('trnfidat')
      );

      $this->db->where('pcocnt',$pcocnt);
      $this->db->update('pco',$data);

      $pco_count = $this->db->where('fid', $fid && 'pcosta', 1)->from('pco')->count_all_results();

      if ($pco_count == 1) {
        $this->db->select('pcoisdat, pcoexdat');
        $this->db->where('fid', $fid);
        $this->db->where('pcosta', 1);
        $query = $this->db->get('pco');
        $result = $query->row();

        $firmaster3_data = array(
          'pcoisdat' => $result->pcoisdat,
          'pcoexdat' => $result->pcoexdat
        );

        $this->db->where('fid', $fid);
        $this->db->update('firmaster3', $firmaster3_data);

      } else if ($pco_count > 1) {
        $this->db->select_min('pcoisdat');
        $this->db->select_max('pcoexdat');
        $this->db->where('fid', $fid);
        $this->db->where('pcosta', 1);
        $query = $this->db->get('pco');
        $result = $query->row();

        $firmaster3_data = array(
          'pcoisdat' => $result->pcoisdat,
          'pcoexdat' => $result->pcoexdat
        );

        $this->db->where('fid', $fid);
        $this->db->update('firmaster3', $firmaster3_data);
      }
  }
  // update pco with firmaster3

  // function updatePco($fid,$pcocnt){
  //   // actdat for activity
  //   date_default_timezone_set('Asia/Manila'); // CDT
  //   $actdat = date('YMd H:i:s');
  //
  //   $data=array(
  //     'coa'=>$this->input->post('coa'), 'cat'=>$this->input->post('cat'), 'stat'=>$this->input->post('stat'),
  //     'pcoisdat'=>$this->input->post('pcoisdat'), 'pcoexdat'=>$this->input->post('pcoexdat'),
  //     'pcof'=>$this->input->post('pcof'), 'pcom'=>$this->input->post('pcom'), 'pcol'=>$this->input->post('pcol'),
  //     'pconum'=>$this->input->post('pconum'), 'pcoeml'=>$this->input->post('pcoeml'), 'trnngctr'=>$this->input->post('trnngctr'),
  //     'trnstdat'=>$this->input->post('trnstdat'), 'trnfidat'=>$this->input->post('trnfidat')
  //   );
  //   $this->db->where('pcocnt',$pcocnt);
  //   $this->db->update('pco',$data);
  // }//edit PCO

  function updateEmed($fid){
    $data=array(
      'fid'=>$this->input->post('fid'),
      'wstwtr'=>$this->input->post('wstwtr'), 'wwtf'=>$this->input->post('wwtf'), 'wwtftyp'=>$this->input->post('wwtftyp'),
      'wwtfcap'=>$this->input->post('wwtfcap'), 'toh2oco'=>$this->input->post('toh2oco'),
      'moave'=>$this->input->post('moave'), 'floday'=>$this->input->post('floday'), 'avedisday'=>$this->input->post('avedisday'),
      'hvymetal'=>$this->input->post('hvymetal'),
      'param1'=>$this->input->post('param1'), 'efflu1'=>$this->input->post('efflu1'), 'stand1'=>$this->input->post('stand1'),
      'param2'=>$this->input->post('param2'), 'efflu2'=>$this->input->post('efflu2'), 'stand2'=>$this->input->post('stand2'),
      'param3'=>$this->input->post('param3'), 'efflu3'=>$this->input->post('efflu3'), 'stand3'=>$this->input->post('stand3'),
      'param4'=>$this->input->post('param4'), 'efflu4'=>$this->input->post('efflu4'), 'stand4'=>$this->input->post('stand4'),
      'param5'=>$this->input->post('param5'), 'efflu5'=>$this->input->post('efflu5'), 'stand5'=>$this->input->post('stand5'),
      'param6'=>$this->input->post('param6'), 'efflu6'=>$this->input->post('efflu6'), 'stand6'=>$this->input->post('stand6'),
      'param7'=>$this->input->post('param7'), 'efflu7'=>$this->input->post('efflu7'), 'stand7'=>$this->input->post('stand7'),
      'param8'=>$this->input->post('param8'), 'efflu8'=>$this->input->post('efflu8'), 'stand8'=>$this->input->post('stand8'),
      'param9'=>$this->input->post('param9'), 'efflu9'=>$this->input->post('efflu9'), 'stand9'=>$this->input->post('stand9'),
      'param10'=>$this->input->post('param10'), 'efflu10'=>$this->input->post('efflu10'), 'stand10'=>$this->input->post('stand10'),
      'locout1'=>$this->input->post('locout1'), 'outlet1'=>$this->input->post('outlet1'), 'desout1'=>$this->input->post('desout1'),
      'locout2'=>$this->input->post('locout2'), 'outlet2'=>$this->input->post('outlet2'), 'desout2'=>$this->input->post('desout2'),
      'locout3'=>$this->input->post('locout3'), 'outlet3'=>$this->input->post('outlet3'), 'desout3'=>$this->input->post('desout3'),
      'locout4'=>$this->input->post('locout4'), 'outlet4'=>$this->input->post('outlet4'), 'desout4'=>$this->input->post('desout4'),
      'locout5'=>$this->input->post('locout5'), 'outlet5'=>$this->input->post('outlet5'), 'desout5'=>$this->input->post('desout5'),
      'hazid'=>$this->input->post('hazid'), 'haztyp'=>$this->input->post('haztyp')
    );

    $this->db->where('fid',$fid);
    $this->db->update('firmaster3',$data);
  }//update

  function edFinPart($gaid){
    $gasgms=$this->input->post('gasgms');
    $gashrd=$this->input->post('gashrd');
    $gasapb=$this->input->post('gasapb');
    $gasstot=intval($gasgms)+intval($gashrd)+intval($gasapb);
    $data=array(
      'gasgms'=>$gasgms, 'gashrd'=>$gashrd, 'gasapb'=>$gasapb, 'gasstot'=>$gasstot
    );
    $this->db->where('gaid',$gaid);
    $this->db->update('fingaa',$data);
  }//update Particulars

  function edFinSup($gaid){
    $supppf=$this->input->post('supppf');
    $supleg=$this->input->post('supleg');
    $supstot=intval($supppf)+intval($supleg);
    $data=array(
      'supppf'=>$supppf, 'supleg'=>$supleg, 'supstot'=>$supstot
    );
    $this->db->where('gaid',$gaid);
    $this->db->update('fingaa',$data);
  }//update sup

  function edFinAss($gaid){
    $asslab=$this->input->post('asslab');
    $assedu=$this->input->post('assedu');
    $asseia=$this->input->post('asseia');
    $assstot=intval($asslab)+intval($assedu)+intval($asseia);
    $data=array(
      'asslab'=>$asslab, 'assedu'=>$assedu, 'asseia'=>$asseia, 'assstot'=>$assstot
    );
    $this->db->where('gaid',$gaid);
    $this->db->update('fingaa',$data);
  }//update Assessment

  function edFinMgt($gaid){
    $mgtair=$this->input->post('mgtair'); $mgth2o=$this->input->post('mgth2o');
    $mgtswm=$this->input->post('mgtswm'); $mgttox=$this->input->post('mgttox');
    $mgtstot=intval($mgtair)+intval($mgth2o)+intval($mgtswm)+intval($mgttox);

    $data=array(
      'mgtair'=>$mgtair, 'mgth2o'=>$mgth2o, 'mgtswm'=>$mgtswm, 'mgttox'=>$mgttox, 'mgtstot'=>$mgtstot
    );
    $this->db->where('gaid',$gaid);
    $this->db->update('fingaa',$data);
  }//update mgt

  function edFinTot(){
    $gaayr = $this->input->post('gaayr');
    $subpsgasgms=$this->input->post('subpsgasgms'); $subpsgashrd=$this->input->post('subpsgashrd'); $subpsgasapb=$this->input->post('subpsgasapb');
    $subpssupppf=$this->input->post('subpssupppf'); $subpssupleg=$this->input->post('subpssupleg');
    $subenvistot=$this->input->post('subenvistot'); $subsuplabstot=$this->input->post('subsuplabstot');
    $subsupedustot=$this->input->post('subsupedustot'); $subsupeiastot=$this->input->post('subsupeiastot');
    $subairstot=$this->input->post('subairstot'); $subh2ostot=$this->input->post('subh2ostot');
    $subswmstot=$this->input->post('subswmstot'); $subtoxstot=$this->input->post('subtoxstot');

    $allgastot = $subpsgasgms+$subpsgashrd+$subpsgasapb+$subpssupppf+$subpssupleg+$subenvistot+$subsuplabstot+$subsupedustot
      +$subsupeiastot+$subairstot+$subh2ostot+$subswmstot+$subtoxstot;

    $data = array(
      'subpsgasgms'=>$subpsgasgms, 'subpsgashrd'=>$subpsgashrd, 'subpsgasapb'=>$subpsgasapb,
      'subpssupppf'=>$subpssupppf, 'subpssupleg'=>$subpssupleg, 'subenvistot'=>$subenvistot,
      'subsuplabstot'=>$subsuplabstot, 'subsupedustot'=>$subsupedustot, 'subsupeiastot'=>$subsupeiastot,
      'subairstot'=>$subairstot, 'subh2ostot'=>$subh2ostot, 'subswmstot'=>$subswmstot, 'subtoxstot'=>$subtoxstot,

      'subpsop'=>$this->input->post('subpsop'), 'subpsaqmf'=>$this->input->post('subpsaqmf'),
      'subpsnwqmf'=>$this->input->post('subpsnwqmf'), 'subpsappall'=>$this->input->post('subpsappall'), 'allgastot'=>$allgastot

    );

      // Check if the record already exists fingaatot
      $this->db->where('gaayr', $gaayr);
      $query = $this->db->get('fingaatot');

      // If the record does not exist, insert it into the table
      if ($query->num_rows() == 0) {
        $data['gaayr'] = $gaayr; // Add the gaayr value to the data array
        $this->db->insert('fingaatot', $data);
      }
      // If the record exists, update it in the table
      else {
          $this->db->where('gaayr', $gaayr);
          $this->db->update('fingaatot', $data);
      }

      // Check if the record already exists in finsaa
      $this->db->where('sayr', $gaayr);
      $query = $this->db->get('finsaa');

      $data['sayr'] = $gaayr; // Add the gaayr value to the data array

      // If the record does not exist, insert it into the table
      if ($query->num_rows() == 0) {
        $this->db->insert('finsaa', $data);
      }
      // If the record exists, update it in the table
      else {
        $this->db->where('sayr', $gaayr);
        $this->db->update('finsaa', $data);
      }
  } // add or edit totps

  function adSaaps($currentYear){
    $data = array(
      'sagasstot'=>$this->input->post('sagasstot'), 'sabassal'=>$this->input->post('sabassal'), 'sapera'=>$this->input->post('sapera'),
      'sara'=>$this->input->post('sara'), 'sata'=>$this->input->post('sata'), 'sacloth'=>$this->input->post('sacloth'),
      'saallmag'=>$this->input->post('saallmag'), 'salaunmag'=>$this->input->post('salaunmag'), 'saehp'=>$this->input->post('saehp'),
      'samdyrbon'=>$this->input->post('samdyrbon'), 'sayrendbon'=>$this->input->post('sayrendbon'), 'sacshgft'=>$this->input->post('sacshgft'),
      'sapei'=>$this->input->post('sapei'), 'sapagibig'=>$this->input->post('sapagibig'), 'saphl'=>$this->input->post('saphl'),
      'saecipciv'=>$this->input->post('saecipciv'), 'salmpsm'=>$this->input->post('salmpsm'), 'saanum'=>$this->input->post('saanum')
    );

    // Check if the record already exists fingaatot
    $this->db->where('sayr', $currentYear);
    $query = $this->db->get('finsaa');

    // If the record does not exist, insert it into the table
    if ($query->num_rows() == 0) {
      $data['sayr'] = $currentYear; // Add the gaayr value to the data array
      $this->db->insert('finsaa', $data);
    }
    // If the record exists, update it in the table
    else {
        $this->db->where('sayr', $currentYear);
        $this->db->update('finsaa', $data);
    }
  }

  function edFinMo($gaayr){
    $mogasstot=$this->input->post('mogasstot'); $mosupstot=$this->input->post('mosupstot');
    $moassstot=$this->input->post('moassstot'); $momgtstot=$this->input->post('momgtstot');
    // $assstot=intval($asslab)+intval($assedu)+intval($asseia);
    $data=array( 'gaayr'=>$gaayr, 'mogasstot'=>$mogasstot, 'mosupstot'=>$mosupstot, 'moassstot'=>$moassstot, 'momgtstot'=>$momgtstot, 'totsta'=>1 );
    $this->db->where('gaayr',$gaayr);
    $this->db->update('fingaatot',$data);

  } // edit totps

  function edFinCoas($gaayr){
    $data=array(
      'gaayr'=>$gaayr, 'cogasstot'=>$this->input->post('cogasstot'), 'cosupstot'=>$this->input->post('cosupstot'),
      'coassstot'=>$this->input->post('coassstot'), 'comgtstot'=>$this->input->post('comgtstot'),
      'cosubtot'=>$this->input->post('cosubtot'), 'cotot'=>$this->input->post('cotot'), 'cototappall'=>$this->input->post('cototappall'),
      'alltot'=>$this->input->post('alltot'), 'alltotsup'=>$this->input->post('alltotsup'),
      'alltotass'=>$this->input->post('alltotass'), 'alltotmgt'=>$this->input->post('alltotmgt'),
      'allsubtot'=>$this->input->post('allsubtot'), 'alltotsub'=>$this->input->post('alltotsub'), 'alltotapp'=>$this->input->post('alltotapp'),
      'totsta'=>1
    );
      $this->db->where('gaayr',$gaayr);
      $this->db->update('fingaatot',$data);

  } // edit totps

  function edQmf($gaid){
    $totapp=intval($this->input->post('fintot'))+intval($this->input->post('aqmf'))+intval($this->input->post('nwqmf'));
    $data=array(
      'subop'=>$this->input->post('subop'), 'fintot'=>$this->input->post('fintot'),
      'aqmf'=>$this->input->post('aqmf'), 'nwqmf'=>$this->input->post('nwqmf'), 'totapp'=>$totapp
    );
      $this->db->where('gaid',$gaid);
      $this->db->update('fingaa',$data);

  } // edit totps

  function deGaaPart($gaid){
    $this->db->where('gaid',$gaid);
    $this->db->delete('fingaa');
  }//delete gaa Particulars

  public function search_keyword($keyword) {
      $this->db->like('firm', $keyword);
      $query = $this->db->get('firmaster3');
      return $query->result();
  }//pcoexpress

  // public function srchGaa($kword) {
  //     $this->db->like('gaayr', $kword);
  //     $query = $this->db->get('fingaa');
  //     return $query->result();
  // }//fingaa

  public function srchBrobps($kword) {
      $this->db->like('gaayr', $kword);
      $query = $this->db->get('fingaatot');
      return $query->result();
  }//fingabr

  // public function getSaa($kword) {
  //   if($kword==''){ }else{
  //     $this->db->like('sayr', $kword);
  //     $query = $this->db->get('finsaa');
  //     return $query->result();
  //   }
  // }//brobps

  function edGaaPart($gaid){
    $data=array(
      'uacscod'=>$this->input->post('uacscod'), 'part'=>$this->input->post('part')
    );
    $this->db->where('gaid',$gaid);
    $this->db->update('fingaa',$data);
  }//delete gaa Particulars

  function uploadDPlab($fid,$dplabfile){
    $data=array(
      'fid'=>$this->input->post('fid'), 'dpgalfil'=>$dplabfile
    );
    $this->db->insert('updplab',$data);
  }//upload dp


  function uploadLgl($cntlegal,$fid,$uplgl){
    $varOne = $this->input->post('varOne');
    $data=array(
      $varOne=>$uplgl
    );
    $this->db->where('cntlegal',$cntlegal);
    $this->db->update('legal',$data);
  }//upload lgl

  function uploadCpdEx($fid,$filename){
    $varOne = $this->input->post('varOne');
    $data=array(
      'userid'=>$this->input->post('userid'), 'fid'=>$this->input->post('fid'), 'upterm'=>$varOne,
      'upcpdfil'=>$filename, 'updat'=>$this->input->post('updat')
    );
    $this->db->insert('upcpd',$data);
  }//upload cpd

  function uploadCpd($fid,$filename){
    $varOne = $this->input->post('varOne');
    $data=array(
      'userid'=>$this->input->post('userid'), 'fid'=>$this->input->post('fid'), 'upterm'=>$varOne,
      'upcpdfil'=>$filename, 'updat'=>$this->input->post('updat')
    );
    $this->db->insert('upcpd',$data);
  }//upload cpd

  function uploadEmed($fid,$filename){
    $varOne = $this->input->post('varOne');
    $data=array(
      'fid'=>$this->input->post('fid'), 'upterm'=>$varOne,
      'filename'=>$filename, 'updat'=>$this->input->post('updat')
    );
    if($varOne=='phovid'){
      $this->db->insert('upgallery',$data);
    }else{
      $this->db->insert('upemed',$data);
    }
  }//upload emed

  function uploadFVid($fid,$filename){
    $varOne = $this->input->post('varOne');
    $data=array(
      'fid'=>$this->input->post('fid'), 'upterm'=>$varOne,
      'filename'=>$filename, 'updat'=>$this->input->post('updat')
    );
    $this->db->insert('upgallvid',$data);
  }//upload vid

  function uploadLegal($fid,$filename){
    $varOne = $this->input->post('varOne');
    $data=array(
      'fid'=>$this->input->post('fid'), 'cntlegal'=>$this->input->post('cntlegal'), 'upterm'=>$varOne,
      'uplglfil'=>$filename, 'updat'=>$this->input->post('updat')
    );
    $this->db->insert('uplegal',$data);
  }//upload lgl

  function updateParam($fid){
    $data=array(
      'param1'=>$this->input->post('param1'), 'efflu1'=>$this->input->post('efflu1'), 'stand1'=>$this->input->post('stand1'),
      'param2'=>$this->input->post('param2'), 'efflu2'=>$this->input->post('efflu2'), 'stand2'=>$this->input->post('stand2'),
      'param3'=>$this->input->post('param3'), 'efflu3'=>$this->input->post('efflu3'), 'stand3'=>$this->input->post('stand3'),
      'param4'=>$this->input->post('param4'), 'efflu4'=>$this->input->post('efflu4'), 'stand4'=>$this->input->post('stand4'),
      'param5'=>$this->input->post('param5'), 'efflu5'=>$this->input->post('efflu5'), 'stand5'=>$this->input->post('stand5'),
      'param6'=>$this->input->post('param6'), 'efflu6'=>$this->input->post('efflu6'), 'stand6'=>$this->input->post('stand6'),
      'param7'=>$this->input->post('param7'), 'efflu7'=>$this->input->post('efflu7'), 'stand7'=>$this->input->post('stand7'),
      'param8'=>$this->input->post('param8'), 'efflu8'=>$this->input->post('efflu8'), 'stand8'=>$this->input->post('stand8'),
      'param9'=>$this->input->post('param9'), 'efflu9'=>$this->input->post('efflu9'), 'stand9'=>$this->input->post('stand9'),
      'param10'=>$this->input->post('param10'), 'efflu10'=>$this->input->post('efflu10'), 'stand10'=>$this->input->post('stand10')
    );
      $this->db->where('fid',$fid);
      $this->db->update('firmaster3',$data);
  }

  function updateOutlet($fid){
    $data=array(
      'locout1'=>$this->input->post('locout1'), 'outlet1'=>$this->input->post('outlet1'), 'desout1'=>$this->input->post('desout1'),
      'locout2'=>$this->input->post('locout2'), 'outlet2'=>$this->input->post('outlet2'), 'desout2'=>$this->input->post('desout2'),
      'locout3'=>$this->input->post('locout3'), 'outlet3'=>$this->input->post('outlet3'), 'desout3'=>$this->input->post('desout3'),
      'locout4'=>$this->input->post('locout4'), 'outlet4'=>$this->input->post('outlet4'), 'desout4'=>$this->input->post('desout4'),
      'locout5'=>$this->input->post('locout5'), 'outlet5'=>$this->input->post('outlet5'), 'desout5'=>$this->input->post('desout5')
    );
      $this->db->where('fid',$fid);
      $this->db->update('firmaster3',$data);
  }

  function updateWwtf($fid){
    $data=array(
      'wwtf'=>$this->input->post('edwwtf'),
      'wwtftyp'=>$this->input->post('edwwtftyp')
    );
    $this->db->where('fid',$fid);
    $this->db->update('firmaster3',$data);
  }//update

  function updateAdrs($fid){
    $data=array(
      'fprov'=>$this->input->post('fprov'),
      'fmun'=>$this->input->post('fmun'),
      'fbrgy'=>$this->input->post('fbrgy'),
      'fstret'=>$this->input->post('fstret')
    );
    $this->db->where('fid',$fid);
    $this->db->update('firmaster3',$data);
    $this->db->where('fid',$fid);
    $this->db->update('firmaster3',$data);
  }//update

  function reqdesta($rfnum){
    $data=array(
      'trashdat'=>$this->input->post('trashdat'),
      'reqsta'=>$this->input->post('remove')
    );
    $this->db->where('rfnum',$rfnum);
    $this->db->update('recfoi',$data);
  }

  function reqedsta($rfnum){
    $data=array(
      'reqapdat'=>$this->input->post('reqapdat'),
      'reqsta'=>$this->input->post('remove')
    );
    $this->db->where('rfnum',$rfnum);
    $this->db->update('recfoi',$data);
  }

  function edfstat($fid){
    $data=array(
      'fstat'=>$this->input->post('0')
    );
    $this->db->where('fid',$fid);
    $this->db->update('firmaster3',$data);
  }

  // function edcPass(){
  //   $userid=$this->input->post('userid'); $upass=$this->input->post('upass');
  //   $this->db->query("UPDATE user SET `upass` = '$upass' WHERE `userid` = '$userid'");
  //
  //   date_default_timezone_set('Asia/Manila');
  //   $changedat=date('Y-m-d'); $changetim=date('H:i:s');
  //   $cpid=$this->input->post('cpid');
  //   $this->db->query("UPDATE cpass SET `changedat` = '$changedat', `changetim` = '$changetim', `cpstat`=1 WHERE `cpid` = '$cpid'");
  //
  //   //
    //
    // $data=array(
    //   'u.upass'=>$this->input->post('upass'),
    //   'c.changedat'=>$changedat, 'c.changetim'=>$changetim, 'c.cpstat'=>1
    // );
    // $this->db->set($data);
    // $this->db->where('u.userid',$userid);
    // $this->db->where('c.cpid',$cpid);
    // $this->db->update('user as u, cpass as c');

    // $changedat=date('Y-m-d'); $changetim=date('H:i:s');
    // $cpid=$this->input->post('cpid');
    // $data2=array(
    //   'changedat'=>$changedat, 'changetim'=>$changetim, 'cpstat'=>1
    // );
    // $this->db->where('cpid',$cpid);
    // $this->db->update('cpass',$data2);

  // }

  function edQue($id,$uname){
    date_default_timezone_set('Asia/Manila');
    $qaccdat=date('Y-m-d'); $qacctim=date('H:i:s');
    $data=array(
      'qstat'=>2, 'qestaff'=>$uname, 'qaccdat'=>$qaccdat, 'qacctim'=>$qacctim
    );
    $this->db->where('qid',$id);
    $this->db->update('que',$data);
  }

  function edAttndd($id){
    date_default_timezone_set('Asia/Manila');
    $qaccdat=date('Y-m-d'); $qacctim=date('H:i:s');
    $data=array(
      'qstat'=>3, 'qattdat'=>$qaccdat, 'qatttim'=>$qacctim
    );
    $this->db->where('qid',$id);
    $this->db->update('que',$data);
  }

  function edunque($qid){
    $data=array(
      'qstat'=>1, 'qestaff'=>'', 'qaccdat'=>'', 'qacctim'=>''
    );
    $this->db->where('qid',$qid);
    $this->db->update('que',$data);
  }

  function edConv($conid){
    $data=array(
      'idea'=>$this->input->post('idea')
    );
    $this->db->where('conid',$conid);
    $this->db->update('convention',$data);
  }//edit conv

  function edRepConv($conid){
    $data=array(
      'reply'=>$this->input->post('reply'), 'consta'=>2
    );
    $this->db->where('conid',$conid);
    $this->db->update('convention',$data);
  }//edit reply conv

  //req2cpd
  function req2cpd($fid){
    $data=array(
      'userid'=>$this->input->post('userid'), 'uname'=>$this->input->post('uname'), 'fid'=>$this->input->post('fid'), 'firm'=>$this->input->post('firm'),
      'upcpdid'=>$this->input->post('upcpdid'), 'term'=>$this->input->post('term'), 'upcpdfil'=>$this->input->post('upcpdfil'),
      'reason'=>$this->input->post('reason'), 'reqdat'=>$this->input->post('reqdat'), 'reqsta'=>0
    );
    $check=$this->db->insert('recfoi',$data);
    if($check==1){
      return TRUE;
    }else {
      return FALSE;
    }
  }

//check uname duplicate
private $user = 'user';

function get_uname($uname) {

  $this->db->where('uname', $uname);
  $this->db->limit(1);
  $query = $this->db->get($this->user);

if ($query->num_rows() == 1) {
    return TRUE;
  }else{
    return FALSE;
  }
}

  public function cPass($data) {
    $query=$this->db->insert('cpass',$data);
    return $query;
  }

//swm dashboard
  public function planStatus($start_date, $end_date)
    {
        $this->db->select('year10, COUNT(*) as count');
        $this->db->from('swmlgu');
        $this->db->where('lgudatap >=', $start_date);
        $this->db->where('lgudatap <=', $end_date);
        $this->db->where('lgustat', '1');
        $this->db->group_by('year10');
        $query = $this->db->get();
      return $query->result_array();
    }

    public function yearPlanStatus($year)
    {
        $this->db->select('year10, COUNT(*) as count');
        $this->db->from('swmlgu');
        $this->db->where('YEAR(lgudatap)', $year);
        $this->db->where('lgustat', '1');
        $this->db->group_by('year10');
        // $this->db->order_by('year', 'ASC');
        $query = $this->db->get();

      return $query->result_array();
    }

    public function yearPlan()
        {
          $this->db->select('YEAR(lgudatap) AS year');
          $this->db->from('swmlgu');
          $this->db->where('lgustat' , '1');
          $this->db->group_by('year');
          $this->db->order_by('year','DESC');
          $query = $this->db->get();
          return $query->result();
        }

        // total count in 10yr plan status
        public function jsPlanStatus() {
          $aC = $this->db->where('lgustat', '1')->where('year10', 'Approved')->count_all_results('swmlgu');
          $nAC = $this->db->where('lgustat', '1')->where('year10', 'Not Approved')->count_all_results('swmlgu');
          return array('approvedCount' => $aC, 'notApprovedCount' => $nAC);
      }

      // plan summary
      public function planSummary($startDate, $endDate) {

          $this->db->select('fprov, SUM(CASE WHEN year10 = "Approved" THEN 1 ELSE 0 END) AS approved, SUM(CASE WHEN year10 = "Not Approved" THEN 1 ELSE 0 END) AS not_approved');
          $this->db->from('swmlgu');
          $this->db->where('lgudatap >=', $startDate);
          $this->db->where('lgudatap <=', $endDate);
          $this->db->where('lgustat', '1');
          $this->db->group_by('fprov');
          $query = $this->db->get();

        return $query->result();
        }

        // year plan summary
        public function yrPlanSummary($year1)
        {
          if(empty($year1)){
            $this->db->select('fprov, SUM(CASE WHEN year10 = "Approved" THEN 1 ELSE 0 END) AS approved, SUM(CASE WHEN year10 = "Not Approved" THEN 1 ELSE 0 END) AS not_approved');
            $this->db->from('swmlgu');
            $this->db->where('lgustat', '1');
            $this->db->group_by('fprov');
            $query = $this->db->get();
            }else
            {
              $this->db->select('YEAR(lgudatap) as year1, fprov, SUM(CASE WHEN year10 = "Approved" THEN 1 ELSE 0 END) AS approved, SUM(CASE WHEN year10 = "Not Approved" THEN 1 ELSE 0 END) AS not_approved');
              $this->db->from('swmlgu');
              $this->db->where('YEAR(lgudatap)', $year1);
              $this->db->where('lgustat', '1');
              $this->db->group_by('fprov');
              $this->db->order_by('year1', 'ASC');
              $query = $this->db->get();
            }
            return $query->result_array();
        }

        public function planYrDB(){
          $this->db->select('fprov, SUM(CASE WHEN year10 = "Approved" THEN 1 ELSE 0 END) AS approved, SUM(CASE WHEN year10 = "Not Approved" THEN 1 ELSE 0 END) AS not_approved');
          $this->db->from('swmlgu');
          $this->db->where('lgustat', '1');
          $this->db->group_by('fprov');
          $query = $this->db->get();

          return $query->result_array();
        }

        // totalRegistered
        public function totalPlan($firstDate, $lastDate)
        {
          if(empty($firstDate) && empty($lastDate)){
            $this->db->select('fprov, COUNT(*) as count');
            $this->db->from('swmlgu');
            $this->db->where('lgustat', '1');
            $this->db->group_by('fprov');
            $query = $this->db->get();
          }else{
            $this->db->select('fprov, COUNT(*) as count');
            $this->db->from('swmlgu');
            $this->db->where('lgudatap >=', $firstDate);
            $this->db->where('lgudatap <=', $lastDate);
            $this->db->where('lgustat', '1');
            $this->db->group_by('fprov');
            $query = $this->db->get();
          }
          return $query->result_array();
        }

        // yrTotalPlan
        public function yrTotalPlan($year2)
        {
          if(empty($year2)){
            $this->db->select('fprov, COUNT(*) as count');
            $this->db->from('swmlgu');
            $this->db->where('lgustat', '1');
            $this->db->group_by('fprov');
            $query = $this->db->get();
          }else{
            $this->db->select('YEAR(lgudatap) as year2, fprov, COUNT(*) as count');
            $this->db->from('swmlgu');
            $this->db->where('YEAR(lgudatap)', $year2);
            $this->db->where('lgustat', '1');
            $this->db->group_by('fprov');
            $this->db->order_by('year2', 'ASC');
            $query = $this->db->get();
          }
          return $query->result_array();
        }

        // totalplandb
        public function totalYrDB()
        {
          $this->db->select('fprov, COUNT(*) as count');
            $this->db->from('swmlgu');
            $this->db->where('lgustat', '1');
            $this->db->group_by('fprov');
            $query = $this->db->get();
            return $query->result_array();
        }
//swm dashboard

  public function wasBio(){
    $dblive=$this->load->database('dblgu', TRUE);
    $reslgbio=$dblive->query('SELECT bioid,lgusid,lgnam,bioindat,lgu,biorepdat,comfac,disslf,rca,other,spcfy,biotot,biorem,biosta FROM wasbio WHERE stat=1 ORDER BY biorepdat DESC, biosta ASC ');
    return $reslgbio->result();
  }//get Biodegradable record

  public function wasRec(){
    $dblive=$this->load->database('dblgu', TRUE);
    $reslgid=$dblive->query('SELECT wasid,lgusid,lgnam,wasindat,lgu,brgyname,wascoldat,wtyp,wstyp,wcat,comfac,disslf,rca,other,spcfy,wastot,wasrem,wasta FROM waste WHERE stat=1 ORDER BY wasindat DESC ');
    return $reslgid->result();
  }//get Recyclable record

  function adLgu(){
      $data = array(
              'lguid'=>$this->input->post('lguid'), 'fprov'=>$this->input->post('fprov'), 'fmun'=>$this->input->post('fmun'),
              'scope'=>$this->input->post('scope'), 'year10'=>$this->input->post('year10'), 'resno'=>$this->input->post('resno'),
              'lgudatap'=>$this->input->post('lgudatap'), 'lgurem'=>$this->input->post('lgurem'), 'lgustat'=>1
          );
      $result=$this->db->insert('swmlgu',$data);
      return $result;
  }

  function edLgu($lguid){
      $data = array(
              'scope'=>$this->input->post('scope'), 'year10'=>$this->input->post('year10'), 'resno'=>$this->input->post('resno'),
              'lgudatap'=>$this->input->post('lgudatap'), 'lgurem'=>$this->input->post('lgurem')
          );
      $this->db->where('lguid',$lguid);
      $this->db->update('swmlgu',$data);
  } // edit lgu

  function deLgu($lguid){
      $data = array(
              'lgustat'=>0
          );
      $this->db->where('lguid',$lguid);
      $this->db->update('swmlgu',$data);
  } // del lgu

  function delGhg($ghgid){
      $data = array( 'ghgsta'=>0 );
      $this->db->where('ghgid',$ghgid);
      $this->db->update('ghgfuel',$data);
  } // del fuel

  function delEle($elecid){
      $data = array( 'elesta'=>0 );
      $this->db->where('elecid',$elecid);
      $this->db->update('ghgelec',$data);
  } // del electricity

  function delAir($airid){
      $data = array( 'airsta'=>0 );
      $this->db->where('airid',$airid);
      $this->db->update('ghgair',$data);
  } // del air

  function embvrfy($wasid){
    if($this->input->post('varOne')=='swmaprvchief'){
      $wasta=$this->input->post('swmchfval');
    }
    if($this->input->post('varOne')=='swmevalapprv'){
      $wasta=2;
    }elseif($this->input->post('varOne')=='pndngvrfy'||$this->input->post('varOne')=='swmrtrnrply'){
      $wasta=0;
    }
    // elseif($this->input->post('varOne')=='drctaprv'){
    //   $wasta=3;
    // }
    $messy=$this->input->post('messy');
    $messz=$this->input->post('messz'); $messz=$_SESSION['fname'].': '.$messz;
    $data=array(
      // 'wasta'=>$this->input->post('varOne'),
      'wasta'=>$wasta,
      'wasrem'=>$messy.' =>'.$messz
    );
    $this->db->where('wasid',$wasid);
    $this->db->update('4blive.waste',$data);
  }//swmlgrep

  function getswmlgu(){
     $act=$this->db->query('SELECT * FROM swmlgu WHERE lgustat=1 ORDER BY lgucnt DESC');
     return $act->result();
  }//get lgu tab

  function uploadLgu($lguid,$filename){
    $varOne = $this->input->post('varOne');
    $data=array(
      'userid'=>$this->input->post('userid'), 'lguid'=>$this->input->post('lguid'), 'upterm'=>$varOne,
      'uplgufil'=>$filename, 'updat'=>$this->input->post('updat')
    );
    $this->db->insert('uplgu',$data);
  }//upload lgu

  function getUpLgu(){
    $query=$this->db->query('SELECT * FROM uplgu ');
    return $query->result();
  }// lgu get attachment

  function getlguid(){
     $act=$this->db->query('SELECT lguid FROM swmlgu ');
     return $act->result();
  }//get first id

  function actEmail(){
     $act=$this->db->query('SELECT lgusid,fnam,mnam,lnam,lgu,regdat,idntfy,lilo,lilodat FROM 4blive.lguser WHERE stat=1 ORDER BY 1 desc ');
     return $act->result();
  }//get acitver lguser

  function ActiveLgUser(){
     $act=$this->db->query('SELECT lgusid,fnam,mnam,lnam,lgu,regdat,idntfy,lilo,lilodat FROM 4blive.lguser WHERE stat=2 ORDER BY 1 desc ');
     return $act->result();
  }//get acitver lguser

  function InActiveLgUser(){
     $act=$this->db->query('SELECT lgusid,fnam,mnam,lnam,lgu,regdat,idntfy,lilo,lilodat FROM 4blive.lguser WHERE stat=3  ORDER BY 1 desc ');
     return $act->result();
  }//get acitver lguser

  //lgu
  function lguRply($lgisid){
    //phil actual date
    date_default_timezone_set('Asia/Manila'); // CDT
    $sendat = date('Y-m-d H:m:s');

    $data=array(
      'lgusid'=>$_SESSION['userid'], 'name'=>$_SESSION['uname'], 'email'=>$_SESSION['uemail'],
      'sub'=>$this->input->post('sub'), 'mess'=>$this->input->post('mess'), 'sendat'=>$sendat, 'source'=>$lgisid,
      'stat'=>0
    );
    $this->db->insert('4blive.contact',$data);

    $data2=array( 'stat'=>1 );
    $this->db->where('lgisid',$lgisid);
    $this->db->update('4blive.contact',$data2);

  }//activate lguser

  function remuplgu($lguid,$uplguid){
    // actdat for activity
    date_default_timezone_set('Asia/Manila'); // CDT
    $actdat = date('YMd H:i:s');
    $varOne = $this->input->post('varOne');

    $data=array(
      'lguid'=>$this->input->post('lguid'),
      'upterm'=>$this->input->post('upterm'),
      // 'upcpdid'=>$this->input->post('upcpdid'),
      'uplgufil'=>$this->input->post($varOne)
    );
    unlink('./upglobal/uplgu/'.$varOne);

    $this->db->where('uplguid',$uplguid);
    $this->db->delete('uplgu');
  }//remove uplgu

  function LgForActivate($lgusid){
    $data=array( 'stat'=>0 );
    $this->db->where('lgusid',$lgusid);
    $this->db->update('4blive.lguser',$data);
  }//activate lguser

  function LgDeActUser($lgusid){
    $data=array( 'stat'=>0 );
    $this->db->where('lgusid',$lgusid);
    $this->db->update('4blive.lguser',$data);
  }//deactivate lguser

  //ajax swm
  function lgu_list(){ $theman=$this->db->get('swmlgux'); return $theman->result(); }

  function saveLGU(){ $data = array( 'lguid'  => $this->input->post('lguid'), 'lgunam'  => $this->input->post('lgunam'), ); $result=$this->db->insert('swmlgux',$data); return $result; }// adlgu

  function lguUpdate(){ $lguid=$this->input->post('lguid'); $lgunam=$this->input->post('lgunam');
    $this->db->set('lgunam', $lgunam); $this->db->where('lguid', $lguid); $result=$this->db->update('swmlgu'); return $result; }
  //ajax swm
  //swm ends here

    public function exportList() {
        $this->db->select(array('userid', 'puser', 'pact', 'mondat', 'iisno', 'pfirm'));
        $this->db->from('plan');
        $query = $this->db->get();
        return $query->result();
    }//generate xl

    public function excelup(){
      $query=$this->db->get('fingaa');
      return $query->result();
    }





    public function uploadImage($imageData, $imageType) {
      $data = array(
          'profPic' => $imageData,
          'image_type' => $imageType
      );
      $this->db->insert('user', $data);
  }
// didnt display in profPic
  public function getImages() {
      $query = $this->db->get('user');
      return $query->result();
  }

  public function getImageData($id) {
      $query = $this->db->get_where('user', array('userid' => $id));
      return $query->row();
  }
  public function getUserInfo($id) {
    $this->db->select('fname, lname');
    $query = $this->db->get_where('user', array('userid' => $id)); // Replace 'users' and 'image_id' with actual names
    return $query->row();
}
  public function updateImage($id, $imageData, $imageType) {
    $data = array(
        'profPic' => $imageData,
        'image_type' => $imageType
    );
    $this->db->where('userid', $id);
    $this->db->update('user', $data);
}

public function getProfileImage($user_id) {
  $query = $this->db->select('profPic')
                    ->where('userid', $user_id)
                    ->get('user');

  if ($query->num_rows() > 0) {
      return $query->row();
  }
  return null;
}
public function lguuserreq(){
  $blivedb=$this->load->database('dblgu', TRUE);

  $blivedb->where('stat', 0);
  $query = $blivedb->get('userreq');

  if ($query->num_rows() > 0) {
      return $query->result();  // Returns an array of records
  } else {
      return array();  // Return an empty array if no records match
  }
}
}//main
