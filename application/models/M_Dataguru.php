<?php 
	defined('BASEPATH') OR exit('');

	class M_Dataguru extends CI_Model
	{
		public function getDataGuru(){
			$this->db->select('*');
			$this->db->from('tb_dataguru');
			$query = $this->db->get();
			return $query->result();
		}

		public function InsertDataMhs($data){
			$this->db->insert('tb_dataguru', $data);
		}

		public function EditDataMhs($data, $id){
			$this->db->where('nik', $id);
			$this->db->update('tb_dataguru', $data);
		}

		public function getDataGuruDetail($id){
			$this->db->where('nik', $id);
			$query = $this->db->get('tb_dataguru');
			return $query->row();
		}

		public function DeleteDataGuru($id){
			$this->db->where('nik', $id);
			$this->db->delete('tb_dataguru');
		}


	}
	