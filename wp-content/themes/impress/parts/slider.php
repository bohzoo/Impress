<div id="main-slider-box">
  <ul id="main-slider">
    <?php for( $i=1; $i<=4; $i++ ) : ?>
    <li style="background-image: url(<?php echo esc_url( get_field('mv-animation-0' . strval($i)) ); ?>);"></li>
    <?php endfor; ?>
  </ul>
</div>
