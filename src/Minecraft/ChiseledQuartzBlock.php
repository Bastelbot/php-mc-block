<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class ChiseledQuartzBlock extends Block
{
    protected $name = 'minecraft:chiseled_quartz_block';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('chiseled_quartz_block_top');
    }
}
