<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class JackOLantern extends Block
{
    protected $name = 'minecraft:jack_o_lantern';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('jack_o_lantern');
    }
}
