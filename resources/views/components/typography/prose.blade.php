{{--
    @name Prose
    @desc The typography prose partial to render a prose object with `class` attribute.
    @param as The wrapping element. Defaults to `article`.
    @param class Add custom CSS classes.
--}}

<!-- /typography/_prose.blade.php -->
<article
    class="
prose
prose-a:underline
prose-a:decoration-primary
prose-a:decoration-2
hover:prose-a:text-primary
focus:prose-a:outline-none
focus-visible:prose-a:ring
focus-visible:prose-a:ring-primary
focus-visible:prose-a:rounded-sm
prose-figure:my-0
prose-pre:whitespace-pre-wrap
max-w-none {{ $class ?? '' }}"
>
    {{ $slot }}
</article>
<!-- End: /typography/_prose.blade.php -->
