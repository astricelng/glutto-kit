{{--
    @name Text
    @desc The text component for regular styled text from Bard.
--}}

<!-- /components/_text.blade.php -->


    @if ($article['type'] == 'paragraph')
        <p> {{ $content['text'] }} </p>
    @elseif($article['type'] == 'heading')
        @switch($article['attrs']['level'])
            @case(2)
                <h2> {{ $content['text'] }} </h2>
                @break
            @case(3)
                <h3> {{ $content['text'] }} </h3>
                @break
            @default
                <h1> {{ $content['text'] }} </h1>
        @endswitch
    @endif

<!-- End: /components/_text.blade.php -->
