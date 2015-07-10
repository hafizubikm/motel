<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Motel extends CI_Controller {
	
    function __construct(){
		parent::__construct();
		$this->load->model('motel_model');
    }
	
	public function index(){
		$data['rooms']=$this->motel_model->display_room();
		$this->load->view('index',$data);
	}
	
	public function bookingformm(){
		$this->load->view('bookingformm');
	}
		
	public function pricemanager(){
		$this->load->view('pricemanager');
	}
	
	public function insert_hotel_details(){
		$data['hotel_name']=$this->input->post('hotel_name');
		$data['address']=$this->input->post('address');
		$data['city']=$this->input->post('city');
		$data['state']=$this->input->post('state');
		$data['country']=$this->input->post('country');
		$data['zipcode']=$this->input->post('zipcode');
		$data['phone']=$this->input->post('phone');
		$data['fax']=$this->input->post('fax');
		$data['email']=$this->input->post('email');
		$this->motel_model->insert_hotel_details_model($data);
		redirect('motel/hoteldetails');
	}
	
	function hoteldetails(){
		if ($dataa['hoteldetails']=$this->motel_model->display_hotel_details_model()){
			$this->load->view('hoteldetails',$dataa);
		}
	}
	
	function hoteledit($id){
		if($dataaa['list'] = $this->motel_model->get_single_hotel($id)){
			$this->load->view('edithoteldetails',$dataaa);
		}
	}

	public function update_hotel_details(){
		$data['hotel_name']=$this->input->post('ehotel_name');
		$data['address']=$this->input->post('eaddress');
		$data['city']=$this->input->post('ecity');
		$data['state']=$this->input->post('estate');
		$data['country']=$this->input->post('ecountry');
		$data['zipcode']=$this->input->post('ezipcode');
		$data['phone']=$this->input->post('ephone');
		$data['fax']=$this->input->post('efax');
		$data['email']=$this->input->post('eemail');
		$this->motel_model->update_hotel_details($data,$_POST['ehdid']);
		$this->hoteldetails();
	}
	
	public function del_hotel_details($id){
		$this->motel_model->del_hotel_details($id);
		redirect('motel/hoteldetails');
	}
	
	//============================================================================
	
	public function insert_room_capacity(){
		$data['capacity_title']=$this->input->post('capacitytitle');
		$data['quantity']=$this->input->post('quantity');
		$this->motel_model->insert_room_capacity_model($data);
		redirect('motel/capacity');
	}
	
	public function capacity(){
		$dataa['capacity']=$this->motel_model->display_hotel_room_capacity_model();
		$this->load->view('roomcapacity',$dataa);
		
	}	
	
	public function del_hotel_room_capacity($id){
		$this->motel_model->del_hotel_room_capacity($id);
		redirect('motel/capacity');
	}
	
	public function edit_room_capacity($id){
		if($dataaa['list'] = $this->motel_model->get_single_room_capacity($id)){
			$this->load->view('editroomcapacity',$dataaa);
		}
	}
	
	public function update_room_capacity(){
		$datax['capacity_title']=$this->input->post('ecapacitytitle');
		$datax['quantity']=$this->input->post('equantity');
		$this->motel_model->update_room_capacity($datax,$_POST['ehdid']);
		$this->capacity();
	}
	
	//============================================================================
	
	public function roomtype(){
		$data['roomtype']=$this->motel_model->display_hotel_room_type();
		$data['error']=" ";
		$this->load->view('roomtype',$data);
	}
	
	function insert_room_type(){
		$config['upload_path'] ='imagess';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '1000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		$this->load->library('upload', $config);
		$this->upload->initialize($config); //if use autoload
		if (! $this->upload->do_upload()){
			$data=array('error'=>$this->upload->display_errors());
			$data['roomtype']=$this->motel_model->display_hotel_room_type();
			$this->load->view('roomtype', $data);
		}else{
			$upload_data=$this->upload->data();
			$data['room_type_title']=$this->input->post('roomtypetitle');
			$data['image']=$upload_data['file_name'];
			$this->motel_model->insert_room_type($data);
			redirect('motel/roomtype');
		}
	}
	
	public function del_hotel_room_type($id){
		$this->motel_model->del_hotel_room_type($id);
		redirect('motel/roomtype');
	}
	
	//============================================================================
	
	public function room(){
		$data['capacity']=$this->motel_model->display_hotel_room_capacity_model();
		$data['roomtype']=$this->motel_model->display_hotel_room_type();
		$data['rooms']=$this->motel_model->display_room();
		$this->load->view('room',$data);
	}

	public function insert_room(){
		$data['number_of_room']=$this->input->post('roomnumber');
		$data['room_type_id']=$this->input->post('roomtypeid');
		$data['capacity_id']=$this->input->post('capacityid');
		$this->motel_model->insert_room($data);
		redirect('motel/room');
	}

	public function del_room($id){
		$this->motel_model->del_room($id);
		redirect('motel/room');
	}

	//============================================================================
	
	public function price_manager_display(){
		$data['price']=$this->motel_model->price_manager_display();
		$this->load->view('pricemanager',$data);
	}
}