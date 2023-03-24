<?php

namespace App;

class FancyToaster
{
    /// Composition Implementation

    private ToasterPro $toaster;

    public function __construct(ToasterPro $toaster)
    {
        $this->toaster = $toaster;
    }

    public function fry()
    {
    }

    public function toast()
    {
        $this->toaster->toast();
    }

    public function toastBagel()
    {
        $this->toaster->toastBagel();
    }
}
