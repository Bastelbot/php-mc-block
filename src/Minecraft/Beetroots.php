<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class Beetroots extends Block
{
    protected $name = 'minecraft:beetroots';
    protected $transparent = true;

    public function initTexture ()
    {
        return $this->loadTexture('beetroots_stage3');
    }
}
