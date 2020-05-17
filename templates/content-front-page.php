<div class="video-background">
    <video preload="none" autoplay loop muted>
        <source type="video/mp4"
            src="https://gallant-perlman-80499b.netlify.app/video.mp4" />
            Your browser does not support the video tag.
    </video>
</div>

<div class="content-overlay content">
    <h1 class="h1 heading-overlay">
        <p><?php the_field('test'); ?></p>
    </h1>
    <div class="align-center play-button">
        <a href="https://www.youtube.com/watch?v=mJ9a3yaeIZ8&t=1s" target="_blank" class="icon-button accent prominent">
            <span class="material-icons">play_arrow</span>
        </a>
    </div>
    <?php get_template_part( 'templates/content', 'connexiones' ); ?>
    <section class="grid-layout-3 grid-layout-1--sm three-column">
        <div class="grid-item three-column-item">
            <div class="three-column-content">
                <div class="hashtag">#</div>
                <div class="text">comunicación<br>digital</div>
            </div>
            <img class="icon" src="https://gallant-perlman-80499b.netlify.app/1.svg">
        </div>
        <div class="grid-item three-column-item">
            <div class="three-column-content">
                <div class="hashtag">#</div>
                <div class="text">inboundmarketing<br>politico</div>
            </div>
            <img class="icon" src="https://gallant-perlman-80499b.netlify.app/2.svg">
        </div>
        <div class="grid-item three-column-item">
            <div class="three-column-content">
                <div class="hashtag">#</div>
                <div class="text">data<br>analytics</div>
            </div>
            <img class="icon" src="https://gallant-perlman-80499b.netlify.app/3.svg">
        </div>
    </section>
    <?php  include get_template_directory() . '/templates/footer.php'; ?>
</div>
