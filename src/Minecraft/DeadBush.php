<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class DeadBush extends Block
{
    protected $name = 'minecraft:dead_bush';
    protected $transparent = true;

    public function initTexture ()
    {
        return $this->loadTexture('dead_bush');
    }
}
