<?php
namespace App\Services;
use SoapClient;
//短信接口类
    class WsMessageSend
    {
        const wsdl="https://dx.ipyy.net/webservice.asmx?wsdl";
        
        static function send($username,$password,$mobiles,$content,$extnumber,$plansendtime=null)
        {
            $client=new SoapClient(self::wsdl);
            $sms=array(
                    'Msisdns'=>$mobiles,
                    'SMSContent'=>$content,
                    'ExtNumber'=>$extnumber,
            );
            if($plansendtime!=null && $plansendtime!=''){
                $sms['PlanSendTime']=$plansendtime;
            }
            //print_r($sms);
            $body=array(
                    'userName'=>$username,
                    'password'=>$password,
                    'sms'=>$sms
            );
            $result=$client->__call("SendSms", array($body));
            //$client->__soapCall("SendSms", array($body));
            if(is_soap_fault($result))
            {
                echo "faultcode:",$result->faultcode,"faultstring:",$result->faultstring;
                return null;
            }
            else 
            {
                $data=$result->SendSmsResult;
                return $data;
            }
        }
    }