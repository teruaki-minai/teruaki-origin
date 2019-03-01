<div class="container">
    <div class="row">
@if (count($things0) > 0)
    @foreach ($things0 as $thing)
        @if($thing->use == 0)
            <div class="col-xs-1 ">
                <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <p>{!! nl2br(e($thing->content))  !!}</p>
                        <div class="btn-group">
                            @include('button.unused_button')@include('button.using_button')
                        </div>     
                </div>
                </div>
            </div>
        @endif
    @endforeach
@endif
    </div>
</div>


<div class="text-center">
    <h1>Unused...</h1>
</div>
<div class="container">
    <div class="row">
@if (count($things1) > 0)
    @foreach ($things1 as $thing)
        @if($thing->use == 1)
        <div class="col-xs-1 ">
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <p>{!! nl2br(e($thing->content)) !!}</p>
                    <div class="btn-group">
                        @include('button.using_button')@include('button.throwaway_button')
                    </div>
                </div>
            </div>
        </div>
        @endif
    @endforeach
@endif
    </div>
</div>

<div class="text-center">
    <h1>Using!</h1>
</div>
<div class="container">
    <div class="row">
@if (count($things2) > 0)
    @foreach ($things2 as $thing)
        @if($thing->use == 2)
        <div class="col-xs-1 ">
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <p>{!! nl2br(e($thing->content)) !!}</p>
                    @include('button.throwaway_button')
                </div>
            </div>
        </div>
        @endif
    @endforeach
@endif
    </div>
</div>
    
