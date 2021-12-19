<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class Snow extends Block
{
    protected $name = 'snow';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('snow');
    }
}
