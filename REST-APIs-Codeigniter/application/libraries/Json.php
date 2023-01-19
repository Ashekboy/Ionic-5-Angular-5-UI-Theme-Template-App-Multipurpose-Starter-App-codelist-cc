<?php

class Json {

	function response($response = array(),$message = null,$status = null) {
		
		//header("Content-Type: application/json");
		
		if($message && $message != null && $status && $status != null){
			if(isset($response) && !empty($response)) {
		
				$response = [
					'data' => $response,
					'message' => $message,
					'status' => $status
				];
			}
			else {
			
				$response['status'] = 0;
				$response['message'] = 'undefind json';
			}
		}else{
			$response['status'] = 0;
			$response['message'] = 'undefind json';
		}

		return json_encode($response);
	}
}
?>