<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class CryingObsidian extends Block
{
    protected $name = 'minecraft:crying_obsidian';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('crying_obsidian');
    }
}
