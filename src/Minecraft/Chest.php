<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\TransparentBlock;

class Chest extends TransparentBlock
{
    public function initTexture ()
    {
        $im = $this->loadTexture('../entity/chest/normal');
        $this->cropChest($im);
        return $im;
    }
}
