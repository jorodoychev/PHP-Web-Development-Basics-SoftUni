use soft_uni;

SELECT e.department_id,
       COUNT(e.department_id) as `Number of employees`
FROM `employees` AS e
GROUP BY department_id;



