<?php

namespace App;

class Resource 
{
	public function collection()
	{
		return [];
	}

	public function books()
	{
		return range(1, 5);
	}
}