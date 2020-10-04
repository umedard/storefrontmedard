<div class="content-page">
            <div class="content-archive__img" style="background-image: url('<?php bloginfo('template_url') ?>/dist/images/coffee.jpg'); " ></div>
            <div>
                <p class="content-single__title"><?php the_title()?></p>

             
                <div class="content-single__postinfo">
                    <span class="content-archive__icon_author">by <?php the_author_link();  ?></span>
                    <span class="content-archive__icon_date"><?php the_date() ?></span>
                </div>

                <div class="content-single__contentwrapper"><?php the_content() ?></div>
                <div class="content-single__categories">
                    <?php 
                    
                    function show_categories() {
                        $categories = get_the_category();
                        if ( ! empty( $categories ) ) {
                            echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
                        }
                    }
                    
                    function show_tags()
                    {
                        $post_tags = get_the_tags();
                        $separator = ' , ';
                        if (!empty($post_tags)) {
                            foreach ($post_tags as $tag) {
                                $output .= '<a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a>' . $separator;
                            }
                            echo trim($output, $separator);
                        }
                    }
                    ?>

                    <span>Posted in </span> <?php show_categories(); ?>
                    <span class="content-single__separator"> &#8226; </span>
                    <span>Tagged </span> <?php show_tags(); ?>
                </div>
            </div>
</div>