**dropdown cascading

<script>
var subjectObject = {
  "Front-end": { ["HTML"]: [""], "CSS": [""] },
  "Back-end": { "PHP": [""], "SQL": [""] }
}
window.onload = function() {
  var subjectSel = document.getElementById("subject");
  var topicSel = document.getElementById("topic");
  for (var x in subjectObject) {
    subjectSel.options[subjectSel.options.length] = new Option(x, x);
  }
  subjectSel.onchange = function() {
    topicSel.length = 1;
    //display correct values
    for (var y in subjectObject[this.value]) {
      topicSel.options[topicSel.options.length] = new Option(y, y);
    }
  }
}
</script>
</head>
<body>

<h1>Cascading Dropdown Example</h1>

<form name="form1" id="form1" action="/action_page.php">
Subjects: <select name="subject" id="subject">
    <option value="" selected="selected">Select subject</option>
  </select>
  <br><br>
Topics: <select name="topic" id="topic">
    <option value="" selected="selected">Please select subject first</option>
  </select>
  <br><br>
  <br><br>
  <input type="submit" value="Submit">
</form>

************************ dropdown display and concat value on textbox ********************

<div class="col-md-4">
  <label for="office" class="form-label">Office</label>
  <select id="office" class="form-select" name="" required>
    <option value="" selected>Click here</option>
    <option value="JMSalino,ORD">ORD</option><option value="EPQuindoza,FAD">FAD</option>
    <option value="PMEstorque,EMED">EMED</option><option value="NVDorado,CPD">CPD</option>
    <option value="RZCapistrano,Mar">Mar</option><option value="AMCoden,OcMin">OcMin</option>
    <option value="EULabre,OrMin">OrMin</option><option value="ESVelasco,Pal">Pal</option>
    <option value="IAAnzaldo,Rom">Rom</option>
  </select>
</div>
<div class="col-md-4" style="">
  <label for="head" class="form-label">Head</label>
  <input class="form-control" type="text" id="valoff" name="head" value="" readonly=""/>
</div>
<div class="col-md-4" style="" hidden>
  <label for="head" class="form-label">Office</label>
  <input class="form-control" type="text" id="valoff2" name="office" value="" readonly=""/>
</div>

<!-- office and head -->
<script type="text/javascript">
  $('#office').change(function(){
    //simple before
    var qty1 = $('#office').val(); var separated = qty1.split(","); var qty1=separated[0];
    //simple after
    var qty2 = $('#office').val(); var separated = qty2.split(","); var qty2=separated[1];

    $("#valoff").val(qty1); $("#valoff2").val(qty2); });
</script>
<!-- office and head -->

********************** multiple file upload *********************
<?php
//multiple upload
public function upsample($fid){
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
        $config['upload_path'] = './upsample/';
        $config['allowed_types'] = '*';
        $config['max_size'] = '1000000'; // max_size in kb
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
?>

<!-- Display Message -->
<b><?php if(isset($filenames)) echo "Successfully uploaded ".count($filenames)." files"; ?></b>

<!-- Form -->
<form method="post" action="<?php echo site_url('Auth/upsample') ?>/<?php echo $row->fid; ?>" enctype="multipart/form-data">
  <input type='file' name='files[]' multiple > <br/><br/>
  <input type='submit' value='Upload' name='upload' />
</form>

*****************generic upload*****************
<?php//generic dynamic upload
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
}
?>
************uplgl************
//lgl upload
<?php
public function uplgl($cntlegal,$fid){
  $config['upload_path']='./uplgl/';
  $config['allowed_types']='pdf';
  $config['max_size']='2000000';
  $config['max_width']='*';
  $config['max_height']='*';
  $config['remove_spaces'] = FALSE;

  $this->load->library('upload',$config);
  $this->upload->initialize($config);

  //get the file extension
  $uplgl = substr($_FILES['userfile']['name'], -4);

  if($uplgl!='.pdf'){
    // echo '<script>alert("Only pdf is allowed.")</script>';
    redirect("Auth/firmprof/".$fid);
  }else{
    if(!$this->upload->do_upload('userfile')) {
      $errors=array('error' => $this->upload->display_errors());
      $post_image='noimage.jpg';
    }else{
      $data=array('upload_data'=>$this->upload->data());
      $uplgl=$_FILES['userfile']['name'];
    }//if

    $this->Auth_model->uploadLgl($cntlegal,$fid,$uplgl);
    redirect("Auth/firmprof/".$fid);
  }//if dpfile=.pdf
}//main func
?>

***********href*************
