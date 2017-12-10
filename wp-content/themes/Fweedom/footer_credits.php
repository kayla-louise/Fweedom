<?php
/**
 * The template for displaying the footer credits
 *
 */
?>
<div id="footer__credits" class="footer__credits" <?php czr_fn_echo('element_attributes') ?>>
  <p class="czr-copyright">
    <span class="czr-copyright-text">&copy;&nbsp;<?php echo esc_attr( date('Y') ) ?>&nbsp;</span><a class="czr-copyright-link" href="<?php echo esc_url( home_url() ) ?>" title="<?php echo esc_attr( get_bloginfo() ) ?>"><?php echo esc_attr( get_bloginfo() ) ?></a><span class="czr-rights-text">&nbsp;&ndash;&nbsp;<?php _e( 'All rights reserved', 'customizr') ?></span>
  </p>
  <p class="czr-credits">
  		Site Created By: <a href="http://www.kayla-louise.com" target="_blank">Kayla Louise Web Solutions</a>
  </p>
</div>
