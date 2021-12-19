<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\BlockGrey;

class AttachedPumpkinStem extends BlockGrey
{
    protected $name = 'minecraft:attached_pumpkin_stem';
    protected $transparent = true;

    public function initTexture ()
    {
        $tex = $this->loadTexture('attached_pumpkin_stem');
        $this->imagecolorize($tex, 0x007fcf55);
        return $tex;
    }
}
