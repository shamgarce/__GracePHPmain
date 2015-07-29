<?php

/**
 * 基础函数
 */

include 'Common.php';

/**
 * 总控类
 */
class GracePHP {

    /**
     * 模块
     * @var
     */
    private $m;
    /**
     * 控制器
     * @var string
     */
    private $c;
    /**
     * Action
     * @var string
     */
    private $a;
    /**
     * 单例
     * @var SinglePHP
     */
    private static $_instance;
    private static $_conf;

    /**
     * 构造函数，初始化配置
     * @param array $conf
     */
    private function __construct($conf){
        St::__ini();
        C($conf);
        $conf['CONF_FILE'] = isset($conf['CONF_FILE'])?$conf['CONF_FILE']:'Conf.php';
        $conf = G($conf['APP_PATH'].$conf['CONF_FILE']);
        if(isset($conf['APP_PATH'])) unset($conf['APP_PATH']);
//        $conf['modules']['super'] = 'hmvc_s';               //内置 debug
        $conf = array_merge(self::loadAppDefaultConfig(),$conf);
        C($conf);
    }

    private function __clone(){}

    /**
     * 获取单例
     * @param array $conf
     * @return SinglePHP
     */
    public static function getInstance($conf){
        if(!(self::$_instance instanceof self)){
            self::$_instance = new self($conf);
        }
        return self::$_instance;
    }

    /**
     * 运行应用实例
     * @access public
     * @return void
     */
    public function run(){
        if(C('USE_SESSION') == true){
            session_start();
        }
        $router = new router();
        $conf['router'] = $router();        //这个是路由
        C($conf);                           //路由进配置
        $this->loadAppConfig();             //覆盖hmvc配置
        C('APP_FULL_PATH', truepath(getcwd().'/'.C('APP_PATH')).'/');
        C('BASE_FULL_PATH', truepath(getcwd().'/'.C('APP_BASE')).'/');
        //除controllers外，都需要检测根下有没有相对应的组件
        //======================================================================
        $router = C('router');
        $controllerfile2 = C('APP_FULL_PATH').C('controller_folder').'BaseController'.C('controller_file_subfix');
        includeIfExist($controllerfile2);
        $controllerfile = C('APP_FULL_PATH').C('controller_folder').$router['Controller'].C('controller_file_subfix');
        includeIfExist($controllerfile);



        if(!class_exists($router['Controller'])){
            halt('控制器'.$router['Controller'].'不存在');
        }
        $controllerClass = $router['Controller'];
        $controller = new $controllerClass();
        $method = 'do'.ucfirst($router['Action']);
        if(!method_exists($controller, $method)){
            halt('方法'.$method.'不存在');
        }
        spl_autoload_register(array('GracePHP', 'autoload'));              //psr-0
        $router['params'] = isset($router['params'])?$router['params']:[];

        $params = $router['params_'];

//        $params = $router['params'];
//        if(count($router['params']) ==1 ){
//            $nr = current(array_values($router['params']));
//            if(empty($nr)){
//                $params = current(array_keys($router['params']));
//            }
//        }

        call_user_func(array($controller,$method),$params);
    }


    /**
     * 路由已经准备好了
     * 根据路由获取hmvc的配置信息
     */
    public function loadAppConfig()
    {
        $router = C('router');
        $modules = C('modules');

        if($router['Module']){
            C('APP_PATH',C('APP_PATH').'Modules/'.$modules[$router['Module']].'/');
            $conf = G(C('APP_PATH').C('CONF_FILE'));
            /**
             * 去除掉屏蔽的设置
             */
            if(isset($conf['APP_PATH']))    unset($conf['APP_PATH']);
            if(isset($conf['modules']))     unset($conf['modules']);
            if(isset($conf['router']))      unset($conf['router']);
            C($conf);
        }
        /**
         * 补全route信息
         */
        $router = C('router');
        if(empty($router['Controller']))$router['Controller'] = C('default_controller');
        if(empty($router['Action']))$router['Action'] = C('default_controller_method');
        C('router',$router);
        return true;
    }

    /**
     * 默认配置
     * @return array
     */
    public static function loadAppDefaultConfig(){
        return [
            'APP_BASE'          => C('APP_PATH'),
            'WDS'               => DIRECTORY_SEPARATOR,
            'CONF_FILE'         => 'Conf.php',
            'default_timezone'  => 'PRC',
            'charset'           => 'utf-8',
            'CONF_FILE'         => 'Conf.php',

            'error_page_404'    => C('APP_PATH').'error/error_404.php',
            'error_page_500'    => C('APP_PATH').'error/error_500.php',
            'error_page_msg'     => C('APP_PATH').'error/error_msg.php',
            'error_page_db'     => C('APP_PATH').'error/error_db.php',

            'message_page_view' => C('APP_PATH').'error/error_view.php',


            //相对路径
            'controller_folder' => 'Controller/',
            'model_folder'      => 'Models/',
            'view_folder'       => 'Views/',
            'library_folder'    => 'Lib/',
//            'helper_folder'     => 'helper/',
            //相对路径

            'default_controller'        => 'home',
            'default_controller_method' => 'index',
            'controller_method_prefix'  => 'do',

            //扩展名
            'controller_file_subfix'    => '.php',
            'model_file_subfix'         => '.php',
            'view_file_subfix'          => '.php',
            'library_file_subfix'       => '.php',
            'helper_file_subfix'        => '.php',

            'debug' => true,
        ];
    }



    /**
     * 自动加载函数
     * @param string $class 类名
     */
    public static function autoload($class){
        if(substr($class,-6)=='Widget'){
            includeIfExist(C('APP_FULL_PATH').'/Widget/'.$class.'.class.php');
        }else{
            //首先检查在应用目录中是否存在该类，存在加载，不存在，则到根下寻找
            includeIfExist(C('APP_FULL_PATH').'/Lib/'.$class.'.class.php');
            if(!class_exists($class)){
                includeIfExist(C('BASE_FULL_PATH').'/Lib/'.$class.'.class.php');
            }
            if(!class_exists($class)){
                includeIfExist(C('APP_FULL_PATH').'/Models/'.$class.'.model.php');
            }
            if(!class_exists($class)){
                includeIfExist(C('BASE_FULL_PATH').'/Models/'.$class.'.model.php');
            }
        }
    }
}

/**
 * 控制器类
 */
class Controller {
    /**
     * 视图实例
     * @var View
     */
    private $_view;
    public $router;
    public $env;
    public $data = [];
    public $accessRules = [];
    public $ispost = false;         //是否post提交

    /**
     * 构造函数，初始化视图实例，调用hook
     */
    public function __construct(){
//

        $this->router = C('router');
        isset( $this->router['params']) &&  $this->params = $this->router['params'];
//
//        //
        $this->env['bt'] = $_SERVER['REQUEST_TIME_FLOAT'];
        $this->env['ip'] = '';
        $this->env['mem'] = memory_get_usage();
//
        includeIfExist(C('BASE_FULL_PATH').'Seter/I.php');
//        // 依赖注入
        $this->singleton('S', function ($c) {
            return \Seter\Seter::getInstance();
        });
//
//        /**
//         * 无依赖或者只抵赖底层的 route属于最底层，可以在conf中进行变量的配置
//         */
        $this->singleton('db', function ($c) {
            return $this->S->db;
        });
        $this->singleton('table', function ($c) {
            return $this->S->table;
        });
        $this->singleton('model', function ($c) {
            return $this->S->model;
        });
        $this->singleton('request', function ($c) {
            return $this->S->request;
        });
        $this->singleton('user', function ($c) {
            return $this->S->user;
        });
        $this->singleton('rbac', function ($c) {
            return $this->S->rbac;
        });

//
//
////        $this->singleton('error', function ($c) {
////            return $this->S->error;
////        });
////        $this->singleton('cache', function ($c) {
////            return $this->S->cache;
////        });
////        $this->singleton('input', function ($c) {
////            return $this->S->input;
////        });
//
////        $this->singleton('helper', function ($c) {
////            return new Test();
////        });
////        $this->singleton('input', function ($c) {
////            return new Test();
////        });
//
//
////        /**
////         * 依赖db组件
////         */
////
////        $this->singleton('debug', function ($c) {
////            return new Test();
////        });
////
//
//
//
        $this->_view = new View();
        $this->_init();
    }

//开始依赖注入
    /**
     * Ensure a value or object will remain globally unique
     * @param  string  $key   The value or object name
     * @param  Closure        The closure that defines the object
     * @return mixed
     */
    public function singleton($key, $value)
    {

        $this->set($key, function ($c) use ($value) {
            static $object;
            if (null === $object) {
                $object = $value($c);
            }
            return $object;
        });
    }

    /**
     * Set data key to value
     * @param string $key   The data key
     * @param mixed  $value The data value
     */
    public function set($key, $value)
    {
        $this->data[$this->normalizeKey($key)] = $value;
    }

    public function get($key, $default = null)
    {
        if ($this->has($key)) {
            $isInvokable = is_object($this->data[$this->normalizeKey($key)]) && method_exists($this->data[$this->normalizeKey($key)], '__invoke');
            return $isInvokable ? $this->data[$this->normalizeKey($key)]($this) : $this->data[$this->normalizeKey($key)];
        }
        return $default;
    }

    public function __get($key)
    {
        return $this->get($key);
    }

    protected function normalizeKey($key)
    {
        return $key;
    }
    public function has($key)
    {
        return array_key_exists($this->normalizeKey($key), $this->data);
    }
//结束依赖注入

    /**
     * 前置hook
     */
    protected function _init(){
        header("Content-Type:text/html; charset=utf-8");
        //access rules
        //+--------------------------------------------------
        //D($this->getaccessRules());
        $this->rbac->run($this->getaccessRules());
        //+--------------------------------------------------
        if($this->request->post) $this->ispost = true;
    }

    /**
     * @return array
     * rbac
     */
    protected function getaccessRules()
    {
        $this->accessRules['Module']    = $this->router['Module'];
        $this->accessRules['Controller']= $this->router['Controller'];
        $this->accessRules['Action']    = $this->router['Action'];
        //$this->accessRules['Isguest']   = 1;
        $this->accessRules['rules']     = RULES();
        $this->accessRules['behaviors'] =  $this->behaviors();
        return $this->accessRules;
    }

    protected function behaviors()
    {
//  '*'     //所有
//  '@'     //登陆用户
//  'A'     //管理员
//  'G'     //游客
//  '?'     //查询数据库
        return [
            'access' => [
                'only' => ['login_test', 'logout_test', 'signup_test'],
                'rules' => [
                    [
                        'actions' => ['login_test'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    [
                        'actions' => ['login_test'],
                        'deny' => true,
                        'roles' => ['A'],
                    ],
                ],
            ],
        ];
    }

        /**
     * 渲染模板并输出
     * @param null|string $tpl 模板文件路径
     * 参数为相对于App/View/文件的相对路径，不包含后缀名，例如index/index
     * 如果参数为空，则默认使用$controller/$action.php
     * 如果参数不包含"/"，则默认使用$controller/$tpl
     * @return void
     */
    protected function display($tpl='',$data = []){
        if($tpl === ''){
            $router = C('router');
            $tpl = $router['Action'];
        }

        $data['router'] = $this->router;
        $data['env']    = $this->env;
        $data['env']['ET']    = T();
        $data['user']    = $this->user->getuserinfo();


        $this->_view->display($tpl,$data);
    }

    protected function fetch($tpl='',$data = []){
        if($tpl === ''){
            $router = C('router');
            $tpl = $router['Action'];
        }

        $data['router'] = $this->router;
        $data['env']    = $this->env;
        $data['env']['ET']    = T();
        $data['user']    = $this->user->getuserinfo();

        return $this->_view->fetch($tpl,$data);
    }

    /**
     * 为视图引擎设置一个模板变量
     * @param string $name 要在模板中使用的变量名
     * @param mixed $value 模板中该变量名对应的值
     * @return void
     */
//    protected function assign($name,$value){
//        $this->_view->assign($name,$value);
//    }
    /**
     * 将数据用json格式输出至浏览器，并停止执行代码
     * @param array $data 要输出的数据
     */
    protected function ajaxReturn($data){
        echo json_encode($data);
        exit;
    }
    /**
     * 重定向至指定url
     * @param string $url 要跳转的url
     * @param void
     */
    protected function redirect($url){
        header("Location: $url");
        exit;
    }
}

/**
 * 视图类
 */
class View {
    /**
     * 视图文件目录
     * @var string
     */
    private $_tplDir;
    /**
     * 视图文件路径
     * @var string
     */
    private $_viewPath;
    /**
     * 视图变量列表
     * @var array
     */
    private $_data = array();
    /**
     * 给tplInclude用的变量列表
     * @var array
     */
    private static $tmpData;

    /**
     * @param string $tplDir
     */
    public function __construct($tplDir=''){
        if($tplDir == ''){
            $this->_tplDir = './'.C('APP_PATH').'View';
        }else{
            $this->_tplDir = $tplDir;
        }
        $this->assign('GET',\Seter\Seter::getInstance()->request->get);
        $this->assign('POST',\Seter\Seter::getInstance()->request->post);
        $this->assign('COOKIE',\Seter\Seter::getInstance()->request->cookie);
    }
    /**
     * 为视图引擎设置一个模板变量
     * @param string $key 要在模板中使用的变量名
     * @param mixed $value 模板中该变量名对应的值
     * @return void
     */
    public function assign($key, $value) {
        $this->_data[$key] = $value;
    }

    public function fetch($tplFile,$data)
    {
        //$this->_data = $data;
        foreach($data as $key=>$value){
            $this->_data[$key] = $value;
        }

        ob_start(); //开启缓冲区

        $router = C('router');
        $this->_viewPath = $this->_tplDir .'/'.$router['Controller'].'/'. $tplFile . '.php';
        unset($tplFile);
        extract($this->_data);
        include $this->_viewPath;

        $html = ob_get_contents();
        ob_end_clean();

        return $html;
    }

    /**
     * 渲染模板并输出
     * @param null|string $tplFile 模板文件路径，相对于App/View/文件的相对路径，不包含后缀名，例如index/index
     * @return void
     */
    public function display($tplFile,$data) {

        //$this->_data = $data;
        foreach($data as $key=>$value){
            $this->_data[$key] = $value;
        }


        $router = C('router');
        $this->_viewPath = $this->_tplDir .'/'.$router['Controller'].'/'. $tplFile . '.php';
        unset($tplFile);
        extract($this->_data);

        include $this->_viewPath;
    }
    /**
     * 用于在模板文件中包含其他模板
     * @param string $path 相对于View目录的路径
     * @param array $data 传递给子模板的变量列表，key为变量名，value为变量值
     * @return void
     */
    public static function tplInclude($path, $data=array()){
        self::$tmpData = array(
            'path' => C('APP_FULL_PATH') . 'View/' . $path . '.php',
            'data' => $data,
        );
        unset($path);
        unset($data);
        extract(self::$tmpData['data']);
        include self::$tmpData['path'];
    }
}

/**
 * Widget类
 * 使用时需继承此类，重写invoke方法，并在invoke方法中调用display
 */
class Widget {
    /**
     * 视图实例
     * @var View
     */
    protected $_view;
    /**
     * Widget名
     * @var string
     */
    protected $_widgetName;

    /**
     * 构造函数，初始化视图实例
     */
    public function __construct(){
        $this->_widgetName = get_class($this);
        $dir = C('APP_FULL_PATH') . '/Widget/Tpl/';
        $this->_view = new View($dir);
    }

    /**
     * 处理逻辑
     * @param mixed $data 参数
     */
    public function invoke($data){}

    /**
     * 渲染模板
     * @param string $tpl 模板路径，如果为空则用类名作为模板名
     */
    protected function display($tpl='',$data = []){
        if($tpl == ''){
            $tpl = $this->_widgetName;
        }
        $tpl = '../'.$tpl;
        $this->_view->display($tpl,$data);
    }

    /**
     * 为视图引擎设置一个模板变量
     * @param string $name 要在模板中使用的变量名
     * @param mixed $value 模板中该变量名对应的值
     * @return void
     */
    protected function assign($name,$value){
        $this->_view->assign($name,$value);
    }
}

/**
 * 日志类
 * 使用方法：Log::fatal('error msg');
 * 保存路径为 App/Log，按天存放
 * fatal和warning会记录在.log.wf文件中
 */
class Log{
    /**
     * 打日志，支持SAE环境
     * @param string $msg 日志内容
     * @param string $level 日志等级
     * @param bool $wf 是否为错误日志
     */
    public static function write($msg, $level='DEBUG', $wf=false){
//        if(function_exists('sae_debug')){ //如果是SAE，则使用sae_debug函数打日志
//            $msg = "[{$level}]".$msg;
//            sae_set_display_errors(false);
//            sae_debug(trim($msg));
//            sae_set_display_errors(true);
//        }else{
            $msg = date('[ Y-m-d H:i:s ]')."[{$level}]".$msg."\r\n";
            $logPath = C('APP_FULL_PATH').'/Log/'.date('Ymd').'.log';
            if($wf){
                $logPath .= '.wf';
            }
            file_put_contents($logPath, $msg, FILE_APPEND);
//        }
    }

    /**
     * 打印fatal日志
     * @param string $msg 日志信息
     */
    public static function fatal($msg){
        self::write($msg, 'FATAL', true);
    }

    /**
     * 打印warning日志
     * @param string $msg 日志信息
     */
    public static function warn($msg){
        self::write($msg, 'WARN', true);
    }

    /**
     * 打印notice日志
     * @param string $msg 日志信息
     */
    public static function notice($msg){
        self::write($msg, 'NOTICE');
    }

    /**
     * 打印debug日志
     * @param string $msg 日志信息
     */
    public static function debug($msg){
        self::write($msg, 'DEBUG');
    }

    /**
     * 打印sql日志
     * @param string $msg 日志信息
     */
    public static function sql($msg){
        self::write($msg, 'SQL');
    }
}

/**
 * ExtException类，记录额外的异常信息
 */
class ExtException extends Exception{
    /**
     * @var array
     */
    protected $extra;

    /**
     * @param string $message
     * @param array $extra
     * @param int $code
     * @param null $previous
     */
    public function __construct($message = "", $extra = array(), $code = 0, $previous = null){
        $this->extra = $extra;
        parent::__construct($message, $code, $previous);
    }

    /**
     * 获取额外的异常信息
     * @return array
     */
    public function getExtra(){
        return $this->extra;
    }
}

class Model
{
    public $get     = array();
    public $post    = array();
    public $cookie  = array();

    public $res     = array();

    public $S     = null;

    //codelist
    public $coderes  = array();

    //用于jsonout
    public $json     = array();

    public function __construct(){
        $this->S = \Seter\Seter::getInstance();
        $this->coderes = $this->DefaultCoderes();
        $this->jsoncode(0);          //初始状态
        $this->_init();
    }

//    //hook
    public function _init()
    {
        $this->get      = $this->S->request->get;
        $this->post     = $this->S->request->post;
        $this->cookie   = $this->S->request->cookie;
    }


    //待重写
    public function DefaultCoderes()
    {
        return [
            '0'=>'ini'
        ];
    }

    public function jsoncode($code = 0)
    {
        $this->json = [
            'code'  => $code,
            'msg'   => $this->coderes[$code]
        ];
        return true;
    }

    //结果输出修饰
    //返回操作结果    或者      给结果赋值
    public function res($data = '')
    {
        if(!empty($data))  $this->json['data'] = $data;
        return $this->json['data'];
    }

    //返回操作结果的json数据 包含 code msg data
    //msg = $codelib[code]
    public function AjaxReturn()
    {
        echo json_encode($this->json);
        exit;
    }

    //返回json数组
    public function json()
    {
        return $this->json;
    }

    //返回操作bool
    public function bool()
    {
        return intval($this->json['code']>0)?true:false;
        exit;
    }

}
class Router
{
    public $router      = [];
    public $moduleslist = [];
    //返回route值
    public function __invoke(){
        $this->moduleslist = array_keys(C('modules'));              //模块列表索引
        $this->routerini()->routerpath()->routermcapathmix();
      // print_r($this->router);
//exit;
        return $this->router;
    }

    /**
     * 参数部分mix
     */
    public function routermcapathmix()
    {
        //mix 获得m c a params
        /**
        [Module] =>
        [Controller] =>
        [Action] =>
         */
        if(!in_array($this->router['_params']['__mm'],$this->moduleslist)) $this->router['_params']['__mm'] = '';
        if(!in_array($this->router['_params']['m'],$this->moduleslist))    $this->router['_params']['m'] = '';

        if(!$this->is_zm($this->router['_params']['c']))    $this->router['_params']['c'] = '';
        if(!$this->is_zm($this->router['_params']['__c']))  $this->router['_params']['__c'] = '';
        if(!$this->is_zm($this->router['_params']['__cc'])) $this->router['_params']['__cc'] = '';

        $this->router['Module']     = $this->router['_params']['m']?:$this->router['_params']['__mm'];
        $this->router['Controller'] = $this->router['_params']['c']?:$this->router['_params']['__c']?:$this->router['_params']['__cc'];
        $this->router['Action']     = $this->router['_params']['a']?:$this->router['_params']['__a']?:$this->router['_params']['__aa'];
        $this->router['Controller'] = $this->router['Controller']?:'';
        $this->router['Action']     = $this->router['Action']?:'';

        //mix参数
        unset($this->router['_params']['m']);
        unset($this->router['_params']['__mm']);
        unset($this->router['_params']['__cc']);
        unset($this->router['_params']['__aa']);
        unset($this->router['_params']['__c']);
        unset($this->router['_params']['__a']);
        unset($this->router['_params']['c']);
        unset($this->router['_params']['a']);

//        $this->router['params'] = array_merge($this->router['_params'], $this->router['_paramspath']);
        foreach($this->router['_params'] as $key=>$value){
            $this->router['params'][$key] = $value;
        }


        $params_ = '';
            if (count($this->router['_paramspath']) == 1) {
                $nr = current(array_values($this->router['_paramspath']));
                if (empty($nr)) {
                    $params_ = current(array_keys($this->router['_paramspath']));
                }
            }
        $this->router['params_'] = $params_;

        foreach($this->router['_paramspath'] as $key=>$value){
            $this->router['params'][$key] = $value;
        }
        unset($this->router['_params']);
        unset($this->router['_paramspath']);
        return $this;
    }


    public function routerpath()
    {
        //获取参数中的module
        //获取_pathmca] => [_paramsmca
        //标记path的中间变量
        $p = isset($this->router['_path'])?explode('/', $this->router['_path']):[];
        $m = current($p);
        if(in_array($m,$this->moduleslist)){      //模块
            array_shift($p);
            $this->router['_params']['__mm']     = $m;
            //$this->router['_pathm']['m']= $m;
        }
        $this->router['_params']['__cc'] = array_shift($p)?:'';
        $this->router['_params']['__aa'] = array_shift($p)?:'';

        $_params = [];
        $count = ceil(count($p) / 2);
        for($i=0;$i<$count;$i++){
            $ii = $i*2;
            $_params[$p[$ii]] = isset($p[$ii+1])?$p[$ii+1]:'';
        }
        $this->router['_paramspath'] = $_params;            //这个是path后面的参数

        return $this;
    }

    //原始解析获取到的数据
    public function routerini()
    {
        $query = $this->pathinfo_query();
        $query = strtolower($query);
        //这里包含两部分 path 和params
        $p = explode('&', $query);
        $router =  [
            'Module'        => '',
            'Controller'    => '',
            'Action'        => '',
            //'ActionPrefix'  => C('Default_Action_Prefix'),
        ];
        $params['m'] = $params['__mm'] = $params['__cc'] = $params['__aa'] = $params['__c'] = $params['__a'] = $params['a'] = $params['c'] = '';
        if(!isset(explode('=',  current($p))[1])){
            $router['_path'] = trim(array_shift($p),'/');
        }
        foreach($p as $value){
            $v = explode('=',$value);
            $params[strtolower($v[0])] = isset($v[1])?$v[1]:'';
        }
        //解码修正 mix 和 mca 修正
        if(isset($params['m'])){
            $ar = explode('.',$params['m']);
            //判断第一个是c还是m 值有两种形式 c.a 或者 m.c.a
            if(count($ar)==2){
                $params['m'] = '';
                $params['__c'] = array_shift($ar);
                $params['__a'] = array_shift($ar);
            }
            if(count($ar)==3){
                $params['m'] = array_shift($ar);
                $params['__c'] = array_shift($ar);
                $params['__a'] = array_shift($ar);
            }
        }
        $router['_params'] = $params;
        $this->router = $router;
        return $this;
    }

    //是否首字母开头
    public static function is_zm($str ='')
    {
        $str = substr( $str, 0, 1 );
        if (preg_match('/^[a-zA-Z]+$/',$str))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    /**
     * @return string
     * 获取地址栏uri信息
     */
    public static function pathinfo_query( )
    {
        $pathinfo = @parse_url($_SERVER['REQUEST_URI']);
        if (empty($pathinfo)) {
            die('request parse error:' . $_SERVER['REQUEST_URI']);
        }
        //pathinfo模式下有?,那么$pathinfo['query']也是非空的，这个时候查询字符串是PATH_INFO和query
        $query_str = empty($pathinfo['query']) ? '' : $pathinfo['query'];
        $path_info = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : (isset($_SERVER['REDIRECT_URL']) ? $_SERVER['REDIRECT_URL'] : '');
//    $path_info = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : (isset($_SERVER['REDIRECT_PATH_INFO']) ? $_SERVER['REDIRECT_PATH_INFO'] : '');
        $pathinfo_query = empty($path_info) ? $query_str : $path_info . '&' . $query_str;
        if ($pathinfo_query) {
            $pathinfo_query = trim($pathinfo_query, '/&');
        }
        //urldecode 解码所有的参数名，解决get表单会编码参数名称的问题
        $pq = $_pq = array();
        $_pq = explode('&', $pathinfo_query);
        foreach ($_pq as $value) {
            $p = explode('=', $value);
            if (isset($p[0])) {
                $p[0] = urldecode($p[0]);
            }
            if(!empty($p[0]) || !empty($p[1]))  $pq[] = implode('=', $p);
        }
        $pathinfo_query = implode('&', $pq);
        return $pathinfo_query;
    }


}








/**
 * Class St
 * @package Seter\Library
 * 把所有的操作归纳到 对状态操作中来
 *
    //$ar = [
    //'200'=>'ok',
    //'91'=>'ok',
    //];
    //St::Getcodelist($ar);            //1 把code列表传入进去
    //St::jsoncode(-200);              //输入状态
    //St::jsonres("asdfasd");          //设置内容
    //D(St::json());                   //输出json数据
    //D(St::jsonres());                //输出内容数据
    //D(St::AjaxReturn());             //输出json语句      //会中止
    //D(St::bool());                   //输出布尔值
    //echo '<hr>';
    //D(St::$codelist);                 //显示列表
    //exit;
 *
 */
class St{

    public static $json = [1];
    public static $codelist = [];


    public static function __ini()
    {
        self::$codelist = self::DefaultCoderes();
    }

    public static function DefaultCoderes()
    {
        return [
            '0'     => 'ini',
            '200'   => '操作成功',
        ];
    }

    public static function Getcodelist($list = [])
    {
        foreach($list as $key=>$value){
            self::$codelist[$key] = $value;
        }
    }
//    +-----------------------------------------------------------+
//    +-----------------------------------------------------------+

    //状态操作
    public static function jsoncode($code = 0)
    {
        self::$json = [
            'code'  => $code,
            'msg'   => self::$codelist[$code]
        ];
        return true;
    }


    //结果输出修饰
    //返回操作结果    或者      给结果赋值
    public static function jsonres($data = '')
    {
        if(!empty($data))  self::$json['data'] = $data;
        return self::$json['data'];
    }

    //返回json数组
    public static function json()
    {
        return self::$json;
    }

    //返回json串
    public static function AjaxReturn()
    {
        echo json_encode(self::$json);
        exit;
    }

    //返回操作bool
    public static function bool()
    {
//        return self::$json['code'];
        return intval(self::$json['code']>0)?true:false;
        exit;
    }

}
