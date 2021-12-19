<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class Torch extends Block
{
    protected $name = 'minecraft:torch';
    protected $transparent = true;

    public function initTexture ()
    {
        return $this->loadTexture('torch');
    }
}
