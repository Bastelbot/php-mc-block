<?php
namespace Bastelbot\McBlock\Abstract;

use Bastelbot\Common\CaseConverter;

class Block
{
    // ASSETS_PATH muss mit define angegeben werden!
    //const ASSETS_PATH = __DIR__ . '/../../../../assets';
    protected $data = 0;
    protected $name = '';
    protected $transparent = true;
    protected $texture = null;

    function __construct($name = '')
    {
        if($name) $this->name = $name;

        if(!$this->name) {
            $parts = explode('\\', static::class);
            $snake = CaseConverter::pascalToSnake( end($parts) );
            $this->name = "minecraft:$snake";
        }
    }

    public function setData ($data)
    {
        $this->data = $data;
        $this->texture = $this->initTexture();
    }

    public function getBlockData ()
    {
        return array('name'=>$this->name, 'data'=>$this->data);
    }

    public function getName ()
    {
        return $this->name;
    }

    public function isTransparent ()
    {
        return $this->transparent;
    }

    public function isWater ()
    {
        return false;
    }

    public function getTexture ()
    {
        return $this->texture;
    }

    protected function getEmptyImg ($color = 0xFFFF00FF)
    {
        //Log::debug("getEmptyImg");
        $im = imagecreatetruecolor(16, 16);
        imagesavealpha($im, true);          // bild hat alphakanal
        imagefill($im, 0, 0, $color);       // fill with color
        return $im;
    }

    public function initTexture ()
    {
        $tex = $this->loadTexture();
        if(!$tex) return $this->getEmptyImg();
        return $tex;
    }

    public function loadTexture ($file='', $rot=0)
    {
        $path = $this->findTexture($file);
        if(!$path) return false;
        if(!is_file($path)) echo "########## FILE NOT FOUND: $path ##########\n";
        $im = imagecreatefrompng($path);
        if(!$im) return false;

        if($rot) {
            $rot *= 90;
            $ir = imagerotate($im, $rot, 0x7F000000);
            imagedestroy($im);
            $im = $ir;
        }

        return $im;
    }

    function __destruct ()
    {
        if($this->texture) imagedestroy($this->texture);
    }

    // #########################################################################

    protected function findTexture ($id='')
    {
        if(!$id) $id = $this->name;
        $exid = explode(':', $id);
        $id = end($exid);
        $path = ASSETS_PATH . '/minecraft/textures/block/';
        $mods = ['', '_top', '_front', '_side', '_on'];
        foreach($mods as $mod) {
            $test = "{$path}{$id}{$mod}.png";
            if(is_file($test)) return $test;
        }
        return false;
    }

    protected function cropButton (&$im)
    {
        $ic = $this->getEmptyImg();
        imagecopy($ic, $im, 5, 6, 5, 6, 6, 4);
        imagedestroy($im);
        $im = $ic;
    }

    protected function cropChest (&$im)
    {
        $ic = $this->getEmptyImg();
        imagecopy($ic, $im, 1, 1, 14, 0, 14, 14);
        imagedestroy($im);
        $im = $ic;
    }

    protected function cropFence (&$im)
    {
        $ic = $this->getEmptyImg();
        imagecopy($ic, $im, 4, 4, 4, 4, 8, 8);
        imagedestroy($im);
        $im = $ic;
    }

    protected function cropFenceGate (&$im)
    {
        $ic = $this->getEmptyImg();
        imagecopy($ic, $im, 0, 2, 0, 2, 2, 12);
        imagecopy($ic, $im, 14, 2, 14, 2, 2, 12);
        imagecopy($ic, $im, 0, 3, 0, 3, 16, 3);
        imagecopy($ic, $im, 0, 10, 0, 10, 16, 3);
        imagecopy($ic, $im, 6, 6, 6, 6, 4, 4);
        imagedestroy($im);
        $im = $ic;
    }

    protected function cropPlate (&$im)
    {
        $ic = $this->getEmptyImg();
        imagecopy($ic, $im, 1, 1, 1, 1, 14, 14);
        imagedestroy($im);
        $im = $ic;
    }
}
