<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\BlockGrey;

class AcaciaLeaves extends BlockGrey
{
    protected $name = 'minecraft:acacia_leaves';
    protected $transparent = true;

    public function initTexture ()
    {
        $tex = $this->loadTexture('acacia_leaves');
        $this->imagecolorize($tex, 0x007fcf65);
        return $tex;
    }
}
