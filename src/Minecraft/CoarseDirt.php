<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class CoarseDirt extends Block
{
    protected $name = 'minecraft:coarse_dirt';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('coarse_dirt');
    }
}
