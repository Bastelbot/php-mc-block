<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class BirchLog extends Block
{
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('birch_log_top');
    }
}
