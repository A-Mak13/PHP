<?php
    $tekst= "hello";
    printf("[%s]\n, $tekst"); //wypisze [hello]
    printf("[%10s]\n, $tekst"); //wypisze [     hello]
    printf("[%-10s]\n, $tekst"); //wypisze [hello   ]
    printf("[%.3s]\n, $tekst"); //wypisze [hel]
    printf("[%10.3s]\n, $tekst"); //wypisze [   hel]