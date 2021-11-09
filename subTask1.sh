#!/bin/bash
INPUT=$1
OUTPUT=$2
WORKERS=$3

download(){
IFS=';'
while read first url rest
do 
[ "$url" != "link" ] && wget $url -P $2


done < $1
} 

download $INPUT $OUTPUT | parallel -j $WORKERS


##### sh subTask1.sh file.csv out 4
