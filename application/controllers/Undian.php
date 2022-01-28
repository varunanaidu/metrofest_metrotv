<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Undian extends MY_Controller {

	public function index()
	{
		$this->load->view('undian/index');
	}

	public function get_present()
	{
		$check = $this->sitemodel->custom_query("CALL list_present('') ");
		echo json_encode($check);
	}

	public function search_emp()
	{
		$nip = $this->input->post('nip');
		$check = $this->sitemodel->view('view_allow_undian', '*', ['emp_nip'=>$nip]);
		if ( !$check ) {$this->response['msg'] = "Data tidak ditemukan.";echo json_encode($this->response);exit;}

		$data['result_id']	= $check[0]->emp_id;
		$data['result_name'] = $check[0]->emp_name;
		$data['result_nip'] = $check[0]->emp_nip;
		$data['result_department'] = $check[0]->emp_department;

		$this->response['type'] = 'done';
		$this->response['data'] = $data;
		echo json_encode($this->response);
		exit;
	}

	public function search_participant()
	{
		$term = $this->input->get("term");
		// echo json_encode($term);die;
		$res = [];
		$check = $this->sitemodel->custom_query("SELECT * FROM view_allow_undian WHERE emp_name LIKE '%".$term."%' OR emp_nip LIKE '%".$term."%' ");
		// echo json_encode($check);die;
		if($check){
			foreach ($check as $row) {
				$sub_res = [];
				$sub_res['id'] = $row->emp_nip;
				$sub_res['text'] = $row->emp_name.' - '.$row->emp_nip;
				$res[] = $sub_res;
			}
		}

		echo json_encode($res);
		exit;
	}


	public function get_result()
	{
		// echo json_encode($this->input->post());die;
		$emp_id = $this->input->post('emp_id');
		$check_emp = $this->sitemodel->view('view_allow_undian', '*', ['emp_id'=>$emp_id]);
		
		$check;
		if ( $check_emp[0]->is_flag == 1 ) {
			$check = $this->sitemodel->custom_query("CALL list_present('0') ");
		}else{
			$check = $this->sitemodel->custom_query("CALL list_present('') ");
		}

		$random = mt_rand(0, sizeof($check));
		$data['result_id']	= $check[$random]->present_id;
		$data['result_name'] = $check[$random]->present_name;
		$data['result_type'] = $check[$random]->present_type;
		$data['result_image'] = $check[$random]->present_image;

		echo json_encode($data);
	}

	public function save_doorprize()
	{
		// echo json_encode($this->input->post());die;
		$emp_id 		= $this->input->post('emp_id');
		$present_id		= $this->input->post('present_id');

		$data_tr = [
			'emp_id' 		=> $emp_id,
			'present_id'	=> $present_id,
			'addon'			=> date('Y-m-d H:i:s'),
		];

		$tr = $this->sitemodel->insert('tr_undian', $data_tr);

		$present = $this->sitemodel->view('tab_present', '*', ['present_id'=>$present_id]);
		$data_present = [
			'present_stock' => $present[0]->present_stock - 1
		];
		$tr_present = $this->sitemodel->update('tab_present', $data_present, ['present_id'=>$present_id]);

		echo json_encode("Success Save Transaction");
	}


}
