<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\TransparentBlock;

class Beetroots extends TransparentBlock
{
    public function initTexture ()
    {
        return $this->loadTexture('beetroots_stage3');
    }
}
