<?php

namespace Tonik\CLI\Scaffolding\Presets;

use Symfony\Component\Filesystem\Filesystem;

class Vue extends Preset
{
    /**
     * Preset name.
     *
     * @var string
     */
    private $name = 'vue';

    /**
     * Scaffold a Vue boilerplate preset.
     *
     * @return void
     */
    public function scaffold()
    {
        $this->updatePackages([
            "vue" => "^2.4.3",
        ]);
        $this->updateSass($this->name);
        $this->updateJavascript($this->name);
        $this->updateAssets($this->name);
    }
}
