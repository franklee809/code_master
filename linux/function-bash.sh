#!/bin/zsh

showname(){
	echo Hello $1

	if [ ${(L)1} = frank ]; then
		return 0
	else
		return 1
	fi
}

showname $1

if [ $? = 1 ]; then
			echo "Someone unknown called the fucntion"
fi
