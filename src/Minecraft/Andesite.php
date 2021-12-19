<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class Andesite extends Block
{
    protected $name = 'minecraft:andesite';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('andesite');
    }
}
