cookbook_file "/tmp/#{node['e3gblntwrk']['pmta_rpmfile']}" do
source node['e3gblntwrk']['pmta_rpmfile']
  owner 'root'
  group 'root'
  mode '0644'
  action :create
end
directory '/scripts' do
owner 'root'
group 'root'
mode '0755'
action :create 
end

cookbook_file "/scripts/vmta_config.sh" do
source 'scripts/vmta_config.sh'
  owner 'root'
  group 'root'
  mode '0644'
  action :create
end

bash 'pmta_installation' do
code <<-EOH
rpm -ivh "/tmp/#{node['e3gblntwrk']['pmta_rpmfile']}"
EOH
not_if { ::File.exists?("/etc/init.d/pmta") }
end

template '/etc/pmta/license' do
source 'license.erb'
owner 'root'
group 'root'
mode '0644'
not_if { ::File.exists?("/etc/pmta/license") }
end

template '/etc/pmta/config' do
source 'pmta_config.erb'
owner 'pmta'
group 'pmta'
mode '0640'
notifies :stop, "service[sendmail]", :immediately
notifies :restart, "service[pmta]", :immediately
notifies :restart, "service[pmtahttp]", :immediately
not_if { ::File.exists?("/etc/pmta/config") }
end

template '/etc/pmta/pmta_default' do
source 'pmta_default.erb'
owner 'pmta'
group 'pmta'
mode '0640'
notifies :stop, "service[sendmail]", :immediately
notifies :restart, "service[pmta]", :immediately
notifies :restart, "service[pmtahttp]", :immediately
not_if { ::File.exists?("/etc/pmta/pmta_default") }
end

service "pmta" do
  supports :restart => true, :reload => true, :start => true
  action :enable
end
service "pmtahttp" do
  supports :restart => true, :reload => true, :start => true
  action :enable
end


cron 'pmta_log_backup' do
  hour '23'
  minute '59'
  command '/scripts/All_scripts/pmta_logrotate.sh'
user 'root'
end
