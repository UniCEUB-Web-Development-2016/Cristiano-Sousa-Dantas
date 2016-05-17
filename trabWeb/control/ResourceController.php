<?php
include_once "model/Request.php";
include_once "control/UserController.php";
include_once "control/ReleasesController.php";
include_once "control/ActiveController.php";
include_once "control/PassiveController.php";
class ResourceController
{
	private $controlMap = 
	[
		"user" => "UserController",
		"releases" => "ReleasesController",
		"active" => "ActiveController",
		"balance" => "BalanceController"
	];
	public function createResource($request)
	{
		return (new $this->controlMap[$request->get_resource()]())->register($request);
	}
	public function searchResource($request)
	{
		return (new $this->controlMap[$request->get_resource()]())->search($request);
	}
}