/**
 * SoftApps Digital Solutions — WordPress-compatible JS (no fetch for components)
 */
(function () {
  'use strict';

  function initNavbarScroll() {
    var navbar = document.querySelector('.navbar-softapps');
    if (!navbar) return;
    function onScroll() {
      navbar.classList.toggle('scrolled', window.scrollY > 20);
    }
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
  }

  function initFadeIn() {
    var els = document.querySelectorAll('.fade-in');
    if (!els.length || !('IntersectionObserver' in window)) {
      els.forEach(function (el) { el.classList.add('visible'); });
      return;
    }
    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12 });
    els.forEach(function (el) { observer.observe(el); });
  }

  document.addEventListener('DOMContentLoaded', function () {
    initNavbarScroll();
    initFadeIn();
  });
})();
