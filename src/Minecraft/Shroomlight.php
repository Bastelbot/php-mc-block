<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class Shroomlight extends Block
{
    protected $name = 'minecraft:shroomlight';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('shroomlight');
    }
}
