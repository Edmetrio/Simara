@extends('template')

@section('content')

<main id="main">
        <section class="content-block bg-white">
          <div class="container">
            <header class="content-heading">
              <h2 class="main-heading">THE ADVENTURE</h2>
              <span class="main-subtitle">Mastering the art of perfect adventure for 10+ years in the
                wild.</span>
              <div class="seperator"></div>
            </header>
            <div class="adventure-holder gallery-home-holder">
              <div class="row">
                <div class="col-md-6 img-block">
                  <!-- gallery list -->
                  <ul class="gallery-list gallery-with-icon">
                    <li>
                      <a href="#" class="thumbnail">
                        <img src="{{asset('assets/img/gallery/img-01.jpg')}}" height="165" width="170" alt="image description" />
                        <span class="hover icon-bird"></span>
                        <span class="info">aerial</span>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="thumbnail">
                        <img src="{{asset('assets/img/gallery/img-02.jpg')}}" height="165" width="170" alt="image description" />
                        <span class="hover icon-peak"></span>
                        <span class="info">land</span>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="thumbnail">
                        <img src="{{asset('assets/img/gallery/img-03.jpg')}}" height="165" width="170" alt="image description" />
                        <span class="hover icon-water"></span>
                        <span class="info">water</span>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="thumbnail">
                        <img src="{{asset('assets/img/gallery/img-04.jpg')}}" height="165" width="170" alt="image description" />
                        <span class="hover icon-asia"></span>
                        <span class="info">asia</span>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="thumbnail">
                        <img src="{{asset('assets/img/gallery/img-05.jpg')}}" height="165" width="170" alt="image description" />
                        <span class="hover icon-arctic"></span>
                        <span class="info">arctic</span>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="thumbnail">
                        <img src="{{asset('assets/img/gallery/img-06.jpg')}}" height="165" width="170" alt="image description" />
                        <span class="hover icon-africa"></span>
                        <span class="info">africa</span>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="thumbnail">
                        <img src="{{asset('assets/img/gallery/img-07.jpg')}}" height="165" width="170" alt="image description" />
                        <span class="hover icon-plant"></span>
                        <span class="info">nature</span>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="thumbnail">
                        <img src="{{asset('assets/img/gallery/img-08.jpg')}}" height="165" width="170" alt="image description" />
                        <span class="hover icon-wildlife"></span>
                        <span class="info">wildness</span>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="thumbnail">
                        <img src="{{asset('assets/img/gallery/img-09.jpg')}}" height="165" width="170" alt="image description" />
                        <span class="hover icon-diamond"></span>
                        <span class="info">all</span>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="col-md-6 text-block">
                  <div class="centered">
                    <h2 class="intro-heading">Living a Life of Adventure</h2>
                    <p class="intro">
                      This is Photoshop's version of Lorem Ipsum. Proin
                      gravida nibh vel velit auctor aliquet. Aenean
                      sollicitudin, lorem quis bibendum auctor, nisi elit
                      consequat ipsum, nec sagittis sem nibh id elit. Duis sed
                      odio sit amet nibh vulputate cursus a sit amet mauris.
                      Morbi accumsan ipsum velit.
                    </p>
                    <a href="#" class="btn btn-info-sub btn-md btn-shadow radius">Dig More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- special block -->
        <aside class="special-block">
          <div class="container">
            <p class="special-text">
              Get special discount on select treks, this week.
              <strong>Call <a href="tel:157757525">+1 5775 7525</a></strong>
            </p>
          </div>
        </aside>
        <!-- article list holder -->
        <div class="content-block content-spacing">
          <div class="container">
            <header class="content-heading">
              <h2 class="main-heading">POPULAR TOURS</h2>
              <span class="main-subtitle">We have a unique way of meeting your adventurous
                expectations!</span>
              <div class="seperator"></div>
            </header>
            <div class="content-holder">
              <div class="row db-3-col">
                <article class="col-sm-6 col-md-4 article has-hover-s3">
                  <div class="img-wrap">
                    <a href="#">
                      <img src="{{asset('assets/img/listing/img-01.jpg')}}" height="215" width="370" alt="image description" />
                    </a>
                    <div class="img-caption text-uppercase">
                      Discover Timeless
                    </div>
                    <div class="hover-article">
                      <div class="star-rating">
                        <span><span class="icon-star"></span></span>
                        <span><span class="icon-star"></span></span>
                        <span><span class="icon-star"></span></span>
                        <span><span class="icon-star"></span></span>
                        <span class="disable"><span class="icon-star"></span></span>
                      </div>
                      <div class="icons">
                        <a href="#"><span class="icon-heart"></span></a>
                        <a href="#"><span class="icon-reply"></span></a>
                      </div>
                      <div class="info-footer">
                        <span class="price">from <span>$2749</span></span>
                        <a href="#" class="link-more">Explore</a>
                      </div>
                    </div>
                  </div>
                  <h3><a href="#">Jungle safari for families</a></h3>
                  <p>
                    This is Photoshop's version of Lorem Ipsum. Proin gravida
                    nibh vel velit auctor aliquet. Aenean sollicitudin, lorem
                    quis bibendum auctor, nisi elit consequat ipsum,
                  </p>
                </article>
                <article class="col-sm-6 col-md-4 article has-hover-s3">
                  <div class="img-wrap">
                    <a href="#">
                      <img src="{{asset('assets/img/listing/img-02.jpg')}}" height="215" width="370" alt="image description" />
                    </a>
                    <div class="img-caption text-uppercase">
                      Finding Egyptians
                    </div>
                    <div class="hover-article">
                      <div class="star-rating">
                        <span><span class="icon-star"></span></span>
                        <span><span class="icon-star"></span></span>
                        <span><span class="icon-star"></span></span>
                        <span><span class="icon-star"></span></span>
                        <span class="disable"><span class="icon-star"></span></span>
                      </div>
                      <div class="icons">
                        <a href="#"><span class="icon-heart"></span></a>
                        <a href="#"><span class="icon-reply"></span></a>
                      </div>
                      <div class="info-footer">
                        <span class="price">from <span>$2749</span></span>
                        <a href="#" class="link-more">Explore</a>
                      </div>
                    </div>
                  </div>
                  <h3><a href="#">Nature wildlife photography</a></h3>
                  <p>
                    This is Photoshop's version of Lorem Ipsum. Proin gravida
                    nibh vel velit auctor aliquet. Aenean sollicitudin, lorem
                    quis bibendum auctor, nisi elit consequat ipsum,
                  </p>
                </article>
                <article class="col-sm-6 col-md-4 article has-hover-s3">
                  <div class="img-wrap">
                    <a href="#">
                      <img src="{{asset('assets/img/listing/img-03.jpg')}}" height="215" width="370" alt="image description" />
                    </a>
                    <div class="img-caption text-uppercase">
                      Cave Adventures
                    </div>
                    <div class="hover-article">
                      <div class="star-rating">
                        <span><span class="icon-star"></span></span>
                        <span><span class="icon-star"></span></span>
                        <span><span class="icon-star"></span></span>
                        <span><span class="icon-star"></span></span>
                        <span class="disable"><span class="icon-star"></span></span>
                      </div>
                      <div class="icons">
                        <a href="#"><span class="icon-heart"></span></a>
                        <a href="#"><span class="icon-reply"></span></a>
                      </div>
                      <div class="info-footer">
                        <span class="price">from <span>$2749</span></span>
                        <a href="#" class="link-more">Explore</a>
                      </div>
                    </div>
                  </div>
                  <h3><a href="#">Polar arctic expeditions</a></h3>
                  <p>
                    This is Photoshop's version of Lorem Ipsum. Proin gravida
                    nibh vel velit auctor aliquet. Aenean sollicitudin, lorem
                    quis bibendum auctor, nisi elit consequat ipsum,
                  </p>
                </article>
                <article class="col-sm-6 col-md-4 article has-hover-s3">
                  <div class="img-wrap">
                    <a href="#">
                      <img src="{{asset('assets/img/listing/img-04.jpg')}}" height="215" width="370" alt="image description" />
                    </a>
                    <div class="img-caption text-uppercase">
                      Peak Climbing
                    </div>
                    <div class="hover-article">
                      <div class="star-rating">
                        <span><span class="icon-star"></span></span>
                        <span><span class="icon-star"></span></span>
                        <span><span class="icon-star"></span></span>
                        <span><span class="icon-star"></span></span>
                        <span class="disable"><span class="icon-star"></span></span>
                      </div>
                      <div class="icons">
                        <a href="#"><span class="icon-heart"></span></a>
                        <a href="#"><span class="icon-reply"></span></a>
                      </div>
                      <div class="info-footer">
                        <span class="price">from <span>$2749</span></span>
                        <a href="#" class="link-more">Explore</a>
                      </div>
                    </div>
                  </div>
                  <h3><a href="#">Marine diving excursions</a></h3>
                  <p>
                    This is Photoshop's version of Lorem Ipsum. Proin gravida
                    nibh vel velit auctor aliquet. Aenean sollicitudin, lorem
                    quis bibendum auctor, nisi elit consequat ipsum,
                  </p>
                </article>
                <article class="col-sm-6 col-md-4 article has-hover-s3">
                  <div class="img-wrap">
                    <a href="#">
                      <img src="{{asset('assets/img/listing/img-05.jpg')}}" height="215" width="370" alt="image description" />
                    </a>
                    <div class="img-caption text-uppercase">
                      Treasure Hunting
                    </div>
                    <div class="hover-article">
                      <div class="star-rating">
                        <span><span class="icon-star"></span></span>
                        <span><span class="icon-star"></span></span>
                        <span><span class="icon-star"></span></span>
                        <span><span class="icon-star"></span></span>
                        <span class="disable"><span class="icon-star"></span></span>
                      </div>
                      <div class="icons">
                        <a href="#"><span class="icon-heart"></span></a>
                        <a href="#"><span class="icon-reply"></span></a>
                      </div>
                      <div class="info-footer">
                        <span class="price">from <span>$2749</span></span>
                        <a href="#" class="link-more">Explore</a>
                      </div>
                    </div>
                  </div>
                  <h3><a href="#">Go wild at national parks</a></h3>
                  <p>
                    This is Photoshop's version of Lorem Ipsum. Proin gravida
                    nibh vel velit auctor aliquet. Aenean sollicitudin, lorem
                    quis bibendum auctor, nisi elit consequat ipsum,
                  </p>
                </article>
                <article class="col-sm-6 col-md-4 article has-hover-s3">
                  <div class="img-wrap">
                    <a href="#">
                      <img src="{{asset('assets/img/listing/img-06.jpg')}}" height="215" width="370" alt="image description" />
                    </a>
                    <div class="img-caption text-uppercase">
                      A night with sky
                    </div>
                    <div class="hover-article">
                      <div class="star-rating">
                        <span><span class="icon-star"></span></span>
                        <span><span class="icon-star"></span></span>
                        <span><span class="icon-star"></span></span>
                        <span><span class="icon-star"></span></span>
                        <span class="disable"><span class="icon-star"></span></span>
                      </div>
                      <div class="icons">
                        <a href="#"><span class="icon-heart"></span></a>
                        <a href="#"><span class="icon-reply"></span></a>
                      </div>
                      <div class="info-footer">
                        <span class="price">from <span>$2749</span></span>
                        <a href="#" class="link-more">Explore</a>
                      </div>
                    </div>
                  </div>
                  <h3><a href="#">Educational trips in wild</a></h3>
                  <p>
                    This is Photoshop's version of Lorem Ipsum. Proin gravida
                    nibh vel velit auctor aliquet. Aenean sollicitudin, lorem
                    quis bibendum auctor, nisi elit consequat ipsum,
                  </p>
                </article>
              </div>
            </div>
          </div>
        </div>
        <!-- couter block -->
        <aside class="count-block">
          <div class="container-fluid">
            <div class="row">
              <div class="col-xs-6 col-md-3 block-1">
                <div class="holder">
                  <span class="icon icon-step"></span>
                  <span class="info"><span class="counter">8702</span></span>
                  <span class="txt">WILDLIFE SPECIES</span>
                </div>
              </div>
              <div class="col-xs-6 col-md-3 block-2">
                <div class="holder">
                  <span class="icon icon-fish-jumping"></span>
                  <span class="info"><span class="counter">378</span></span>
                  <span class="txt">ARCTIC EXPERIENCES</span>
                </div>
              </div>
              <div class="col-xs-6 col-md-3 block-3">
                <div class="holder">
                  <span class="icon icon-tree"></span>
                  <span class="info"><span class="counter">377</span></span>
                  <span class="txt">NATIONAL PARKS</span>
                </div>
              </div>
              <div class="col-xs-6 col-md-3 block-4">
                <div class="holder">
                  <span class="icon icon-duration"></span>
                  <span class="info"><span class="counter">8973</span></span>
                  <span class="txt">DAYS IN THE WILD</span>
                </div>
              </div>
            </div>
          </div>
        </aside>
        <!-- featured adventure content -->
        <div class="featured-content adventure-holder">
          <div class="container-fluid">
            <div class="row same-height">
              <div class="col-md-6 image height">
                <div class="bg-stretch">
                  <img src="{{asset('assets/img/img-01.jpg')}}" height="627" width="960" alt="image description" />
                </div>
              </div>
              <div class="col-md-6 text-block height">
                <div class="centered">
                  <h2 class="intro-heading">
                    Botswana &amp; Angola - The Tribe
                  </h2>
                  <p class="intro">
                    This is Photoshop's version of Lorem Ipsum. Proin gravida
                    nibh vel velit auctor aliquet. Aenean sollicitudin, lorem
                    quis bibendum auctor, nisi elit consequat ipsum, Duis sed
                    odio sit amet nibh vulputate cursus a it amet mauris.
                  </p>
                  <a href="#" class="btn btn-primary btn-lg">explore</a>
                </div>
              </div>
            </div>
            <div class="row same-height">
              <div class="col-md-6 image height">
                <div class="bg-stretch">
                  <img src="{{asset('assets/img/img-02.jpg')}}" height="627" width="960" alt="image description" />
                </div>
              </div>
              <div class="col-md-6 text-block height">
                <div class="centered">
                  <h2 class="intro-heading">
                    Maritime Adventure - The Arctic
                  </h2>
                  <p class="intro">
                    This is Photoshop's version of Lorem Ipsum. Proin gravida
                    nibh vel velit auctor aliquet. Aenean sollicitudin, lorem
                    quis bibendum auctor, nisi elit consequat ipsum, Duis sed
                    odio sit amet nibh vulputate cursus a it amet mauris.
                  </p>
                  <a href="#" class="btn btn-primary btn-lg">explore</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- browse block -->
        <div class="browse-block">
          <div class="browse-destination column">
            <a href="#"><span>BROWSE BY DESTINATION</span></a>
          </div>
          <div class="browse-adventures column">
            <a href="#"><span>BROWSE BY ADVENTURES</span></a>
          </div>
        </div>
        <!-- article list with boxed style -->
        <section class="content-block article-boxed">
          <div class="container">
            <header class="content-heading">
              <h2 class="main-heading">TOP ADVENTURES</h2>
              <span class="main-subtitle">Our collection of the most popular adventures in 2016.</span>
              <div class="seperator"></div>
            </header>
            <div class="content-holder content-boxed">
              <div class="row db-3-col">
                <article class="col-sm-6 col-md-4 article has-hover-s1">
                  <div class="thumbnail">
                    <div class="img-wrap">
                      <img src="{{asset('assets/img/listing/img-07.jpg')}}" height="228" width="350" alt="image description" />
                    </div>
                    <h3 class="small-space">
                      <a href="tour-detail.html">Evening with Panda in China</a>
                    </h3>
                    <span class="info">Nordic Walk, Swiss Alps or French Hiking?</span>
                    <aside class="meta">
                      <span class="country">
                        <span class="icon-world"> </span>12 Countries
                      </span>
                      <span class="activity">
                        <span class="icon-acitivities"> </span>79 Activities
                      </span>
                    </aside>
                    <p>
                      This is Photoshop's version of Lorem Ipsum. Proin
                      gravida nibh vel velit auctor aliquet. Aenean
                      sollicitudin, lorem quis bibendum auctor, nisi elit
                      consequat ipsum,
                    </p>
                    <a href="tour-detail.html" class="btn btn-default">explore</a>
                    <footer>
                      <ul class="social-networks">
                        <li>
                          <a href="#"><span class="icon-twitter"></span></a>
                        </li>
                        <li>
                          <a href="#"><span class="icon-google-plus"></span></a>
                        </li>
                        <li>
                          <a href="#"><span class="icon-facebook"></span></a>
                        </li>
                        <li>
                          <a href="#"><span class="icon-linkedin"></span></a>
                        </li>
                      </ul>
                      <span class="price">from <span>$2749</span></span>
                    </footer>
                  </div>
                </article>
                <article class="col-sm-6 col-md-4 article has-hover-s1">
                  <div class="thumbnail">
                    <div class="img-wrap">
                      <img src="{{asset('assets/img/listing/img-08.jpg')}}" height="228" width="350" alt="image description" />
                    </div>
                    <h3 class="small-space">
                      <a href="tour-detail.html">Sleeping with Sea Lion in Arctic</a>
                    </h3>
                    <span class="info">Nordic Walk, Swiss Alps or French Hiking?</span>
                    <aside class="meta">
                      <span class="country">
                        <span class="icon-world"> </span>12 Countries
                      </span>
                      <span class="activity">
                        <span class="icon-acitivities"> </span>79 Activities
                      </span>
                    </aside>
                    <p>
                      This is Photoshop's version of Lorem Ipsum. Proin
                      gravida nibh vel velit auctor aliquet. Aenean
                      sollicitudin, lorem quis bibendum auctor, nisi elit
                      consequat ipsum,
                    </p>
                    <a href="tour-detail.html" class="btn btn-default">explore</a>
                    <footer>
                      <ul class="social-networks">
                        <li>
                          <a href="#"><span class="icon-twitter"></span></a>
                        </li>
                        <li>
                          <a href="#"><span class="icon-google-plus"></span></a>
                        </li>
                        <li>
                          <a href="#"><span class="icon-facebook"></span></a>
                        </li>
                        <li>
                          <a href="#"><span class="icon-linkedin"></span></a>
                        </li>
                      </ul>
                      <span class="price">from <span>$2749</span></span>
                    </footer>
                  </div>
                </article>
                <article class="col-sm-6 col-md-4 article has-hover-s1">
                  <div class="thumbnail">
                    <div class="img-wrap">
                      <img src="{{asset('assets/img/listing/img-09.jpg')}}" height="228" width="350" alt="image description" />
                    </div>
                    <h3 class="small-space">
                      <a href="tour-detail.html">Following Zebras to Water hole</a>
                    </h3>
                    <span class="info">Nordic Walk, Swiss Alps or French Hiking?</span>
                    <aside class="meta">
                      <span class="country">
                        <span class="icon-world"> </span>12 Countries
                      </span>
                      <span class="activity">
                        <span class="icon-acitivities"> </span>79 Activities
                      </span>
                    </aside>
                    <p>
                      This is Photoshop's version of Lorem Ipsum. Proin
                      gravida nibh vel velit auctor aliquet. Aenean
                      sollicitudin, lorem quis bibendum auctor, nisi elit
                      consequat ipsum,
                    </p>
                    <a href="tour-detail.html" class="btn btn-default">explore</a>
                    <footer>
                      <ul class="social-networks">
                        <li>
                          <a href="#"><span class="icon-twitter"></span></a>
                        </li>
                        <li>
                          <a href="#"><span class="icon-google-plus"></span></a>
                        </li>
                        <li>
                          <a href="#"><span class="icon-facebook"></span></a>
                        </li>
                        <li>
                          <a href="#"><span class="icon-linkedin"></span></a>
                        </li>
                      </ul>
                      <span class="price">from <span>$2749</span></span>
                    </footer>
                  </div>
                </article>
                <article class="col-sm-6 col-md-4 article has-hover-s1">
                  <div class="thumbnail">
                    <div class="img-wrap">
                      <img src="{{asset('assets/img/listing/img-10.jpg')}}" height="228" width="350" alt="image description" />
                    </div>
                    <h3 class="small-space">
                      <a href="tour-detail.html">Discovering Wild Trails in Africa</a>
                    </h3>
                    <span class="info">Nordic Walk, Swiss Alps or French Hiking?</span>
                    <aside class="meta">
                      <span class="country">
                        <span class="icon-world"> </span>12 Countries
                      </span>
                      <span class="activity">
                        <span class="icon-acitivities"> </span>79 Activities
                      </span>
                    </aside>
                    <p>
                      This is Photoshop's version of Lorem Ipsum. Proin
                      gravida nibh vel velit auctor aliquet. Aenean
                      sollicitudin, lorem quis bibendum auctor, nisi elit
                      consequat ipsum,
                    </p>
                    <a href="tour-detail.html" class="btn btn-default">explore</a>
                    <footer>
                      <ul class="social-networks">
                        <li>
                          <a href="#"><span class="icon-twitter"></span></a>
                        </li>
                        <li>
                          <a href="#"><span class="icon-google-plus"></span></a>
                        </li>
                        <li>
                          <a href="#"><span class="icon-facebook"></span></a>
                        </li>
                        <li>
                          <a href="#"><span class="icon-linkedin"></span></a>
                        </li>
                      </ul>
                      <span class="price">from <span>$2749</span></span>
                    </footer>
                  </div>
                </article>
                <article class="col-sm-6 col-md-4 article has-hover-s1">
                  <div class="thumbnail">
                    <div class="img-wrap">
                      <img src="{{asset('assets/img/listing/img-11.jpg')}}" height="228" width="350" alt="image description" />
                    </div>
                    <h3 class="small-space">
                      <a href="tour-detail.html">Angola Safari for Family &amp; Children</a>
                    </h3>
                    <span class="info">Nordic Walk, Swiss Alps or French Hiking?</span>
                    <aside class="meta">
                      <span class="country">
                        <span class="icon-world"> </span>12 Countries
                      </span>
                      <span class="activity">
                        <span class="icon-acitivities"> </span>79 Activities
                      </span>
                    </aside>
                    <p>
                      This is Photoshop's version of Lorem Ipsum. Proin
                      gravida nibh vel velit auctor aliquet. Aenean
                      sollicitudin, lorem quis bibendum auctor, nisi elit
                      consequat ipsum,
                    </p>
                    <a href="tour-detail.html" class="btn btn-default">explore</a>
                    <footer>
                      <ul class="social-networks">
                        <li>
                          <a href="#"><span class="icon-twitter"></span></a>
                        </li>
                        <li>
                          <a href="#"><span class="icon-google-plus"></span></a>
                        </li>
                        <li>
                          <a href="#"><span class="icon-facebook"></span></a>
                        </li>
                        <li>
                          <a href="#"><span class="icon-linkedin"></span></a>
                        </li>
                      </ul>
                      <span class="price">from <span>$2749</span></span>
                    </footer>
                  </div>
                </article>
                <article class="col-sm-6 col-md-4 article has-hover-s1">
                  <div class="thumbnail">
                    <div class="img-wrap">
                      <img src="{{asset('assets/img/listing/img-12.jpg')}}" height="228" width="350" alt="image description" />
                    </div>
                    <h3 class="small-space">
                      <a href="tour-detail.html">Royal Safari in Bangaladesh</a>
                    </h3>
                    <span class="info">Nordic Walk, Swiss Alps or French Hiking?</span>
                    <aside class="meta">
                      <span class="country">
                        <span class="icon-world"> </span>12 Countries
                      </span>
                      <span class="activity">
                        <span class="icon-acitivities"> </span>79 Activities
                      </span>
                    </aside>
                    <p>
                      This is Photoshop's version of Lorem Ipsum. Proin
                      gravida nibh vel velit auctor aliquet. Aenean
                      sollicitudin, lorem quis bibendum auctor, nisi elit
                      consequat ipsum,
                    </p>
                    <a href="tour-detail.html" class="btn btn-default">explore</a>
                    <footer>
                      <ul class="social-networks">
                        <li>
                          <a href="#"><span class="icon-twitter"></span></a>
                        </li>
                        <li>
                          <a href="#"><span class="icon-google-plus"></span></a>
                        </li>
                        <li>
                          <a href="#"><span class="icon-facebook"></span></a>
                        </li>
                        <li>
                          <a href="#"><span class="icon-linkedin"></span></a>
                        </li>
                      </ul>
                      <span class="price">from <span>$2749</span></span>
                    </footer>
                  </div>
                </article>
              </div>
            </div>
          </div>
        </section>
        <!-- content block with guide info -->
        <section class="content-block guide-sub guide-add bg-white">
          <div class="container">
            <header class="content-heading">
              <h2 class="main-heading">MEET THE GUIDES</h2>
              <span class="main-subtitle">Our highly trained and efficient guides at your service</span>
              <div class="seperator"></div>
            </header>
            <div class="content-holder">
              <div class="row">
                <div class="col-sm-6 col-md-4 img-article">
                  <div class="holder">
                    <div class="img-wrap">
                      <img src="{{asset('assets/img/listing/img-13.jpg')}}" height="436" width="370" alt="image description" />
                      <ul class="social-networks">
                        <li>
                          <a href="#"><span class="icon-facebook"></span></a>
                        </li>
                        <li>
                          <a href="#"><span class="icon-twitter"></span></a>
                        </li>
                        <li>
                          <a href="#"><span class="icon-google-plus"></span></a>
                        </li>
                        <li>
                          <a href="#"><span class="icon-linkedin"></span></a>
                        </li>
                      </ul>
                    </div>
                    <div class="caption">
                      <h3 class="small-space">Jason Statham</h3>
                      <span class="designation">TREKKING GUIDE</span>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-4 img-article">
                  <div class="holder">
                    <div class="img-wrap">
                      <img src="{{asset('assets/img/listing/img-14.jpg')}}" height="436" width="370" alt="image description" />
                      <ul class="social-networks">
                        <li>
                          <a href="#"><span class="icon-facebook"></span></a>
                        </li>
                        <li>
                          <a href="#"><span class="icon-twitter"></span></a>
                        </li>
                        <li>
                          <a href="#"><span class="icon-google-plus"></span></a>
                        </li>
                        <li>
                          <a href="#"><span class="icon-linkedin"></span></a>
                        </li>
                      </ul>
                    </div>
                    <div class="caption">
                      <h3 class="small-space">Cleona Tropez</h3>
                      <span class="designation">TREKKING GUIDE</span>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-4 img-article">
                  <div class="holder">
                    <div class="img-wrap">
                      <img src="{{asset('assets/img/listing/img-15.jpg')}}" height="436" width="370" alt="image description" />
                      <ul class="social-networks">
                        <li>
                          <a href="#"><span class="icon-facebook"></span></a>
                        </li>
                        <li>
                          <a href="#"><span class="icon-twitter"></span></a>
                        </li>
                        <li>
                          <a href="#"><span class="icon-google-plus"></span></a>
                        </li>
                        <li>
                          <a href="#"><span class="icon-linkedin"></span></a>
                        </li>
                      </ul>
                    </div>
                    <div class="caption">
                      <h3 class="small-space">Martin Blake</h3>
                      <span class="designation">TREKKING GUIDE</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- testimonial block -->
        <div class="testimonial-holder parallax" data-stellar-background-ratio="0.25" id="testimonial-home-page">
          <div class="container">
            <div id="testimonial-home-slide">
              <div class="slide">
                <blockquote class="testimonial-quote">
                  <div class="img">
                    <img src="{{asset('assets/img/thumbs/img-01.jpg')}}" height="112" width="112" alt="image description" />
                  </div>
                  <div class="text">
                    <cite>STEVE JORGAN - NORWAY</cite>
                    <q>This is Photoshop's version of Lorem Ipsum. Proin
                      gravida nibh vel velit auctor aliquet. Aenean
                      sollicitudin, lorem quis bibendum auctor, nisi elit
                      consequat ipsum, nec sagittis sem nibh id elit. Duis sed
                      odio sit amet nibh vulputate cursus a sit amet
                      mauris.”</q>
                  </div>
                </blockquote>
              </div>
              <div class="slide">
                <blockquote class="testimonial-quote">
                  <div class="img">
                    <img src="{{asset('assets/img/thumbs/img-02.jpg')}}" height="112" width="112" alt="image description" />
                  </div>
                  <div class="text">
                    <cite>DARREN SPRATT - AUSTRALIA</cite>
                    <q>This is Photoshop's version of Lorem Ipsum. Proin
                      gravida nibh vel velit auctor aliquet. Aenean
                      sollicitudin, lorem quis bibendum auctor, nisi elit
                      consequat ipsum, nec sagittis sem nibh id elit. Duis sed
                      odio sit amet nibh vulputate cursus a sit amet
                      mauris.”</q>
                  </div>
                </blockquote>
              </div>
              <div class="slide">
                <blockquote class="testimonial-quote">
                  <div class="img">
                    <img src="{{asset('assets/img/thumbs/img-03.jpg')}}" height="112" width="112" alt="image description" />
                  </div>
                  <div class="text">
                    <cite>RIYA YAHIDA - SPAIN</cite>
                    <q>This is Photoshop's version of Lorem Ipsum. Proin
                      gravida nibh vel velit auctor aliquet. Aenean
                      sollicitudin, lorem quis bibendum auctor, nisi elit
                      consequat ipsum, nec sagittis sem nibh id elit. Duis sed
                      odio sit amet nibh vulputate cursus a sit amet
                      mauris.”</q>
                  </div>
                </blockquote>
              </div>
            </div>
          </div>
        </div>
        <!-- partner list -->
        <article class="partner-block">
          <div class="container">
            <header class="content-heading">
              <h2 class="main-heading">Partner</h2>
              <span class="main-subtitle">People who always support and endorse our good work</span>
              <div class="seperator"></div>
            </header>
            <div class="partner-list" id="partner-slide">
              <div class="partner">
                <a href="#">
                  <img width="130" src="{{asset('assets/img/logos/logo-travelagancy.svg')}}" alt="image description" />
                  <img class="hover" width="130" src="{{asset('img/logos/logo-travelagancy-hover.svg')}}" alt="image description" />
                </a>
              </div>
              <div class="partner">
                <a href="#">
                  <img width="130" src="{{asset('assets/img/logos/logo-around-world.svg')}}" alt="image description" />
                  <img class="hover" width="130" src="{{asset('assets/img/logos/logo-around-world-hover.svg')}}" alt="image description" />
                </a>
              </div>
              <div class="partner">
                <a href="#">
                  <img width="130" src="{{asset('assets/img/logos/logo-tourist.svg')}}" alt="image description" />
                  <img class="hover" width="130" src="{{asset('assets/img/logos/logo-tourist-hover.svg')}}" alt="image description" />
                </a>
              </div>
              <div class="partner">
                <a href="#">
                  <img width="130" src="{{asset('assets/img/logos/logo-adventure.svg')}}" alt="image description" />
                  <img class="hover" width="130" src="{{asset('assets/img/logos/logo-adventure-hover.svg')}}" alt="image description" />
                </a>
              </div>
              <div class="partner">
                <a href="#">
                  <img width="130" src="{{asset('assets/img/logos/logo-around-world.svg')}}" alt="image description" />
                  <img class="hover" width="130" src="{{asset('assets/img/logos/logo-around-world-hover.svg')}}" alt="image description" />
                </a>
              </div>
              <div class="partner">
                <a href="#">
                  <img width="130" src="{{asset('assets/img/logos/logo-travelagancy.svg')}}" alt="image description" />
                  <img class="hover" width="130" src="img/logos/logo-travelagancy-hover.svg" alt="image description" />
                </a>
              </div>
              <div class="partner">
                <a href="#">
                  <img width="130" src="{{asset('assets/img/logos/logo-adventure.svg')}}" alt="image description" />
                  <img class="hover" width="130" src="{{asset('assets/img/logos/logo-adventure-hover.svg')}}" alt="image description" />
                </a>
              </div>
              <div class="partner">
                <a href="#">
                  <img width="130" src="{{asset('assets/img/logos/logo-around-world.svg')}}" alt="image description" />
                  <img class="hover" width="130" src="{{asset('assets/img/logos/logo-around-world-hover.svg')}}" alt="image description" />
                </a>
              </div>
              <div class="partner">
                <a href="#">
                  <img width="130" src="{{asset('assets/img/logos/logo-travelagancy.svg')}}" alt="image description" />
                  <img class="hover" width="130" src="{{asset('assets/img/logos/logo-travelagancy-hover.svg')}}" alt="image description" />
                </a>
              </div>
            </div>
          </div>
        </article>
      </main>

@endsection