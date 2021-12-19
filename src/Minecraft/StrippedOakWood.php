<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class StrippedOakWood extends Block
{
    protected $name = 'minecraft:stripped_oak_wood';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('stripped_oak_log_top');
    }
}
