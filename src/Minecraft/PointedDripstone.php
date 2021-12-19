<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class PointedDripstone extends Block
{
    protected $name = 'minecraft:pointed_dripstone';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('pointed_dripstone_up_tip');
    }
}
