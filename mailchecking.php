<?php 
$mailto1="rajshah9172@gmail.com";
        //$file="thanks.htm";
        //$pcount=0;
        //$gcount=0;
        $subject = "Mail from Enquiry Form";

        $from1="info@workies.in";
       /* while (list($key,$val)=each($_POST))
        {
        $pstr = $pstr."$key : $val \n ";
        ++$pcount;

        }
        while (list($key,$val)=each($_GET))
        {
        $gstr = $gstr."$key : $val \n ";
        ++$gcount;

        }
        */
        //if ($pcount > $gcount)
        //{
        $message_body="hiiiiiiiiiii";
        mail($mailto1,$subject,$message_body,"From:".$from1);
        echo "Mail SENT";
       // include("$file");
        
       // }
        //else
        /*{
        $message_body=$gstr;

        mail($mailto1,$subject,$message_body,"From:".$from1);
        include("$file");
        }
        */
		
?>