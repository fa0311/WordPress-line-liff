function liff($line_liff_atts)
{
    global $line_liff_num;
    $line_liff_num++;
	return '<div class="liff-box" id="liff-box'.$line_liff_num.'" onclick="send(\''.$line_liff_atts["send"].'\')"><p>'.$line_liff_atts["text"].'</p></div>
	<script>
	line_liff_num++;
	</script>
	';
}
add_shortcode('liff','liff');
