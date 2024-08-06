<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class Bamboo extends Block
{
    protected $name = 'minecraft:bamboo';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('bamboo_stalk');
    }
}
