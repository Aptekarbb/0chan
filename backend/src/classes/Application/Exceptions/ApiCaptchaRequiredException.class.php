<?php

class ApiCaptchaRequiredException extends ApiException {
	public function __construct($message = "captcha required", $code = 403, Exception $previous = null) {
		parent::__construct($message, $code, $previous);
		$this->setDetails([ 'require' => 'captcha' ]);
	}
}