<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class Wheat extends Block
{
    protected $name = 'minecraft:wheat';
    protected $transparent = true;

    public function initTexture ()
    {
        return $this->loadTexture('wheat_stage7');
    }
}
