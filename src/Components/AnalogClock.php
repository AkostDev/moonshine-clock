<?php

declare(strict_types=1);

namespace AKostDev\MoonShine\Components;

use MoonShine\AssetManager\Js;
use MoonShine\UI\Components\MoonShineComponent;

/**
 * @method static static make(int $sizePx = 150, bool $smoothSecondHand = true, string $borderColor = '#000', string $backgroundColor = 'transparent', int $borderThickness = 2, string $centerDotColor = '#333', bool $showDigits = true, string $digitFont = 'Arial, sans-serif', string $digitColor = '#000', int $hourMarksThickness = 3, int $minuteMarksThickness = 2, string $hourMarksColor = '#000', string $minuteMarksColor = '#666', string $hourHandColor = '#333', string $minuteHandColor = '#666', string $secondHandColor = '#FF3333', string $hourHandColorDark = '#CCC', string $minuteHandColorDark = '#AAA', string $secondHandColorDark = '#FF6666', string $centerDotColorDark = '#CCC', string $digitColorDark = '#FFF', string $hourMarksColorDark = '#FFF', string $minuteMarksColorDark = '#AAA', string $borderColorDark = '#FFF', string $backgroundColorDark = 'transparent')
 */
final class AnalogClock extends MoonShineComponent
{
    protected string $view = 'moonshine-clock-component::components.analog-clock';

    public function __construct(
        public int $sizePx = 150,
        public bool $smoothSecondHand = true,
        public string $borderColor = '#000',
        public string $backgroundColor = 'transparent',
        public int $borderThickness = 2,
        public string $centerDotColor = '#333',
        public bool $showDigits = true,
        public string $digitFont = 'Arial, sans-serif',
        public string $digitColor = '#000',
        public int $hourMarksThickness = 3,
        public int $minuteMarksThickness = 2,
        public string $hourMarksColor = '#000',
        public string $minuteMarksColor = '#666',
        public string $hourHandColor = '#333',
        public string $minuteHandColor = '#666',
        public string $secondHandColor = '#FF3333',
        public string $hourHandColorDark = '#CCC',
        public string $minuteHandColorDark = '#AAA',
        public string $secondHandColorDark = '#FF6666',
        public string $centerDotColorDark = '#CCC',
        public string $digitColorDark = '#FFF',
        public string $hourMarksColorDark = '#FFF',
        public string $minuteMarksColorDark = '#AAA',
        public string $borderColorDark = '#FFF',
        public string $backgroundColorDark = 'transparent',
    )
    {
        parent::__construct();
    }

    protected function assets(): array
    {
        return [
            Js::make('vendor/moonshine-clock-component/js/analog-clock.min.js'),
        ];
    }

    protected function viewData(): array
    {
        return [
            'params' => json_encode([
                'size' => $this->sizePx,
                'smoothSecondHand' => $this->smoothSecondHand,
                'borderColor' => $this->borderColor,
                'backgroundColor' => $this->backgroundColor,
                'centerDotColor' => $this->centerDotColor,
                'borderThickness' => $this->borderThickness,
                'showDigits' => $this->showDigits,
                'digitFont' => $this->digitFont,
                'digitColor' => $this->digitColor,
                'hourMarksThickness' => $this->hourMarksThickness,
                'minuteMarksThickness' => $this->minuteMarksThickness,
                'hourMarksColor' => $this->hourMarksColor,
                'minuteMarksColor' => $this->minuteMarksColor,
                'hourHandColor' => $this->hourHandColor,
                'minuteHandColor' => $this->minuteHandColor,
                'secondHandColor' => $this->secondHandColor,
                'hourHandColorDark' => $this->hourHandColorDark,
                'minuteHandColorDark' => $this->minuteHandColorDark,
                'secondHandColorDark' => $this->secondHandColorDark,
                'centerDotColorDark' => $this->centerDotColorDark,
                'digitColorDark' => $this->digitColorDark,
                'hourMarksColorDark' => $this->hourMarksColorDark,
                'minuteMarksColorDark' => $this->minuteMarksColorDark,
                'borderColorDark' => $this->borderColorDark,
                'backgroundColorDark' => $this->backgroundColorDark,
            ])
        ];
    }
}
