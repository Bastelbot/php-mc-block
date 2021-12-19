<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class TallSeagrass extends Block
{
    protected $name = 'minecraft:tall_seagrass';
    protected $transparent = true;

    public function initTexture ()
    {
      return $this->loadTexture('tall_seagrass_top');
    }
}
