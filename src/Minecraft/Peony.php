<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class Peony extends Block
{
    protected $transparent = true;

    public function initTexture ()
    {
        return $this->loadTexture('peony_top');
    }
}
