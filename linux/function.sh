#!/bin/zsh

up="before"
since="function"

echo $up
echo $since

showuptime(){
	up=$(uptime | cut -c4-)
	since=$(uptime)
	cat << EOF
------
This machine has been up for ${up}
It has been running since ${since}
------
EOF
}
showuptime

echo $up
echo $since
