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
namespace ROC;

interface VersionInterface
{
    public const NAME = 'ROCVersionService';

    /**
     * @param $user = [
     *     'id' => 1,
     *     'name' => 'limingxinleo',
     *     'email' => 'l@hyperf.io'
     * ]
     * @return array ['version' => 'v0.1.0@123123123123']
     */
    public function hash(array $user): array;

    public function getVersion(): string;
}
