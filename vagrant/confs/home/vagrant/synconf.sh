#!/bin/bash

cd /confs
sudo rm -rf . 
sudo mkdir -p home/vagrant
sudo mkdir -p etc

#Files to Sync
sudo cp -rvp /etc/mysql etc/
sudo cp -rvp /etc/nginx etc/
sudo cp -rvp /etc/hosts etc/
sudo cp -rvp /etc/php5 etc/
sudo cp -rvp /etc/varnish etc/
sudo cp -rvp /etc/memcached.conf etc/
sudo cp -rvp /home/vagrant/.bashrc home/vagrant/
sudo cp -rvp /home/vagrant/.vimrc home/vagrant/
sudo cp -rvp /home/vagrant/.vim home/vagrant/
sudo cp -rvp /home/vagrant/bkp-db.sh /confs/home/vagrant/
sudo cp -rvp /home/vagrant/synconf.sh /confs/home/vagrant/
sudo cp -rvp /home/vagrant/.ssh /confs/home/vagrant/
