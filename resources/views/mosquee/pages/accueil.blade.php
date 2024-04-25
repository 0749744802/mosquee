@extends('mosquee.index')
@section('titre', 'Accueil')
@section('content')
<section class="hero-one">
    <div class="hero-one-slider">
        <div>
            <img src="https://via.placeholder.com/1920x810" alt="hero-one-slider">
            <div class="hero-data text-center">
                <h1>Worship That<br> is Pleasing to God</h1>
                <p>God has given us power and authority.</p>
            </div>
        </div>
        <div>
            <img src="https://via.placeholder.com/1920x810" alt="hero-one-slider">
            <div class="hero-data text-center">
                <h1>We Love God<br> We Belive in God</h1>
                <p>There is no other way except jesus.</p>
            </div>
        </div>
        <div>
            <img src="https://via.placeholder.com/1920x810" alt="hero-one-slider">
            <div class="hero-data text-center">
                <h1>Love God<br> Love Doing Good</h1>
                <p>We are a church that belives in Jesus christ.</p>
            </div>
        </div>
    </div>
</section>

<!-- banner part end -->

<!-- Hero One End -->



<!-- Fellowship Start -->

<section class="gap fellowship">

<div class="container">

    <h2 class="text-center mx-auto">We Gather for Inspiration, Fellowship, and Guidance in the of Christian Discipleship.</h2>

    <div class="row">

        <div class="col-lg-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="200" data-aos-duration="400">

            <div class="offer text-center">

                <span>

                    <img src="mosquee/assets/images/wedding.svg" alt="Wedding">

                </span>

                <h3><a href="JavaScript:void(0)">Praise & Worship</a></h3>

                <p class="mx-auto">Our church is open and friendly with many social activities. To keep our church running smoothly.</p>

            </div>

        </div>

        <div class="col-lg-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="400" data-aos-duration="700">

            <div class="offer text-center">

                <span>

                    <img src="mosquee/assets/images/pray.svg" alt="Pray">

                </span>

                <h3><a href="JavaScript:void(0)">Connect Members</a></h3>

                <p class="mx-auto">Our church is open and friendly with many social activities. To keep our church running smoothly.</p>

            </div>

        </div>

        <div class="col-lg-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="600" data-aos-duration="800">

            <div class="offer text-center">

                <span>

                    <img src="mosquee/assets/images/bird.svg" alt="Bird">

                </span>

                <h3><a href="JavaScript:void(0)">Parent’s Love</a></h3>

                <p class="mx-auto">Our church is open and friendly with many social activities. To keep our church running smoothly.</p>

            </div>

        </div>

    </div>

</div>

</section>

<!-- Fellowship End -->



<!-- About One Start -->

<section class="gap no-top about-one">

<div class="container">

    <div class="row align-items-end">

        <div class="col-lg-6 col-md-12 col-sm-12">

            <div class="about-data">

                <h2>A Church that Loves God and People</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit totam rem ape eaque ipsa quae ab illo inven tore Loaper eaque ipsa quae ab illo invento eaqu e ipsa quae ab ille a que ipsa quae ab illo inventore.</p>

                <a href="about-us.html" class="theme-btn">More About us</a>

            </div>

            <div class="about-gallery gallery">

                <figure>

                    <img src="https://via.placeholder.com/300x200" alt="about image">

                    <a data-fancybox="gallery" href="https://via.placeholder.com/300x200"><img src="mosquee/assets/images/plus.svg" alt="Plus"></a>

                </figure>

                <figure>

                    <img src="https://via.placeholder.com/300x200" alt="about image">

                    <a data-fancybox="gallery" href="https://via.placeholder.com/300x200"><img src="mosquee/assets/images/plus.svg" alt="Plus 1"></a>

                </figure>

            </div>

        </div>

        <div class="col-lg-6 col-md-12 col-sm-12">

            <div class="prayers-slider green-bg">

                <div>

                    <img class="img-fluid w-100" src="https://via.placeholder.com/570x425" alt="About Image">

                    <div class="slider-data">

                        <h2 class="text-white">O Lord, you have searched me out and known me; you know my sitting down and my rising up.</h2>

                        <h3 class="text-white">Psalm 139: 1-2</h3>

                    </div>

                </div>

                <div>

                    <img class="img-fluid w-100" src="https://via.placeholder.com/570x425" alt="about image 1">

                    <div class="slider-data">

                        <h2 class="text-white">Unless the Lord builds the house, those who build it labour in vain.</h2>

                        <h3 class="text-white">Psalm 127: 1-2</h3>

                    </div>

                </div>

                <div>

                    <img class="img-fluid w-100" src="https://via.placeholder.com/570x425" alt="about image 3">

                    <div class="slider-data">

                        <h2 class="text-white">God is with you, wherever you may be and whatever you may choose to do.</h2>

                        <h3 class="text-white">Psalm 127: 1-2</h3>

                    </div>

                </div>

                <div>

                    <img class="img-fluid w-100" src="https://via.placeholder.com/570x425" alt="about image 4">

                    <div class="slider-data">

                        <h2 class="text-white">Any concern too small to be turned into a prayer is too small to be made into a burden.</h2>

                        <h3 class="text-white">Corrie Ten Boom</h3>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

</section>

<!-- About One End -->



<!-- Recent Sermons One Start -->

<section class="gap light-bg recent-sermon-one">

<div class="container">

    <div class="heading">

        <img src="https://via.placeholder.com/50x65" alt="Heading Image">

        <p>Scandoulous Things Jesus did in his Ministry</p>

        <h2>Recent Sermons</h2>

    </div>

    <div class="row">

        <div class="sermon" data-aos="zoom-in-right" data-aos-duration="1000">

            <div class="sermon-img">

                <div class="sermon-media">

                    <img src="https://via.placeholder.com/610x360" alt="Sermon Image">

                    <video controls>

                        <source src="{{ asset('mosquee/mosquee/assets/videos/video.mp4') }}" type="video/mp4">

                        Your browser does not support the video tag.

                    </video>

                    <div class="audio-player style2">

                        <audio controls>

                          <!-- <source src="audio.ogg" type="audio/ogg"> -->

                          <source src="mosquee/assets/music/audio-4.mp3" type="audio/mpeg">

                          Your browser does not support the audio element.

                        </audio>

                    </div>

                </div>

                <ul>

                    <li><a class="s_audio" href="JavaScript:void(0)"><img src="mosquee/assets/images/music-note.svg" alt="volume"></a></li>

                    <li><a class="s_video" href="JavaScript:void(0)"><img src="mosquee/assets/images/play-button-2.svg" alt="Play Button"></a></li>

                    <li><a class="s_pdf"  href="JavaScript:void(0)"><img src="mosquee/assets/images/book.svg" alt="Book"></a></li>

                    <li><a class="s_music" href="JavaScript:void(0)"><img src="mosquee/assets/images/download.svg" alt="download"></a></li>

                </ul>

            </div>

            <div class="sermon-data">

                <ul>

                    <li>Jorge karri</li>

                    <li>Nov 19, 2021</li>

                </ul>

                <h3><a href="sermon-detail.html">Spiritually Reborn As parent’s Children</a></h3>

                <p>Lorem ipsum dolor sit amet, consectetur adipi elit, sed totam rem ape eaque ipsa quae ab illo e ipsa quae ab ille ab illo inventore.</p>

            </div>

        </div>

        <div class="sermon" data-aos="zoom-in-right" data-aos-duration="1000">

            <div class="sermon-img">

                <div class="sermon-media">

                    <img src="https://via.placeholder.com/610x360" alt="Sermon Image 1">

                    <video controls>

                        <source src="mosquee/assets/videos/video.mp4" type="video/mp4">

                        Your browser does not support the video tag.

                    </video>

                    <div class="audio-player style2">

                        <audio controls>

                          <!-- <source src="audio.ogg" type="audio/ogg"> -->

                          <source src="mosquee/assets/music/audio-2.mp3" type="audio/mpeg">

                          Your browser does not support the audio element.

                        </audio>

                    </div>

                </div>

                <ul>

                    <li><a class="s_audio" href="JavaScript:void(0)"><img src="mosquee/assets/images/music-note.svg" alt="volume"></a></li>

                    <li><a class="s_video" href="JavaScript:void(0)"><img src="mosquee/assets/images/play-button-2.svg" alt="Play Button"></a></li>

                    <li><a class="s_pdf" href="JavaScript:void(0)"><img src="mosquee/assets/images/book.svg" alt="Book"></a></li>

                    <li><a class="s_music" href="JavaScript:void(0)"><img src="mosquee/assets/images/download.svg" alt="download"></a></li>

                </ul>

            </div>

            <div class="sermon-data">

                <ul>

                    <li>Jorge karri</li>

                    <li>Nov 19, 2021</li>

                </ul>

                <h3><a href="sermon-detail.html">Spiritually Reborn As parent’s Children</a></h3>

                <p>Lorem ipsum dolor sit amet, consectetur adipi elit, sed totam rem ape eaque ipsa quae ab illo e ipsa quae ab ille ab illo inventore.</p>

            </div>

        </div>

        <div class="sermon" data-aos="zoom-in-right" data-aos-duration="1000">

            <div class="sermon-img">

                <div class="sermon-media">

                    <img src="https://via.placeholder.com/610x360" alt="Sermon Image 2">

                    <video controls>

                        <source src="mosquee/assets/videos/video.mp4" type="video/mp4">

                        Your browser does not support the video tag.

                    </video>

                    <div class="audio-player style2">

                        <audio controls>

                          <!-- <source src="audio.ogg" type="audio/ogg"> -->

                          <source src="mosquee/assets/music/audio-3.mp3" type="audio/mpeg">

                          Your browser does not support the audio element.

                        </audio>

                    </div>

                </div>

                <ul>

                    <li><a class="s_audio" href="JavaScript:void(0)"><img src="mosquee/assets/images/music-note.svg" alt="volume"></a></li>

                    <li><a class="s_video" href="JavaScript:void(0)"><img src="mosquee/assets/images/play-button-2.svg" alt="Play Button"></a></li>

                    <li><a class="s_pdf" href="JavaScript:void(0)"><img src="mosquee/assets/images/book.svg" alt="Book"></a></li>

                    <li><a class="s_music" href="JavaScript:void(0)"><img src="mosquee/assets/images/download.svg" alt="download"></a></li>

                </ul>

            </div>

            <div class="sermon-data">

                <ul>

                    <li>Jorge karri</li>

                    <li>Nov 19, 2021</li>

                </ul>

                <h3><a href="sermon-detail.html">Spiritually Reborn As parent’s Children</a></h3>

                <p>Lorem ipsum dolor sit amet, consectetur adipi elit, sed totam rem ape eaque ipsa quae ab illo e ipsa quae ab ille ab illo inventore.</p>

            </div>

        </div>

    </div>

    <div class="d-flex justify-content-center loadmore">

        <a href="sermons.html" class="theme-btn">Load More</a>

    </div>

</div>

</section>

<!-- Recent Sermons One End -->



<!-- Digital Ministry Start -->

<section class="gap digital-ministry green-overlay">

<div class="parallax" style="background-image: url(https://via.placeholder.com/1920x730);"></div>

<div class="container">

    <div class="heading">

        <h2 class="text-white mx-auto">Digital Ministry - Live Services Bible Study Recorded Streams</h2>

    </div>

    <div class="row">

        <div class="col-lg-3 col-md-6 col-sm-12">

            <div class="dg-counter text-center">

                <h3 class="text-white"><span class="counter">140</span></h3>

                <p class="text-white mx-auto">countries around the world benefit from work</p>

            </div>

        </div>

        <div class="col-lg-3 col-md-6 col-sm-12">

            <div class="dg-counter text-center">

                <h3 class="text-white"><span class="counter">4,753</span></h3>

                <p class="text-white mx-auto">countries around the world benefit from work</p>

            </div>

        </div>

        <div class="col-lg-3 col-md-6 col-sm-12">

            <div class="dg-counter text-center">

                <h3 class="text-white"><span class="counter">1.4</span>m</h3>

                <p class="text-white mx-auto">countries around the world benefit from work</p>

            </div>

        </div>

        <div class="col-lg-3 col-md-6 col-sm-12">

            <div class="dg-counter text-center">

                <h3 class="text-white"><span class="counter">2470</span></h3>

                <p class="text-white mx-auto">countries around the world benefit from work</p>

            </div>

        </div>

    </div>

</div>



</section>

<!-- Digital Ministry End -->



<!-- Live Stream Start -->

<section class="gap no-bottom live-stream">

<div class="container">

    <div class="heading">

        <img src="https://via.placeholder.com/50x65" alt="Heading Image 2">

        <p>Scandoulous Things Jesus did in his Ministry</p>

        <h2>Watch our Live Stream</h2>

    </div>

    <div class="row">

        <div class="audio-player">

            <audio id="myAudio" ontimeupdate="onTimeUpdate()">

              <!-- <source src="audio.ogg" type="audio/ogg"> -->

              <source id="source-audio" src="mosquee/assets/music/audio-1.mp3" type="audio/mpeg">

              Your browser does not support the audio element.

            </audio>



            <div class="player-ctn" data-aos="fade-up" data-aos-duration="1000">

              <div class="audio-run">

                  <div class="parallax" style="background-image: url(https://via.placeholder.com/1170x315);"></div>

                  <div class="btn-ctn">

                     <div class="btn-action first-btn next-prev" onclick="previous()">

                        <div id="btn-faws-back">

                          <i class='fas fa-step-backward'></i>

                        </div>

                     </div>

                     <div class="btn-action" onclick="toggleAudio()">

                        <div id="btn-faws-play-pause">

                          <i class='fas fa-play' id="icon-play"></i>

                          <i class='fas fa-pause' id="icon-pause" style="display: none"></i>

                        </div>

                     </div>

                     <div class="btn-action next-prev" onclick="next()">

                        <div id="btn-faws-next">

                          <i class="fas fa-step-forward" aria-hidden="true"></i>

                        </div>

                     </div>

                     <div class="btn-mute" id="toggleMute" onclick="toggleMute()">

                        <div id="btn-faws-volume">

                          <i id="icon-vol-up" class='fas fa-volume-up'></i>

                          <i id="icon-vol-mute" class='fas fa-volume-mute' style="display: none"></i>

                        </div>

                     </div>

                  </div>

                  <div class="infos-ctn">

                    <div class="timer">00:00</div>

                    <div class="title"></div>

                    <div class="duration">00:00</div>

                </div>

                  <div id="myProgress">

                    <div id="myBar"></div>

                  </div>

              </div>

              <div class="playlist-ctn" data-aos="fade-up" data-aos-duration="1500"></div>

            </div>

        </div>

    </div>

    <div class="d-flex justify-content-center loadmore">

        <a href="JavaScript:void(0)" class="theme-btn">View All Playlist</a>

    </div>

</div>

</section>

<!-- Live Stream End -->



<!-- Events Carousal Start -->

<section class="gap events-carousal">

<div class="container">

    <div class="heading">

        <p>We enjoy being a multi-denominational church</p>

        <h2>Don’t Miss Your Chance to Get Closer to God</h2>

    </div>

</div>

<div class="">

    <div class="events-carousal-slider">

        <div>

            <div class="event">

                <img src="https://via.placeholder.com/335x530" alt="Event Image 2">

                <div class="event-data">

                    <p class="text-white">Stom Park New York</p>

                    <h4><a href="event-detail.html">Suicide Loss Grief Support Group</a></h4>

                    <ul>

                        <li><img src="mosquee/assets/images/calendar.svg" alt="calendar 2">Thursday, June 4, 2020</li>

                        <li><img src="mosquee/assets/images/clock.svg" alt="clock 2">1:00 pm - 2:00 pm</li>

                    </ul>

                    <a class="theme-btn" href="JavaScript:void(0)">Book Your Seat</a>

                </div>

            </div>

        </div>

        <div>

            <div class="event">

                <img src="https://via.placeholder.com/335x530" alt="Event Image 3">

                <div class="event-data">

                    <p class="text-white">Stom Park New York</p>

                    <h4><a href="event-detail.html">Suicide Loss Grief Support Group</a></h4>

                    <ul>

                        <li><img src="mosquee/assets/images/calendar.svg" alt="calendar 3">Thursday, June 4, 2020</li>

                        <li><img src="mosquee/assets/images/clock.svg" alt="clock 3">1:00 pm - 2:00 pm</li>

                    </ul>

                    <a class="theme-btn" href="JavaScript:void(0)">Book Your Seat</a>

                </div>

            </div>

        </div>

        <div>

            <div class="event">

                <img src="https://via.placeholder.com/335x530" alt="Event Image 4">

                <div class="event-data">

                    <p class="text-white">Stom Park New York</p>

                    <h4><a href="event-detail.html">Suicide Loss Grief Support Group</a></h4>

                    <ul>

                        <li><img src="mosquee/assets/images/calendar.svg" alt="calendar 4">Thursday, June 4, 2020</li>

                        <li><img src="mosquee/assets/images/clock.svg" alt="clock 4">1:00 pm - 2:00 pm</li>

                    </ul>

                    <a class="theme-btn" href="JavaScript:void(0)">Book Your Seat</a>

                </div>

            </div>

        </div>

        <div>

            <div class="event">

                <img src="https://via.placeholder.com/335x530" alt="Event Image 5">

                <div class="event-data">

                    <p class="text-white">Stom Park New York</p>

                    <h4><a href="event-detail.html">Suicide Loss Grief Support Group</a></h4>

                    <ul>

                        <li><img src="mosquee/assets/images/calendar.svg" alt="calendar 5">Thursday, June 4, 2020</li>

                        <li><img src="mosquee/assets/images/clock.svg" alt="clock 5">1:00 pm - 2:00 pm</li>

                    </ul>

                    <a class="theme-btn" href="JavaScript:void(0)">Book Your Seat</a>

                </div>

            </div>

        </div>

        <div>

            <div class="event">

                <img src="https://via.placeholder.com/335x530" alt="Event Image 6">

                <div class="event-data">

                    <p class="text-white">Stom Park New York</p>

                    <h4><a href="event-detail.html">Suicide Loss Grief Support Group</a></h4>

                    <ul>

                        <li><img src="mosquee/assets/images/calendar.svg" alt="calendar 6">Thursday, June 4, 2020</li>

                        <li><img src="mosquee/assets/images/clock.svg" alt="clock 6">1:00 pm - 2:00 pm</li>

                    </ul>

                    <a class="theme-btn" href="JavaScript:void(0)">Book Your Seat</a>

                </div>

            </div>

        </div>

        <div>

            <div class="event">

                <img src="https://via.placeholder.com/335x530" alt="Event Image 7">

                <div class="event-data">

                    <p class="text-white">Stom Park New York</p>

                    <h4><a href="event-detail.html">Suicide Loss Grief Support Group</a></h4>

                    <ul>

                        <li><img src="mosquee/assets/images/calendar.svg" alt="calendar 7">Thursday, June 4, 2020</li>

                        <li><img src="mosquee/assets/images/clock.svg" alt="clock 7">1:00 pm - 2:00 pm</li>

                    </ul>

                    <a class="theme-btn" href="JavaScript:void(0)">Book Your Seat</a>

                </div>

            </div>

        </div>

        <div>

            <div class="event">

                <img src="https://via.placeholder.com/335x530" alt="Event Image 8">

                <div class="event-data">

                    <p class="text-white">Stom Park New York</p>

                    <h4><a href="event-detail.html">Suicide Loss Grief Support Group</a></h4>

                    <ul>

                        <li><img src="mosquee/assets/images/calendar.svg" alt="calendar 8">Thursday, June 4, 2020</li>

                        <li><img src="mosquee/assets/images/clock.svg" alt="clock 8">1:00 pm - 2:00 pm</li>

                    </ul>

                    <a class="theme-btn" href="JavaScript:void(0)">Book Your Seat</a>

                </div>

            </div>

        </div>

        <div>

            <div class="event">

                <img src="https://via.placeholder.com/335x530" alt="Event Image 9">

                <div class="event-data">

                    <p class="text-white">Stom Park New York</p>

                    <h4><a href="event-detail.html">Suicide Loss Grief Support Group</a></h4>

                    <ul>

                        <li><img src="mosquee/assets/images/calendar.svg" alt="calendar 9">Thursday, June 4, 2020</li>

                        <li><img src="mosquee/assets/images/clock.svg" alt="clock 9">1:00 pm - 2:00 pm</li>

                    </ul>

                    <a class="theme-btn" href="JavaScript:void(0)">Book Your Seat</a>

                </div>

            </div>

        </div>



    </div>

</div>

</section>

<!-- Events Carousal End -->



<!-- Donation Start -->

<section class="donation light-bg overflow-hidden">

<div class="container-fluid p-0">

    <div class="row align-items-center">

        <div class="col-lg-6">

            <img class="img-fluid sideimage" src="https://via.placeholder.com/945x770" alt="Donation Image">

        </div>

        <div class="col-lg-6">
        <div class="parallax pattren" style="background-image: url(mosquee/assets/images/pattren.jpg);"></div>
            <div class="donation-data">

                <h2 data-aos="fade-up" data-aos-duration="900">Stand Up the Church Climate Crisis</h2>

                <p data-aos="fade-up" data-aos-duration="1100">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed totam rem ape eaque ipsa quae ab illo inven tore Loaperiam, eaque ipsa quae ab illo invento eaqu e ipsa quae ab ille ab illo inventore.</p>

                <div class="donation-form">

                    <div class="custom-donation-amount" data-aos="fade-up" data-aos-duration="1300"><span class="text-white" >$</span> <input class="donated_amount" type="number" placeholder="Custom Amount">

                    </div>

                    <ul class="list-unstyled" data-aos="fade-up" data-aos-duration="1400">

                        <li><a class="donating" href="JavaScript:void(0)">$<span class="donation_amount">5</span></a>

                        </li>

                        <li><a class="donating" href="JavaScript:void(0)">$<span class="donation_amount">10</span></a>

                        </li>

                        <li><a class="donating" href="JavaScript:void(0)">$<span class="donation_amount">20</span></a>

                        </li>

                        <li><a class="donating" href="JavaScript:void(0)">$<span class="donation_amount">30</span></a>

                        </li>

                    </ul>

                    <a class="theme-btn" href="JavaScript:void(0)" data-aos="fade-up" data-aos-duration="1500">Donate Now</a>

                </div>



            </div>

        </div>

    </div>

</div>

</section>

<!-- Donation End -->



<!-- Blog Start -->

<section class="gap blog">

<div class="container">

    <div class="heading">

        <img src="https://via.placeholder.com/50x65" alt="Heading Image 5">

        <p>Scandoulous Things Jesus did in his Ministry</p>

        <h2>Recent Articles</h2>

    </div>

    <div class="row justify-content-center">

        <div class="col-lg-4 col-md-6 col-sm-12">

            <div class="blog-meta" data-aos="fade-up" data-aos-delay="400" data-aos-duration="600">

                <figure>

                    <img class="img-fluid" src="https://via.placeholder.com/360x270" alt="Blog image 1">

                </figure>

                <ul>

                    <li class="date">21 Dec, 2021</li>

                    <li><img src="mosquee/assets/images/message.svg" alt="Message 1">12</li>

                </ul>

                <a href="blog-detail.html" class="font-bold">Public Health By Allowing California Order</a>

                <p>Alienum phaedrum toquatoeu, vis detraxit iculis eiex petenis in mei Mei an peri sl gra an peri sl graecis vix apernihil.</p>

            </div>

        </div>

        <div class="col-lg-4 col-md-6 col-sm-12">

            <div class="blog-meta" data-aos="fade-up" data-aos-delay="500" data-aos-duration="900">

                <figure>

                    <img class="img-fluid" src="https://via.placeholder.com/360x270" alt="Blog image 2">

                </figure>

                <ul>

                    <li class="date">21 Dec, 2021</li>

                    <li><img src="mosquee/assets/images/message.svg" alt="Message 2">12</li>

                </ul>

                <a href="blog-detail.html" class="font-bold">Public Health By Allowing California Order</a>

                <p>Alienum phaedrum toquatoeu, vis detraxit iculis eiex petenis in mei Mei an peri sl gra an peri sl graecis vix apernihil.</p>

            </div>

        </div>

        <div class="col-lg-4 col-md-6 col-sm-12">

            <div class="blog-meta" data-aos="fade-up" data-aos-delay="700" data-aos-duration="1000">

                <figure>

                    <img class="img-fluid" src="https://via.placeholder.com/360x270" alt="Blog image 3">

                </figure>

                <ul>

                    <li class="date">21 Dec, 2021</li>

                    <li><img src="mosquee/assets/images/message.svg" alt="Message 3">12</li>

                </ul>

                <a href="blog-detail.html" class="font-bold">Public Health By Allowing California Order</a>

                <p>Alienum phaedrum toquatoeu, vis detraxit iculis eiex petenis in mei Mei an peri sl gra an peri sl graecis vix apernihil.</p>

            </div>

        </div>

    </div>

    <div class="d-flex justify-content-center loadmore">

        <a href="blog.html" class="theme-btn">View All Posts</a>

    </div>

</div>

</section>

<!-- Blog End -->



<!-- Sponsors Start -->

<div class="gap no-top sponsors">

<div class="container">

    <div class="sponsors-slider">

        <div>

            <img class="img-fluid" src="https://via.placeholder.com/140x80" alt="Sponsor Image 1">

        </div>

        <div>

            <img class="img-fluid" src="https://via.placeholder.com/140x80" alt="Sponsor Image 2">

        </div>

        <div>

            <img class="img-fluid" src="https://via.placeholder.com/140x80" alt="Sponsor Image 3">

        </div>

        <div>

            <img class="img-fluid" src="https://via.placeholder.com/140x80" alt="Sponsor Image 4">

        </div>

        <div>

            <img class="img-fluid" src="https://via.placeholder.com/140x80" alt="Sponsor Image 5">

        </div>

        <div>

            <img class="img-fluid" src="https://via.placeholder.com/140x80" alt="Sponsor Image 6">

        </div>

        <div>

            <img class="img-fluid" src="https://via.placeholder.com/140x80" alt="Sponsor Image 7">

        </div>

        <div>

            <img class="img-fluid" src="https://via.placeholder.com/140x80" alt="Sponsor Image 8">

        </div>

        <div>

            <img class="img-fluid" src="https://via.placeholder.com/140x80" alt="Sponsor Image 9">

        </div>

        <div>

            <img class="img-fluid" src="https://via.placeholder.com/140x80" alt="Sponsor Image 10">

        </div>

    </div>

</div>

</div>

<!-- Sponsors End -->



<!-- Subscribe Start -->

<section class="subscribe">

<div class="container">

    <div class="row align-items-center">

        <div class="col-lg-5 col-md-12 col-sm-12">

            <h3 class="text-white">Let’s Keep in Touch!</h3>

            <p class="text-white">Subscribe to keep up with fresh news and exciting updates.</p>

        </div>

        <div class="col-lg-7 col-md-12 col-sm-12">

            <form>

                <input type="text" name="Text" placeholder="Enter Your Email Address...">

                <button>Subscribe</button>

            </form>

        </div>

    </div>

</div>

</section>
@endsection
