<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class Pumpkin extends Block
{
    protected $name = 'minecraft:pumpkin';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('pumpkin_top');
    }
}
