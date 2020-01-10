document.addEventListener('DOMContentLoaded', () => {

    // Get all "navbar-burger" elements
    const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

    // Check if there are any navbar burgers
    if ($navbarBurgers.length > 0) {

      // Add a click event on each of them
      $navbarBurgers.forEach(el => {
        el.addEventListener('click', () => {

          // Get the target from the "data-target" attribute
          const target = el.dataset.target;
          const $target = document.getElementById(target);

          // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
          if( target && $target) {
            el.classList.toggle('is-active');
            $target.classList.toggle('is-active');
          }
          

        });
      });
    }

});

(function(){

    var doc = document.documentElement;
    var w = window;
  
    var prevScroll = w.scrollY || doc.scrollTop;
    var curScroll;
    var direction = 0;
    var prevDirection = 0;
  
    var header = document.getElementById('masthead');
  
    var checkScroll = function() {
  
      /*
      ** Find the direction of scroll
      ** 0 - initial, 1 - up, 2 - down
      */
  
      curScroll = w.scrollY || doc.scrollTop;
      if (curScroll > prevScroll) { 
        //scrolled up
        direction = 2;
      }
      else if (curScroll < prevScroll) { 
        //scrolled down
        direction = 1;
      }
  
      if (direction !== prevDirection) {
        toggleHeader(direction, curScroll);
      }
      
      prevScroll = curScroll;
    };
  
    var toggleHeader = function(direction, curScroll) {
      if (direction === 2 && curScroll > header.offsetHeight) {
        header.classList.add('hide');
        prevDirection = direction;
      }
      else if (direction === 1) {
        header.classList.remove('hide');
        prevDirection = direction;
      }
    };
    
    window.addEventListener('scroll', checkScroll);
  
  })();

(function(){

  var searchToggle = document.querySelector('.header-search-toggle');
  var searchBox = document.querySelector('.cn-search');

  if ( searchToggle == null || searchBox == null ) {
    return;
  }

  var toggleSearch = function() {
    var toggleIco = document.querySelector('.header-search-toggle i');
    if(toggleIco.className == 'fas fa-search') {
      toggleIco.className = 'fas fa-times';
      searchBox.style.display = 'block';
    }
    else {
      toggleIco.className = 'fas fa-search';
      searchBox.style.display = 'none';
    }

  };
  searchToggle.addEventListener( 'click', toggleSearch );
})();

var initfixedWidget = function(){
  var w = window;
  var box = document.querySelector('.widget-fixed');
  if( box == null ) {
    return;
  }
  var g = box.getBoundingClientRect();
  var gtop = g.top + w.pageYOffset;
  
  var fixedWidget = function() {

    if( w.innerWidth < 1280 ) {
      box.style.position = 'relative';
      box.style.top = 'initial';
      return;
    }

    var dh = document.body.clientHeight;
    var wh = w.innerHeight;
    var st = w.pageYOffset;
    var sr = dh - wh - st; //scroll remaining
    var bh = box.offsetHeight;
    var fh = document.querySelector('.site-footer').offsetHeight;
    var nt = (bh + 75) - (wh - (fh - sr)); //negative top required for box

    if( st > (gtop - 50) ) {
      box.style.position = 'fixed';
      box.style.top = '50px';
      box.classList.add('widget-transluscent');
      if( (wh - (fh - sr)) < (bh + 75)) {
        box.style.top = (50-nt) + 'px';
      }
    }
    else {
      box.style.position = 'relative';
      box.style.top = 'initial';
      box.classList.remove('widget-transluscent');
    }
  };
  
  window.addEventListener('scroll', fixedWidget);
  window.addEventListener('resize', fixedWidget);

};

window.addEventListener('load', initfixedWidget);