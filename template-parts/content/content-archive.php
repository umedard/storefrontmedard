<div class="arch">
            <div class="arch__text">
                <div><span class="arch__icon_date"><?php the_date() ?></span><span class="arch__icon_category">
                    <?php 
                        $category = get_the_category();
                        if ( $category[0] ) {
                            echo '<a class="greylink" href="' . get_category_link( $category[0]->term_id ) . '">' . $category[0]->cat_name . '</a>';
                        }
                    ?>
                
                </span></div>
                <div class="arch__title"><?php echo '<a href="' . get_permalink() . '">' . get_the_title() . '</a>' ?></div>
                <div><span class="arch__icon_author">by <?php the_author_link();  ?></span></div>
                <div><?php the_excerpt() ?></div>
                <div class="arch__more"><a href="<?php echo get_permalink() ?>">Read More </a></div>
               
            </div>
            <div class="arch__img" style="background-image: url('<?php bloginfo('template_url') ?>/dist/images/coffee.jpg'); " ></div>
</div>