<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class Azalea extends Block
{
    protected $name = 'minecraft:azalea';
    protected $transparent = true;

    public function initTexture ()
    {
        return $this->loadTexture('azalea_top');
    }
}
