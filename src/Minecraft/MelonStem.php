<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\BlockGrey;

class MelonStem extends BlockGrey
{
    protected $name = 'minecraft:melon_stem';
    protected $transparent = true;

    public function initTexture ()
    {
        $tex = $this->loadTexture('melon_stem');
        $this->imagecolorize($tex, 0x007fcf55);
        return $tex;
    }
}
