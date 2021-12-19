<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class DarkOakFence extends Block
{
    protected $name = 'minecraft:dark_oak_fence';

    public function initTexture ()
    {
        $im = $this->loadTexture('dark_oak_planks');
        $this->cropFence($im);
        return $im;
    }
}
