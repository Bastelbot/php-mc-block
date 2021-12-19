<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class Melon extends Block
{
    protected $name = 'minecraft:melon';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('melon_top');
    }
}
