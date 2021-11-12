<?php

INSERT INTO Athletes(name,sex,age,height,weight)
    SELECT Name,Sex,Age,Height,Weight
    FROM original
    GROUP BY Name;

?>