use soft_uni;

SELECT first_name, last_name, name, address_text
FROM employees AS e
         INNER JOIN addresses AS a ON a.address_id = e.address_id
         INNER JOIN towns AS t ON t.town_id = a.town_id
ORDER BY first_name, last_name
LIMIT 5;
