<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
   require FCPATH.'vendor/autoload.php';

   use PhpOffice\PhpSpreadsheet\Spreadsheet;
   use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
    class ExcelPort extends CI_Controller
    {
      function __construct() {
          parent::__construct();
          $this->load->model('Auth_model');
          }
          public function fingaa(){
              //fetch data
              $rislist = $this->Auth_model->excelup();
              $today = date("Y.m.d");

              header('Content-Type: application/vnd.ms-excel');
              // header('Content-Disposition: attachment;filename="Ris.xlsx"');
              $filename = 'FinGAA' . date('Ymd') . '.xlsx';
              header('Content-Disposition: attachment; filename="' . $filename . '"');

              $spreadsheet = new Spreadsheet();
              $sheet = $spreadsheet->getActiveSheet();

              $sheet->setCellValue('A1', 'gaayr'); $sheet->setCellValue('B1', 'uacscod'); $sheet->setCellValue('C1', 'parthead'); $sheet->setCellValue('D1', 'part');
              $sheet->setCellValue('E1', 'gasgms');

              $sheet->getStyle("A1:E1")->getFont()->setBold( true );

              $sn=2;
              foreach($rislist as $emp){
                $sheet->setCellValue('A'.$sn,$emp->gaayr);
                $sheet->setCellValue('B'.$sn,$emp->uacscod);
                $sheet->setCellValue('C'.$sn,$emp->parthead);
                $sheet->setCellValue('D'.$sn,$emp->part);
                $sheet->setCellValue('E'.$sn,$emp->gasgms);
                $sn++;
              }

               $writer = new Xlsx($spreadsheet);
               $writer->save("php://output");
               exit;
            }
        }
   ?>
