<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class SeaLantern extends Block
{
    protected $name = 'minecraft:sea_lantern';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('sea_lantern');
    }
}
