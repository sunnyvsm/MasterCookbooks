name             'e3gblntwrk'
maintainer       'YOUR_COMPANY_NAME'
maintainer_email 'YOUR_EMAIL'
license          'All rights reserved'
description      'Installs/Configures e3gblntwrk'
long_description IO.read(File.join(File.dirname(__FILE__), 'README.md'))
version          '0.1.0'
depends 'apache2' , '>= 3.0.0'
depends 'php', '>= 1.7.2'
depends 'mysql' , '>=4.1.2'
depends 'selinux' , '>=0.9.0'
depends "mysql", '>=4.1.2'
depends "cron", ">=1.7.0"
