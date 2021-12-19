<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class Dandelion extends Block
{
    protected $name = 'minecraft:dandelion';
    protected $transparent = true;

    public function initTexture ()
    {
        return $this->loadTexture('dandelion');
    }
}
