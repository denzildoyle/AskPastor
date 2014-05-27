<?php
class Qanda_model extends CI_Model {

    function __construct(){
        parent::__construct();
    }


	private function addQuestion($data){
		$this->db->insert('question', $data); 
	}
	private function updateQuestion($id, $data){
		$this->db->where('questionID', $id);
		$this->db->update('question', $data); 
	}

	private function deleteQuestion($id){
		$this->db->where('questionID', $id);
		$this->db->delete('question'); 
	}

	private function addAnswer($data){
		$this->db->insert('mytable', $data); 
	}

	private function updateAnswer($id, $data){
		$this->db->where('answerID', $id);
		$this->db->update('answer', $data); 
	}

	private function deleteAnswer($id){
		$this->db->where('answerID', $id);
		$this->db->update('answer', $data); 
	}

	private function getQuestions(){
		$query = $this->db->get('question');
		return $query;
	}

	private function getQuestion($id){
		$this->db->where($id);
		$query = $this->db->get('question');
	}

	private function getAnswers(){
		$query = $this->db->get('answer');
		return $query;
	}

	private function getAnswer($id){
		$this->db->where($id);
		$query = $this->db->get('answer');
	}
}