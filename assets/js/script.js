/**
 * SoftApps Digital Solutions — Main JavaScript
 */

(function () {
  'use strict';

  /* Load header & footer components */
  async function loadComponent(id, url) {
    const el = document.getElementById(id);
    if (!el) return;
    try {
      const res = await fetch(url);
      if (!res.ok) throw new Error('Failed to load ' + url);
      el.innerHTML = await res.text();
      initAfterComponents();
    } catch (e) {
      console.warn('Component load failed:', url, e.message);
    }
  }

  function initAfterComponents() {
    setActiveNavLink();
    initNavbarScroll();
  }

  /* Highlight active nav link */
  function setActiveNavLink() {
    const page = document.body.dataset.page;
    if (!page) return;
    document.querySelectorAll('.nav-link[data-page]').forEach(function (link) {
      if (link.dataset.page === page) link.classList.add('active');
    });
  }

  /* Navbar shadow on scroll */
  function initNavbarScroll() {
    const navbar = document.querySelector('.navbar-softapps');
    if (!navbar) return;
    function onScroll() {
      navbar.classList.toggle('scrolled', window.scrollY > 20);
    }
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
  }

  /* Fade-in on scroll */
  function initFadeIn() {
    const els = document.querySelectorAll('.fade-in');
    if (!els.length || !('IntersectionObserver' in window)) {
      els.forEach(function (el) { el.classList.add('visible'); });
      return;
    }
    const observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
    els.forEach(function (el) { observer.observe(el); });
  }

  /* Form handling — ready for backend/email service */
  function initForms() {
    document.querySelectorAll('form[data-softapps-form]').forEach(function (form) {
      form.addEventListener('submit', function (e) {
        e.preventDefault();
        var btn = form.querySelector('[type="submit"]');
        var originalText = btn ? btn.textContent : '';
        if (btn) {
          btn.disabled = true;
          btn.textContent = 'Sending…';
        }
        /* Placeholder: connect to Formspree, WP plugin, or backend API */
        setTimeout(function () {
          var success = form.querySelector('.form-success');
          if (success) success.classList.remove('d-none');
          form.reset();
          if (btn) {
            btn.disabled = false;
            btn.textContent = originalText;
          }
        }, 800);
      });
    });
  }

  /* DOM Ready */
  document.addEventListener('DOMContentLoaded', function () {
    loadComponent('site-header', 'components/header.html');
    loadComponent('site-footer', 'components/footer.html');
    initFadeIn();
    initForms();
    setActiveNavLink();
    initNavbarScroll();
  });
})();
