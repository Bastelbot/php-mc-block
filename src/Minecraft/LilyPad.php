<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\BlockGrey;

class LilyPad extends BlockGrey
{
    protected $transparent = true;

    public function initTexture ()
    {
        $tex = $this->loadTexture('lily_pad');
        $this->imagecolorize($tex, 0x007fcf65);
        return $tex;
    }
}
