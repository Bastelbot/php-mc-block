<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class EmeraldBlock extends Block
{
    protected $name = 'minecraft:emerald_block';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('emerald_block');
    }
}
