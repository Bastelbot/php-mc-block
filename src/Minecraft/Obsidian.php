<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class Obsidian extends Block
{
    protected $name = 'minecraft:obsidian';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('obsidian');
    }
}
