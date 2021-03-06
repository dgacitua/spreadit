<div id="header-nav">
    <div class="align-bottom">
        @if (!isset($section->multi_spreadit))
        <h2 class="section-title"><a href="{{ URL::to('/s/' . $section->title) }}">{{ $section->title }}</a></h2>
        <div class="section-points">
            <a href="/vote/section/{{ $section->id }}/up" {{ $bubbleText }} class="vote {{ $bubbleClasses }} {{ $upvoteClasses }}" data-id="{{ $section->id }}" data-type="section" data-updown="up"><span class="voteiconup"></span></a>
            <a href="/vote/section/{{ $section->id }}/down" {{ $bubbleText }} class="vote {{ $bubbleClasses }} {{ $downvoteClasses }}" data-id="{{ $section->id }}" data-type="section" data-updown="down"><span class="voteicondown"></span></a>
        </div>
        @endif

        <ul class="nav nav-pills">
            <li {{ $sort_highlight == 'new' ? 'class="active"' : ''}}><a role="button" href="/s/{{ $section->title }}/new">New</a></li>
            <li {{ $sort_highlight == 'hot' ? 'class="active"' : ''}}><a role="button" href="/s/{{ $section->title }}/hot">Hot</a></li>
            <li class="{{ $sort_highlight == 'top' ? 'active' : ''}} dropdown">
                <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#">Top <b class="caret"></b></a>
                <ul id="menu-hot-listing" class="dropdown-menu" role="menu">
                    <li {{ $sort_highlight == 'top' && $sort_timeframe_highlight == 'day' ? 'class="active"' : '' }} role="presentation"><a role="menuitem" tabindex="-1" href="/s/{{ $section->title }}/top/day">Day</a></li>
                    <li {{ $sort_highlight == 'top' && $sort_timeframe_highlight == 'week' ? 'class="active"' : '' }} role="presentation"><a role="menuitem" tabindex="-1" href="/s/{{ $section->title }}/top/week">Week</a></li>
                    <li {{ $sort_highlight == 'top' && $sort_timeframe_highlight == 'month' ? 'class="active"' : '' }} role="presentation"><a role="menuitem" tabindex="-1" href="/s/{{ $section->title }}/top/month">Month</a></li>
                    <li {{ $sort_highlight == 'top' && $sort_timeframe_highlight == 'year' ? 'class="active"' : '' }} role="presentation"><a role="menuitem" tabindex="-1" href="/s/{{ $section->title }}/top/year">Year</a></li>
                    <li {{ $sort_highlight == 'top' && $sort_timeframe_highlight == 'forever' ? 'class="active"' : '' }} role="presentation"><a role="menuitem" tabindex="-1" href="/s/{{ $section->title }}/top/forever">Forever</a></li>
                </ul>
            </li>
            <li class="{{ $sort_highlight == 'controversial' ? 'active' : '' }} dropdown">
                <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#">Controversial <b class="caret"></b></a>
                <ul id="menu-controversial-listing" class="dropdown-menu" role="menu">
                    <li {{ $sort_highlight == 'controversial' && $sort_timeframe_highlight == 'day' ? 'class="active"' : '' }} role="presentation"><a role="menuitem" tabindex="-1" href="/s/{{ $section->title }}/controversial/day">Day</a></li>
                    <li {{ $sort_highlight == 'controversial' && $sort_timeframe_highlight == 'week' ? 'class="active"' : '' }} role="presentation"><a role="menuitem" tabindex="-1" href="/s/{{ $section->title }}/controversial/week">Week</a></li>
                    <li {{ $sort_highlight == 'controversial' && $sort_timeframe_highlight == 'month' ? 'class="active"' : '' }} role="presentation"><a role="menuitem" tabindex="-1" href="/s/{{ $section->title }}/controversial/month">Month</a></li>
                    <li {{ $sort_highlight == 'controversial' && $sort_timeframe_highlight == 'year' ? 'class="active"' : '' }} role="presentation"><a role="menuitem" tabindex="-1" href="/s/{{ $section->title }}/controversial/year">Year</a></li>
                    <li {{ $sort_highlight == 'controversial' && $sort_timeframe_highlight == 'forever' ? 'class="active"' : '' }} role="presentation"><a role="menuitem" tabindex="-1" href="/s/{{ $section->title }}/controversial/forever">Forever</a></li>
                </ul>
            </li>
            @if (isset($section->title))
            <li {{ $sort_highlight == 'add' ? 'class="active"' : '' }}><a role="button" href="/s/{{ $section->title }}/add">add post</a></li>
            @endif
        </ul>
        @include ('layout.nav.user_actions')
    </div>
</div>
