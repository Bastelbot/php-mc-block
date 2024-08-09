<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\TransparentBlock;

class Sunflower extends TransparentBlock
{
    public function initTexture ()
    {
        return $this->loadTexture('sunflower_front');
    }
}
