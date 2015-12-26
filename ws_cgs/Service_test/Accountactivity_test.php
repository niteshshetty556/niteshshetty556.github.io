<?php

search_Post();
//profile();
//login();
//achievement();
//news();
//events();
//book_appointment();
//feedback();
//complaint();
//images();
//videos();
//follow();
//unfollow();
//sign_up();
//logout();
//message();
//search_msg();
//message_details();
//adding_contacts();
//receipents_list();

function search_Post()
{
    $data = array("method" => "checkDuplicateEmail", "emailid" => "nshetty556@gmail.com");
    $data_string = json_encode($data);
    $ch=curl_init('http://localhost:81/cgs/index.php/registration');
    
    //   $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                                              'Content-Type: application/json',
                                              'Content-Length: ' . strlen($data_string))
                                             );
   $result = curl_exec($ch);
   $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
   $contenttype = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);
   print "Status: $httpcode" . "\n";
   print "Content-Type: $contenttype" . "\n";
   print "\n" . $result . "\n"; 
}
function profile()
{
    $data = array("method" => "profile","id" => "1","user_id" =>"1","format"=>"json");
    $data_string = json_encode($data);
    $ch=curl_init('http://localhost/india_politics_user_ws/index.php/user_c');
    
    //   $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                                              'Content-Type: application/json',
                                              'Content-Length: ' . strlen($data_string))
                                             );
   $result = curl_exec($ch);
   $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
   $contenttype = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);
   print "Status: $httpcode" . "\n";
   print "Content-Type: $contenttype" . "\n";
   print "\n" . $result . "\n"; 
}
function sign_up()
{
    $data = array("method" => "sign_up","full_name" => "nitesh","phone"=>"9902608860","email" =>"nshetty556@gmail.com","address"=>"asdf","password"=>"qwerty","format"=>"json");
    $data_string = json_encode($data);
    $ch=curl_init('http://localhost/india_politics_user_ws/index.php/user_c');
    
    //   $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                                              'Content-Type: application/json',
                                              'Content-Length: ' . strlen($data_string))
                                             );
   $result = curl_exec($ch);
   $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
   $contenttype = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);
   print "Status: $httpcode" . "\n";
   print "Content-Type: $contenttype" . "\n";
   print "\n" . $result . "\n"; 
}

//function spReset_Password() {
////    $url='http://ws.cetsuccess.com/index.php/questions';
//    $url = 'http://localhost:8080/DocNear2U_Service/index.php/accountactivity';
////        print $url;
//    // $url='http://wstest.goebasket.com/index.php/questions';
//    $data = array("method" => "spReset_password", "email"=>"a","format" => "json");
//    $data_string = json_encode($data);
//    $url .= '?' . http_build_query($data);
//    $ch = curl_init();
//    curl_setopt($ch, CURLOPT_URL, $url);
//    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//    curl_setopt($ch, CURLOPT_HEADER, false);
//    $result = curl_exec($ch);
//    $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
//    $contenttype = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);
//    print "Status: $httpcode" . "\n";
//    print "Content-Type: $contenttype" . "\n";
//    print $result;
//}
function logout()
{
    $data = array("method" => "logout","login_id"=>"2","format"=>"json");
    $data_string = json_encode($data);
    $ch=curl_init('http://localhost/india_politics_user_ws/index.php/user_c');
    
    //   $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                                              'Content-Type: application/json',
                                              'Content-Length: ' . strlen($data_string))
                                             );
   $result = curl_exec($ch);
   $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
   $contenttype = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);
   print "Status: $httpcode" . "\n";
   print "Content-Type: $contenttype" . "\n";
   print "\n" . $result . "\n"; 
}
function login()
{
    $data = array("method" => "login","politician_id" => "1","email"=>"a@gmail.com","password"=>"123","format"=>"json");
    $data_string = json_encode($data);
    $ch=curl_init('http://localhost/india_politics_user_ws/index.php/user_c');
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                                              'Content-Type: application/json',
                                              'Content-Length: ' . strlen($data_string))
                                             );
   $result = curl_exec($ch);
   $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
   $contenttype = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);
   print "Status: $httpcode" . "\n";
   print "Content-Type: $contenttype" . "\n";
   print "\n" . $result . "\n"; 
}
function book_appointment()
{
    $data = array("method" => "book_appointment","user_id" =>"1","politician_id"=>"1","message"=>"hii","filename"=>"g12.jpg","format"=>"json");
    $data_string = json_encode($data);
    $ch=curl_init('http://localhost/india_politics_user_ws/index.php/user_c');
    
    //   $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                                              'Content-Type: application/json',
                                              'Content-Length: ' . strlen($data_string))
                                             );
   $result = curl_exec($ch);
   $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
   $contenttype = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);
   print "Status: $httpcode" . "\n";
   print "Content-Type: $contenttype" . "\n";
   print "\n" . $result . "\n"; 
}
function unfollow()
{
    $data = array("method" => "unfollow","id" =>"1","format"=>"json");
    $data_string = json_encode($data);
    $ch=curl_init('http://localhost/india_politics_user_ws/index.php/user_c');
    
    //   $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                                              'Content-Type: application/json',
                                              'Content-Length: ' . strlen($data_string))
                                             );
   $result = curl_exec($ch);
   $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
   $contenttype = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);
   print "Status: $httpcode" . "\n";
   print "Content-Type: $contenttype" . "\n";
   print "\n" . $result . "\n"; 
}
function feedback()
{
    $data = array("method" => "feedback","id" =>"1","politician_id"=>"1","message"=>"hii","format"=>"json");
    $data_string = json_encode($data);
    $ch=curl_init('http://localhost/india_politics_user_ws/index.php/user_c');
    
    //   $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                                              'Content-Type: application/json',
                                              'Content-Length: ' . strlen($data_string))
                                             );
   $result = curl_exec($ch);
   $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
   $contenttype = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);
   print "Status: $httpcode" . "\n";
   print "Content-Type: $contenttype" . "\n";
   print "\n" . $result . "\n"; 
}
function complaint()
{
    $data = array("method" => "complaint","user_id" =>"1","politician_id"=>"1","message"=>"hii","filename"=>"asd","format"=>"json");
    $data_string = json_encode($data);
    $ch=curl_init('http://localhost/india_politics_user_ws/index.php/user_c');
    
    //   $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                                              'Content-Type: application/json',
                                              'Content-Length: ' . strlen($data_string))
                                             );
   $result = curl_exec($ch);
   $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
   $contenttype = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);
   print "Status: $httpcode" . "\n";
   print "Content-Type: $contenttype" . "\n";
   print "\n" . $result . "\n"; 
}
function follow()
{
    $data = array("method" => "follow","user_id" =>"1","politician_id"=>"1","format"=>"json");
    $data_string = json_encode($data);
    $ch=curl_init('http://localhost/india_politics_user_ws/index.php/user_c');
    
    //   $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                                              'Content-Type: application/json',
                                              'Content-Length: ' . strlen($data_string))
                                             );
   $result = curl_exec($ch);
   $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
   $contenttype = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);
   print "Status: $httpcode" . "\n";
   print "Content-Type: $contenttype" . "\n";
   print "\n" . $result . "\n"; 
}

function achievement()
{
    $data = array("method" => "achievement","politician_id" => "1","format"=>"json");
    $data_string = json_encode($data);
    $ch=curl_init('http://localhost/india_politics_user_ws/index.php/user_c');
    
    //   $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                                              'Content-Type: application/json',
                                              'Content-Length: ' . strlen($data_string))
                                             );
   $result = curl_exec($ch);
   $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
   $contenttype = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);
   print "Status: $httpcode" . "\n";
   print "Content-Type: $contenttype" . "\n";
   print "\n" . $result . "\n"; 
}
function images()
{
    $data = array("method" => "images","politician_id" => "1","format"=>"json");
    $data_string = json_encode($data);
    $ch=curl_init('http://localhost/india_politics_user_ws/index.php/user_c');
    
    //   $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                                              'Content-Type: application/json',
                                              'Content-Length: ' . strlen($data_string))
                                             );
   $result = curl_exec($ch);
   $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
   $contenttype = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);
   print "Status: $httpcode" . "\n";
   print "Content-Type: $contenttype" . "\n";
   print "\n" . $result . "\n"; 
}

function videos()
{
    $data = array("method" => "videos","politician_id" => "1","format"=>"json");
    $data_string = json_encode($data);
    $ch=curl_init('http://localhost/india_politics_user_ws/index.php/user_c');
    
    //   $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                                              'Content-Type: application/json',
                                              'Content-Length: ' . strlen($data_string))
                                             );
   $result = curl_exec($ch);
   $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
   $contenttype = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);
   print "Status: $httpcode" . "\n";
   print "Content-Type: $contenttype" . "\n";
   print "\n" . $result . "\n"; 
}

function news()
{
    $data = array("method" => "news","politician_id" => "1","format"=>"json");
    $data_string = json_encode($data);
    $ch=curl_init('http://localhost/india_politics_user_ws/index.php/user_c');
    
    //   $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                                              'Content-Type: application/json',
                                              'Content-Length: ' . strlen($data_string))
                                             );
   $result = curl_exec($ch);
   $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
   $contenttype = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);
   print "Status: $httpcode" . "\n";
   print "Content-Type: $contenttype" . "\n";
   print "\n" . $result . "\n"; 
}
function message()
{
    $data = array("method" => "message","user_id" => "1","limit" => "6","offset" => "1","format"=>"json");
    $data_string = json_encode($data);
    $ch=curl_init('http://localhost:81/india_politics_user_ws/index.php/user_c');
    
    //   $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                                              'Content-Type: application/json',
                                              'Content-Length: ' . strlen($data_string))
                                             );
   $result = curl_exec($ch);
   $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
   $contenttype = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);
   print "Status: $httpcode" . "\n";
   print "Content-Type: $contenttype" . "\n";
   print "\n" . $result . "\n"; 
}
function search_msg()
{
    $data = array("method" => "search_msg","user_id" => "1","date"=>"2015-08-13","limit"=>"4","offset"=>"0","format"=>"json");
    $data_string = json_encode($data);
    $ch=curl_init('http://localhost:81/india_politics_user_ws/index.php/user_c');
    
    //   $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                                              'Content-Type: application/json',
                                              'Content-Length: ' . strlen($data_string))
                                             );
   $result = curl_exec($ch);
   $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
   $contenttype = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);
   print "Status: $httpcode" . "\n";
   print "Content-Type: $contenttype" . "\n";
   print "\n" . $result . "\n"; 
}
function message_details()
{
    $data = array("method" => "message_details","id" => "1","format"=>"json");
    $data_string = json_encode($data);
    $ch=curl_init('http://localhost/india_politics_user_ws/index.php/user_c');
    
    //   $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                                              'Content-Type: application/json',
                                              'Content-Length: ' . strlen($data_string))
                                             );
   $result = curl_exec($ch);
   $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
   $contenttype = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);
   print "Status: $httpcode" . "\n";
   print "Content-Type: $contenttype" . "\n";
   print "\n" . $result . "\n"; 
}

function adding_contacts()
{
   $data = array("method" => "adding_contacts","user_id" => "1","name"=>"ddd" ,"email"=>"d@gmail.com" ,"phone"=>"32423435" ,"format"=>"json");
    $data_string = json_encode($data);
    $ch=curl_init('http://localhost:81/indiapolitics_ws/index.php/user_c');
    
    //   $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                                              'Content-Type: application/json',
                                              'Content-Length: ' . strlen($data_string))
                                             );
   $result = curl_exec($ch);
   $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
   $contenttype = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);
   print "Status: $httpcode" . "\n";
   print "Content-Type: $contenttype" . "\n";
   print "\n" . $result . "\n"; 
}

function receipents_list()
{
   $data = array("method" => "receipents_list","user_id" => "1","format"=>"json");
    $data_string = json_encode($data);
    $ch=curl_init('http://localhost:81/indiapolitics_ws/index.php/user_c');
    
    //   $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                                              'Content-Type: application/json',
                                              'Content-Length: ' . strlen($data_string))
                                             );
   $result = curl_exec($ch);
   $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
   $contenttype = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);
   print "Status: $httpcode" . "\n";
   print "Content-Type: $contenttype" . "\n";
   print "\n" . $result . "\n"; 
}
function events()
{
    $data = array("method" => "events","politician_id" => "1","format"=>"json");
    $data_string = json_encode($data);
    $ch=curl_init('http://localhost/india_politics_user_ws/index.php/user_c');
    
    //   $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                                              'Content-Type: application/json',
                                              'Content-Length: ' . strlen($data_string))
                                             );
   $result = curl_exec($ch);
   $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
   $contenttype = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);
   print "Status: $httpcode" . "\n";
   print "Content-Type: $contenttype" . "\n";
   print "\n" . $result . "\n"; 
}