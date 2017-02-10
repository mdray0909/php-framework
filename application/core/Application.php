<?php

namespace core;

class Application
{
	public function __construct()
	{
		try
		{
			if (false) // Verificar rota
			{
				
			}
			else 
			{
				$controller = new \controller\Home();
				
				if (false) // Verificar se há alguma ação
				{
					
				}
				else
				{
					$controller->index();
				}
			}
		}
		catch (Exception $ex)
		{
			$this->application_error($ex);
		}
	}
	
	public function application_error($error)
	{
		echo '<pre>';
		var_dump($error);
		echo '</pre>';
	}
}