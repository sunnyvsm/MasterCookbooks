['e3gblntwrk']['pmta_rpmfile'] = 'xerdfg'
cookbook_file "/tmp/#{node['e3gblntwrk']['pmta_rpmfile']}" do
source node['e3gblntwrk']['pmta_rpmfile']
  owner 'root'
  group 'root'
  mode '0644'
  action :create
end

