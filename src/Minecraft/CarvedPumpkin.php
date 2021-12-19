<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class CarvedPumpkin extends Block
{
    protected $name = 'minecraft:carved_pumpkin';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('carved_pumpkin');
    }
}
