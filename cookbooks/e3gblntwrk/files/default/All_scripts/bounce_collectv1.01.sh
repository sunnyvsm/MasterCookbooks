#!/bin/bash
#Program to get bounce data
#last updated on 01/12/2015: removed error code 521 from isp aol + added condition if log file is empty
#last updated on 19/02/2016: made script smaller , more faster addded one more check mark "Recipient address rejected"
#dte=2016-02-12
dte=$(date --date="1 day ago" +"%Y-%m-%d")
bounce_path="/var/log/pmta/bounce_data"
if [ ! -d $bounce_path/$dte ] ; then
mkdir -p ${bounce_path}/$dte
fi
bounce_datafile=$bounce_path/$dte/bounce_data:$dte
code=b
log_file="/var/log/pmta/acct-$dte-*.csv"
cat $log_file |  awk -F "," '$1 == "'"$code"'" {print $0}' > $bounce_datafile
#file_count=`ls $log_file | wc -l`
#isp=(aol.com gmail.com hotmail.co.uk googlemail.com hotmail.com live.com live.co.uk msn.com outlook.com rocketmail.com yahoo.com yahoo.co.uk ymail.com)

isp=`cat $bounce_datafile | awk -F "," '{print $5}' | awk -F "@" '{print $2}' | sort -u`
cn_isp=`cat $bounce_datafile | awk -F "," '{print $5}' | awk -F "@" '{print $2}' | sort -u | wc -l`
if [ $cn_isp -eq 0 ]; then
echo "NO ISP LOG FOUND IN LOG FILES" $log_file
echo "Program Exiting Now..."
sleep .50
exit
else
for i in $isp ; do
#cat $bounce_datafile | grep $i | grep "550\|554" | grep "Recipient address rejected" |  awk -F "," '{print $5}' | sort -u > $bounce_path/$dte/$i:$dte
res=`cat $bounce_datafile | grep $i  | grep "Recipient address rejected" |  awk -F "," '{print $5}' | sort -u`
if [ `echo $res | wc -l` -gt 1 ] && [ -z $res]; then
echo $res  > $bounce_path/$dte/$i:$dte
else
echo "No hard Bounce found in log for date:$dte"
fi
done
fi