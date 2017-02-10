<?php

namespace controller;

class Home extends \core\Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		echo '<h1>Home</h1>';
	}
}