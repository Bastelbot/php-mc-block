<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class MushroomStem extends Block
{
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('mushroom_stem');
    }
}