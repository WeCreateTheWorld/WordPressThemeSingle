<article class="block--list<?php if(is_sticky()) echo ' sticky';?>">
    <header class="u-textAlignCenter">
    <h2 class="block-title post-featured" itemprop="headline">
        <a href="<?php the_permalink();?>"><?php the_title();?></a>
    </h2>
    <div class="block-postMetaWrap">
       
    </div>
</header>
    <div class="block-snippet grap" itemprop="about">
        <?php if(has_post_thumbnail()):?>
            <p class="with-img"><?php the_post_thumbnail( 'full' ); ?></p>
            <?php if( post_password_required()) : ?>
                <?php the_content('阅读更多>>');?>
            <?php else : ?>
                <?php if( has_excerpt() ) : ?>
                    <p><?php the_excerpt();?></p>
                <?php else: ?>
                    <p><?php echo mb_strimwidth(strip_shortcodes(strip_tags(apply_filters('the_content', $post->post_content))), 0, 220,"...");?></p>
                <?php endif;?>
                <p><a class="more-link" href="<?php the_permalink();?>" rel="nofollow">阅读更多>></a></p>
            <?php endif;?>
        <?php else : ?>
            <?php the_content('阅读更多>>');?>
        <?php endif;?>
    </div>
    <div class="block-footer">
        By <?php the_author();?> . <time>On <?php  echo '  '. get_the_date() . ' ' ;?></time>.  In <?php the_category(',');?> . 
        <div class="block-footer-inner">
            <?php if(function_exists('wpl_get_like_count')) echo wpl_get_like_count(get_the_ID()) . ' ' . __( 'likes', 'puma' ) . ' . ';?> 
			<a  class="more-link" href="<?php the_permalink();?>#comments" >
				<?php echo get_comments_number();?> 
				<?php echo __( 'replies', 'puma' );?>.
			</a>
        </div>
    </div>
	
	
</article>