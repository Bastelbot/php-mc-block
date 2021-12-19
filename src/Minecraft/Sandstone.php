<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class Sandstone extends Block
{
    protected $name = 'minecraft:sandstone';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('sandstone_top');
    }
}
