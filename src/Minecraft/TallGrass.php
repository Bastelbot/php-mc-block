<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\BlockGrey;

class TallGrass extends BlockGrey
{
    protected $transparent = true;

    public function initTexture ()
    {
        $tex = $this->loadTexture('tall_grass_top');
        $this->imagecolorize($tex, 0x006fb050);
        return $tex;
    }
}
