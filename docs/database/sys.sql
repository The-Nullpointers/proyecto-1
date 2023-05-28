--(!) RUN SCRIPT AS SYS

CREATE TABLESPACE AVATARCREATOR DATAFILE 
'C:\app\luisa\product\21c\oradata\XE\AVATARCREATOR.DBF' --(!) CHANGE 'C:\app\user
SIZE 100M EXTENT MANAGEMENT LOCAL AUTOALLOCATE;

CREATE TEMPORARY TABLESPACE AVATARCREATOR_TEMP TEMPFILE
'C:\app\luisa\product\21c\oradata\XE\AVATARCREATOR_TEMP.DBF' --(!) CHANGE 'C:\app\user
SIZE 25M AUTOEXTEND ON;

ALTER SESSION SET "_ORACLE_SCRIPT"=TRUE;

CREATE USER AVATARCREATOR_DBA IDENTIFIED BY root123 default tablespace AVATARCREATOR TEMPORARY TABLESPACE AVATARCREATOR_TEMP;

GRANT CREATE SESSION TO AVATARCREATOR_DBA;

GRANT ALL PRIVILEGES TO AVATARCREATOR_DBA;