<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class DeepslateBricks extends Block
{
    protected $name = 'minecraft:deepslate_bricks';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('deepslate_bricks');
    }
}
