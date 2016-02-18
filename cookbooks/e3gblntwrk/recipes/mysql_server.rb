cookbook_file '/tmp/email_markting_8545.sql' do
source 'email_markting_8545.sql'
owner 'root'
group 'root'
mode '0755'
end


cookbook_file '/scripts/mysql_config.sh' do
source '/scripts/mysql_config.sh'
owner 'root'
group 'root' 
mode '0644'
end

yum_package 'mysql-server' do
notifies :restart, "service[mysqld]", :immediately
end                 

bash 'mysql_server' do
code <<-EOH
sh /scripts/mysql_config.sh
EOH
notifies :restart, "service[mysqld]", :immediately
end

service "mysqld" do
  supports :restart => true, :reload => true
  action :enable
end