<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <title> Lyric Lounge</title>
</head>

<body>
  <header>
    <div class="menu_side">
      <h1>Playlist</h1>
      <div class="playlist">
        <h4 class="active"><span></span><i class="bi bi-music-note-beamed"></i>Playlist</h4>
        <h4><span></span><i class="bi bi-music-note-beamed"></i>Last Listned</h4>
        <h4><span></span><i class="bi bi-music-note-beamed"></i>Recommended</h4>
      </div>
      <div class="menu_song">
        <li class="songItem">
          <span>01</span>
          <img src="image/1.jpg" alt="On My Way">
          <h5>On My Way <br>
            <div class="subtitle">Alan Walker</div>
          </h5>
          <i class="bi playListPlay bi-play-circle-fill" id="1"></i>
        </li>
        <li class="songItem">
          <span>02</span>
          <img src="image/2.jpg" alt="">
          <h5>Agar tum sath ho<br>
            <div class="subtitle">Arijit Singh ALka Yagnik</div>
          </h5>
          <i class="bi playListPlay bi-play-circle-fill" id="2"></i>
        </li>
        <li class="songItem">
          <span>03</span>
          <img src="image/3.jpg" alt="">
          <h5>Ve Kamleya<br>
            <div class="subtitle">Shreya Goshal Arijit Singh</div>
          </h5>
          <i class="bi playListPlay bi-play-circle-fill" id="3"></i>
        </li>
        <li class="songItem">
          <span>04</span>
          <img src="image/4.jpg" alt="">
          <h5>O Mahi<br>
            <div class="subtitle">Arijit Singh</div>
          </h5>
          <i class="bi playListPlay bi-play-circle-fill" id="4"></i>
        </li>
        <li class="songItem">
          <span>05</span>
          <img src="image/5.jpg" alt="">
          <h5>Tere Hawale<br>
            <div class="subtitle">Tushar-Shilpa Rao</div>
          </h5>
          <i class="bi playListPlay bi-play-circle-fill" id="5"></i>
        </li>
        <li class="songItem">
          <span>06</span>
          <img src="image/6.jpg" alt="">
          <h5>Chaleya<br>
            <div class="subtitle">Arijit Singh</div>
          </h5>
          <i class="bi playListPlay bi-play-circle-fill" id="6"></i>
        </li>
        <li class="songItem">
          <span>07</span>
          <img src="image/7.jpg" alt="">
          <h5>Ve Haniya<br>
            <div class="subtitle">Danny</div>
          </h5>
          <i class="bi playListPlay bi-play-circle-fill" id="7"></i>
        </li>
        <li class="songItem">
          <span>08</span>
          <img src="image/8.jpg" alt="">
          <h5>Love Ya<br>
            <div class="subtitle">Diljit Dosanjh</div>
          </h5>
          <i class="bi playListPlay bi-play-circle-fill" id="8"></i>
        </li>
        <li class="songItem">
          <span>09</span>
          <img src="image/9.jpg" alt="">
          <h5>Tera hone lga ho<br>
            <div class="subtitle">Atif Aslam</div>
          </h5>
          <i class="bi playListPlay bi-play-circle-fill" id="9"></i>
        </li>
        <li class="songItem">
          <span>10</span>
          <img src="image/10.jpg" alt="">
          <h5>Believer<br>
            <div class="subtitle">Imagine Dragons</div>
          </h5>
          <i class="bi playListPlay bi-play-circle-fill" id="10"></i>
        </li>
        <li class="songItem">
          <span>11</span>
          <img src="image/11.jpg" alt="">
          <h5>Yimmy Yimmy<br>
            <div class="subtitle">Shreya Goshal</div>
          </h5>
          <i class="bi playListPlay bi-play-circle-fill" id="11"></i>
        </li>
      </div>
    </div>
    <div class="song_side">
      <nav>
        <ul>
          <li>Discover <span></span></li>
          <li>MY LIBRARY</li>
          <li>RADIO</li>
        </ul>
        <div class="search">
          <i class="bi bi-search"></i>
          <input type="text" placeholder="Search Music">
          <div class="search_results">
            <!-- <a href="" class="card">
              <img src="image/1.jpg" alt="">
              <div class="content">
                On My Way
                <div class="subtitle">
                  Alen Walker
                </div>
              </div>
            </a> -->

          </div>
        </div>
        <div class="user">
          <img src="" alt="">
        </div>
      </nav>
      <div class="content">
        <h1>Alen Walker</h1>
        <p>You were the shadow to my light did you feel us another start you fade <br>Away afraid our aim is out of
          sight wanna see us Alive</p>
        <div class="buttons">
          <button>PLAY</button>
          <button>FOLLOW</button>
        </div>
      </div>
      <div class="popular_song">
        <div class="h4">
          <h4>Popular Song</h4>
          <div class="btn_s">
            <i class="bi bi-arrow-left-short" id="pop_song_left"></i>
            <i class="bi bi-arrow-right-short" id="pop_song_right"></i>
          </div>
        </div>
        <div class="pop_song">
          <li class="songItem">
            <div class="img_play">
              <img src="image/12.jpg" alt="">
              <i class="bi playListPlay bi-play-circle-fill" id="12"></i>
            </div>
            <h5>Tum se <br>
              <div class="subtitle">Sachin-Jigar</div>
            </h5>
          </li>
          <li class="songItem">
            <div class="img_play">
              <img src="image/13.jpg" alt="">
              <i class="bi playListPlay bi-play-circle-fill" id="13"></i>
            </div>
            <h5>Mai koi aisa geet gao<br>
              <div class="subtitle">Abhijeet Bhattacharya</div>
            </h5>
          </li>
          <li class="songItem">
            <div class="img_play">
              <img src="image/14.jpg" alt="">
              <i class="bi playListPlay bi-play-circle-fill" id="14"></i>
            </div>
            <h5>Tum prem ho<br>
              <div class="subtitle">Aishwarya Anand</div>
            </h5>
          </li>
          <li class="songItem">
            <div class="img_play">
              <img src="image/15.jpg" alt="">
              <i class="bi playListPlay bi-play-circle-fill" id="15"></i>
            </div>
            <h5>Radha Gori Gori<br>
              <div class="subtitle">Suprabha</div>
            </h5>
          </li>
          <li class="songItem">
            <div class="img_play">
              <img src="image/16.jpg" alt="">
              <i class="bi playListPlay bi-play-circle-fill" id="16"></i>
            </div>
            <h5>Tum kya Mile<br>
              <div class="subtitle">Shreya Goshal Arijit Singh</div>
            </h5>
          </li>
          <li class="songItem">
            <div class="img_play">
              <img src="image/17.jpg" alt="">
              <i class="bi playListPlay bi-play-circle-fill" id="17"></i>
            </div>
            <h5>Perfect<br>
              <div class="subtitle">Ed Sheeren</div>
            </h5>
          </li>
          <li class="songItem">
            <div class="img_play">
              <img src="image/18.jpg" alt="">
              <i class="bi playListPlay bi-play-circle-fill" id="18"></i>
            </div>
            <h5>Tumhe Jo Maine Dekha<br>
              <div class="subtitle">Abhijeet-Shreya Goshal</div>
            </h5>
          </li>
          <li class="songItem">
            <div class="img_play">
              <img src="image/19.jpg" alt="">
              <i class="bi playListPlay bi-play-circle-fill" id="19"></i>
            </div>
            <h5>Pehle Bhi Mai<br>
              <div class="subtitle">Vishal Mishra</div>
            </h5>
          </li>
          <li class="songItem">
            <div class="img_play">
              <img src="image/20.jpg" alt="">
              <i class="bi playListPlay bi-play-circle-fill" id="20"></i>
            </div>
            <h5>Satranga<br>
              <div class="subtitle">Arijit Singh</div>
            </h5>
          </li>
          <li class="songItem">
            <div class="img_play">
              <img src="image/21.jpg" alt="">
              <i class="bi playListPlay bi-play-circle-fill" id="21"></i>
            </div>
            <h5>Lover<br>
              <div class="subtitle">Taylor Swift</div>
            </h5>
          </li>
          <li class="songItem">
            <div class="img_play">
              <img src="image/22.jpg" alt="">
              <i class="bi playListPlay bi-play-circle-fill" id="22"></i>
            </div>
            <h5>Akhiya Gulab<br>
              <div class="subtitle">Mitraz</div>
            </h5>
          </li>
        </div>
      </div>
      <div class="popular_artists">
        <div class="h4">
          <h4>Popular Artists</h4>
          <div class="btn_s">
            <i class="bi bi-arrow-left-short" id="pop_art_left"></i>
            <i class="bi bi-arrow-right-short" id="pop_art_right"></i>
          </div>
        </div>
        <div class="item Artists_bx">
          <li>
            <a href="arijit.html"><img src="image/arijit.jpg" alt=""></a>
          </li>
          <li>
            <img src="image/shreya.jpg" alt="">
          </li>
          <li>
            <img src="image/Diljit.jpg" alt="">
          </li>
          <li>
            <img src="image/neha.jpg" alt="">
          </li>
          <li>
            <img src="image/asseskaur.jpg" alt="">
          </li>
          <li>
            <img src="image/atif.jpg" alt="">
          </li>
          <li>
            <img src="image/edsheeran.jpg" alt="">
          </li>
          <li>
            <img src="image/gururandhawa.jpg" alt="">
          </li>
          <li>
            <img src="image/taylorswift.jpg" alt="">
          </li>
          <li>
            <img src="image/Justin.jpg" alt="">
          </li>
          <li>
            <img src="image/vishal.jpg" alt="">
          </li>
          <li>
            <img src="image/sonunigam.jpg" alt="">
          </li>
          <li>
            <img src="image/badshah.jpg" alt="">
          </li>
        </div>
      </div>
    </div>


    <div class="master_play">
      <div class="wave" id="wave">
        <div class="wave1"></div>
        <div class="wave1"></div>
        <div class="wave1"></div>
      </div>
      <img src="image/11.jpg" alt="" id="poster_master_play">
      <h5 id="title">Yimmy Yimmy
        <div class="subtitle">Shreya Goshal Rajat Nagpal NYADJKO Rana Sotel</div>
      </h5>
      <div class="icon">
        <i class="bi shuffle bi-music-note-beamed">next</i>
        <i class="bi bi-skip-start-fill" id="back"></i>
        <i class="bi bi-play-fill" id="masterPlay"></i>
        <i class="bi bi-skip-end-fill" id="next"></i>
        <a href="" download="" id="download_music"><i class="bi bi-cloud-arrow-down-fill"></i></a>
      </div>
      <span id="currentStart">0:00</span>
      <div class="bar">
        <input type="range" id="seak" min="0" max="100">
        <div class="bar2" id="bar2"></div>
        <div class="dot"></div>
      </div>
      <span id="currentEnd">0:30</span>
      <div class="vol">
        <i class="bi bi-volume-up-fill" id="vol_icon"></i>
        <input type="range" min="0" max="100" id="vol">
        <div class="vol_bar"></div>
        <div class="dot" id="vol_dot"></div>
      </div>
    </div>
    </div>
  </header>
  <script src="script.js"></script>
</body>

</html>