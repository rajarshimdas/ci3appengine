#!/bin/sh


# Global
sudo chown -R rd:rd ..
sudo find .. \( -type d -exec chmod 755 {} \; \) -o \( -type f -exec chmod 644 {} \; \)

# setup script
chmod +x setup.sh
chmod +x ci3/bin/*.sh

# Writable folder
foldername=w3files

sudo chown -R rd:www-data $foldername
sudo find $foldername \( -type d -exec chmod 770 {} \; \) -o \( -type f -exec chmod 660 {} \; \)


