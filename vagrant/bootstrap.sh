#!/bin/bash
sudo -s
export DEBIAN_FRONTEND=noninteractive

apt-get update

apt-get install -y -q php5-cli php5-fpm php5-common php-pear nginx vim-nox php5-xdebug php5-mysql php5-gd php5-dev php5-xdebug git-core mysql-server php-apc php5-memcache php5-memcached memcached drush htop nfs-kernel-server nfs-common portmap php5-curl ssmtp

pecl install xhprof-beta

#Sync Confs
cp -rvp /confs/etc/* /etc/
sudo cp -rvp /confs/home/vagrant/* /home/vagrant/
sudo cp -rvp /confs/home/vagrant/.ssh /home/vagrant/

#Restart Services to Reload Conf
/etc/init.d/nginx restart
/etc/init.d/php5-fpm restart
/etc/init.d/mysql restart

#Set Database Password
mysqladmin -u root password dev

echo "Now I'm compleeeete!!!!"
