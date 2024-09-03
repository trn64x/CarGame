<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      #image-car img {
    width: 100%;  /* Make sure the image takes up the full width of its container */
    height: auto; /* Maintain the aspect ratio of the image */
    max-height: 100%; /* Ensure the image does not exceed the height of the container */
    object-fit: contain; /* Scale the image to fit within the container without cropping */
}
      p{
        font-size:large;
      }
      nav{
        z-index:10;
      }
        body {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }
#mains{
    width:100%;
    height:100vh;
}
        /* Background Image Styling */
        img#background-image, img#pick {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1; /* Places it behind everything */
            object-fit: cover;
        }

        #syk {
            height: 100vh;
            width: 15%;
            background-color: #001220 !important;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
        }

        #main {
            padding-left: 18%;
            z-index: 1001;
        }

        #kys {
            height:10vh !important;
            width: 100% !important;
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #navbar-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 80%;
            height:10px !important;
            position: relative;
            border-radius: 50px;
        }

        #navbar-container.active1 {
            width: 80%;
            height:10vh;
            transition: 0.3s;
        }

        #item {
            color: black;
            font-size: xx-large;
            flex-grow: 1; /* Allow #item to grow and take up available space */
        }
#font{
    height:25vh;
    width:100%;
    display:flex;
    align-items:center;
    justify-content:center;
    text-align:center;
    color:White;
    font-family: "Rubik", sans-serif;
    font-weight:900;
    font-size:5rem;
    position:relative;
}
#font::after{
content:"Choose One";
font-family: "Rubik", sans-serif;
    font-weight:900;
    font-size:8rem;
    z-index:-1;
    color:transparent;

    color: none;
    -webkit-text-stroke-width: 3px;
  -webkit-text-stroke-color: rgba(255,255,255,.3);
    position:absolute;
    top:-20%;
    


}
        #item2 {
            color: black;
            font-size: xx-large;
            margin-left: auto; /* Keep #item2 at the right end */
        }
        #pick {
          
}

body.shrink #backdrop {
  max-width: calc(80vw + 10rem); /* Adjust the width when the menu is shrunk */
}
body.shrink #mains{
  position:absolute;
  left:-12rem;
  
}
#pick {
  max-width: calc(100vw + 10rem); /* Adjust the width when the menu is shrunk */
}
#text-intro{
  width:40%;
  height:100%;
  
}
.image-container {
    width: 100%; /* Full width of the parent div */
    height: 100%; /* Full height of the parent div */
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden; /* Hide any part of the image that overflows */
    position: relative; /* Enable positioning inside the container */
}

.image-container img {
    max-width: 100%; /* Scale the image to fit within the container's width */
    max-height: 100%; /* Scale the image to fit within the container's height */
    object-fit: contain; /* Ensure the entire image fits within the container */
    position: absolute; /* Position the image absolutely to center it */
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%); /* Center the image */
}
#image-intro{
  width:60%;
  height:100%;
  
}
#text-car{
  padding:5rem;
  width:40%;
  height:100%;

}
img#image-car{
  
}
#image-car{
  width: 60%;
  height:100%;
}
@import url('https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap');
    </style>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="shop.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <!-- Background Image -->
    <img id="background-image" src="blob.svg" alt="Background">

    <!-- Sidebar -->
    <nav>
    <div class="sidebar-top">
      <span class="shrink-btn">
        <i class='bx bx-chevron-left'></i>
      </span>
      <img src="./img/logo.png" class="logo" alt="">
      <h3 class="hide">Trn's Design</h3>
    </div>

    <div class="search">
      <i class='bx bx-search'></i>
      <input type="text" class="hide" placeholder="Quick Search ...">
    </div>

    <div class="sidebar-links">
      <ul>
        <div class="active-tab"></div>
        <li class="tooltip-element" data-tooltip="0">
          <a href="#" class="active" data-active="0">
            <div class="icon">
              <i class='bx bx-tachometer'></i>
              <i class='bx bxs-tachometer'></i>
            </div>
            <span class="link hide">Home</span>
          </a>
        </li>
        <li class="tooltip-element" data-tooltip="1">
          <a href="#section-shop" data-active="1">
            <div class="icon">
              <i class='bx bx-folder'></i>
              <i class='bx bxs-folder'></i>
            </div>
            <span class="link hide">Shop</span>
          </a>
        </li>
        <li class="tooltip-element" data-tooltip="2">
          <a href="#" data-active="2">
            <div class="icon">
              <i class='bx bx-message-square-detail'></i>
              <i class='bx bxs-message-square-detail'></i>
            </div>
            <span class="link hide">Races</span>
          </a>
        </li>
        <li class="tooltip-element" data-tooltip="3">
          <a href="#" data-active="3">
            <div class="icon">
              <i class='bx bx-bar-chart-square'></i>
              <i class='bx bxs-bar-chart-square'></i>
            </div>
        
          </a>
        </li>
        <div class="tooltip">
          <span class="show">Home</span>
          <span>Shop</span>
          <span>Races</span>
        </div>
      </ul>

      <h4 class="hide">Online</h4>

      <ul>
        <li class="tooltip-element" data-tooltip="0">
          <a href="#" data-active="4">
            <div class="icon">
              <i class='bx bx-notepad'></i>
              <i class='bx bxs-notepad'></i>
            </div>
            <span class="link hide">Quests</span>
          </a>
        </li>
        <li class="tooltip-element" data-tooltip="1">
          <a href="#" data-active="5">
            <div class="icon">
              <i class='bx bx-help-circle'></i>
              <i class='bx bxs-help-circle'></i>
            </div>
            <span class="link hide">Friends</span>
          </a>
        </li>
        <li class="tooltip-element" data-tooltip="2">
          <a href="#" data-active="6">
            <div class="icon">
              <i class='bx bx-cog'></i>
              <i class='bx bxs-cog'></i>
            </div>
            <span class="link hide">Leaderboard</span>
          </a>
        </li>
        <div class="tooltip">
          <span class="show">Quests</span>
          <span>Friends</span>
          <span>Leaderboard</span>
        </div>
      </ul>
    </div>

    <div class="sidebar-footer">
      <a href="#" class="account tooltip-element" data-tooltip="0">
        <i class='bx bx-user'></i>
      </a>
      <div class="admin-user tooltip-element" data-tooltip="1">
        <div class="admin-profile hide">
          <img src="./img/face-1.png" alt="">
          <div class="admin-info">
            <h3>Jozin z Bazin</h3>
            <h5>Armin</h5>
          </div>
        </div>
        <a href="#" class="log-out">
          <i class='bx bx-log-out'></i>
        </a>
      </div>
      <div class="tooltip">
        <span class="show">John Doe</span>
        <span>Logout</span>
      </div>
    </div>
  </nav>

    <!-- Main Content -->
<div style="margin-left: 16rem;transition:left 0.5s ease-in-out"id="mains">
    <div id="kys" class="col py-3">
    <nav1 style="border-radius:50px !important; width: 97.5% !important" class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand">CarGather</a>
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-primary" type="submit">Search</button>
    </form>
  </div>
</nav1>
    </div>
    <div id="font">
    Which most describes you?
    </div>
    <div id="backdrop">
  <div id="line"></div>
  <div id="pick">
    <div id="carouselExample" class="carousel slide" style="display:flex; align-items:center; justify-content: center; width: 100%; height: 100%;">
      <div class="carousel-inner" style="width:100%; height:100%; justify-content:center;">
        
        <!-- Fast Cars Carousel Item -->
        <div class="carousel-item active" style="width:100%; color:white; font-size:50px;">
          <div id="text-car" style="float:left; display:flex; align-items:center; justify-content:center; flex-direction:column; text-align:center;">
            Fast Cars
            <p>Fast car lovers. Will find their place in world of this game</p>
          </div>
          <div id="image-car" style="width: 60%; height: 100%; float:left;">
            
              <img src="modern.jpg" alt="Modern Car">
            
          </div>
        </div>
        
        <!-- Classic Cars Carousel Item -->
        <div class="carousel-item" style="width:100%; color:white; font-size:50px;">
          <div id="text-car" style="float:left; display:flex; align-items:center; justify-content:center; flex-direction:column; text-align:center;">
            Classic Cars
            <p>This section is for people who love classic engines as well as designs</p>
          </div>
          <div id="image-car" style="width: 60%; height: 100%; float:left; display: flex; align-items: center; justify-content: center;">
            <img src="classic.jpg" alt="Classic Car" style="width: 100%; height: auto; object-fit: cover; object-position: 50% 50%;">
          </div>
        </div>
        
        <!-- Another Fast Cars Carousel Item -->
        <div class="carousel-item" style="width:100%; color:white; font-size:50px;">
          <div id="text-car" style="float:left; display:flex; align-items:center; justify-content:center; flex-direction:column; text-align:center;">
            Big Cars
            <p>Perfect for people with small dick and 160cm tall</p>
          </div>
          <div id="image-car" style="width: 60%; height: 100%; float:left;">
            
              <img src="big.jpg" alt="Modern Car">
            
          </div>
        </div>
        
      </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<script>
    const shrink_btn = document.querySelector(".shrink-btn");
const search = document.querySelector(".search");
const sidebar_links = document.querySelectorAll(".sidebar-links a");
const active_tab = document.querySelector(".active-tab");
const shortcuts = document.querySelector(".sidebar-links h4");
const tooltip_elements = document.querySelectorAll(".tooltip-element");

let activeIndex;

shrink_btn.addEventListener("click", () => {
  document.body.classList.toggle("shrink");
  setTimeout(moveActiveTab, 400);

  shrink_btn.classList.add("hovered");

  setTimeout(() => {
    shrink_btn.classList.remove("hovered");
  }, 500);
});

search.addEventListener("click", () => {
  document.body.classList.remove("shrink");
  search.lastElementChild.focus();
});

function moveActiveTab() {
  let topPosition = activeIndex * 58 + 2.5;

  if (activeIndex > 3) {
    topPosition += shortcuts.clientHeight;
  }

  active_tab.style.top = `${topPosition}px`;
}

function changeLink() {
  sidebar_links.forEach((sideLink) => sideLink.classList.remove("active"));
  this.classList.add("active");

  activeIndex = this.dataset.active;

  moveActiveTab();
}

sidebar_links.forEach((link) => link.addEventListener("click", changeLink));

function showTooltip() {
  let tooltip = this.parentNode.lastElementChild;
  let spans = tooltip.children;
  let tooltipIndex = this.dataset.tooltip;

  Array.from(spans).forEach((sp) => sp.classList.remove("show"));
  spans[tooltipIndex].classList.add("show");

  tooltip.style.top = `${(100 / (spans.length * 2)) * (tooltipIndex * 2 + 1)}%`;
}

tooltip_elements.forEach((elem) => {
  elem.addEventListener("mouseover", showTooltip);
});
</script>
</div>
</div>
<div id="section-shop"></div>
</body>
</html>