#
# Cookbook Name:: jhipster
# Recipe:: default
#
# Copyright 2016, YOUR_COMPANY_NAME
#
# All rights reserved - Do Not Redistribute
#include_recipe "nodejs::npm"
#include_recipe 'jhipster::test1'
include_recipe 'java'
include_recipe 'git'
include_recipe 'jhipster::application_deployment'
#include_recipe 'jhipster::test1'

