<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class SweetBerryBush extends Block
{
    protected $name = 'minecraft:sweet_berry_bush';
    protected $transparent = true;

    public function initTexture ()
    {
        return $this->loadTexture('sweet_berry_bush_stage3');
    }
}
