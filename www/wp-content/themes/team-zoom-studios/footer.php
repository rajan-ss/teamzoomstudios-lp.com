</main>
<!-- /main -->

<footer id="contact-us" class="site-footer relative z-[1]">
  <div class="bg-black text-primary py-12 lg:py-16">
    <div class="container">
      <div class="grid lg:grid-cols-5 gap-8 relative before:absolute before:bottom-full before:left-1/4 before:bg-[url('../images/dots-patterns-shape-sm.png')] before:w-[79px] before:h-[98px] before:bg-[length:79px_98px]">
        <div class="lg:col-span-2">
          <i class="icon-phone-ring text-2xl inline-flex items-center justify-center align-middle w-[66px] h-[66px] p-2 rounded-full border border-primary"></i>
          <h2 class="text-white text-2xl xl:text-[2.125rem] mt-6 lg:mt-8 mb-4 lg:mb-6">CALL NOW FOR SERVICE OR TO REQUEST A QUOTE!</h2>
          <a href="tel:2019714130" class="text-white h2 inline-block 2xl:text-[3.625rem]/none font-base font-bold text-4xl lg:text-5xl xl:text-[3.625rem] hover:text-primary focus:text-primary">(201) 971-4130</a>
        </div>
        <div class="lg:col-span-3">
          <div class="footer-form bg-white rounded-md shadow-[0px_19px_26px_rgba(0,0,0,0.08)] py-6 lg:py-7 px-6 lg:px-10 lg:-mt-32 xl:-mt-40 border border-ss-blue/[0.26]">
            <?php echo do_shortcode('[gravityform id="2" title="false" description="false" ajax=true]'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container flex flex-wrap lg:flex-nowrap justify-center lg:justify-between items-center gap-4 [&_p]:text-center [&_p]:m-0 py-4">
    <figure>
      <img src="<?php echo esc_url(home_url('/wp-content/uploads/team-zoom-studios-logo-dark.png')); ?>" alt="Team Zoom Studios Logo" width="150" height="61" loading="lazy">
    </figure>
    <p>Copyright &copy; <?php echo date('Y'); ?> Team Zoom Studios, All Right Reserved</p>


    <ul class="inline-flex gap-4 -order-1 lg:order-3">
      <li><a href="https://www.instagram.com/teamzoomstudios/" target="_blank" class="inline-flex items-center justify-center text-base w-[38px] h-[38px] rounded-full bg-black border border-black text-white transition duration-200 ease-in-out hover:bg-primary hover:text-white hover:border-primary"><i class="icon-instagram"></i></a></li>
      <li><a href="https://www.facebook.com/TeamZoomStudios/" target="_blank" class="inline-flex items-center justify-center text-base w-[38px] h-[38px] rounded-full bg-black border border-black text-white transition duration-200 ease-in-out hover:bg-primary hover:text-white hover:border-primary"><i class="icon-facebook"></i></a></li>
      <li><a href="https://twitter.com/teamzoomstudios" target="_blank" class="inline-flex items-center justify-center text-base w-[38px] h-[38px] rounded-full bg-black border border-black text-white transition duration-200 ease-in-out hover:bg-primary hover:text-white hover:border-primary"><i class="icon-twitter"></i></a></li>
    </ul>
  </div>
</footer>
<!-- /footer -->

<div class="sticky-footer fixed inset-x-0 bottom-0 z-10">
  <a href="tel:2019714130" class="btn btn-dark block w-full">Call Today!</a>
</div>
<!-- /.sticky-footer -->

</div>
<!-- /.site-wrapper -->

<?php wp_footer(); ?>
</body>

</html>