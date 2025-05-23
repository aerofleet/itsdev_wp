<?php
// 부모 테마 스타일 불러오기
add_action( 'wp_enqueue_scripts', 'astra_child_enqueue_styles' );
function astra_child_enqueue_styles() {
    wp_enqueue_style( 'astra-style', get_template_directory_uri() . '/style.css' );
}

// 🌙 다크 모드 버튼 상단에 삽입 (언어 선택 옆)
add_action( 'wp_body_open', 'itsdev_insert_dark_mode_toggle' );
function itsdev_insert_dark_mode_toggle() {
    echo '
    <div id="theme-toggle-container">
      <button id="theme-toggle" aria-label="Toggle Theme" aria-hidden="true">
        <div class="icon30 sun">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" width="24" height="24" fill="#222">
            <path d="M480-280q-83 0-141.5-58.5T280-480q0-83 58.5-141.5T480-680q83 0 141.5 58.5T680-480q0 83-58.5 141.5T480-280ZM200-440H40v-80h160v80Zm720 0H760v-80h160v80ZM440-760v-160h80v160h-80Zm0 720v-160h80v160h-80ZM256-650l-101-97 57-59 96 100-52 56Zm492 496-97-101 53-55 101 97-57 59Zm-98-550 97-101 59 57-100 96-56-52ZM154-212l101-97 55 53-97 101-59-57Z"/>
          </svg>
        </div>
        <div class="icon30 moon">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" width="24" height="24" fill="#fff">
            <path d="M480-120q-150 0-255-105T120-480q0-150 105-255t255-105q14 0 27.5 1t26.5 3q-41 29-65.5 75.5T444-660q0 90 63 153t153 63q55 0 101-24.5t75-65.5q2 13 3 26.5t1 27.5q0 150-105 255T480-120Z"/>
          </svg>
        </div>
      </button>
    </div>
    ';
}


