(function() {
  var initJags;

  window.JAGS = window.JAGS || {};

  JAGS.load = (function() {
    function load() {
      this.normalHeader = $('.main-header');
      $('[data-toggle="tooltip"]').tooltip;
      this.parallaxWrapper = $('.extras');
    }

    load.prototype.init = function() {
      return this.changeHeader();
    };

    load.prototype.stickyHeader = function() {
      this.normalHeader.addClass('sticky-header');
      return false;
    };

    load.prototype.defaultHeader = function() {
      this.normalHeader.removeClass('sticky-header');
      return false;
    };

    load.prototype.changeHeader = function() {
      var scrollTop;
      scrollTop = $(window);
      if (scrollTop.scrollTop() > 100) {
        return this.stickyHeader();
      } else {
        return this.defaultHeader();
      }
    };

    return load;

  })();

  initJags = new JAGS.load();

  $(window).load(function() {
    return initJags.init();
  });

  $(window).scroll(function() {
    return initJags.changeHeader();
  });

}).call(this);

//# sourceMappingURL=init.map