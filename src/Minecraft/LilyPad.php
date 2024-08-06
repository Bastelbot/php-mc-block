<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\BlockGrey;

class LilyPad extends BlockGrey
{
    protected $name = 'minecraft:lily_pad';
    protected $transparent = true;

    public function initTexture ()
    {
        $tex = $this->loadTexture('lily_pad');
        $this->imagecolorize($tex, 0x007fcf65);
        return $tex;
    }
}
