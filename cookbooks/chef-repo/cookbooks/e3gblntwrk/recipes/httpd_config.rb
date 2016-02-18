package 'httpd'

remote_directory '/var' do
files_mode  '0644'
files_owner 'root'
mode '0755'
owner 'root'
source 'www'
end

cookbook_file '/etc/httpd/conf/httpd.conf' do
source 'httpd.conf'
  owner 'root'
  group 'root'
  mode '0644'
  action :create
  notifies :restart, "service[httpd]", :immediately
end

service "httpd" do
  supports :restart => true, :reload => true
  action :enable
end