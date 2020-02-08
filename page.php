<?= get_header();?>


    <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
          


          <?php if(have_posts()) : ?>

          <?php while(have_posts()) : the_post();?>

          <div class="blog-post">
            <h2 class="blog-post-title">
                <?= the_title();?> 
            </h2>
            
 

            <p><?=   the_content();?></p>
            <hr>
             
          </div><!-- /.blog-post --> 

          <?php endwhile;?>

            
          <?php else: ?>

            <p><?php __("No Page Found.");?></p>

          <?php endif;?>

        

        </div><!-- /.blog-main -->

        <aside class="col-md-4 blog-sidebar">
          
            <?php if(is_active_sidebar('sidebar')):?>
          
                <?php dynamic_sidebar('sidebar');?>
                
            <?php endif;?>
         
        </aside><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </main><!-- /.container -->

 <?= get_footer();?>   
