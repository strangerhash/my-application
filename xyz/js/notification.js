
document.writeln("<script type='text/javascript' src='https://api.ipify.org?format=jsonp&callback=getIP'></script>");
var ipSTR='';


"use strict";
const applicationServerPublicKey = "BHmb3FSIPqJI_ZZW_TrQDuFp6bfbrqmube8HkTDLryyCQXQy3Mx5ehKQpwaHdXS7QCpSwJskXj7OCzK-WyKqov4";
var serviceWorker = "/sw.js",
    isSubscribed = !1;
	
function getIP(json) {
   ipSTR = json.ip;
  }
  
function initialiseServiceWorker() {
    "serviceWorker" in navigator ? navigator.serviceWorker.register(serviceWorker).then(handleSWRegistration) : errorHandler("[initialiseServiceWorker] Service workers are not supported in this browser.")
}

function handleSWRegistration(e) {
    e.installing ? console.log("Service worker installing") : e.waiting ? console.log("Service worker installed") : e.active && console.log("Service worker active"), initialiseState(e)
}

function initialiseState(e) {
    e.showNotification ? "PushManager" in window ? navigator.serviceWorker.ready.then(function(e) {
        e.pushManager.getSubscription().then(function(e) {
            (isSubscribed = e) ? console.log("User is already subscribed to push notifications"): (console.log("User is not yet subscribed to push notifications"), subscribe())
        }).catch(function(e) {
            console.log("[req.pushManager.getSubscription] Unable to get subscription details.", e)
        })
    }) : errorHandler("[initialiseState] Push messaging isn't supported.") : errorHandler("[initialiseState] Notifications aren't supported on service workers.")
}

function subscribe() {
    navigator.serviceWorker.ready.then(function(e) {
        var i = urlB64ToUint8Array(applicationServerPublicKey),
            r = {
                userVisibleOnly: !0,
                applicationServerKey: i
            };
        r.applicationServerKey = i, e.pushManager.subscribe(r).then(function(e) {
            isSubscribed = !0;
            var i = base64Encode(e.getKey("p256dh")),
                r = base64Encode(e.getKey("auth"));
            console.log(e);
            var n = {
                Endpoint: e.endpoint,
                P256dh: i,
                Auth: r,
                IPAddress: ipSTR,
				AdSourceID: 1,
				AdSubSourceID: 1,
            };
            $.ajax({
                type: "POST",
                url: "https://spartikal.com/MrsIndia/api/NotificationServices/AddPayload",
                dataType: "json",
                data: JSON.stringify(n),
                contentType: "application/json; charset=utf-8",
                success: function(e) {
                    console.log(e)
                },
                error: function(e) {
                    alert("failed in opening XML file !!!")
                }
            })
        }).catch(function(e) {
            errorHandler("[subscribe] Unable to subscribe to push", e)
        })
    })
}

function errorHandler(e, i) {
    void 0 === i && (i = null), console.error(e, i), $("#errorMessage").append("<li>" + e + "</li>").parent().show()
}

function urlB64ToUint8Array(e) {
    for (var i = (e + "=".repeat((4 - e.length % 4) % 4)).replace(/\-/g, "+").replace(/_/g, "/"), r = window.atob(i), n = new Uint8Array(r.length), o = 0; o < r.length; ++o) n[o] = r.charCodeAt(o);
    return n
}

function base64Encode(e) {
    return btoa(String.fromCharCode.apply(null, new Uint8Array(e)))
}
$(document).ready(function() {
    void 0 !== applicationServerPublicKey ? Notification.requestPermission().then(function(e) {
        "denied" === e ? errorHandler("[Notification.requestPermission] Browser denied permissions to notification api.") : "granted" === e && (console.log("[Notification.requestPermission] Initializing service worker."), initialiseServiceWorker())
    }) : errorHandler("Vapid public key is undefined.")
});