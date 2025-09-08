<?php
    $tekst= "hello";
    printf("[%s]\n", $tekst); //wypisze [hello]
    printf("[%10s]\n", $tekst); //wypisze [     hello]
    printf("[%-10s]\n", $tekst); //wypisze [hello   ]
    printf("[%.3s]\n", $tekst); //wypisze [hel]
    printf("[%10.3s]\n", $tekst); //wypisze [   hel]
?>
<?php
    $n= 43523524234;
    printf("%%d= '%d'\n", $n);
    printf("%%f= '%f'\n", $n);
    printf("%%e= '%e'\n", $n);
    printf("%%b= '%b'\n", $n);
    printf("%%o= '%o'\n", $n);
    printf("%%s= '%s'\n", $n);
    printf("%%x= '%x'\n", $n);
?>