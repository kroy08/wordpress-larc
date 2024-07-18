<?php get_header()?>

<section class="hero">
      <div class="container">
                    <?php
                    $single = new WP_Query(array(
                        'post_type' => 'post',
                        'posts_per_page' => 1,
                        'meta_key' => 'grouping',
                        'meta_value' => 'single'
                    ))
                ?>
                <?php if($single->have_posts()) : while($single->have_posts()) : $single->the_post()?>
        <div class="hero__grid">

                    <?php
                    if(has_post_thumbnail()) {
                        the_post_thumbnail();
                    }
                    ?>

          <div class="hero__content">
            <small>Trending News</small>
            <h1>
              <?php the_title()?>
            </h1>
          </div>
        </div>
      </div>
    </section>
            <?php
                endwhile;
            else:
                echo "no post";
            endif;
              wp_reset_postdata();
                ?>

    <section class="blog py--2">
      <div class="container">
        <div class="blog__story">
          <div class="blog__grid">
          <?php
                    $singlep = new WP_Query(array(
                        'post_type' => 'post',
                        'posts_per_page' => 1,
                        'meta_key' => 'grouping',
                        'meta_value' => 'single-p-1'
                    ))
                ?>
                <?php if($singlep->have_posts()) : while($singlep->have_posts()) : $singlep->the_post()?>
            <article>
              <h3>
                <?php the_title()?>
              </h3>
              <p>
                <?php the_content()?>
              </p>

            </article>
            <?php
                endwhile;
            else:
                echo "no post";
            endif;
              wp_reset_postdata();
                ?>

            <div class="blog__info">
              <ul>
                <li>Published: <span>Feb 21, 2022</span></li>
                <li>Author: <span> Awesome Me</span></li>
                <li>Category: <span>Trending</span></li>
                <li>Tag:<span>Fashion, Hot, Fresh</span></li>
                <li>Time: <span>12 mins</span></li>
              </ul>
              <p>Share this Article</p>
              <ul class="icons d--flex">
                <li class="mr--1">
                  <a href="#"><i class="fab fa-facebook-square"></i></a>
                </li>
                <li class="mr--1">
                  <a href="#"><i class="fab fa-twitter-square"></i></a>
                </li>
                <li class="mr--1">
                  <a href="#"><i class="fab fa-instagram-square"></i></a>
                </li>
                <li class="mr--1">
                  <a href="#"><i class="fab fa-youtube"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="related py--5">
      <div class="container">
        <h2 class="block__header">More Related Articles</h2>
        <div class="related__grid">
          <article class="card card--md related">
            <img
              src="https://source.unsplash.com/random/500x500?fashion"
              alt=""
            />
            <ul class="card__info">
              <li>
                <span class="date">Feb 11</span>
                <span class="dot"></span>
                <span class="time">12 mins</span>
              </li>
              <li>By: Awesome Me</li>
            </ul>
            <h2>Lorem ipsum dolor sit amet, consectetur expedita deleniti</h2>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit ea
              est dolorem nam, quibusdam provident amet enim cum iusto, velit
              quidem facilis consequatur laborum blanditiis, atque ex eius
              dignissimos eaque! Eius temporibus quibusdam neque et veritatis
              sequi, id, tempore ad numquam cupiditate totam praesentium
              aspernatur.
            </p>
            <a href="#">Read More</a>
          </article>

          <article class="card card--md related">
            <img
              src="https://source.unsplash.com/random/500x501?fashion"
              alt=""
            />
            <ul class="card__info">
              <li>
                <span class="date">Feb 11</span>
                <span class="dot"></span>
                <span class="time">12 mins</span>
              </li>
              <li>By: Awesome Me</li>
            </ul>
            <h2>
              Lorem Consectetur adipisicing elit. Animi, expedita deleniti
            </h2>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit ea
              est dolorem nam, quibusdam provident amet enim cum iusto, velit
              quidem facilis consequatur laborum blanditiis, atque ex eius
              dignissimos eaque! Eius temporibus quibusdam neque et veritatis
              sequi, id, tempore ad numquam cupiditate totam praesentium
              aspernatur.
            </p>
            <a href="#">Read More</a>
          </article>

          <article class="card card--md related">
            <img
              src="https://source.unsplash.com/random/500x502?fashion"
              alt=""
            />
            <ul class="card__info">
              <li>
                <span class="date">Feb 11</span>
                <span class="dot"></span>
                <span class="time">12 mins</span>
              </li>
              <li>By: Awesome Me</li>
            </ul>
            <h2>Lorem ipsum dolor sit ameti</h2>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit ea
              est dolorem nam, quibusdam provident amet enim cum iusto, velit
              quidem facilis consequatur laborum blanditiis, atque ex eius ,
              tempore ad numquam cupiditate totam praesentium aspernatur.
            </p>
            <a href="#">Read More</a>
          </article>
        </div>
      </div>
    </section>

    <section class="subscribe">
      <div class="container">
        <div class="subscribe__wrapper">
          <h2>Subscribe to get more</h2>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque,
            tempore magni voluptate quam illum id ad temporibus itaque fuga
            necessitatibus
          </p>

          <ul class="d--flex justify--center">
            <li class="mx--1">
              <a href="#" class="btn btn--light">Subscribe Now</a>
            </li>
            <li class="mx--1">
              <a href="#" class="btn btn--outline">Leader More</a>
            </li>
          </ul>
        </div>
      </div>
    </section>

<?php get_footer()?>