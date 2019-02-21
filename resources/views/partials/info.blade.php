# Info

https://habr.com/ru/post/351890/

`A
 id | value
`
`B
 id | value
` 
`C
 id | a_id  | b_id  | value
`
При составной сущности C = A +B, где составной ключ (a_id, b_id), URL будет следующий:
api/a/{a_id}/b/{b_id} (POST,GET,PUT,DELETE)
