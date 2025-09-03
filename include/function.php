<?php
// #################################################################
// ### private function
// ###
// ### CREATE AUTHER Mick 2014/06/15
// ### LAST MODIFY Mick 2014/06/15
// #################################################################

	//基本設定
	/* $admin_mail = 'firststep@first-step-yuma.com'; */
	$admin_mail = 'shin@shin-design.jp';

	// $admin_mail = 'info@regraviti.com';
	$admin_name = '【寺葬】';

	use PHPMailer\PHPMailer\PHPMailer;
	// use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;

	/*----------------------------------*
	 *	メール送信						*
	 *----------------------------------*/
	function MailSend($data = null){

		global $admin_mail;
		global $admin_name;

		global $kindlist;

		$flg = false;

		$data["mail"] = $data["email"];

		$listdata = '';
		if(!empty($data["kind1"]) && $data["kind1"] == "1"){
			$listdata .= $kindlist[1];
		}
		if(!empty($data["kind2"]) && $data["kind2"] == "1"){
			if(!empty($listdata)){ $listdata .= ', '; }
			$listdata .= $kindlist[2];
		}
		if(!empty($data["kind3"]) && $data["kind3"] == "1"){
			if(!empty($listdata)){ $listdata .= ', '; }
			$listdata .= $kindlist[2];
		}
		if(!empty($data["kind4"]) && $data["kind4"] == "1"){
			if(!empty($listdata)){ $listdata .= ', '; }
			$listdata .= $kindlist[2];
		}

		$data['ip'] = $_SERVER['REMOTE_ADDR'];
		$data['agent'] = $_SERVER['HTTP_USER_AGENT'];
		$data['date'] = date('Y-m-d H:i:s');

		include_once(dirname(__FILE__)."/PHPMailer.php");
		include_once(dirname(__FILE__)."/template.php");

		$mail = new PHPMailer(true);
		//$mail->SMTPDebug = 2;

    	// $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    	// $mail->isSMTP();                                            //Send using SMTP
    	// $mail->Host       = 'smtp.example.com';                     //Set the SMTP server to send through
    	// $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    	// $mail->Username   = 'user@example.com';                     //SMTP username
    	// $mail->Password   = 'secret';                               //SMTP password
    	// $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    	// $mail->Port       = 465;

		$mail->CharSet = "UTF-8";
		$mail->Encoding = "base64";

		$mail->setFrom($admin_mail, $admin_name);
		$mail->addAddress($data["mail"]);

		$mail->Subject = $subject;
		$mail->Body = $body;

		if(!$mail->send()) {

		    echo 'Mailer Error: ' . $mail->ErrorInfo;

		} else {

			$mail->setFrom($data["mail"], '');

			$mail->ClearAddresses();
			$mail->addAddress($admin_mail);

			$mail->addBcc("a.mikuni@sooooofa.net");

			$mail->Subject = $admin_subject;
			$mail->Body = $admin_body;

			if(!$mail->send()) {

			    echo 'Mailer Error: ' . $mail->ErrorInfo;

			} else {

				$flg = true;

			}
		}
		return $flg;
	}


/*----------------------------------*
 *	value処理		*
 *----------------------------------*/
function value_check($k){
	if(!empty($_POST[$k])){ $kval = escape($_POST[$k]); }
	else { $kval = ''; }
	return $kval;
}

function rc_check($k, $v){
	if(!empty($_POST[$k]) && $_POST[$k] == $v){ $kval = "checked"; }
	else { $kval = ''; }
	return $kval;
}

function set_select($list, $v, $txt){
	$selectlist = '<option value="">' . $txt . '</option>' . "\n";
	foreach($list as $key => $item){
		if($key == $v)
		{
			$selectlist .= '<option value="' . $key . '" selected>' . $item . '</option>' . "\n";
		} else
		{
			$selectlist .= '<option value="' . $key . '">' . $item . '</option>' . "\n";
		}
	}
	return $selectlist;
}

function error_check($errors, $k){
	if (!empty($errors[$k])){ $kval = '<p class="error">'.$errors[$k].'</p>' . "\n"; }
	else { $kval = ''; }
	return $kval;
}

// ▼正規表現（メールアドレス、電話番号、かな、カナ）
$__pattern = '(?:[a-z0-9][-a-z0-9]*\.)*(?:[a-z0-9][-a-z0-9]{0,62})\.(?:(?:[a-z]{2}\.)?[a-z]{2,4}|museum|travel)';
$__regex   = '/^([a-zA-Z0-9\._-])+([a-zA-Z0-9\._-])*@' . $__pattern . '$/i';
$__reg_tel = '/^0[0-9]{1,4}-[0-9]{1,4}-[0-9]{4}$/i';

/*----------------------------------*
 *	エスケープ処理		*
 *----------------------------------*/
function escape($str) {
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

/*----------------------------------*
 *	行頭末尾の全角スペース削除		*
 *----------------------------------*/
function spaceTrim ($str) {
    // 行頭
    $str = preg_replace('/^[ 　]+/u', '', $str);
    // 末尾
    $str = preg_replace('/[ 　]+$/u', '', $str);

    return $str;
}

//$str = str_replace(array("\r", "\n"), "", $str); // すべての改行（CR/LF/CR+LF）を取り除く

/*----------------------------------*
 *	半角カタカナ⇒全角カタカナ		*
 *----------------------------------*/
function KanaB($str = null){
	return mb_convert_kana($str,'KV','UTF-8');
}

/*----------------------------------*
 *	データ保存内容クリーニング		*
 *----------------------------------*/
function cleaning($data){

	if (is_array($data)) {
		return array_map("cleaning", $data);
	} else {
		return htmlspecialchars($data, ENT_QUOTES);
	}
}
?>