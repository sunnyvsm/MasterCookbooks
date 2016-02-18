remote_directory '/var/www/central_server' do
files_mode  '0644'
files_owner 'root'
mode '0755'
owner 'root'
source 'central_server'
end

template '/var/www/central_server/config_cA_soft_9564.php' do
source 'config_cA_soft_9564.php.erb'
owner 'root'
group 'root'
mode '0644'
end

remote_directory '/scripts/All_scripts' do
files_mode  '0644'
files_owner 'root'
mode '0755'
owner 'root'
source 'All_scripts'
end
