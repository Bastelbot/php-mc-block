<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class Comparator extends Block
{
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('comparator_on');
    }
}
