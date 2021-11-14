/* Rank 함수 이용 */

/* 금메달을 가장 많이 획득한 >>나라<< 랭킹*/
/* GoldMedals_NOC 라는 뷰를 먼저 생성 */
create view GoldMedals_NOC(NOC, Gold)
as select NOC, count(*) from original_1
where Medal in (select Medal from original_1 where Medal like 'Gold%')
group by NOC;
-- select * from GoldMedals_NOC;

/* GoldMedals 뷰에서 rank 함수 이용 : $sql에 넣은 내용 */
select NOC, Gold, rank() over (order by Gold desc) as Rank
from GoldMedals_NOC;



/* 금메달을 가장 많이 획득한 >>선수<< 랭킹*/
/* GoldMedals_Athelete 라는 뷰를 먼저 생성 */
create view GoldMedals_Athelete(Athelete, NOC, Gold)
as select Name, NOC, count(*) from original_1
where Medal in (select Medal from original_1 where Medal like 'Gold%')
group by Name;
-- select * from GoldMedals_Athelete;

/* GoldMedals 뷰에서 rank 함수 이용: $sql에 넣은 내용 */
select Athelete, NOC, Gold, rank() over (order by Gold desc) as Rank
from GoldMedals_Athelete;