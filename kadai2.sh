#!/bin/bash


hour=$(date +"%H")


if [ $hour -lt 12 ]; then

    ls -la > ls_output.txt
else
    
    date +"%Y%m%d%H%M"
fi
