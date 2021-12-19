<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class Dirt extends Block
{
    protected $name = 'minecraft:dirt';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('dirt');
    }
}
