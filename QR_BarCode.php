<?php

/**
 * QR_BarCode - Barcode QR Code Image Generator
 * @author CodexWorld
 * @url http://www.codexworld.com
 * @license http://www.codexworld.com/license/
 */
class QR_BarCode{
    // Google Chart API URL
    private $googleChartAPI = 'http://chart.apis.google.com/chart';
    // Code data
    private $codeData;
    
    /**
     * URL QR code
     * @param string $url
     */
    public function url($url){
        $this->codeData = preg_match("#^https?\:\/\/#", $url) ? $url : "http://{$url}";
    }
    
    /**
     * Text QR code
     * @param string $text
     */
    public function text($text){
        $this->codeData = $text;
    }
    
    /* wifi connect //
    public function wifi($security, $name, $key){
            $this->codeData = "WIFI:SECURITY:{$email};N:{$subject};KEY:{$message};;";
    }
    
     end of wifi connect */
    
    /**
     * Email address QR code
     *
     * @param string $email
     * @param string $subject
     * @param string $message
     */
    public function email($email = null, $subject = null, $message = null) {
        $this->codeData = "MATMSG:TO:{$email};SUB:{$subject};BODY:{$message};;";
    }
    
    /**
     * Phone QR code
     * @param string $phone
     */
    public function phone($phone){
        $this->codeData = "TEL:{$phone}";
    }
    
    /**
     * SMS QR code
     *
     * @param string $phone
     * @param string $text
     */
    public function sms($phone = null, $msg = null) {
        $this->codeData = "SMSTO:{$phone}:{$msg}";
    }
    
    /**
     * VCARD QR code
     *
     * @param string $name
     * @param string $address
     * @param string $phone
     * @param string $email
     */
    public function contact($name = null, $address = null, $phone = null, $email = null , $notes = null , $org = null, $url = null) {
        //$this->codeData = "MECARD:N:{$name};ADR:{$address};TEL:{$phone};EMAIL:{$email};BODY:{$content};;";
         //$this->codeData = "MECARD:N:{$name};ADR:{$address};TEL:{$phone};EMAIL:{$email};BDAY:{$BDAY};URL:{$url};NOTE:{$notes};;";
         $this->codeData = "MECARD:N:{$name};ADR:{$address};TEL:{$phone};EMAIL:{$email};NOTE:{$notes};ORG:{$org};URL:{$url};;";
         
         
         /*
      AFTER NAME  FN
      AFTER ADR   BDAY
      NOTE
      ORG
      ROLE
      TITLE
      URL
         */
    }
    /**
     * Content (gif, jpg, png, etc.) QR code
     *
     * @param string $type
     * @param string $size
     * @param string $content
     */
    public function content($type = null, $size = null, $content = null) {
        $this->codeData = "CNTS:TYPE:{$type};LNG:{$size};BODY:{$content};;";
    }
    /**
     * Generate QR code image
     *
     * @param int $size
     * @param string $filename
     * @return bool
     */
    public function qrCode($size, $filename) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->googleChartAPI);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "chs={$size}x{$size}&cht=qr&chl=" . urlencode($this->codeData));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        $img = curl_exec($ch);
        curl_close($ch);
        if($img) {
            if($filename) {
                if(!preg_match("#\.png$#i", $filename)) {
                    $filename .= ".png";
                    file_put_contents($filename, $img);
                    
                    // -------------------------------------------------------------------------------------------------//
                                                        // For website-url.php  page //
                    if($_SESSION["path"]=='website-url')
                    {
                        header("location: website.php?qrimage=$filename&value=website");
                    }
                    else if($_SESSION["path"]=='youtube-url')
                    {
                        header("location: website.php?qrimage=$filename&value=youtube");
                    }
                    else if($_SESSION["path"]=='facebook-url')
                    {
                        header("location: website.php?qrimage=$filename&value=facebook");
                    }
                    else if($_SESSION["path"]=='instagram-url')
                    {
                        header("location: website.php?qrimage=$filename&value=instagram");
                    }
                    else if($_SESSION["path"]=='twitter-url')
                    {
                        header("location: website.php?qrimage=$filename&value=twitter");
                    }
                    else if($_SESSION["path"]=='linkedin-url')
                    {
                        header("location: website.php?qrimage=$filename&value=linkedin");
                    }
                    else if($_SESSION["path"]=='pinterest-url')
                    {
                        header("location: website.php?qrimage=$filename&value=pinterest");
                    }
                    else if($_SESSION["path"]=='skype-url')
                    {
                        header("location: website.php?qrimage=$filename&value=skype");
                    }
                    // -------------------------------------------------------------------------------------------------//
                                                      // For security.php  page //

                    else if($_SESSION["path"]=='security_security')
                    {
                        header("location: security.php?qrimage=$filename&value=security");
                    }
                    else if($_SESSION["path"]=='security_discounts')
                    {
                        header("location: security.php?qrimage=$filename&value=discounts");
                    }
                    else if($_SESSION["path"]=='security_hotel')
                    {
                        header("location: security.php?qrimage=$filename&value=hotel");
                    }
                    else if($_SESSION["path"]=='security_studentCard')
                    {
                        header("location: security.php?qrimage=$filename&value=student");
                    }
                    else if($_SESSION["path"]=='security_pass')
                    {
                        header("location: security.php?qrimage=$filename&value=pass");
                    }

                    // ---------------------------------------------------------------------------------------------- //
                                                             // For card.php  page //
                    else if($_SESSION["path"]=='card_hotel')
                    {
                        header("location: card.php?qrimage=$filename&value=hotel");
                    }
                    else if($_SESSION["path"]=='card_employeecard')
                    {
                        header("location: card.php?qrimage=$filename&value=employee");
                    }
                    else if($_SESSION["path"]=='card_businesscard')
                    {
                        header("location: card.php?qrimage=$filename&value=business");
                    }
                    else if($_SESSION["path"]=='card_studentcard')
                    {
                        header("location: card.php?qrimage=$filename&value=student");
                    }
                    else if($_SESSION["path"]=='card_entrycard')
                    {
                        header("location: card.php?qrimage=$filename&value=entry");
                    }
                    else if($_SESSION["path"]=='card_vcard')
                    {
                        header("location: card.php?qrimage=$filename&value=vcard");
                    }
                    // ---------------------------------------------------------------------------------------------- //
                                                       // For business.php  page //
                    else if($_SESSION["path"]=='prodPack')
                    {
                        header("location: business.php?qrimage=$filename&value=prodPack");
                    }
                    else if($_SESSION["path"]=='prod')
                    {
                        header("location: business.php?qrimage=$filename&value=prod");
                    }
                    else if($_SESSION["path"]=='news')
                    {
                        header("location: business.php?qrimage=$filename&value=news");
                    }
                    else if($_SESSION["path"]=='employment')
                    {
                        header("location: business.php?qrimage=$filename&value=employment");
                    }
                    else if($_SESSION["path"]=='rental')
                    {
                        header("location: business.php?qrimage=$filename&value=rental");
                    }
                    else if($_SESSION["path"]=='member')
                    {
                        header("location: business.php?qrimage=$filename&value=member");
                    } 
                    else if($_SESSION["path"]=='job')
                    {
                        header("location: business.php?qrimage=$filename&value=job");
                    }
                    else if($_SESSION["path"]=='tickets')
                    {
                        header("location: business.php?qrimage=$filename&value=tickets");
                    }
                    else if($_SESSION["path"]=='events')
                    {
                        header("location: business.php?qrimage=$filename&value=events");
                    } 
                    else if($_SESSION["path"]=='ad')
                    {
                        header("location: business.php?qrimage=$filename&value=ad");
                    }
                    else if($_SESSION["path"]=='brochure')
                    {
                        header("location: business.php?qrimage=$filename&value=brochure");
                    }
                    else if($_SESSION["path"]=='flyer')
                    {
                        header("location: business.php?qrimage=$filename&value=flyer");
                    }
                    else if($_SESSION["path"]=='label')
                    {
                        header("location: business.php?qrimage=$filename&value=label");
                    }
                    else if($_SESSION["path"]=='banner')
                    {
                        header("location: business.php?qrimage=$filename&value=banner");
                    }
                    else if($_SESSION["path"]=='promotion')
                    {
                        header("location: business.php?qrimage=$filename&value=promotion");
                    }
                    else if($_SESSION["path"]=='coupon')
                    {
                        header("location: business.php?qrimage=$filename&value=coupon");
                    }
                    else if($_SESSION["path"]=='businessCard')
                    {
                        header("location: business.php?qrimage=$filename&value=business-card");
                    }
                    else if($_SESSION["path"]=='studentCard')
                    {
                        header("location: business.php?qrimage=$filename&value=student-card");
                    }
                    else if($_SESSION["path"]=='entryCard')
                    {
                        header("location: business.php?qrimage=$filename&value=entry-card");
                    }
                    else if($_SESSION["path"]=='employCard')
                    {
                        header("location: business.php?qrimage=$filename&value=employ-card");
                    }
                    // ----------------------------------------------------------------------------------------------//
                                                      // For contact.php Page //

                    else if($_SESSION["path"]=='contact_text')
                    {
                        header("location: contact.php?qrimage=$filename&value=text");
                    }
                    else if($_SESSION["path"]=='contact_phone')
                    {
                        header("location: contact.php?qrimage=$filename&value=phone");
                    }
                    else if($_SESSION["path"]=='contact_sms')
                    {
                        header("location: contact.php?qrimage=$filename&value=sms");
                    }
                    else if($_SESSION["path"]=='contact_email')
                    {
                        header("location: contact.php?qrimage=$filename&value=email");
                    }
                    else if($_SESSION["path"]=='contact_business')
                    {
                        header("location: contact.php?qrimage=$filename&value=business");
                    }
                    // -----------------------------------------------------------------------------------------------//

                    else;
                    exit;
                }
                //return 
            } else {
                //header("Content-type: image/png");
                print $img;
                return true;
            }
        }
        return false;
    }
}

?>