<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class SmoothBasalt extends Block
{
    protected $name = 'minecraft:smooth_basalt';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('smooth_basalt');
    }
}
