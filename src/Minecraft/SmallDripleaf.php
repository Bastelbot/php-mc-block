<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\TransparentBlock;

class SmallDripleaf extends TransparentBlock
{
    public function initTexture ()
    {
        return $this->loadTexture('big_dripleaf_top');
    }
}
