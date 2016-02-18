
bash 'resolve_dependencies' do
code <<-EOH
yum update -y
iyum install php -y
yum install php-mcrypt -y
yum install php-mysql -y
yum install php-gd -y
yum -y install php-gd -y
rpm -Uvh http://dl.fedoraproject.org/pub/epel/5/i386/epel-release-5-4.noarch.rpm
EOH
  notifies :restart, "service[httpd]", :immediately
end

service "httpd" do
  supports :restart => true, :reload => true
  action :enable
end
