-- ALTER TABLE --
-- EXERCISE 1 : Add column day of birth (DOB) in User table.
-- SUGGESTION :
/* USE aptech_php;
ALTER TABLE apUser ADD DOB date; */
-- EXERCISE 2 : DROP column DOB in User table;
-- SUGGESTION :
/* USE aptech_php;
ALTER TABLE apUser DROP COLUMN DOB; */

alter table user add DOB date;
alter table user drop column DOB;