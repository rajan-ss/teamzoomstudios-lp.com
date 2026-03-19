<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-W83QDCG8');
  </script>
  <!-- End Google Tag Manager -->
  <title><?php echo get_bloginfo(); ?></title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W83QDCG8" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <?php wp_body_open(); ?>

  <div class="site-wrapper">

    <header class="site-header py-6 lg:pb-8 lg:pt-10 absolute top-0 inset-x-0">
      <div class="container">
        <div class="flex items-center justify-between rounded-sm shadow-[0px_8px_30px_rgba(0,0,0,0.34)] bg-white/20 lg:backdrop-blur-md p-4 sm:py-5 sm:px-8">
          <figure class="mr-3">
            <img src="<?php echo esc_url(home_url('/wp-content/uploads/team-zoom-studios-logo.png')); ?>" alt="Team Zoom Studios Logo" width="150" height="61" loading="lazy">
          </figure>

          <ul class="lg:ml-auto lg:mr-12 lg:flex lg:static fixed top-[25%] right-0 z-50 lg:bg-transparent bg-primary lg:shadow-none shadow-[0_0_5px_rgba(0,0,0,0.5)] lg:p-0 p-3 rounded-s items-center 2xl:text-base text-sm [&_li:not(:last-child)]:lg:mr-5 [&_li:not(:last-child)]:lg:mb-0 [&_li:not(:last-child)]:mb-2">
            <li class="group flex items-center lg:gap-2 relative text-white">
              <i class="icon-phone-handle text-white lg:text-black group-hover:text-grey-1 group-hover:border-grey-1 relative lg:w-auto lg:h-auto w-[34px] h-[34px] flex items-center justify-center lg:border-0 border border-white p-[2px] rounded-full after:lg:hidden after:flex after:items-center after:justify-center after:absolute after:left-[3px] after:right-[3px] after:bottom-[3px] after:top-[3px] after:bg-white/[.15] after:rounded-full"></i>
              <div>
                <a class="text-black group-hover:text-primary max-lg:text-[0] stretched-link" href="tel:2019714130">(201) 971-4130</a>
              </div>
            </li>
            <li class="group flex items-center lg:gap-2 relative text-white">
              <i class="icon-pin text-white lg:text-black group-hover:text-grey-1 group-hover:border-grey-1 relative lg:w-auto lg:h-auto w-[34px] h-[34px] flex items-center justify-center lg:border-0 border border-white p-[2px] rounded-full after:lg:hidden after:flex after:items-center after:justify-center after:absolute after:left-[3px] after:right-[3px] after:bottom-[3px] after:top-[3px] after:bg-white/[.15] after:rounded-full"></i>
              <div>
                <a class="text-black group-hover:text-primary max-lg:text-[0] m-0 stretched-link" href="https://maps.app.goo.gl/CPvxGF7e7jQCGLGv9" target="_blank">257 Purdue Ct Paramus NJ 07652</a>
              </div>
            </li>
          </ul>

          <div>
            <a href="tel:2019714130" class="btn btn-dark">Call Today!</a>
          </div>
          <?php /*          
          <div class="[&_ul]:grid sm:[&_ul]:grid-flow-col [&_ul]:gap-4 lg:[&_ul]:gap-14 [&_ul]:items-center sm:[&_a:not(.btn)]:text-black sm:hover:[&_a:not(.btn)]:text-primary sm:focus:[&_a:not(.btn)]:text-primary ml-auto">
            <ul class="sm:static fixed top-1/3 z-20 right-0 max-sm:bg-white/90 max-sm:p-3 max-sm:-mr-4 max-sm:rounded-md max-sm:[&_i]:rounded-full max-sm:[&_i]:border-primary max-sm:[&_i]:border max-sm:[&_i]:p-2">
              <li><a href="tel:2019714130"><i class="icon-phone-handle"></i> <span class="max-lg:hidden">(201) 971-4130</span></a></li>
              <li><a href="https://maps.app.goo.gl/CPvxGF7e7jQCGLGv9" target="_blank"><i class="icon-pin"></i> <span class="max-lg:hidden">257 Purdue Ct Paramus NJ 07652</span></a></li>
              <li class="max-sm:hidden"><a href="tel:2019714130" class="btn btn-dark">Call Today!</a></li>
            </ul>
            <a href="tel:2019714130" class="btn btn-dark sm:hidden">Call Today!</a>
            
          </div> */ ?>
        </div>
      </div><!-- /.container -->
    </header>
    <!-- /header -->

    <main class="site-content">
      <section class="bg-cover bg-center bg-no-repeat pt-64 pb-36" style="background-image: url('<?php echo esc_url(home_url('/wp-content/uploads/hero-bg-cover.jpg')); ?>')">
        <div class="container">
          <div class="text-white sm:text-xl lg:text-2xl max-w-xl">
            <span class="text-primary font-bold uppercase text-xl lg:text-2xl block pt-6 relative before:absolute before:top-0 before:left-0 before:bg-[url('../images/kicker-frame.png')] before:bg-[length:132px_17px] before:w-[132px] before:h-[17px] max-md:[text-shadow:_2px_2px_2px_rgba(0,0,0,0.6)]">THE BEST STUDIO</span>
            <h1>OUR WEDDING</h1>
            <P>You are every reason, every hope and every dream I’ve ever had.</P>
            <div class="flex gap-5 pt-8 pb-12">
              <figure>
                <img src="<?php echo esc_url(home_url('/wp-content/uploads/happy-clients-group.png')); ?>" alt="Happy Clients Group Feature Image" width="141" height="50" loading="lazy">
              </figure>
              <span class="text-primary font-black text-xl uppercase max-md:[text-shadow:_2px_2px_2px_rgba(0,0,0,0.6)]">102K+ <br>HAPPY CLIENTS</span>
            </div>
            <div class="mb-4 lg:mb-8">
              <a href="#leadForm" class="js-has-smooth btn btn-light">Request A Quote</a>
            </div>
          </div>
        </div>
      </section>
      <!-- End Section -->