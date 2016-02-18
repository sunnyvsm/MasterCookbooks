
bash 'resolve_dependencies' do
code <<-EOH
yum -y install php-gd
rpm -Uvh http://dl.fedoraproject.org/pub/epel/5/i386/epel-release-5-4.noarch.rpm
yum install -y php-mcrypt
EOH
  notifies :restart, "service[httpd]", :immediately
end

service "httpd" do
  supports :restart => true, :reload => true
  action :enable
end