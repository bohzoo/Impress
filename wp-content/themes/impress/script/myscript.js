/* = viewportを設定する
-------------------------------------------------------------- */
$(function(){
	spView = 'width=480';
	pcView = 'width=1400';

	if(navigator.userAgent.indexOf('iPhone') > 0 || navigator.userAgent.indexOf('iPod') > 0 || (navigator.userAgent.indexOf('Android') > 0 && navigator.userAgent.indexOf('Mobile') > 0)){
		$('head').prepend('<meta name="viewport" content="' + spView + '">');
	} else {
		$('head').prepend('<meta name="viewport" content="' + pcView + '">');
	}
});
/* = enable heightLine
-------------------------------------------------------------- */
$(function(){
	$(window).on('load', function(){
		$('.heightLine').heightLine();
	});
});

/* = heightLineを有効にする
-------------------------------------------------------------- */
$(function(){
	$(window).on('load', function(){
		$('.heightLine').heightLine();
	});
});

/* = アンカーにtarget: _blankをつける
-------------------------------------------------------------- */
$(function(){
	$('a[href^=http]').not('[href*="'+location.hostname+'"]').attr({target:"_blank"}).addClass("ex_link");
});

/* = header-fixクラスにposition: fixed;をつけ、ヘッダーの大きさのpaddingをつける
-------------------------------------------------------------- */
$(function(){
	var $header = $('#header');
	var hasHeaderFix = $header.hasClass('header-fix');
	if( hasHeaderFix ) {
		$header.css('position', 'fixed');
	};
	$(window).on('load', function(){
		if( !hasHeaderFix ) return;
		var objHeight = $header.outerHeight();
		$header.css('padding-bottom', objHeight);
	});

	/* = ブラウザ更新時にPCとSPで画像の切り替えを行う
	-------------------------------------------------------------- */
	var $setElem = $('.switch');
	var pcName = '_pc';
	var spName = '_sp';

	var matchMedia = '(max-width:768px)';

	$setElem.each(function(){
		var $img = $(this);
		var imgSize = function(){
			var imgSrc = $img.attr('src');
			imgSrc = ( window.matchMedia(matchMedia).matches ) ? imgSrc.replace(pcName,spName) : imgSrc.replace(spName,pcName);
			$img.attr('src', imgSrc).css({visibility:'visible'});
		};
		$(window).on('load resize', imgSize);
	});
});

	/* = aタグにsmooth-scrollクラスをつけるとクリック時にページ上部に自動スクロールする
	-------------------------------------------------------------- */
// 	$('a.smooth-scroll').on('click', function(){
// 		href = $(this).attr('href');
// 		var tgt = $(href === "#" ? 'html' : href);
// 		var position = $(tgt).offset().top;
// 		var getHeader = hasHeaderFix ? $Header.outerHeight() : 0;
// 		position = position - getHeader;
// 		$('body,html').animate({
// 			scrollTop: position
// 		}, 800);
// 		return false;
// 	});

// 	var toTopBtn = $("#to-top");
// 	toTopBtn.hide();
// 	$(window).on("scroll", function(){
// 		if ($(this).scrollTop() > 150) {
// 			toTopBtn.fadeIn();
// 		} else {
// 			toTopBtn.fadeOut();
// 		}
// 	});
// });

/* = imagesloadedのセットアップ
-------------------------------------------------------------- */
$(function() {
imagesProgress();

function imagesProgress () {
	var $container    = $('#progress');
	var $progressBar  = $container.find('.progress-bar');
	var $progressText = $container.find('.progress-text');
	var imgLoad       = imagesLoaded('body');
	var imgTotal      = imgLoad.images.length;
	var imgLoaded     = 0;
	var current       = 0;
	var progressTimer = setInterval(updateProgress, 1000 / 60);

	imgLoad.on('progress', function() {
		imgLoaded++;
	});

	function updateProgress() {
		var target = (imgLoaded / imgTotal) * 100;
		current += (target - current) * 0.1;
		$progressBar.css('width', current + '%');
		$progressText.text(Math.floor(current) + '%');

		if (current >= 100) {
			clearInterval(progressTimer);
			$container.addClass('progress-complete');
			$progressBar.add($progressText).delay(500).animate({opacity: 0}, 250, function() {
				$container.animate({top: '-100%'}, 1000, 'easeInOutQuint');
			});
		}
		if (current > 99.9) {
			current = 100;
		}
	}
}
});

/* = scrollrevealによるスクロールアニメーションのセットアップ
-------------------------------------------------------------- */
// $(function() {
// 	window.sr = ScrollReveal({
// 		reset: true,
// 		mobile: true,
// 	});
// 	sr.reveal('#top-about .ttl-box', {
// 		origin: 'left',
// 		distance: '50%',
// 		duration: 1000,
// 		scale: 1.0,
// 		delay: 200,
// 		opacity: 0,
// 	});
// });

/* = inview
-------------------------------------------------------------- */
$(function() {
	$('#top-about').on('inview', function(event, isInView) {
		var childlen = $('#top-about .ttl-box');
		var numOfChildlen = childlen.length;
		var animation = 'fadeInLeft';
		var delayTime = 200;
		if(isInView) {
			// アニメーションさせる要素の数を抽出
			for (var i = 0; i < numOfChildlen; i++) {
				// 何番目の要素をアニメーションさせるかを指定
				var index = childlen.eq(i);
				// 1つあたりの遅延時間を指定
				var delay = (i + 1) * delayTime;
				// 遅延させる場合はqueueを使う必要がある
				$(index).delay(delay).queue(function() {
					$(this).stop().addClass(animation);
				});
			}
		} else {
			childlen.stop().removeClass(animation);
			childlen.css('opacity', 0);
		}
	});
	$('#top-about').on('inview', function(event, isInView) {
		var childlen = $('#our-message');
		var numOfChildlen = childlen.length;
		var animation = 'fadeInRight';
		var delayTime = 200;
		if(isInView) {
			for (var i = 0; i < numOfChildlen; i++) {
				var index = childlen.eq(i);
				var delay = (i + 1) * delayTime;
				$(index).delay(delay).queue(function() {
					$(this).stop().addClass(animation);
				});
			}
		} else {
			childlen.stop().removeClass(animation);
			childlen.css('opacity', 0);
		}
	});
	$('#top-item').on('inview', function(event, isInView) {
		var childlen = $('#item-container ul li');
		var numOfChildlen = childlen.length;
		var animation = 'fadeInUp';
		var delayTime = 250;
		if(isInView) {
			for (var i = 0; i < numOfChildlen; i++) {
				var index = childlen.eq(i);
				var delay = (i + 1) * delayTime;
				$(index).delay(delay).queue(function() {
					$(this).stop().addClass(animation);
				});
			}
		} else {
			childlen.stop().removeClass(animation);
			childlen.css('opacity', 0);
		}
	});
	$('#top-news').on('inview', function(event, isInView) {
		var childlen = $('#news-container li');
		var numOfChildlen = childlen.length;
		var animation = 'fadeInLeft';
		var delayTime = 200;
		if(isInView) {
			// アニメーションさせる要素の数を抽出
			for (var i = 0; i < numOfChildlen; i++) {
				// 何番目の要素をアニメーションさせるかを指定
				var index = childlen.eq(i);
				// 1つあたりの遅延時間を指定
				var delay = (i + 1) * delayTime;
				// 遅延させる場合はqueueを使う必要がある
				$(index).delay(delay).queue(function() {
					$(this).stop().addClass(animation);
				});
			}
		} else {
			childlen.stop().removeClass(animation);
			childlen.css('opacity', 0);
		}
	});
});

/* = ヘッダーのアニメーション
-------------------------------------------------------------- */
$(window).on('scroll', function() {
	var startHeaderAnime = $('.header-bg-start').offset().top + 380;
	var scrollPos = $(window).scrollTop();
	if(scrollPos > startHeaderAnime) {
		$('.header-bg-before').addClass('header-bg-after');
	} else {
		$('.header-bg-before').removeClass('header-bg-after');
	}
});



/* = Smooth Scroll
-------------------------------------------------------------- */
$(function() {
  var urlHash = location.hash;

  // バーガーメニューの#sp-menuは除く
	if(urlHash && urlHash != '#sp-menu') {
    // fixedがついている#headerの高さを取得する
    var headerHeight = $('#header').outerHeight();
    // 始めにページの最上部にもっていく
    $('body,html').stop().scrollTop(0);

    // setTimeoutによって100ms立った後に実行する
		setTimeout(function(){
      var target = $(urlHash);
      // fixedがついているheaderにはpaddingがついているからその高さを引く
      var position = target.offset().top - headerHeight;
      // 500msかけてpositionの距離だけ移動させる
			$('body,html').stop().animate({scrollTop:position}, 500);
		}, 100);
	}

  // 現在のページのURLが入力したURLと等しい(かもしれない)ならtrue
	var seemsSamePage = function(url){
		if( '' !== url ){
      // httpとドメイン名をつないでhome_urlを取得する
			var lctnOrigin = [
				location.protocol,
				location.hostname,
      ].join('//');
      // 現在表示しているページのURLを取得する
			var lctnPath = location.pathname;
      var lctnOrgnPath = lctnOrigin + lctnPath;

      // URLの末尾にスラッシュを取り除く
      var tralingSlash = function(v){ return v.replace(/\/$/, ''); };

      // urlがhttpsで始まっている場合
			if( url.match(/^https?:/) ){
        // urlが現在のページのURLが異なるなら
        if( 0 !== url.indexOf(lctnOrigin) ) return false;
        // urlの末尾のスラッシュと現在のページのURLの末尾のスラッシュを抜いたものが異なるなら
        if( tralingSlash(lctnOrgnPath) !== tralingSlash(url) ) return false;
        // urlの先頭がスラッシュだけなら
			} else if( url.match(/^\//) ){
        urlと現在のページのURLが異なるなら
				if( tralingSlash(lctnPath) !== tralingSlash(url) ) return false;
			} else {
        // urlがhttpsで始まっていないなら
				return false;
			}
		}
		return true;
  };
  // たぶんfixedしているであろう#header
  var maybeFixedSelectors = ['#header'];
  // hrefに値があるaタグがクリックされたなら
	$('a[href]').on('click', function(e){
    var $elm = $(this);
    // hrefが#sp-menuでないならば
		if($elm.attr('href') != '#sp-menu') {
      // ハッシュの#の前半部分と後半部分を分けて配列にする
      var urls = $elm.attr('href').split('#');
      // #の後半部分が存在するなら#とくっつけてハッシュを作る
      var $hashTgt = ( urls && urls[1] ) ? $('#' + urls[1]) : false;
      // もしURLにハッシュが存在するなら
			if( $hashTgt && $hashTgt.length ){
        // もしハッシュを取り除いたURLと現在のページのURLが等しいなら
				if( seemsSamePage(urls[0]) ){
          var pos = 0;
					$.each(maybeFixedSelectors, function(i, s){
            // sは#header
            var $hdr = $(s);
            // #headerが存在し、#headerのdisplayがnoneであり、#headerのpositionがfixedだったら
						if( $hdr.length && 'none' !== $hdr.css('display') && 'fixed' === $hdr.css('position') ){
              // headerのpadding分だけあればそれをマイナスする
							pos = $hashTgt.offset().top - $hdr.outerHeight();
							return false;
						}
          });
          // もしposが存在するなら　ゼロでなければ
					if( pos ){
            // aタグの本来の機能をリセットする
            e.preventDefault();
            // 500msかけてアニメーション
						$('html,body').stop().animate({scrollTop:pos}, 500);
						return false;
					}
				}
			}
		}
	});
});

/* = ヘッダーメニューの子要素をマウスオーバーで表示させる。
-------------------------------------------------------------- */
$(function() {
	$('.menu-item-has-children');
});
