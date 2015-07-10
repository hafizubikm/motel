<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Motel_model extends CI_Model{
	
    function __construct(){
		parent:: __construct();
    }
	
	//hotel details ================================================================
    public function insert_hotel_details_model($data){
        $this->db->insert('hotel_details', $data);
    }
	
    public function display_hotel_details_model(){
        $query=$this->db->get('hotel_details');
		return $query->result();
    }
	
    public function del_hotel_details($id){
		$this->db->where('hotel_details.hotel_id',$id);
		return $this->db->delete('hotel_details');
	}
	
	public function get_single_hotel($id){
		$query=$this->db->get_where('hotel_details', array('hotel_id'=>$id));
		return $query->row_array();
	}
		
	public function update_hotel_details($data,$id){
		$this->db->where('hotel_details.hotel_id',$id);
		$this->db->update('hotel_details',$data);
	}
	
	

	//room capacity==================================================================
    public function insert_room_capacity_model($data){
        $this->db->insert('capacity', $data);
    }
	
    public function display_hotel_room_capacity_model(){
        $query=$this->db->get('capacity');
		return $query->result();
    }
	
    public function del_hotel_room_capacity($id){
		$this->db->where('capacity.capacity_id',$id);
		return $this->db->delete('capacity');
	}
	
	public function get_single_room_capacity($id){
		$query=$this->db->get_where('capacity', array('capacity_id'=>$id));
		return $query->row_array();
	}
	
	public function update_room_capacity($datax,$id){
		$this->db->where('capacity.capacity_id',$id);
		$this->db->update('capacity',$datax);
	}
	
	
	//=================================================================================
	public function insert_room_type($data){
		$this->db->insert('room_type', $data);
	}
	
    public function display_hotel_room_type(){
        $query=$this->db->get('room_type');
		return $query->result();
    }
	
	
    public function del_hotel_room_type($id){
		$this->db->where('room_type.room_type_id',$id);
		return $this->db->delete('room_type');
	}
	
//========================================================================================
	
    public function insert_room($data){
        $this->db->insert('room', $data);
    }
	
    public function display_room(){
        $query=$this->db->get('displayroom');
		return $query->result();
    }
	
    public function del_room($id){
		$this->db->where('room.room_no',$id);
		return $this->db->delete('room');
	}
	
	//==================================================================================
	public function price_manager_display(){
        $query=$this->db->get('room_price_manager');
		return $query->result();	
	}



























}