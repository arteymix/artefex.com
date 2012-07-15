<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-15 09:19:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: monsite.com/index.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-15 09:19:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: monsite.com/index.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/html/monsite.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-15 09:19:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: monsite.com ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-15 09:19:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: monsite.com ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/html/monsite.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-15 09:19:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: monsite.com ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-15 09:19:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: monsite.com ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/html/monsite.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-15 09:20:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: monsite.com/accueil ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-15 09:20:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: monsite.com/accueil ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/html/monsite.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-15 09:23:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: artefex.com ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-15 09:23:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: artefex.com ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/html/artefex.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-15 09:40:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-15 09:40:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/artefex.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/artefex.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/artefex.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-15 10:40:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-15 10:40:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/artefex.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/artefex.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/artefex.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-15 10:41:47 --- ERROR: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH/classes/kohana/request.php [ 812 ]
2012-07-15 10:41:47 --- STRACE: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH/classes/kohana/request.php [ 812 ]
--
#0 /var/www/html/artefex.com/system/classes/kohana/request.php(812): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 812, Array)
#1 /var/www/html/artefex.com/system/classes/kohana/request.php(198): Kohana_Request->__construct('', NULL)
#2 /var/www/html/artefex.com/index.php(108): Kohana_Request::factory()
#3 {main}
2012-07-15 10:44:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL projets was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-15 10:44:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL projets was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/artefex.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/artefex.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/artefex.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-15 10:45:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL projets was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-15 10:45:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL projets was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/artefex.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/artefex.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/artefex.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-15 10:50:50 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/views/layout/header.php [ 13 ]
2012-07-15 10:50:50 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/views/layout/header.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-15 10:51:22 --- ERROR: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH/views/layout/header.php [ 13 ]
2012-07-15 10:51:22 --- STRACE: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH/views/layout/header.php [ 13 ]
--
#0 /var/www/html/artefex.com/application/views/layout/header.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/a...', 13, Array)
#1 /var/www/html/artefex.com/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/artefex.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/artefex.com/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/artefex.com/application/views/layout/template.php(14): Kohana_View->__toString()
#5 /var/www/html/artefex.com/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/artefex.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/artefex.com/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /var/www/html/artefex.com/application/classes/controller/default.php(32): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Default->after()
#10 /var/www/html/artefex.com/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Projets))
#11 /var/www/html/artefex.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /var/www/html/artefex.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/html/artefex.com/index.php(109): Kohana_Request->execute()
#14 {main}
2012-07-15 11:01:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL df was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-15 11:01:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL df was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/artefex.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/artefex.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/artefex.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-15 11:02:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL kohana was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-15 11:02:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL kohana was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/artefex.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/artefex.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/artefex.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-15 11:11:40 --- ERROR: View_Exception [ 0 ]: The requested view wordpress/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-07-15 11:11:40 --- STRACE: View_Exception [ 0 ]: The requested view wordpress/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /var/www/html/artefex.com/system/classes/kohana/view.php(137): Kohana_View->set_filename('wordpress/index')
#1 /var/www/html/artefex.com/application/classes/controller/default.php(19): Kohana_View->__construct('wordpress/index')
#2 [internal function]: Controller_Default->before()
#3 /var/www/html/artefex.com/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Blog))
#4 /var/www/html/artefex.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/artefex.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/artefex.com/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-15 15:32:01 --- ERROR: ErrorException [ 1 ]: Call to undefined function _x() ~ DOCROOT/wordpress/wp-includes/taxonomy.php [ 414 ]
2012-07-15 15:32:01 --- STRACE: ErrorException [ 1 ]: Call to undefined function _x() ~ DOCROOT/wordpress/wp-includes/taxonomy.php [ 414 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-15 11:38:35 --- ERROR: ErrorException [ 8 ]: Undefined offset: 7 ~ APPPATH/views/blog.php [ 24 ]
2012-07-15 11:38:35 --- STRACE: ErrorException [ 8 ]: Undefined offset: 7 ~ APPPATH/views/blog.php [ 24 ]
--
#0 /var/www/html/artefex.com/application/views/blog.php(24): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 24, Array)
#1 /var/www/html/artefex.com/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/artefex.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/artefex.com/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/artefex.com/application/views/layout/template.php(18): Kohana_View->__toString()
#5 /var/www/html/artefex.com/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/artefex.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/artefex.com/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /var/www/html/artefex.com/application/classes/controller/default.php(34): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Default->after()
#10 /var/www/html/artefex.com/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Blog))
#11 /var/www/html/artefex.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /var/www/html/artefex.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/html/artefex.com/index.php(109): Kohana_Request->execute()
#14 {main}
2012-07-15 11:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/wp-content/themes/twentyeleven/images/headers/lanterns.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-15 11:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/wp-content/themes/twentyeleven/images/headers/lanterns.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/html/artefex.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-15 11:41:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/wp-content/themes/twentyeleven/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-15 11:41:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/wp-content/themes/twentyeleven/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/html/artefex.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-15 11:41:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/wp-content/themes/twentyeleven/images/headers/hanoi.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-15 11:41:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/wp-content/themes/twentyeleven/images/headers/hanoi.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/html/artefex.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-15 11:41:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/wp-content/themes/twentyeleven/images/headers/hanoi.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-15 11:41:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/wp-content/themes/twentyeleven/images/headers/hanoi.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/html/artefex.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-15 11:41:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/wp-content/themes/twentyeleven/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-15 11:41:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/wp-content/themes/twentyeleven/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/html/artefex.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-15 11:41:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/wp-content/themes/twentyeleven/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-15 11:41:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/wp-content/themes/twentyeleven/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/html/artefex.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-15 11:41:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/wp-content/themes/twentyeleven/images/headers/hanoi.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-15 11:41:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/wp-content/themes/twentyeleven/images/headers/hanoi.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/html/artefex.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-15 11:41:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/wp-content/themes/twentyeleven/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-15 11:41:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/wp-content/themes/twentyeleven/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/html/artefex.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-15 11:41:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/wp-content/themes/twentyeleven/images/headers/chessboard.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-15 11:41:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/wp-content/themes/twentyeleven/images/headers/chessboard.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/html/artefex.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-15 11:42:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-15 11:42:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/html/artefex.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-15 11:42:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL blog/wp-admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-15 11:42:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL blog/wp-admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/html/artefex.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/artefex.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/artefex.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-15 11:45:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/artefex.com/wordpress/wp-content/themes/artefex/css/bootstrap-responsive.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-15 11:45:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/artefex.com/wordpress/wp-content/themes/artefex/js/plugins.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-15 11:45:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/artefex.com/wordpress/wp-content/themes/artefex/css/bootstrap-responsive.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/html/artefex.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-15 11:45:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/artefex.com/wordpress/wp-content/themes/artefex/js/plugins.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/html/artefex.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-15 11:45:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/artefex.com/wordpress/wp-content/themes/artefex/css/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-15 11:45:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/artefex.com/wordpress/wp-content/themes/artefex/css/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/html/artefex.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-15 11:45:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/artefex.com/wordpress/wp-content/themes/artefex/css/app.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-15 11:45:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/artefex.com/wordpress/wp-content/themes/artefex/css/app.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/html/artefex.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-15 11:45:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/artefex.com/wordpress/wp-content/themes/artefex/js/main.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-15 11:45:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/artefex.com/wordpress/wp-content/themes/artefex/js/main.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/html/artefex.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-15 11:45:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/artefex.com/wordpress/wp-content/themes/artefex/css/bootstrap-responsive.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-15 11:45:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/artefex.com/wordpress/wp-content/themes/artefex/css/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-15 11:45:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/artefex.com/wordpress/wp-content/themes/artefex/css/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/html/artefex.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-15 11:45:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/artefex.com/wordpress/wp-content/themes/artefex/css/bootstrap-responsive.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/html/artefex.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-15 11:45:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/artefex.com/wordpress/wp-content/themes/artefex/css/app.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-15 11:45:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/artefex.com/wordpress/wp-content/themes/artefex/css/app.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/html/artefex.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-15 11:45:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/artefex.com/wordpress/wp-content/themes/artefex/js/plugins.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-15 11:45:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/artefex.com/wordpress/wp-content/themes/artefex/js/plugins.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/html/artefex.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-15 11:45:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/artefex.com/wordpress/wp-content/themes/artefex/js/main.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-15 11:45:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/artefex.com/wordpress/wp-content/themes/artefex/js/main.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/html/artefex.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-15 11:52:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blog/asset/css/960.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-15 11:52:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blog/asset/css/960.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/html/artefex.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-15 11:52:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blog/asset/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-15 11:52:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blog/asset/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/html/artefex.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-15 11:52:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blog/asset/css/reset.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-15 11:52:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blog/asset/css/reset.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/html/artefex.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-15 11:53:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blog/asset/css/reset.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-15 11:53:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blog/asset/css/reset.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/html/artefex.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-15 11:53:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blog/asset/css/960.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-15 11:53:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blog/asset/css/960.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/html/artefex.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-15 11:53:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blog/asset/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-15 11:53:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blog/asset/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/html/artefex.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-15 11:55:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blog/asset/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-15 11:55:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blog/asset/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/html/artefex.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-15 11:55:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blog/asset/css/reset.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-15 11:55:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blog/asset/css/reset.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/html/artefex.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-15 11:55:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blog/asset/css/960.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-15 11:55:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blog/asset/css/960.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/html/artefex.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-15 11:55:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blog/asset/css/960.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-15 11:55:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blog/asset/css/960.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/html/artefex.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-15 11:55:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blog/asset/css/reset.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-15 11:55:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blog/asset/css/reset.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/html/artefex.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-15 11:55:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blog/asset/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-15 11:55:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blog/asset/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/html/artefex.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-15 11:57:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blog/asset/css/reset.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-15 11:57:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blog/asset/css/reset.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/html/artefex.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-15 11:57:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blog/asset/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-15 11:57:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blog/asset/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/html/artefex.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-15 11:57:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blog/asset/css/960.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-15 11:57:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blog/asset/css/960.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/html/artefex.com/index.php(109): Kohana_Request->execute()
#1 {main}