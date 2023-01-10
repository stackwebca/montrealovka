<?php
header('Content-Type: text/html; charset=UTF-8');

$host = "localhost";
$user = "montrealovka_mvkadmin";
$pass = "iloveolegtymoshenko!";
$db = "montrealovka_mvkacms";

$log_username = "";
$log_password = "";
$path_parts = pathinfo($_SERVER['PHP_SELF']); //get path info to echo page names
$errors = array();
$conn = mysqli_connect("$host", "$user", "$pass", "$db");
$conn->set_charset('utf8');
$forumPostMSG = "";
$_SESSION['forumPostMSG'] = $forumPostMSG;

if (!isset($_SESSION['adResults'])) {
    if ($adnumquery = mysqli_query($conn, "SELECT * FROM site_usradverts")) {
        $_SESSION['adResults'] = mysqli_num_rows($adnumquery);
    } else {
    }
}

// REGISTER USER
if (isset($_POST['register'])) {

    // receive all input values from the form
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
    $reg_question = mysqli_real_escape_string($conn, $_POST['reg_question']);
    $reg_answer = mysqli_real_escape_string($conn, $_POST['reg_answer']);
    $_SESSION["userName"] = mysqli_real_escape_string($conn, $_POST['username']);

    $query = "SELECT * FROM register WHERE username = '$username'";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
        }
        echo "<h3 class='text-danger text-center' style='margin-top:13rem;'>" . "Имя пользователя занято</h3>
            <div class='text-center'><a type='submit' href='index.php' class='btn btn-danger' style='margin-bottom:.5em;'>Попробуй еще раз</a>&nbsp&nbsp&nbsp
            <a type='submit' href='remindpassword.php' class='btn btn-info' style='margin-bottom:.5em;'>Восстановить пароль</a></div>";
    } else {
        $query = "SELECT * FROM register WHERE email = '$email'";
        $result = $conn->query($query);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
            }
            echo "<h3 class='text-danger text-center' style='margin-top:13rem;'>" . "Электронная почта уже зарегистрирована</h3>
            <div class='text-center'><a type='submit' href='logout.php' class='btn btn-danger' style='margin-bottom:.5em;'>Войти вместо</a>&nbsp&nbsp&nbsp
            <a type='submit' href='remindpassword.php' class='btn btn-info' style='margin-bottom:.5em;'>Восстановить пароль</a></div>";
            //            header("Location: logout.php");
        } else {
            if ($password != $password_1) {
                echo "<h3 class='text-danger text-center' style='margin-top:7rem;'>" . "Пароли должны совпадать</h3>
                    <p class='h4 text-center'>" . "Пожалуйста, попробуйте снова</p>
                    <div class='text-center'><a type='submit' href='index.php' class='btn btn-danger' style='margin-bottom:.5em;'>Закрыть сообщение</a></div>";
            } else {
                if (count($errors) == 0) {
                    $password = md5($password); //encrypt the password before saving in the database
                    $query = "INSERT INTO register (username, email, password, reg_question, reg_answer) 
					  VALUES('$username', '$email', '$password', '$reg_question', '$reg_answer')";
                    mysqli_query($conn, $query);
                    $_SESSION['userName'] = $username;

                    echo "<h3 class='text-success text-center' style='margin-top:7rem;'>" . "Регистрация прошла успешно</h3>
                    <p class='h4 text-center'>" . "Добро пожаловать в Русский хаб - Монреаловку!</p>
                    <div class='text-center'><a type='submit' href='profile.php' class='btn btn-success' style='margin-bottom:.5em;'>Закрыть сообщение</a></div>";
                } else {
                    echo "<h3 class='text-danger text-center'>" . "Регистрация не прошла.</h3> <br> ";
                }
                $userName = "";
                $email = "";
                $password_1 = "";
                $password_2 = "";
            }
        }
    }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
    $log_username = mysqli_real_escape_string($conn, $_POST['log_username']);
    $log_password = mysqli_real_escape_string($conn, md5($_POST['log_password']));

    $query = "SELECT * FROM register WHERE username = '$log_username' && password = '$log_password'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $_SESSION["userName"] = $log_username;
        $log_password = "";
    } else {
        echo "<h3 class='text-danger text-center' style='margin-top:13rem;'>" . "Имя пользователя или пароль неверны, попробуйте еще раз.</h3>
            <div class='text-center'><a type='submit' href='index.php' class='btn btn-danger' style='margin-bottom:.5em;'>Закрыть сообщение</a>&nbsp&nbsp&nbsp
            <a type='submit' href='remindpassword.php' class='btn btn-info' style='margin-bottom:.5em;'>Восстановить пароль</a></div>";
        $log_password = "";
        $log_username = "";
    }
}

// FORUM POSTING
if (isset($_POST['create_post'])) {
    $post_cat = htmlspecialchars($_POST['post_category']);
    $post_title = htmlspecialchars($_POST['post_title']);
    $post_content = htmlspecialchars($_POST['post_content']);
    $post_user = htmlspecialchars($_SESSION["userName"]);
    $forum_postdate = date('Y-m-d H:i:s');
    $status = "";

    $query = mysqli_query($conn, "INSERT INTO forum (post_date, post_user, post_category, post_title, post_content) VALUES ('$forum_postdate','$post_user', '$post_cat', '$post_title', '$post_content')");

    if ($query) {
        $forumPostMSG = 'сообщение создано';
        $post_cat = "";
        $post_title = "";
        $post_content = "";
        $post_user = "";
        $forum_postdate = "";
        $status = "";
        echo "<h3 class='text-success text-center' style='margin-top:13rem;'>" . "Сообщение успешно</h3>
            <div class='text-center'><a type='submit' href='index.php' class='btn btn-success' style='margin-bottom:.5em;'>Закрыть сообщение</a>&nbsp&nbsp&nbsp";
    } else {
        $forumPostMSG = 'что-то пошло не так';
    }
}

// AD POSTING NEW
if (isset($_POST['create_advert'])) {
    $ad_user = mysqli_real_escape_string($conn, $_SESSION["userName"]);
    $ad_category = mysqli_real_escape_string($conn, $_POST['main-adcategory']);
    $ad_subcategory = mysqli_real_escape_string($conn, $_POST['ad-subcategory']);
    $ad_reqtype = mysqli_real_escape_string($conn, $_POST['ad-reqtype']);
    $ad_reqtypedataset = $ad_category . $ad_subcategory . preg_replace("/[^a-zA-Z]+/", "", (mysqli_real_escape_string($conn, $_POST['ad-reqtype'])));
    $ad_postdate = date('Y-m-d H:i:s');
    $ad_busname = mysqli_real_escape_string($conn, $_POST['ad-busname']);
    $ad_email = mysqli_real_escape_string($conn, $_POST['ad-email']);
    $ad_tel = mysqli_real_escape_string($conn, $_POST['ad-tel']);
    $ad_title = mysqli_real_escape_string($conn, $_POST['ad-title']);
    $ad_content = mysqli_real_escape_string($conn, $_POST['ad-content']);
    $ad_subscription_type = mysqli_real_escape_string($conn, 'basic');
    $ad_subdataset = preg_replace("/[^a-zA-Z]+/", "", ($ad_category . $ad_subcategory));
    $ad_categoryreqtype = ($ad_category . $ad_reqtype);
    $numAdPostRule = $_SESSION["userName"];
    //Later we can implement subscription type for ads if we want to monetize for now, basic is default
    //Later we can discuss paypal instant transfer payments
    //later we can discuss images, either uploaded, or links, links are preferred because no cost to server for hosting them

    $query = "SELECT * FROM site_usradverts WHERE ad_user = '$numAdPostRule'";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
        }
        echo "<h3 class='text-danger text-center' style='margin-top:13rem;'>" . "Вам разрешено только 1 активное объявление</h3>
            <p class='h4 text-center'>" . "Вы можете удалить существующее объявление и создать новое на странице профиля в любое время</p>
            <div class='text-center'><a type='submit' href='index.php' class='btn btn-danger' style='margin-bottom:.5em;'>Закрыть сообщение</a></div>";
    } else {
        $query = mysqli_query($conn, "INSERT INTO site_usradverts (ad_user, ad_category, ad_subcategory, ad_subdataset, ad_reqtype, ad_reqtypedataset, ad_postdate, ad_busname, ad_email, ad_tel, ad_title, ad_content, ad_subscription_type) VALUES ('$ad_user', '$ad_category', '$ad_subcategory', '$ad_subdataset', '$ad_reqtype', '$ad_reqtypedataset', '$ad_postdate', '$ad_busname', '$ad_email', '$ad_tel', '$ad_title', '$ad_content', '$ad_subscription_type')");
        if ($query) {
            echo "<h3 class='text-success text-center' style='margin-top:13rem;'>" . "Объявление успешно размещено!</h3>
            <p class='h4 text-center'>" . "Ваше объявление можно удалить, перейдя на страницу профиля в любое время</p>
            <div class='text-center'><a type='submit' href='index.php' class='btn btn-success' style='margin-bottom:.5em;'>Закрыть сообщение</a></div>";
            $ad_user = "";
            $ad_category = "";
            $ad_subcategory = "";
            $ad_subdataset = "";
            $ad_reqtype = "";
            $ad_reqdataset = "";
            $ad_postdate = "";
            $ad_busname = "";
            $ad_email = "";
            $ad_tel = "";
            $ad_title = "";
            $ad_content = "";
            $ad_subscription_type = "";
        } else {
            echo "что-то пошло не так";
        }
    }
}

if (isset($_POST['Email'])) {

    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "noreply@montrealovka.com";
    $email_subject = "Contact Form Message";

    function problem($error)
    {
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br><br>";
        echo $error . "<br><br>";
        echo "Please go back and fix these errors.<br><br>";
        die();
    }

    // validation expected data exists
    if (
        !isset($_POST['Name']) ||
        !isset($_POST['Email']) ||
        !isset($_POST['Message'])
    ) {
        problem('We are sorry, but there appears to be a problem with the form content that you submitted.');
    }

    $name = $_POST['Name']; // required
    $email = $_POST['Email']; // required
    $message = $_POST['Message']; // required

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if (!preg_match($email_exp, $email)) {
        $error_message .= 'The Email address you entered does not appear to be valid.<br>';
    }

    $string_exp = "/^[A-Za-z .'-]+$/";
    if (!preg_match($string_exp, $name)) {
        $error_message .= 'The Name you entered does not appear to be valid.<br>';
    }

    if (strlen($message) < 2) {
        $error_message .= 'The Message you entered do not appear to be valid.<br>';
    }

    if (strlen($error_message) > 0) {
        problem($error_message);
    }

    $email_message = "Form details below.\n\n";

    function clean_string($string)
    {
        $bad = array("content-type", "bcc:", "to:", "cc:", "href");
        return str_replace($bad, "", $string);
    }

    $email_message .= "Name: " . clean_string($name) . "\n";
    $email_message .= "Email: " . clean_string($email) . "\n";
    $email_message .= "Message: " . clean_string($message) . "\n";

    // create email headers
    $headers = 'From: ' . $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);
?>
<!-- include your success message below -->
Message sent successfully.
<?php
}

// Update Email
if (isset($_POST['newEmail'])) {
    $username1 = $_SESSION["userName"];
    // receive all input values from the form
    $updateEmail = mysqli_real_escape_string($conn, $_POST['updateEmail']);
    $updateEmail2 = mysqli_real_escape_string($conn, $_POST['updateEmail2']);

    $errors = "";

    if ($updateEmail == $updateEmail2) {
        $query = "UPDATE register SET email='$updateEmail' WHERE username = '$username1'";
        mysqli_query($conn, $query);
        echo "<h3 class='text-success text-center' style='margin-top:7rem;'>" . "Регистрация прошла успешно</h3>
                    <p class='h4 text-center'>" . "Email Updated Successfully</p>
                    <div class='text-center'><a type='submit' href='profile.php' class='btn btn-success' style='margin-bottom:.5em;'>Закрыть сообщение</a></div>";
    } else {
        echo "<h3 class='text-success text-center' style='margin-top:7rem;'>" . "Emails Must Match </h3>";
        echo "<div class='text-center'><a type='submit' href='profile.php' class='btn btn-danger' style='margin-bottom:.5em;'>Закрыть сообщение</a></div>";
    }
}
// Update Password
if (isset($_POST['newPW'])) {
    $username1 = $_SESSION["userName"];
    // receive all input values from the form
    $updatePW = mysqli_real_escape_string($conn, $_POST['updatePW']);
    $updatePW2 = mysqli_real_escape_string($conn, $_POST['updatePW2']);

    $errors = "";

    if ($updatePW == $updatePW2) {
        $query = "UPDATE register SET password='$updatePW' WHERE username = '$username1'";
        mysqli_query($conn, $query);
        echo "<h3 class='text-success text-center' style='margin-top:7rem;'>" . "Success</h3>
                    <p class='h4 text-center'>" . "Password Updated!</p>
                    <div class='text-center'><a type='submit' href='profile.php' class='btn btn-success' style='margin-bottom:.5em;'>Закрыть сообщение</a></div>";
    } else {
        echo "<h3 class='text-success text-center' style='margin-top:7rem;'>" . "Passwords Must Match </h3>";
        echo "<div class='text-center'><a type='submit' href='profile.php' class='btn btn-danger' style='margin-bottom:.5em;'>Закрыть сообщение</a></div>";
    }
}

// SIGN TO NEWSLETTER
if (isset($_POST['joinNewsletter'])) {
    // receive all input values from the form
    $news_signupName = mysqli_real_escape_string($conn, $_POST['news_signupName']);
    $news_signupEmail = mysqli_real_escape_string($conn, $_POST['news_signupEmail']);
    $subscribed = date('Y-m-d H:i:s');

    $query = "SELECT * FROM news_subscription WHERE email = '$news_signupEmail'";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
        }
        echo "<h3 class='text-danger text-center' style='margin-top:13rem;'>" . "You Have Previously Signed Up!</h3>
                    <p class='h4 text-center'>" . "We don't want to spam you so you can only sign up once, thanks!</p>
                    <div class='text-center'><a type='submit' href='index.php' class='btn btn-danger' style='margin-bottom:.5em;'>Закрыть сообщение</a>&nbsp&nbsp&nbsp</div>";
    } else {

        $query = "INSERT INTO news_subscription (name, email, sub_date) 
					  VALUES('$news_signupName', '$news_signupEmail', '$subscribed')";
        mysqli_query($conn, $query);

        echo "<h3 class='text-success text-center' style='margin-top:13rem;'>" . "Successfully Subcribed!</h3>
    <p class='h4 text-center'>" . "You can opt out at anytime by contacting us.</p>
    <div class='text-center'><a type='submit' href='index.php' class='btn btn-success' style='margin-bottom:.5em;'>Закрыть сообщение</a></div>";
    }
}

// USER POLLS
if (isset($_POST['vote'])) {
    // receive all input values from the form
    $votePollID = mysqli_real_escape_string($conn, $_SESSION['currPoll']);
    $voteCasted = mysqli_real_escape_string($conn, $_POST['pollOptions']);
    $voteDate = date('Y-m-d H:i:s');

    $query = "INSERT INTO poll_results (voted_id, poll_id, vote_casted, voted_date) 
					  VALUES('', '$votePollID', '$voteCasted', '$voteDate')";
    mysqli_query($conn, $query);
    echo "<h3 class='text-success text-center' style='margin-top:13rem;'>" . "Successfully Voted!</h3>
                        <p class='h4 text-center'>" . "Thank you, Your Opinion Counts!</p>
                        <div class='text-center'><a type='submit' href='index.php' class='btn btn-success' style='margin-bottom:.5em;'>Закрыть сообщение</a></div>";
}
?>