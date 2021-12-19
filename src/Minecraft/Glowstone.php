<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class Glowstone extends Block
{
    protected $name = 'minecraft:glowstone';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('glowstone');
    }
}
