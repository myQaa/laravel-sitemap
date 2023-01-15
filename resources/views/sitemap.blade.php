<?= '<'.'?'.'xml version="1.0" encoding="UTF-8"?>'."\n"; ?>
<urlset xmlns="https://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="https://www.w3.org/1999/xhtml" xmlns:image="https://www.google.com/schemas/sitemap-image/1.1">
@foreach($tags as $tag)
    @include('laravel-sitemap::' . $tag->getType())
@endforeach
</urlset>
