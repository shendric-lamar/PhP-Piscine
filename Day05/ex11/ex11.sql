SELECT UPPER(`last_name`) AS `NAME`, `first_name`, `price`
FROM `member`
JOIN `user_card` ON member.id_member = user_card.id_user
JOIN `subscription` ON member.id_sub = subscription.id_sub
WHERE subscription.price > '42'
ORDER BY user_card.last_name ASC, user_card.first_name ASC;
