<?= get_header();?>

       

       

    <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
          <h3 class="pb-3 mb-4 font-italic border-bottom">
            Lastest Posts
          </h3>


          <?php if(have_posts()) : ?>

          <?php while(have_posts()) : the_post();?>

          <div class="blog-post">
            <h2 class="blog-post-title">
               <a href="<?= the_permalink();?>"><?= the_title();?></a>  
            </h2>
            <p class="blog-post-meta"><?= the_date();?> <?= the_time();?> by <a href="<?= get_author_posts_url(get_the_author_meta("ID"))?>"><?= get_the_author_meta("nickname");?></a></p>


              <?php if(has_post_thumbnail()):?>

              <div class="post-thumb">
                
                  <?= the_post_thumbnail();?>

              </div>


              <?php endif;?>

            <p><?=  the_excerpt(); // the_content();?></p>
            <hr>
             
          </div><!-- /.blog-post --> 

          <?php endwhile;?>

            
          <?php else: ?>

            <p><?php __("No Post Found.");?></p>

          <?php endif;?>

           

          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
          </nav>

        </div><!-- /.blog-main -->

        <aside class="col-md-4 blog-sidebar">
          
            <?php if(is_active_sidebar('sidebar')):?>
          
                <?php dynamic_sidebar('sidebar');?>
                
            <?php endif;?>
         
        </aside><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </main><!-- /.container -->

 <?= get_footer();?>   
