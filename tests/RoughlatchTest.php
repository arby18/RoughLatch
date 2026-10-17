<?php
/**
 * Tests for RoughLatch
 */

use PHPUnit\Framework\TestCase;
use Roughlatch\Roughlatch;

class RoughlatchTest extends TestCase {
    private Roughlatch $instance;

    protected function setUp(): void {
        $this->instance = new Roughlatch(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Roughlatch::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
