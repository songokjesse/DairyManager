<div class="col-md-3">
    <div class="card">
        <div class="card-header">
            Sidebar
        </div>

        <div class="card-body">
            <ul >
                {{--<li role="presentation">--}}
                    {{--<a href="{{ url('/home') }}">--}}
                        {{--Dashboard--}}
                    {{--</a>--}}
                {{--</li>--}}
                <li>
                    <a href="{{ url('/users') }}">
                        Users
                    </a>
                </li>
                <li>
                    <a href="{{ url('/animals') }}">
                        Animals
                    </a>
                </li>
                <li>
                    <a href="{{ url('/production') }}">
                        Production
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
