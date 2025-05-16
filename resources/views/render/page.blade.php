@extends($layout)

@section('content')

    @foreach($content as $block)

        @php
            $view = $template . "::blocks." . data_get($block, 'type');
            $data = data_get($block, 'data');

            if (! View::exists($view)) {
                continue;
            }
        @endphp

        @include($view, $data)

    @endforeach

@endsection
