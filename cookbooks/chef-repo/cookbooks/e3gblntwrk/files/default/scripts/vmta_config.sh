#!/bin/bash
#script to create vmtas
#need an file over the server with domain and ip binding <ip|domain>
file=$1
if [ $# -ne 1 ] ; then
echo "File not suppiled"
exit
fi
ips=`netstat -tn | awk '{if ( NR > 2 )print $4}'   | awk -F ":" '{print $1}'`
echo $ips | while read line ; do 
dom=`cat $file | grep $line |awk -F "|" '{print $2}'`
echo "smtp-source-ip $line" >> /etc/pmta/vmta
echo "<virtual-mta vmta_$line> " >> /etc/pmta/vmta
smtp-source-host $line $dom >> /etc/pmta/vmta
echo "</virtual-mta> " >> /etc/pmta/vmta
done