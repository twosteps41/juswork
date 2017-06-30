<?php
namespace app\index\controller;

use think\View;
use think\Controller;
use think\Db;
use app\index\model\Users;
use think\Model;
class Test extends Db
{
    public function index()
    {
        $view=new View();
        return $view->fetch();
    }
    
    public function get_users(){
        $rs=Users::get_users();
        return $rs;
    }
    
    public function save_user(){
        $data=input('post.');
        $user=new Users();
        $user->data($data);
        $rs=$user->save();
        if ($rs){
           return json_encode(array('success'=>true));
        } else {
           return json_encode(array('msg'=>'Some errors occured.'));
        }
    }
    
    public function update_user(){
        $id=input('get.id');
        $data=input('post.');
        $user=new Users();
        $rs=$user->save($data,['id'=>$id]);
        if ($rs){
            return json_encode(array('success'=>true));
        } else {
            return json_encode(array('msg'=>'Some errors occured.'));
        }
    }
    
    public function destroy_user(){
        $id=input('post.');
        $user=new Users();
        $rs=$user->destroy($id);
        if ($rs){
            return json_encode(array('success'=>true));
        } else {
            return json_encode(array('msg'=>'Some errors occured.'));
        }
    }
    
    public function sec_test(){
        return 'hello hehe!';
    }
}