<?php
namespace app\controller;
use app\BaseController;
use think\Request;
use think\facade\View;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
// require 'vendor/autoload.php';

class Email extends BaseController
{
    public function index() {
        return View::fetch();
        // echo 'ddd';
    }
    public function send(Request $request)
    {
        $time = date('Y.m.d h:i:s');
        $source = $request->param('source');
        $name   = $request->param('name');
        $phone  = $request->param('phone');
        $company  = $request->param('company');
        $word   = $request->param('word');
        $mail   = new PHPMailer(true);
        try {
            //Server settings
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;    // Enable verbose debug output
            $mail->isSMTP();                          // Send using SMTP
            $mail->CharSet    = 'utf8';                  //设置编码
            $mail->Host       = 'smtp.163.com';       // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                 // Enable SMTP authentication
            $mail->Username   = '13163204608@163.com';// SMTP username
            $mail->Password   = 'BSNUJZFLHQFXFXWJ';             // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 25;                              // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
        
            //Recipients
            $mail->setFrom('13163204608@163.com', '明动咨询');
            $mail->addAddress('13163204608@163.com', '明动咨询');     // Add a recipient
            // $mail->addAddress('ellen@example.com');               // Name is optional
            // $mail->addReplyTo('info@example.com', 'Information');
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');
        
            // Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        
            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = '订单信息';
            $mail->Body    = '来源：'.$source.'<br>姓名：'.$name.'<br>手机号：'.$phone.'<br>公司名称：'.$company.'<br>留言：'.$word.'<br>时间：'.$time;
            // $mail->Body    = '来源：http://mdtzzx.com'.'<br>姓名：'.$name.'<br>手机号：'.$phone.'<br>留言：'.$word;
            // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
            if ($mail->send()) {
                $result = ['status' => true, 'message' => '预约成功，请保持电话接通~'];
                return json($result);
            }
        } catch (Exception $e) {
            $error = $mail->ErrorInfo;
            $result = ['status' => false, 'message' => $error];
            return json($result);
        }
    }
}
