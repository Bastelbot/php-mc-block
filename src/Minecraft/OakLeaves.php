<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class OakLeaves extends BlockGrey
{
    protected $name = 'minecraft:oak_leaves';
    protected $transparent = true;

    public function initTexture ()
    {
        $tex = $this->loadTexture('oak_leaves');
        $this->imagecolorize($tex, 0x007fcf65);
        return $tex;
    }
}
