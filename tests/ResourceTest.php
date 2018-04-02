<?php
namespace Tests;

require __DIR__ .'/../app/bootstrap.php';

use PHPUnit\Framework\TestCase;
use App\Resource;

class ResourceTest extends TestCase
{
	protected $resource;

	public function setUp()
	{
		parent::setUp();

		$this->resource = new Resource();
	}

	public function testEmptyCollection(){
		$this->assertEmpty( $this->resource->collection() );
	}
}