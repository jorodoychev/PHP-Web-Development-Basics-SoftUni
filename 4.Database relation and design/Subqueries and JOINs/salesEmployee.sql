USE soft_uni;

SELECT employee_id, first_name, last_name, name
FROM employees AS e
         INNER JOIN departments AS d ON e.department_id = d.department_id
WHERE name = 'Sales'
ORDER BY employee_id DESC;