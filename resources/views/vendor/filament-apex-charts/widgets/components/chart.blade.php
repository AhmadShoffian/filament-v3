@props([
    'chartId',
    'chartOptions',
    'contentHeight',
    'pollingInterval',
    'loadingIndicator',
    'deferLoading',
    'readyToLoad',
    'darkMode',
])

<div {!! $deferLoading ? ' wire:init="loadWidget" ' : '' !!} class="flex items-center justify-center filament-apex-charts-chart"
    style="{{ $contentHeight ? 'height: ' . $contentHeight . 'px;' : '' }}">
    @if ($readyToLoad)
        <div wire:ignore class="w-full filament-apex-charts-chart-container">

            <div class="filament-apex-charts-chart-object" x-ref="{{ $chartId }}" id="{{ $chartId }}">
            </div>

            <div {!! $pollingInterval ? 'wire:poll.' . $pollingInterval . '="updateOptions"' : '' !!} x-data="{
                chart: null,
                options: @js($chartOptions),
                theme: {{ $darkMode ? "document.querySelector('html').matches('.dark') ? 'dark' : 'light'" : "'light'" }},
                init() {
            
                    $wire.on('updateOptions', async ({ options }) => {
                        this.chart.updateOptions(options, false, true, true);
                    });
            
                    this.options.theme = { mode: this.theme };
                    this.options.chart.background = 'inherit';
            
                    this.chart = new ApexCharts($refs.{{ $chartId }}, this.options);
                    this.chart.render();
                }
            }"
                @dark-mode-toggled.window="chart.updateOptions( { theme: { mode: {{ $darkMode ? '$event.detail' : "'light'" }} } } )"
                x-init="$watch('dropdownOpen', value => $wire.dropdownOpen = value)">
            </div>

        </div>
    @else
        <div class="filament-apex-charts-chart-loading-indicator m-auto">
            @if ($loadingIndicator)
                {!! $loadingIndicator !!}
            @else
                <div x-cloak wire:loading.delay
                    class="w-7 h-7 animate-spin border-4 border-amber-500 border-t-transparent rounded-full"></div>
            @endif
        </div>
    @endif
</div>
