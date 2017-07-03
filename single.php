<?php get_header()?>
<?php if(have_posts()):?><?php while(have_posts()):the_post();?><?php
    if ( has_post_thumbnail() ) {
        // the current post has a thumbnail
    } ?>
    <div id="main">
    <div id="wrapper" class="hfeed">
    <div class="top-img">
        <div class="topBarner " style="background-image: url(<?php the_post_thumbnail_url(); ?>);">

            <div class="container">
                <h1 class="entry-title"><?php the_title() ?></h1></div>
            <div id="mask"></div>
        </div>
    </div>
    <div class="container">

    <div class="single-content col-sm-12">
    <article id="post-<?php the_ID() ?>" class="hentry post publish category-wallpapper">
        <div class="entry-content" id="articleContent">
                <span class="tag">
                    <?php the_tags('',' ','');?></span>
            </div>
            <?php the_content();?>
        </div>
        <div class="share">
            <a id="qq" target="_blank" href="http://connect.qq.com/widget/shareqq/index.html?url=<?php the_permalink()?>&title=<?php the_title(); ?>&pics=<?php $full_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');echo $full_image_url[0];?>"><i class="fa fa-qq"></i></a>
            <a id="qqkj" target="_blank" href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=<?php the_permalink()?>&title=<?php the_title(); ?>&site=<?php bloginfo('name'); ?>/&pics=<?php $full_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');echo $full_image_url[0];?>"><i class="fa fa-star-o"></i></a>
            <a id="sina" target="_blank" href="http://service.weibo.com/share/share.php?url=<?php the_permalink()?>/&appkey=<?php the_title(); ?>/&title=<?php the_title(); ?>&pic=<?php $full_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');echo $full_image_url[0];?>"><i class="fa fa-weibo"></i></a>
            <a id="google" target="_blank" href="https://plus.google.com/share?url=<?php the_permalink()?>"><i class="fa fa-google-plus"></i></a>
        </div>

    </article>
    <!-- .post -->
<?php endwhile; ?>
<?php endif; ?>


    <!-- #comments --></div>
    <!-- #content -->

    </div>
    <!-- #container --></div>
<?php get_footer();?>