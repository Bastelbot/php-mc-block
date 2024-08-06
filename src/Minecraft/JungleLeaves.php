<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\BlockGrey;

class JungleLeaves extends BlockGrey
{
    protected $name = 'minecraft:jungle_leaves';
    protected $transparent = true;

    public function initTexture ()
    {
        $tex = $this->loadTexture('jungle_leaves');
        $this->imagecolorize($tex, 0x007fcf65);
        return $tex;
    }
}
