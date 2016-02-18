directory '/warfiles' do
owner 'root'
group 'root'
mode 777
action :create
not_if 'find /warfiles'
end

bash 'cloning' do
cwd '/tmp'
code <<-EOH
rm -rf /warfiles/webapp1.war
git clone https://github.com/Arpitkohale/sampleapp.git
mv /tmp/sampleapp/webapp1-1.0-SNAPSHOT.war /warfiles/webapp1.war
EOH
end



#bash 'download war file' do
#code <<-EOH
##wget -O /warfiles/webapp1.war http://52.36.145.217/webapp1-1.0-SNAPSHOT.war
#EOH
#end

remote_file "#{Chef::Config['file_cache_path']}/apache-tomcat-8.0.32.zip" do
source 'http://a.mbbsindia.com/tomcat/tomcat-8/v8.0.32/bin/apache-tomcat-8.0.32.zip'
owner 'root'
group 'root'
end

bash 'insatlling tomcat8' do
cwd '/opt'
code <<-EOH
unzip #{Chef::Config['file_cache_path']}/apache-tomcat-8.0.32.zip
EOH
not_if 'find /opt/apache-tomcat-8.0.32'
end


template '/opt/apache-tomcat-8.0.32/conf/tomcat-users.xml' do
source 'tomcat-users.xml.erb'
user 'root'
group 'root'
mode '0644'
end


#template '/opt/apache-tomcat-8.0.32/conf/server.xml' do
#source 'server.xml.erb'
#user 'root'
#group 'root'
#mode '0644'
#end
	
bash 'start tomcat' do
cwd '/opt/apache-tomcat-8.0.32'
code <<-EOH
chmod -R  +x /opt/apache-tomcat-8.0.32/bin/*
/opt/apache-tomcat-8.0.32/bin/startup.sh
EOH
end

execute 'StopOldWar' do
       command 'wget --http-user=admin --http-password=password "http://52.27.137.243/manager/text/stop?path=/webapp1" -O -'
        action :run
		only_if 'curl http://52.27.137.243/webapp1'
		   end
execute 'UnDeployOldWar' do
       command 'wget --http-user=admin --http-password=password http://52.27.137.243/manager/text/undeploy?path=/webapp1 -O -'
       action :run
	   only_if 'curl http://52.27.137.243/webapp1 | grep Error'
	   	   end
execute 'DeployNewWar' do
       command 'wget --http-user=admin --http-password=password "http://52.27.137.243/manager/text/deploy?war=file:/warfiles/webapp1.war&path=/webapp1" -O -'
	 not_if 'find /tmp/apache-tomcat-8.0.32/webapps/webapp1'
       action :run
end

