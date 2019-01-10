<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/api')) {
                // web_service_homepage
                if (rtrim($pathinfo, '/') === '/api') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'web_service_homepage');
                    }

                    return array (  '_controller' => 'WebServiceBundle\\Controller\\DefaultController::indexAction',  '_route' => 'web_service_homepage',);
                }

                if (0 === strpos($pathinfo, '/api/getdep')) {
                    // web_service_getdep
                    if (rtrim($pathinfo, '/') === '/api/getdep') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'web_service_getdep');
                        }

                        return array (  '_controller' => 'WebServiceBundle\\Controller\\DefaultController::getdepApiAction',  '_route' => 'web_service_getdep',);
                    }

                    // web_service_getdep_user
                    if (preg_match('#^/api/getdep/(?P<user>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'web_service_getdep_user')), array (  '_controller' => 'WebServiceBundle\\Controller\\DefaultController::getdepUserApiAction',));
                    }

                    // web_service_getdep_user_date
                    if (preg_match('#^/api/getdep/(?P<user>[^/]++)/(?P<year>[^/]++)/(?P<month>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'web_service_getdep_user_date')), array (  '_controller' => 'WebServiceBundle\\Controller\\DefaultController::getdepUserDateApiAction',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/admindep')) {
                // back_office_homepage
                if (rtrim($pathinfo, '/') === '/admindep') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'back_office_homepage');
                    }

                    return array (  '_controller' => 'BackOfficeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'back_office_homepage',);
                }

                if (0 === strpos($pathinfo, '/admindep/user')) {
                    // back_office_user_create
                    if (rtrim($pathinfo, '/') === '/admindep/user/add') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'back_office_user_create');
                        }

                        return array (  '_controller' => 'BackOfficeBundle\\Controller\\UserController::AddAction',  '_route' => 'back_office_user_create',);
                    }

                    // back_office_user_read
                    if (0 === strpos($pathinfo, '/admindep/user/read') && preg_match('#^/admindep/user/read/(?P<user>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'back_office_user_read')), array (  '_controller' => 'BackOfficeBundle\\Controller\\UserController::ReadAction',));
                    }

                    // back_office_user_update
                    if (0 === strpos($pathinfo, '/admindep/user/edit') && preg_match('#^/admindep/user/edit/(?P<user>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'back_office_user_update')), array (  '_controller' => 'BackOfficeBundle\\Controller\\UserController::EditAction',));
                    }

                    // back_office_user_delete
                    if (0 === strpos($pathinfo, '/admindep/user/delete') && preg_match('#^/admindep/user/delete/(?P<user>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'back_office_user_delete')), array (  '_controller' => 'BackOfficeBundle\\Controller\\UserController::DeleteAction',));
                    }

                    // back_office_user_list
                    if (rtrim($pathinfo, '/') === '/admindep/user/list') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'back_office_user_list');
                        }

                        return array (  '_controller' => 'BackOfficeBundle\\Controller\\UserController::ListAction',  '_route' => 'back_office_user_list',);
                    }

                }

                if (0 === strpos($pathinfo, '/admindep/s')) {
                    if (0 === strpos($pathinfo, '/admindep/service')) {
                        // back_office_service_create
                        if (rtrim($pathinfo, '/') === '/admindep/service/add') {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'back_office_service_create');
                            }

                            return array (  '_controller' => 'BackOfficeBundle\\Controller\\ServiceController::AddAction',  '_route' => 'back_office_service_create',);
                        }

                        // back_office_service_read
                        if (0 === strpos($pathinfo, '/admindep/service/read') && preg_match('#^/admindep/service/read/(?P<service>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'back_office_service_read')), array (  '_controller' => 'BackOfficeBundle\\Controller\\ServiceController::ReadAction',));
                        }

                        // back_office_service_list
                        if (rtrim($pathinfo, '/') === '/admindep/service/list') {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'back_office_service_list');
                            }

                            return array (  '_controller' => 'BackOfficeBundle\\Controller\\ServiceController::ListAction',  '_route' => 'back_office_service_list',);
                        }

                        // back_office_service_update
                        if (0 === strpos($pathinfo, '/admindep/service/edit') && preg_match('#^/admindep/service/edit/(?P<service>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'back_office_service_update')), array (  '_controller' => 'BackOfficeBundle\\Controller\\ServiceController::EditAction',));
                        }

                        // back_office_service_delete
                        if (0 === strpos($pathinfo, '/admindep/service/delete') && preg_match('#^/admindep/service/delete/(?P<service>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'back_office_service_delete')), array (  '_controller' => 'BackOfficeBundle\\Controller\\ServiceController::DeleteAction',));
                        }

                    }

                    if (0 === strpos($pathinfo, '/admindep/societe')) {
                        // back_office_societe_create
                        if (rtrim($pathinfo, '/') === '/admindep/societe/add') {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'back_office_societe_create');
                            }

                            return array (  '_controller' => 'BackOfficeBundle\\Controller\\SocieteController::AddAction',  '_route' => 'back_office_societe_create',);
                        }

                        // back_office_societe_read
                        if (0 === strpos($pathinfo, '/admindep/societe/read') && preg_match('#^/admindep/societe/read/(?P<societe>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'back_office_societe_read')), array (  '_controller' => 'BackOfficeBundle\\Controller\\SocieteController::ReadAction',));
                        }

                        // back_office_societe_list
                        if (rtrim($pathinfo, '/') === '/admindep/societe/list') {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'back_office_societe_list');
                            }

                            return array (  '_controller' => 'BackOfficeBundle\\Controller\\SocieteController::ListAction',  '_route' => 'back_office_societe_list',);
                        }

                        // back_office_societe_update
                        if (0 === strpos($pathinfo, '/admindep/societe/edit') && preg_match('#^/admindep/societe/edit/(?P<societe>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'back_office_societe_update')), array (  '_controller' => 'BackOfficeBundle\\Controller\\SocieteController::EditAction',));
                        }

                        // back_office_societe_delete
                        if (0 === strpos($pathinfo, '/admindep/societe/delete') && preg_match('#^/admindep/societe/delete/(?P<societe>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'back_office_societe_delete')), array (  '_controller' => 'BackOfficeBundle\\Controller\\SocieteController::DeleteAction',));
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admindep/deplacement')) {
                    // back_office_deplacement_read
                    if (preg_match('#^/admindep/deplacement/(?P<id>[^/]++)/read/(?P<deplacement>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'back_office_deplacement_read')), array (  '_controller' => 'BackOfficeBundle\\Controller\\DeplacementController::ReadAction',));
                    }

                    // back_office_deplacement_list
                    if (preg_match('#^/admindep/deplacement/(?P<id>[^/]++)/list/?$#s', $pathinfo, $matches)) {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'back_office_deplacement_list');
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'back_office_deplacement_list')), array (  '_controller' => 'BackOfficeBundle\\Controller\\DeplacementController::ListAction',));
                    }

                    // back_office_deplacement_update
                    if (preg_match('#^/admindep/deplacement/(?P<id>[^/]++)/edit/(?P<deplacement>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'back_office_deplacement_update')), array (  '_controller' => 'BackOfficeBundle\\Controller\\DeplacementController::EditAction',));
                    }

                }

            }

        }

        // front_office_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'front_office_homepage');
            }

            return array (  '_controller' => 'FrontOfficeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'front_office_homepage',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
