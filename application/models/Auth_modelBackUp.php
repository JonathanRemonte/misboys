<!-- 4bhive all rights reserved for EMB MIMAROPA.
  code and name coined by TheMan
  Proposed by RD Joe, Csez and Yuri on 27Jan2022 @1300 hrs -->

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

    $data=array(
      'fid'=>$this->input->post('fid'), 'firm'=>$this->input->post('firm'), 'fown'=>$this->input->post('fown'),
      'fcat'=>$this->input->post('fcat'), 'subcat'=>$this->input->post('subcat'), 'specat'=>$this->input->post('specat'), 'subspec'=>$this->input->post('subspec'),
      'firimg'=>$this->input->post('firimg'), 'fstat'=>$this->input->post('fstat')
    );
    $this->db->insert('firmaster',$data);
    $data=array(
      'varbl'=>$this->input->post('firm'), 'acttyp'=>'added', 'uname'=>$_SESSION['uname'], 'actdat'=>$actdat
    );
    $this->db->insert('actvty',$data);
  }

  function MarFirmCount(){
    $act=$this->db->query('SELECT COUNT(fid) as marfirm FROM firmaster WHERE fid!=0 and fstat!=0 and fprov="Marinduque" ');
    return $act->result();
  }//marfirm

  function OccFirmCount(){
    $act=$this->db->query('SELECT COUNT(fid) as occfirm FROM firmaster WHERE fid!=0 and fstat!=0 and fprov="Occidental Mindoro" ');
    return $act->result();
  }//occfirm

  function OrFirmCount(){
    $act=$this->db->query('SELECT COUNT(fid) as orfirm FROM firmaster WHERE fid!=0 and fstat!=0 and fprov="Oriental Mindoro" ');
    return $act->result();
  }//orfirm

  function RomFirmCount(){
    $act=$this->db->query('SELECT COUNT(fid) as romfirm FROM firmaster WHERE fid!=0 and fstat!=0 and fprov="Romblon" ');
    return $act->result();
  }//romfirm

  function PalFirmCount(){
    $act=$this->db->query('SELECT COUNT(fid) as palfirm FROM firmaster WHERE fid!=0 and fstat!=0 and fprov="Palawan" ');
    return $act->result();
  }//romfirm

  function getAct(){
    $act=$this->db->query('SELECT * FROM actvty ORDER BY 1 DESC LIMIT 8 ');
    return $act->result();
  }//

  function getlastfid(){
    $lastfid=$this->db->query('SELECT fid FROM firmaster WHERE fid!=0 ORDER BY 1 DESC LIMIT 1 ');
    return $lastfid->result();
  }//

  //Active firms
  function getAllData(){
    $query=$this->db->query('SELECT fid,firm,firimg,flat,flon,fcat,subcat,specat,subspec,fprov,fmun,fbrgy,fstret FROM firmaster WHERE fstat=1 && fid!=0 ORDER BY 1 desc');
    //$query=$this->db->query('SELECT * FROM firmaster WHERE fstat=1 && fid!=0 ORDER BY 1 desc');
    return $query->result();
  }//getAllData

  function getProgress(){
    $query=$this->db->query('SELECT * FROM `progress` WHERE 1');
    return $query->result();
  }//getProgress

  function getIssCon(){
    $query=$this->db->query('SELECT * FROM `isscon` WHERE issta!=0 && `issid`!=0');
    return $query->result();
  }//getIssCon

  function getData($fid){
    // $query=$this->db->query('SELECT * FROM firmaster as fm LEFT JOIN parameter as par ON fm.fid=par.fid WHERE fm.`fid`='.$fid);
    $query=$this->db->query('SELECT * FROM firmaster WHERE `fid`='.$fid);
    return $query->row();
  }

  function create_post($fid,$firimg){
    $data=array(
      'firimg'=>$firimg
    );
    $this->db->where('fid',$fid);
    $this->db->update('firmaster',$data);
  }

  //addLGL
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
  }

  //addPCO
  function addPCO($fid){
    $data=array(
      'fid'=>$this->input->post('fid'), 'coa'=>$this->input->post('coa'), 'cat'=>$this->input->post('cat'), 'stat'=>$this->input->post('stat'),
      'pcoisdat'=>$this->input->post('pcoisdat'), 'pcoexdat'=>$this->input->post('pcoexdat'),
      'pcof'=>$this->input->post('pcof'), 'pcom'=>$this->input->post('pcom'), 'pcol'=>$this->input->post('pcol'),
      'pconum'=>$this->input->post('pconum'), 'pcoeml'=>$this->input->post('pcoeml'), 'trnngctr'=>$this->input->post('trnngctr'),
      'trnstdat'=>$this->input->post('trnstdat'), 'trnfidat'=>$this->input->post('trnfidat'), 'pcosta'=>1
    );
    $this->db->insert('pco',$data);
  }//addPCO

  //addLGL
  function adIssCon(){
    $data=array(
      'issid'=>$this->input->post('issid'), 'office'=>$this->input->post('office'),
      'datiss'=>$this->input->post('datiss'), 'isstyp'=>$this->input->post('isstyp'), 'issue'=>$this->input->post('issue'), 'back'=>$this->input->post('back'),
      'recom'=>$this->input->post('recom'), 'act'=>$this->input->post('act'), 'issby'=>$this->input->post('issby'), 'issta'=>$this->input->post('issta')
    );
    $this->db->insert('isscon',$data);
  }

  //Inactive user
  function getUser0(){
    $query=$this->db->query('SELECT * FROM user WHERE `ustat`=0 and `urights`=0 ORDER BY 1 desc');
    return $query->result();
  }//Inactive user

  //Inactive firms
  function getInactFirm(){
    $query=$this->db->query('SELECT * FROM firmaster WHERE `fstat`=0 and `fid`!=0 ORDER BY 1 desc');
    return $query->result();
  }//Inactive firms

  //Inactive legal
  function getInactlgl(){
    $query=$this->db->query('SELECT * FROM legal WHERE `lglsta`=0 and `cntlegal`!=0 ORDER BY 1 desc');
    return $query->result();
  }//Inactive legal

  //Inactive user
  function getUserStat(){
    $query=$this->db->query('SELECT userid,uname,lilo,lilodat FROM user ORDER BY 1 desc');
    return $query->result();
  }//Inactive user

  //Inactive user
  function getPcoDeact(){
    $query=$this->db->query('SELECT pcocnt,coa,pcof,pcom,pcol FROM pco WHERE `fid`!=0 && `pcosta`=0 ORDER BY 1 desc');
    return $query->result();
  }//Inactive user

  function getOneLGL($fid){
    $query=$this->db->query('SELECT * FROM legal WHERE `fid`='.$fid.' && `lglsta`=1 ORDER BY 1 desc');
    return $query->result();
  }//getAllData

  function getAllLGL($fid){
    $query=$this->db->query('SELECT cntlegal FROM legal');
    return $query->result();
  }//getAllData
  //LGL

  function getUplgl($fid){
    $query=$this->db->query('SELECT * FROM uplegal WHERE `fid`='.$fid.' ');
    return $query->result();
  }//getAllData
  // LGL

  function getUpcpd($fid){
    $query=$this->db->query('SELECT * FROM upcpd WHERE `fid`='.$fid.' ');
    return $query->result();
  }//getAllData
  // CPD

  function getUpemed($fid){
    $query=$this->db->query('SELECT * FROM upemed WHERE `fid`='.$fid.' ');
    return $query->result();
  }//getAllData
  // EMED

function getPco($fid){
  $query=$this->db->query('SELECT * FROM pco WHERE `fid`='.$fid.' AND pcosta=1 ');
  return $query->result();
}//
// pco

function getUpProFlo($fid){
  $query=$this->db->query('SELECT * FROM upemed WHERE `fid`='.$fid.' ');
  return $query->result();
}//getAllData
// proflo

  function getUpdp($fid){
    $query=$this->db->query('SELECT * FROM updplab WHERE `fid`='.$fid.' ORDER BY 1 desc ');
    return $query->result();
  }//getAllData

  function updateData($fid){
    $data=array(
      'firm'=>$this->input->post('firm')
    );
    $this->db->where('fid',$fid);
    $this->db->update('firmaster',$data);
  }//update

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
      'issue'=>$this->input->post('issue'),
      'back'=>$this->input->post('back'),
      'recom'=>$this->input->post('recom'),
      'issby'=>$this->input->post('issby')
    );
    $this->db->where('issid',$issid);
    $this->db->update('isscon',$data);
  }//updateisscon

  //useAct
  function useAct($userid){
    $data=array(
      'urights'=>$this->input->post('urights'),
      'ustat'=>$this->input->post('ustat')
    );
    $this->db->where('userid',$userid);
    $this->db->update('user',$data);
  }//useAct

  //firmAct
  function firmAct($fid){
    $data=array(
      'fstat'=>$this->input->post('fstat')
    );
    $this->db->where('fid',$fid);
    $this->db->update('firmaster',$data);
  }//firmAct

  //lglAct
  function lglAct($cntlegal){
    $data=array(
      'lglsta'=>$this->input->post('lglsta')
    );
    $this->db->where('cntlegal',$cntlegal);
    $this->db->update('legal',$data);
  }//lglAct

  //pco Act
  function pcoAct($pcocnt){
    $data=array(
      'pcosta'=>$this->input->post('pcosta')
    );
    $this->db->where('pcocnt',$pcocnt);
    $this->db->update('pco',$data);
  }//lglAct

  function updateOne($fid){
    // actdat for activity
    date_default_timezone_set('Asia/Manila'); // CDT
    $actdat = date('YMd H:i:s');

    $varOne = $this->input->post('varOne');
    $data=array(
      $varOne=>$this->input->post($varOne)
    );
    $this->db->where('fid',$fid);
    $this->db->update('firmaster',$data);

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
      'upemedfil'=>$this->input->post($varOne)
    );
    unlink('./upglobal/upemed/'.$varOne);

    $this->db->where('upemeid',$upemeid);
    $this->db->delete('upemed');
  }//update

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
    $this->db->update('firmaster',$data);

    $data=array(
      'uname'=>$_SESSION['uname'], 'acttyp'=>'changed', 'varbl'=>$varOne, 'firm0'=>$this->input->post('firm'),
      'former'=>$this->input->post('former'), 'new'=>$this->input->post($varOne), 'actdat'=>$actdat
    );
    $this->db->insert('actvty', $data);

  }//update

  //update lgl
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
  }//update

  //deact lgl
  function deacLGL($cntlegal,$fid){
    $data=array( 'lglsta'=>0 );
    $duowhere = array('fid' => $fid,'cntlegal' => $cntlegal);
    $this->db->where($duowhere);
    $this->db->update('legal',$data);
  }//del lgl

  //deact pco
  function deactPco($pcocnt){
    $data=array('pcosta'=>0);
    $this->db->where('pcocnt',$pcocnt);
    $this->db->update('pco',$data);
  }//del pco

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
    $this->db->update('firmaster',$data);

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

  //edit PCO
  function updatePco($pcocnt){
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
  }

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
    $this->db->update('firmaster',$data);
  }//update

  //upload dp
  function uploadDPlab($fid,$dplabfile){
    $data=array(
      'fid'=>$this->input->post('fid'), 'dplabfile'=>$dplabfile
    );
    $this->db->insert('updplab',$data);
  }
  //upload dp

  //lgl upload
  function uploadLgl($cntlegal,$fid,$uplgl){
    $varOne = $this->input->post('varOne');
    $data=array(
      $varOne=>$uplgl
    );
    $this->db->where('cntlegal',$cntlegal);
    $this->db->update('legal',$data);
  }
  //upload lgl

  //cpd upload
  function uploadCpd($fid,$filename){
    $varOne = $this->input->post('varOne');
    $data=array(
      'fid'=>$this->input->post('fid'), 'upterm'=>$varOne,
      'upcpdfil'=>$filename, 'updat'=>$this->input->post('updat')
    );
    $this->db->insert('upcpd',$data);
  }
  //upload cpd

  //emed upload
  function uploadEmed($fid,$filename){
    $varOne = $this->input->post('varOne');
    $data=array(
      'fid'=>$this->input->post('fid'), 'upterm'=>$varOne,
      'upemedfil'=>$filename, 'updat'=>$this->input->post('updat')
    );
    $this->db->insert('upemed',$data);
  }
  //upload emed

  //lgl upload
  function uploadLegal($fid,$filename){
    $varOne = $this->input->post('varOne');
    $data=array(
      'fid'=>$this->input->post('fid'), 'cntlegal'=>$this->input->post('cntlegal'), 'upterm'=>$varOne,
      'uplglfil'=>$filename, 'updat'=>$this->input->post('updat')
    );
    $this->db->insert('uplegal',$data);
  }
  //upload lgl

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
      $this->db->update('firmaster',$data);
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
      $this->db->update('firmaster',$data);
  }

  function updateWwtf($fid){
    $data=array(
      'wwtf'=>$this->input->post('edwwtf'),
      'wwtftyp'=>$this->input->post('edwwtftyp')
    );
    $this->db->where('fid',$fid);
    $this->db->update('firmaster',$data);
  }//update

  function updateAdrs($fid){
    $data=array(
      'fprov'=>$this->input->post('fprov'),
      'fmun'=>$this->input->post('fmun'),
      'fbrgy'=>$this->input->post('fbrgy'),
      'fstret'=>$this->input->post('fstret')
    );
    $this->db->where('fid',$fid);
    $this->db->update('firmaster',$data);
  }//update

  function edfstat($fid){
    $data=array(
      'fstat'=>$this->input->post('0')
    );
    $this->db->where('fid',$fid);
    $this->db->update('firmaster',$data);
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

  // function deleteData($fid){
  //   $this->db->where('fid',$fid);
  //   $this->db->delete('firmaster');
  // }

}//main
