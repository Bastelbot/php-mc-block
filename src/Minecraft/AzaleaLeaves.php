<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\TransparentBlock;

class AzaleaLeaves extends TransparentBlock
{
    public function initTexture ()
    {
        return $this->loadTexture('azalea_leaves');
    }
}
