<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\TransparentBlock;

class Fire extends TransparentBlock
{
    public function initTexture ()
    {
        return $this->loadTexture('fire_0');
    }
}
