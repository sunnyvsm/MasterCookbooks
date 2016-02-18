#See http://docs.chef.io/config_rb_knife.html for more information on knife configuration options

current_dir = File.dirname(__FILE__)
log_level                :info
log_location             STDOUT
node_name                "aarpitkohale"
client_key               "#{current_dir}/aarpitkohale.pem"
validation_client_name   "chef_arpit-validator"
validation_key           "#{current_dir}/chef_arpit-validator.pem"
chef_server_url          "https://api.chef.io/organizations/chef_arpit"
cookbook_path            ["#{current_dir}/../cookbooks"]
