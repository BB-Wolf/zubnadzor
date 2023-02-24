<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com -->
<!--  Last Published: Mon Aug 14 2017 12:58:33 GMT+0000 (UTC)  -->
<html data-wf-page="59d33c30fe21160001ba6cc1" data-wf-site="59d33c2ffe21160001ba6cbd">
<head>
  <meta charset="utf-8">
  <title>ligaprofessionalov</title>
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <link href="<?=get_template_directory_uri()?>/images/favicon.svg" rel="shortcut icon" type="image/x-icon">
  <?
  wp_head();
  $GLOBALS['data'] = get_option('data_company');
  global $data;
  $phone_1 = get_bloginfo('blogname');
  $phone_2 = get_bloginfo('description');
  ?>
</head>
<body>
  <header class="header">
    <div class="header__top">
      <div class="header__container container">
        <div class="header__logo">
          <a href="/"><img src="<?=get_template_directory_uri()?>/images/Logo.svg"  alt="Лига профессионалов"></a>
        </div>
        <div class="header__button">
          <div class="header__time">
            <?=$data['timework']?>
          </div>
          <div class="header__buttons">
            <button type="button" class="button button-zapis-js">
              <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.5 8C14.2956 8 15.0587 8.31607 15.6213 8.87868C16.1839 9.44129 16.5 10.2044 16.5 11C16.5 11.2652 16.6054 11.5196 16.7929 11.7071C16.9804 11.8946 17.2348 12 17.5 12C17.7652 12 18.0196 11.8946 18.2071 11.7071C18.3946 11.5196 18.5 11.2652 18.5 11C18.5 9.67392 17.9732 8.40215 17.0355 7.46447C16.0979 6.52678 14.8261 6 13.5 6C13.2348 6 12.9804 6.10536 12.7929 6.29289C12.6054 6.48043 12.5 6.73478 12.5 7C12.5 7.26522 12.6054 7.51957 12.7929 7.70711C12.9804 7.89464 13.2348 8 13.5 8Z" fill="white"></path>
                <path d="M13.5 4C15.3565 4 17.137 4.7375 18.4497 6.05025C19.7625 7.36301 20.5 9.14348 20.5 11C20.5 11.2652 20.6054 11.5196 20.7929 11.7071C20.9804 11.8946 21.2348 12 21.5 12C21.7652 12 22.0196 11.8946 22.2071 11.7071C22.3946 11.5196 22.5 11.2652 22.5 11C22.5 8.61305 21.5518 6.32387 19.864 4.63604C18.1761 2.94821 15.8869 2 13.5 2C13.2348 2 12.9804 2.10536 12.7929 2.29289C12.6054 2.48043 12.5 2.73478 12.5 3C12.5 3.26522 12.6054 3.51957 12.7929 3.70711C12.9804 3.89464 13.2348 4 13.5 4ZM22.25 15.91C22.195 15.7495 22.1 15.6056 21.9741 15.4919C21.8481 15.3781 21.6953 15.2984 21.53 15.26L15.53 13.89C15.3671 13.8531 15.1976 13.8575 15.0369 13.9029C14.8762 13.9484 14.7294 14.0333 14.61 14.15C14.47 14.28 14.46 14.29 13.81 15.53C11.6532 14.5362 9.92499 12.8009 8.94 10.64C10.21 10 10.22 10 10.35 9.85C10.4667 9.73056 10.5516 9.58379 10.5971 9.42308C10.6425 9.26238 10.6469 9.09286 10.61 8.93L9.24 3C9.20165 2.8347 9.12186 2.68187 9.00814 2.55591C8.89443 2.42995 8.75053 2.335 8.59 2.28C8.35647 2.19659 8.11531 2.1363 7.87 2.1C7.61725 2.0414 7.35933 2.0079 7.1 2C5.88 2 4.70998 2.48464 3.84731 3.34731C2.98464 4.20998 2.5 5.38 2.5 6.6C2.50529 10.6827 4.12949 14.5967 7.0164 17.4836C9.90331 20.3705 13.8173 21.9947 17.9 22C18.5041 22 19.1022 21.881 19.6603 21.6498C20.2184 21.4187 20.7255 21.0798 21.1527 20.6527C21.5798 20.2255 21.9187 19.7184 22.1498 19.1603C22.381 18.6022 22.5 18.0041 22.5 17.4C22.5003 17.1455 22.4802 16.8913 22.44 16.64C22.398 16.3916 22.3344 16.1474 22.25 15.91Z" fill="white"></path>
              </svg>
              записаться на прием
            </button>
            <button type="button" class="burger">
              <svg width="33" height="22" viewBox="0 0 33 22" fill="none">
                <path d="M33 22H16.5V18.3333H33V22ZM33 12.8333H0V9.16667H33V12.8333ZM33 3.66667H0V0H33V3.66667Z" fill="white"></path>
              </svg>
            </button>
          </div>
        </div>
        <div class="header__address">
          <div class="header__contact">
            <a href="https://wa.clck.bar/<?=$phone_1?>">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                <g clip-path="url(#clip0_202_173)">
                  <path d="M20.25 0H3.75C1.67893 0 0 1.67893 0 3.75V20.25C0 22.3211 1.67893 24 3.75 24H20.25C22.3211 24 24 22.3211 24 20.25V3.75C24 1.67893 22.3211 0 20.25 0Z" fill="#25D366"/>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M16.9 7.0125C15.5875 5.7 13.8375 5 12 5C8.15 5 5 8.15 5 12C5 13.225 5.35001 14.45 5.96251 15.5L5 19L8.67501 18.0375C9.72501 18.5625 10.8625 18.9125 12 18.9125C15.85 18.9125 19 15.7625 19 11.9125C19 10.075 18.2125 8.325 16.9 7.0125ZM12 17.775C10.95 17.775 9.90001 17.5125 9.02501 16.9875L8.84999 16.9L6.66249 17.5125L7.27501 15.4125L7.09999 15.15C6.48749 14.1875 6.22499 13.1375 6.22499 12.0875C6.22499 8.9375 8.85 6.3125 12 6.3125C13.575 6.3125 14.975 6.925 16.1125 7.975C17.25 9.1125 17.775 10.5125 17.775 12.0875C17.775 15.15 15.2375 17.775 12 17.775ZM15.15 13.4C14.975 13.3125 14.1 12.875 13.925 12.875C13.75 12.7875 13.6625 12.7875 13.575 12.9625C13.4875 13.1375 13.1375 13.4875 13.05 13.6625C12.9625 13.75 12.875 13.75 12.7 13.75C12.525 13.6625 12 13.4875 11.3 12.875C10.775 12.4375 10.425 11.825 10.3375 11.65C10.25 11.475 10.3375 11.3875 10.425 11.3C10.5125 11.2125 10.6 11.125 10.6875 11.0375C10.775 10.95 10.775 10.8625 10.8625 10.775C10.95 10.6875 10.8625 10.6 10.8625 10.5125C10.8625 10.425 10.5125 9.55 10.3375 9.2C10.25 8.9375 10.075 8.9375 9.98751 8.9375C9.90001 8.9375 9.81249 8.9375 9.63749 8.9375C9.54999 8.9375 9.37499 8.9375 9.19999 9.1125C9.02499 9.2875 8.58751 9.725 8.58751 10.6C8.58751 11.475 9.19999 12.2625 9.28749 12.4375C9.37499 12.525 10.5125 14.3625 12.2625 15.0625C13.75 15.675 14.0125 15.5 14.3625 15.5C14.7125 15.5 15.4125 15.0625 15.5 14.7125C15.675 14.275 15.675 13.925 15.5875 13.925C15.5 13.4875 15.325 13.4875 15.15 13.4Z" fill="white"/>
                </g>
                <defs>
                  <clipPath id="clip0_202_173">
                    <rect width="24" height="24" rx="12" fill="white"/>
                  </clipPath>
                </defs>
              </svg>
            </a> 
            <span>г. Екатеринбург, <?=$data['ur_name']?></span>
          </div>
          <div class="header__contact">
            <a href="https://wa.clck.bar/<?=$data['description']?>">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                <g clip-path="url(#clip0_202_173)">
                  <path d="M20.25 0H3.75C1.67893 0 0 1.67893 0 3.75V20.25C0 22.3211 1.67893 24 3.75 24H20.25C22.3211 24 24 22.3211 24 20.25V3.75C24 1.67893 22.3211 0 20.25 0Z" fill="#25D366"/>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M16.9 7.0125C15.5875 5.7 13.8375 5 12 5C8.15 5 5 8.15 5 12C5 13.225 5.35001 14.45 5.96251 15.5L5 19L8.67501 18.0375C9.72501 18.5625 10.8625 18.9125 12 18.9125C15.85 18.9125 19 15.7625 19 11.9125C19 10.075 18.2125 8.325 16.9 7.0125ZM12 17.775C10.95 17.775 9.90001 17.5125 9.02501 16.9875L8.84999 16.9L6.66249 17.5125L7.27501 15.4125L7.09999 15.15C6.48749 14.1875 6.22499 13.1375 6.22499 12.0875C6.22499 8.9375 8.85 6.3125 12 6.3125C13.575 6.3125 14.975 6.925 16.1125 7.975C17.25 9.1125 17.775 10.5125 17.775 12.0875C17.775 15.15 15.2375 17.775 12 17.775ZM15.15 13.4C14.975 13.3125 14.1 12.875 13.925 12.875C13.75 12.7875 13.6625 12.7875 13.575 12.9625C13.4875 13.1375 13.1375 13.4875 13.05 13.6625C12.9625 13.75 12.875 13.75 12.7 13.75C12.525 13.6625 12 13.4875 11.3 12.875C10.775 12.4375 10.425 11.825 10.3375 11.65C10.25 11.475 10.3375 11.3875 10.425 11.3C10.5125 11.2125 10.6 11.125 10.6875 11.0375C10.775 10.95 10.775 10.8625 10.8625 10.775C10.95 10.6875 10.8625 10.6 10.8625 10.5125C10.8625 10.425 10.5125 9.55 10.3375 9.2C10.25 8.9375 10.075 8.9375 9.98751 8.9375C9.90001 8.9375 9.81249 8.9375 9.63749 8.9375C9.54999 8.9375 9.37499 8.9375 9.19999 9.1125C9.02499 9.2875 8.58751 9.725 8.58751 10.6C8.58751 11.475 9.19999 12.2625 9.28749 12.4375C9.37499 12.525 10.5125 14.3625 12.2625 15.0625C13.75 15.675 14.0125 15.5 14.3625 15.5C14.7125 15.5 15.4125 15.0625 15.5 14.7125C15.675 14.275 15.675 13.925 15.5875 13.925C15.5 13.4875 15.325 13.4875 15.15 13.4Z" fill="white"/>
                </g>
                <defs>
                  <clipPath id="clip0_202_173">
                    <rect width="24" height="24" rx="12" fill="white"/>
                  </clipPath>
                </defs>
              </svg>
            </a> 
            <span>г. Екатеринбург, <?=$data['ur_inn']?></span>
          </div>
          <div class="header__contact">
            <a href="https://wa.clck.bar/<?=$phone_2?>">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                <g clip-path="url(#clip0_202_173)">
                  <path d="M20.25 0H3.75C1.67893 0 0 1.67893 0 3.75V20.25C0 22.3211 1.67893 24 3.75 24H20.25C22.3211 24 24 22.3211 24 20.25V3.75C24 1.67893 22.3211 0 20.25 0Z" fill="#25D366"/>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M16.9 7.0125C15.5875 5.7 13.8375 5 12 5C8.15 5 5 8.15 5 12C5 13.225 5.35001 14.45 5.96251 15.5L5 19L8.67501 18.0375C9.72501 18.5625 10.8625 18.9125 12 18.9125C15.85 18.9125 19 15.7625 19 11.9125C19 10.075 18.2125 8.325 16.9 7.0125ZM12 17.775C10.95 17.775 9.90001 17.5125 9.02501 16.9875L8.84999 16.9L6.66249 17.5125L7.27501 15.4125L7.09999 15.15C6.48749 14.1875 6.22499 13.1375 6.22499 12.0875C6.22499 8.9375 8.85 6.3125 12 6.3125C13.575 6.3125 14.975 6.925 16.1125 7.975C17.25 9.1125 17.775 10.5125 17.775 12.0875C17.775 15.15 15.2375 17.775 12 17.775ZM15.15 13.4C14.975 13.3125 14.1 12.875 13.925 12.875C13.75 12.7875 13.6625 12.7875 13.575 12.9625C13.4875 13.1375 13.1375 13.4875 13.05 13.6625C12.9625 13.75 12.875 13.75 12.7 13.75C12.525 13.6625 12 13.4875 11.3 12.875C10.775 12.4375 10.425 11.825 10.3375 11.65C10.25 11.475 10.3375 11.3875 10.425 11.3C10.5125 11.2125 10.6 11.125 10.6875 11.0375C10.775 10.95 10.775 10.8625 10.8625 10.775C10.95 10.6875 10.8625 10.6 10.8625 10.5125C10.8625 10.425 10.5125 9.55 10.3375 9.2C10.25 8.9375 10.075 8.9375 9.98751 8.9375C9.90001 8.9375 9.81249 8.9375 9.63749 8.9375C9.54999 8.9375 9.37499 8.9375 9.19999 9.1125C9.02499 9.2875 8.58751 9.725 8.58751 10.6C8.58751 11.475 9.19999 12.2625 9.28749 12.4375C9.37499 12.525 10.5125 14.3625 12.2625 15.0625C13.75 15.675 14.0125 15.5 14.3625 15.5C14.7125 15.5 15.4125 15.0625 15.5 14.7125C15.675 14.275 15.675 13.925 15.5875 13.925C15.5 13.4875 15.325 13.4875 15.15 13.4Z" fill="white"/>
                </g>
                <defs>
                  <clipPath id="clip0_202_173">
                    <rect width="24" height="24" rx="12" fill="white"/>
                  </clipPath>
                </defs>
              </svg>
            </a> 
            <span>г. Екатеринбург, <?=$data['ur_ogrn']?></span>
          </div>
        </div>
        <div class="header__phone">
          <a href="+7<?=$data['phone_code']?><?=$data['phone']?>">+7(<?=$data['phone_code']?>)<?=$data['phone']?></a>
          <a href="+7<?=$data['phone_code']?><?=$data['phone2']?>">+7(<?=$data['phone_code']?>)<?=$data['phone2']?></a>
          <a href="+7<?=$data['phone_code']?><?=$data['phone3']?>">+7(<?=$data['phone_code']?>)<?=$data['phone3']?></a>
        </div>
      </div>
    </div>
    <div class="header__bottom">
      <button type="button" class="header__close">
        <svg width="25" height="25" viewBox="0 0 25 25" fill="none">
          <path d="M18.6521 5.64099L19.3591 6.34799L6.34811 19.358L5.64111 18.6515L18.6521 5.64099Z" fill="#ffffff"></path>
          <path d="M6.34811 5.64099L19.3591 18.651L18.6521 19.3585L5.64111 6.34849L6.34811 5.64099Z" fill="#ffffff"></path>
        </svg>
      </button> 
      <div class="container">
        <nav role="navigation" class="nav-menu w-nav-menu">
         <?
         wp_nav_menu( array(
          'theme_location'  => 'top',
          'menu'            => '', 
          'container'       => false, 
          'menu_class'      => 'menu list-reset', 
          'menu_id'         => '',
          'after'           => '<span class="menu-arrow"><svg width="11" height="7" viewBox="0 0 11 7" fill="none">
          <path d="M1.63477 1L5.63477 5L9.63477 1" stroke="white" stroke-width="2"/>
          </svg></span>',
          'echo'            => true,
          'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
          'depth'           => 0,
          'walker'          => '',
        ) );?>
      </nav>
    </div>
    <div class="header__phone--mobile">
      <a href="+7<?=$data['phone_code']?><?=$data['phone']?>">+7(<?=$data['phone_code']?>)<?=$data['phone']?></a>
      <a href="+7<?=$data['phone_code']?><?=$data['phone2']?>">+7(<?=$data['phone_code']?>)<?=$data['phone2']?></a>
      <a href="+7<?=$data['phone_code']?><?=$data['phone3']?>">+7(<?=$data['phone_code']?>)<?=$data['phone3']?></a>
    </div>
  </div>
</header>