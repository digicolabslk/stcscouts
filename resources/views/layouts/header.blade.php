<header>
    <div id="myNav" class="overlay">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

      <div class="row">
        <div class="column">
          <div class="overlay-content">
            <ul>
              <li><a href="{{ url('/') }}">Home</a></li>

              <li class="dropdown-btn"><a href="#">The Troop <i class="fa fa-caret-down"></i></a></li>
              <div class="dropdown-container">
                <a href="#">Present Trop Profile</a>
                <a href="#">Instructor</a>
                <a href="#">The Group Committee</a>
              </div>

              <li class="dropdown-btn"><a href="#">The Club Pack <i class="fa fa-caret-down"></i></a></li>
              <div class="dropdown-container">
                <a href="#">Home</a>
                <a href="#">History of Club Pack</a>
                <a href="#">Clubs News</a>
                <a href="#">Clubs Pack Leaders</a>
              </div>

              <a href="#">News</a>

              <li class="dropdown-btn"><a href="#">Gallery <i class="fa fa-caret-down"></i></a></li>
              <div class="dropdown-container">
                <a href="#">Photo Gallery</a>
                <a href="#">Video Gallery</a>
              </div>

              <li class="dropdown-btn"><a href="#">About <i class="fa fa-caret-down"></i></a></li>
              <div class="dropdown-container">
                <a href="{{url('about')}}">About the Site</a>
                <a href="#">Our Info</a>
              </div>

              <li class="dropdown-btn"><a href="#">Badge Work <i class="fa fa-caret-down"></i></a></li>
              <div class="dropdown-container">
                <a href="#">Badgework - New Syllabus</a>
                <a href="#">Badgework - Old Syllabus</a>
              </div>

              <li class="dropdown-btn"><a href="#">Events <i class="fa fa-caret-down"></i></a></li>
              <div class="dropdown-container">
                <a href="#">ESCAPADE</a>
                <a href="#">Request the Scout Dunk</a>
              </div>

              <a href="{{ url('contact') }}">Contact Us</a>

            </ul>
          </div>
        </div>

        <div class="column">
          <div class="social-menu">
            <ul>
              <li>
                <a href="#"><i class="fa fa-facebook"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-instagram"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-envelope"></i></a>
              </li>
            </ul>
          </div>

          <div class="search-box">
            <button class="btn-search"><i class="fa fa-search"></i></button>
            <input type="text" class="input-search" placeholder="Type to Search..." />
          </div>
        </div>
      </div>
    </div>

    <div class="menu-icon">
      <span onclick="openNav()">&#9776;</span>
    </div>
  </header>