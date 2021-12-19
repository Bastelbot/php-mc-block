<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class Seagrass extends Block
{
    protected $name = 'seagrass';
    protected $transparent = true;

    public function initTexture ()
    {
      return $this->loadTexture('seagrass');
    }
}
