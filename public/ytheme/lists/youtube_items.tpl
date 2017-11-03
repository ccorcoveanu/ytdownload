{foreach name='youtube_items' item=item from=$youtube_items}
    <article class="youtube-item checked" data-id="{$item->snippet->resourceId->videoId}"
        data-position="{$item->snippet->position}">
        <div class="youtube-item__image img-raised">
            <img src="{$item->snippet->thumbnails->high->url}" class="" />
        </div>

        <div class="youtube-item__text">
            <h1>{$item->snippet->title}</h1>
        </div>
        <div class="checkbox-overlay">
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="video-{$item->snippet->position}" checked>
                </label>
            </div>
        </div>
    </article>
{/foreach}