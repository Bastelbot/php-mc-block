<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class PrismarineWall extends Block
{
    protected $name = 'minecraft:prismarine_wall';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('prismarine');
    }
}
