<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class RoseBush extends Block
{
    protected $name = 'minecraft:rose_bush';
    protected $transparent = true;

    public function initTexture ()
    {
        return $this->loadTexture('rose_bush_top');
    }
}
