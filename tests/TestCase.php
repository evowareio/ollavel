<?php

namespace Evoware\OllamaPHP\Tests;

use Evoware\OllamaPHP\traits_temp\MocksHttpRequests;
use PHPUnit\Framework\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use MocksHttpRequests;

    protected $httpClient;
}
