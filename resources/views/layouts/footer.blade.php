    <!-- start section contact us  -->
    <section class="contact-us">
        <div class="container">
          <div class="contact-us-all">
            <div class="contact">
              <a href="tel:0580125943"
                >0580125943, 0581805441 <i class="fa-solid fa-phone a-one"></i>
              </a>
              <a href="mailto:inf@janagate.com.com">
                inf@janagate.com <i class="fa-regular fa-envelope"></i>
              </a>
              <a href="{{ url('/') }}">
                www.janagate.com <i class="fa-solid fa-globe a-three"></i>
              </a>
            </div>
            <div class="img-contact">
              <img src="{{asset('assets/images/logo-jana-footer.png')}}" alt="" />
            </div>
            <div class="text-img-contact">
              <img src="{{asset('assets/images/img-sell-with.png')}}" alt="" />
              <p>
            {{ trans('footer.vision') }}
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- end section contact us  -->

      <!-- start footer -->
      <footer>
        <div class="container h-foot">
          <div class="foot-all">
            <div class="txt-foot-one">
              <h5>
                {{ trans('footer.address') }}<i class="fa-solid fa-location-dot"></i>
              </h5>
            </div>
            <div class="txt-foot-two">
              <div class="link-foot">
                <a href="#">{{ trans('footer.policy') }}</a>
                <a href="#">{{ trans('footer.privacy') }}</a>
                <a href="#">{{ trans('footer.usage-policy') }}</a>
                <a href="{{  route('landing.page') }}">{{ trans('footer.contact-us') }}</a>
              </div>
              <div class="logo-foot">
                <a href="http://www.facebook.com"
                  ><i class="fa-brands fa-facebook-f"></i
                ></a>
                <a href="http://www.instagram.com"
                  ><i class="fa-brands fa-instagram"></i
                ></a>
                <a href="http://www.twitter.com"
                  ><i class="fa-brands fa-twitter"></i
                ></a>
                <a href="http://www.linkedin.com"
                  ><i class="fa-brands fa-linkedin-in"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <!-- end footer -->
