name             'jhipster'
maintainer       'YOUR_COMPANY_NAME'
maintainer_email 'YOUR_EMAIL'
license          'All rights reserved'
description      'Installs/Configures jhipster'
long_description IO.read(File.join(File.dirname(__FILE__), 'README.md'))
version          '0.1.0'
depends "nodejs", "> 2.4.3"
depends 'java'
#depends 'tomcat'
depends 'git'
