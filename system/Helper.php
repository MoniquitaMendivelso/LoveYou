<?php
function showError($error, $code, $abort = false)
{
    $data = [

        "result" => "fail",
        "message" => $error,
        "data" => null
    ];

    //print_r(json_encode($data));
    json_output(json_build(404, $data, $code), $abort);

    if ($abort)
        die();
}

function valid_method($method)
{
    $request_server_method = isset($_SERVER["REQUEST_METHOD"]) ? $_SERVER["REQUEST_METHOD"] : null;

    if ($request_server_method != $method) {
        showError("Peticion Invalida :(", "code-method", true);
    }
}


/**
 * Construye un nuevo string json
 	200 OK
	201 Created
	300 Multiple Choices
	301 Moved Permanently
	302 Found
	304 Not Modified
	307 Temporary Redirect
	400 Bad Request
	401 Unauthorized
	403 Forbidden
	404 Not Found
	410 Gone
	500 Internal Server Error
	501 Not Implemented
	503 Service Unavailable
	550 Permission denied
 *
 * @param integer $status
 * @param array $data
 * @param string $msg
 * @return string
 */
function json_build($status = 200, $result = [], $error_code = null)
{
    if (empty($result["message"]) || $result["message"] == '') {
        switch ($status) {
            case 200:
                $msg = 'OK';
                break;
            case 201:
                $msg = 'Created';
                break;
            case 300:
                $msg = 'Multiple Choices';
                break;
            case 301:
                $msg = 'Moved Permanently';
                break;
            case 302:
                $msg = 'Found';
                break;
            case 400:
                $msg = 'Invalid request';
                break;
            case 403:
                $msg = 'Access denied';
                break;
            case 404:
                $msg = 'Not found';
                break;
            case 500:
                $msg = 'Internal Server Error';
                break;
            case 550:
                $msg = 'Permission denied';
                break;
            default:
                break;
        }
    }

    $json =
        [
            'status'     => $status,
            'error'      => false,
            'error_code' => $error_code,
            'message'        => $result["message"],
            'data'       => $result["data"]
        ];

    if (in_array($status, [400, 403, 404, 405, 500])) {
        $json['error'] = true;
    }

    if ($error_code !== null) {
        $json['error_code'] = $error_code;
    }

    return json_encode($json);
}

/**
 * Hace output en el body como json
 *
 * @param array $json
 * @param boolean $die
 * @return string|bool
 */
function json_output($json, $die = true)
{
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json;charset=utf-8');

    if (is_array($json)) {
        $json = json_encode($json);
    }

    echo $json;

    if ($die === true) {
        die;
    }

    return true;
}
