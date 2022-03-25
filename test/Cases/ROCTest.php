<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace HyperfTest\Cases;

use HyperfTest\HttpTestCase;
use ROC\VersionInterface;

/**
 * @internal
 * @coversNothing
 */
class ROCTest extends HttpTestCase
{
    public function testGetROCVersion()
    {
        $res = di()->get(VersionInterface::class)->getVersion();

        $this->assertSame('v1.0.0', $res);
    }

    public function testHash()
    {
        $res = di()->get(VersionInterface::class)->hash([
            'id' => 1,
            'name' => '李铭昕',
            'email' => 'l@hyperf.io',
        ]);

        $this->assertIsArray($res);
        $this->assertSame('v1.0.0@74b8371f0ea2d2e4a9e3da5486189cbc', $res['version']);
    }
}
