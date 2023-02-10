<?php

session_start();

include "QR_BarCode.php"; 
header('Content-type: text/plain');
$qr = new QR_BarCode(); 

// --------------------------------------------------------------------------------------------------------------------------------//
// --------------------------------------------------------------------------------------------------------------------------------//
// --------------------------------------------------------------------------------------------------------------------------------//
//---------------------------------------------------- FOR Website-Url PAGE ------------------------------------------------------ //

// for website //
if(isset($_POST['website-url'])){
    $_SESSION["path"] = "website-url";
    $url=$_POST['simpleurl']; 
    $text="url-qr";
    $TargetPath=date("d-m-y")."-".time().$text;
    $qr->url($url);
    $qr->qrCode(200,"qrimages/url/$TargetPath"); 
}

// for youtube //
else if(isset($_POST['youtube-url'])){
    $_SESSION["path"] = "youtube-url";
    $url=$_POST['simpleurl']; 
    $text="url-qr";
    $TargetPath=date("d-m-y")."-".time().$text;
    $qr->url($url);
    $qr->qrCode(200,"qrimages/url/$TargetPath"); 
}

// for facebook // 
else if(isset($_POST['facebook_url'])){
    $_SESSION["path"] = "facebook-url";
    $url=$_POST['simpleurl']; 
    $text="url-qr";
    $TargetPath=date("d-m-y")."-".time().$text;
    $qr->url($url);
    $qr->qrCode(200,"qrimages/url/$TargetPath"); 
}
// for instagram //
else if(isset($_POST['instagram-url'])){
    $_SESSION["path"] = "instagram-url";
    $url=$_POST['simpleurl']; 
    $text="url-qr";
    $TargetPath=date("d-m-y")."-".time().$text;
    $qr->url($url);
    $qr->qrCode(200,"qrimages/url/$TargetPath");  
}

// for twitter //
else if(isset($_POST['twitter-url'])){
    $_SESSION["path"] = "twitter-url";
    $url=$_POST['simpleurl']; 
    $text="url-qr";
    $TargetPath=date("d-m-y")."-".time().$text;
    $qr->url($url);
    $qr->qrCode(200,"qrimages/url/$TargetPath");  
}

// for linkedin //
else if(isset($_POST['linkedin-url'])){
    $_SESSION["path"] = "linkedin-url";
    $url=$_POST['simpleurl']; 
    $text="url-qr";
    $TargetPath=date("d-m-y")."-".time().$text;
    $qr->url($url);
    $qr->qrCode(200,"qrimages/url/$TargetPath");  
}
// for pinterest //
else if(isset($_POST['pinterest-url'])){
    $_SESSION["path"] = "pinterest-url";
    $url=$_POST['simpleurl']; 
    $text="url-qr";
    $TargetPath=date("d-m-y")."-".time().$text;
    $qr->url($url);
    $qr->qrCode(200,"qrimages/url/$TargetPath");  
}

// for skype //
else if(isset($_POST['skype-url'])){
    $_SESSION["path"] = "skype-url";
    $url=$_POST['simpleurl']; 
    $text="url-qr";
    $TargetPath=date("d-m-y")."-".time().$text;
    $qr->url($url);
    $qr->qrCode(200,"qrimages/url/$TargetPath");  
}

// --------------------------------------------------------------------------------------------------------------------------------//
// --------------------------------------------------------------------------------------------------------------------------------//
// --------------------------------------------------------------------------------------------------------------------------------//
//---------------------------------------------------- FOR CONTACT PAGE ---------------------------------------------------------- //

// FOR TEXT //
else if(isset($_POST['contact_text'])){
    $_SESSION["path"] = "contact_text";
    $text=$_POST['simpletext'];
    $TargetPath=date("d-m-y")."-".time()."text"; 
    $qr->text($text);
    $qr->qrCode(200,"qrimages/contact/text/$TargetPath"); 
}
// FOR PHONE //
else if(isset($_POST['contact_phone'])){
    $_SESSION["path"] = "contact_phone";
    $phone=$_POST['phone']; 
    $TargetPath=date("d-m-y")."-".time()."phone"; 
    $qr->phone($phone);
    $qr->qrCode(200,"qrimages/contact/phone/$TargetPath");   
}
// FOR SMS //
else if(isset($_POST['contact_sms'])){
    $_SESSION["path"] = "contact_sms";
    $phone=$_POST['phone'];
    $sms=$_POST['sms']; 
    $TargetPath=date("d-m-y")."-".time()."phone";
    $qr->sms($phone,$sms);
    $qr->qrCode(200,"qrimages/contact/sms/$TargetPath");    
}
// FOR EMAIL //
else if(isset($_POST['contact_email'])){
    $_SESSION["path"] = "contact_email";
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message']; 
    $TargetPath=date("d-m-y")."-".time()."email";
    $qr->email($email,$subject,$message);
    $qr->qrCode(200,"qrimages/contact/email/$TargetPath");  
}
// FOR BUSINESS //
else if(isset($_POST['contact_business'])){
    $_SESSION["path"] = "contact_business";
    $name=$_POST['name'];
    $position=$_POST['position'];
    $ph_no=$_POST['phone_no'];
    $address=$_POST['address']; 
    $email=null;
    $org=null;
    $notes=$position;
    $url=null;
     $TargetPath=date("d-m-y")."-".time()."user";
    $qr->contact($name, $address, $ph_no, $email, $url, $BDAY, $notes);
    $qr->qrCode(200,"qrimages/contact/business/$TargetPath");  
}

// --------------------------------------------------------------------------------------------------------------------------------//
// --------------------------------------------------------------------------------------------------------------------------------//
// --------------------------------------------------------------------------------------------------------------------------------//
//---------------------------------------------------- FOR security PAGE --------------------------------------------------------- //

// Security Authentication  //
else if(isset($_POST['security_security'])){
    $_SESSION["path"] = "security_security";
    $nameOfPerson=$_POST['security_name'];
    $pid=$_POST['security_personid'];
    
    $data=$nameOfPerson."\n".$pid;
    $TargetPath=date("d-m-y")."-".time()."person";
    $qr->text($data);
    $qr->qrCode(200,"qrimages/security/security/$TargetPath");  
}

// Discounts Authentication  //
else if(isset($_POST['security_discounts'])){
    $_SESSION["path"] = "security_discounts";
    $deals=$_POST['discounts_deal'];
    $code=$_POST['discounts_code'];
    $expiry=$_POST['discounts_expiry'];
    
    $data=$deals."\n".$code."\n"."expiry";
     $TargetPath=date("d-m-y")."-".time()."discounts";
    $qr->text($data);
    $qr->qrCode(200,"qrimages/security/discounts/$TargetPath");  
}

// Hotel Room Cards  //
else if(isset($_POST['security_hotel'])){
    $_SESSION["path"] = "security_hotel";
    $nameOfPerson=$_POST['hotel_nameOfPerson'];
    $pass=$_POST['hotel_pass'];
    $hotelName=$_POST['hotel_name'];
    $room=$_POST['hotel_room'];
    
    $data=$nameOfPerson."\n".$pass."\n".$hotelName."\n".$room;
     $TargetPath=date("d-m-y")."-".time()."hotel";
    $qr->text($data);
    $qr->qrCode(200,"qrimages/security/hotel/$TargetPath");  
}

// Student Card //
else if(isset($_POST['security_studentCard'])){
    $_SESSION["path"] = "security_studentCard";
    $name=$_POST['student_name'];
    $org=$_POST['student_uni'];
    $ph_no=$_POST['student_phone'];
    $notes=$_POST['student_course']; 
    $address=null;
    $email=null;
    $url=null;
     $TargetPath=date("d-m-y")."-".time()."student";
    $qr->contact($name, $address, $ph_no, $email, $notes, $org, $url);
    $qr->qrCode(200,"qrimages/security/studentCard/$TargetPath");  
}

// passcode //
else if(isset($_POST['security_pass'])){
    $_SESSION["path"] = "security_pass";
    $pass=$_POST['passcode'];
    $qr->text($pass);
    $TargetPath=date("d-m-y")."-".time()."password";
    $qr->qrCode(200,"qrimages/security/passcode/$TargetPath");  
}

// --------------------------------------------------------------------------------------------------------------------------------//
// --------------------------------------------------------------------------------------------------------------------------------//
// --------------------------------------------------------------------------------------------------------------------------------//
                                                     //  For card page //
// Hotel Room Cards  //
else if(isset($_POST['card_hotel'])){
    $_SESSION["path"] = "card_hotel";
    $nameOfPerson=$_POST['hotel_nameOfPerson'];
    $pass=$_POST['hotel_pass'];
    $hotelName=$_POST['hotel_name'];
    $room=$_POST['hotel_room'];
    
    $data=$nameOfPerson."\n".$pass."\n".$hotelName."\n".$room;
    $TargetPath=date("d-m-y")."-".time()."name";
    $qr->text($data);
    $qr->qrCode(200,"qrimages/card/hotel/$TargetPath");  
}

// Employee Card //
else if(isset($_POST['card_employeecard'])){
    $_SESSION["path"] = "card_employeecard";
    $name=$_POST['employ_name'];
    $address=$_POST['employ_address'];
    $ph_no=$_POST['employ_phone'];
    $notes=$_POST['employ_pos']; 
    if($address=="")
      {
        $address=null;
      }
    if($ph_no=="")
      {
        $ph_no=null;
      }    
    $org=null;
    $email=null;
    $url=null;
    $TargetPath=date("d-m-y")."-".time()."name";
    $qr->contact($name, $address, $ph_no, $email, $notes, $org, $url);
    $qr->qrCode(200,"qrimages/card/employCard/$TargetPath");  
}

// Business Card //
else if(isset($_POST['card_businesscard'])){
    $_SESSION["path"] = "card_businesscard";
    $name=$_POST['business_name'];
    $position=$_POST['business_pos'];
    $ph_no=$_POST['business_phone'];
    $address=$_POST['business_address']; 
    $email=null;
    $org=null;
    $notes=$position;
    $url=null;
    $TargetPath=date("d-m-y")."-".time()."name";
    $qr->contact($name, $address, $ph_no, $email, $url, $BDAY, $notes);
    $qr->qrCode(200,"qrimages/card/businessCard/$TargetPath");  
}

// student card //
else if(isset($_POST['card_studentcard'])){
    $_SESSION["path"] = "card_studentcard";
    $name=$_POST['student_name'];
    $org=$_POST['student_uni'];
    $ph_no=$_POST['student_phone'];
    $notes=$_POST['student_course']; 
    $address=null;
    $email=null;
    $url=null;
    $TargetPath=date("d-m-y")."-".time()."name";
    $qr->contact($name, $address, $ph_no, $email, $notes, $org, $url);
    $qr->qrCode(200,"qrimages/card/studentCard/$TargetPath");  
}

// Entry Card //
else if(isset($_POST['card_entrycard'])){
    $_SESSION["path"] = "card_entrycard";
    $name=$_POST['entry_name'];
    $org=$_POST['entry_org'];
    $ph_no=$_POST['entry_phone'];
    $notes=$_POST['entry_loc']; 
    $address=null;
    $email=null;
    $url=null;
    $TargetPath=date("d-m-y")."-".time()."name";
    $qr->contact($name, $address, $ph_no, $email, $notes, $org, $url);
    $qr->qrCode(200,"qrimages/business/entryCard/$TargetPath");  
}

// Vcard  //
else if(isset($_POST['card_vcard'])){
    $_SESSION["path"] = "card_vcard";
    $name=$_POST['business_name'];
    $position=$_POST['business_pos'];
    $ph_no=$_POST['business_phone'];
    $address=$_POST['business_address']; 
    $email=null;
    $org=null;
    $notes=$position;
    $url=null;
    $TargetPath=date("d-m-y")."-".time()."name";
    $qr->contact($name, $address, $ph_no, $email, $url, $BDAY, $notes);
    $qr->qrCode(200,"qrimages/card/vcard/$TargetPath");  
}
// --------------------------------------------------------------------------------------------------------------------------------//
// --------------------------------------------------------------------------------------------------------------------------------//
// --------------------------------------------------------------------------------------------------------------------------------//
                                                     //  For business page //
// PRODDUCT & PACKAGING //
else if(isset($_POST['business_prodpack'])){
    $_SESSION["path"] = "prodPack";
    $name=$_POST['nameOfProdpack'];
    $dimension=$_POST['dimensionProdpack'];
    $code=$_POST['codeProdpack'];
    $color=$_POST['colorProdpack'];
    $type=$_POST['typeProdpack'];
    
    $data=$name."\n".$dimension."\n".$code."\n".$color."\n".$type;
    $TargetPath=date("d-m-y")."-".time()."name";
    $qr->text($data);
    $qr->qrCode(200,"qrimages/business/prodpack/$TargetPath");  
}

// PRODDUCT  //
else if(isset($_POST['business_prod'])){
    $_SESSION["path"] = "prod";
    $name=$_POST['company_nameProd'];
    $product=$_POST['nameProd'];
    $code=$_POST['codeProd'];
    $color=$_POST['colorProd'];
    $detail=$_POST['detailProd'];
    $price=$_POST['priceProd'];
    
    $data=$name."\n".$product."\n".$code."\n".$color."\n".$detail."\n".$price;
    $TargetPath=date("d-m-y")."-".time()."name";
    $qr->text($data);
    $qr->qrCode(200,"qrimages/business/prod/$TargetPath");  
}

// NEWS  //
else if(isset($_POST['business_news'])){
    $_SESSION["path"] = "news";
    $headline=$_POST['news_headline'];
    $detail=$_POST['news_detail'];
    $more=$_POST['news_more_detail'];
    
    $data=$headline."\n".$detail."\n".$more;
    $TargetPath=date("d-m-y")."-".time()."headline";
    $qr->text($data);
    $qr->qrCode(200,"qrimages/business/news/$TargetPath");  
}

// Employment Application Form  //
else if(isset($_POST['business_employment'])){
    $_SESSION["path"] = "employment";
    $name=$_POST['employment_name'];
    $dateOfBirth=$_POST['employment_dob'];
    $phone=$_POST['employment_phone'];
    $address=$_POST['employment_address'];
    $position=$_POST['employment_pos'];
    $salary=$_POST['employment_sal'];
    
    $data=$name."\n".$dateOfBirth."\n".$phone."\n".$address."\n".$position."\n".$salary;
    $TargetPath=date("d-m-y")."-".time()."name";
    $qr->text($data);
    $qr->qrCode(200,"qrimages/business/employment/$TargetPath");  
}

// Rental Application Form  //
else if(isset($_POST['business_rental'])){
    $_SESSION["path"] = "rental";
    $name=$_POST['rental_name'];
    $phone=$_POST['rental_phone'];
    $address=$_POST['rental_address'];
    $fee=$_POST['rental_fee'];
    
    $data=$name."\n".$phone."\n".$address."\n".$fee;
    $TargetPath=date("d-m-y")."-".time()."name";
    $qr->text($data);
    $qr->qrCode(200,"qrimages/business/rental/$TargetPath");  
}

// Membership Application Form  //
else if(isset($_POST['business_member'])){
    $_SESSION["path"] = "member";
    $name=$_POST['member_name'];
    $phone=$_POST['member_phone'];
    $detail=$_POST['member_detail'];
    $fee=$_POST['member_fee'];
    
    $data=$name."\n".$phone."\n".$detail."\n".$fee;
    $TargetPath=date("d-m-y")."-".time()."name";
    $qr->text($data);
    $qr->qrCode(200,"qrimages/business/membership/$TargetPath");  
}

// Job Application Form  //
else if(isset($_POST['business_job'])){
    $_SESSION["path"] = "job";
    $company=$_POST['job_companyname'];
    $nameOfJob=$_POST['job_name'];
    $type=$_POST['job_type'];
    $salary=$_POST['job_sal'];
    $contact=$_POST['job_contact'];
    $loc=$_POST['job_loc'];
    
    $data=$company."\n".$nameOfJob."\n".$type."\n".$salary."\n".$contact."\n".$loc;
    $TargetPath=date("d-m-y")."-".time()."nameOfJob";
    $qr->text($data);
    $qr->qrCode(200,"qrimages/business/job/$TargetPath");  
}

// Ticket  //
else if(isset($_POST['business_ticket'])){
    $_SESSION["path"] = "tickets";
    $company=$_POST['ticket_companyname'];
    $nameOfTicket=$_POST['ticket_name'];
    $type=$_POST['ticket_type'];
    $price=$_POST['ticket_price'];
    $detail=$_POST['ticket_detail'];
    
    $data=$company."\n".$nameOfTicket."\n".$type."\n".$price."\n".$detail;
    $TargetPath=date("d-m-y")."-".time()."nameOfTicket";
    $qr->text($data);
    $qr->qrCode(200,"qrimages/business/ticket/$TargetPath");  
}

// Events  //
else if(isset($_POST['business_event'])){
    $_SESSION["path"] = "events";
    $nameOfEvent=$_POST['event_name'];
    $loc=$_POST['event_loc'];
    $type=$_POST['event_type'];
    $contact=$_POST['event_contact'];
    $detail=$_POST['event_detail'];
    
    $data=$nameOfEvent."\n".$loc."\n".$type."\n".$contact."\n".$detail;
    $TargetPath=date("d-m-y")."-".time()."nameOfEvent";
    $qr->text($data);
    $qr->qrCode(200,"qrimages/business/event/$TargetPath");  
} 

// Advertisement  //
else if(isset($_POST['business_advertisement'])){
    $_SESSION["path"] = "ad";
    $title=$_POST['add_title'];
    $h1=$_POST['add_h1'];
    $h2=$_POST['add_h2'];
    $budget=$_POST['add_budget'];
    
    $data=$title."\n".$h1."\n".$h2."\n".$budget;
    $TargetPath=date("d-m-y")."-".time()."title";
    $qr->text($data);
    $qr->qrCode(200,"qrimages/business/ad/$TargetPath");  
}
 
// Brochure  //
else if(isset($_POST['business_brochure'])){
    $_SESSION["path"] = "brochure";
    $title=$_POST['brochure_title'];
    $h1=$_POST['brochure_h1'];
    $h2=$_POST['brochure_h2'];
    $budget=$_POST['brochure_budget'];
    
    $data=$title."\n".$h1."\n".$h2."\n".$budget;
    $TargetPath=date("d-m-y")."-".time()."title";
    $qr->text($data);
    $qr->qrCode(200,"qrimages/business/brochure/$TargetPath");  
}

// Flyer  //
else if(isset($_POST['business_flyer'])){
    $_SESSION["path"] = "flyer";
    $title=$_POST['flyer_title'];
    $h1=$_POST['flyer_h1'];
    $h2=$_POST['flyer_h2'];
    $budget=$_POST['flyer_budget'];
    
    $data=$title."\n".$h1."\n".$h2."\n"."budget";
    $TargetPath=date("d-m-y")."-".time().$title;
    $qr->text($data);
    $qr->qrCode(200,"qrimages/business/flyer/$TargetPath");  
}

// Label  //
else if(isset($_POST['business_label'])){
    $_SESSION["path"] = "label";
    $title=$_POST['label_title'];
    $h1=$_POST['label_h1'];
    $h2=$_POST['label_h2'];
    $budget=$_POST['label_budget'];
    
    $data=$title."\n".$h1."\n".$h2."\n"."budget";
    $TargetPath=date("d-m-y")."-".time().$title;
    $qr->text($data);
    $qr->qrCode(200,"qrimages/business/label/$TargetPath");  
}

// Banner  //
else if(isset($_POST['business_banner'])){
    $_SESSION["path"] = "banner";
    $title=$_POST['banner_title'];
    $h1=$_POST['banner_h1'];
    $h2=$_POST['banner_h2'];
    $budget=$_POST['banner_budget'];
    
    $data=$title."\n".$h1."\n".$h2."\n"."budget";
    $TargetPath=date("d-m-y")."-".time().$title;
    $qr->text($data);
    $qr->qrCode(200,"qrimages/business/banner/$TargetPath");  
}

// Promotion  //
else if(isset($_POST['business_promotion'])){
    $_SESSION["path"] = "promotion";
    $title=$_POST['promotion_title'];
    $h1=$_POST['promotion_h1'];
    $h2=$_POST['promotion_h2'];
    $budget=$_POST['promotion_budget'];
    
    $data=$title."\n".$h1."\n".$h2."\n"."budget";
    $TargetPath=date("d-m-y")."-".time().$title;
    $qr->text($data);
    $qr->qrCode(200,"qrimages/business/promotion/$TargetPath");  
}

// Coupon Code  //
else if(isset($_POST['business_coupon'])){
    $_SESSION["path"] = "coupon";
    $title=$_POST['coupon_title'];
    $code=$_POST['coupon_code'];
    $expiry=$_POST['coupon-expiry'];
    
    $data=$title."\n".$code."\n"."coupon";
    $TargetPath=date("d-m-y")."-".time().$title;
    $qr->text($data);
    $qr->qrCode(200,"qrimages/business/coupon/$TargetPath");  
}

// Business Card //
else if(isset($_POST['business_businesscard'])){
    $_SESSION["path"] = "businessCard";
    $name=$_POST['business_name'];
    $position=$_POST['business_pos'];
    $ph_no=$_POST['business_phone'];
    $address=$_POST['business_address']; 
    $email=null;
    $org=null;
    $notes=$position;
    $url=null;
    $TargetPath=date("d-m-y")."-".time()."name";
    $qr->contact($name, $address, $ph_no, $email, $url, $BDAY, $notes);
    $qr->qrCode(200,"qrimages/business/businessCard/$TargetPath");  
}

// Student Card //
else if(isset($_POST['business_studentcard'])){
    $_SESSION["path"] = "studentCard";
    $name=$_POST['student_name'];
    $org=$_POST['student_uni'];
    $ph_no=$_POST['student_phone'];
    $notes=$_POST['student_course']; 
    $address=null;
    $email=null;
    $url=null;
    $TargetPath=date("d-m-y")."-".time()."name";
    $qr->contact($name, $address, $ph_no, $email, $notes, $org, $url);
    $qr->qrCode(200,"qrimages/business/studentCard/$TargetPath");  
}

// Entry Card //
else if(isset($_POST['business_entrycard'])){
    $_SESSION["path"] = "entryCard";
    $name=$_POST['entry_name'];
    $org=$_POST['entry_org'];
    $ph_no=$_POST['entry_phone'];
    $notes=$_POST['entry_loc']; 
    $address=null;
    $email=null;
    $url=null;
    $TargetPath=date("d-m-y")."-".time()."name";
    $qr->contact($name, $address, $ph_no, $email, $notes, $org, $url);
    $qr->qrCode(200,"qrimages/business/entryCard/$TargetPath");  
}

// Employ Card //
else if(isset($_POST['business_employcard'])){
    $_SESSION["path"] = "employCard";
    $name=$_POST['employ_name'];
    $address=$_POST['employ_address'];
    $ph_no=$_POST['employ_phone'];
    $notes=$_POST['employ_pos']; 
    $org=null;
    $email=null;
    $url=null;
    $TargetPath=date("d-m-y")."-".time()."name";
    $qr->contact($name, $address, $ph_no, $email, $notes, $org, $url);
    $qr->qrCode(200,"qrimages/business/employCard/$TargetPath");  
}

else;

?>