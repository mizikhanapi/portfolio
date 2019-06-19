                <div class="filter-wrapper">
                    <ul class="filter-list">
                        <?php 
                        $args = array(
                            'orderby' => 'name',
                            'hide_empty'=> 0,
                        );
                        $categories = get_categories($args);
                        foreach ($categories as $item) : ?>
                            <li><button type="button" class="btn btn-small btn-outline filter-item" data-target="<?php echo $item->term_id;?>"><?php echo $item->name ;?></button></li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <div class="article-list">
                    <div class="row list-row">

                        <?php //$the_query = new WP_Query( 'posts_per_page=6', 'orderby=ASC' ); 
                            $args = array(
                                'post_type' => 'post',
                                'post_status' => 'publish',
                                'posts_per_page' => '12',
                                'order' => 'DESC',
                            );
                            $the_query = new WP_Query( $args );
                        ?>
                        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                        <?php get_template_part( 'template-parts/components-cards', get_post_format() ); ?>
                        <?php 
						endwhile;
						wp_reset_postdata();
					 ?>
                    </div>
                    <div class="row justify-content-md-center">
                        <div class="col-md-8">
                            <div class="article-list-action">
                                <button id="loadmore" class="btn btn-secondary btn-block">Show More</button>
                            </div>
                        </div>
                    </div>
                </div>
                
        <script>
            var ajax_nonce = '<?php echo wp_create_nonce("fetch_articles"); ?>';
        </script>