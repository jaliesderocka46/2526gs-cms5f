<aside class="sidebar">
    <?php if ( is_active_sidebar('main-sidebar') ) : ?>
        <?php dynamic_sidebar('main-sidebar'); ?>
    <?php else : ?>
        <div class="widget">
            <h3 class="widget-title">Contoh Widget</h3>
            <p>Tambahkan widget dari Dashboard > Appearance > Widgets.</p>
        </div>
    <?php endif; ?>
</aside>
