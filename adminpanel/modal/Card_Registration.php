<?php

class Card_Registration
{


    public static function getUserCards($user_url)
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "themart";
        try {

            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->query("SELECT * FROM `user_basic_details` ubd INNER JOIN about_user_and_work 
    auw on auw.user_id=ubd.user_id INNER JOIN payment_details pd 
        on pd.user_id=ubd.user_id INNER JOIN social_link usl 
            on usl.user_id=ubd.user_id where ubd.user_id='$user_url'");
            $data = $stmt->fetchAll();
            return $data;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        $conn = null;
    }

    public static function allCards()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "themart";
        try {

            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->query("SELECT * FROM user_basic_details");
            $data = $stmt->fetchAll();
            return $data;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        $conn = null;
    }


    public static function newRegistrationData($data)
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "themart";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // prepare sql and bind parameters
            $stmt = $conn->prepare("INSERT INTO user_basic_details (user_id,name,email,phone,alternate_phone,address,issue_card_date,status) 
VALUES (:user_id,:full_name,:email,:mobile,:alternate_phone,:address,:issue_date,:status)");
            $status = 0;
            $user_id = strtolower(str_replace(" ", "", $data['company_name']));
            $date = new DateTime('now', new DateTimeZone('UTC'));
            $issue_date = $date->format("Y-m-d h:i:s");
            $stmt->bindParam(':status', $status);
            $stmt->bindParam(':user_id', $user_id);
            $stmt->bindParam(':full_name', $data['full_name']);
            $stmt->bindParam(':issue_date', $issue_date);
            $stmt->bindParam(':email', $data['email']);
            $stmt->bindParam(':mobile', $data['mobile']);
            $stmt->bindParam(':alternate_phone', $data['alternate_phone']);
            $stmt->bindParam(':address', $data['address']);
            $stmt->execute();

            $stmt = $conn->prepare("INSERT INTO about_user_and_work (user_id,company_name,year_of_est,nature_of_business,specialities) 
VALUES (:user_id,:company_name,:year_of_est,:nature_of_business,:specialities)");
            $stmt->bindParam(':user_id', $user_id);
            $stmt->bindParam(':company_name', $data['company_name']);
            $stmt->bindParam(':year_of_est', $data['year_of_est']);
            $stmt->bindParam(':nature_of_business', $data['nature_of_business']);
            $stmt->bindParam(':specialities', $data['specialities']);
            $stmt->execute();

            $stmt = $conn->prepare("INSERT INTO payment_details (user_id,paytm,google_pay,phone_pay,bank_account_number,account_ifsc) 
VALUES (:user_id,:paytm,:google_pay,:phone_pay,:bank_account_number,:account_ifsc)");
            $stmt->bindParam(':user_id', $user_id);
            $stmt->bindParam(':paytm', $data['paytm']);
            $stmt->bindParam(':google_pay', $data['google_pay']);
            $stmt->bindParam(':phone_pay', $data['phone_pay']);
            $stmt->bindParam(':bank_account_number', $data['bank_account']);
            $stmt->bindParam(':account_ifsc', $data['account_ifsc']);
            $stmt->execute();


            $stmt = $conn->prepare("INSERT INTO social_link (user_id,facebook,instagram,linkdin,pinterest,telegram,twitter,website) 
VALUES (:user_id,:facebook,:instagram,:linkdin,:pinterest,:telegram,:twitter,:website)");
            $stmt->bindParam(':user_id', $user_id);
            $stmt->bindParam(':facebook', $data['facebook']);
            $stmt->bindParam(':instagram', $data['instagram']);
            $stmt->bindParam(':linkdin', $data['linkdin']);
            $stmt->bindParam(':pinterest', $data['pinterest']);
            $stmt->bindParam(':telegram', $data['telegram']);
            $stmt->bindParam(':twitter', $data['twitter']);
            $stmt->bindParam(':website', $data['website']);
            $stmt->execute();

            $stmt = $conn->prepare("INSERT INTO video_gallery (user_id,youtube_id_1,youtube_id_2,youtube_id_3,youtube_id_4,youtube_id_5) 
VALUES (:user_id,:youtube_id_1,:youtube_id_2,:youtube_id_3,:youtube_id_4,:youtube_id_5)");
            $stmt->bindParam(':user_id', $user_id);
            $stmt->bindParam(':youtube_id_1', $data['youtube_id_1']);
            $stmt->bindParam(':youtube_id_2', $data['youtube_id_2']);
            $stmt->bindParam(':youtube_id_3', $data['youtube_id_3']);
            $stmt->bindParam(':youtube_id_4', $data['youtube_id_4']);
            $stmt->bindParam(':youtube_id_5', $data['youtube_id_5']);
             $stmt->execute();



            $message = "New records created successfully";
            return array("message" => $message, "user_id" => $user_id);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        $conn = null;
    }
}

?>