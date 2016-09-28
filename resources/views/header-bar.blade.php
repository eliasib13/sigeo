<div class="header-bar">
    <h1 class="ui header"><a href="{{ url('login') }}">SiGEO</a></h1>
    @if( Auth::check() )
        <div class="header-bar-buttons">
            <div class="ui pointing dropdown">
                <i class="icon user"></i>
                {{ Auth::user()->name }}
                <i class="icon caret down"></i>
                <div class="menu">
                    <div class="item">
                        <a href="{{ url('doLogout') }}" class="inherit-color">
                            <i class="icon sign out"></i>
                            Log out
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
