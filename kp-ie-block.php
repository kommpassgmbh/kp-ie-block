<?php
/*
Plugin Name: Internet Explorer Popup
Plugin URI: https://kommpass.ch
description: >-
Internet Explorer Popup
Version: 1
Author: Lena Hinnen
*/
add_action('wp_enqueue_scripts', 'kpieb_enqueue');
function kpieb_enqueue() {
    wp_enqueue_style('plugin-style', plugins_url('plugin-style.css', __FILE__));
}

add_action( 'wp_footer', 'kpieb_add_to_footer');
function kpieb_add_to_footer(){
    ob_start();?>
    <div id="ie-overlay">
        <div class="popup">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </div>
            <div class="title">
                Ihr Browser wird nicht unterstützt
            </div>
            <div class="text">
                Diese Website wird vom Internet Explorer leider nicht unterstützt. Wir empfehlen Ihnen den Wechsel auf einen aktuellen Browser:
            </div>
            <div class="links">
                <a href="https://www.google.com/chrome/" target="_blank">
                    <img src="<?= plugins_url() . '/kp-ie-block/img/chrome.png' ?>" alt="">
                </a>
                <a href="https://www.mozilla.org/de/firefox/new/" target="_blank">
                    <img src="<?= plugins_url() . '/kp-ie-block/img/firefox.png' ?>" alt="">
                </a>
                <a href="https://www.microsoft.com/de-de/edge" target="_blank">
                    <img src="<?= plugins_url() . '/kp-ie-block/img/edge.png' ?>" alt="">
                </a>
            </div>
        </div>
    </div>
<?php
    $html = ob_get_clean();
    echo $html;
}

?>
