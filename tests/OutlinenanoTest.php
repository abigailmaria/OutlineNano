<?php
/**
 * Tests for OutlineNano
 */

use PHPUnit\Framework\TestCase;
use Outlinenano\Outlinenano;

class OutlinenanoTest extends TestCase {
    private Outlinenano $instance;

    protected function setUp(): void {
        $this->instance = new Outlinenano(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Outlinenano::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
