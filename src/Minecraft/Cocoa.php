<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\TransparentBlock;

class Cocoa extends TransparentBlock
{
    public function initTexture ()
    {
        return $this->loadTexture('cocoa_stage2');
    }
}
