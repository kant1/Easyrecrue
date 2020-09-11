<?php

namespace Easyrecrue\Tests;

use Easyrecrue\HashingAlgorithm\HashingAlgorithm;
use Easyrecrue\HashingAlgorithm\SimpleQueue;

class SimpleQueueTest extends HashingTest
{
    public function getHashingAlgorithm(): HashingAlgorithm
    {
        return new SimpleQueue();
    }
}
