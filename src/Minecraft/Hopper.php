<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class Hopper extends Block
{
    protected $name = 'minecraft:hopper';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('hopper_inside');
    }
}
