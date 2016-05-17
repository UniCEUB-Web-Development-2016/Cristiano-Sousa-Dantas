<?php
include_once "model/Request.php";
include_once "model/User.php";
include_once "database/DatabaseConnector.php";
class ActiveController
{
	public function register($request)
	{
		$params = $request->get_params();
		$active = new Active($params["activeName"],
				 $params["avalue"],
				
		$db = new DatabaseConnector("localhost", "bancoWeb", "mysql", "", "root", "");
		$conn = $db->getConnection();
		
		
	    return $conn->query($this->generateInsertQuery($active));	
	}
	private function generateInsertQuery($active)
	{
		$query =  "INSERT INTO active (activeName, avalue) VALUES ('".$active->get actioveName()."','".
					$releases->avalue()."','".
					
		return $query;						
	}
	public function search($request)
	{
		$params = $request->get_params();
		$crit = $this->generateCriteria($params);
		$db = new DatabaseConnector("localhost", "bancoWeb", "mysql", "", "root", "");
		$conn = $db->getConnection();
		$result = $conn->query("SELECT activeName, avalue, FROM active WHERE ".$crit);
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