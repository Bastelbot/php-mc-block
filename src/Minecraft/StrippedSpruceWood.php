<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class StrippedSpruceWood extends Block
{
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('stripped_spruce_log_top');
    }
}
