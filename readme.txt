1.安装bitnami-wampstack-5.5.28-0-windows-installer.exe
2.设置php环境变量
3.将fullcalendar_放置在bitnami-wampstack-5.5.28-0-windows-installer.exe安装路径下的apache2里的htdoc文件夹下
4.修改fullcalendar_下的connect.php中数据库名称等
5.进入127.0.0.1的phpmyadmin，建立数据库，建表
6.测试访问


一个fullcalendar_文件夹对应一个数据库，可建立多个数据库分别对应不同的fullcalendar_*文件夹，来实现数据隔离。
一个fullcalendar_文件夹可由多人共同使用,以实现数据共享。

例如：
fullcalendar_minister对应db_minister，属于高管用
fullcalendar_staff对应db_staff，属于员工用