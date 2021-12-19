<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class OakLog extends Block
{
    protected $name = 'minecraft:oak_log';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('oak_log_top');
    }
}
