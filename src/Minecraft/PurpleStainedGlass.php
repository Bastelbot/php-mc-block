<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class PurpleStainedGlass extends Block
{
    protected $transparent = true;

    public function initTexture ()
    {
        return $this->loadTexture('purple_stained_glass');
    }
}
