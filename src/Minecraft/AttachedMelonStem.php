<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\BlockGrey;

class AttachedMelonStem extends BlockGrey
{
    protected $name = 'minecraft:attached_melon_stem';
    protected $transparent = true;

    public function initTexture ()
    {
        $tex = $this->loadTexture('attached_melon_stem');
        $this->imagecolorize($tex, 0x007fcf55);
        return $tex;
    }
}
