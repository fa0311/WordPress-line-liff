function liff($atts){
    return '<div class="liff-box" id="liff-box" onclick="send(\''.$atts["send"].'\')"><p>'.$atts["text"].'</p></div>';
}
add_shortcode('liff','liff');
