template '/etc/pmta/config' do
source 'pmta_config.erb'
owner 'root'
group 'root'
mode '0640'
#notifies :stop, "service[sendmail]", :immediately
#notifies :restart, "service[pmta]", :immediately
#notifies :restart, "service[pmtahttp]", :immediately
not_if { ::File.exists?("/etc/pmta/config") }
end
