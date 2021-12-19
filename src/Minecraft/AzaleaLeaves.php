<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class AzaleaLeaves extends Block
{
    protected $name = 'minecraft:azalea_leaves';
    protected $transparent = true;

    public function initTexture ()
    {
        return $this->loadTexture('azalea_leaves');
    }
}
