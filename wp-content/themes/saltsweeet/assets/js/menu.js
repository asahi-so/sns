


// scroll animation wow ver.
new WOW().init();

// scroll aimation
const scrollTrigger = document.querySelectorAll('.js-scroll-trigger');

if (scrollTrigger.length) {
    scrollAnimation(scrollTrigger);
}

function scrollAnimation(trigger) {
    window.addEventListener('scroll', function () {
        for (var i = 0; i < trigger.length; i++) {
            let position = trigger[i].getBoundingClientRect().top,
                scroll = window.pageYOffset || document.documentElement.scrollTop,
                offset = position + scroll,
                windowHeight = window.innerHeight;

            if (scroll > offset - windowHeight + 200) {
                trigger[i].classList.add('is-animated');
            }
        }
    });
}

// smooth scroll
/*$(function(){
  // #で始まるアンカーをクリックした場合に処理
  $('.s_02 a[href^="#"]').click(function(){
    // 移動先を50px上にずらす
    var adjust = 100;
    // スクロールの速度
    var speed = 400; // ミリ秒
    // アンカーの値取得
    var href= $(this).attr("href");
    // 移動先を取得
    var target = $(href == "#" || href == "" ? 'html' : href);
    // 移動先を調整
    var position = target.offset().top - adjust;
    // スムーススクロール
    $('body,html').animate({scrollTop:position}, speed, 'swing');
    return false;
  });
});*/

// #で始まるリンクを取得
const jsSmoothScroll = document.querySelectorAll('a[href^="#"]');

// forで回してaddEventListenerする
for (let i = 0; i < jsSmoothScroll.length; i++){
  jsSmoothScroll[i].addEventListener('click', (e) => {
    e.preventDefault();
    // href属性の取得
    let href = jsSmoothScroll[i].getAttribute('href');
    let target = document.getElementById(href.replace('#', ''));
    const rect = target.getBoundingClientRect().top;
    const offset = window.pageYOffset;
    const adjust = 100;
    // 移動先のポジション取得
    const position = rect + offset - adjust;
    // window.scrollToでスクロール
    window.scrollTo({
      top: position,
      behavior: 'smooth',
    });
  });
}


//ハンバーガーボタン
$('.burger-btn, .nav-item a').on('click',function(){
  $('.burger-btn').toggleClass('close');
  $('.nav-wrapper').fadeToggle(500);
  $('html').toggleClass('noscroll');
 });

//faq
const current = document.querySelector('.current');
current.previousElementSibling.classList.add('subject');
