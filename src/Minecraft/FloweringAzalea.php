<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class FloweringAzalea extends Block
{
    protected $name = 'minecraft:flowering_azalea';
    protected $transparent = true;

    public function initTexture ()
    {
        return $this->loadTexture('flowering_azalea_top');
    }
}
