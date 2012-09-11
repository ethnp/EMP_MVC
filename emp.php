<?php

/****************************************************
 * 	            EMP Framework
 *
 * @Name emp.php
 *
 * @author Eitan
 *
 * @Version 1.0.0
 *
 * **************************************************/

/*
 **************************************************
 * APPLICATION ENVIRONMENT
 **************************************************
 *
 * You can load different configurations depending on your
 * current environment. Setting the environment also influences
 * things like logging and error reporting.
 *
 * This can be set to anything, but default usage is:
 *
 *     development
 *     testing
 *     production
 *
 * NOTE: If you change these, also change the error_reporting() code below
 *
 */
    define('ENV', 'dev');
    /*
    *---------------------------------------------------------------
    * ERROR REPORTING
    *---------------------------------------------------------------
    *
    * Different environments will require different levels of error reporting.
    * By default development will show errors but testing and live will hide them.
    */

    if (defined('ENV'))
    {
        switch (ENV)
        {
            case 'dev':
            case 'testing':
                error_reporting(E_ALL);
                break;
            case 'production':
                error_reporting(0);
                break;

            default:
                exit('The application environment is not set correctly.');
        }
    }

    define('CONTROLLER', 'Site');
    /*************************************************
     * 	FRAMEWORK FOLDER NAME
     **************************************************
     *
     * Set this constant to whatever you named your framework folder to
     */
    define('FRAMEWORK_NAME', 'emp');

    /*************************************************
     * 	APPLICATION FOLDER NAME
     **************************************************
     *
     * Set this constant to whatever you named your application folder to
     */
    define('APP_NAME', 'app');

    /*************************************************
     * 	CORE FOLDER NAME
     **************************************************
     *
     * Set this constant to whatever you named your core folder to
     */
    define('SYS_NAME',  'emp');

    /*************************************************
     * 	CONTROLLER FOLDER PATH
     **************************************************
     *
     * Set this constant to whatever you named your controller folder to
     */
    define('CONTROLLER_FOLDER', 'controller');

    /*************************************************
     * 	MODEL FOLDER NAME
     **************************************************
     *
     * Set this constant to whatever you named your model folder to
     */
    define('MODEL_FOLDER',  'model');

    /*************************************************
     * 	MODEL SWITCH ON/OFF
     **************************************************
     *
     * Set this to TRUE or FALSE depending if you want to autoload your models
     */
    define('LOAD_MODELS',  'TRUE');
    /**
     * Set Include Path
     */

    /*************************************************
     * 	END OF USER CONFIGURATION
     *
     * 	BEYOND THIS POINT DO NOT EDIT
     **************************************************/

    /*************************************************
     * 	SYSTEM PATH DIRECTORY_SEPARATORERATOR
     **************************************************/

    if ( PHP_OS == 'WINNT' && !strpos ( __FILE__, '/' ) ){
        define('SEP',"\\");
    }else{
        define('SEP', "/");
    }

    /*************************************************
     * 	MAIN SYSTEM CONSTANTS
     **************************************************/
    //Path to the document root
    $docuroot = explode ( DIRECTORY_SEPARATOR , __FILE__);
    array_pop($docuroot);
    array_pop($docuroot);

    define('DOCUMENT_ROOT', join(DIRECTORY_SEPARATOR,$docuroot));

    // The name of THIS file
    define('SELF', pathinfo(__FILE__, PATHINFO_BASENAME));

    // Path to the framework
    define('FRAMEWORK', str_replace(SELF, '', __FILE__));

    //Path to the sys folder
    define('SYS_PATH', FRAMEWORK.SYS_NAME.DIRECTORY_SEPARATOR);

    //Path to the app folder
    define('APP_PATH', FRAMEWORK.APP_NAME.DIRECTORY_SEPARATOR);
    
    //path to the model folder
    define('MODEL_PATH', FRAMEWORK.MODEL_FOLDER.DIRECTORY_SEPARATOR);
    // The PHP file extension
    // this global constant is deprecated.
    define('EXT', '.php');

    /*************************************************
     * 	BOOT UP THE FRAMEWORK
     **************************************************
     *
     * And away we go...
     *
     */
    return include(SYS_PATH."Boot.php");
