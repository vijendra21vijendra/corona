// here i will add event listern just before sending request
chrome.webRequest.onBeforeRequest.addListener(
  function (details) {
    return {
      cancel: true,
    };
  },
  {
    urls: ["*://*.zedo.com/*", "*://*.pornhub.com/*", "*://*.xvideos.com/*"],
  },
  ["blocking"]
);
