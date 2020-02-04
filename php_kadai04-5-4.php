<?php
date_defaylt_timezone_set('UTC');

echo "July 1, 2000 is on a" . date("l",mktime(0,0,0,7,2000));