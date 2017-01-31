<?php
/**
 * Created by Sevio Solutions.
 * User: Denis DIMA
 * Product: OneSignal-Notification
 * Date: 31.01.2017
 * Time: 13:19
 * All rights and copyrights are owned by Sevio Solutions®
 */
?>

<link rel="manifest" href="/manifest.json">
<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async='async'></script>
<script>
    var OneSignal = window.OneSignal || [];
    OneSignal.push(["init", {
        appId: "<?php echo ONE_SIGNAL_APP_ID?>",
        autoRegister: false, /* Set to true to automatically prompt visitors */
        safari_web_id: '<?php echo ONE_SIGNAL_SAFARI_ID ?>',

        httpPermissionRequest: {
            enable: true
        },
        notifyButton: {
            enable: true /* Set to false to hide */
        }
    }]);
</script>