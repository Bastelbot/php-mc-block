<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class OxidizedCopper extends Block
{
    protected $name = 'minecraft:oxidized_copper';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('oxidized_copper');
    }
}
