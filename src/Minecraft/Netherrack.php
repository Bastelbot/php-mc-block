<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class Netherrack extends Block
{
    protected $name = 'minecraft:netherrack';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('netherrack');
    }
}
