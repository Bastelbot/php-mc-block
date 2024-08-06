<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class PolishedDeepslateSlab extends Block
{
    protected $name = 'minecraft:polished_deepslate_slab';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('polished_deepslate');
    }
}
