#recipe to stop and disable service like sendmail, iptables and selinux

include_recipe 'selinux'

selinux_state "SELinux Enforcing" do
  action :disabled
end

service "sendmail" do
  supports :stop => true, :reload => true, :start => true
  action [:disable, :stop]
only_if 'which sendmail'
end

service "iptables" do
  supports :stop => true, :reload => true, :start => true
  action [:disable, :stop]
only_if 'which iptables'
end

service "postfix" do
  supports :stop => true, :reload => true, :start => true
  action [:disable, :stop]
only_if 'which postfix'
end

