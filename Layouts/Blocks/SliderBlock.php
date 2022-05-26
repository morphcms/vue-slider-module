<?php

namespace Modules\VueSlider\Layouts\Blocks;

use Ebess\AdvancedNovaMediaLibrary\Fields\Images;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Modules\VueSlider\Presets\VueSliderOptionsPreset;
use Spatie\MediaLibrary\HasMedia;
use Whitecube\NovaFlexibleContent\Concerns\HasMediaLibrary;
use Whitecube\NovaFlexibleContent\Flexible;
use Whitecube\NovaFlexibleContent\Layouts\Layout;
use Whitecube\NovaFlexibleContent\Value\FlexibleCast;
use function __;

class SliderBlock extends Layout implements HasMedia
{
    use HasMediaLibrary;

    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'slider-block';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Slider';

    protected $casts = [
        'options' => FlexibleCast::class,
    ];

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields(): array
    {
        return [

            Flexible::make(__('Config'), 'options')
                ->preset(VueSliderOptionsPreset::class),

            Images::make(__('Images'), 'images')->customPropertiesFields([
                Text::make(__('Alt Text'), 'alt')->nullable(),
                Textarea::make(__('Description'), 'description')->nullable()->rows(2),
            ]),
        ];
    }
}
