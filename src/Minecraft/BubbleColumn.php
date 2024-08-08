<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class BubbleColumn extends Block
{
    protected $transparent = true;

    public function initTexture ()
    {
        return $this->loadTexture('water_still');
    }

    public function isWater ()
    {
        return true;
    }

}
