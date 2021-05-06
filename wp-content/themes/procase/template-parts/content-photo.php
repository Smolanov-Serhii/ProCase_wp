<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ProCase
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="delivery__header">
        <div class="delivery__header-img">
            <?php the_post_thumbnail('full');?>
        </div>
        <div class="delivery__header-content procase-container">
            <h1 class="delivery__header-title main-page__title">
                <?php the_field('zagolovok_v_shapku_fotogalerei')?>
            </h1>
            <div class="delivery__header-subtitle main-page__subtitle">
                <?php the_field('podzagolovok_v_shapku_fotogalerei')?>
            </div>
        </div>
    </header>

    <div class="entry-content procase-container">
        <?php
        the_content();
        ?>
    </div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
