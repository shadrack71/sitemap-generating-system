<?php
class Topic {	
   
	private $topicTable = 'topics';	
	private $conn;
	
	public function __construct($db){
        $this->conn = $db;
    }

	public function getTopic() {	
	
		$sqlQuery = "SELECT * FROM ".$this->topicTable;			
		$stmt = $this->conn->prepare($sqlQuery);			
		$stmt->execute();
		$result = $stmt->get_result();
		return $result;
		
	}	
	
	public function createSeoUrl($id, $subject){    
		$subject = trim($subject);    
		$subject = html_entity_decode($subject);    
		$subject = strip_tags($subject);    
		$subject = strtolower($subject);    
		$subject = preg_replace('~[^ a-z0-9_.]~', ' ', $subject);    
		$subject = preg_replace('~ ~', '-', $subject);    
		$subject = preg_replace('~-+~', '-', $subject);        
		return $subject.'-'.$id;
	}
}
?>