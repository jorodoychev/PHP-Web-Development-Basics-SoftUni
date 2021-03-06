USE soft_uni;

SELECT avg(salary) AS min_average_salary
        FROM employees
        GROUP BY department_id
        ORDER BY min_average_salary
        LIMIT 1;