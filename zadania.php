 <?php
$string = "hypertext language, programming";
$keywords = preg_split("/[\\s,]+/", $string);
    print_r($keywords);

 $text = "Jabłka są pyszne, a gruszki są smaczne.";
$pattern = '/jabłka/i'; // 'i' oznacza ignorowanie wielkości liter
$replacement = 'Owoce';
$new_text = preg_replace($pattern, $replacement, $text);
    echo $new_text; // Wynik: Owoce są pyszne, a gruszki są smaczne.
?>  