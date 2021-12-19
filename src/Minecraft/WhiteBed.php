<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class WhiteBed extends Block
{
    protected $name = 'minecraft:white_bed';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('white_wool');
    }
}
