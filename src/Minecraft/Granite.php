<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class Granite extends Block
{
    protected $name = 'minecraft:granite';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('granite');
    }
}
