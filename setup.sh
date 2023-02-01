#!/bin/sh

me=$(whoami)
mygroup=$(id -gn)

# Appfolder User and Group settings
sudo chown -R ${me}:${mygroup} ..
sudo find .. \( -type d -exec chmod 755 {} \; \) -o \( -type f -exec chmod 644 {} \; \)

# Add execution flag for bash scripts
chmod +x setup.sh
chmod +x ci3/bin/*.sh

# Writable folder
foldername=w3files

sudo chown -R ${me}:www-data $foldername
sudo find $foldername \( -type d -exec chmod 770 {} \; \) -o \( -type f -exec chmod 660 {} \; \)
