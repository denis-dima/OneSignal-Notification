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

<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async='async'></script>
<script>
    var OneSignal = window.OneSignal || [];
    OneSignal.push(["init", {
        appId: "<?php echo ONE_SIGNAL_APP_ID?>",
        autoRegister: false, /* Set to true to automatically prompt visitors */
        subdomainName: 'SUBDOMAIN_NAME_SEE_STEP_1.4',
        safari_web_id: '<?php echo ONE_SIGNAL_SAFARI_ID ?>',
        /*
         subdomainName: Use the value you entered in step 1.4: http://imgur.com/a/f6hqN
         */
        httpPermissionRequest: {
            enable: true
        },
        notifyButton: {
            enable: true /* Set to false to hide */
        }
    }]);
</script>
