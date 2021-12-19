<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class DarkOakLog extends Block
{
    protected $name = 'minecraft:dark_oak_log';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('dark_oak_log_top');
    }
}
