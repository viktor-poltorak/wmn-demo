#!/bin/bash
#####################################
#	Automate do something :)        #
#                                   #
#	@autor Viktor Poltorak          #
#	@version 0.1                    #
#####################################

#Create folders
mkdir cache
mkdir session
mkdir templates_c

if [ -f ../.gitignore ];
then
    echo "Add ignore for git";
	echo "" >> ../.gitignore; #add new line
	echo "/tmp/cache/" >> ../.gitignore;
  	echo "/tmp/session/" >> ../.gitignore;
	echo "/tmp/templates/" >> ../.gitignore;
fi

chmod -R 777 ../tmp
rm ../log/*
chmod -R 777 ../log
