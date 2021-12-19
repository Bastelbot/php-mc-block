<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\BlockGrey;

class LargeFern extends BlockGrey
{
    protected $name = 'minecraft:large_fern';
    protected $transparent = true;

    public function initTexture ()
    {
        $tex = $this->loadTexture('large_fern_top');
        $this->imagecolorize($tex, 0x00ffff00);
        return $tex;
    }
}
