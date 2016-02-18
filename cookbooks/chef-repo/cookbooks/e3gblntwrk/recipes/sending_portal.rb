remote_directory '/var/www/sending_portal' do
files_mode  '0644'
files_owner 'root'
mode '0755'
owner 'root'
source 'sending_portal'
end

template '/var/www/sending_portal/config_cA_soft_9564.php' do
source 'config_cA_soft_9564.php.erb'
owner 'root'
group 'root'
mode '0644'
  notifies :restart, "service[httpd]", :immediately
end

service "httpd" do
  supports :restart => true, :reload => true
  action :enable
end

remote_directory '/scripts/All_scripts' do
files_mode  '0644'
files_owner 'root'
mode '0755'
owner 'root'
source 'All_scripts'
end