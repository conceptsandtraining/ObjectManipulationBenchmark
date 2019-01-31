#!/bin/bash

runs=100
runs_max=1000000
ds=2

while [ $runs -lt $runs_max ]						 #start with $runs runs
do
	#eval "/usr/local/opt/php56/bin/php runner.php -m $1 -r $2 -n $runs >> $3" #do n runs as long n < $runs_max 5.6
	eval "php runner.php -m $1 -r $2 -n $runs" #do n runs as long n < $runs_max 7.1
	runs=`expr $runs \* $ds`			 # after doing a run increment by factor $ds
done

exit 0
