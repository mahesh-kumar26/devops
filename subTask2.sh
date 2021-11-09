

#!/bin/bash


input_file=$1
train_ratio=$2


train_lines_count=$(expr $(wc -l < $input_file)*$train_ratio | bc)

train_lines_count=${train_lines_count%.*}

HDR=$(head -1 ${input_file})
test_lines_count=$((train_lines_count+1))

head -n $train_lines_count ${input_file} > train.csv
echo 'train Done'
tail -n +$test_lines_count ${input_file} > test.csv
echo 'test Done'


##### sh subTask2.sh file.csv 0.9
