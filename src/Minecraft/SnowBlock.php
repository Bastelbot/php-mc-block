<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class SnowBlock extends Block
{
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('snow');
    }
}
