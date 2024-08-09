<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\TransparentBlock;

class PointedDripstone extends TransparentBlock
{
    public function initTexture ()
    {
        return $this->loadTexture('pointed_dripstone_up_tip');
    }
}
