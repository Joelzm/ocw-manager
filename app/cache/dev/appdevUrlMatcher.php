<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $pathinfo = urldecode($pathinfo);

        // _welcome
        if ($pathinfo === '/bienvenida') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        // _demo_login
        if ($pathinfo === '/demo/secured/login') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
        }

        // _security_check
        if ($pathinfo === '/demo/secured/login_check') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
        }

        // _demo_logout
        if ($pathinfo === '/demo/secured/logout') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
        }

        // acme_demo_secured_hello
        if ($pathinfo === '/demo/secured/hello') {
            return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
        }

        // _demo_secured_hello
        if (0 === strpos($pathinfo, '/demo/secured/hello') && preg_match('#^/demo/secured/hello/(?P<name>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',)), array('_route' => '_demo_secured_hello'));
        }

        // _demo_secured_hello_admin
        if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',)), array('_route' => '_demo_secured_hello_admin'));
        }

        if (0 === strpos($pathinfo, '/demo')) {
            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]+?)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',)), array('_route' => '_demo_hello'));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        // _wdt
        if (preg_match('#^/_wdt/(?P<token>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+?)\\.txt$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)/search/results$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

        }

        if (0 === strpos($pathinfo, '/_configurator')) {
            // _configurator_home
            if (rtrim($pathinfo, '/') === '/_configurator') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_configurator_home');
                }
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
            }

            // _configurator_step
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+?)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        // home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'home');
            }
            return array (  '_controller' => 'OCWm\\OCWBundle\\Controller\\OCWController::indexAction',  '_route' => 'home',);
        }

        // buscar
        if ($pathinfo === '/app/buscar') {
            return array (  '_controller' => 'OCWm\\OCWBundle\\Controller\\OCWController::buscarAction',  '_route' => 'buscar',);
        }

        // admin_role
        if (rtrim($pathinfo, '/') === '/app/role') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'admin_role');
            }
            return array (  '_controller' => 'OCWm\\OCWBundle\\Controller\\RoleController::indexAction',  '_route' => 'admin_role',);
        }

        // admin_role_show
        if (0 === strpos($pathinfo, '/app/role') && preg_match('#^/app/role/(?P<id>[^/]+?)/show$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'OCWm\\OCWBundle\\Controller\\RoleController::showAction',)), array('_route' => 'admin_role_show'));
        }

        // admin_role_new
        if ($pathinfo === '/app/role/new') {
            return array (  '_controller' => 'OCWm\\OCWBundle\\Controller\\RoleController::newAction',  '_route' => 'admin_role_new',);
        }

        // admin_role_create
        if ($pathinfo === '/app/role/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_admin_role_create;
            }
            return array (  '_controller' => 'OCWm\\OCWBundle\\Controller\\RoleController::createAction',  '_route' => 'admin_role_create',);
        }
        not_admin_role_create:

        // admin_role_edit
        if (0 === strpos($pathinfo, '/app/role') && preg_match('#^/app/role/(?P<id>[^/]+?)/edit$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'OCWm\\OCWBundle\\Controller\\RoleController::editAction',)), array('_route' => 'admin_role_edit'));
        }

        // admin_role_update
        if (0 === strpos($pathinfo, '/app/role') && preg_match('#^/app/role/(?P<id>[^/]+?)/update$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_admin_role_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'OCWm\\OCWBundle\\Controller\\RoleController::updateAction',)), array('_route' => 'admin_role_update'));
        }
        not_admin_role_update:

        // admin_role_delete
        if (0 === strpos($pathinfo, '/app/role') && preg_match('#^/app/role/(?P<id>[^/]+?)/delete$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_admin_role_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'OCWm\\OCWBundle\\Controller\\RoleController::deleteAction',)), array('_route' => 'admin_role_delete'));
        }
        not_admin_role_delete:

        // login
        if ($pathinfo === '/app/login') {
            return array (  '_controller' => 'OCWm\\OCWBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
        }

        // login_check
        if ($pathinfo === '/app/login_check') {
            return array (  '_controller' => 'OCWm\\OCWBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login_check',);
        }

        // app
        if (rtrim($pathinfo, '/') === '/app') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'app');
            }
            return array (  '_controller' => 'OCWm\\OCWBundle\\Controller\\SecurityController::appAction',  '_route' => 'app',);
        }

        // logout
        if ($pathinfo === '/app/logout') {
            return array (  '_controller' => 'OCWm\\OCWBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'logout',);
        }

        // admin_user
        if (rtrim($pathinfo, '/') === '/app/user') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'admin_user');
            }
            return array (  '_controller' => 'OCWm\\OCWBundle\\Controller\\UserController::indexAction',  '_route' => 'admin_user',);
        }

        // admin_user_show
        if (0 === strpos($pathinfo, '/app/user') && preg_match('#^/app/user/(?P<id>[^/]+?)/show$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'OCWm\\OCWBundle\\Controller\\UserController::showAction',)), array('_route' => 'admin_user_show'));
        }

        // admin_user_new
        if ($pathinfo === '/app/user/new') {
            return array (  '_controller' => 'OCWm\\OCWBundle\\Controller\\UserController::newAction',  '_route' => 'admin_user_new',);
        }

        // admin_user_create
        if ($pathinfo === '/app/user/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_admin_user_create;
            }
            return array (  '_controller' => 'OCWm\\OCWBundle\\Controller\\UserController::createAction',  '_route' => 'admin_user_create',);
        }
        not_admin_user_create:

        // admin_user_edit
        if (0 === strpos($pathinfo, '/app/user') && preg_match('#^/app/user/(?P<id>[^/]+?)/edit$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'OCWm\\OCWBundle\\Controller\\UserController::editAction',)), array('_route' => 'admin_user_edit'));
        }

        // admin_user_update
        if (0 === strpos($pathinfo, '/app/user') && preg_match('#^/app/user/(?P<id>[^/]+?)/update$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_admin_user_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'OCWm\\OCWBundle\\Controller\\UserController::updateAction',)), array('_route' => 'admin_user_update'));
        }
        not_admin_user_update:

        // admin_user_delete
        if (0 === strpos($pathinfo, '/app/user') && preg_match('#^/app/user/(?P<id>[^/]+?)/delete$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_admin_user_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'OCWm\\OCWBundle\\Controller\\UserController::deleteAction',)), array('_route' => 'admin_user_delete'));
        }
        not_admin_user_delete:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
