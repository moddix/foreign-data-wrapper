DROP EXTENSION IF EXISTS www_fdw CASCADE;
CREATE EXTENSION www_fdw;
CREATE SERVER web FOREIGN DATA WRAPPER www_fdw OPTIONS (uri 'http://web:8000');
CREATE USER MAPPING FOR current_user SERVER web;
CREATE FOREIGN TABLE web_user (
    name text,
    role text
) SERVER web;
