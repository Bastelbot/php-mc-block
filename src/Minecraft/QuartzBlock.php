<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class QuartzBlock extends Block
{
    protected $name = 'minecraft:quartz_block';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('quartz_block_top');
    }
}
