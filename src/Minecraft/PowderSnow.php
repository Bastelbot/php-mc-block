<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class PowderSnow extends Block
{
    protected $name = 'minecraft:powder_snow';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('powder_snow');
    }
}
