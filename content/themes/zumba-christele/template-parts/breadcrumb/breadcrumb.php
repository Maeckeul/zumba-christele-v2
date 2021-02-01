<?php
if(have_posts()):
  while(have_posts()):
    the_post();
?>

<section class="breadcrumb">

        <div class="breadcrumb--title">
          <h2 class="breadcrum--title__content"><?php the_title(); ?></h2>
        </div>

        <div class="breadcrumb--way">
          <p class="breadcrumb--way__content">
            <a href="http://localhost/WordPress/Zumba-Christele-V2-WP/" class="link"><i class="fa fa-home" aria-hidden="true"></i></a>  >  <?php the_title(); ?>
          </p>
        </div>

</section>

<?php
  endwhile;
endif;