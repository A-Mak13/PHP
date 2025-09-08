<?php
    echo strlen("hello world"); //wynik 12
    echo strlen("Łódź"); //wynik 7 polskie znaki zajmuja w unicode dwa bajty
    echo mb_strlen("Łódź"); // wynik 5
?>