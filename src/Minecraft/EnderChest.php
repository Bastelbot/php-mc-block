<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\TransparentBlock;

class EnderChest extends TransparentBlock
{
    public function initTexture ()
    {
        $im = $this->loadTexture('../entity/chest/ender');
        $this->cropChest($im);
        return $im;
    }
}
