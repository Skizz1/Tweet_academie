<?php
require_once("../message/M_boxMail.php");
require_once("../profile/M_profile.php");
$MboxMail = new MboxMail;

$id = $_POST["user"];
$msg = $MboxMail->boxMail($id);
?>
<div class="popup-box chat-popup" id="qnimate">
    <div class="popup-head">

        <div class="popup-head-left pull-left">
            <img class="miniature" src="public/css/images/index.png" alt="iamgurdeeposahan">
            <span class="user"><?php echo $profile->getField($id,'login') ?></span>
        </div>
        <div class="popup-head-right pull-right">
            <button data-widget="remove" id="removeClass" class="chat-header-button pull-right off" type="button">
                <i class="glyphicon glyphicon-off"></i>
            </button>
        </div>
    </div>

    <div class="popup-messages">
        <div class="direct-chat-messages">

            <div class="chat-box-single-line">
                <abbr class="timestamp">11 Février 2016</abbr>
            </div>

            <div class="direct-chat-msg doted-border">
                <div class="direct-chat-info clearfix">
                    <span class="direct-chat-name pull-left">Osahan</span>
                </div>
                
<?php
                $dest = "";
                foreach ($msg as $key => $value)
                {
                    $dest = $value->destinataire_id;
                    $exp = $value->expediteur_id;
                    ?>
                    <img alt="message user image" src="public/css/images/users/<?php  echo $value->expediteur_id ?>.png" class="direct-chat-img">
                    <!-- contenue du mail -->
                    <div class="direct-chat-text">
                        <?php echo $value->content; ?>
                    </div>
                    <div class="direct-chat-info clearfix">
                        <span class="direct-chat-timestamp pull-right">00h20</span>
                    </div>
                    <?php
                }
                ?>
            </div>

        </div>
    </div>
<!-- envoie msg -->
    <div class="popup-messages-footer">      
             <form method="POST" action="#">
                <textarea id="status_message" placeholder="Ecrivez votre message..." rows="10" cols="40" name="message"></textarea>
                <button id='Ajax-envoie' data-id='<?php echo $exp ?>' class="bg_none pull-right"><i class="glyphicon glyphicon-thumbs-up"></i></button>
            </form>
    </div>
</div>