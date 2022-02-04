use geography;

SELECT count(c.country_code) AS 'Country code'
FROM countries as c
LEFT JOIN mountains_countries AS mc ON c.country_code = mc.country_code
WHERE mountain_id IS NULL;