<?php
/**
 * Controller
 * PHP version 7.2
 *
 */
namespace Controllers;

/**
 * Class AesEncyptionController
 *
 * @category Controllers
 * @package  5paisa.
 * @author   5paisa. <https://www.5paisa.com/developerapi/>
 * @license  https://www.5paisa.com/developerapi/ N/A
 * @link     https://www.5paisa.com/developerapi/
 */
class AesEncyptionController
{
    private $key;
    private $iv;
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->key=ENC_KEY;
        $this->iv=AES_IV;
    }
    /**
      * Do encyption
      * @param  $data
      * @author 5paisa. <https://www.5paisa.com/developerapi/>
      * @return string
      */
    public function encrypt($data)
    {
        $iv = implode(array_map("chr", $this->iv));
        $hash =openssl_pbkdf2($this->key, $iv, 48, 1000, 'sha1');//48 charter string
        $iv=substr($hash, 0, 16); //split into 16 charater from 0 to 16
        $encryption_key=substr($hash, 16, 48);//split into 32 charater from 16 to 48
        $encrypted = openssl_encrypt($data, AES_256_CBC, $encryption_key, 0, $iv);
        return $encrypted;
    }
}
