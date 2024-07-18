<?php get_header()?>

<section class="latest ">
        <div class="container">
            <div class="latest__grid">
            <?php
                    $main = new WP_Query(array(
                        'post_type' => 'post',
                        'posts_per_page' => 1,
                        'meta_key' => 'grouping',
                        'meta_value' => 'banner-main'
                    ))
                ?>
                <?php if($main->have_posts()) : while($main->have_posts()) : $main->the_post()?>
                <div class="latest__main">
       
                    <article class="card card--md latest--md">
                    <?php
                    if(has_post_thumbnail()) {
                        the_post_thumbnail();
                    }
                ?>
                        <ul class="card__info">
                            <li>
                                <span class="date"><?php the_date()?></span>
                                <span class="dot"></span> 
                                <span class="time">12 mins</span> 
                            </li>
                            <li>
                               By: <?php echo get_the_author_meta('first_name')?> <?php echo get_the_author_meta('last_name')?>
                            </li>
                        </ul>
                        <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, expedita deleniti</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit ea est dolorem nam, quibusdam provident amet enim cum iusto, velit quidem facilis consequatur laborum blanditiis, atque ex eius dignissimos eaque! Eius temporibus quibusdam neque et veritatis sequi, id, tempore ad numquam cupiditate totam praesentium aspernatur.</p>
                    </article>
                    <?php
                endwhile;
            else:
                echo "no post";
            endif;
              wp_reset_postdata();
              ?>
                </div>
                <div class="latest__side">
                <?php
                    $sidemain = new WP_Query(array(
                        'post_type' => 'post',
                        'posts_per_page' => 1,
                        'meta_key' => 'grouping',
                        'meta_value' => 'side-main'
                    ))
                ?>
                <?php if($sidemain->have_posts()) : while($sidemain->have_posts()) : $sidemain->the_post()?>
                    <article class="card card--sm latest--sm">
                    <?php
                    if(has_post_thumbnail()) {
                        the_post_thumbnail();
                    }
                ?>
                        <ul class="card__info">
                            <li>
                                <span class="date"><?php echo get_the_date('M, j Y')?></span>
                                <span class="dot"></span> 
                                <span class="time">12 mins</span> 
                            </li>
                            <li>
                                By: <?php echo get_the_author_meta('first_name')?> <?php echo get_the_author_meta('last_name')?>
                            </li>
                        </ul>
                        <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, expedita deleniti</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit ea est dolorem nam, quibusdam provident amet enim cum iusto, velit quidem facilis consequatur laborum blanditiis.</p>
                    </article>
            <?php
                endwhile;
            else:
                echo "no post";
            endif;
              wp_reset_postdata();
            ?>

                <?php
                    $sidemain2 = new WP_Query(array(
                        'post_type' => 'post',
                        'posts_per_page' => 1,
                        'meta_key' => 'grouping',
                        'meta_value' => 'side-main2'
                    ))
                ?>
                <?php if($sidemain2->have_posts()) : while($sidemain2->have_posts()) : $sidemain2->the_post()?>
                    <article class="card card--sm latest--sm">
                    <?php
                    if(has_post_thumbnail()) {
                        the_post_thumbnail();
                    }
                    ?>
                        <ul class="card__info">
                            <li>
                                <span class="date"><?php echo get_the_date('M, j Y')?></span>
                                <span class="dot"></span> 
                                <span class="time">12 mins</span> 
                            </li>
                            <li>
                               By: <?php echo get_the_author_meta('first_name')?> <?php echo get_the_author_meta('last_name')?>
                            </li>
                        </ul>
                        <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, expedita deleniti</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit ea est dolorem nam, ad numquam cupiditate totam praesentium aspernatur.</p>
                    </article>
                    <?php
                endwhile;
            else:
                echo "no post";
            endif;
              wp_reset_postdata();
            ?>
                </div>
            </div>
        </div>
    </section>

    <section class="trending py--10">
        <div class="container">
            <h2 class="block__header align--left">Hot Trending Arcticle</h2>

            <?php $trending =  new WP_Query(array(
                'post_type' => 'post',
                'post_per_page' => 3,
                'meta_query' => array(array(
                    'key' =>  'grouping',
                    'value' => "banner2",
                    'compare' => "="
                )),
            ))?>

        <?php if($trending->have_posts()) : while($trending->have_posts()) : $trending->the_post()  ?>
            <div class="trending__card card card--full">
                <ul class="card__info--full">
                    <li><small>FASHION</small></li>
                    <li><span><?php echo get_the_date('m.d.y')?></span>  <span>by: <?php echo get_the_author_meta('first_name')?> <?php echo get_the_author_meta('last_name')?></span></li>
                </ul>
                <h3><?php the_title()?></h3>
                     <?php if(has_post_thumbnail()) {
                    the_post_thumbnail('', array(
                        'alt' => get_the_title()
                    ));
                }
                 ?>
            </div>
            <?php
                endwhile;
            else:
                echo "no post";
            endif;
              wp_reset_postdata();
            ?>
        </div>
    </section>

    <section class="story py--5">
        <div class="container">
            <h2 class="block__header align--center">The Latest Stories</h2>

            <div class="story__grid">
            <?php
                    $latest1 = new WP_Query(array(
                        'post_type' => 'post',
                        'posts_per_page' => 1,
                        'meta_key' => 'grouping',
                        'meta_value' => 'latest-1'
                    ))
                ?>
                <?php if($latest1->have_posts()) : while($latest1->have_posts()) : $latest1->the_post()?>
                <article class="card card--xs story-a"> 
                <?php
                    if(has_post_thumbnail()) {
                        the_post_thumbnail();
                    }
                    ?>
                    <ul class="card__info">
                        <li>
                            <span class="date"><?php echo get_the_date('M, j')?></span>
                            <span class="dot"></span> 
                            <span class="time">12 mins</span> 
                        </li>
                        <li>
                            By: <?php echo get_the_author_meta('first_name')?> <?php echo get_the_author_meta('last_name')?>
                        </li>
                    </ul>
                    <h4><?php the_title()?></h4>
                
                </article>
                <?php
                endwhile;
            else:
                echo "no post";
            endif;
              wp_reset_postdata();
                ?>

                <?php
                    $latest2 = new WP_Query(array(
                        'post_type' => 'post',
                        'posts_per_page' => 1,
                        'meta_key' => 'grouping',
                        'meta_value' => 'latest-2'
                    ))
                ?>
                <?php if($latest2->have_posts()) : while($latest2->have_posts()) : $latest2->the_post()?>
                <article class="card card--xs story-b">
                <?php
                    if(has_post_thumbnail()) {
                        the_post_thumbnail();
                    }
                ?>
                    <ul class="card__info">
                        <li>
                            <span class="date"><?php echo get_the_date('M, j')?></span>
                            <span class="dot"></span> 
                            <span class="time">12 mins</span> 
                        </li>
                        <li>
                            By: <?php echo get_the_author_meta('first_name')?> <?php echo get_the_author_meta('last_name')?>
                        </li>
                    </ul>
                    <h4><?php the_title()?></h4>
                
                </article>
                <?php
                endwhile;
            else:
                echo "no post";
            endif;
              wp_reset_postdata();
                ?>

                <?php
                    $latest3 = new WP_Query(array(
                        'post_type' => 'post',
                        'posts_per_page' => 1,
                        'meta_key' => 'grouping',
                        'meta_value' => 'latest-3'
                    ))
                ?>
                <?php if($latest3->have_posts()) : while($latest3->have_posts()) : $latest3->the_post()?>
                <article class="card card--xs story-c">
                <?php
                    if(has_post_thumbnail()) {
                        the_post_thumbnail();
                    }
                ?>
                    <ul class="card__info">
                        <li>
                            <span class="date"><?php echo get_the_date('M, j')?></span>
                            <span class="dot"></span> 
                            <span class="time">12 mins</span> 
                        </li>
                        <li>
                            By: <?php echo get_the_author_meta('first_name')?> <?php echo get_the_author_meta('last_name')?>
                        </li>
                    </ul>
                    <h4><?php the_title()?></h4>
                
                </article>
                <?php
                endwhile;
            else:
                echo "no post";
            endif;
              wp_reset_postdata();
                ?>

                <?php
                    $latest4 = new WP_Query(array(
                        'post_type' => 'post',
                        'posts_per_page' => 1,
                        'meta_key' => 'grouping',
                        'meta_value' => 'latest-4'
                    ))
                ?>
                <?php if($latest4->have_posts()) : while($latest4->have_posts()) : $latest4->the_post()?>
                <article class="card card--xs story-d">
                <?php
                    if(has_post_thumbnail()) {
                        the_post_thumbnail();
                    }
                    ?>

                    <ul class="card__info">
                        <li>
                            <span class="date"><?php echo get_the_date('M, j')?></span>
                            <span class="dot"></span> 
                            <span class="time">12 mins</span> 
                        </li>
                        <li>
                            By: <?php echo get_the_author_meta('first_name')?> <?php echo get_the_author_meta('last_name')?>
                        </li>
                    </ul>
                    <h4><?php the_title()?></h4>
                
                </article>
                <?php
                endwhile;
            else:
                echo "no post";
            endif;
              wp_reset_postdata();
                ?>

                <?php
                    $latest5 = new WP_Query(array(
                        'post_type' => 'post',
                        'posts_per_page' => 1,
                        'meta_key' => 'grouping',
                        'meta_value' => 'latest-5'
                    ))
                ?>
                <?php if($latest5->have_posts()) : while($latest5->have_posts()) : $latest5->the_post()?>
                <article class="card card--xs story-e">
                <?php
                    if(has_post_thumbnail()) {
                        the_post_thumbnail();
                    }
                ?>

                    <ul class="card__info">
                        <li>
                            <span class="date"><?php echo get_the_date('M, j')?></span>
                            <span class="dot"></span> 
                            <span class="time">12 mins</span>   
                        </li>
                        <li>
                            By: <?php echo get_the_author_meta('first_name')?> <?php echo get_the_author_meta('last_name')?>
                        </li>
                    </ul>
                    <h4><?php the_title()?></h4>
                
                </article>
                <?php
                endwhile;
            else:
                echo "no post";
            endif;
              wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>

    <section class="subscribe">
        <div class="container">
            <div class="subscribe__wrapper">
                <h2>Subscribe to get more</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, tempore magni voluptate quam illum id ad temporibus itaque fuga necessitatibus</p>

                <ul class="d--flex justify--center">
                    <li class="mx--1"><a href="#" class="btn btn--light">Subscribe Now</a></li>
                    <li class="mx--1"><a href="#" class="btn btn--outline">Leader More</a></li>
                </ul>
            </div>
        </div>
    </section>
<?php get_footer()?>