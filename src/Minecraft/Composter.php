<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class Composter extends Block
{
    protected $name = 'minecraft:composter';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('composter_bottom');
    }
}
