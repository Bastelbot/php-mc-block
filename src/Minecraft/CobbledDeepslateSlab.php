<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class CobbledDeepslateSlab extends Block
{
    protected $name = 'minecraft:cobbled_deepslate_slab';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('cobbled_deepslate');
    }
}
