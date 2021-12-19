<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class Allium extends Block
{
    protected $name = 'minecraft:allium';
    protected $transparent = true;

    public function initTexture ()
    {
        return $this->loadTexture('allium');
    }
}
