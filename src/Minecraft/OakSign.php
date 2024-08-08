<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\TransparentBlock;

class OakSign extends TransparentBlock
{
    public function initTexture ()
    {
        return $this->loadTexture('../item/oak_sign');
    }
}
