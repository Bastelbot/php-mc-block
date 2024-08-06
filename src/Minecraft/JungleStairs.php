<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class JungleStairs extends Block
{
    protected $name = 'minecraft:jungle_stairs';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('jungle_planks');
    }
}
