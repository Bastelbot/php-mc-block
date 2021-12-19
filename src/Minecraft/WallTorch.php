<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class WallTorch extends Block
{
    protected $name = 'minecraft:wall_torch';
    protected $transparent = true;

    public function initTexture ()
    {
        return $this->loadTexture('torch');
    }
}
