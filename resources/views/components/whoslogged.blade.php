@if(Auth::guard('web')->check())
    <p class="text-success">
        You are Logged in as a <strong>USER</strong>.
    </p>
@else
    <p class="text-danger">
        You are Logged out as a <strong>USER</strong>.
    </p>
@endif

@if(Auth::guard('volunteer')->check())
    <p class="text-success">
        You are Logged in as a <strong>VOLUNTEER</strong>.
    </p>
@else
    <p class="text-danger">
        You are Logged out as a <strong>VOLUNTEER</strong>.
    </p>
@endif

@if(Auth::guard('boardmember')->check())
    <p class="text-success">
        You are Logged in as a <strong>BOARDMEMBER</strong>.
    </p>
@else
    <p class="text-danger">
        You are Logged out as a <strong>BOARDMEMBER</strong>.
    </p>
@endif

