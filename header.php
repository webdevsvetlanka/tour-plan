<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="author" content="Svetlana Shchenkova" />
  <title>Grand Hilton Hotel</title>
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <link
    href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;600;700&family=Nunito:wght@400;600;700;800&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="./css/swiper-bundle.min.css" />
  <link rel="stylesheet" href="./css/aos.css" />
  <link rel="stylesheet" href="./css/style.css" />

  <script src="https://api-maps.yandex.ru/2.1/?apikey=7ff04bea-be7d-4c71-b0ed-6b2dc1f4eccc&lang=ru_RU"></script>
</head>

<body>
  <header class="header header--mb--fixed">
    <div class="container">
      <div class="header-top">
        <a href="index.php" class="logo">
          <svg width="176" height="19" class="logo-image">
            <use xlink:href="img\icons.svg#logo-header"></use>
          </svg>
        </a>
        <form action="#" class="search header__search header__search--mb--hidden">
          <input type="text" class="search__input" placeholder="Search Location" />
          <button class="search__button">
            <svg width="16" height="16">
              <use xlink:href="img\icons.svg#search"></use>
            </svg>
          </button>
        </form>
        <a href="#" class="user header__user header__user--mb--hidden">
          <div class="user__image">
            <img src="img/avatar.jpg" alt="Avatar: Nathan" class="user__avatar js-fit-img" />
          </div>
          <span class="user__name">Nathan</span>
        </a>
        <button class="header-top__mb">
          <span class="header-top__mb-line"></span>
        </button>
      </div>
    </div>
    <div class="navbar">
      <div class="container">
        <nav class="navbar-menu">
          <ul class="navbar-menu__list">
            <li class="navbar-menu__item navbar-menu__item--mb--visible">
              <a href="#" class="user header__user header__user--mb--visible">
                <div class="user__image">
                  <img src="img/avatar.jpg" alt="Avatar: Nathan" class="user__avatar js-fit-img" />
                </div>
                <span class="user__name">Nathan</span>
              </a>
            </li>
            <li class="navbar-menu__item navbar-menu__item--mb--visible">
              <form action="#" class="search header__search header__search--mb--visible">
                <input type="text" class="search__input" placeholder="Search Location" />
                <button class="search__button">
                  <svg width="16" height="16">
                    <use xlink:href="img\icons.svg#search"></use>
                  </svg>
                </button>
              </form>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">All Deals</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Hotels</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Activities</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Hotel Day Packages </a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Restaurants</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Events</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Rodrigues</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>