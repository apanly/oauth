<?php
$config['regex_function']='ereg';
$config['regex_label']='@';
$config['404'] = 'Error_HTTP404';
$config['mappings']['Resource_CompressedResources'] = array (
    '^/res/[^\/]+/(b|s)/(.*)\.(css|js)$',
    '^/res/(b|s)/(.*)\.(css|js)$'
);
$config['mappings']['Home_Default'] = array(
    '^/$'
);
$config['mappings']['Home_Login'] = array(
    '^/login$'
);
$config['mappings']['Home_LogOut'] = array(
    '^/logout$'
);
$config['mappings']['Home_Reg'] = array(
    '^/reg$'
);
$config['mappings']['Home_DoReg'] = array(
    '^/doreg$'
);
$config['mappings']['Home_Forgot']=array(
   '^/forgot$'
);
$config['mappings']['Auth_Image']=array(
  '^/auth/image'
);






