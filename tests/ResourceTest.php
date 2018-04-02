<?php
namespace Tests;

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

	public function testEmptyCollection()
	{
		$this->assertEmpty( $this->resource->collection() );
	}

	public function testFiveBooks()
	{
		$books = $this->resource->books();
		$this->assertCount(5, $books);
	}
}