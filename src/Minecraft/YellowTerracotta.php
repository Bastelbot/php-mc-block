<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class YellowTerracotta extends Block
{
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('yellow_terracotta');
    }
}
