<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class Cactus extends Block
{
    protected $name = 'minecraft:cactus';
    protected $transparent = true;

    public function initTexture ()
    {
        return $this->loadTexture('cactus_top');
    }
}
