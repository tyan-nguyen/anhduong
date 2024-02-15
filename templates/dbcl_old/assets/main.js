function countUp() {
  // console.log('countUp')
  $('.count-up').each(function () {
    var $this = $(this),
      countTo = $this.attr('data-count');
    $({ countNum: $this.text() }).animate(
      {
        countNum: countTo,
      },
      {
        duration: 1000,
        easing: 'linear',
        step: function () {
          $this.text(Math.floor(this.countNum));
        },
        complete: function () {
          $this.text(this.countNum);
          //alert('finished');
        },
      }
    );
  });
}

function countDown() {
  // console.log('countDown')
  $('.count-up').each(function () {
    var $this = $(this);
    $({ countNum: $this.text() }).animate(
      {
        countNum: 0,
      },
      {
        duration: 1000,
        easing: 'linear',
        step: function () {
          $this.text(Math.floor(this.countNum));
        },
        complete: function () {
          $this.text(this.countNum);
          //alert('finished');
        },
      }
    );
  });
}

function magicTriangle() {
  var in_magic_triangle = false;
  var previous_X = 0;
  var MAGIC_A, MAGIC_B, MAGIC_C;

  area = function (A, B, C) {
    return Math.abs((A.x * (B.y - C.y) + B.x * (C.y - A.y) + C.x * (A.y - B.y)) / 2);
  };

  pointInTriangle = function (D, A, B, C) {
    let ABD = area(A, B, D);
    let BDC = area(B, D, C);
    let CAD = area(C, A, D);
    let ABC = area(A, B, C);
    if (ABC == ABD + BDC + CAD) {
      return true;
    }
    return false;
  };

  $('.menu-root').on('mousemove', function (e) {
    if (!in_magic_triangle) {
      // check if has sub-menu
      if ($(this).siblings('.sub-menu').length == 0) {
        $(this).parent().siblings().removeClass('active');
        in_magic_triangle = false;
        return false;
      }

      // check if pointer in triangle
      $(this).closest('.has-sub').addClass('active').siblings().removeClass('active');
      MAGIC_A = { x: e.pageX, y: e.pageY };
      MAGIC_B = { x: $(this).siblings('.sub-menu').offset().left, y: $(this).siblings('.sub-menu').offset().top };
      MAGIC_C = {
        x: $(this).siblings('.sub-menu').offset().left,
        y: $(this).siblings('.sub-menu').offset().top + $(this).siblings('.sub-menu').outerHeight(),
      };

      in_magic_triangle = true;
    } else {
      var D = { x: e.pageX, y: e.pageY };
      if (e.pageX < previous_X || !pointInTriangle(D, MAGIC_A, MAGIC_B, MAGIC_C)) {
        in_magic_triangle = false;
      }
      previous_X = e.pageX;
    }
  });

  $('.sub-menu').on('mouseleave', function (e) {
    let E = { x: e.pageX, y: e.pageY };
    if (e.pageX < previous_X || !pointInTriangle(E, MAGIC_A, MAGIC_B, MAGIC_C)) {
      $('.has-sub.active').removeClass('active');
      in_magic_triangle = false;
      previous_X = 0;
    }
  });

  $('.menu-child .sub-menu').on('mouseleave', function (e) {
    let F = { x: e.pageX, y: e.pageY };

    if (e.pageX < previous_X || !pointInTriangle(F, MAGIC_A, MAGIC_B, MAGIC_C) === false) {
      $('.has-sub.active').removeClass('active');
      in_magic_triangle = false;
      previous_X = 0;
    }
  });
}

$(window).on('load', function () {
  /* Menu Moblie */

  $('nav#mmenu').mmenu({
    extensions: ['effect-slide-menu', 'pageshadow'],
    counters: true,
    navbar: {
      title: typeof lbl_danh_muc !=='undefined'?lbl_danh_muc:'Danh mục',
    },
    navbars: [
      {
        position: 'top',
        // content   : [ 'searchfield' ]
        // }, {
        content: ['prev', 'title', 'close'],
      },
      {
        position: 'bottom',
        content: [],
      },
    ],
  });
});

$(document).ready(function () {
  // $('li').has('ul').find('a').not('ul ul a').addClass('caret');

  magicTriangle();

  $('nav.menu-vertical ul li .ic-down').on('click', function (e) {
    e.stopPropagation();
    let _wrapper = $(this).parent('li');
    let currentShow = $(this).hasClass('ic-up');
    if (!$(_wrapper.parent().parent()).hasClass('menu-vertical')) {
      _wrapper.parent().find('li .ic-up').removeClass('ic-up');
      _wrapper.parent().find('ul').slideUp();
    } else {
      _wrapper.parent().find('li .ic-up').removeClass('ic-up');
      _wrapper.parent().find('ul').slideUp();
    }
    if (!currentShow) {
      $(this).toggleClass('ic-up');
    }
    $(this).parent('ul').slideDown();
    $(this).parent().find('ul:first').is(':visible') || $(this).parent().find('ul:first').slideDown();
  });

  const body = document.getElementsByTagName('header');
  const main = document.getElementsByTagName('main');
  const scrollDown = 'fixed';
  let lastScroll = 0;
  window.addEventListener('scroll', () => {
    const currentScroll = window.pageYOffset;
    let headerHeight = body[0].clientHeight;
    // console.log("🚀 ~ file: home.html ~ line 892 ~ window.addEventListener ~ headerHeight", headerHeight)
    if (currentScroll <= headerHeight) {
      return;
    }

    if (currentScroll > lastScroll) {
      // down
      // console.log('down');
      body[0].classList.remove(scrollDown);
      main[0].style.paddingTop = 0;
    } else if (currentScroll < lastScroll) {
      // console.log('uppp');
      // up
      body[0].classList.add(scrollDown);
      main[0].style.paddingTop = headerHeight + 'px';
    }
    lastScroll = currentScroll;
  });

  document.addEventListener('aos:in', ({ detail }) => {
    //  console.log(detail.classList.value.indexOf('count-box'), 'animation to display element starts');
    detail.classList.value.indexOf('count-box') == 0 ? countUp() : '';
  });

  document.addEventListener('aos:out', ({ detail }) => {
    //  console.log(detail.classList.value.indexOf('count-box'), 'animation to display element end');
    detail.classList.value.indexOf('count-box') == 0 ? countDown() : '';
  });

  $('#btn-viewall-depart').click(function () {
    $('.list-depart').addClass('showall');
    $(this).hide();
  });

  $('.grid-tv').masonry({
    // options
    itemSelector: '.grid-item',
    columnWidth: '.grid-item',
  });

  $('.link-cat').click(function () {
    $(this).parent().find('.list-lv2').toggleClass('show');
    $(this).toggleClass('show');
  });

  $('.link-viewmore').click(function () {
    $(this).parent().find('.desc').toggleClass('full');
    $(this).hide();
    $('.link-thugon').show();
  });
  $('.link-thugon').click(function () {
    $(this).parent().find('.desc').toggleClass('full');
    $(this).hide();
    $('.link-viewmore').show();
  });

  $('.link-cat2').click(function () {
    $(this).parent().find('.list-lv3').toggleClass('show');
    $(this).toggleClass('show');
  });
});

AOS.init({
  startEvent: 'load',
  duration: 500,
  easing: 'linear',
  speed: 10000,
});

new WOW({
  offset: 100,
}).init();
