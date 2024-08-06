<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class Piston extends Block
{
    protected $name = 'minecraft:piston';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('piston_top');
    }
}
