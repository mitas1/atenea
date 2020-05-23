<div class="video-background">
    <video preload="none" autoplay playsinline loop muted>
        <source type="video/mp4"
            src="https://gallant-perlman-80499b.netlify.app/video.mp4" />
            Your browser does not support the video tag.
    </video>
</div>

<div class="content-overlay content">
    <h1 class="h1 heading-overlay">
        <p>Conecta mejor con tu audiencia<br>utilizando audiovisuales</p>
    </h1>
    <div class="align-center play-button">
        <a href="https://www.youtube.com/watch?v=mJ9a3yaeIZ8&t=1s" target="_blank" class="icon-button accent prominent">
            <span class="material-icons">play_arrow</span>
        </a>
    </div>
    <?php get_template_part( 'templates/content', 'connexiones' ); ?>
    <section class="grid-layout-3 grid-layout-1--sm three-column">
        <a href="<?php echo get_option('column1_link') ?>"
            class="grid-item three-column-item">
            <div class="three-column-content">
                <div class="hashtag">#</div>
                <div class="text">
                    <?php echo get_option('column1_label', DEFAULTS['column1_label']) ?>
                </div>
            </div>
            <img class="icon" src="https://gallant-perlman-80499b.netlify.app/1.svg">
        </a>
        <a href="<?php echo get_option('column2_link') ?>"
            class="grid-item three-column-item">
            <div class="three-column-content">
                <div class="hashtag">#</div>
                <div class="text">
                    <?php echo get_option('column2_label', DEFAULTS['column2_label']) ?>
                </div>
            </div>
            <img class="icon" src="https://gallant-perlman-80499b.netlify.app/2.svg">
        </a>
        <a href="<?php echo get_option('column3_link') ?>"
            class="grid-item three-column-item">
            <div class="three-column-content">
                <div class="hashtag">#</div>
                <div class="text">
                    <?php echo get_option('column3_label', DEFAULTS['column3_label']) ?>
                </div>
            </div>
            <img class="icon" src="https://gallant-perlman-80499b.netlify.app/3.svg">
        </a>
    </section>
    <?php  include get_template_directory() . '/templates/footer.php'; ?>
</div>
