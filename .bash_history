ls
ls public_html
cd ../
ls
ls
ls dev.elixir-europe.org/
cd ../
ls
cd d/
cd d/dev.elixir-europe.org
cd /
ls
cd var
ls
cd sites
ls
ls d
cd d
ls
cd dev.elixir-europe.org/
ls
mkdir live_backups
ls
mkdir private
ls
cd live_backups
rdiff-backup
rsync
rsync -a root@elixir-europe.org:/var/www/elixir-europe.org/public_html 
ls
cd ../
ls
ls live_backups
ls public_html/
find -name "stark"
rsync -a root@elixir-europe.org:/var/www/elixir-europe.org/public_html  /home/st54l7t3lloz/additional_domains/dev.elixir-europe.org/live_backups
ls
ls live_backups/
ls public_html/
rsync -a root@elixir-europe.org:/var/www/elixir-europe.org/private  /home/st54l7t3lloz/additional_domains/dev.elixir-europe.org/live_backups
ls
rsync -a root@elixir-europe.org:/var/www/elixir-europe.org/private-files  /home/st54l7t3lloz/additional_domains/dev.elixir-europe.org/live_backups
logout
exit
mysql
mysqladmin -u develixi_tester -p status
/etc/init.d/mysql status
service mysqld status
find -iname 'mysql'
pwd
cd /
ls
cd bin
ls
cd mysql
ls -l
service /usr/bin/mysqld status
cd  /usr/bin
ls
ls -l
mysql
service mysqld start
mysql_config --socket
mysqladmin -u develixi_tester -p status
lsb_release -a
cat /etc/*release
mysqladmin -u develixi_develop -p status
mysqladmin -u develixi_develop -p status
mysql --host=localhost --user=develixi_develop --password=mypass mydb
mysql -h localhost -u develixi_develop -p develixi_develop
exit
pwd
ls
cd live_backups/
ls
pwd
mysqldump -u root -p -h elixir-europe.org elixir > /home/st54l7t3lloz/additional_domains/dev.elixir-europe.org/live_backups/elixir-20160209.sql
mysqldump --single-transaction -u root -p -h elixir-europe.org elixir > /home/st54l7t3lloz/additional_domains/dev.elixir-europe.org/live_backups/elixir-20160209.sql
mysqldump -u root -p -h localhost elixir > /home/st54l7t3lloz/additional_domains/dev.elixir-europe.org/live_backups/elixir-20160209.sql
mysqldump -u root -p -h localhost elixir > /home/st54l7t3lloz/additional_domains/dev.elixir-europe.org/live_backups/elixir-20160209.sql
ls
l;s -l
ls -l
rsync -a root@elixir-europe.org:/var/www/elixir-europe.org/backups /home/st54l7t3lloz/additional_domains/dev.elixir-europe.org/live_backups
ls
cd ../
pwd
ls
pwd
ls
cd public_html/
ls
cd ../live_backups/
ls
rm elixir-20160209.sql 
ls
ls backups
rm -r backups
ls
mkdir sql-dumps
ls
rsync -a root@elixir-europe.org:/var/www/elixir-europe.org/backups/sql-dumps /home/st54l7t3lloz/additional_domains/dev.elixir-europe.org/live_backups/sql-dumps
ls
ls sql-dumps/
cd sql-dumps
ls
rm -r sql-dumps/
ls
rsync -a root@elixir-europe.org:/var/www/elixir-europe.org/backups/sql-dumps/ /home/st54l7t3lloz/additional_domains/dev.elixir-europe.org/live_backups/sql-dumps/
ls
pwd
cd ..
ls
pwd
cd ..
ls
cd public_html/
pwd
cd ..
pwd
cd live_backups/
ls
cp -r public_html/* /home/st54l7t3lloz/additional_domains/dev.elixir-europe.org/public_html
mysql -u develixi_develop -p
mysql -h localhost -u develixi_develop -p
mysql  -h localhost -p -u develixi_develop develixi_develop < /home/st54l7t3lloz/additional_domains/dev.elixir-europe.org/live_backups/sql-dumps/elixir-20160209.sql
pwd
ls
ls sql-dumps
mysql  -h localhost -p -u develixi_develop develixi_develop < /home/st54l7t3lloz/additional_domains/dev.elixir-europe.org/live_backups/sql-dumps/elixir-20160209.sql.gz
ls
gunzip sql-dumps/elixir-20160209.sql.gz 
mysql  -h localhost -p -u develixi_develop develixi_develop < /home/st54l7t3lloz/additional_domains/dev.elixir-europe.org/live_backups/sql-dumps/elixir-20160209.sql
mysql -u develixi_develop -p
mysql -h localhost -u develixi_develop -p 
mysql -u root -p
mysql  -h localhost -p -u develixi_develop
pwd
ls
ls live_backups/
pwd
ls
wget http://files.drush.org/drush.phar
php drush.phar core-status
chmod +x drush.phar
mv drush.phar /usr/local/bin/drush
pwd
ls
drush init
cd ~
ls -a
curl -sS https://getcomposer.org/installer | php
rm composer.phar 
rm -r .composer
ls
rm drush.phar 
ls
exit
drush
wget http://files.drush.org/drush.phar
php drush.phar core-status
chmod +x drush.phar
pwd
cd /var/sites/d
pwd
ls
cd dev.elixir-europe.org/
ls
mv drush.phar drush
ls
drush
drush init
cd ~
ls
cd /bin
ls
pwd
mv drush /bin/drush
mv /home/st54l7t3lloz/additional_domains/dev.elixir-europe.org/drush /bin/drush
cd ~
ls -a
curl -sS https://getcomposer.org/installer | php
mv composer.phar bin/composer.phar
mv composer.phar /bin/composer.phar
which php-cli
which php-5.4-cli
nano .bash-src
ls -a
nano .bashrc
nano .bashrc
cd ~
ls a
ls -a
source ~/.bashrc
composer
composer global require drush/drush:dev-master
drush
nano .bashrc
source ~/.bashrc
drush
nano .bashrc
nano ~/.composer/composer.json
composer global update
composer global require drush/drush:6.4.0
drush
which php-5.4-cli
ls
cd ~
ls
cd ~
ls -a
nano bashrc
nano .bashrc
logout
exit
ls -a
ls .ssh/
touch .ssh/authorized_keys
ls
pwd
mkdir tess_backups
vim .ssh/authorized_keys 
ls
ls
ls -l tess_backups/
pwd
pwd
ls -la /home/st54l7t3lloz/additional_domains/dev.elixir-europe.org/tess_backups/
exit
ls -la /home/st54l7t3lloz/additional_domains/dev.elixir-europe.org/tess_backups/
crontab -e
pwd
cd ../
ls
cd ..
ls
cd ..
ls
cd /home/st54l7t3lloz/additional_domains/dev.elixir-europe.org
ls
ls live_backups/
ls live-backups/
cd live_backups/
ls
ssh root@elixir-europe.org
pwd
ls
rsync -a root@elixir-europe.org:/var/www/elixir-europe.org/private-files/backup_migrate/sql-dumps/ /home/st54l7t3lloz/additional_domains/dev.elixir-europe.org/mysql_backups
ls -l
rsync -a root@elixir-europe.org:/var/www/elixir-europe.org/private-files/backup_migrate/sql-dumps/ /home/st54l7t3lloz/additional_domains/dev.elixir-europe.org/mysql_backups -O
rsync root@elixir-europe.org:/var/www/elixir-europe.org/private-files/backup_migrate/sql-dumps/ /home/st54l7t3lloz/additional_domains/dev.elixir-europe.org/mysql_backups -O
ls -l
rsync -a root@elixir-europe.org:/var/www/elixir-europe.org/private-files/backup_migrate/sql-dumps/ /home/st54l7t3lloz/additional_domains/dev.elixir-europe.org/live_backups/sql-dumps
rsync -a root@elixir-europe.org:/var/www/elixir-europe.org/public_html/ /home/st54l7t3lloz/additional_domains/dev.elixir-europe.org/live_backups/public_html
rsync -a root@elixir-europe.org:/var/www/elixir-europe.org/private-files/ /home/st54l7t3lloz/additional_domains/dev.elixir-europe.org/live_backups/private_files --exclude '/var/www/elixir-europe.org/private/backup_migrate'
rsync -a root@elixir-europe.org:/var/www/elixir-europe.org/private-files/ /home/st54l7t3lloz/additional_domains/dev.elixir-europe.org/live_backups/private_files --exclude '/var/www/elixir-europe.org/private-files/backup_migrate'
pwd
ls -l
cd live_backups/
ls -l
cd public_html/
ls -l
cd ../private_files
ls -l
ls -l -t
ls -lt | less
ssh-keygen -t rsa
ssh-copy-id root@elixir-europe.org
cat ~/.ssh/id_rsa.pub | ssh user@123.45.56.78 "mkdir -p ~/.ssh && cat >>  ~/.ssh/authorized_keys"
cat /home/st54l7t3lloz/additional_domains/dev.elixir-europe.org/.ssh/id_rsa.pub | ssh root@elixir-europe.org "mkdir -p ~/.ssh && cat >>  ~/.ssh/authorized_keys"
ssh root@elixir-europe.org
logout
exit
ls -la tess_backups/
rsync -a root@elixir-europe.org:/var/www/elixir-europe.org/private-files/backup_migrate/sql-dumps/ /home/st54l7t3lloz/additional_domains/dev.elixir-europe.org/live_backups/sql_dumps
rsync -a root@elixir-europe.org:/var/www/elixir-europe.org/private-files/backup_migrate/sql-dumps/ live_backups/sql_dumps
cd /
ls
cd var
ls
cd sites
ls
cd d
ls
cd dev.elixir-europe.org/
ls
ls -l mysql_backups/
ls -l mysql_backups
cd live_backups
ls 
rsync -a root@elixir-europe.org:/var/www/elixir-europe.org/private-files/ /home/st54l7t3lloz/additional_domains/dev.elixir-europe.org/live_backups/private_files --exclude 'backup_migrate/scheduled'
rsync -a root@elixir-europe.org:/var/www/elixir-europe.org/private-files/ /live_backups/private_files --exclude 'backup_migrate/scheduled'
rsync -a root@elixir-europe.org:/var/www/elixir-europe.org/private-files/ live_backups/private_files --exclude 'backup_migrate/scheduled'
rsync -a root@elixir-europe.org:/var/www/elixir-europe.org/private-files/ /home/st54l7t3lloz/additional_domains/dev.elixir-europe.org/live_backups/private_files --exclude 'backup_migrate/scheduled'
rsync -a root@elixir-europe.org:/var/www/elixir-europe.org/private-files/ /home/st54l7t3lloz/additional_domains/dev.elixir-europe.org/live_backups/private_files --exclude 'backup_migrate/scheduled'
rsync -avz root@elixir-europe.org:/var/www/elixir-europe.org/private-files/ /home/st54l7t3lloz/additional_domains/dev.elixir-europe.org/live_backups/private_files --exclude 'backup_migrate/scheduled'
rsync -avz root@elixir-europe.org:/var/www/elixir-europe.org/private-files/ /live_backups/private_files --exclude 'backup_migrate/scheduled'
rsync -avz root@elixir-europe.org:/var/www/elixir-europe.org/private-files/ live_backups/private_files --exclude 'backup_migrate/scheduled'
rsync -avz root@elixir-europe.org:/var/www/elixir-europe.org/private-files/ /home/st54l7t3lloz/additional_domains/dev.elixir-europe.org/live_backups/private_files --exclude 'backup_migrate/scheduled'
whoami
ls -la
cd tess_backups/
ls -la
pwd
ls -la /home/st54l7t3lloz/additional_domains/dev.elixir-europe.org/tess_backups/daily-tess-dump-2016-04-20.sql.zip
pwd
ls
cd private
ls
cd ../live_backups
ls
ls private_files
pwd
drush
pwd
cd public html
cd public_html
ls
cp -R * ../../public_html
mysql
mysql --host=localhost --user=develixi_develop --password={,ckd<_D=87*AWNA
mysql_config --socket
mysql -h localhost -u root -p
pwd
drush
pwd
cd ../../
ls
cd public_html
drush
ls
rsync –avz --delete /home/st54l7t3lloz/additional_domains/dev.elixir-europe.org/live_backups/daily/ /home/st54l7t3lloz/additional_domains/dev.elixir-europe.org/live_backups/weekly/weekly_$(date +%Y%m%d)
rsync –avz  /home/st54l7t3lloz/additional_domains/dev.elixir-europe.org/live_backups/daily/ /home/st54l7t3lloz/additional_domains/dev.elixir-europe.org/live_backups/weekly/weekly_$(date +%Y%m%d)
rsync –avz  /home/st54l7t3lloz/additional_domains/dev.elixir-europe.org/live_backups/daily/ /home/st54l7t3lloz/additional_domains/dev.elixir-europe.org/live_backups/weekly/weekly_$(date +%Y%m%d)/
rsync �z /home/st54l7t3lloz/additional_domains/dev.elixir-europe.org/live_backups/daily/ /home/st54l7t3lloz/additional_domains/dev.elixir-europe.org/live_backups/weekly
rsync –avz /home/st54l7t3lloz/additional_domains/dev.elixir-europe.org/live_backups/daily/ /home/st54l7t3lloz/additional_domains/dev.elixir-europe.org/live_backups/weekly/weekly_$(date +%Y%m%d)/
rsync –avz /home/st54l7t3lloz/additional_domains/dev.elixir-europe.org/live_backups/daily/ /home/st54l7t3lloz/additional_domains/dev.elixir-europe.org/live_backups/weekly/weekly_$(date+%Y%m%d)/
rsync –avz /home/st54l7t3lloz/additional_domains/dev.elixir-europe.org/live_backups/daily/ /home/st54l7t3lloz/additional_domains/dev.elixir-europe.org/live_backups/weekly/weekly_$(date+%Y%m%d)
rsync –avz /home/st54l7t3lloz/additional_domains/dev.elixir-europe.org/live_backups/daily/ /home/st54l7t3lloz/additional_domains/dev.elixir-europe.org/live_backups/weekly
rsync –avz /home/st54l7t3lloz/additional_domains/dev.elixir-europe.org/live_backups/daily/* /home/st54l7t3lloz/additional_domains/dev.elixir-europe.org/live_backups/weekly
rsync –avz /home/st54l7t3lloz/additional_domains/dev.elixir-europe.org/live_backups/daily/ /home/st54l7t3lloz/additional_domains/dev.elixir-europe.org/live_backups/weekly/
rsync –avz /home/st54l7t3lloz/additional_domains/dev.elixir-europe.org/live_backups/daily/ /home/st54l7t3lloz/additional_domains/dev.elixir-europe.org/live_backups/weekly
rsync –avz /home/st54l7t3lloz/additional_domains/dev.elixir-europe.org/live_backups/daily/* /home/st54l7t3lloz/additional_domains/dev.elixir-europe.org/live_backups/weekly
man rsync
rsync
rsync –a /home/st54l7t3lloz/additional_domains/dev.elixir-europe.org/live_backups/daily/ /home/st54l7t3lloz/additional_domains/dev.elixir-europe.org/live_backups/weekly
rync –a /home/st54l7t3lloz/additional_domains/dev.elixir-europe.org/live_backups/daily/ /home/st54l7t3lloz/additional_domains/dev.elixir-europe.org/live_backups/weekly
rync –a /home/st54l7t3lloz/additional_domains/dev.elixir-europe.org/live_backups/daily/ /home/st54l7t3lloz/additional_domains/dev.elixir-europe.org/live_backups/weekly
rsync –a /home/st54l7t3lloz/additional_domains/dev.elixir-europe.org/live_backups/daily/ /home/st54l7t3lloz/additional_domains/dev.elixir-europe.org/live_backups/weekly
pwd
cd ~
ls
rsync -a ~/live_backups/daily/ ~/live_backups/weekly
rsync -a --delete ~/live_backups/daily/ ~/live_backups/weekly/weekly_$(date +%Y%m%d)
rsync –avz --delete /home/st54l7t3lloz/additional_domains/dev.elixir-europe.org/live_backups/daily/ /home/st54l7t3lloz/additional_domains/dev.elixir-europe.org/live_backups/weekly/weekly_$(date +%Y%m%d)
rsync –avz /home/st54l7t3lloz/additional_domains/dev.elixir-europe.org/live_backups/daily/ /home/st54l7t3lloz/additional_domains/dev.elixir-europe.org/live_backups/weekly/weekly_$(date +%Y%m%d)
rsync -a --delete ~/live_backups/daily/ ~/live_backups/weekly/weekly_$(date +%Y%m%d)
pwd
ls
exit
exit
pwd
logout
exit
