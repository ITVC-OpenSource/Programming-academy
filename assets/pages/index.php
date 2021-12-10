<div class="mobileContainer p-1 d-sm-flex d-md-none">

</div>
<div class="desktopContainer d-none d-md-flex flex-column">
    <div class="stories d-flex"></div>
    <div class="posts d-flex flex-column">
        <?php
        $PDO = $GLOBALS['PDO'];
        $p = [];
        foreach ($GLOBALS["user_data"]['followings'] as $following) {
            $posts = $PDO->query("SELECT * FROM `posts` WHERE `sender` = '" . $following . "'");
            foreach ($posts as $b_post) {
                $a_post = $PDO->query("SELECT * FROM `posts` WHERE `id` = '" . $b_post['id'] . "'")->fetch(PDO::FETCH_ASSOC);
                $p[$a_post['id']] = json_encode(["time"=>$a_post["time"],"id"=>$a_post["id"]]);
            }
        }
        rsort($p);
        foreach ($p as $post) {
            echo showPost(json_decode($post)->id);
        }
        ?>
    </div>
</div>