<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class PrismarineBricks extends Block
{
    protected $name = 'minecraft:prismarine_bricks';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('prismarine_bricks');
    }
}
