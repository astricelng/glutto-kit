{{--
@name Article
@desc The article page builder block. It extends the prose typography partial.
@set page.page_builder.article
--}}
<!-- /page_builder/_article.blade.php -->
<section class="fluid-container grid grid-cols-12">
    <x-typography.prose class="contents">

        @foreach($builder['article'] as $article)
            @if ($article['type'] == 'set')

            @else
                @if ($article['type'] == 'heading' || $article['type'] == 'paragraph')
                    @foreach($article['content'] as $content)
                        <x-dynamic-component :component="'_'.$content['type']" :content="$content" :article="$article" />
                    @endforeach
                @endif
            @endif

        @endforeach
    </x-typography.prose>
</section>
<!-- End: /page_builder/_article.blade.php -->
