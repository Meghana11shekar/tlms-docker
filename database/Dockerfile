FROM mysql:5.7
ENV MYSQL_ROOT_PASSWORD=root
ENV MYSQL_DATABASE=teacher_leave_db
ENV MYSQL_USER=teacher_user
ENV MYSQL_PASSWORD=teach_secret
COPY seed.sql /docker-entrypoint-initdb.d/
