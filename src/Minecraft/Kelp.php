<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class Kelp extends Block
{
    protected $name = 'minecraft:kelp';
    protected $transparent = true;

    public function initTexture ()
    {
      return $this->loadTexture('kelp');
    }
}
