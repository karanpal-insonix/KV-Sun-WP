</div>
<!--/#blocks-wrapper-->
</div>
<!--/#Wrapper-container -->
</div>
<!--/#Wrapper -->
<?php global $bresponZive_tpcrn_data; if(isset($bresponZive_tpcrn_data['shw_footer_widg'])){if($bresponZive_tpcrn_data['shw_footer_widg'] == '1'){ ?>
<!--#footer-blocks-->
<div id="footer-blocks" class="container clearfix">
  <div class="fb-container clearfix">
    <div class="footer-block1">
      <?php dynamic_sidebar('Footer Block 1');?>
    </div>
    <div class="footer-block2">
      <?php dynamic_sidebar('Footer Block 2');?>
    </div>
    <div class="footer-block3">
      <?php dynamic_sidebar('Footer Block 3');?>
    </div>
    <div class="footer-block4">
      <?php dynamic_sidebar('Footer Block 4');?>
    </div>
  </div>
</div>
<!--/#footer-blocks-->
<?php } }?>
<!-- #footer-->
<div id="footer" class="clearfix">
  <div class="foot-wrap container">
    <p class="copyright"><?php echo bloginfo( 'name' ); ?>&nbsp; &copy;&nbsp;<?php echo date("Y");?></p>
   </div>
</div>
<!--/#Footer -->
<?php wp_footer(); ?>
 <script  src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>
</body></html>
