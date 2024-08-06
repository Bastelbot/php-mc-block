<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class DeepslateBrickWall extends Block
{
    protected $name = 'minecraft:deepslate_brick_wall';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('deepslate_bricks');
    }
}
