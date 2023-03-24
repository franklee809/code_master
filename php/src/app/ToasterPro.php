<?php

namespace App;

class ToasterPro extends Toaster
{
    public function __construct()
    {
        parent::__construct();

        $this->size = 4;
    }

    public function toastWithBagel()
    {
        foreach ($this->slices as $i => $slice) {
            dump(($i + 1) . ': Toasting ' . $slice . 'with Bagel option' . PHP_EOL);
        }
    }
}
