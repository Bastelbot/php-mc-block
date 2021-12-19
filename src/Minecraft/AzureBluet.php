<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class AzureBluet extends Block
{
    protected $name = 'minecraft:azure_bluet';
    protected $transparent = true;

    public function initTexture ()
    {
        return $this->loadTexture('azure_bluet');
    }
}
