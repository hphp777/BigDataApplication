--Done by Haengbok Chung
    
INSERT INTO Athletes(name,sex,age,height,weight)
SELECT Name,Sex,Age,Height,Weight
FROM original
GROUP BY Name;

--add foreign key
ALTER TABLE athletes ADD FOREIGN KEY(NOC) REFERENCES region(NOC) ON DELETE CASCADE ON UPDATE CASCADE;