<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\BlockGrey;

class Grass extends BlockGrey
{
    protected $transparent = true;

    public function initTexture ()
    {
        $tex = $this->loadTexture('grass');
        $this->imagecolorize($tex, 0x00ffff00);
        return $tex;
    }
}
