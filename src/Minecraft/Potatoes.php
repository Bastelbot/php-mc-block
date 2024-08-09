<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\TransparentBlock;

class Potatoes extends TransparentBlock
{
    public function initTexture ()
    {
        return $this->loadTexture('potatoes_stage3');
    }
}
