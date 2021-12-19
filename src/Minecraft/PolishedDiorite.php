<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class PolishedDiorite extends Block
{
    protected $name = 'minecraft:polished_diorite';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('polished_diorite');
    }
}
