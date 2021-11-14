
<?php

# Done by Haengbok Chung

/* 
1. original table 에서 team명을 unique하게 select
2. id자동 생성
*/
INSERT INTO Teams(name)
    SELECT DISTINCT Team
    FROM original;
/*
1. Teams table에서 name과
2. Region table에서 name이 같은것을 매칭한 후
3. Region table의 id를 Teams table의 redion_id로 삽입
*/
UPDATE Teams
SET region_id = (SELECT id
    FROM Region INNER JOIN Teams
    ON Region.region = Teams.name) 

?>