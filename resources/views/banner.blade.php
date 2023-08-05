<div id="top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="left-content">
                    <div class="inner-content">
                        <h4>New Royal Darbar Restaurant</h4>
                        <h6>THE BEST EXPERIENCE</h6>
                        <div class="main-white-button scroll-to-section">
                            <a href="#reservation">Make A Reservation</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="main-banner header-text">

                    <div class="Modern-Slider">
                        <!-- Item -->
                        @foreach ($data as $item)
                        <div class="item">
                          <div class="img-fill">
                              <img src="/bannerimage/{{$item->image1}}"  alt="">
                          </div>
                        </div>
                        @endforeach
                        <!-- // Item -->

                        <!-- // Item -->
                      </div>

                </div>
            </div>
        </div>
    </div>
</div>
