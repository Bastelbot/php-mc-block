<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\BlockGrey;

class GrassBlock extends BlockGrey
{
    protected $transparent = false;

    public function initTexture ()
    {
        $tex = $this->loadTexture('grass_block_top');
        $this->imagecolorize($tex, 0x00ffff00);
        return $tex;
    }
}
