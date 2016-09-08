<?php

class ExampleTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testBasicExample()
	{
		$response = $this->call('GET', '/');

		$this->assertEquals(200, $response->getStatusCode());
	}

	/**
	 * Trying new Route example.
	 *
	 * @return void
	 */
	public function testHelloRoute()
	{
		$response = $this->call('GET', '/hello/testing');

		$this->assertEquals('Hello testing!', $response->getContent());
	}

}
