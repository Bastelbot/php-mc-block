<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class Farmland extends Block
{
    protected $name = 'minecraft:farmland';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('farmland_moist');
    }
}
