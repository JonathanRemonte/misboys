<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class FinCashMan extends CI_Controller {

        public function __construct(){
            parent::__construct();
            $this->load->model('Receipt_model');
            // $this->load->helper('url');
            $this->load->library('session');
        }



        // Handle form submission
        public function add_receipt() {
            $this->load->library('form_validation');

            // $this->form_validation->set_rules('casid', 'ID', 'required');
            $this->form_validation->set_rules('casdate', 'Date', 'required');
            $this->form_validation->set_rules('casors', 'ORS', 'required');
        
            if ($this->form_validation->run() == FALSE) {
                $this->session->set_flashdata('error', validation_errors());
            } else {
                $data = [
                    // 'casid' => $this->input->post('casid'),
                    'casdate' => $this->input->post('casdate'),
                    'casors' => $this->input->post('casors'),
                ];
                $this->Receipt_model->insert_receipt($data);
                $this->session->set_flashdata('success', 'Receipt added successfully!');

                // if ($this->Receipt_model->insert_receipt($data)) {
                //     $this->session->set_flashdata('success', 'Receipt added successfully!');
                // } else {
                //     $this->session->set_flashdata('error', 'Failed to add receipt. Please try again.');
                // }
            }
            
            redirect('casmon'); // Reloads the page and clears flashdata after refresh
        }


    }
?>