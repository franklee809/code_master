###single awk with echo
echo "Just get this word: Hello" | awk '{print $3}'


### use awk in a csv file with comma separator
awk -F, '{print $1}' 1.csv


### use awk in a normal txt file with space separator
awk '{print $1}' test.txt
