<?php
/**
 * Tests for BinanceFutures
 */

use PHPUnit\Framework\TestCase;
use Binancefutures\Binancefutures;

class BinancefuturesTest extends TestCase {
    private Binancefutures $instance;

    protected function setUp(): void {
        $this->instance = new Binancefutures(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Binancefutures::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
