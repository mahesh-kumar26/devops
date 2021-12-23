#!/bin/bash
csvFile='TaskFile.csv'
# get arguments
for arg in "$@"
do
    prop=$(echo $arg | cut -f1 -d=)
    val=$(echo $arg | cut -f2 -d=)   

    case "$prop" in
            outDir)                 outDir=${val} ;;     
            workersNo)              workersNo=${val} ;;
            selectedColumn)         selectedColumn=${val} ;;
    esac    
done
selectedColumnId=$(head -n 1 $csvFile | tr -s ';' '\n' | nl -nln | grep -w "$selectedColumn" | cut -f1)
links=($(cut -d ';' -f $selectedColumnId $csvFile))
(mkdir -p "$outDir" && cd "$_" && echo "${links[@]:1:200}" | xargs -P "$workersNo" -n 1 curl --create-dirs -O)