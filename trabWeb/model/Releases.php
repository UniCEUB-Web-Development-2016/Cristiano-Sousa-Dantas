<?php
class Releases
{
	private $first_name;
	private $last_name;
	private $age;
	private $gender;
	private $country;
	private $city;
	private $job;
	private $salary;
	private $email;
	public function __construct($first_name, $last_name,
	$age, $gender, $country, $city, $job, $salary, $email)
	{
		$this->first_name = $first_name;
		$this->last_name = $last_name;
		$this->age = $age;
		$this->gender = $gender;
		$this->country = $country;
		$this->city = $city;
		$this->job = $job;
		$this->salary = $salary;
		$this->email = $email;
	}