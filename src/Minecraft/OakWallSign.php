<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class OakWallSign extends Block
{
    protected $name = 'minecraft:oak_wall_sign';
    protected $transparent = true;

    public function initTexture ()
    {
        return $this->loadTexture('../item/oak_sign');
    }
}
