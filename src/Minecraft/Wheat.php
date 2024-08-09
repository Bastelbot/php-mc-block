<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\TransparentBlock;

class Wheat extends TransparentBlock
{
    public function initTexture ()
    {
        return $this->loadTexture('wheat_stage7');
    }
}
