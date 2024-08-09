<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\TransparentBlock;

class SweetBerryBush extends TransparentBlock
{
    public function initTexture ()
    {
        return $this->loadTexture('sweet_berry_bush_stage3');
    }
}
