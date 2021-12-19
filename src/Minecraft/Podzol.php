<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class Podzol extends Block
{
    protected $name = 'minecraft:podzol';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('podzol_top');
    }
}
