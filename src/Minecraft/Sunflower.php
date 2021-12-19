<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class Sunflower extends Block
{
    protected $name = 'minecraft:sunflower';
    protected $transparent = true;

    public function initTexture ()
    {
        return $this->loadTexture('sunflower_front');
    }
}
