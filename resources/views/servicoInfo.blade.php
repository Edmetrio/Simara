@extends('templates')

@section('content')

<section
          class="banner banner-inner parallax"
          data-stellar-background-ratio="0.5"
          id="activity-city-tour"
        >
          <div class="banner-text">
            <div class="center-text text-center">
              <div class="container">
                <h1>Urban City Tours</h1>
                <strong class="subtitle"
                  >The most detailed and modern Adventure theme!</strong
                >
                <!-- breadcrumb -->
                <nav class="breadcrumbs">
                  <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">ACTIVITIES</a></li>
                    <li><a href="#">SUMMER</a></li>
                    <li><span>SUMMER AND SUN</span></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </section>

        <main id="main">
          <div class="content-intro">
            <div class="container">
              <div class="row">
                <div class="col-sm-8 col-md-9 text-holder">
                  <h2 class="title-heading">Weekend City Tours</h2>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit
                    esse cillum dolore eu fugiat nulla pariatur.
                  </p>
                  <p>
                    Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum. Sed
                    ut perspiciatis unde omnis iste natus error sit voluptatem
                    accusantium doloremque laudantium, totam rem aperiam, eaque
                    ipsa quae ab illo inventore veritatis et quasi architecto
                    beatae vitae dicta sunt explicabo.
                  </p>
                  <div class="btn-holder">
                    <a
                      href="#"
                      class="btn btn-info-sub btn-md btn-shadow radius"
                      >Dig More</a
                    >
                  </div>
                </div>
                <div class="col-sm-4 col-md-3 map-col">
                  <div class="holder">
                    <div class="map-holder">
                      <img
                        src="{{asset('assets/img/icons/ico-landing-eifel.svg')}}"
                        height="300"
                        width="200"
                        alt="image description"
                      />
                    </div>
                    <div class="info">
                      <div class="slot">
                        <strong>Best Season:</strong>
                        <span class="sub">May, June, July, August</span>
                      </div>
                      <div class="slot">
                        <strong>Popular Location:</strong>
                        <span class="sub">Madrid, Bhamas, Phuket, Sydney</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </main>

@endsection