#pmta
default['e3gblntwrk']['pmta_version'] = '4.06'

if node['languages']['ruby']['host_cpu'] == "x86_64"
default['e3gblntwrk']['pmta_rpmfile'] = 'PowerMTA-4.0r6-201204021809.x86_64.rpm'
elsif node['languages']['ruby']['host_cpu'] == "i686"
default['e3gblntwrk']['pmta_rpmfile'] = 'PowerMTA-4.0r6-201204021809.i686.rpm'
end

default['e3gblntwrk']['pmta']['http-mgmt-port'] =  '8080'
default['e3gblntwrk']['pmta']['smtp-port'] =  '2525'
default['e3gblntwrk']['pmta']['smtp-listener'] = "127.0.0.1:#{node['e3gblntwrk']['pmta']['smtp-port']}"
default['e3gblntwrk']['pmta']['local_host'] = '127.0.0.1'
default['e3gblntwrk']['pmta']['run_as_root'] = 'yes'
default['e3gblntwrk']['pmta']['log_file'] = '/var/log/pmta/pmta.log'
default['e3gblntwrk']['pmta']['acct_file'] = '/var/log/pmta/acct.csv'

#serverinfo
default['e3gblntwrk']['inst_env'] = 'sending_server'
#default['e3gblntwrk']['inst_env'] = 'central_server'

#selinux
default['selinux']['state'] = 'disabled'

#database
default['e3gblntwrk']['databse_name'] = 'email_markting_8545'
default['e3gblntwrk']['mysql_user'] = 'root'
default['e3gblntwrk']['mysql_pass'] = 'root'
