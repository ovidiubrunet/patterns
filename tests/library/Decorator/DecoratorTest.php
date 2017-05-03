<?php
namespace tests\library\Decorator;

use src\library\Decorator\AuthenticateRequest;
use src\library\Decorator\StructureRequest;
use src\library\Decorator\LogRequest;
use src\library\Decorator\MainProcess;
use src\library\Decorator\RequestHelper;
use PHPUnit\Framework\TestCase;


class DecoratorTest extends TestCase
{
	public function testAuthenticateRequest()
	{
		$process = new AuthenticateRequest(new StructureRequest(new LogRequest(new MainProcess())) );
		$data = $process->process( new RequestHelper() );

		$this->assertNull($data);
	}
}
