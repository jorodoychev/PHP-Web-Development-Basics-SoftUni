use soft_uni;

select first_name, last_name FROM employees
WHERE manager_id IS NULL;