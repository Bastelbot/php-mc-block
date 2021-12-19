<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class DirtPath extends Block
{
    protected $name = 'minecraft:dirt_path';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('dirt_path_top');
    }
}
