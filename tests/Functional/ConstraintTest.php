<?php
namespace Helmich\Psr7Assert\Tests\Functional;


use Helmich\Psr7Assert\Psr7Assertions;
use PHPUnit_Framework_TestCase as TestCase;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\UriInterface;


class ConstraintTest extends TestCase
{



    use Psr7Assertions;



    public function testHasUriCanSucceed()
    {
        $uri = $this->prophesize(UriInterface::class);
        $uri->__toString()->willReturn('/foo');

        $request = $this->prophesize(RequestInterface::class);
        $request->getUri()->willReturn($uri);

        $this->assertRequestHasUri($request->reveal(), '/foo');
    }



    /**
     * @expectedException \PHPUnit_Framework_AssertionFailedError
     */
    public function testHasUriCanFail()
    {
        $uri = $this->prophesize(UriInterface::class);
        $uri->__toString()->willReturn('/foo');

        $request = $this->prophesize(RequestInterface::class);
        $request->getUri()->willReturn($uri);

        $this->assertRequestHasUri($request->reveal(), '/bar');
    }


}