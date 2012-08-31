<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appdevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       '_welcome' => true,
       '_demo_login' => true,
       '_security_check' => true,
       '_demo_logout' => true,
       'acme_demo_secured_hello' => true,
       '_demo_secured_hello' => true,
       '_demo_secured_hello_admin' => true,
       '_demo' => true,
       '_demo_hello' => true,
       '_demo_contact' => true,
       '_wdt' => true,
       '_profiler_search' => true,
       '_profiler_purge' => true,
       '_profiler_import' => true,
       '_profiler_export' => true,
       '_profiler_search_results' => true,
       '_profiler' => true,
       '_configurator_home' => true,
       '_configurator_step' => true,
       '_configurator_final' => true,
       'home' => true,
       'buscar' => true,
       'admin_role' => true,
       'admin_role_show' => true,
       'admin_role_new' => true,
       'admin_role_create' => true,
       'admin_role_edit' => true,
       'admin_role_update' => true,
       'admin_role_delete' => true,
       'login' => true,
       'login_check' => true,
       'app' => true,
       'logout' => true,
       'admin_user' => true,
       'admin_user_show' => true,
       'admin_user_new' => true,
       'admin_user_create' => true,
       'admin_user_edit' => true,
       'admin_user_update' => true,
       'admin_user_delete' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function get_welcomeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/bienvenida',  ),));
    }

    private function get_demo_loginRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/login',  ),));
    }

    private function get_security_checkRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/login_check',  ),));
    }

    private function get_demo_logoutRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/logout',  ),));
    }

    private function getacme_demo_secured_helloRouteInfo()
    {
        return array(array (), array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/hello',  ),));
    }

    private function get_demo_secured_helloRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/secured/hello',  ),));
    }

    private function get_demo_secured_hello_adminRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/secured/hello/admin',  ),));
    }

    private function get_demoRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/',  ),));
    }

    private function get_demo_helloRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/hello',  ),));
    }

    private function get_demo_contactRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/contact',  ),));
    }

    private function get_wdtRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_wdt',  ),));
    }

    private function get_profiler_searchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/search',  ),));
    }

    private function get_profiler_purgeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/purge',  ),));
    }

    private function get_profiler_importRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/import',  ),));
    }

    private function get_profiler_exportRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '.txt',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/\\.]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler/export',  ),));
    }

    private function get_profiler_search_resultsRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/search/results',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_profilerRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_configurator_homeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/',  ),));
    }

    private function get_configurator_stepRouteInfo()
    {
        return array(array (  0 => 'index',), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'index',  ),  1 =>   array (    0 => 'text',    1 => '/_configurator/step',  ),));
    }

    private function get_configurator_finalRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/final',  ),));
    }

    private function gethomeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'OCWm\\OCWBundle\\Controller\\OCWController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/',  ),));
    }

    private function getbuscarRouteInfo()
    {
        return array(array (), array (  '_controller' => 'OCWm\\OCWBundle\\Controller\\OCWController::buscarAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/app/buscar',  ),));
    }

    private function getadmin_roleRouteInfo()
    {
        return array(array (), array (  '_controller' => 'OCWm\\OCWBundle\\Controller\\RoleController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/app/role/',  ),));
    }

    private function getadmin_role_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'OCWm\\OCWBundle\\Controller\\RoleController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/app/role',  ),));
    }

    private function getadmin_role_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'OCWm\\OCWBundle\\Controller\\RoleController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/app/role/new',  ),));
    }

    private function getadmin_role_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'OCWm\\OCWBundle\\Controller\\RoleController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/app/role/create',  ),));
    }

    private function getadmin_role_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'OCWm\\OCWBundle\\Controller\\RoleController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/app/role',  ),));
    }

    private function getadmin_role_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'OCWm\\OCWBundle\\Controller\\RoleController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/app/role',  ),));
    }

    private function getadmin_role_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'OCWm\\OCWBundle\\Controller\\RoleController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/app/role',  ),));
    }

    private function getloginRouteInfo()
    {
        return array(array (), array (  '_controller' => 'OCWm\\OCWBundle\\Controller\\SecurityController::loginAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/app/login',  ),));
    }

    private function getlogin_checkRouteInfo()
    {
        return array(array (), array (  '_controller' => 'OCWm\\OCWBundle\\Controller\\SecurityController::loginAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/app/login_check',  ),));
    }

    private function getappRouteInfo()
    {
        return array(array (), array (  '_controller' => 'OCWm\\OCWBundle\\Controller\\SecurityController::appAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/app/',  ),));
    }

    private function getlogoutRouteInfo()
    {
        return array(array (), array (  '_controller' => 'OCWm\\OCWBundle\\Controller\\SecurityController::logoutAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/app/logout',  ),));
    }

    private function getadmin_userRouteInfo()
    {
        return array(array (), array (  '_controller' => 'OCWm\\OCWBundle\\Controller\\UserController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/app/user/',  ),));
    }

    private function getadmin_user_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'OCWm\\OCWBundle\\Controller\\UserController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/app/user',  ),));
    }

    private function getadmin_user_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'OCWm\\OCWBundle\\Controller\\UserController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/app/user/new',  ),));
    }

    private function getadmin_user_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'OCWm\\OCWBundle\\Controller\\UserController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/app/user/create',  ),));
    }

    private function getadmin_user_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'OCWm\\OCWBundle\\Controller\\UserController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/app/user',  ),));
    }

    private function getadmin_user_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'OCWm\\OCWBundle\\Controller\\UserController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/app/user',  ),));
    }

    private function getadmin_user_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'OCWm\\OCWBundle\\Controller\\UserController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/app/user',  ),));
    }
}
