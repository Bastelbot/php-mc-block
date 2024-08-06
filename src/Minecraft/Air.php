<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class Air extends Block
{
    protected $transparent = true;

    public function initTexture ()
    {
        return $this->getEmptyImg();
    }
}
