<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\BlockGrey;

class SpruceLeaves extends BlockGrey
{
    protected $transparent = true;

    public function initTexture ()
    {
        $tex = $this->loadTexture('spruce_leaves');
        $this->imagecolorize($tex, 0x007fcf65);
        return $tex;
    }
}
