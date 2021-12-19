<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class FloweringAzaleaLeaves extends Block
{
    protected $name = 'minecraft:flowering_azalea_leaves';
    protected $transparent = true;

    public function initTexture ()
    {
        return $this->loadTexture('flowering_azalea_leaves');
    }
}
