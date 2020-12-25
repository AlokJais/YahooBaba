<?php
//$str= "A 'quote' is <b> bold </b>";
//$str = '<a href = "https://yahoobaba.net"> Yahoo Baba website </a>';


//echo $str . "<br> <br>";

//echo htmlentities($str);

//echo htmlentities($str, ENT_QUOTES);

//echo htmlentities($str, ENT_NOQUOTES);

//$htmlent= htmlentities($str, ENT_NOQUOTES);

//$htmlent= htmlspecialchars($str, ENT_NOQUOTES);

 //echo $htmlent;

 //echo htmlspecialchars_decode($htmlent);

//echo htmlspecialchars($str, ENT_NOQUOTES);

//echo htmlspecialchars($str, ENT_QUOTES);

echo "<pre>";
// print_r(get_html_translation_table(HTML_SPECIALCHARS));
print_r(get_html_translation_table(HTML_ENTITIES));
echo "</pre>";