<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class Gravel extends Block
{
    protected $name = 'minecraft:gravel';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('gravel');
    }
}
