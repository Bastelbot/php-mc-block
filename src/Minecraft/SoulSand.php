<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class SoulSand extends Block
{
    protected $name = 'minecraft:soul_sand';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('soul_sand');
    }
}
