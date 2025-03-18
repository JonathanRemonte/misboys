<?php
class Gsu_model extends CI_Model 
{
    public function get_ris()
    {
        // $query = $this->db->get('ris');

        $query = $this->db->order_by('date_request', 'desc')->get('ris');
        return $query->result();
        
    }
    public function edit_ris($id)
    {
        $data = [
            // 'd_request' => date( 'Y-m-d', strtotime( $this->input->post('date_request') ) ),
            'employee_name' => $this->input->post('employee_name'),
            'item_name' => $this->input->post('item_name'),
            'quantity' => $this->input->post('quantity'),
            'price' => $this->input->post('price'),
            'date_request' => $this->input->post('date_request'),
            'date_received' => $this->input->post('date_received')
        ];
        $this->db->where('id' , $id);
        $this->db->update('ris', $data);
    }
    public function request($req)
    {
         $this->db->insert('requisition', $req);
         return true;
    }
    public function instock($scarddata)
    {

        $this->db->insert('stocks', $scarddata);
         return true;
    }
    public function getstock()
    {
        $qstock = $this->db->get('stocks');
        return $qstock->result();
    }
    public function idstock($id)
    {
        $query = $this->db->get_where('stocks', ['id' => $id]);
        return $query->row();
    }
    public function joinstock()
    {
        $this->db->select('*');
        $this->db->from('stocks');
        $this->db->join('ris', 'stocks.itemname = ris.item_name');
        $squery = $this->db->get();
        return $squery->result();
    }
    public function excelup()
    {
        $query = $this->db->get('ris');
        return $query->result();
    }
    public function getreq()
    {
        $query = $this->db->get('requisition');
        return $query->result();
    }
    public function db_ris($ris_data)
    {
         $this->db->insert('ris', $ris_data);
         return true;
    }
    public function delrequest($id)
    {   
        $this->db->where("id", $id);
        $this->db->delete("requisition");
        return true;
    }

    
// public function updateProfilePicture($userID, $decodedImage){
//     $data = array(
//       'profPic' => serialize($decodedImage)
//     );
//     $this->db->where('userid', $userID);
//     $this->db->update('user', $data);
  
//     return ($this->db->affected_rows() > 0);
//   }
  
//   public function getProfilePicture($id)
//   {
//       $this->db->select('profPic');
//       $this->db->where('userid', $id);
//       $query = $this->db->get('user');
  
//       if ($query->num_rows() > 0) {
//           $row = $query->row();
//           return $row->profPic; 
//       }
  
//       return null;
//   }
  
  public function getTotalRequisitions()
  {
      return $this->db->count_all('gsuare');
  }

//   public function getRequisitions()
//   {
//       $this->db->select('*');
//       $this->db->from('gsuare');
//       $this->db->order_by('id','asc');
//       return $this->db->get()->result();
//   }

public function getRequisitions()
{
    $this->db->select('*');
    $this->db->from('gsuare');
    $this->db->order_by('date_acquired', 'desc');
    return $this->db->get()->result();
}

public function getSeviceable(){
    $this->db->select('*');
    $this->db->from('gsuare');
    $this->db->where('status', 'Serviceable');
    $this->db->order_by('id', 'desc');
    return $this->db->get()->result();
}

public function getUnseviceable(){
    $this->db->select('*');
    $this->db->from('gsuare');
    $this->db->where('status', 'Unserviceable');
    $this->db->order_by('id', 'desc');
    return $this->db->get()->result();
}

public function getarefile($id){
    $this->db->select('are_name');
    $this->db->from('gsuare');
    $this->db->where('id', $id); 
    $query = $this->db->get();

    if ($query->num_rows() > 0) {
        $row = $query->row();
        return $row->are_name;
    } else {
        return null; 
    }
}

  public function insertMR($data){
    foreach ($data as $row) {
        $this->db->insert('gsuare', $row);
    }
    if($this->db->affected_rows()>0){
        return 1;
    }
    else{
        return 0;
    }
  }
  public function countMR($status) {
    $this->db->where('status', $status);
    return $this->db->count_all_results('gsuare');
}
public function insertData($data)
{
    foreach ($data as $row) {
        $insert_row = array(
            'qty' => isset($row['qty']) ? $row['qty'] : '',
            'unit' => isset($row['unit']) ? $row['unit'] : '',
            'property' => isset($row['property']) ? $row['property'] : '',
            'property_num' => isset($row['property_num']) ? $row['property_num'] : '',
            'date_acquired' => isset($row['date_acquired']) ? $row['date_acquired'] : '',
            'serial' => isset($row['serial']) ? $row['serial'] : '',
            'are_to' => isset($row['are_to']) ? $row['are_to'] : '',
            'locator' => isset($row['locator']) ? $row['locator'] : '',
            'unit_value' => isset($row['unit_value']) ? floatval(str_replace(',', '', $row['unit_value'])) : '',
            // 'total' => isset($row['total']) ? floatval(str_replace(',', '', $row['total'])) : '',
            'status' => isset($row['status']) ? $row['status'] : '',
            'type' => isset($row['type']) ? $row['type'] : ''
        );

        // Insert the data into the database
        $this->db->insert('gsuare', $insert_row);
    }

    return true;
}
public function insert_equip($data){

    $this->db->insert('gsuare', $data);
    return true;
}
    // public function getFileDataById($type, $id) {
    //     $fileField = ($type === 'are') ? 'are_file' : 'ptr_file';
    //     $this->db->select($fileField . ' AS file_blob, ' . $fileField . '_name AS ' . $type . '_file_name');
    //     $this->db->where('id', $id);
    //     $query = $this->db->get('gsuare');
    
    //     if ($query->num_rows() == 1) {
    //         return $query->row();
    //     } else {
    //         return null;
    //     }
    // }
    
    
public function getEquipDataById($id) {
    $this->db->where('id', $id);
    $query = $this->db->get('gsuare');
    if ($query->num_rows() == 1) {
        return $query->row_array();
    } else {
        return array();
    }
}

public function getAREFileNameById($id) {
    $this->db->select('are_name');
    $this->db->where('id', $id);
    $query = $this->db->get('gsuare'); 

    if ($query->num_rows() > 0) {
        $row = $query->row();
        return $row->are_name;
    } else {
        return null; // Return null if no ARE file found
    }
}

public function getPTRFileNameById($id) {
    $this->db->select('ptr_name');
    $this->db->where('id', $id);
    $query = $this->db->get('gsuare'); 

    if ($query->num_rows() > 0) {
        $row = $query->row();
        return $row->ptr_name;
    } else {
        return null; 
    }
}

    
public function getPerma(){
        $this->db->where('empstat', 'permanent');
        $this->db->where_not_in('userid', 1);
        $this->db->order_by('lname', 'ASC');
        $query = $this->db->get('user');

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

public function getEmployee(){
        $this->db->where('ustat', '1');
        $this->db->where_not_in('userid', 1);
        $this->db->order_by('lname', 'ASC');
        $query = $this->db->get('user');

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

public function update_are($update_data, $id){
    $this->db->where('id', $id);
    $this->db->update('gsuare', $update_data);
    return $this->db->affected_rows() > 0;
}
    
public function getData($userData){
    $this->db->where('are_userid', $userData);
    $this->db->or_where('used_userid', $userData);
    $this->db->order_by('property', 'DESC');
    $query = $this->db->get('gsuare');
    if ($query->num_rows() > 0) {
        return $query->result();
    } else {
        return array();
    }
}
public function getuServiceable($userData){
        $this->db->select('*');
        $this->db->where('status', 'Serviceable');
        $this->db->where('are_userid', $userData);
        $this->db->or_where('used_userid', $userData);
        $this->db->order_by('property', 'DESC');
        $query = $this->db->get('gsuare');

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }
public function getuUnserviceableData($userData){
        $this->db->where('are_userid', $userData);
        $this->db->where('status', 'Unserviceable');
        $this->db->or_where('used_userid', $userData);
        $this->db->order_by('property', 'DESC');
        $query = $this->db->get('gsuare');

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
}
public function ucountMR($status, $userData) {
        $this->db->group_start();
        $this->db->where('are_userid', $userData);
        $this->db->or_where('used_userid', $userData);
        $this->db->group_end();
    
        $this->db->where('status', $status);
        return $this->db->count_all_results('gsuare');
}
public function areExport($type, $class, $dateFrom, $dateTo)
{
    $this->db->select('*');
    $this->db->from('gsuare');
    $this->db->where('type', $type);
    $this->db->where('class', $class);
    $this->db->where('date_acquired >=', $dateFrom);
    $this->db->where('date_acquired <=', $dateTo);

    $query = $this->db->get();

    return $query->result();
}
public function empExport($employeeName){
    $this->db->select('*');
    $this->db->from('gsuare');
    $this->db->where('are_userid' , $employeeName);

    $query = $this->db->get();

    return $query->result();
}

public function areExpAll()
{
    $query = $this->db->get('gsuare');
    return $query->result();
}
public function getuserfile($userData){
    $this->db->select('are_name');
    $this->db->from('gsuare');
    $this->db->where('id', $userData); 
    $query = $this->db->get();

    if ($query->num_rows() > 0) {
        $row = $query->row();
        return $row->are_name;
    } else {
        return null; 
    }
}




// del
public function insert_file($data) {
    return $this->db->insert('files', $data);
}

public function get_files() {
    $query = $this->db->get('files');
    return $query->result_array();
}


}

?>