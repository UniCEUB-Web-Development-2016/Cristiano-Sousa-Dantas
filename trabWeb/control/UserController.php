<?php
include_once "model/Request.php";
include_once "model/User.php";
include_once "database/DatabaseConnector.php";
class UserController
{
	public function register($request)
	{
		$params = $request->get_params();
		$user = new User($params["first_name"],
				 $params["last_name"],
				 $params["age"],
				 $params["gender"],
				 $params["country"],
				 $params["city"],
				 $params["job"],
				 $params["salary"],
				 $params["email"]);
				 
		$db = new DatabaseConnector("localhost", "bancoweb", "mysql", "", "root", "");
		$conn = $db->getConnection();
		
		
		
	    return $conn->query($this->generateInsertQuery($user));	
	}
	private function generateInsertQuery($user)
	{
		$query =  "INSERT INTO user (first_name, last_name, age, gender, country, city, job, salary, email) VALUES ('".$user->getFirstName()."','".
					$user->getLastName()."','".
					$user->getAge()."','".
					$user->getGender()."','".
					$user->getCountry()."','". 
					$user->getCity()."','".
					$user->getJob()."','".
					$user->getSalary()."','".
					$user->getEmail()."')";
				
		return $query;						
	}
	public function search($request)
	{
		$params = $request->get_params();
		$crit = $this->generateCriteria($params);
		$db = new DatabaseConnector("localhost", "bancoweb", "mysql", "", "root", "");
		$conn = $db->getConnection();
		$result = $conn->query("SELECT first_name, last_name, age, gender, country, city, job, salary, email FROM user WHERE ".$crit);
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