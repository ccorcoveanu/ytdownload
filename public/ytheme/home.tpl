{extends file='layout/main.tpl'}
{block name='content'}
    <div class="wrapper wrapper--main">
        <div class="hero__container hero__container--filter" style="">

        </div>

    </div>

    <div class="wrapper--app">
        <div class="wrapper--app__header">
            <div class="icon__container">

            </div>
            <div class="actual-icon__container">
                <a href="javascript:;" class="withripple js-search__button">
                    <i class="material-icons" class="js-open" data-action="search">fingerprint</i>
                </a>

            </div>

            <form class="searchbox" method="get" action="">
                <input type="text" class="searchbox__textfield js-searchbox__textfield" name="url" placeholder="Take a shot with a Youtube playlist" autocomplete="off" autofocus/>
            </form>
        </div>
        <div class="wrapper--app__content">
            <div class="youtube-items__container container">
                {include file='lists/youtube_items.tpl'}
            </div>

        </div>
    </div>
{/block}