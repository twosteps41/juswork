<?php
namespace app\index\model;

use think\Db;
class Users extends \think\Model{
    /**
     * 获取所有用户信息
     * @return array
     */
    public static function get_users(){
        $rs=Db::table('users')->select();
        return $rs;
    }
    
    /**
     * 用户登录
     * @param string $user
     * @param string $password
     */
    public static function user_login($user,$password){
        $where['username']=$user;
        $where['password']=$password;
        $rs=Db::table("users")->where($where)->find();
        return $rs;
    }
    
    /**
     * 通过用户名邮箱查询公司是否存在
     * @param string $email
     * @return string $rs 公司名称(不存在则为false)
     */
    public static function company_is_exist($email){
        $where['username'] = $email;
        $rs=Db::table('users')->where($where)->value('company');
        return $rs;
    }
    
    /**
     * 通过邮箱后缀查询该公司是否存在
     * @param string $company_item
     * @return boolean 存在true 不存在false
     */
    public static function company_item_is_exist($company_item){
        $where['username']=['like','%'.$company_item];
        $rs=Db::table('users')->where($where)->select();
        return $rs ? true : false;
    }
    
    public static function email_is_exist($email){
        $where['username']=$email;
        $rs=Db::table("users")->where($where)->select();
        return $rs ? true : false;
    }
    
}