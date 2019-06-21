<?php $category = get_the_category(); ?>
<div class="col-md-4 article-col <?php echo $category[0]->slug; ?>">
<?php 
				$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
			?>    
<div class="article-card" style="background-image:url('<?php echo $featured_img_url; ?>');">
        <div class="detail">
            <!-- <ul class="meta caption grey">
                <li class="date"><?php// echo get_the_date('d.m.Y'); ?></li>
                <li class="category"><?php// echo $category[0]->cat_name; ?></li>
            </ul> -->
            <div class="detail-content">
                <h5 class="title blue"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                <div class="text">
                    <a href="<?php the_permalink(); ?>"><?php the_excerpt(5); ?></a>
                </div>
            </div>
        </div>
    </div>
</div>