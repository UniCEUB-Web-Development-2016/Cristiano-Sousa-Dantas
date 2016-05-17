<?php
include_once "model/Request.php";
include_once "model/Releases.php";
include_once "database/DatabaseConnector.php";
class ReleasesController
{
	public function register($request)
	{
		$params = $request->get_params();
		$releases = new Releases($params["rdate"],
				 $params["value"]);
				
		$db = new DatabaseConnector("localhost", "bancoWeb", "mysql", "", "root", "");
		$conn = $db->getConnection();
		
		
	    return $conn->query($this->generateInsertQuery($releases));	

	}
	private function generateInsertQuery($releases)
	{
		$query =  "INSERT INTO releases (rdate, value) VALUES ('".$relaeses->getRdate()."','".
					$releases->getValue()."')";
					
		return $query;						
	}
	public function search($request)
	{
		$params = $request->get_params();
		$crit = $this->generateCriteria($params);
		$db = new DatabaseConnector("localhost", "bancoWeb", "mysql", "", "root", "");
		$conn = $db->getConnection();
		$result = $conn->query("SELECT rdate, value, FROM releases WHERE ".$crit);
		//foreach($result as $row) 
		return $result->fetchAll(PDO::FETCH_ASSOC);
	}
	private function generateCriteria($params) 
	{
		$criteria = "";
		foreach($params as $key => $value)
		{
			$criteria = $criteria.$key." LIKE '%".$value."%' OR ";
		}
		return substr($criteria, 0, -4);	
	}
}