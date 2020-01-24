SELECT ABS(DATEDIFF(DATE(`last_projection`), DATE(`release_date`)) + 1)  AS `uptime`
FROM film;
