<?php
include_once "model/Request.php";
include_once "model/User.php";
include_once "database/DatabaseConnector.php";
class PassiveController
{
	public function register($request)
	{
		$params = $request->get_params();
		$passive = new Passive($params["passiveName"],
				 $params["pvalue"],
				
		$db = new DatabaseConnector("localhost", "bancoWeb", "mysql", "", "root", "");
		$conn = $db->getConnection();
		
		
	    return $conn->query($this->generateInsertQuery($passive));	
	}
	private function generateInsertQuery($passive)
	{
		$query =  "INSERT INTO passive (PassiveName, pvalue) VALUES ('".$passive->get passiveName()."','".
					$releases->pvalue()."','".
					
		return $query;						
	}
	public function search($request)
	{
		$params = $request->get_params();
		$crit = $this->generateCriteria($params);
		$db = new DatabaseConnector("localhost", "bancoWeb", "mysql", "", "root", "");
		$conn = $db->getConnection();
		$result = $conn->query("SELECT passiveName, pvalue, FROM passive WHERE ".$crit);
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