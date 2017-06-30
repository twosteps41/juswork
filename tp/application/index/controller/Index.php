<?php
namespace app\index\controller;

use think\View;
use think\Session;
use think\Controller;
use app\index\model\Users;
use think\Model;
use phpm;
class Index extends Controller{
    protected  $view;
    protected $api_server='http://192.168.0.66:8088';
    public function _initialize(){
        $this->view=new View();
    }

    public function helpp(){
        return '<style type="text/css">*{ padding: 0; margin: 0; } .think_default_text{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p> ThinkPHP V5<br/><span style="font-size:30px">十年磨一剑 - 为API开发设计的高性能框架</span></p><span style="font-size:22px;">[ V5.0 版本由 <a href="http://www.qiniu.com" target="qiniu">七牛云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_bd568ce7058a1091"></thinkad>';
    }

    public function index(){
        return $this->view->fetch();
    }

    public function company_create(){
        return $this->view->fetch();
    }

    public function aj_landing(){
        if(input('post.email')){//post提交ajax
            $email=input('post.email');
            $pos=strpos($email, '@');
            $company_item=substr($email, $pos+1);
            //判断company_item是否注册过公司
            if($company=Users::company_is_exist($email)){//注册过
                //跳转至登陆流程
                $array=array('href'=>'login.php','para_n'=>'email','para_v'=>$email);
            }else{
                //跳转至注册流程
                $array=array('href'=>'landing.php','para_n'=>'email','para_v'=>$email);
            }
            echo json_encode($array);exit;
        }else{//get访问landing
            $email=input('get.email');
            echo json_encode(array('email'=>$email));
        }
    }

    public function landing(){
        $email=input('post.email');
        $pos=strpos($email, '@');
        $company_item=substr($email, $pos+1);
        //查找该公司是否存在
        $pattern = "/^([0-9A-Za-z\\-_\\.]+)@([0-9a-z]+\\.[a-z]{2,3}(\\.[a-z]{2})?)$/i";
        if (preg_match( $pattern, $email )){
            $array=array('status'=>1,'company'=>$company_item);
        }else{
            $array=array('status'=>0);
        }
//         if(Users::company_item_is_exist($company_item)){

//         }else{

//         }
        $array['email']=$email;
        echo json_encode($array);
    }

    public function login(){
        if($password=input('post.password')){//登陆
            $user=input('post.user');
            $password=$password;
            $data=array('user'=>$user,'password'=>$password);
            $return=$this->php_post($this->api_server.'/v1/user/login', $data, 1);
            $arr=json_encode($return);
            $info=json_decode($return,true);
            $data=$info['data'];
            Session::set("role",$data['role']);
            session("token",$data['token']);
            session("uid",$data['user']);
            echo $arr;
            exit;

        }else{//访问
//             $company=input('post.company');
            $email=input('get.email');
            $company=Users::company_is_exist($email);
            echo json_encode(array('email'=>$email,'company'=>$company));exit;
        }
        return $this->view->fetch();
    }

    public function register(){
        $email=input('post.email');
        $name=input('post.name');
        $password=input('post.password');
        $pattern = "/^([0-9A-Za-z\\-_\\.]+)@([0-9a-z]+\\.[a-z]{2,3}(\\.[a-z]{2})?)$/i";
        if (!preg_match( $pattern, $email )){
            $array=array('status'=>0,'msg'=>'email');
        }elseif (!$name){
            $array=array('status'=>0,'msg'=>'name');
        }elseif (!preg_match("/^[a-zA-Z][a-zA-Z0-9_]{8,20}$/",$password)){
            $array=array('status'=>0,'msg'=>'password');
        }else{
            $user=new Users();
            $is_exist=$user->where('username', $email)->find();
            if ($is_exist){
                $array=array('status'=>0,'msg'=>'用户名已存在');
            }else{
                $user->username=$email;
                $user->password=md5($password);
                $user->name=$name;
                $pos=strpos($email, '@');
                $company_item=substr($email, $pos+1);
                $user->company=$company_item;
                if($user->save()){
                    $array=array('status'=>1,'msg'=>'注册成功');
                }else{
                    $array=array('status'=>0,'msg'=>'注册失败');
                }
            }
        }
        echo json_encode($array);
    }

    public function identify(){
        $email=input("post.email");
        if(Users::email_is_exist($email)){
            header('Location:/juswork/code.php?email='.$email);die;
        }else{
            header('Location:/juswork/landing_info.php');die;
        }
    }

    public function code(){
        if(input("post.n")!==null){
            $varify=input("post.n");
            $varify_true=Session::get('varify');
            if(!preg_match( "/^[0-9]*$/", $varify)){
                $array=array('status'=>0,'msg'=>'您似乎输入了一些字母。代码应为 6 位数。');
            }else if(strlen($varify)>=1&&strlen($varify)<=5){
                $array=array('status'=>0,'msg'=>'您只输入了'.strlen($varify).' 位数。请检查代码并重试。');
            }else if(strlen($varify)>6){
                $array=array('status'=>0,'msg'=>'输入超过 6 位数。请检查代码并重试。');
            }else if(!$varify){
                $array=array('status'=>0,'msg'=>'请输入一个验证码。');
            }else if($varify!=$varify_true){
                $array=array('status'=>0,'msg'=>'验证码不正确，请重新输入');
            }else if($varify==$varify_true){
                $array=array('status'=>1,'msg'=>'匹配');
            }
        }else{
            $varify=rand(100000, 999999);
            Session::set('varify',$varify);
            vendor('phpm.class#phpmailer');
            $sendto_email=input('post.email');
            Session::set('username',$sendto_email);
            $sendto_name="韩祯";
            $subject = "咨询";
            $body = '';
            $body .= "<div><span>Name: </span><span>测试</span></div>";
            $body .= "<div style='margin-top: 10px;'><span>Company: </span><span>测试</span></div>";
            $body .= "<div style='margin-top: 10px;'><span>Phone Number: </span><span>测试</span></div>";
            $mail=new \PHPMailer();
            $mail->IsSMTP (); // send via SMTP
            $mail->Port = 465; //发送端口
            $mail->Host = "smtp.qq.com"; // SMTP 邮件服务器地址，这里需要替换为发送邮件的邮箱所在的邮件服务器地址, 这里使用了gmail的SMTP设置 
            $mail->SMTPSecure = 'ssl';
            $mail->SMTPAuth = true; // turn on SMTP authentication 邮件服务器验证开
            $mail->Username = "499935348@qq.com"; // SMTP服务器上此邮箱的用户名，有的只需要@前面的部分，有的需要全名。请替换为正确的邮箱用户名
            $mail->Password = "dwsbracuojescaec"; // SMTP服务器上该邮箱的密码，请替换为正确的密码
            $mail->From = "499935348@qq.com"; // SMTP服务器上发送此邮件的邮箱，请替换为正确的邮箱，$mail->Username 的值是对应的。
            $mail->FromName = "499935348@qq.com"; // 真实发件人的姓名等信息，这里根据需要填写
            $mail->CharSet = "utf-8"; // 这里指定字符集！
            $mail->Encoding = "base64";
            $mail->AddAddress ( $sendto_email, $sendto_name ); // 收件人邮箱和姓名
            $mail->IsHTML ( true ); // send as HTML
            $mail->Subject = $subject; // 邮件主题
            // 邮件内容
            $mail->Body = "您好，您的验证码是' . $varify .'，请及时验证。";
            $mail->AltBody = "text/html";
            if (! $mail->Send ()) {
                $array=array('status'=>0,'msg'=>'发生错误');
            } else {
                $array=array('status'=>1,'msg'=>'发送成功');
            }
        }
        echo json_encode($array);
    }

    public function password(){
        $password=input('post.password_new');
        if(!$password){
            $array=array('status'=>0,'msg'=>'密码栏不允许留空白不填。');
        }else if (strlen($password)<8) {
            $array=array('status'=>0,'msg'=>'密码必须不少于8个字符。');
        } else if (!preg_match("/^(?=.{7,})(((?=.*[A-Z])(?=.*[a-z])(?=.*[0-9]))|((?=.*[A-Z])(?=.*[a-z])(?=.*[\\W\_]))|((?=.*[A-Z])(?=.*[0-9])(?=.*[\\W\_]))|((?=.*[a-z])(?=.*[0-9])(?=.*[\\W\_]))).*$/",$password)) {
            $array=array('status'=>0,'msg'=>'请选择更安全的密码。');
        } else {
            $username=Session::get('username');
            $user = new Users();
            // save方法第二个参数为更新条件
            $rs=$user->save([
                'password' => md5($password),
            ],['username' => $username]);
            if($rs){
                $array=array('status'=>1,'msg'=>'修改成功');
            }else{
                $array=array('status'=>0,'msg'=>'修改失败');
            }
        }
        echo json_encode($array);
    }

    public function getManager(){
        //先检查用户角色
        $role=Session::get("role");
        if ($role=='admin'){
            $url=$this->api_server.'/v1/admin/manager';
            $return=$this->php_get($url);
            $return=json_decode($return,true);
            $array['manage']=$return['data'];
            $url=$this->api_server.'/v1/admin/group';
            $return=$this->php_get($url);
            $return=json_decode($return,true);
            $array['group']=$return['data'];
        }else{
            $array=array();
        }
        echo json_encode($array);exit;

    }

    public function getGroup(){
        $url=$this->api_server.'/v1/admin/group';
        $return=$this->php_get($url);
        $return=json_decode($return,true);
        $array['group']=$return['data'];
        echo json_encode($array);exit;
    }

    function addmanager(){
        $user=input('post.user');
        $password=input('post.password');
        $role=input('post.role');
        $data=array('user'=>$user,'password'=>$password,'role'=>$role);
        $return=$this->php_post($this->api_server.'/v1/admin/manager', $data);
        $arr=json_encode($return);
        echo $arr;exit;
    }

}
