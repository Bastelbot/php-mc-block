<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class Lilac extends Block
{
    protected $name = 'minecraft:lilac';
    protected $transparent = true;

    public function initTexture ()
    {
        return $this->loadTexture('lilac_top');
    }
}
