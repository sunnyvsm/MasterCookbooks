#
# Cookbook Name:: e3gblntwrk
# Recipe:: default
#
# Copyright 2015, YOUR_COMPANY_NAME
#
# All rights reserved - Do Not Redistribute
include_recipe 'e3gblntwrk::initial_setup'
include_recipe 'e3gblntwrk::httpd_config'
include_recipe 'e3gblntwrk::php'
#include_recipe 'e3gblntwrk::dependencies_resolve'
include_recipe 'e3gblntwrk::pmta_installation'
include_recipe 'e3gblntwrk::mysql_server'
include_recipe 'e3gblntwrk::sending_portal'
include_recipe 'e3gblntwrk::central_server'
