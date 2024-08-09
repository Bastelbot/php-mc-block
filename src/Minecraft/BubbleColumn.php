<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\TransparentBlock;

class BubbleColumn extends TransparentBlock
{
    public function initTexture ()
    {
        return $this->loadTexture('water_still');
    }

    public function isWater ()
    {
        return true;
    }

}
