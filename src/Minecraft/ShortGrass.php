<?php
namespace Bastelbot\McBlock\Minecraft;

class ShortGrass extends BlockGrey
{
    protected $transparent = true;

    public function initTexture ()
    {
        $tex = $this->loadTexture('grass');
        $this->imagecolorize($tex, 0x00ffff00);
        return $tex;
    }
}
