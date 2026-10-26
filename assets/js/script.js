/* =========================================================
   MYRHA BOUQUET — SCRIPT.JS (Vanilla JS, no heavy libraries)
   ========================================================= */
document.addEventListener('DOMContentLoaded', function () {

  /* ---------- LOADING SCREEN ---------- */
  var loadingScreen = document.getElementById('loading-screen');
  window.addEventListener('load', function () {
    setTimeout(function () {
      if (loadingScreen) loadingScreen.classList.add('loaded');
    }, 400);
  });
  // Fallback in case 'load' already fired
  setTimeout(function () {
    if (loadingScreen) loadingScreen.classList.add('loaded');
  }, 2500);

  /* ---------- SCROLL PROGRESS BAR ---------- */
  var progressBar = document.getElementById('scroll-progress');
  function updateProgress() {
    var scrollTop = window.scrollY;
    var docHeight = document.documentElement.scrollHeight - window.innerHeight;
    var pct = docHeight > 0 ? (scrollTop / docHeight) * 100 : 0;
    if (progressBar) progressBar.style.width = pct + '%';
  }

  /* ---------- STICKY NAVBAR ---------- */
  var navbar = document.getElementById('mainNavbar');
  function toggleNavbarBg() {
    if (window.scrollY > 60) {
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }
  }

  /* ---------- BACK TO TOP ---------- */
  var backToTop = document.getElementById('backToTop');
  function toggleBackToTop() {
    if (window.scrollY > 500) backToTop.classList.add('show');
    else backToTop.classList.remove('show');
  }
  if (backToTop) {
    backToTop.addEventListener('click', function () {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  /* ---------- ACTIVE MENU ON SCROLL ---------- */
  var sections = document.querySelectorAll('section[id], header[id]');
  var navLinks = document.querySelectorAll('#navLinks .nav-link');
  function setActiveNav() {
    var current = '';
    sections.forEach(function (sec) {
      var rect = sec.getBoundingClientRect();
      if (rect.top <= 120 && rect.bottom >= 120) {
        current = sec.getAttribute('id');
      }
    });
    navLinks.forEach(function (link) {
      link.classList.remove('active');
      if (current && link.getAttribute('href').indexOf('#' + current) !== -1) {
        link.classList.add('active');
      }
    });
  }

  /* ---------- SCROLL-TRIGGERED FADE (Intersection Observer) ---------- */
  var aosElements = document.querySelectorAll('[data-aos]');
  var aosObserver = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        var delay = entry.target.getAttribute('data-aos-delay') || 0;
        setTimeout(function () {
          entry.target.classList.add('aos-visible');
        }, parseInt(delay, 10));
        aosObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.15 });
  aosElements.forEach(function (el) { aosObserver.observe(el); });

  /* ---------- COUNTER ANIMATION ---------- */
  var statNumbers = document.querySelectorAll('.stat-number');
  function animateCounter(el) {
    var target = parseFloat(el.getAttribute('data-target'));
    var isDecimal = String(target).indexOf('.') !== -1;
    var current = 0;
    var steps = 60;
    var increment = target / steps;
    var count = 0;
    var timer = setInterval(function () {
      count++;
      current += increment;
      if (count >= steps) {
        el.textContent = isDecimal ? target.toFixed(1) : Math.round(target);
        clearInterval(timer);
      } else {
        el.textContent = isDecimal ? current.toFixed(1) : Math.round(current);
      }
    }, 25);
  }
  var statObserver = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        animateCounter(entry.target);
        statObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.4 });
  statNumbers.forEach(function (el) { statObserver.observe(el); });

  /* ---------- GALLERY FILTER ---------- */
  var filterButtons = document.querySelectorAll('.filter-btn');
  var galleryItems = document.querySelectorAll('.gallery-item');
  filterButtons.forEach(function (btn) {
    btn.addEventListener('click', function () {
      filterButtons.forEach(function (b) { b.classList.remove('active'); });
      btn.classList.add('active');
      var filter = btn.getAttribute('data-filter');
      galleryItems.forEach(function (item) {
        if (filter === 'all' || item.getAttribute('data-category') === filter) {
          item.classList.remove('hidden');
        } else {
          item.classList.add('hidden');
        }
      });
    });
  });

  /* ---------- LIGHTBOX ---------- */
  var lightbox = document.getElementById('lightbox');
  var lightboxImg = document.getElementById('lightboxImg');
  var lightboxCaption = document.getElementById('lightboxCaption');
  var lightboxClose = document.getElementById('lightboxClose');
  document.querySelectorAll('.gallery-link').forEach(function (link) {
    link.addEventListener('click', function (e) {
      e.preventDefault();
      lightboxImg.src = link.getAttribute('href');
      lightboxCaption.textContent = link.getAttribute('data-lightbox') || '';
      lightbox.classList.add('active');
    });
  });
  if (lightboxClose) {
    lightboxClose.addEventListener('click', function () { lightbox.classList.remove('active'); });
  }
  if (lightbox) {
    lightbox.addEventListener('click', function (e) {
      if (e.target === lightbox) lightbox.classList.remove('active');
    });
  }
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && lightbox) lightbox.classList.remove('active');
  });

  /* ---------- TESTIMONIAL STACK AUTO-ROTATE ---------- */
  var stackWrap = document.getElementById('testimoniStack');
  var testimoniDataEl = document.getElementById('testimoniData');
  if (stackWrap && testimoniDataEl) {
    var testimoniData = [];
    try { testimoniData = JSON.parse(testimoniDataEl.textContent); } catch (e) { testimoniData = []; }

    if (testimoniData.length > 3) {
      var cardEls = stackWrap.querySelectorAll('.testimoni-stack-card');
      var centerIndex = 1; // index in testimoniData currently shown by the active (middle) card

      function renderCard(cardEl, data) {
        cardEl.querySelector('.testimoni-avatar').src = data[3];
        cardEl.querySelector('.testimoni-avatar').alt = 'Foto ' + data[0];
        cardEl.querySelector('.testimoni-name').textContent = data[0];
        cardEl.querySelector('.testimoni-role').textContent = data[1];
        cardEl.querySelector('.testimoni-quote').innerHTML = '&ldquo;' + data[2] + '&rdquo;';
      }

      function rotateStack() {
        var total = testimoniData.length;
        centerIndex = (centerIndex + 1) % total;
        var prevIndex = (centerIndex - 1 + total) % total;
        var nextIndex = (centerIndex + 1) % total;

        cardEls.forEach(function (cardEl) {
          var pos = cardEl.getAttribute('data-pos');
          if (pos === '0') renderCard(cardEl, testimoniData[prevIndex]);
          if (pos === '1') renderCard(cardEl, testimoniData[centerIndex]);
          if (pos === '2') renderCard(cardEl, testimoniData[nextIndex]);
        });
      }

      var testimoniInterval = setInterval(rotateStack, 4500);
      stackWrap.addEventListener('mouseenter', function () { clearInterval(testimoniInterval); });
    }
  }

  /* ---------- COUNTDOWN URGENCY ---------- */
  var cdDays = document.getElementById('cdDays');
  var cdHours = document.getElementById('cdHours');
  var cdMinutes = document.getElementById('cdMinutes');
  var cdSeconds = document.getElementById('cdSeconds');
  if (cdDays) {
    // Target: akhir bulan berjalan, mensimulasikan periode kapasitas produksi ini
    var now = new Date();
    var target = new Date(now.getFullYear(), now.getMonth() + 1, 0, 23, 59, 59);

    function pad(n) { return String(n).padStart(2, '0'); }
    function updateCountdown() {
      var diff = target - new Date();
      if (diff <= 0) { diff = 0; }
      var d = Math.floor(diff / (1000 * 60 * 60 * 24));
      var h = Math.floor((diff / (1000 * 60 * 60)) % 24);
      var m = Math.floor((diff / (1000 * 60)) % 60);
      var s = Math.floor((diff / 1000) % 60);
      cdDays.textContent = pad(d);
      cdHours.textContent = pad(h);
      cdMinutes.textContent = pad(m);
      cdSeconds.textContent = pad(s);
    }
    updateCountdown();
    setInterval(updateCountdown, 1000);
  }

  /* ---------- LAZY LOADING FALLBACK (native loading="lazy" already used) ---------- */
  if ('loading' in HTMLImageElement.prototype === false) {
    document.querySelectorAll('img[loading="lazy"]').forEach(function (img) {
      img.loading = 'eager';
    });
  }

  /* ---------- SCROLL EVENT BINDING (throttled via rAF) ---------- */
  var ticking = false;
  function onScroll() {
    if (!ticking) {
      window.requestAnimationFrame(function () {
        updateProgress();
        toggleNavbarBg();
        toggleBackToTop();
        setActiveNav();
        ticking = false;
      });
      ticking = true;
    }
  }
  window.addEventListener('scroll', onScroll);
  onScroll();

  /* ---------- SMOOTH SCROLL FOR ANCHOR LINKS WITH FIXED NAVBAR OFFSET ---------- */
  document.querySelectorAll('a[href*="#"]').forEach(function (anchor) {
    anchor.addEventListener('click', function (e) {
      var hrefAttr = anchor.getAttribute('href');
      var hashIndex = hrefAttr.indexOf('#');
      if (hashIndex === -1) return;
      var hash = hrefAttr.substring(hashIndex);
      var targetEl = document.querySelector(hash);
      if (!targetEl) return;
      e.preventDefault();
      var offset = 80;
      var top = targetEl.getBoundingClientRect().top + window.scrollY - offset;
      window.scrollTo({ top: top, behavior: 'smooth' });
      // Collapse mobile menu if open
      var navMenu = document.getElementById('navMenu');
      if (navMenu && navMenu.classList.contains('show')) {
        var bsCollapse = bootstrap.Collapse.getOrCreateInstance(navMenu);
        bsCollapse.hide();
      }
    });
  });

});
