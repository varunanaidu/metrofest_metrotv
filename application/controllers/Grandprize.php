<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(E_ALL);

require_once APPPATH . 'vendor/autoload.php';

class Grandprize extends MY_Controller {

	public function index()
	{
		$data['gift'] = $this->sitemodel->view('tab_gift', '*');
		$this->load->view('grandprize/index', $data);
	}

	public function button()
	{
		$data['gift'] = $this->sitemodel->view('tab_gift', '*');
		$this->load->view('grandprize/button', $data);
	}

	public function index2()
	{
		$data['gift'] = $this->sitemodel->view('tab_gift', '*');
		$this->load->view('grandprize/index2', $data);
	}

	public function button2()
	{
		$data['gift'] = $this->sitemodel->view('tab_gift', '*');
		$this->load->view('grandprize/button2', $data);
	}

	public function index3()
	{
		$data['gift'] = $this->sitemodel->view('tab_gift', '*');
		$this->load->view('grandprize/index3', $data);
	}

	public function button3()
	{
		$data['gift'] = $this->sitemodel->view('tab_gift', '*');
		$this->load->view('grandprize/button3', $data);
	}

	public function get_participant()
	{
		$check = $this->sitemodel->view('view_allow_grandprize','*');
		echo json_encode($check);
	}

	public function search_participant()
	{
		$term = $this->input->get("term");
		// echo json_encode($term);die;
		$res = [];
		$check = $this->sitemodel->custom_query("SELECT * FROM view_allow_grandprize WHERE participant_name LIKE '%".$term."%' OR participant_nip LIKE '%".$term."%' ");
		// echo json_encode($check);die;
		if($check){
			foreach ($check as $row) {
				$sub_res = [];
				$sub_res['id'] = $row->registration_id;
				$sub_res['text'] = $row->participant_name.' - '.$row->participant_nip;
				$res[] = $sub_res;
			}
		}

		echo json_encode($res);
		exit;
	}


	public function get_result()
	{
		$check = $this->sitemodel->view('view_allow_grandprize','*');
		$random = mt_rand(0, sizeof($check));
		$data['result_id']	= $check[$random]->registration_id;
		$data['result_name'] = $check[$random]->participant_name;
		$data['result_nip'] = $check[$random]->participant_nip;
		$data['result_unit_bisnis'] = $check[$random]->participant_unit_bisnis;

		echo json_encode($data);
	}


	public function get_result2()
	{
		$check = $this->sitemodel->view('view_allow_grandprize','*');
		$random = mt_rand(0, sizeof($check));
		$data['result_id']	= $check[$random]->registration_id;
		$data['result_name'] = $check[$random]->participant_name;
		$data['result_nip'] = $check[$random]->participant_nip;
		$data['result_unit_bisnis'] = $check[$random]->participant_unit_bisnis;

		echo json_encode($data);
	}


	public function get_result3()
	{
		$check = $this->sitemodel->view('view_allow_grandprize','*');
		$random = mt_rand(0, sizeof($check));
		$data['result_id']	= $check[$random]->registration_id;
		$data['result_name'] = $check[$random]->participant_name;
		$data['result_nip'] = $check[$random]->participant_nip;
		$data['result_unit_bisnis'] = $check[$random]->participant_unit_bisnis;

		echo json_encode($data);
	}

	public function get_result4()
	{
		$check = $this->sitemodel->view('view_allow_grandprize','*');
		$random = mt_rand(0, sizeof($check));
		$data['result_id']	= $check[$random]->registration_id;
		$data['result_name'] = $check[$random]->participant_name;
		$data['result_nip'] = $check[$random]->participant_nip;
		$data['result_unit_bisnis'] = $check[$random]->participant_unit_bisnis;

		echo json_encode($data);
	}

	public function get_result5()
	{
		$check = $this->sitemodel->view('view_allow_grandprize','*');
		$random = mt_rand(0, sizeof($check));
		$data['result_id']	= $check[$random]->registration_id;
		$data['result_name'] = $check[$random]->participant_name;
		$data['result_nip'] = $check[$random]->participant_nip;
		$data['result_unit_bisnis'] = $check[$random]->participant_unit_bisnis;

		echo json_encode($data);
	}

	public function get_result6()
	{
		$check = $this->sitemodel->view('view_allow_grandprize','*');
		$random = mt_rand(0, sizeof($check));
		$data['result_id']	= $check[$random]->registration_id;
		$data['result_name'] = $check[$random]->participant_name;
		$data['result_nip'] = $check[$random]->participant_nip;
		$data['result_unit_bisnis'] = $check[$random]->participant_unit_bisnis;

		echo json_encode($data);
	}

	public function get_result7()
	{
		$check = $this->sitemodel->view('view_allow_grandprize','*');
		$random = mt_rand(0, sizeof($check));
		$data['result_id']	= $check[$random]->registration_id;
		$data['result_name'] = $check[$random]->participant_name;
		$data['result_nip'] = $check[$random]->participant_nip;
		$data['result_unit_bisnis'] = $check[$random]->participant_unit_bisnis;

		echo json_encode($data);
	}

	public function get_selected_result()
	{
		$registration_id = $this->input->post('registration_id');
		$check = $this->sitemodel->view('view_allow_grandprize','*', ['registration_id'=>$registration_id]);
		$data['result_id']	= $check[0]->registration_id;
		$data['result_name'] = $check[0]->participant_name;
		$data['result_nip'] = $check[0]->participant_nip;
		$data['result_unit_bisnis'] = $check[0]->participant_unit_bisnis;

		$options = [
			'cluster'	=> 'ap1',
			'useTLS'	=> true
		];

		$pusher = new Pusher\Pusher(
			'57b1c37d7c00671cbe6f',
			'fc2a347238ded0a1a0ae',
			'1300980',
			$options
		);

		$event = $pusher->trigger('channel1', 'event', ['message'=>'selected_result', 'data'=>$data], null, true);
		echo json_encode($event);
	}

	public function save_tr()
	{
		// echo json_encode($this->input->post());die;
		$registration_id = $this->input->post('registration_id');
		$gift_id		= $this->input->post('gift_id');

		$data_tr = [
			'registration_id' 	=> $registration_id,
			'gift_id'			=> $gift_id,
			'addon'			=> date('Y-m-d H:i:s'),
		];

		$tr = $this->sitemodel->insert('tr_grandprize', $data_tr);

		echo json_encode("Success Save Transaction");
	}

	public function button_start()
	{
		$options = [
			'cluster'	=> 'ap1',
			'useTLS'	=> true
		];

		$pusher = new Pusher\Pusher(
			'57b1c37d7c00671cbe6f',
			'fc2a347238ded0a1a0ae',
			'1300980',
			$options
		);

		$event = $pusher->trigger('channel1', 'event', ['message'=>'start'], null, true);
		echo json_encode($event);
	}

	public function button_stop()
	{
		$options = [
			'cluster'	=> 'ap1',
			'useTLS'	=> true
		];

		$pusher = new Pusher\Pusher(
			'57b1c37d7c00671cbe6f',
			'fc2a347238ded0a1a0ae',
			'1300980',
			$options
		);

		$event = $pusher->trigger('channel1', 'event', ['message'=>'stop'], null, true);
		echo json_encode($event);
	}

	public function change_gift()
	{
		$gift_id = $this->input->post('gift_id');
		$gift = $this->sitemodel->view('tab_gift', '*', ['gift_id'=>$gift_id]);
		$options = [
			'cluster'	=> 'ap1',
			'useTLS'	=> true
		];

		$pusher = new Pusher\Pusher(
			'57b1c37d7c00671cbe6f',
			'fc2a347238ded0a1a0ae',
			'1300980',
			$options
		);

		$event = $pusher->trigger('channel1', 'event', ['message'=>'change_gift', 'gift'=>$gift], null, true);
		echo json_encode($event);
	}

	public function test_get_api()
	{
		$this->load->library('guzzle');

		$data = $this->guzzle->guzzle_metrofest();

		echo json_encode($data);
	}


}
