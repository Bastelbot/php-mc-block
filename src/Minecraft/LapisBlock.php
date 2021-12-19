<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class LapisBlock extends Block
{
    protected $name = 'minecraft:lapis_block';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('lapis_block');
    }
}
