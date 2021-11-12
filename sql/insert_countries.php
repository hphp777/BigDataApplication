<?php

INSERT INTO Countries 
SELECT Region, NOC
FROM Region;

?>