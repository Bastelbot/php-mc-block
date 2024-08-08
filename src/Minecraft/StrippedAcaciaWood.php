<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class StrippedAcaciaWood extends Block
{
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('stripped_acacia_log_top');
    }
}
