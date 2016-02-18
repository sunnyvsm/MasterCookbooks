#
# Cookbook Name:: cookbook-webapp1
# Recipe:: default
#
# Copyright 2016, YOUR_COMPANY_NAME
#
# All rights reserved - Do Not Redistribute
#
execute 'StopOldWar' do
        command 'wget –http-user=admin –http-password=password "http://52.25.49.235/manager/text/stop?path=/webapp1" -O -'
        action :run
   end

   execute 'UnDeployOldWar' do
       command 'wget –http-user=admin –http-password=password "http://52.25.49.235/manager/text/undeploy?path=/webapp1" -O -'
       action :run
   end

   execute 'DeployNewWar' do
       command 'wget –http-user=admin –http-password=password "http://52.25.49.235/manager/text/deploy?war=file:/warfiles/webapp1.war&path=/webapp1" -O -'
       action :run
 end
