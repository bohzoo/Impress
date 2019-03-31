<?php get_header(); ?>
<div id="top-mainvisual">
  <div id="top-mv-inner">
    <h2 id="top-mv-title">WordPressテーマ<br>Impress</h2>
  </div>
</div>

<section id="top-about" class="section">
  <div class="sec-box">
    <div class="content-width">
      <div class="ttl-box animated">
        <h2 class="ttl"><span class="en">ABOUT</span></h2>
        <div class="sub-ttl"><span class="ja">私たちについて</span></div>
      </div>
      <div id="about-container">
        <div id="our-message" class="animated">
          <p>全ての開発は「感動」から始まる。<br>感動とは心の中にダイナミックな変化があった証拠。<br>感動したらひたすらそれに没頭せよ。</p>
          <p>How hard you can get hit, and keep moving forward.<br>How much you can take, and keep moving forward.</p>
        </div>
        <div class="btn-box more-btn pc-only">
          <a href="#" class="btn">+ MORE</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="top-business" class="section">
  <div class="sec-box">
    <div class="content-width">
      <div id="business-container" class="flex-box">
        <div id="business-left">
          <div class="ttl-box">
            <h2 class="ttl"><span class="en">BUSINESS</span></h2>
            <div class="sub-ttl"><span class="ja">事業案内</span></div>
          </div>
          <p>
            事業案内が入ります。事業案内が入ります。事業案内が入ります。
            事業案内が入ります。事業案内が入ります。事業案内が入ります。
            事業案内が入ります。事業案内が入ります。事業案内が入ります。
          </p>
          <p>
            事業案内が入ります。事業案内が入ります。事業案内が入ります。
            事業案内が入ります。事業案内が入ります。事業案内が入ります。
            事業案内が入ります。事業案内が入ります。事業案内が入ります。
          </p>
          <p>
            事業案内が入ります。事業案内が入ります。事業案内が入ります。
            事業案内が入ります。事業案内が入ります。事業案内が入ります。
            事業案内が入ります。事業案内が入ります。事業案内が入ります。
          </p>
        </div>
        <div id="business-right">
          <ul id="business-list" class="flex-box">
            <li style="background-image: url(https://placehold.jp/300x300.png);">
              <a href="#">
                <h3>事業案内</h3>
              </a>
            </li>
            <li style="background-image: url(https://placehold.jp/fa0808/ffffff/300x300.png);">
              <a href="#">
                <h3>事業案内</h3>
              </a>
            </li>
            <li style="background-image: url(https://placehold.jp/0818fa/ffffff/150x150.png);">
              <a href="#">
                <h3>事業案内</h3>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="top-item" class="section">
  <div class="sec-box">
    <div class="content-width">
      <div class="ttl-box">
        <h2 class="ttl"><span class="en">ITEM</span></h2>
        <div class="sub-ttl"><span class="ja">商品一覧</span></div>
      </div>
      <div id="item-container">
        <div class="item-list-box">
          <ul class="flex-box">
            <?php for($i=0; $i<4; $i++) : ?>
            <li class="heightline animated">
              <a href="#">
                <div class="img-box"><img src="https://placehold.jp/500x500.png" alt=""></div>
                <h3><span>コシヒカリ</span></h3>
                <p class="ffs">祇園精舎の鐘の声、諸行無常の響きあり。沙羅双樹の花の色、盛者必衰の理を表す。</p>
              </a>
            </li>
            <?php endfor; ?>
          </ul>
        </div>
        <div class="btn-box more-btn pc-only">
          <a href="#" class="btn">+ more</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="top-blog" class="section">
  <div class="sec-box">
    <div class="content-width">
      <div class="ttl-box">
        <h2 class="ttl"><span class="en">BLOG</span></h2>
        <div class="sub-ttl"><span class="ja">スタッフブログ</span></div>
      </div>
      <div id="blog-container">
        <div class="item-list-box">
          <ul class="blog-list flex-box">
            <?php
            $args = array(
              'post_type' => 'post',
              'posts_per_page' => 3,
            );
            $posts = get_posts( $args );
            ?>
            <?php if( $posts ) : ?>
            <?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
            <li class="blog-item box-shadow diagonal-float">
              <a href="#"><div class="img-box"><img src="https://placehold.jp/300x240.png" alt=""></div></a>
              <div class="blog-info-box">
                <div class="blog-info flex-box">
                  <div class="date"><span><time datetime="<?php the_time('Y.m.d'); ?>"><?php the_time('Y.m.d'); ?></time></span></div>
                  <div class="category"><?php the_category(); ?></div>
                </div>
                <div class="blog-title heightLine">
                  <div class="title"><a href="<?php the_permalink(); ?>"><span><?php the_short_title(26); ?></span></a></div>
                </div>
              </div>
            </li>
            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>
          </ul>
        </div>
        <div class="btn-box more-btn pc-only">
          <a href="#" class="btn">+ more</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="top-news" class="section">
  <div class="sec-box">
    <div class="content-width">
      <div class="ttl-box">
        <h2 class="ttl"><span class="en">NEWS</span></h2>
        <div class="sub-ttl"><span class="ja">新着情報</span></div>
      </div>
      <div id="news-container">
        <ul>
          <?php for($i=0; $i<5; $i++) : ?>
          <li class="flex-box animated">
            <div class="date"><span><time datetime="">2019.00.00</time></span></div>
            <div class="category"><a href="#"><span>新着情報</span></a></div>
            <div class="title"><a href="#"><span>Hellow World!!!Hellow World!!!Hellow World!!!</span></a></div>
          </li>
          <?php endfor; ?>
        </ul>
        <div class="btn-box more-btn pc-only">
          <a href="#" class="btn">+ more</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="top-contact" class="section">
  <div class="sec-box">
    <div class="content-width">
      <div class="ttl-box">
        <h2 class="ttl"><span class="en">CONTACT</span></h2>
        <div class="sub-ttl"><span class="ja">お問い合わせ</span></div>
      </div>
      <div id="contact-container">
        <div class="contact-list-box flex-box">
          <div class="contact-box box-shadow heightLine">
            <h3>電話でのお問い合わせ</h3>
            <a href="tel:09029179340" class="tel">TEL.090-2918-9340</a>
            <p class="office-hours"><span>受付時間 09:00~18:00（土日を除く）</span></p>
          </div>
          <div class="contact-box box-shadow heightLine">
            <h3>メールでのお問い合わせ</h3>
            <div class="btn-box more-btn">
              <a href="#" class="btn">MAIL FORM</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
