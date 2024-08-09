<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\TransparentBlock;

class Air extends TransparentBlock
{
    public function initTexture ()
    {
        return $this->getEmptyImg();
    }
}
