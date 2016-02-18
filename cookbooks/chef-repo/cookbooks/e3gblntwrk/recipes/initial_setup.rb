#recipe to stop and disable service like sendmail, iptables and selinux

include_recipe 'selinux'

service "sendmail" do
  supports :stop => true, :reload => true, :start => true
  action [:disable, :stop]
end

service "iptables" do
  supports :stop => true, :reload => true, :start => true
  action [:disable, :stop]
end

