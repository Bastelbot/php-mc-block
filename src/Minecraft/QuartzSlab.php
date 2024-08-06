<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class QuartzSlab extends Block
{
    protected $name = 'minecraft:quartz_slab';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('quartz_block_top');
    }
}
