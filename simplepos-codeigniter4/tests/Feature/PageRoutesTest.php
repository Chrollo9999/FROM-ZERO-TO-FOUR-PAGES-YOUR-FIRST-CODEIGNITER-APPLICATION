<?php

namespace Tests\Feature;

use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\FeatureTestTrait;

final class PageRoutesTest extends CIUnitTestCase
{
    use FeatureTestTrait;

    public function testAllPagesLoad(): void
    {
        foreach (['/', '/about', '/customers', '/users'] as $path) {
            $this->call('get', $path)->assertOK();
        }
    }

    public function testCustomerPageShowsArrayRecord(): void
    {
        $this->get('/customers')->assertSee('Andrea Santos');
    }

    public function testUserPageShowsArrayRecord(): void
    {
        $this->get('/users')->assertSee('admin01');
    }
}
