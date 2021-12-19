<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\BlockGrey;

class DarkOakLeaves extends BlockGrey
{
    protected $name = 'minecraft:dark_oak_leaves';
    protected $transparent = true;

    public function initTexture ()
    {
        $tex = $this->loadTexture('dark_oak_leaves');
        $this->imagecolorize($tex, 0x007fcf65);
        return $tex;
    }
}
