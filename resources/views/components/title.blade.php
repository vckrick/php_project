
<div class="border-bottom pb-3 mb-4">
    
    @isset($link)
        <div class="mb-2">
            {{ $link }}
        </div>
    @endisset


    <div class="d-flex justify-content-between">

        <div>
            <h1 class="h2">
                {{ $slot }}
            </h1>
        </div>

        @if(isset($right))
            <div>
                {{ $right }}
            </div>
        @endif
        
    </div>

</div>

<x-errors />