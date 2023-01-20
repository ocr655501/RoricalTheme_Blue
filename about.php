<?php
/**
 * 关于
 *
 * @package custom
 */
 ?>
 <?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

	<script>page = 2</script>
<main class="profile-page">
    <section class="section-profile-cover section-shaped" style="margin: 85px 0;">
      <!-- Circles background -->
      <div class="shape shape-style-1 alpha-4 shape-background banner">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
      <!-- SVG separator -->
    </section>
    
    <section class="section">
      <div class="">
        <div class="card card-profile">
          <div class="px-4">
    		<div class="text-center mt-5" style="margin: 50px auto;">
              <h2 class="display-2"><?php $this->title() ?></h2>
              <br>
              <div class="h6 font-weight-300"><i class="ni location_pin mr-2"></i><a href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a> <time style="margin:auto 10px;" datetime="<?php $this->date('c'); ?>"><?php $this->date(); ?></time></div></div>
            <div class="row justify-content-center">
              <div class="col-lg-6">
                <div class="card-profile-stats d-flex justify-content-center">
                  <div>
                    <span class="heading"><?php echo ViewsCounter_Plugin::getViews(); ?></span>
                    <span class="description">浏览</span>
                  </div>
                  <div>
                    <span class="heading"><?php art_count($this->cid); ?></span>
                    <span class="description">字数</span>
                  </div>
                  <div>
                    <span class="heading"><?php $this->commentsNum('%d'); ?></span>
                    <span class="description">评论</span>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="mt-5 py-5 border-top">
              <div class="row justify-content-center">
                <div class="col-lg-9 breakword content">
                    <div id="list">
                        <section class="widget">
                	<ul>
                		<?php Typecho_Widget::widget('Widget_Stat')->to($stat); ?>
                		<li><strong><?php _e('网站数据统计：'); ?></strong></li>
                		<li><p><?php _e('文章总数：'); ?><?php $stat->publishedPostsNum() ?>
                		<br><?php _e('评论总数：'); ?><?php $stat->publishedCommentsNum() ?>
                		<br><?php _e('页面总数：'); ?><?php echo $stat->publishedPagesNum + $stat->publishedPostsNum; ?>
                		<br><?php _e('累计浏览：'); ?><?php echo theAllViews(); ?>
                		</p></li>
                        <?php $this->content(); ?>
                    </div>
                </div>
              </div>
            </div>
            <div class="border-top text-center">
            	<br>
            </div>
            
          </div>
        </div>
      </div>
    </section>
    <script>
    
    </script>
    <?php $this->need('comments.php'); ?>
  </main>

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
