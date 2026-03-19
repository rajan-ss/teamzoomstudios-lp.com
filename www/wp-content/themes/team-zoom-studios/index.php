<?php get_header(); ?>

<section class="max-lg:pt-16 max-md:pt-12 max-lg:pb-8">
  <div class="container">
    <div id="leadForm" class="bg-white rounded-md shadow-[0px_19px_26px_rgba(0,0,0,0.08)] py-6 lg:py-7 px-6 lg:px-10 lg:-mt-32 [&_.gform\_footer]:text-center [&_.gform\_footer]:block">
      <?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax=true]'); ?>
    </div>
  </div>
</section>
<!-- End Form Section -->

<section id="about-us" class="pt-12 lg:pt-16 xl:pt-32 pb-6 lg:pb-8 xl:pb-16 relative z-[1] after:absolute after:-right-0 after:bottom-0 after:bg-[url('../images/leave-frame01.png')] after:bg-no-repeat after:bg-[length:162px_197px] after:w-[162px] after:h-[197px] after:-z-[1]">
  <div class="container">
    <div class="grid items-center lg:grid-cols-2 gap-12 lg:gap-16">
      <figure>
        <img src="<?php echo esc_url(home_url('/wp-content/uploads/about-us-feature-img01.png')); ?>" alt="About Us Feature Image" width="594" height="627" loading="lazy">
      </figure>
      <div>
        <span class="block uppercase relative mb-4 pl-16 lg:pl-20 before:absolute before:top-1/2 before:-translate-y-1/2 before:left-0 before:w-12 lg:before:w-[64px] before:h-[2px] before:bg-primary sm:last-of-type:[&_p]:mb-8 lg:last-of-type:[&_p]:mb-11">About Us</span>
        <h2 class="uppercase mb-6 lg:mb-8">BEST <span class="text-primary">MEMORABLE DAY</span> OF YOUR LIFE</h2>
        <p>When the time comes to plan your wedding, finding the right team to capture your memorable day is crucial. Your wedding day is an occasion you will look back on for the rest of your life. Our goal is to create a product that reflects your vision for your special day.</p>
        <p>We are familiar with the stresses of hiring and organizing vendors, so our client’s comfort is our top priority. We are ready and willing to accommodate any special requests and discuss ideas, which in turn allows our couples to focus on being present and enjoying their day to the fullest. Don’t hesitate to reach out with any questions or concerns. We are here to help every step of the way.</p>
      </div>
    </div>
  </div>
</section>
<!-- End About Section -->

<section id="services" class="bg-primary/[0.08] py-6 lg:py-8 xl:py-16 relative z-[1] before:absolute before:-left-0 before:top-10 before:bg-[url('../images/leave-frame02.png')] before:bg-no-repeat before:bg-[length:162px_197px] before:w-[162px] before:h-[197px] before:-z-[1] after:absolute after:-right-0 after:bottom-0 after:bg-[url('../images/leave-frame01.png')] after:bg-no-repeat after:bg-[length:162px_197px] after:w-[162px] after:h-[197px] after:-z-[1]">
  <div class="container">
    <div class="text-center">
      <span class="inline-block uppercase relative mb-4 pl-16 lg:pl-20 before:absolute before:top-1/2 before:-translate-y-1/2 before:left-0 before:w-12 lg:before:w-[64px] before:h-[2px] before:bg-primary sm:last-of-type:[&_p]:mb-8 lg:last-of-type:[&_p]:mb-11">Services</span>
      <h2 class="uppercase mb-6 lg:mb-8">The <span class="text-primary">Wedding</span> Recipe</h2>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-9">
      <div class="relative max-md:text-center max-md:[&_img]:mx-auto">
        <figure>
          <img src="/wp-content/uploads/services-feature-img01.jpg" alt="Services Feature Image" width="401" height="550" loading="lazy">
        </figure>
        <div class="bg-white p-4 absolute left-0 right-4 bottom-7">
          <h3 class="text-2xl">Photography</h3>
          <p>Capturing a moment in time.</p>
          <!-- <a href="#" class="text-base">Read More <i class="icon-arrow-long-right"></i></a> -->
        </div>
      </div>
      <!-- End column -->
      <div class="relative max-md:text-center max-md:[&_img]:mx-auto">
        <figure>
          <!-- <img src="/wp-content/uploads/services-feature-img02.jpg" alt="Services Feature Image" width="401" height="550" loading="lazy"> -->
          <img src="<?php echo esc_url(home_url('/wp-content/uploads/services-feature-img02.jpg')); ?>" alt="Services Feature Image" width="401" height="550" loading="lazy">
        </figure>
        <div class="bg-white p-4 absolute left-0 right-4 bottom-7">
          <h3 class="text-2xl">Videography</h3>
          <p>Capturing your special memories.</p>
          <!-- <a href="#" class="text-base">Read More <i class="icon-arrow-long-right"></i></a> -->
        </div>
      </div>
      <!-- End column -->
      <div class="relative max-md:text-center max-md:[&_img]:mx-auto">
        <figure>
          <img src="<?php echo esc_url(home_url('/wp-content/uploads/services-feature-img03.jpg')); ?>" alt="Services Feature Image" width="401" height="550" loading="lazy">
        </figure>
        <div class="bg-white p-4 absolute left-0 right-4 bottom-7">
          <h3 class="text-2xl">Photo Booth</h3>
          <p>Give your guests an interactive experience.</p>
          <!-- <a href="#" class="text-base">Read More <i class="icon-arrow-long-right"></i></a> -->
        </div>
      </div>
      <!-- End column -->
      <div class="relative max-md:text-center max-md:[&_img]:mx-auto">
        <figure>
          <img src="<?php echo esc_url(home_url('/wp-content/uploads/services-feature-img04.jpg')); ?>" alt="Services Feature Image" width="401" height="550" loading="lazy">
        </figure>
        <div class="bg-white p-4 absolute left-0 right-4 bottom-7">
          <h3 class="text-2xl">Drone</h3>
          <p>View your special day from a different perspective.</p>
          <!-- <a href="#" class="text-base">Read More <i class="icon-arrow-long-right"></i></a> -->
        </div>
      </div>
      <!-- End column -->
      <div class="relative max-md:text-center max-md:[&_img]:mx-auto">
        <figure>
          <img src="<?php echo esc_url(home_url('/wp-content/uploads/services-feature-img05.jpg')); ?>" alt="Services Feature Image" width="401" height="550" loading="lazy">
        </figure>
        <div class="bg-white p-4 absolute left-0 right-4 bottom-7">
          <h3 class="text-2xl">Photo Albums</h3>
          <p>Reminisce on your special day at any time.</p>
          <a href="#" class="text-base">Read More <i class="icon-arrow-long-right"></i></a>
        </div>
      </div>
      <!-- End column -->
      <div class="relative max-md:text-center max-md:[&_img]:mx-auto">
        <figure>
          <img src="<?php echo esc_url(home_url('/wp-content/uploads/services-feature-img06.jpg')); ?>" alt="Services Feature Image" width="401" height="550" loading="lazy">
        </figure>
        <div class="bg-white p-4 absolute left-0 right-4 bottom-7">
          <h3 class="text-2xl">Print/Canvas</h3>
          <p>Display your special day, everyday.</p>
          <!-- <a href="#" class="text-base">Read More <i class="icon-arrow-long-right"></i></a> -->
        </div>
      </div>
      <!-- End column -->
    </div>
  </div>
</section>
<!-- End Service Section -->

<section class="bg-cover bg-center bg-no-repeat py-12 lg:py-16 xl:py-28" style="background-image: url('/wp-content/uploads/cta-banner-bg-cover.jpg');">
  <div class="container text-white sm:last-of-type:[&_p]:mb-8 lg:last-of-type:[&_p]:mb-12">
    <h2 class="uppercase mb-4 lg:mb-6">WE CAN’T WAIT TO MEET YOU!</h2>
    <p>Schedule your first zoom call or in-person meeting today!</p>

    <a href="#leadForm" class="js-has-smooth btn btn-light">Request A Quote</a>
  </div>
</section>
<!-- End Banner Section -->

<section id="benefits" class="container pt-12 lg:pt-16 xl:pt-32 pb-6 lg:pb-8 xl:pb-16">
  <div class="grid items-center lg:grid-cols-2 gap-12 lg:gap-16">
    <figure class="relative z-[1] pt-6 pl-6 pb-6 pr-6 before:absolute before:top-0 before:left-0 before:w-[249px] before:h-[216px] before:border-[5px] before:border-primary before:-z-[1] after:absolute after:-right-0 lg:after:-right-12 after:bottom-0 lg:after:-bottom-12 after:bg-[url('../images/two-leaves-frame.png')] after:bg-no-repeat after:bg-[length:167px_146px] after:w-[167px] after:h-[146px] after:-z-[1]">
      <img src="<?php echo esc_url(home_url('/wp-content/uploads/benefits-feature-img01.jpg')); ?>" alt="Benefits Feature Image" width="590" height="611" loading="lazy">
    </figure>
    <div>
      <span class="block uppercase relative mb-4 pl-16 lg:pl-20 before:absolute before:top-1/2 before:-translate-y-1/2 before:left-0 before:w-12 lg:before:w-[64px] before:h-[2px] before:bg-primary sm:last-of-type:[&_p]:mb-8 lg:last-of-type:[&_p]:mb-11">BENEFITS</span>
      <h2 class="uppercase mb-6 lg:mb-8"><span class="text-primary">AUTHENTIC</span> PHOTOS</h2>
      <p>See why so many couples have consistently chosen us to be apart of their most special day!</p>

      <ul class="list-none grid md:grid-cols-2 gap-8 lg:gap-x-16 lg:gap-y-10 lg:pt-6">
        <li class="text-base">
          <i class="icon-flower text-3xl lg:text-5xl"></i>
          <h3 class="font-base text-black/80 text-xl mt-2">Bridal Bouquet</h3>
          <p>Capture the essence unfolding before the wedding day.</p>
        </li>
        <li class="text-base">
          <i class="icon-capture text-3xl lg:text-5xl"></i>
          <h3 class="font-base text-black/80 text-xl mt-2">Capture Emotion</h3>
          <p>Freeze the heartfelt emotions of the bride and groom on their special day.</p>
        </li>
        <li class="text-base">
          <i class="icon-camera text-3xl lg:text-5xl"></i>
          <h3 class="font-base text-black/80 text-xl mt-2">Catch The Vibe</h3>
          <p>Grasp the vibrant atmosphere of your wedding through the expressions of your guests and wedding party.</p>
        </li>
        <li class="text-base">
          <i class="icon-love-hand text-3xl lg:text-5xl"></i>
          <h3 class="font-base text-black/80 text-xl mt-2">Love Shades</h3>
          <p>Witness and cherish the myriad shades of love on your special day, preserving them for a lifetime.</p>
        </li>
      </ul>
    </div>
  </div>
</section>
<!-- End Benefit Section -->

<section id="gallery" class="pt-12 lg:pt-14 xl:pt-16 pb-14 lg:pb-16 xl:pb-24 relative z-[1] after:absolute after:-right-12 after:bottom-12  after:bg-[url('../images/leave-frame03.png')] after:bg-no-repeat after:bg-[length:218px_193px] after:w-[218px] after:h-[193px] after:-z-[1]">
  <div class="container">
    <div class="text-center">
      <span class="inline-block uppercase relative mb-4 pl-16 lg:pl-20 before:absolute before:top-1/2 before:-translate-y-1/2 before:left-0 before:w-12 lg:before:w-[64px] before:h-[2px] before:bg-primary sm:last-of-type:[&_p]:mb-8 lg:last-of-type:[&_p]:mb-11">GALLERY</span>
      <h2 class="uppercase mb-6 lg:mb-8">GET READY <span class="text-primary">WITH US</span></h2>
    </div>

    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
      <figure class="lg:col-span-2 sm:h-[320px] overflow-hidden rounded-md">
        <img class="object-cover w-full h-full" src="<?php echo esc_url(home_url('/wp-content/uploads/gallery-img01.jpg')); ?>" alt="Gallery Image" width="632" height="320" loading="lazy">
      </figure>
      <figure class="sm:h-[320px] overflow-hidden rounded-md">
        <img class="object-cover w-full h-full" src="<?php echo esc_url(home_url('/wp-content/uploads/gallery-img02.jpg')); ?>" alt="Gallery Image" width="308" height="320" loading="lazy">
      </figure>
      <figure class="sm:h-[320px] overflow-hidden rounded-md">
        <img class="object-cover w-full h-full" src="<?php echo esc_url(home_url('/wp-content/uploads/gallery-img03.jpg')); ?>" alt="Gallery Image" width="308" height="320" loading="lazy">
      </figure>
      <figure class="sm:h-[320px] overflow-hidden rounded-md">
        <img class="object-cover w-full h-full" src="<?php echo esc_url(home_url('/wp-content/uploads/gallery-img04.jpg')); ?>" alt="Gallery Image" width="308" height="320" loading="lazy">
      </figure>
      <figure class="sm:h-[320px] overflow-hidden rounded-md">
        <img class="object-cover w-full h-full" src="<?php echo esc_url(home_url('/wp-content/uploads/gallery-img05.jpg')); ?>" alt="Gallery Image" width="308" height="320" loading="lazy">
      </figure>
      <figure class="lg:col-span-2 sm:h-[320px] overflow-hidden rounded-md">
        <img class="object-cover w-full h-full" src="<?php echo esc_url(home_url('/wp-content/uploads/gallery-img06.jpg')); ?>" alt="Gallery Image" width="632" height="320" loading="lazy">
      </figure>
    </div>
  </div>
</section>
<!-- End Gallery Section -->

<section id="reviews" class="testimonials pb-12 md:pb-16 lg:pb-32 xl:pb-48 relative z-[1] before:absolute before:-right-16 before:-top-12 before:bg-[url('../images/leave-frame04.png')] before:bg-no-repeat before:bg-[length:192px_167px] before:w-[192px] before:h-[167px] before:-z-[1]">
  <div class="container">
    <div class="testimonials-wrapper relative z-[1] after:absolute after:-z-[1] after:inset-y-0 after:left-0 after:right-0 lg:after:-right-[99999px] after:bg-primary/[0.12] max-md:pb-8">
      <div class="swiper mySwiper">
        <div class="swiper-wrapper max-md:pb-12">
          <div class="swiper-slide item">
            <div class="grid lg:grid-cols-2 items-center">
              <figure class="[&_img]:h-full [&_img]:w-full [&_img]:object-cover lg:h-[560px] overflow-hidden">
                <img src="<?php echo esc_url(home_url('/wp-content/uploads/testimonial-feature-img-chris.jpg')); ?>" alt="Testimonials Feature Image For Chris" width="690" height="460" loading="lazy">
              </figure>
              <div class="py-8 lg:py-12 pl-6 lg:pl-12 lg:pr-16 xl:pr-32">
                <div class="mb-4 lg:mb-5">
                  <span class="inline-block uppercase relative mb-4 pl-16 lg:pl-20 before:absolute before:top-1/2 before:-translate-y-1/2 before:left-0 before:w-12 lg:before:w-[64px] before:h-[2px] before:bg-primary sm:last-of-type:[&_p]:mb-8 lg:last-of-type:[&_p]:mb-11">TESTIMONIAL</span>
                  <h2>What Our Clients Say</h2>

                  <ul class="list-none inline-flex gap-2">
                    <li><i class="icon-star text-ss-yellow"></i></li>
                    <li><i class="icon-star text-ss-yellow"></i></li>
                    <li><i class="icon-star text-ss-yellow"></i></li>
                    <li><i class="icon-star text-ss-yellow"></i></li>
                    <li><i class="icon-star text-ss-yellow"></i></li>
                  </ul>
                </div>

                <blockquote class="relative z-[1] before:absolute before:top-0 before:left-0 before:-z-[1] before:content-['\e909'] before:font-icomoon before:text-ss-orange-100/[0.15] before:text-4xl xl:before:text-6xl pt-4 text-base">
                  <p>My wife and I used Zoom studios for our wedding photos/videos and my professional headshots. George really knows what he's doing. He is thorough and makes the process seamless. Not only are his prices great, but George was very knowledgeable and understanding of our needs. We recommend George for all photos and videography needs. We will definitely be using Zoom studios again in the future. Thank you again George!</p>
                  <strong class="text-2xl text-black/90">Chris Sayegh</strong>
                </blockquote>
              </div>
            </div>
          </div>
          <!-- /.item -->

          <div class="swiper-slide item">
            <div class="grid lg:grid-cols-2 items-center lg:[&_video]:w-full lg:[&_video]:object-cover lg:[&_video]:h-[560px] lg:[&_video]:overflow-hidden">
              <video class="swiper-video" width="1280" height="720" playsinline muted poster="<?php echo esc_url(home_url('/wp-content/uploads/lori-semerciyan-video-thumbnail.jpg')); ?>">
                <source src="<?php echo esc_url(home_url('/wp-content/uploads/lori_peter_recapV2.mp4')); ?>" type="video/mp4" />
                <source src="<?php echo esc_url(home_url('/wp-content/uploads/lori_peter_recapV2.mp4')); ?>" type="video/mp4" />
                <!-- <source src="<?php echo esc_url(home_url('/assets/videos/one-on-one-personal-training_video.webm')); ?>" type="video/webm" /> -->
                Sorry, your browser doesn\'t support embedded videos, <a href="<?php echo esc_url(home_url('/wp-content/uploads/lori_peter_recapV2.mp4')); ?>">download</a> and watch with your favorite video player!
              </video>
              <div class="py-8 lg:py-12 pl-6 lg:pl-12 lg:pr-16 xl:pr-32 ">
                <div class="mb-4 lg:mb-5">
                  <span class="inline-block uppercase relative mb-4 pl-16 lg:pl-20 before:absolute before:top-1/2 before:-translate-y-1/2 before:left-0 before:w-12 lg:before:w-[64px] before:h-[2px] before:bg-primary sm:last-of-type:[&_p]:mb-8 lg:last-of-type:[&_p]:mb-11">TESTIMONIAL</span>
                  <h2>What Our Clients Say</h2>

                  <ul class="list-none inline-flex gap-2">
                    <li><i class="icon-star text-ss-yellow"></i></li>
                    <li><i class="icon-star text-ss-yellow"></i></li>
                    <li><i class="icon-star text-ss-yellow"></i></li>
                    <li><i class="icon-star text-ss-yellow"></i></li>
                    <li><i class="icon-star text-ss-yellow"></i></li>
                  </ul>
                </div>

                <blockquote class="relative z-[1] before:absolute before:top-0 before:left-0 before:-z-[1] before:content-['\e909'] before:font-icomoon before:text-ss-orange-100/[0.15] before:text-4xl xl:before:text-6xl pt-4 text-base">
                  <p>George and his team are the BEST team to work with! I worked with George on both my engagement shoot as well as my engagement party, and his vision and quality of work is great. He has great energy and is a pleasure to work with. Will definitely continue working with him for all future photography!</p>
                  <strong class="text-2xl text-black/90">Lori Semerciyan</strong>
                </blockquote>
              </div>
            </div>
          </div>
          <!-- /.item -->

          <div class="swiper-slide item">
            <div class="grid lg:grid-cols-2 items-center">
              <figure class="[&_img]:h-full [&_img]:w-full [&_img]:object-cover lg:h-[560px] overflow-hidden">
                <img src="<?php echo esc_url(home_url('/wp-content/uploads/testimonial-feature-img-stbhatty-bhatty.jpg')); ?>" alt="Testimonials Feature Image For Stbhatty Bhatty" width="690" height="460" loading="lazy">
              </figure>
              <div class="py-8 lg:py-12 pl-6 lg:pl-12 lg:pr-16 xl:pr-32 my-6">
                <div class="mb-4 lg:mb-5">
                  <span class="inline-block uppercase relative mb-4 pl-16 lg:pl-20 before:absolute before:top-1/2 before:-translate-y-1/2 before:left-0 before:w-12 lg:before:w-[64px] before:h-[2px] before:bg-primary sm:last-of-type:[&_p]:mb-8 lg:last-of-type:[&_p]:mb-11">TESTIMONIAL</span>
                  <h2>What Our Clients Say</h2>

                  <ul class="list-none inline-flex gap-2">
                    <li><i class="icon-star text-ss-yellow"></i></li>
                    <li><i class="icon-star text-ss-yellow"></i></li>
                    <li><i class="icon-star text-ss-yellow"></i></li>
                    <li><i class="icon-star text-ss-yellow"></i></li>
                    <li><i class="icon-star text-ss-yellow"></i></li>
                  </ul>
                </div>

                <blockquote class="relative z-[1] before:absolute before:top-0 before:left-0 before:-z-[1] before:content-['\e909'] before:font-icomoon before:text-ss-orange-100/[0.15] before:text-4xl xl:before:text-6xl pt-4 text-base">
                  <p>We had George to cover the wedding events' photography for my daughter and he did a great job with editing and made all event a memorable for us. The pictures were simply beautiful with all the edits he preformed! He is professional and very committed to his work done amazingly. I would strongly recommend him for the best pictures quality and very sharp edits.</p>
                  <strong class="text-2xl text-black/90">Stbhatty Bhatty</strong>
                </blockquote>
              </div>
            </div>
          </div>
          <!-- /.item -->

          <div class="swiper-slide item">
            <div class="grid lg:grid-cols-2 items-center">
              <figure class="[&_img]:h-full [&_img]:w-full [&_img]:object-cover lg:h-[560px] overflow-hidden">
                <img src="<?php echo esc_url(home_url('/wp-content/uploads/testimonial-feature-img-genesis.jpg')); ?>" alt="Testimonials Feature Image For Genesis" width="690" height="1035" loading="lazy">
              </figure>
              <div class="py-8 lg:py-12 pl-6 lg:pl-12 lg:pr-16 xl:pr-32 my-6">
                <div class="mb-4 lg:mb-5">
                  <span class="inline-block uppercase relative mb-4 pl-16 lg:pl-20 before:absolute before:top-1/2 before:-translate-y-1/2 before:left-0 before:w-12 lg:before:w-[64px] before:h-[2px] before:bg-primary sm:last-of-type:[&_p]:mb-8 lg:last-of-type:[&_p]:mb-11">TESTIMONIAL</span>
                  <h2>What Our Clients Say</h2>

                  <ul class="list-none inline-flex gap-2">
                    <li><i class="icon-star text-ss-yellow"></i></li>
                    <li><i class="icon-star text-ss-yellow"></i></li>
                    <li><i class="icon-star text-ss-yellow"></i></li>
                    <li><i class="icon-star text-ss-yellow"></i></li>
                    <li><i class="icon-star text-ss-yellow"></i></li>
                  </ul>
                </div>

                <blockquote class="relative z-[1] before:absolute before:top-0 before:left-0 before:-z-[1] before:content-['\e909'] before:font-icomoon before:text-ss-orange-100/[0.15] before:text-4xl xl:before:text-6xl pt-4 text-base">
                  <p>George was AMAZING! I could not recommend Zoom Studios enough... he was so accommodating and listedned to everything that we had envisioned for our engagement photo shoot. We can't wait to use the team for our wedding day.</p>
                  <strong class="text-2xl text-black/90">Genesis Pepe</strong>
                </blockquote>
              </div>
            </div>
          </div>
          <!-- /.item -->

          <div class="swiper-slide item">
            <div class="grid lg:grid-cols-2 items-center lg:[&_video]:w-full lg:[&_video]:object-cover lg:[&_video]:h-[560px] lg:[&_video]:overflow-hidden">
              <video class="swiper-video" width="1280" height="720" playsinline muted poster="<?php echo esc_url(home_url('/wp-content/uploads/nicole-brain-video-thumbnail.jpg')); ?>">
                <source src="<?php echo esc_url(home_url('/wp-content/uploads/nicole_brian_recapV2.mp4')); ?>" type="video/mp4" />
                <!-- <source src="assets/videos/nicole_brian_recapV2.webm" type="video/webm" /> -->
                Sorry, your browser doesn\'t support embedded videos, <a href="<?php echo esc_url(home_url('/wp-content/uploads/nicole_brian_recapV2.mp4')); ?>">download</a> and watch with your favorite video player!
              </video>
              <div class="py-8 lg:py-12 pl-6 lg:pl-12 lg:pr-16 xl:pr-32 my-6">
                <div class="mb-4 lg:mb-5">
                  <span class="inline-block uppercase relative mb-4 pl-16 lg:pl-20 before:absolute before:top-1/2 before:-translate-y-1/2 before:left-0 before:w-12 lg:before:w-[64px] before:h-[2px] before:bg-primary sm:last-of-type:[&_p]:mb-8 lg:last-of-type:[&_p]:mb-11">TESTIMONIAL</span>
                  <h2>What Our Clients Say</h2>

                  <ul class="list-none inline-flex gap-2">
                    <li><i class="icon-star text-ss-yellow"></i></li>
                    <li><i class="icon-star text-ss-yellow"></i></li>
                    <li><i class="icon-star text-ss-yellow"></i></li>
                    <li><i class="icon-star text-ss-yellow"></i></li>
                    <li><i class="icon-star text-ss-yellow"></i></li>
                  </ul>
                </div>

                <blockquote class="relative z-[1] before:absolute before:top-0 before:left-0 before:-z-[1] before:content-['\e909'] before:font-icomoon before:text-ss-orange-100/[0.15] before:text-4xl xl:before:text-6xl pt-4 text-base">
                  <p>We couldn't have been with our decision to use Zoom Studios as our wedding videographer. If you're considering hiring them, look no further. They not only captured our special day; they captured the essence of our love, our celebration, and all the magical little moments. Their ability to be present and yet discreet allowed them to catch candid moments we will forever be grateful for. We were surprised to discover moments we didn't even know happened until we watched our video.</p>
                  <p>George is not just a professional but also an amazing & genuine person who put us at ease throughout the whole wedding planning process. His dedication to making my vision come to life and attention to detail truly exceeded my expectations.</p>
                  <p>My husband and I can't thank George and his team enough. I'll be coming to them for all my future events.</p>
                  <strong class="text-2xl text-black/90">Nicole Kalabalik</strong>
                </blockquote>
              </div>
            </div>
          </div>
          <!-- /.item -->
        </div>
        <button class="swiper-button-next" type="button"></button>
        <button class="swiper-button-prev" type="button"></button>
      </div>
    </div>
  </div>
</section>
<!-- End Testimonial Section -->

<?php get_footer(); ?>