<div class="header-bar">
    <h1 class="ui header"><a href="{{ url('login') }}">SiGEO</a></h1>
    @if( Illuminate\Support\Facades\Auth::check() )
        <div class="header-bar-buttons">
            <div class="button"><i class="icon user"></i>Test User<i class="icon caret down"></i></div>
        </div>
    @endif
</div>
