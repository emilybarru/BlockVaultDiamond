<?php
/**
 * Tests for BlockVaultDiamond
 */

use PHPUnit\Framework\TestCase;
use Blockvaultdiamond\Blockvaultdiamond;

class BlockvaultdiamondTest extends TestCase {
    private Blockvaultdiamond $instance;

    protected function setUp(): void {
        $this->instance = new Blockvaultdiamond(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Blockvaultdiamond::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
