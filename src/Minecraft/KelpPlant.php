<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class KelpPlant extends Block
{
    protected $name = 'minecraft:kelp_plant';
    protected $transparent = true;

    public function initTexture ()
    {
      return $this->loadTexture('kelp_plant');
    }
}
