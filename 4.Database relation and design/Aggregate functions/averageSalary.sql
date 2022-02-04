USE soft_uni;

SELECT e.department_id,
       round(avg(e.salary), 2) as 'Average Salary'
FROM employees AS e
GROUP BY department_id;

