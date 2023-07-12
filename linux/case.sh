#!/bin/zsh

case ${(L)1} in

herbert | frank )
	echo "Hello boss"
	;;
help)
	echo 'username pls'
	;;
*)
	echo 'no user'
	;;
esac
