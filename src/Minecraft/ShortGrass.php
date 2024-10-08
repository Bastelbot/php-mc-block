<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\BlockGrey;

class ShortGrass extends BlockGrey
{
    protected $transparent = true;

    public function initTexture ()
    {
        $tex = $this->loadTexture('short_grass');
        $this->imagecolorize($tex, 0x00ffff00);
        return $tex;
    }
}
