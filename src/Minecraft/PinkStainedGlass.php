<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class PinkStainedGlass extends Block
{
    protected $transparent = true;

    public function initTexture ()
    {
        return $this->loadTexture('pink_stained_glass');
    }
}
