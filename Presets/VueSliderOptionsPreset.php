<?php

namespace Modules\VueSlider\Presets;

use Modules\VueSlider\Layouts\Options\AutoPlayOptionsLayout;
use Modules\VueSlider\Layouts\Options\GeneralOptionsLayout;
use Modules\VueSlider\Layouts\Options\NavigationOptionsLayout;
use Modules\VueSlider\Layouts\Options\PaginationOptionsLayout;
use Whitecube\NovaFlexibleContent\Flexible;
use Whitecube\NovaFlexibleContent\Layouts\Preset;
use function __;
use function collect;

class VueSliderOptionsPreset extends Preset
{

    /**
     * @throws \Exception
     */
    public function handle(Flexible $field)
    {
        $field->button(__('Add Option'));
        $field->confirmRemove();
        $field->fullWidth();
        $field->collapsed();
        $field->stacked();


        collect([
            GeneralOptionsLayout::class,
            AutoPlayOptionsLayout::class,
            NavigationOptionsLayout::class,
            PaginationOptionsLayout::class,
        ])->each(function($layout) use($field){

            $field->addLayout($layout);
        });
    }
}
