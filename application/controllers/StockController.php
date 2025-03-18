<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
   require FCPATH.'vendor/autoload.php';

   use PhpOffice\PhpSpreadsheet\Spreadsheet;
   use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
   use PhpOffice\PhpSpreadsheet\IOFactory;
        class StockController extends CI_Controller
        {
            function __construct() {
                parent::__construct();
                $this->load->model('Gsu_model');
                
                }

            public function index()
           {
            $data['mr'] = $this->Gsu_model->getRequisitions();
            $data['getservice'] = $this->Gsu_model->getSeviceable();
            $data['getUnservice'] = $this->Gsu_model->getUnseviceable();
            $data['Serviceable'] = $this->Gsu_model->countMR('Serviceable');
            $data['Unserviceable'] = $this->Gsu_model->countMR('Unserviceable');
            $data['total'] = $data['Serviceable'] + $data['Unserviceable'];
            
          
                $this->load->view('eli-gsu/template/header');
                $this->load->view('eli-gsu/dashboard',$data);
                $this->load->view('eli-gsu/template/footer');
              }
            public function ris()
            {

                $getRis['ris1'] = $this->Gsu_model->get_ris();
                
                $this->load->view('eli-gsu/template/header');
                $this->load->view('eli-gsu/Office_Supply/ris', $getRis);
                $this->load->view('eli-gsu/template/footer');
            }
            public function insert_ris()
            {
                if (isset($_POST['save']))
                {
                    $now = date("Y-m-d");
                    $req = [
                        // 'd_request' => date( 'Y-m-d', strtotime( $this->input->post('date_request') ) ),
                        'employee_name' => $this->input->post('employee_name'),
                        'item_name' => $this->input->post('item_name'),
                        'quantity' => $this->input->post('quantity'),
                        'price' => $this->input->post('price'),
                        'date_request' => $now
                        // 'date_received' => $this->input->post('date_received')
                    ];
                    $this->Gsu_model->request($req);
                    redirect(base_url('request'));
                        
                }
                else
                {
                 
                }
              
            }
            public function rsmi()
            {
                $getRis['ris1'] = $this->Gsu_model->get_ris();
                $this->load->view('eli-gsu/template/header');
                $this->load->view('eli-gsu/Office_Supply/rsmi', $getRis);
                $this->load->view('eli-gsu/template/footer');
            }
            public function edit_ris($id)
            {
                $this->Gsu_model->edit_ris($id);
                redirect('ris');

            }
            public function scard()
            {
                $stocks['scard1'] = $this->Gsu_model->getstock();
                $this->load->view('eli-gsu/template/header');
                $this->load->view('eli-gsu/Office_Supply/scard' , $stocks);
                $this->load->view('eli-gsu/template/footer');
            }
            public function addscard()
            {
                if (isset($_POST['save']))
                {
                    
                    $scarddata = [
                        // 'd_request' => date( 'Y-m-d', strtotime( $this->input->post('date_request') ) ),
                        'refnum' => $this->input->post('refnum'),
                        'itemname' => $this->input->post('itemname'),
                        'descrip' => $this->input->post('descrip'),
                        'unit' => $this->input->post('unit'),
                        'price' => $this->input->post('price'),
                        'tquantity' => $this->input->post('tquantity'),
                    ];
                    $this->Gsu_model->instock($scarddata);
                    redirect(base_url('scard'));
                        
                }
                else
                {
                    echo "wrong";
                }
            }
            public function inscard($id)
            {
                $iddata['stockid'] = $this->Gsu_model->idstock($id);
                $iddata['stocks1'] = $this->Gsu_model->joinstock();
                $this->load->view('eli-gsu/template/header');
                $this->load->view('Office_Supply/inscard', $iddata);
                $this->load->view('eli-gsu/template/footer');
            }
            public function action()
            {
                // Fetch data
                $rislist = $this->Gsu_model->excelup();
                $today = date("m-d-Y");
            
                $spreadsheet = new Spreadsheet();
                $sheet = $spreadsheet->getActiveSheet();
                $sheet->setCellValue('A1', 'Employee Name');
                $sheet->setCellValue('B1', 'Item Name');
                $sheet->setCellValue('C1', 'Quantity');
                $sheet->setCellValue('D1', 'Date Request');
                $sheet->setCellValue('E1', 'Date Received');
            
                $sheet->getStyle("A1:E1")->getFont()->setBold(true);
            
                $sn = 2;
                foreach ($rislist as $emp) {
                    $sheet->setCellValue('A' . $sn, $emp->employee_name);
                    $sheet->setCellValue('B' . $sn, $emp->item_name);
                    $sheet->setCellValue('C' . $sn, $emp->quantity);
                    $sheet->setCellValue('D' . $sn, $emp->date_request);
                    $sheet->setCellValue('E' . $sn, $emp->date_received);
                    $sn++;
                }
            
                $writer = new Xlsx($spreadsheet);
                $filename = $today . '_Ris.xlsx';
            
                // Set the appropriate headers to prompt file download
                header('Content-Type: application/vnd.ms-excel');
                header('Content-Disposition: attachment; filename="' . $filename . '"');
                header('Cache-Control: max-age=0');
            
                $writer->save('php://output');
                exit;
            }
            
            public function req()
            {
                $stocks['scard1'] = $this->Gsu_model->getstock();
                $this->load->view('eli-gsu/template/header');
                $this->load->view('eli-gsu/Office_Supply/request', $stocks);
                $this->load->view('eli-gsu/template/footer');
            }
           public function getrequest()
           {
            $getreq['req'] = $this->Gsu_model->getreq();
            $this->load->view('eli-gsu/template/header');
            $this->load->view('eli-gsu/Office_Supply/accreq', $getreq);
            $this->load->view('eli-gsu/template/footer');
          
           }
           public function accept($id)
           {
               $getreq['req'] = $this->Gsu_model->getreq();
               $this->load->view('eli-gsu/template/header');
               $this->load->view('eli-gsu/Office_Supply/accreq', $getreq);
               $this->load->view('eli-gsu/template/footer');
           
               if ($this->input->post('confirm')) {
                   $now = date("Y-m-d");
                   $ris_data = [
                       'employee_name' => $this->input->post('employee_name'),
                       'item_name' => $this->input->post('item_name'),
                       'quantity' => $this->input->post('quantity'),
                       'price' => $this->input->post('price'),
                       'date_request' => $this->input->post('date_request'),
                       'date_received' => $now
                   ];
                   $this->Gsu_model->db_ris($ris_data);
                   $this->Gsu_model->delrequest($id);
                             
                   redirect(base_url('RequisitionandIssue'));
               }
           }
           
public function deny($id)
{
    $this->Gsu_model->delrequest($id);
    redirect(base_url('RequisitionandIssue'));
}
public function materialReq() {
    $id = $this->input->post('id');

    $data['mr'] = $this->Gsu_model->getRequisitions();
    $data['getservice'] = $this->Gsu_model->getSeviceable();
    $data['getUnservice'] = $this->Gsu_model->getUnseviceable();

    $data['file'] = $this->Gsu_model->getarefile($id);

    $data['Serviceable'] = $this->Gsu_model->countMR('Serviceable');
    $data['Unserviceable'] = $this->Gsu_model->countMR('Unserviceable');
    $data['total'] = $data['Serviceable'] + $data['Unserviceable'];

    $data['permanent'] = $this->Gsu_model->getPerma();

    $data['employee'] = $this->Gsu_model->getEmployee();
 
    $this->load->view('eli-gsu/template/header');
    $this->load->view('eli-gsu/Office_Supply/material_requisition', $data);

}
public function importEquip()
{
    $config['upload_path'] = './uploads/';
    $config['allowed_types'] = 'xls|xlsx';
    $config['max_size'] = 2048;
    $this->load->library('upload', $config);
    $this->upload->initialize($config);

    if (!$this->upload->do_upload('upload_file')) {
        $error = $this->upload->display_errors();
        $this->session->set_flashdata('message', '<div class="alert alert-danger">' . $error . '</div>');
        redirect('MaterialRequisition');
    }

    $file_path = './uploads/' . $this->upload->data('file_name');
    $spreadsheet = IOFactory::load($file_path);
    $sheet = $spreadsheet->getActiveSheet();
    $highestRow = $sheet->getHighestRow();
    $highestColumn = $sheet->getHighestColumn();
    $headerRow = $sheet->rangeToArray('A1:' . $highestColumn . '1', null, true, false)[0];
    $insert_data = [];

    for ($row = 13; $row <= $highestRow; $row++) {
        $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row, null, true, false)[0];

        // Skip empty rows
        if (empty($rowData) || array_filter($rowData, 'strlen') === []) {
            continue;
        }

        $insert_row = [];

        foreach ($headerRow as $index => $header) {
            $column = $this->getColumnByHeader($header);

            if (!empty($column) && isset($rowData[$index])) {
                $insert_row[$column] = $rowData[$index];
            }
        }

        if (!empty($insert_row)) {
            $insert_data[] = $insert_row;
        }
    }
    $result = $this->Gsu_model->insertData($insert_data);

    if ($result) {
        $this->session->set_flashdata('message', '<div class="alert alert-success">Data imported successfully!</div>');
    } else {
        $this->session->set_flashdata('message', '<div class="alert alert-danger">Failed to import data.</div>');
    }

    unlink($file_path);
    redirect('MaterialRequisition');
    exit(); 
}


private function getColumnByHeader($header)
{
    $column_map = array(
        'Qty' => 'qty',
        'Unit' => 'unit',
        'Item/Property' => 'property',
        'Property No.' => 'property_num',
        'Date Acquired' => 'date_acquired',
        'Serial #' => 'serial',
        'ARE to' => 'are_to',
        'Locator/Division' => 'locator',
        'Unit Value' => 'unit_value',
        'Total Value' => 'total',
        'Status' => 'status',
        'Type' => 'type'
    );

    return isset($column_map[$header]) ? $column_map[$header] : '';
}
public function insertEquip() {

    $config['upload_path'] = FCPATH . 'assets/uploads/';
    $config['allowed_types'] = 'pdf|doc|docx|xlsx';
    $config['max_size'] = 10240;

    $this->load->library('upload', $config);
    $this->upload->initialize($config);

    if (!$this->upload->do_upload('are_file')) {
        $error = $this->upload->display_errors();
        $this->session->set_tempdata('insert_success', false, 2);
        $this->session->set_tempdata('insert_message', $error, 2);
        redirect('MaterialRequisition');
    }
    else {
        $file_data = $this->upload->data();
        $data = array(
            'qty' => '1',
            'unit' => $this->input->post('unit'),
            'class' => $this->input->post('class'),
            'property' => $this->input->post('property'),
            'prop_descript' => $this->input->post('prop_descript'),
            'property_num' => $this->input->post('propnum'),
            'date_acquired' => $this->input->post('date'),
            'serial' => $this->input->post('serialnum'),
            'are_userid' => $this->input->post('selected_user_id'),
            'are_to' => $this->input->post('selected_user_name'),
            'used_userid' => $this->input->post('usedby_selected_user_id'),
            'used_by' => $this->input->post('usedby_selected_user_name'),
            'locator' => $this->input->post('locator'),
            'unit_value' => $this->input->post('uvalue'),
            'status' => $this->input->post('status'),
            'type' => $this->input->post('type'),
            'are_name' => $file_data['file_name'],
            'are_file' => base64_encode(file_get_contents($file_data['full_path']))
        );

        $add_data = $this->Gsu_model->insert_equip($data);

        if ($add_data) {
            $this->session->set_tempdata('insert_success', true, 2); // Flash data expires after 2 seconds
            $this->session->set_tempdata('insert_message', 'Successfully Added', 2);
        
            redirect('MaterialRequisition');
        } else {
            $this->session->set_tempdata('insert_success', false, 2);
            $this->session->set_tempdata('insert_message', "Couldn't save. Please try again.", 2);
            $db_error = $this->db->error();
            echo "Database Error: {$db_error['code']} - {$db_error['message']}";
        }
    }
}

// public function insertEquip() {

//     $config['upload_path'] = FCPATH . 'assets/uploads/';
//     $config['allowed_types'] = 'pdf';
//     $config['max_size'] = 10240;

//     $this->load->library('upload', $config);
//     $this->upload->initialize($config);

//     if (!$this->upload->do_upload('are_file')) {
//         $error = $this->upload->display_errors();
//         $this->session->set_tempdata('insert_success', false, 2);
//         $this->session->set_tempdata('insert_message', $error, 2);
//         redirect('MaterialRequisition');
//     }
//     else {
//         $file_data = $this->upload->data();
//         $data = array(
//             'qty' => '1',
//             'unit' => $this->input->post('unit'),
//             'class' => $this->input->post('class'),
//             'property' => $this->input->post('property'),
//             'prop_descript' => $this->input->post('prop_descript'),
//             'property_num' => $this->input->post('propnum'),
//             'date_acquired' => $this->input->post('date'),
//             'serial' => $this->input->post('serialnum'),
//             'are_userid' => $this->input->post('selected_user_id'),
//             'are_to' => $this->input->post('selected_user_name'),
//             'used_userid' => $this->input->post('usedby_selected_user_id'),
//             'used_by' => $this->input->post('usedby_selected_user_name'),
//             'locator' => $this->input->post('locator'),
//             'unit_value' => $this->input->post('uvalue'),
//             'status' => $this->input->post('status'),
//             'type' => $this->input->post('type'),
//             'are_name' => $file_data['file_name'],
//             'are_file' => base64_encode(file_get_contents($file_data['full_path']))
//         );

//         $add_data = $this->Gsu_model->insert_equip($data);

//         if ($add_data) {
//             $this->session->set_tempdata('insert_success', true, 2); // Flash data expires after 2 seconds
//             $this->session->set_tempdata('insert_message', 'Successfully Added', 2);
        
//             redirect('MaterialRequisition');
//         } else {
//             $this->session->set_tempdata('insert_success', false, 2);
//             $this->session->set_tempdata('insert_message', "Couldn't save. Please try again.", 2);
//             $db_error = $this->db->error();
//             echo "Database Error: {$db_error['code']} - {$db_error['message']}";
//         }
//     }
// }

public function getEquipData() {
    $id = $this->input->post('id');
    $data = $this->Gsu_model->getEquipDataById($id);
    

    echo json_encode($data);
    exit();
}

// end admin side

// employee user side
public function updateMR() {
    $qty = 1;
    $uvalue = $this->input->post('uvalue');
    $id = $this->input->post('id');
    
   
        $updateData = array(
            'qty' => $qty,
            'unit' => $this->input->post('unit'),
            'class' => $this->input->post('class'),
            'property' => $this->input->post('property'),
            'prop_descript' => $this->input->post('prop_descript'),
            'property_num' => $this->input->post('propnum'),
            'date_acquired' => $this->input->post('date'),
            'serial' => $this->input->post('serialnum'),
            'are_userid' => $this->input->post('edit_selected_user_id'),
            'are_to' => $this->input->post('edit_selected_user_name'),
            'used_userid' => $this->input->post('edit_usedby_selected_user_id'),
            'used_by' => $this->input->post('edit_usedby_selected_user_name'),
            'prev_are' => $this->input->post('prev_are'),
            'locator' => $this->input->post('locator'),
            'unit_value' => $uvalue,
            'status' => $this->input->post('status'),
            'type' => $this->input->post('type'),
            'note' => $this->input->post('note'),
            
        );

        $update_data = $this->Gsu_model->update_MR($updateData, $id);

        if ($update_data) {
            echo 'success';
            redirect('MaterialRequisition');
        } else {
            echo 'wrong input';
            var_dump($updateData);
        }
}




public function arefiledit(){
    $id = $this->input->post('id');

    // Load the form validation library
    $this->load->library('form_validation');

    // Define a form validation rule to check if the uploaded file is a PDF
    $this->form_validation->set_rules('are_file', 'ARE File', 'callback_validate_pdf');

    // Custom validation callback function to check if the uploaded file is a PDF
    

    if ($this->form_validation->run() == false) {
        // Form validation failed, display the form again with validation errors.
        $data['validation_errors'] = validation_errors();
        $this->load->view('eli-gsu/user/uMaterialRequisition', $data);
    } else {
        // Form validation passed, proceed with the file upload and data processing.
        $config['upload_path'] = FCPATH . 'assets/uploads/';
        $config['allowed_types'] = 'pdf';
        $config['max_size'] = 10240;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('fileInput_are')) {
            $error = $this->upload->display_errors();
            $data['upload_error'] = $error;
            $this->load->view('your_form_view', $data);
        } else {
            $update_data = $this->upload->data();
            $data = array(
                'are_name' => $update_data['fileInput_are'],
                'are_file' => base64_encode(file_get_contents($update_data['full_path']))
            );

            $edit_are = $this->Gsu_model->update_are($update_data, $id);

            if ($edit_are) {
                redirect('MaterialRequisition');
            }
        }
    }
}


public function userMR(){   
    $userData = $this->session->userdata('userid');
    $data['user'] = $this->Gsu_model->getData($userData);
    $data['userviceable'] = $this->Gsu_model->getuServiceable($userData);
    $data['uUnserviceable'] = $this->Gsu_model->getuUnserviceableData($userData);

    
    $data['file'] = $this->Gsu_model->getuserfile($userData);

    $data['Serviceable'] = $this->Gsu_model->ucountMR('Serviceable', $userData);
    $data['Unserviceable'] = $this->Gsu_model->ucountMR('Unserviceable', $userData);
    $data['total'] = $data['Serviceable'] + $data['Unserviceable'];

    $this->load->view('eli-gsu/user/uheader');
    $this->load->view('eli-gsu/user/uMaterialRequisition', $data);

}


// export are file
public function areFile(){

        $type = $this->input->post('type');
        $class = $this->input->post('class');
        $dateFrom = $this->input->post('dateFrom');
        $dateTo = $this->input->post('dateTo');
        $employeeName = $this->input->post('employeeName');

    if(!empty($type) && !empty($class) && !empty($dateFrom) && !empty($dateFrom) && !empty($dateTo)){
        // Fetch data
        $rislist = $this->Gsu_model->areExport($type, $class, $dateFrom, $dateTo);
        $today = date("m-d-Y");
    
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'Type');
        $sheet->setCellValue('B1', 'Class');
        $sheet->setCellValue('C1', 'Qty');
        $sheet->setCellValue('D1', 'Unit');
        $sheet->setCellValue('E1', 'Item/Property');
        $sheet->setCellValue('F1', 'Description');
        $sheet->setCellValue('G1', 'Property Number');
        $sheet->setCellValue('H1', 'Date Acquired');
        $sheet->setCellValue('I1', 'Serial Number');
        $sheet->setCellValue('J1', 'ARE to');
        $sheet->setCellValue('K1', 'Locator/Division');
        $sheet->setCellValue('L1', 'Unit Value');
        $sheet->setCellValue('M1', 'Status');
    
        $sheet->getStyle("A1:M1")->getFont()->setBold(true);
    
        $sn = 2;
        foreach ($rislist as $emp) {
            $sheet->setCellValue('A' . $sn, $emp->type);
            $sheet->setCellValue('B' . $sn, $emp->class);
            $sheet->setCellValue('C' . $sn, $emp->qty);
            $sheet->setCellValue('D' . $sn, $emp->unit);
            $sheet->setCellValue('E' . $sn, $emp->property);
            $sheet->setCellValue('F' . $sn, $emp->prop_descript);
            $sheet->setCellValue('G' . $sn, $emp->property_num);
            $sheet->setCellValue('H' . $sn, $emp->date_acquired);
            $sheet->setCellValue('I' . $sn, $emp->serial);
            $sheet->setCellValue('J' . $sn, $emp->are_to);
            $sheet->setCellValue('K' . $sn, $emp->locator);
            $sheet->setCellValue('L' . $sn, $emp->unit_value);
            $sheet->setCellValue('M' . $sn, $emp->status);
            $sn++;
        }
    
        $writer = new Xlsx($spreadsheet);
        $filename = $today . '_' . $type . '_ARE_DATA.xlsx';
    
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment; filename="' . $filename . '"');
        header('Cache-Control: max-age=0');
    
        $writer->save('php://output');
        exit;
    }
    if (!empty($employeeName)) {
        // Fetch data based on the selected employee name
        $rislist = $this->Gsu_model->empExport($employeeName);
        $today = date("m-d-Y");
    
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'Type');
        $sheet->setCellValue('B1', 'Class');
        $sheet->setCellValue('C1', 'Qty');
        $sheet->setCellValue('D1', 'Unit');
        $sheet->setCellValue('E1', 'Item/Property');
        $sheet->setCellValue('F1', 'Description');
        $sheet->setCellValue('G1', 'Property Number');
        $sheet->setCellValue('H1', 'Date Acquired');
        $sheet->setCellValue('I1', 'Serial Number');
        $sheet->setCellValue('J1', 'ARE to');
        $sheet->setCellValue('K1', 'Locator/Division');
        $sheet->setCellValue('L1', 'Unit Value');
        $sheet->setCellValue('M1', 'Status');
    
        $sheet->getStyle("A1:M1")->getFont()->setBold(true);
    
        $sn = 2;
        foreach ($rislist as $emp) {
            $sheet->setCellValue('A' . $sn, $emp->type);
            $sheet->setCellValue('B' . $sn, $emp->class);
            $sheet->setCellValue('C' . $sn, $emp->qty);
            $sheet->setCellValue('D' . $sn, $emp->unit);
            $sheet->setCellValue('E' . $sn, $emp->property);
            $sheet->setCellValue('F' . $sn, $emp->prop_descript);
            $sheet->setCellValue('G' . $sn, $emp->property_num);
            $sheet->setCellValue('H' . $sn, $emp->date_acquired);
            $sheet->setCellValue('I' . $sn, $emp->serial);
            $sheet->setCellValue('J' . $sn, $emp->are_to);
            $sheet->setCellValue('K' . $sn, $emp->locator);
            $sheet->setCellValue('L' . $sn, $emp->unit_value);
            $sheet->setCellValue('M' . $sn, $emp->status);
            $sn++;
        }
    
        $writer = new Xlsx($spreadsheet);
        $filename = $today . '_' . $employeeName . '_ARE_DATA.xlsx';
    
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment; filename="' . $filename . '"');
        header('Cache-Control: max-age=0');
    
        $writer->save('php://output');
        exit;
    }
    else{
        $rislist = $this->Gsu_model->areExpAll();
        $today = date("m-d-Y");
    
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'Type');
        $sheet->setCellValue('B1', 'Class');
        $sheet->setCellValue('C1', 'Qty');
        $sheet->setCellValue('D1', 'Unit');
        $sheet->setCellValue('E1', 'Item/Property');
        $sheet->setCellValue('F1', 'Description');
        $sheet->setCellValue('G1', 'Property Number');
        $sheet->setCellValue('H1', 'Date Acquired');
        $sheet->setCellValue('I1', 'Serial Number');
        $sheet->setCellValue('J1', 'ARE to');
        $sheet->setCellValue('K1', 'Locator/Division');
        $sheet->setCellValue('L1', 'Unit Value');
        $sheet->setCellValue('M1', 'Status');
    
        $sheet->getStyle("A1:M1")->getFont()->setBold(true);
    
        $sn = 2;
        foreach ($rislist as $emp) {
            $sheet->setCellValue('A' . $sn, $emp->type);
            $sheet->setCellValue('B' . $sn, $emp->class);
            $sheet->setCellValue('C' . $sn, $emp->qty);
            $sheet->setCellValue('D' . $sn, $emp->unit);
            $sheet->setCellValue('E' . $sn, $emp->property);
            $sheet->setCellValue('F' . $sn, $emp->prop_descript);
            $sheet->setCellValue('G' . $sn, $emp->property_num);
            $sheet->setCellValue('H' . $sn, $emp->date_acquired);
            $sheet->setCellValue('I' . $sn, $emp->serial);
            $sheet->setCellValue('J' . $sn, $emp->are_to);
            $sheet->setCellValue('K' . $sn, $emp->locator);
            $sheet->setCellValue('L' . $sn, $emp->unit_value);
            $sheet->setCellValue('M' . $sn, $emp->status);
            $sn++;
        }
    
        $writer = new Xlsx($spreadsheet);
        $filename = $today . ' ALL_ARE_DATA.xlsx';
    
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment; filename="' . $filename . '"');
        header('Cache-Control: max-age=0');
    
        $writer->save('php://output');
        exit;
    }
}


// are file upload
public function uploadin() {
    $data['files'] = $this->Gsu_model->get_files();
    $this->load->view('eli-gsu/Office_Supply/upload_form', $data);
}

public function upload() {
    $config['upload_path'] = FCPATH . 'assets/uploads/';
    $config['allowed_types'] = 'pdf|doc|docx|xlsx';
    $config['max_size'] = 10240;

    $this->load->library('upload', $config);
    $this->upload->initialize($config);

    if (!$this->upload->do_upload('userfile')) {
        $error = $this->upload->display_errors();
        echo $error;
    } else {
        $file_data = $this->upload->data();
        $data = array(
            'file_name' => $file_data['file_name'],
            'file_data' => base64_encode(file_get_contents($file_data['full_path']))
        );

        if ($this->Gsu_model->insert_file($data)) {
            echo 'File uploaded and saved successfully.';
        } else {
            echo 'Error saving file to the database.';
        }
    }
}

public function download($are_name) {

    // $path = FCPATH . 'assets/uploads/';

    // if (file_exists($path . $are_name)) {
    //     $mime = mime_content_type($path . $are_name);

    //     // Set appropriate headers
    //     header('Content-Type: ' . $mime);
    //     header('Content-Disposition: attachment; filename="' . $are_name . '"');
    //     header('Content-Length: ' . filesize($path . $are_name));

    //     // Output the file data
    //     readfile($path . $are_name);
    // } else {
    //     echo 'File not found.';
    // }
    
}
public function view_pdf($are_name) {
    // Define the path to the PDF file
    $pdfPath = './assets/uploads/' . $are_name;

    // Check if the file exists
    if (file_exists($pdfPath)) {
        // Set the content type to PDF
        header('Content-type: application/pdf');
        
        // Read and output the PDF file
        readfile($pdfPath);
    } else {
        // Handle the case where the PDF file does not exist
        show_404();
    }
}

public function areView(){
    $are_link = $this->input->post('are_link');
    
    if(isset($are_link)){
        header('content-type: application/pdf');
        readfile('./assets/uploads/06-29-23_PDS.pdf');

    }
}


}
   ?>