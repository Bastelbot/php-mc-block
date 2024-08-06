<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class StrippedDarkOakWood extends Block
{
    protected $name = 'minecraft:stripped_dark_oak_wood';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('stripped_dark_oak_log_top');
    }
}
