<?php
namespace app\index\controller;

use think\View;
use think\Session;
use think\Controller;
use app\index\model\Users;
use think\Model;
use phpm;
class Index extends Controller
{
    protected $view;
    protected $api_server = 'http://192.168.0.66:8088';

    function addmanager(){
        $kkk=session(role);
        echo $kkk;
    }
}
?>