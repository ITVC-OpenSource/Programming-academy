<?php
function getPostType($post_id) {
    $post = $GLOBALS['PDO']->query("SELECT * FROM `posts` WHERE `id` = '" . $post_id . "'")->fetch(PDO::FETCH_ASSOC);
    return $post['type'];
}
function showPost($post_id) {
    if (getPostType($post_id) == "pic") {
        $post = $GLOBALS['PDO']->query("SELECT * FROM `posts` WHERE `id` = '" . $post_id . "'")->fetch(PDO::FETCH_ASSOC);
        $post_sender = $GLOBALS['PDO']->query("SELECT * FROM `users` WHERE `id` = '" . $post['sender'] . "'")->fetch(PDO::FETCH_ASSOC);
        $sender_uname = $post_sender['uname'];
        $sender_profile = $post_sender['profile'];
        $val = $post['val'];
        $comm = explode("," , $post['comm']);
        $ecome = "";
        foreach ($comm as $a) {
            $e = explode(":" , $a);
            $s = $GLOBALS['PDO']->query("SELECT * FROM `users` WHERE `id` = '" . $e[0] . "'")->fetch(PDO::FETCH_ASSOC);
            $ecome = $ecome . "<a href='/@" . $s['uname'] . "'>@" . $s['uname'] . "</a>:<br><p>" . $e[1] . "</p>";
        }
        $rt = "
        <div class='pic-post'>
            <div class='profile-bar' style='padding: 5px;border-bottom: 1px solid rgba(219,219,219,1);'>
                <img class='img' src='${sender_profile}' width='37.5px' height='37.5px'>
                <a style='margin-left: 2.5px;' href='/@${sender_uname}'>${sender_uname}</a>
            </div>
            <div class='val'>
                <img class='pic-post-img' src='${val}'></img>
            </div>
            <div class='comments'>
                " . $ecome . "
            </div>
            <div class='send-comment'>
                <input class='form-control comm-input' style='width: calc(100% - 50px);display: inline-block;' placeholder='نظر خود را تایپ کنید...' dir='rtl' autocomplete='off'>
                <button class='comm-emoji-picker' style='border: none;background: none;display: inline-block;font-size: 35px;'><i class='bi bi-emoji-smile'></i></button>
            </div>
        </div>
        ";
        return $rt;
    } else {
        echo "Not pic!";
    }
}
?>
