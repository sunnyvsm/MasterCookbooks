#initialization
#create an user yeoman
npm_version = '3.7.1'

#installing prerequisites
include_recipe 'nodejs::npm'
include_recipe 'git'

#upgrading node
execute 'upgrade_npm' do
command '/usr/bin/npm install --global npm@latest'
#user 'yeoman'
end

#installing yeoman toolset
execute 'yeoman_toolset-Bower' do
command '/usr/bin/npm install --global bower'
not_if 'which bower'
end

execute 'yeoman_toolset-grunt' do
command '/usr/bin/npm install --global grunt-cli'
not_if 'which grunt'
end


execute 'yeoman_toolset-yo' do
command '/usr/bin/npm install --global yo'
not_if 'which yo'
end

#setting up permissions
execute 'permission_set' do
command 'chmod g+rwx /root /root/.config /root/.config/configstore'
not_if '/usr/bin/yo'
end

