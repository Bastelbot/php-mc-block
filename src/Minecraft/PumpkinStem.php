<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\BlockGrey;

class PumpkinStem extends BlockGrey
{
    protected $transparent = true;

    public function initTexture ()
    {
        $tex = $this->loadTexture('pumpkin_stem');
        $this->imagecolorize($tex, 0x007fcf55);
        return $tex;
    }
}
