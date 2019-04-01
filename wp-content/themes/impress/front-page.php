<?php get_header(); ?>
<div id="top-mainvisual">
  <div id="top-mv-inner">
    <h2 id="top-mv-title"><span class="cardo">WordPress</span>テーマ<br><span class="cardo">Impress</span></h2>
  </div>
</div>

<section id="top-about-container" class="section">
  <div class="sec-box">
    <div class="content-width">
      <div class="sec-ttl-box">
        <h2 class="sec-ttl cardo">ABOUT</h2>
        <div class="sec-sub-ttl main-txt-color">私たちについて</div>
      </div>
      <div id="top-about-box">
        <div class="txt-box ffs">
          <p>下にあるカードのリストはflex-betweenクラスを使用しています。</p>
          <p>flex-betweenはjustify-contentにspace-betweenを使用しています。なので、このクラスを使用する場合はリストの数が決まっているときに使用します。</p>
        </div>
        <ul class="flex-between">
          <?php for($i=0; $i<4; $i++) : ?>
          <li>
            <a href="#" class="img-box"><img src="https://placehold.jp/300x200.png" alt="リンク"></a>
            <div class="txt-inner-box ffs">
              <p>ここではVue.jsの使用デモを使っています。</p>
              <p></p>
              <a href="#" style="display: block;">詳細を見る</a>
            </div>
          </li>
          <?php endfor; ?>
        </ul>
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>
