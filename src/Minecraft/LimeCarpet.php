<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class LimeCarpet extends Block
{
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('lime_wool');
    }
}
