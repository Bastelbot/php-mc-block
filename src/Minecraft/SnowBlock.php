<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class SnowBlock extends Block
{
    protected $name = 'minecraft:snow_block';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('snow');
    }
}
