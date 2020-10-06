<?php include('header.php'); ?>
<nav class="breadcrumb">
  <div class="container">
    <ul class="breadcrumb-list">
      <li class="breadcrumb-list__item">
        <a href="" class="breadcrumb-list__link">Home</a>
      </li>
      <li class="breadcrumb-list__item">
        <a href="" class="breadcrumb-list__link">Flash Offers</a>
      </li>
      <li class="breadcrumb-list__item">Grand Hilton Hotel</li>
    </ul>
  </div>
</nav>

<section class="hotel">
  <div class="container">
    <div class="hotel-wrapper">
      <div class="hotel-info">
        <div class="hotel-info__wrapper">
          <div class="rating">
            <svg width="8" height="8">
              <use xlink:href="img\icons.svg#star"></use>
            </svg>
            <svg width="8" height="8">
              <use xlink:href="img\icons.svg#star"></use>
            </svg>
            <svg width="8" height="8">
              <use xlink:href="img\icons.svg#star"></use>
            </svg>
            <svg width="8" height="8">
              <use xlink:href="img\icons.svg#star"></use>
            </svg>
            <svg width="8" height="8">
              <use xlink:href="img\icons.svg#star"></use>
            </svg>
          </div>
          <h1 class="hotel-title">Grand hilton hotel</h1>
          <span class="offer hotel-info__offer">Flash Offer</span>
        </div>
        <p class="descr">
          Half-Board/ All Inclusive + Complimentary Activities + Child Stays
          Free
        </p>
      </div>
      <div class="hotel-rating">
        <span class="hotel-rating__text">User Rattings</span>
        <span class="hotel-rating__counter">4.5/<small>5</small></span>
      </div>
    </div>
    <div class="hotel-grid">
      <div class="slider hotel__slider">
        <div class="swiper-container hotel__slider-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide hotel__swiper-slide">
              <img class="js-fit-img" src="./img/hotel-slider/hotel-slide-1.jpg" alt="Slid" />
            </div>
            <div class="swiper-slide hotel__swiper-slide">
              <img class="js-fit-img" src="./img/hotel-slider/hotel-slide-2.jpg" alt="Slid" />
            </div>
            <div class="swiper-slide hotel__swiper-slide">
              <img class="js-fit-img" src="./img/hotel-slider/hotel-slide-3.jpg" alt="Slid" />
            </div>
            <div class="swiper-slide hotel__swiper-slide">
              <img class="js-fit-img" src="./img/hotel-slider/hotel-slide-4.jpg" alt="Slid" />
            </div>
            <div class="swiper-slide hotel__swiper-slide">
              <img class="js-fit-img" src="./img/hotel-slider/hotel-slide-5.jpg" alt="Slid" />
            </div>
          </div>
          <button class="slider-btn slider-btn_prev">
            <svg width="10" height="16">
              <use xlink:href="img\icons.svg#arrow-left"></use>
            </svg>
          </button>
          <button class="slider-btn slider-btn_next">
            <svg width="10" height="16">
              <use xlink:href="img\icons.svg#arrow-right"></use>
            </svg>
          </button>
        </div>
      </div>
      <div class="hotel__additional-info">
        <div class="booking">
          <div class="booking__info">
            <div class="price">
              <span class="price__start">price starts as</span>
              <span class="price__pricetag">$ 8,500</span>
              <span class="price__per-room">per room / night</span>
            </div>
            <div class="person-room">
              <div class="person-room__text">
                <svg width="14" height="14" class="person-room__icon">
                  <use xlink:href="img\icons.svg#booking-user"></use>
                </svg>
                <span class="person-room__descr">2 x Guests</span>
              </div>
              <div class="person-room__text">
                <svg width="14" height="14" class="person-room__icon">
                  <use xlink:href="img\icons.svg#booking-home"></use>
                </svg>
                <span class="person-room__descr">1 x Room</span>
              </div>
            </div>
          </div>
          <div class="booking__call-center call-center">
            <span class="call-center__text">Quick Booking</span>
            <a href="tel:12100" class="call-center__num">
              <svg width="14" height="14" class="call-center__icon">
                <use xlink:href="img\icons.svg#booking-phone"></use>
              </svg>
              <span class="call-center__tel">12100</span>
            </a>
          </div>
          <button data-toggle="modal" class="button booking-button">View Other Options</button>
        </div>
        <div class="map" id="map"></div>
      </div>
    </div>
  </div>
</section>

<section class="packages">
  <div class="container">
    <h2 class="packages-title">Other Packages</h2>
    <div class="packages-wrapper">
      <div class="packages-card packages-card--big"  data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease">
        <div class="packages-card__block-image packages-card__block-image--big">
          <img src="./img/packages/img-1.jpg" alt="Packages: image"
            class="packages-card__image packages-card__image--big">
          <span class="packages-card__sale packages-card__sale--big">Flash Offer</span>
        </div>
        <div class="packages-card__inform packages-card__inform--big">
          <div class="packages-card__info packages-card__info--big">
            <div class="rating packages-card__rating packages-card__rating--big">
              <svg width="8" height="8">
                <use xlink:href="img\icons.svg#star"></use>
              </svg>
              <svg width="8" height="8">
                <use xlink:href="img\icons.svg#star"></use>
              </svg>
              <svg width="8" height="8">
                <use xlink:href="img\icons.svg#star"></use>
              </svg>
              <svg width="8" height="8">
                <use xlink:href="img\icons.svg#star"></use>
              </svg>
              <svg width="8" height="8">
                <use xlink:href="img\icons.svg#star"></use>
              </svg>
            </div>
            <h3 class="packages-card__title packages-card__title--big">Hotel Blue Haven</h3>
            <p class="packages-card__text packages-card__text--big">Aute quis duis excepteur excepteur ipsum cat
              eiusmod consectetur enim
              laborum magna llit. Ipsum est fugiat velit ea
              llamco do esse ut in veniam sun in onsequat. Aute quis duis epteur excepteur ipsum occaecat eiusmod
              nsectetur enim
              laborum magna mollit. Ipsum est fugiat velit ea ullamco do</p>
            <div class="person-room packages-room packages-room--big">
              <div class=" packages-room__text packages-room__text--big person-room__text">
                <svg width="14" height="14" class="packages-room__icon packages-room__icon--big">
                  <use xlink:href="img/icons.svg#location"></use>
                </svg>
                <span class="packages-room__descr packages-room__descr--big person-room__descr">1749 Wheeler Ridge
                  Delaware</span>
              </div>
              <div class="packages-room__text packages-room__text--big person-room__text">
                <svg width="14" height="14" class="packages-room__icon packages-room__icon--big">
                  <use xlink:href="img\icons.svg#booking-user"></use>
                </svg>
                <span class="packages-room__descr packages-room__descr--big person-room__descr">2 x Guests</span>
              </div>
              <div class="packages-room__text packages-room__text--big person-room__text">
                <svg width="14" height="14" class="packages-room__icon packages-room__icon--big">
                  <use xlink:href="img\icons.svg#booking-home"></use>
                </svg>
                <span class="packages-room__descr packages-room__descr--big person-room__descr">1 x Room</span>
              </div>
            </div>
            <div class="packages-card__price packages-card__price--big">
              <span class="packages__price-old packages__price-old--big">$ 10,500</span>
              <span class="packages__price-new packages__price-new--big">$ 8,500</span>
            </div>
            <button data-toggle="modal" class="button packages-card__btn packages-card__btn--big">Book Now</button>
          </div>
        </div>
      </div>

      <div class="packages-card"  data-aos="fade-up" data-aos-delay="300" data-aos-duration="500" data-aos-easing="ease">
        <div class="packages-card__block-image">
          <img src="./img/packages/img-2.jpg" alt="Packages: image" class="packages-card__image">
          <span class="packages-card__sale">Flash Offer</span>
        </div>
        <div class="packages-card__inform">
          <div class="packages-card__info">
            <h3 class="packages-card__title">LUX* Belle Mare</h3>
            <div class="person-room packages-room">
              <div class="packages-room__text person-room__text">
                <svg width="14" height="14" class="packages-room__icon">
                  <use xlink:href="img/icons.svg#location"></use>
                </svg>
                <span class="packages-room__descr person-room__descr">1749 Wheeler Ridge Delaware</span>
              </div>
              <div class="packages-room__text person-room__text">
                <svg width="14" height="14" class="packages-room__icon">
                  <use xlink:href="img\icons.svg#booking-user"></use>
                </svg>
                <span class="packages-room__descr person-room__descr">2 x Guests</span>
              </div>
              <div class="packages-room__text person-room__text">
                <svg width="14" height="14" class="packages-room__icon">
                  <use xlink:href="img\icons.svg#booking-home"></use>
                </svg>
                <span class="packages-room__descr person-room__descr">1 x Room</span>
              </div>
            </div>
            <div class="packages-card__price">
              <span class="packages__price-old">$ 8,500</span>
              <span class="packages__price-new">$ 3,000</span>
            </div>
            <button data-toggle="modal" class="button packages-card__btn">Book Now</button>
          </div>
        </div>
      </div>

      <div class="packages-card"  data-aos="fade-up" data-aos-delay="500" data-aos-duration="500" data-aos-easing="ease">
        <div class="packages-card__block-image">
          <img src="./img/packages/img-3.jpg" alt="Packages: image" class="packages-card__image">
          <span class="packages-card__sale">Flash Offer</span>
        </div>
        <div class="packages-card__inform">
          <div class="packages-card__info">
            <h3 class="packages-card__title">White Palace</h3>
            <div class="person-room packages-room">
              <div class="packages-room__text person-room__text">
                <svg width="14" height="14" class="packages-room__icon">
                  <use xlink:href="img/icons.svg#location"></use>
                </svg>
                <span class="packages-room__descr person-room__descr">1749 Wheeler Ridge Delaware</span>
              </div>
              <div class="packages-room__text person-room__text">
                <svg width="14" height="14" class="packages-room__icon">
                  <use xlink:href="img\icons.svg#booking-user"></use>
                </svg>
                <span class="packages-room__descr person-room__descr">2 x Guests</span>
              </div>
              <div class="packages-room__text person-room__text">
                <svg width="14" height="14" class="packages-room__icon">
                  <use xlink:href="img\icons.svg#booking-home"></use>
                </svg>
                <span class="packages-room__descr person-room__descr">1 x Room</span>
              </div>
            </div>
            <div class="packages-card__price">
              <span class="packages__price-old">$ 10,500</span>
              <span class="packages__price-new">$ 9,500</span>
            </div>
            <button data-toggle="modal" class="button packages-card__btn">Book Now</button>
          </div>
        </div>
      </div>

      <div class="packages-card"  data-aos="fade-up" data-aos-delay="700" data-aos-duration="500" data-aos-easing="ease">
        <div class="packages-card__block-image">
          <img src="./img/packages/img-4.jpg" alt="Packages: image" class="packages-card__image">
          <span class="packages-card__sale">Flash Offer</span>
        </div>
        <div class="packages-card__inform">
          <div class="packages-card__info">
            <h3 class="packages-card__title">Luxury Place</h3>
            <div class="person-room packages-room">
              <div class="packages-room__text person-room__text">
                <svg width="14" height="14" class="packages-room__icon">
                  <use xlink:href="img/icons.svg#location"></use>
                </svg>
                <span class="packages-room__descr person-room__descr">1749 Wheeler Ridge Delaware</span>
              </div>
              <div class="packages-room__text person-room__text">
                <svg width="14" height="14" class="packages-room__icon">
                  <use xlink:href="img\icons.svg#booking-user"></use>
                </svg>
                <span class="packages-room__descr person-room__descr">2 x Guests</span>
              </div>
              <div class="packages-room__text person-room__text">
                <svg width="14" height="14" class="packages-room__icon">
                  <use xlink:href="img\icons.svg#booking-home"></use>
                </svg>
                <span class="packages-room__descr person-room__descr">1 x Room</span>
              </div>
            </div>
            <div class="packages-card__price">
              <span class="packages__price-old">$ 4,500</span>
              <span class="packages__price-new">$ 2,500</span>
            </div>
            <button data-toggle="modal" class="button packages-card__btn">Book Now</button>
          </div>
        </div>
      </div>

      <div class="packages-card"  data-aos="fade-up" data-aos-delay="900" data-aos-duration="500" data-aos-easing="ease">
        <div class="packages-card__block-image">
          <img src="./img/packages/img-5.jpg" alt="Packages: image" class="packages-card__image">
          <span class="packages-card__sale">Flash Offer</span>
        </div>
        <div class="packages-card__inform">
          <div class="packages-card__info">
            <h3 class="packages-card__title">Hotel Five Star</h3>
            <div class="person-room packages-room">
              <div class="packages-room__text person-room__text">
                <svg width="14" height="14" class="packages-room__icon">
                  <use xlink:href="img/icons.svg#location"></use>
                </svg>
                <span class="packages-room__descr person-room__descr">1749 Wheeler Ridge Delaware</span>
              </div>
              <div class="packages-room__text person-room__text">
                <svg width="14" height="14" class="packages-room__icon">
                  <use xlink:href="img\icons.svg#booking-user"></use>
                </svg>
                <span class="packages-room__descr person-room__descr">2 x Guests</span>
              </div>
              <div class="packages-room__text person-room__text">
                <svg width="14" height="14" class="packages-room__icon">
                  <use xlink:href="img\icons.svg#booking-home"></use>
                </svg>
                <span class="packages-room__descr person-room__descr">1 x Room</span>
              </div>
            </div>
            <div class="packages-card__price">
              <span class="packages__price-old">$ 6,500</span>
              <span class="packages__price-new">$ 3,500</span>
            </div>
            <button data-toggle="modal" class="button packages-card__btn">Book Now</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="newsletter" data-type="background" data-speed="5">
  <div class="container">
    <div class="newsletter-wrapper">
      <div class="newsletter-name">
        <span class="newsletter__subtitle">subscribe to our</span>
        <h2 class="newsletter__title">Newsletter</h2>
      </div>
      <form action="send.php" method="POST" class="search newsletter__search form">
        <input type="hidden" name="template" value="template_1">
        <div class="newsletter__search_group">
          <input name="email" type="email" class="newsletter__input" placeholder="Your email address" required />
        </div>
        <button class="newsletter__button">Send</button>
      </form>
    </div>
  </div>
</section>

<section class="reviews">
  <div class="container">
    <h2 class="reviews__title">What people thinks about us</h2>
    <div class="slider">
      <div class="swiper-container reviews__slider-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="reviews-slider reviews-slider__item">
              <div class="reviews-slider__profile">
                <div class="reviews-slider__image">
                  <img src="./img/reviews/avatar-reviews-1.jpg" alt="Avatar: Megan Fox" class="reviews-slider__avatar">
                </div>
                <h3 class="reviews-slider__username">Megan Fox</h3>
                <span class="reviews-slider__date">Stayed 18 Nov, 2019</span>
                <div class="rating">
                  <svg width="8" height="8">
                    <use xlink:href="img\icons.svg#star"></use>
                  </svg>
                  <svg width="8" height="8">
                    <use xlink:href="img\icons.svg#star"></use>
                  </svg>
                  <svg width="8" height="8">
                    <use xlink:href="img\icons.svg#star"></use>
                  </svg>
                  <svg width="8" height="8">
                    <use xlink:href="img\icons.svg#star"></use>
                  </svg>
                  <svg width="8" height="8">
                    <use xlink:href="img\icons.svg#star"></use>
                  </svg>
                </div>
              </div>
              <p class="reviews-slider__text">
                It was very nice hotel with cleanliness. Staff behavior was good and polite. They welcome us very
                well. Issue was only that Lift was not in working and we were allotted to 3rd floor and amenities
                articles were in corner of gallery which were giving bad feeling. Breakfast was good and support of
                the staff was also very nice. Location is not good as per atmosphere, it is very nearby most of the
                popular places but self location in a narrow street is not good. Overall it was a good experience and
                could recommend.
              </p>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="reviews-slider reviews-slider__item">
              <div class="reviews-slider__profile">
                <div class="reviews-slider__image">
                  <img src="./img/reviews/avatar-reviews-3.jpg" alt="Avatar: Stephen Wheeler"
                    class="reviews-slider__avatar">
                </div>
                <h3 class="reviews-slider__username">Stephen Wheeler</h3>
                <span class="reviews-slider__date">Stayed 29 Oct, 2018</span>
                <div class="rating">
                  <svg width="8" height="8">
                    <use xlink:href="img\icons.svg#star"></use>
                  </svg>
                  <svg width="8" height="8">
                    <use xlink:href="img\icons.svg#star"></use>
                  </svg>
                  <svg width="8" height="8">
                    <use xlink:href="img\icons.svg#star"></use>
                  </svg>
                  <svg width="8" height="8">
                    <use xlink:href="img\icons.svg#star"></use>
                  </svg>
                  <svg width="8" height="8">
                    <use xlink:href="img\icons.svg#star"></use>
                  </svg>
                </div>
              </div>
              <p class="reviews-slider__text">
                Hotel with a good view, but near the road. The lake is beautiful. Kayak rentals are closed. The noise
                of the birds woke up at about 6 am. The private beach was dirty, very small and completely
                uncomfortable. On the plus side, there is a grill and a couple of benches in the interior. The room
                had a balcony, bathroom, a small kitchenette, refrigerator, coffee maker. But there are no dishes
                except cups.
              </p>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="reviews-slider reviews-slider__item">
              <div class="reviews-slider__profile">
                <div class="reviews-slider__image">
                  <img src="./img/reviews/avatar-reviews-4.jpg" alt="Avatar: Michael Thomas"
                    class="reviews-slider__avatar">
                </div>
                <h3 class="reviews-slider__username">Michael Thomas</h3>
                <span class="reviews-slider__date">Stayed 15 Sep, 2012</span>
                <div class="rating">
                  <svg width="8" height="8">
                    <use xlink:href="img\icons.svg#star"></use>
                  </svg>
                  <svg width="8" height="8">
                    <use xlink:href="img\icons.svg#star"></use>
                  </svg>
                  <svg width="8" height="8">
                    <use xlink:href="img\icons.svg#star"></use>
                  </svg>
                  <svg width="8" height="8">
                    <use xlink:href="img\icons.svg#star"></use>
                  </svg>
                  <svg width="8" height="8">
                    <use xlink:href="img\icons.svg#star"></use>
                  </svg>
                </div>
              </div>
              <p class="reviews-slider__text">
                Convenient transport location of the hotel. The room is clean, daily cleaning. The room had all the
                necessary household appliances, a kitchenette, which allows you to cook food without leaving the room.
                The daily breakfast is a lunch box with a set of familiar products - tea, coffee, milk, cookies, etc.
                The iron is in the public domain, which is very important. The room is cozy, the bed is just super!
                The staff are friendly and welcoming. Thank!
              </p>
            </div>
          </div>
        </div>
        <button class="reviews-btn reviews-btn_prev">
          <svg width="10" height="16">
            <use xlink:href="img\icons.svg#arrow-left"></use>
          </svg>
        </button>
        <button class="reviews-btn reviews-btn_next">
          <svg width="10" height="16">
            <use xlink:href="img\icons.svg#arrow-right"></use>
          </svg>
        </button>
      </div>
    </div>
  </div>
</section>

<section class="activities">
  <div class="container">
    <h2 class="activities__title">Other Activities</h2>
    <div class="activities-wrapper">
      <div class="activities__card activity"  data-aos="zoom-in"  data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease">
        <img src="./img/activities-card/card-1.jpg" alt="Card: activity" class="activity-imgbg">
        <div class="activity-text">
          <h3 class="activity-title">The curious corner<br> of chamarel</h3>
          <button class="button activity-button">Book Now</button>
        </div>
      </div>
      <div class="activities__card activity"  data-aos="zoom-in"  data-aos-delay="300" data-aos-duration="1000" data-aos-easing="ease">
        <img src="./img/activities-card/card-2.jpg" alt="Card: activity" class="activity-imgbg js-fit-img">
        <div class="activity-text">
          <h3 class="activity-title">Gymkhana club golf course</h3>
          <button class="button activity-button">Book Now</button>
        </div>
      </div>
      <div class="activities__card activity"  data-aos="zoom-in"  data-aos-delay="500" data-aos-duration="1000" data-aos-easing="ease">
        <img src="./img/activities-card/card-3.jpg" alt="Card: activity" class="activity-imgbg js-fit-img">
        <div class="activity-text">
          <h3 class="activity-title">Tamarind falls hiking<br> trip - full day</h3>
          <button class="button activity-button">Book Now</button>
        </div>
      </div>
      <div class="activities__card activity"  data-aos="zoom-in"  data-aos-delay="700" data-aos-duration="1000" data-aos-easing="ease">
        <img src="./img/activities-card/card-4.jpg" alt="Card: activity" class="activity-imgbg js-fit-img">
        <div class="activity-text">
          <h3 class="activity-title">The blue marine discovery quest</h3>
          <button class="button activity-button">Book Now</button>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="modal">
  <div class="modal__overlay"></div>
  <div class="modal__dialog">
    <a href="#" class="modal__close" data-toggle="modalClose">
      <svg width="17" height="16" class="modal__close_btn">
        <use xlink:href="img/icons.svg#close-modal"></use>
      </svg>
    </a>
    <h3 class="modal__title">Booking</h3>
    <form action="send.php" method="POST" class="modal__form form">
      <input type="hidden" name="template" value="template_2">
      <div class="modal__form_group">
        <input name="name" type="text" class="input modal__input" placeholder="Your Full Name*" minlength="2" required>
      </div>
      <div class="modal__form_group">
        <input name="phone" type="tel" class="input modal__input" placeholder="Phone Number*" required>
      </div>
      <div class="modal__form_group">
        <input name="email" type="email" class="input modal__input" placeholder="Email*" required>
      </div>
      <textarea name="message" cols="30" rows="6" class="modal__message" placeholder="Message"
        style="resize: none;"></textarea>
      <div class="modal__btn-block">
        <button class="button modal__button">Send</button>
        <span class="modal__info">* Required Fields</span>
      </div>
    </form>
  </div>
</div>

<?php include('footer.php'); ?>