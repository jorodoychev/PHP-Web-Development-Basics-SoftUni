use soft_uni;

SELECT first_name, last_name, hire_date, name
FROM employees as e
INNER JOIN departments as d ON e.department_id = d.department_id
WHERE hire_date > '1999-01-01' AND name IN ('Sales', 'Finance')
ORDER BY hire_date;